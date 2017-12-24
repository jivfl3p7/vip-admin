<?php

namespace App\Http\Controllers;

use App\Confirmation;
use App\Events\ConfirmationGenerated;
use App\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ConfirmationsController extends Controller
{
    public function createConfirmation($public_id)
    {
        // Retrieve order from which we are creating the Confirmation
        $order = Order::where([
            'public_id' => $public_id,
            'user_id'   => Auth::id(),
        ])->get()->first();

        // Check if Order with given public ID exists
        if (!$order) {
            flash()->error('Could not find order with ID #'.$public_id);

            return redirect()->route('home');
        }

        // Retrieve confirmation count for given order
        $confirmationCount = $order->confirmation()->count();

        // Check if confirmation exists first
        if ($confirmationCount != 0) {
            flash()->error('We already have a confirmation for this order is our database, please contact support!');

            return redirect()->route('home');
        }

        // Check if steam order is accepted
        $steamOrder = $order->orderable()->first();
        if (!$steamOrder || !$steamOrder->accepted()) {
            flash()->error('You must accept the trade offer before creating a confirmation!');

            return redirect()->route('home');
        }

        $latestConfirmation = Confirmation::valid()->orderBy('end_period', 'desc')->first();

        if ($latestConfirmation) {
            $basePeriod = $latestConfirmation->end_period;
        } else {
            $basePeriod = Carbon::now();
        }

        // Start creating Confirmation entry
        $confirmation = Confirmation::make();

        $confirmation->public_id = substr(md5(microtime()), 0, config('app.public_id_size'));
        $confirmation->baseOrder()->associate($order);
        $confirmation->start_period = $basePeriod;
        $confirmation->end_period = $basePeriod->addDays($order->duration);

        $confirmed = $confirmation->save();

        // Check if we confirmation was set to database and trigger event
        if ($confirmed) {
            event(new ConfirmationGenerated($confirmation));
        } else {
            flash()->error('Error saving confirmation to database!');
        }

        // Redirect to updated order
        return redirect()->route('view-steam-order', $public_id);
    }

    public function generateAdminsSimple()
    {
        // Caches Carbon::now();
        $now = Carbon::now();

        // Get valid confirmations
        $confirmations = Confirmation::valid()->with('baseOrder.user')->get();

        // Array of SteamID2 to Confirmation
        $steamid = [];

        // Parses each valid confirmation and adds to array
        foreach ($confirmations as $confirmation) {
            $steam2 = DaemonController::getSteam2ID($confirmation->baseOrder->user->steamid);

            if($steam2 === false) {
                return redirect()->route('home');
            }

            $steamid[] = [
                'id'           => $steam2,
                'confirmation' => $confirmation,
            ];
        }

        // Render admin_simple.ini
        return view('admins_simple', [
            'list' => $steamid,
            'html' => true,
        ]);
    }
}

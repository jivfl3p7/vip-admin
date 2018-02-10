<?php

namespace App\Http\Controllers;

use App\Classes\Daemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Ixudra\Curl\Facades\Curl;

class DaemonController extends Controller
{
    public function loginPost(Request $request)
    {
        $code = $request->input('code');

        Daemon::curl('login', [
            'code' => $code,
        ]);

        return redirect()->route('home');
    }

    public function login()
    {
        return view('daemon_login');
    }

    public function logs()
    {
        $logs = Daemon::curl('logs');

        if ($logs === false) {
            return redirect()->back();
        } else {
            return view('logs', [
                'content' => $logs,
            ]);
        }
    }

    public function stderr()
    {
        $logs = Daemon::curl('stderr');

        if ($logs === false) {
            return redirect()->back();
        } else {
            return view('logs', [
                'content' => $logs,
            ]);
        }
    }

    public function stdout()
    {
        $logs = Daemon::curl('stdout');

        if ($logs === false) {
            return redirect()->back();
        } else {
            return view('logs', [
                'content' => $logs,
            ]);
        }
    }

    public function kill()
    {
        $response = Daemon::curl('kill');

        if ($response === false) {
            return redirect()->back();
        } else {
            return view('logs', [
                'content' => $response,
            ]);
        }
    }
}

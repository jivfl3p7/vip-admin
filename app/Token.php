<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Token extends Model
{
    use SoftDeletes;

    protected $table = 'tokens';

    protected $guarded = ['duration', 'expiration', 'token'];

    public function tokenOrder()
    {
        return $this->belongsTo('App\TokenOrder');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getRouteKeyName()
    {
        return 'token';
    }

    public function status()
    {
        return [
            'text'  => $this->statusText(),
            'class' => $this->statusClass(),
        ];
    }

    private function statusText()
    {
        if ($this->tokenOrder()->exists()) {
            return 'Used';
        }

        $expiration_date = $this->updated_at->addHours($this->expiration);

        if ($expiration_date->isPast()) {
            return 'Expired';
        } else {
            return 'Unused';
        }
    }

    private function statusClass()
    {
        $status = [
            'Expired' => 'danger',
            'Unused'  => 'success',
            'Used'    => 'info',
        ];

        $s = $this->statusText();

        if (array_has($status, $s)) {
            return $status[$s];
        } else {
            return 'danger';
        }
    }
}

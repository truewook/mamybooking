<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'account';

    protected $fillable = [
        'title', 'firstname', 'lastname','email','door','bag_loadable','air_condition','automatic','net_rate','credit_card_fees','return_slowly','cancellation_before','active'
    ];


    public $timestamps = true;
}

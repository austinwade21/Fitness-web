<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    //
    protected $table = 'subscriptions';
    
    public function relations() {
        return $this->belongsTo('App\User');
    }
}

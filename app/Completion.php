<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Completion extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function question(){
        return $this->belongsTo("App\Question","q_id");
    }
}

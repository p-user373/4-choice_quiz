<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function completions(){
        return $this->hasMany("App\Completion","q_id");
    }

    public function weaknesses(){
        return $this->hasMany("App\Weakness","q_id");
    }

    public function choices(){
        return $this->hasMany(Choice::class);
    }
}

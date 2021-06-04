<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    public function question(){
        $this->belongsTo(Question::class);
    }
}

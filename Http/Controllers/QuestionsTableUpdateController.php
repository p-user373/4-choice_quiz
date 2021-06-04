<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;

class QuestionsTableUpdateController extends Controller
{
    public function update(){
        for($i=1;$i<41;$i++){
            $question=new Question();
            $question->sentence="次のうち、「テスト問題{$i}テスト問題{$i}テスト問題{$i}」はどれでしょう？";
            $question->save();
        }
        
        return view("questions_table_update");
    }
}

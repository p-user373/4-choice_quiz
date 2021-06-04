<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;

use App\Choice;

use App\Completion;

use Auth;

class AnswerController extends Controller
{
    public function answer(Request $request){
        
        $question_id=$request->question_id;
        $choice_id=$request->choice_id;
        $key=$request->key;
        $user_id=Auth::id();

        $selected_choice=Choice::where("q_id",$question_id)->where("c_id",$choice_id)->first();

        $correct_or_not=$selected_choice->correct_or_not;

        $question=Question::where("id",$question_id)->first();

        $complestion_exist=Completion::where("u_id",$user_id)->where("q_id",$question_id)->exists();
        
        if($complestion_exist){
            $completion=Completion::where("u_id",$user_id)->where("q_id",$question_id)->first();
            $completion->correct_or_not=$correct_or_not;
            $completion->save();
        }else{
            $completion=new Completion();
            $completion->u_id=$user_id;
            $completion->q_id=$question_id;
            $completion->correct_or_not=$correct_or_not;
            $completion->save();
        }
        
        return view("answer",compact("correct_or_not","question","question_id","key"));
    }
}

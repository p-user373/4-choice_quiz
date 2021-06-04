<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;

use App\Completion;

use App\Weakness;

use Auth;

class SelectQuestionController extends Controller
{
    public function select_question(Request $request){

        session()->forget([1,2,3,4,5,6,7,8,9,10]);
        
        $mode_number=$request->mode;

        $user_id=Auth::id();



        if($mode_number==1){

            $mode=Question::pluck("id");
            $mode_explanation="全ての問題から";

        }elseif($mode_number==2){

            $mode=Completion::where("u_id",$user_id)->where("correct_or_not",0)->orderBy("q_id")->pluck("q_id");
            $mode_explanation="間違えた問題から";

        }elseif($mode_number==3){
            
            $mode=Weakness::where("u_id",$user_id)->orderBy("q_id")->pluck("q_id");
            $mode_explanation="苦手な問題から";

        }else{
            $mode=Question::pluck("id");
        }


        $request->session()->put("name",$mode_number);

        return view("select_question",compact("mode","mode_explanation"));
    }
}

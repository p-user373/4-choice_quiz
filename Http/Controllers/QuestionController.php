<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;

use App\Choice;

use App\Weakness;

use Auth;

class QuestionController extends Controller
{
    public function question(Request $request){
        
        $question_id=$request->question_id;
        $key=$request->key;
        $user_id=Auth::id();

        $question=Question::where("id",$question_id)->first();

        $choices=Choice::where("q_id",$question_id)->get();

        $weakness_exist=Weakness::where("u_id",$user_id)->where("q_id",$question_id)->exists();

        if($weakness_id=$request->weakness_id){
            if($weakness_exist===true){
                $weakness=Weakness::where("u_id",$user_id)->where("q_id",$weakness_id)->first();
                $weakness->delete();
            }else{
                $weakness=new Weakness();
                $weakness->u_id=$user_id;
                $weakness->q_id=$weakness_id;
                $weakness->save();
            }

            $weakness_exist=Weakness::where("u_id",$user_id)->where("q_id",$question_id)->exists();
        }


        return view("question",compact("question_id","question","choices","weakness_exist","key"));
    }

    
}

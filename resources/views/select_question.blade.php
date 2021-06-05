    <style>

    .select_question{
        border: 1px solid #000;
        text-align: center;
        width: 864px;
        height: 350px;
        margin: 24px auto;
    }

    .select_question-header{
        border-bottom: 1px solid #000;
        font-size: 36px;
    }

    .select_question-contents{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        align-content: space-around;
    }

    .select_question-content{
        width: 20%;
    }

    .select_question-content a{
        color: white;
        background-color: slateblue;
        border-radius: 5px;
        font-size: 24px;
        display: inline-block;
        width: 96px;
        height: 96px;
        line-height: 96px;
        margin-top: 26px;
        margin-bottom: 26px;
    }

    .to_home{
        text-align: center;
    }

    </style>

@extends('layouts.app')

@section('content')
<div class="select_question">
    <div class="select_question-header">
        問題選択（{{$mode_explanation}}）
    </div>
    <div class="select_question-contents">
        @foreach($mode as $key => $question_id)
        <div class="select_question-content">
            <a href="question?question_id={{$question_id}}&key={{$key}}">第{{$question_id}}問</a>
        </div>
        {{session([$key => $question_id])}}
        @endforeach
    </div>
</div>
<div class="to_home">
    <a href="home">ホームへ</a>
</div>
@endsection

<style>
    
    .answer_content{
        text-align: center;
        width: 864px;
        height: 250px;
        margin: auto;
        border: 1px solid #000;
        margin-bottom: 36px;
    }
    
    .correct_or_not{
        font-size: 36px;
        padding-top: 12px;
    }

</style>

@extends("layouts.question_answer_layout")
@section("content3")
<div class="answer_content">
    <div class="correct_or_not">
        @if($correct_or_not==1)
            正解！
        @else
            不正解
        @endif
    </div>
    <p class="commentary">
        解説：{{$question->commentary}}
    </p>
</div>     
@endsection
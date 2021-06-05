    <style>

        .question_sentence{
            font-size: 24px;
        }

        .question_choice-container{
            display: flex;
            flex-wrap: wrap;
        }

        .question_choice-content{
            width: 50%;
            text-align: center;
            margin-top: 36px;
            margin-bottom: 36px;
        }

        .question_choice-content a{
            display: inline-block;
            width: 432px;
            color: #000;
        }

        .choice_id_and_sentence{
            display: flex;
        }

        .choice_image img{
            width: 432px;
            height: 290px;
        }
    </style>    

    @extends('layouts.question_answer_layout')

    @section("content2")
        <a href="question?question_id={{$question_id}}&weakness_id={{$question_id}}&key={{$key}}">
            <span class="fa-stack">
                @if($weakness_exist===false)
                <i class="far fa-star fa-stack-2x" style="font-size: 50px;"></i>
                @else
                <i class="fas fa-star fa-stack-2x" style="font-size: 50px; color:yellow;"></i>
                @endif
                <span class="fa fa-stack-1x" id="nigate" style="font-size:10px;">苦手</span>
            </span>
        </a>
    @endsection





    @section('content3')
    <div class="question_sentence">問.{{$question->sentence}}</div>
    <div class="question_choice-container">  
        @foreach($choices as $choice)
            <div class="question_choice-content"> 
                <a href="answer?choice_id={{$choice->c_id}}&question_id={{$question_id}}&key={{$key}}">
                    <div class="choice_id_and_sentence">
                        <div class="choice_id">{{$choice->c_id}}.</div>
                        <div class="choice_sentence">{{$choice->c_sentence}}</div>
                    </div>
                    <div class="choice_image"><img src="storage/images/{{substr($choice->c_image,49)}}" alt=""></div>
                </a>
            </div>
        @endforeach
    </div>
    @endsection
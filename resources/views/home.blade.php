@extends('layouts.app')

@section('content')
<div class="container2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{Auth::user()->name}}さんの学習履歴</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                        <li>解いた問題数：{{$completion_quantity}}問</li>
                        <li>正解した問題数：{{$correct_quantity}}問</li>
                    </ul>
                </div>
            </div>

            <div class="mode_of_question">
                <div class="mode_of_question-header">
                    問題を解く
                </div>
                <div class="mode_of_question-body">
                    <ul>
                        <li><a href="select_question?mode=1">全ての問題から出題</a></li>
                        <li><a href="select_question?mode=2">間違えた問題から出題</a></li>
                        <li><a href="select_question?mode=3">苦手な問題から出題</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

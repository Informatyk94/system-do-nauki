@extends('master')
@section('content')

    <h1>{{$problem->title}}</h1>
    <br />

    <div class="show__category">
        {{$problem->category}}
    </div>
    <div class="show__problem">
        {{$problem->content_problem}}
    </div>
    <div class="show__solution">
        {{$problem->content_solution}}
    </div>
    <div class="show__data">
        {{$problem->created_at}}
    </div>


@stop

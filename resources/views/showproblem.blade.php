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

    <a href="/addproblemform/{{$problem->id}}/edit" class="btn btn-danger button_menu" role="button">Edytuj</a>
    <a href="/research" class="btn btn-danger button_menu" role="button">Wstecz</a>


@stop

@extends('master')
@section('content')

    <h1>{{$problem->title}}</h1>
    <br />

    <div class="show__category">
        <span>Kategoria:</span> {{$problem->category}}
    </div>
    <div class="show__category">
        <span>Problem: </span> {{$problem->content_problem}}
    </div>
    <div class="show__category">
        <span>Rozwiązanie: </span> {{$problem->content_solution}}
    </div>
    <div class="show__category">
        <span>Dodano: </span> {{$problem->created_at}}
    </div>
    <div class="show__category">
        <span>Autor: </span> {{ $problem->user->name }}
    </div>

    <div class="show__buttons">
        {{--<a href="/addproblemform/{{$problem->id}}/edit" class="btn btn-danger button_menu" role="button">Edytuj</a>--}}
        <a href="{{ action('AddProblemController@edit', $problem->id) }}" class="btn btn-danger button_menu" role="button">Edytuj</a>

        <a href="/research" class="btn btn-danger button_menu" role="button">Wstecz</a>
    </div>



@stop

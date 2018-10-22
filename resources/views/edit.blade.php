@extends('master')
@section('content')
    <h1>Dodaj zagadnienie</h1>
    <br />

    @include('form_errors')

    {!! Form::model($problem, ['method' => 'PATCH','class'=>'form-horizontal',
                    'action'=>['AddProblemController@update', $problem->id]])  !!}
        @include('form')
    {!! Form::submit('Edytuj',['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@stop

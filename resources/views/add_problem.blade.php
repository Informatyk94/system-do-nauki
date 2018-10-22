@extends('master')
@section('content')
    <h1>Dodaj zagadnienie</h1>
    <br />

        @include('form_errors')

        {!! Form::open(['url' => '/addproblem', 'class'=>'form-horizontal'])  !!}
            @include('form')
            {!! Form::submit('Dodaj',['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}

@stop

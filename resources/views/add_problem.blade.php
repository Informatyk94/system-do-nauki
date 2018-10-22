@extends('master')
@section('content')
    <h1>Dodaj zagadnienie</h1>
    <br />

        @include('form_errors')

        {!! Form::open(['url' => '/addproblem', 'class'=>'form-horizontal'])  !!}
            @include('form',['buttonText' => 'Dodaj'])

        {!! Form::close() !!}

@stop

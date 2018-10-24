@extends('master')
@section('content')
    <div class="title_research">
        <a href="/panel">
            <h1 >SYSTEM B</h1>
        </a>
    </div>
    <h1>Dodaj zagadnienie</h1>
    <br />

        @include('form_errors')

        {!! Form::open(['url' => '/addproblem', 'class'=>'form-horizontal'])  !!}
            @include('form',['buttonText' => 'Dodaj'])

        {!! Form::close() !!}

@stop

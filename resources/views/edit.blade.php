@extends('master')
@section('content')
    <h1>Dodaj zagadnienie</h1>
    <br />

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($problem, ['method' => 'PATCH','class'=>'form-horizontal',
                    'action'=>['AddProblemController@update', $problem->id]])  !!}
        @include('form')
    {!! Form::submit('Edytuj',['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@stop

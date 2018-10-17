@extends('master')
@section('content')
    <h1>Dodaj zagadnienie</h1>
    <br />
        {!! Form::open(['url' => '/add', 'class'=>'form-horizontal'])  !!}
            <div class="form-group">
                {!! Form::label('title',"Tytuł:") !!}
                {!! Form::text('title', null,['class' => 'form-control']) !!}
            </div>

                {!! Form::label('selectName',"Kategoria:") !!}
                {!! Form::select('selectName', $category, null) !!}

            <div class="form-group">
                {!! Form::label('description',"Opis zagadnienia::") !!}
                {!! Form::textarea('description', null,['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('solution',"Rozwiazanie zagadnienia:") !!}
                {!! Form::textarea('solution', null,['class' => 'form-control']) !!}
            </div>
                {!! Form::submit('Dodaj',['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}

@stop

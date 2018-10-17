@extends('master')
@section('content')
    <h1>Dodaj zagadnienie</h1>
    <br />
        {!! Form::open(['url' => '/addproblem', 'class'=>'form-horizontal'])  !!}
            <div class="form-group">
                {!! Form::label('title',"Tytuł:") !!}
                {!! Form::text('title', null,['class' => 'form-control']) !!}
            </div>

                {!! Form::label('category',"Kategoria:") !!}
                {!! Form::select('category', $category, null) !!}

            <div class="form-group">
                {!! Form::label('content_problem',"Opis zagadnienia::") !!}
                {!! Form::textarea('content_problem', null,['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('content_solution',"Rozwiazanie zagadnienia:") !!}
                {!! Form::textarea('content_solution', null,['class' => 'form-control']) !!}
            </div>
                {!! Form::submit('Dodaj',['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}

@stop

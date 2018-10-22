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

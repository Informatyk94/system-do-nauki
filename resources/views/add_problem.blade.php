@extends('master')
@section('content')
    <h1>Dodaj zagadnienie</h1>
    <br />
    <form action="/action_page.php">
        <div class="form-group">
            <label for="title">Tytuł:</label>
            <input type="name" class="form-control" id="name">
        </div>

        <label for="sel2">Kategoria:</label>
        <select multiple class="form-control" id="category">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Opis zagadnienia:</label>
            <textarea class="form-control" id="description" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Rozwiazanie zagadnienia:</label>
            <textarea class="form-control" id="solution" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-danger">Submit</button>
    </form>

@stop

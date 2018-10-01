@extends('master')
@section('content')

    <h1>Szukaj</h1>
    <br />
    <form action="/action_page.php">
        <div class="form-group">
            <input type="name" class="form-control" id="name">
        </div>

        <div class="container">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tytuł</th>
                    <th>Kategoria</th>
                    <th>Krótki opis</th>
                </tr>

                </thead>
                <tbody>
                <tr >
                    <td>1</td>
                    <td>css</td>
                    <td>stylowanie</td>
                    <td>bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>php</td>
                    <td>stylowanie</td>
                    <td>bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>komendy</td>
                    <td>stylowanie</td>
                    <td>bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</td>
                </tr>
                </tbody>
            </table>
        </div>


    </form>
@stop

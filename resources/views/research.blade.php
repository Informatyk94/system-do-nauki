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

                    @foreach($problems as $problem)

                    <tr onclick="document.location='/show/{{$problem->id}}'" style="cursor:pointer">

                            <td>{{$problem->id}}</td>
                            <td>{{$problem->title}}</td>
                            <td>{{$problem->category}}</td>
                            <td>{{$problem->content_problem}}</td>

                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>


    </form>
@stop

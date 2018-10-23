@extends('master')
    @section('content')
    <h1 class="title">SYSTEM B</h1>
    <div class="container">
        @if(Session::has('problem_created'))
            <div class="alert alert-success card">
                {{Session::get('problem_created')}}
            </div>
        @endif
        <div class="row">
            <div class="col center_img">
                <a href="/addproblemform"><img src="/image/add_problem.png"></a>
            </div>
            <div class="col center_img">
                <a href="/research"><img src="/image/search.png"></a>
            </div>
            <div class="col center_img">
                <a href="/account"><img src="/image/developer.png"></a>
            </div>
        </div>
    </div>

    @stop()

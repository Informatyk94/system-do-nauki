@extends('master')
    @section('content')
    <div class="title_research">
        <a href="/panel">
            <h1 >SYSTEM B</h1>
        </a>
    </div>
    <div class="container">
        <div class="show__category">
            <span>Użytkownik:</span> {{Auth::user()->name}}
        </div>
        <div class="show__category">
            <span>Mail: </span> {{Auth::user()->email}}
        </div>
        <div class="show__category">
            <span>Data utworzenia konta: </span> {{Auth::user()->created_at}}
        </div>
        <div class="show__category">
            <span>Uprwanienia: </span> {{Auth::user()->permissions}}
        </div>

    </div>

    @stop()

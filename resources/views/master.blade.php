<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Systemb</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <style>
        body {
            font-family: 'Hammersmith One', sans-serif;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">

<!- top menu -->

@if(preg_match('/panel|addproblemform|account|show|research/',url()->current()))
    <div class="top-menu">
        <a href="#" class="btn btn-danger button_menu" role="button">
            @if(isset(Auth::user()->name))
                {{"Zalogowany: " . Auth::user()->name}}
            @else
                {{ "Brak zalogowania" }}
            @endif
        </a>
        <a href="{{ route('logout') }}" class="btn btn-danger button_menu" role="button">Wyloguj</a>
    </div>
@endif
<div style="clear:both"></div>

<!-- wrapper -->
<div class="site-wrappper">

    <!-- .container -->
    <div class="container site-content">

        @yield('content')

    </div><!-- end of .container -->

</div><!-- end of wrapper -->


<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <p>&copy; System-B 2018</p>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.common.js"></script>

<!-- JavaScripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous">

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous">

</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous">

</script>




</body>
</html>

<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TopTimers</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="./css/styles.css" rel="stylesheet" type="text/css">
        <link href="./css/hamburger.css" rel="stylesheet" type="text/css">
        
        
       
    </head>
    <body>                   
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">

                     <a href="{{ url('/profiel') }}"><img src="./images/profiel.png" class="profielicon" alt="profile Pic"></a>
                    <img src="./images/logo.png" class="logo" alt="profile Pic">

                </div>

<div class="inhoud">
<div id="nav-icon3">
  <span></span>
  <span></span>
  <span></span>
</div>
<nav class="navigation">
<a href="{{ url('/') }}">Home</a>
<a href="{{ url('/profiel') }}">Profiel</a>
<a href="{{ url('/verkiezing') }}">Verkiezing</a>
<a href="{{ url('/about') }}">About</a>
<a href="{{ url('/contact') }}">Contact</a>
</nav>

 <h3 class="titel">Register Car</h3>
 <p>ok</p>
     
   
            </div>
              

        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./js/main.js"></script>
</html>

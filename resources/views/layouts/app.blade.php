<html>
    <head>
        <style type="text/css">
            html, body, header, #intro       /*     CSS      */
 {
    height: 100%;
}

#intro
{
    background: url("https://cdn.dribbble.com/users/795597/screenshots/3569676/travel-planning__1_.gif")no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
     </style>
   </head>

    <body>
    <!DOCTYPE html>
<html>
    <head>
        <title>Blogger</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name='viewport' content='width=device-width, initial-scale=1'>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="shortcut icon" type="image/jpg" href="https://image.flaticon.com/icons/png/512/44/44386.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size:17px;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 15.34px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: white;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: white;
  color: black;
  font-size: 23px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: grey;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
  </head>

    <!--<body>-->

         <!-- Main Navigation -->
        <header>
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark warning-color fixed-top ">
            &nbsp;&nbsp; &nbsp;
     <a class="rounded" class="nav-link" alt="" href="{{url('/blog')}}"> <img src="{{asset('images/blogger.png')}}" width="150">
                <div class="container">


            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Links -->
                <ul class="navbar-nav mr-auto ">
                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" style= "font-family:Arial; color:black;" href="/blog/create">Create Post</a>
                    </li>
                @endif
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;

                    @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link"  style= "font-family:Arial; color:black;" href="{{ route('mypost') }}">View My Post </a>
                    </li>
                    @endif

                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;

                   @if (!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link"  style= "font-family:Arial; color:black;" href="/login">Login </a>
                    </li>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <li class="nav-item">
                        <a class="nav-link"  style= "font-family:Arial; color:black;" href="/register">Register </a>
                    </li>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    @endif

                </ul>






            </div>
                </div>
            </nav>
            <!-- /.Navbar -->

            <br>
            @yield('content')



        <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

    </body>
  </html>
    </body>
</html>

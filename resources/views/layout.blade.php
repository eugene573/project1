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

.close-session {
  float: right;
  cursor: pointer;
  font-weight: bold;
  color: #888;
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

                    <li class="nav-item">
                        <a class="nav-link" style= "font-family:Arial; color:black;"  href="/aboutUs">About Us </a>
                    </li>

                    &nbsp; &nbsp; &nbsp; &nbsp;

                    <li class="nav-item">
                        <a class="nav-link" style= "font-family:Arial; color:black;"  href="{{ route('user.help') }}">Help </a>
                    </li>
                </ul>

                <form class="example" action="{{ route('search.post') }}" method="POST" style="margin:auto;width:360px;">
    @csrf
    <!-- Input field for the search keyword -->
    <input type="text" placeholder="Search..." name="keyword" class="w-full border-2 border-gray-800 p-3 rounded-lg focus:outline-none focus:border-blue-900" style="width:280px;">
    <!-- Submit button -->
    <button type="submit" class="w-full border-2 border-gray-800 p-3 rounded-lg focus:outline-none focus:border-blue-900" style="width: 55px;">
        <i class="fa fa-search"></i>
    </button>
</form>

                &nbsp; &nbsp; &nbsp;

                <nav class="navbar-expand-lg">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <!-- Avatar -->
      <i class="fa fa-user" style="font-size:29px"></i>
      <br>
      <li class="nav-item dropdown" style="color:black;">
        <a
          class="nav-link dropdown-toggle d-flex align-items-center"
          id="navbarDropdownMenuLink"
          role="button"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
          style="color:black;"
        >

        <ul class="dropdown-menu dropdown-menu-right" style="width: 200px;" aria-labelledby="navbarDropdownMenuLink">
        @if (Route::has('login'))
        @auth
                    <!--admin-->
                        @if ( Auth::user()->role == 1)
                        <a href="{{ Auth::user()->avatar }}"><img class="rounded-circle" height="60" width="60" src="{{ Auth::user()->avatar }}"
                    alt="User profile picture">&nbsp;&nbsp;&nbsp;<b>{{ Auth::user()->name }}</b></a>
                    <hr style="width:85%">
          <li>
            <center><a class="dropdown-item" href="{{ route('admin.profile') }}"><h6 style="color:blue;">My profile</h6></a></center>
          </li>

          <li>
           <center><a class="dropdown-item" href="{{ route('showUser') }}"><h6 style="color:green;">User List</h6></i></a></center>
          </li>

          <li>
            <center>
            <a class="dropdown-item" id="log" href="{{ route('logout') }}" onclick="event.preventDefault(); alert('You have successfully logged Out, Have A Nice Day!')
                                                     document.getElementById('logout-form').submit();"> <h6 style="color:red;">{{ __('Logout') }}</h6></a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            </center>
          </li>

                        @endif

                     <!--user-->
                        @if ( Auth::user()->role == 2)
                        <a href="{{ Auth::user()->avatar }}"><img class="rounded-circle" height="60" width="60" src="{{ Auth::user()->avatar }}"
                    alt="User profile picture">&nbsp;&nbsp;&nbsp;<b>{{ Auth::user()->name }}</b></a>
                    <hr style="width:85%">

          <li>
           <center><a class="dropdown-item" href="{{ route('user.profile') }}"><h6 style="color:blue;">My profile</h6></a></center>
          </li>

          <li>
            <center>
            <a class="dropdown-item" id="log" href="{{ route('logout') }}" onclick="event.preventDefault(); alert('You have successfully logged Out, Have A Nice Day!')
                                                     document.getElementById('logout-form').submit();"> <h6 style="color:red;">{{ __('Logout') }}</h6></a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            </center>
          </li>

                        @endif
                    @else
                    <img
            src="https://springhub.org/wp-content/uploads/2021/04/blank_profile.png"
            class="rounded-circle"
            height="70"
            width="70"
          />
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Log in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">&nbsp; &nbsp;Register</a>
                        @endif
         @endauth
         @endif
        </a>
        </ul>
      </li>
    </ul>
  </div>
</nav>
            </div>
                </div>
            </nav>




<br><br>


            @yield('content')

                <!-- Main layout -->
                <main class="mt-5 bg-dark">
                <div class="container">
                <section id="best-features" class="text-center">
                       <br>
                       <br>

                       <h3 class="mb-8 font-weight-bold text-center white-text">About us</h3>

                       <footer class="page-footer">
    <div class="container">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="col-lg-12 col-md-12 col-sm-12">
            <p>Welcome to Blogger, where we embark on a journey toward a more sustainable lifestyle—one step at a time. Blogger acts as a versatile medium that accommodates a myriad of purposes, from personal expression to professional marketing, catering to diverse audiences seeking information, entertainment, or inspiration.</p>
                <br>
                <br>
            <h3 class="mb-6 font-weight-bold text-center white-text">Contact us</h3>
           <h6 class="text-center">
           blogger123@gmail.com
           <br><br>
            +6016-23335551 &nbsp;Adam
            <br> +6011-23476543 &nbsp;Steve
            <br> +6011-98765432 &nbsp;Rosh
            </h6>
             </div>

        </div>
        <br>
    <div class="footer-copyright text-center"> Copyright &copy; 2023 Blogger All Rights Reserved.</div>
    </div>
</footer>
              </section>
            </div>
        </main>

        <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<script>
    // JavaScript function to close the session after 5 seconds
    setTimeout(function() {
            closeSession('successMessage');
        }, 5000); // 5000 milliseconds = 5 seconds
</script>

</body>
  </html>
    </body>
</html>

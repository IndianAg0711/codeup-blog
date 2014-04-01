<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume</title>

    <!-- Bootstrap -->
   <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="/public/font-awesome/css/font-awesome.min.css">


    <!-- Overridden CSS -->
    <style type="text/css">

    .navbar {
      background-color: #69F;
      color: #000;
    }

    .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus {
      background-color: #000;
      color: #69F;
    }

    .navbar-default .navbar-nav>.active>a:hover {
      background-color: transparent;
      color: #000;
    }

    .navbar-default .navbar-nav>li>a:hover {
      background-color: #000;
      color: #69F;
    }

    .navbar-default .navbar-brand {
      color: #000;
    }

    .navbar-default .navbar-nav>li>a {
      color: #000;
    }

    </style>
</head>
  <body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Blog</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
            <li><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
            @if (Auth::check())
            <li><a href="{{{ action('HomeController@logout') }}}">Logout</a></li>
            @else
            <li><a href="{{{ action('HomeController@showLogin') }}}">Login</a></li>
            @endif
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    @if (Session::has('successMessage'))
        <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif
    @if (Session::has('errorMessage'))
        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif


    @yield('content')


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    @yield('bottom-script')
</body>
</html>
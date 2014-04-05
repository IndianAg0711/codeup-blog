<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    @yield('title')

    @yield('top-script')
    <!-- Bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fancybox/jquery.fancybox-v=2.1.5.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="/css/style.css">  
    
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    
    
    <link rel="prefetch" href="/images/zoom.png">

    @yield('style')

  </head>
  <body>

  <div class="navbar navbar-fixed-top" data-activeslide="1">
    <div class="container">
    
      <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      
      <div class="nav-collapse collapse navbar-responsive-collapse">
        <ul class="nav row">
          <li class="col-12 col-sm-2"><a href="{{{ action('HomeController@showWelcome') }}}"><span class="icon icon-home"></span> <span class="text">HOME</span></a></li>
          <li class="col-12 col-sm-2"><a href="{{{ action('HomeController@showResume') }}}"><span class="icon icon-user"></span> <span class="text">RESUME</span></a></li>

          <li class="col-12 col-sm-2"><a href="{{{ action('HomeController@showPortfolio') }}}"><span class="icon icon-briefcase"></span> <span class="text">PORTFOLIO</span></a></li>
          <li class="col-12 col-sm-2"><a href="{{{ action('PostsController@index') }}}"><span class="icon icon-gears"></span> <span class="text">BLOG</span></a></li>
          @if (Auth::check())
          <li class="col-12 col-sm-2"><a href="{{{ action('HomeController@logout') }}}"><span class="icon icon-heart"></span> <span class="text">LOGOUT</span></a></li>
          @else
          <li class="col-12 col-sm-2"><a href="{{{ action('HomeController@showLogin') }}}"><span class="icon icon-envelope"></span> <span class="text">LOGIN</span></a></li>
          @endif        
        </ul>
      </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
  </div><!-- /.navbar -->

    @if (Session::has('successMessage'))
        <div class="alert alert-success message">{{{ Session::get('successMessage') }}}</div>
    @endif
    @if (Session::has('errorMessage'))
        <div class="alert alert-danger message">{{{ Session::get('errorMessage') }}}</div>
    @endif


    @yield('content')

</body>

  <!-- SCRIPTS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

  <!-- SCRIPTS -->
  <script src="/js/html5shiv.js"></script>
  <script src="/js/jquery-migrate-1.2.1.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="/fancybox/jquery.fancybox.pack-v=2.1.5.js"></script>
  <script src="/js/script.js"></script>

  @yield('bottom-script')
  
  <!-- fancybox init -->
  <script>
  $(document).ready(function(e) {
    var lis = $('.nav > li');
    menu_focus( lis[0], 1 );
    
    $(".fancybox").fancybox({
      padding: 10,
      helpers: {
        overlay: {
          locked: false
        }
      }
    });
  
  });
  </script>
</html>
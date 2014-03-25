<!doctype html>
<html lang="en">
<head>
    <title>Trav Flatt - Web Developer</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Blog and Portfolio for Travis Flatt, Web Designer/Developer 
    based in San Antonio, TX">
    <meta name="author" content="Travis C. Flatt">
    <!-- Bootstrap core CSS -->
    <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom-bootstrap.css" rel="stylesheet" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    @yield('topscript')
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{{ action('HomeController@showWelcome')}}}">Trav Flatt</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{{ action('HomeController@showPortfolio')}}}">Portfolio</a></li>
            <li><a href="{{{ action('HomeController@showResume')}}}">R&eacute;sum&eacute;</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a target="_blank" href="https://www.facebook.com/travis.flatt.5"><i class="fa fa-facebook-square fa-lg"></i></a></li>
            <li><a target="_blank" href="http://www.linkedin.com/in/travisflatt/"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
            <li><a target="_blank" href="https://github.com/travtex"><i class="fa fa-github-alt fa-lg"></i></a></li>
            <li><a target="_blank" href="https://soundcloud.com/travis-flatt"><i class="fa fa-microphone fa-lg"></i></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    @yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    @yield('bottomscript')
</body>
</html>
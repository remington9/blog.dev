<!DOCTYPE html>
<html lang="en">
<head>
    @yield('title')

    <title>Laravel Blog</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/blog/blog.css">
</head>
<body>
    <div class="blog-masthead">
        <div class="container">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{{action('HomeController@showWelcome')}}}">{{{ Auth::user()->first_name }}}</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{{action('PostsController@index')}}}">Blog</a></li>
                    <li><a href="{{{action('HomeController@showResume')}}}">Resume</a></li>
                    @if(Auth::check())
                        <li><a href="{{{action('HomeController@doLogout')}}}">Logout</a></li>
                    @else
                        <li><a href="{{{action('HomeController@showLogin')}}}">Login</a></li>
                    @endif
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{{action('HomeController@showWelcome')}}}">Welcome</a></li>
                            <li><a href="{{{action('HomeController@showContact')}}}">Contact</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form" role="search">
                    <div class="input-group pull-right">
                        <input type="text" name="search" class="form-control pull-right" style="width: 300px; margin-right: 35px, border: 1px solid black; background-color: #e5e5e5;" placeholder="Search">
                        <span class="input-group-btn">
                            <button type="reset" class="btn btn-default">
                                <span class="glyphicon glyphicon-remove">
                                    <span class="sr-only">Close</span>
                                </span>
                            </button>
                            <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search">
                                    <span class="sr-only">Search</span>
                                </span>
                            </button>
                        </span>
                    </div>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
        </div>
    </div>
    <main class="container">
        <div class="blog-header">
            <h1 class="blog-title">Remington's Blog</h1>
            <p class="lead blog-description">The official blog of Remington Williams.</p>
        </div>
        <hr>
        <div class="col-sm-8 blog-main">
            @if (Session::has('successMessage'))
                <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
            @endif
            @if (Session::has('errorMessage'))
                <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
            @endif
            @if($errors->has())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach($errors->all() as $key=> $error)
                            <li>{{{$error}}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @yield('content')
        </div>
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>About</h4>
                <p>Hello I'm Remington Williams <em>Full Stack Web Developer</em>. Welcome to my blog page. Feel free to snoop around and enjoy.</p>
            </div>
            <div class="sidebar-module">
                <h4>Archives</h4>
                <ol class="list-unstyled">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                    <li><a href="#">December 2013</a></li>
                    <li><a href="#">November 2013</a></li>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                    <li><a href="#">June 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li>
                </ol>
            </div>
            <div class="sidebar-module">
                <h4>Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>
        </div>
    </main>
    <footer class="blog-footer">
        <p>
            Blog template built using <a href="http://getbootstrap.com">Bootstrap</a>.
        </p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    @yield('script')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    @yield('title')
    <meta name="csrf-token" content="{{{ csrf_token() }}}">
    <title>Remington's News Blog</title>
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
                <a class="navbar-brand" href="{{{action('HomeController@showWelcome')}}}">Welcome</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{{action('PostsController@index')}}}">Blog</a></li>
                    <li><a href="{{{action('HomeController@showResume')}}}">Resume</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
        </div>
    </div>
    <main class="container">
        <div class="blog-header">
            <h1 class="blog-title text-center">Remington's All-In-One News</h1>
            <p class="lead blog-description text-center">The official news blog of all things happening by Remington Williams.</p>
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
                <p>Hello I'm Remington Williams <em>Full Stack Web Developer</em>. Welcome to my NewsAPI blog page created using a news feed api that returns real time news articles as a JSON Object that I then parse into the articles you see here. Feel free to snoop around and enjoy.</p>
            </div>
            {{--<div class="sidebar-module">--}}
                {{--<h4>Archives</h4>--}}
                {{--<ol class="list-unstyled">--}}
                    {{--<li><a href="#">March 2014</a></li>--}}
                    {{--<li><a href="#">February 2014</a></li>--}}
                    {{--<li><a href="#">January 2014</a></li>--}}
                    {{--<li><a href="#">December 2013</a></li>--}}
                    {{--<li><a href="#">November 2013</a></li>--}}
                    {{--<li><a href="#">October 2013</a></li>--}}
                    {{--<li><a href="#">September 2013</a></li>--}}
                    {{--<li><a href="#">August 2013</a></li>--}}
                    {{--<li><a href="#">July 2013</a></li>--}}
                    {{--<li><a href="#">June 2013</a></li>--}}
                    {{--<li><a href="#">May 2013</a></li>--}}
                    {{--<li><a href="#">April 2013</a></li>--}}
                {{--</ol>--}}
            {{--</div>--}}
            {{--<div class="sidebar-module">--}}
                {{--<h4>Elsewhere</h4>--}}
                {{--<ol class="list-unstyled">--}}
                    {{--<li><a href="#">GitHub</a></li>--}}
                    {{--<li><a href="#">Twitter</a></li>--}}
                    {{--<li><a href="#">Facebook</a></li>--}}
                {{--</ol>--}}
            {{--</div>--}}
        </div>
    </main>
    <footer class="blog-footer">
        <p>
            News Api powered by <a href="https://newsapi.org">newsapi.org</a>.
        </p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    @yield('script')
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-67077215-1', 'auto');
      ga('send', 'pageview');

    </script>
</body>
</html>
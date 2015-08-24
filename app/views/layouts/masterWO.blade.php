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
            <nav class="blog-nav">
                <a class="blog-nav-item active" href="#">Home</a>
                <a class="blog-nav-item" href="#">New features</a>
                <a class="blog-nav-item" href="#">Press</a>
                <a class="blog-nav-item" href="#">New hires</a>
                <a class="blog-nav-item" href="#">About</a>
            </nav>
        </div>
    </div>
    <main class="container">
        <div class="blog-header">
            <h1 class="blog-title">Remington's Blog</h1>
            <p class="lead blog-description">The official blog created by Remington Williams.</p>
        </div>
        <hr>
        <div class="col-sm-8 blog-main">
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
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
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
            Workout template built using <a href="http://getbootstrap.com">Bootstrap</a>.
        </p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>
  <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
</body>
</html>
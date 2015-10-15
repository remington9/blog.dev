<!DOCTYPE html>
<html lang="en">
<head>
    @yield('title')

    <title>Workout Tracker</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/blog/blog.css">
</head>
<body ng-app="workoutCreate">
    <div class="blog-masthead">
        <div class="container">
            <nav class="blog-nav">
                <a class="blog-nav-item" href="{{{action('WorkoutController@index')}}}">Home</a>
                <a class="blog-nav-item" href="#">Forum</a>
                <a class="blog-nav-item" href="{{{action('WorkoutController@howTo')}}}">How-To</a>
                <a class="blog-nav-item" href="{{{action('WorkoutController@profile')}}}">Profile</a>
                @if(Auth::check())
                    <a class="blog-nav-item" href="{{{action('WorkoutController@doLogout')}}}">Logout</a>
                    <a class="blog-nav-item" href="{{{action('WorkoutController@create')}}}">Create</a>
                @else
                    <a class="blog-nav-item" href="{{{action('WorkoutController@showLogin')}}}">Login</a>
                @endif
            </nav>
        </div>
    </div>
    @yield('banner')
    <main class="container">
        <div class="blog-header">
            <h1 class="blog-title">Workout Tracker</h1>
            <p class="lead blog-description">Track all of your daily workouts!</p>
        </div>
        <hr>
        <div class="row">
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
        
    </main>
    <footer class="blog-footer">
        <p class="lead blog-description">Created by Remington Williams.</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>
    <script type="text/javascript" src="/js/jquery/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/angular/angular.min.js"></script>
    <script type="text/javascript" src="/js/workout_angular.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-67077215-1', 'auto');
      ga('send', 'pageview');

    </script>
    @yield('script')
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Remington's Cover Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Font Awesome -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/cover/cover.css">
    <style>
        .contact{
            font-size: 40px;
        }
        .speech-bubble {
            position: relative;
            width: 170px;
            height: 170px;
            margin: auto;
        }
        .speech-bubble > i {
            display: block;
            position: absolute;
            z-index: 5;
            color: #a1a1a1;
            font-size: 170px;
        }
        h4 {
            padding-top: 50px;
            font-size: 30px;
            font-weight: 700;
            text-align: center;
            letter-spacing: 2px;
        }
    </style>
</head>
<body>

<div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Welcome</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="{{{ action('HomeController@showResume') }}}">Resume</a></li>
                  <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
                  <li class="active"><a href="{{{ action('HomeController@showContact') }}}">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>

<!-- CONTACT SECTION START -->
          <div class="inner cover">
                <div class="row contact">
                    <div class="col-md-12 text-center">
                        <h2 class="section-title uppercase">Contact Me</h2>

                        <p class="section-subtitle">
                            Have a project you'd like to discuss?
                        </p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->
                
                <div class="row">
                    <div class="col-md-12">

                        <!-- CONTACT DETAILS START -->
                        <div class="contact-details text-center">
                            <div class="speech-bubble">
                                <i class="fa fa-comment-o"></i>

                                <h4 class="uppercase text-grey">
                                    Say<br>Hello
                                </h4>
                            </div>
                            <!-- //.speech-bubble -->

                            <h2 class="uppercase">Remington <strong>Williams</strong></h2>

                            <h4 class="text-grey"><a href="mailto:remingtonwilliams@gmail.com">remingtonwilliams@gmail.com</a></h4>

                            <span class="divider center"></span>
                        </div>
                        <!-- //CONTACT DETAILS END -->
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->
    <!-- //CONTACT SECTION END -->
          <div class="mastfoot">
            <div class="inner">
              <p>Welcome please come in and explore.</p>
            </div>
          </div>

        </div>

      </div>

    </div>



     <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
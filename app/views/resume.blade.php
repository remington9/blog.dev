<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<!-- favorite shade of green #00a69a; -->
		<meta charset="utf-8">
		<!-- Site Title -->
		<title>Remington's Resume</title>
		<meta name="description" content="Remington Williams Resume">
		<meta name="keywords" content="Remington, Williams, resume, developer, web">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=no">
        <!-- jQuery -->
        <script src="/plugins/jquery.min.js"></script>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <!-- Bootstrap ref -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- Google Font -->
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
        <!-- animate css -->
        <link href="/css/resume/animation.min.css" rel="stylesheet" type="text/css">
		<!-- Main CSS -->
		<link rel="stylesheet" type="text/css" href="/css/resume/resume.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</head>
	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="66" style="display: block;">
		<header id="home" class="hero">
			<div class="pattern-overlay"></div>
				<div class="hero-body">
					<div class="hero-text text-center">
						<h1 class="small">I'm Remington Williams<span class="blinker"></span></h1>
						<h1>Creative Developer</h1>
						<p>22 years old, food addict, husband, and father of 2.</p>
						<div class="page-scroll">
							<a href="#profile" class="btn btn-lg btn-custom">Know Me Better</a>
						</div>
						<!--//.page-scroll -->
					</div>
					<!-- //.hero-text -->
				</div>
				<!-- //.hero-body -->
		</header>
		<!-- //.HERO END -->
		<!-- NAVIGATION START -->
		<nav id="navigation-sticky-wrapper" class="sticky-wrapper" style="height: 66px;">
			<nav id="navigation" class="navbar navbar-fixed-top center-menu" role="navigation">
				<div class="container navbar-container">
	            <div class="navbar-header page-scroll">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".berg-collapse">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand visible-xs visible-sm" href="#page-top">Williams</a>
	            </div>
	            <!-- //.navbar-header -->
	            <div class="navbar-collapse collapse berg-collapse">
	                <ul class="nav navbar-nav">
	                    <li>
	                        <a href="{{action('HomeController@showWelcome')}}">Home</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a href="#profile">Profile</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a href="#portfolio">Portfolio</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a href="#services">Services</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a href="#resume">Resume</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a href="#references">References</a>
	                    </li>         
	                    <li class="page-scroll">
	                        <a href="#skills">Skills</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a href="#contact">Contact</a>
	                    </li>
	                </ul>
	            </div>
	            <!-- //.navbar-collapse -->
	        </div>
	        <!-- //.navbar-container -->
		</nav>
		<!-- //NAVIGATION END -->
		<!-- PROFILE SECTION START -->
    <section id="profile" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">          
                    <div class="col-md-7 match-height">
                        <!-- PROFILE TEXT START -->
                        <div class="profile-text padding-right-yes">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="section-title uppercase">Hello, my name is Remington.</h2>
                                    <p>
                                        Remington Williams, 22 years old, born and raised in San Antonio, Texas. Highly motivated creative developer with a yearning for learning.
                                    </p>
                                    <span class="divider"></span>
                                    <p class="text-grey">
                                        I currently work at H-E-B, where I have been a Pharmacy Technicain for almost 2 years.
                                    </p>
                                    <p class="text-grey">
                                        I am currently attending school at CodeUp in the downtown San Antonio area.
                                    </p>
                                </div>
                                <!-- //.col-md-12 -->
                            </div>
                            <!-- //.row -->
                        </div>
                        <!-- //PROFILE TEXT END -->
                        <!-- CONTACT DETAILS START -->
                        <div class="contact-details padding-right-yes">
                            <div class="row">
                                <div class="col-sm-6 col-md-5">
                                    <h4 class="uppercase">Contact Details</h4>

                                    <ul class="list-unstyled text-grey">
                                        <li>Remington Williams</li>
                                        <li>31345 Sierra Vista Dr,</li>
                                        <li> Bulverde TX 78163</li>
                                        <li>(210) 427-5679</li>
                                        <li>remingtonwilliams@gmail.com</li>
                                    </ul>
                                </div>
                                <!-- //.col-md-5 -->
                                <div class="col-sm-6 col-md-7">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-custom btn-lg" data-toggle="modal" data-target="#myModalwrapper">
                                      Download Resume
                                    </button>
                                </div>
                                <!-- //.col-md-6 -->
                            </div>
                            <!-- //.row -->
                        </div>
                        <!-- //CONTACT DETAILS END -->
                    </div>
                    <!-- //.col-md-7 -->
                    <!-- PROFILE PICTURE START -->
                    <div class="col-md-5 hidden-xs hidden-sm match-height pp-wrapper">
                        <div class="profile-picture style-one">
                            <img src="/img/resume/profile_pic.jpg" alt="profile picture" id="profile_pic" class="img-responsive"/>
                        </div>
                    </div>
                    <!-- //PROFILE PICTURE END -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //PROFILE SECTION END -->
     <!-- PORTFOLIO SECTION START -->
    <div class="portfolio" id="portfolio">
                    <div class="row">
                        <div class="item col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="http://www.oxbilt.us" class="zoom" title="Oxbilt.us">
                                        <i class="fa fa-search-plus"></i>
                                    </a>

                                    <a href="http://www.oxbilt.us" class="external-link" target="_blank">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link -->

                                <div class="project-title">
                                    <h4>Oxbilt.us</h4>
                                </div>
                                <!-- //.project-title -->

                                <img src="/img/resume/oxbilt.png" alt="" class="img-responsive mole">
                            </div>
                            <!-- //.project-wrapper -->
                        </div>
                        <!-- //.item -->

                        <div class="item col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="{{{ action('HomeController@showSimon') }}}" class="zoom" title="simon">
                                        <i class="fa fa-search-plus"></i>
                                    </a>

                                    <a href="{{{ action('HomeController@showSimon') }}}" class="external-link" target="_blank">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link -->

                                <div class="project-title">
                                    <h4>Simple Simon Says Game</h4>
                                </div>
                                <!-- //.project-title -->

                                <img src="/img/resume/simon1.png" alt="" class="img-responsive mole">
                            </div>
                            <!-- //.project-wrapper -->
                        </div>
                        <!-- //.item -->

                        <div class="item col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="{{{ action('HomeController@showWhackamole') }}}" class="zoom" title="whackamole">
                                        <i class="fa fa-search-plus"></i>
                                    </a>

                                    <a href="{{{ action('HomeController@showWhackamole') }}}" class="external-link" target="_blank">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link -->

                                <div class="project-title">
                                    <h4>DBZ Whack-a-mole game</h4>
                                </div>
                                <!-- //.project-title -->

                                <img src="/img/resume/whackamole.png" alt="" class="img-responsive mole">
                            </div>
                            <!-- //.project-wrapper -->
                        </div>
                        <!-- //.item -->

                        <div class="item col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="{{{ action('HomeController@showWeather') }}}" class="zoom" title="Speed Projects">
                                        <i class="fa fa-search-plus"></i>
                                    </a>

                                    <a href="{{{ action('HomeController@showWeather') }}}" class="external-link" target="_blank">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link -->

                                <div class="project-title">
                                    <h4>Weather Forcast with integrated Google maps</h4>
                                </div>
                                <!-- //.project-title -->

                                <img src="/img/resume/weather.png" alt="" class="img-responsive mole">
                            </div>
                            <!-- //.project-wrapper -->
                        </div>
                        <!-- //.item -->

                        <div class="item col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="http://www.harolds-plumbing.com" class="zoom" title="Wooden Rhinoceros Beetle">
                                        <i class="fa fa-search-plus"></i>
                                    </a>

                                    <a href="http://www.harolds-plumbing.com" class="external-link" target="_blank">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link -->

                                <div class="project-title">
                                    <h4>harolds-plumbing.com</h4>
                                </div>
                                <!-- //.project-title -->

                                <img src="/img/resume/harolds-plumbing.png" alt="" class="img-responsive mole">
                            </div>
                            <!-- //.project-wrapper -->
                        </div>
                        <!-- //.item -->

                        <div class="item col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="{{{ action('HomeController@showAdlisterpics') }}}" class="zoom" title="The First Encounter">
                                        <i class="fa fa-search-plus"></i>
                                    </a>

                                    <a href="{{{ action('HomeController@showAdlisterpics') }}}" class="external-link" target="_blank">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link -->

                                <div class="project-title">
                                    <h4>Craigslist Mockup to post Ads on</h4>
                                </div>
                                <!-- //.project-title -->

                                <img src="/img/resume/adlister.png" alt="" class="img-responsive mole">
                            </div>
                            <!-- //.project-wrapper -->
                        </div>
                        <!-- //.item -->

                        <div class="item col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="{{{ action('WorkoutController@index') }}}" class="zoom" title="Dead Pool">
                                        <i class="fa fa-search-plus"></i>
                                    </a>

                                    <a href="{{{ action('WorkoutController@index') }}}" class="external-link" target="_blank">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link -->

                                <div class="project-title">
                                    <h4>Workout Tracking Web-app</h4>
                                </div>
                                <!-- //.project-title -->

                                <img src="/img/resume/workout1.png" alt="" class="img-responsive mole">
                            </div>
                            <!-- //.project-wrapper -->
                        </div>
                        <!-- //.item -->

                        <div class="item col-sm-6 col-md-3">
                            <div class="project-wrapper">
                                <div class="project-link">
                                    <a href="/img/resume/simon1.png" class="zoom" title="Rebus II">
                                        <i class="fa fa-search-plus"></i>
                                    </a>

                                    <a href="single-portfolio-2.html" class="external-link" target="_blank">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                                <!-- //.project-link -->

                                <div class="project-title">
                                    <h4>Rebus II</h4>
                                </div>
                                <!-- //.project-title -->

                                <img src="/img/resume/simon1.png" alt="" class="img-responsive mole">
                            </div>
                            <!-- //.project-wrapper -->
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.row -->
                </div>
    <!-- //. PORTFOLIO SECTION END -->
    <!-- SERVICES SECTION START -->
    <section id="services" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="section-title uppercase">What I'm Doing</h2>
                        <p class="section-subtitle">
                            I love what I do. I take great pride in what I do. And I can't do something halfway, three-quarters, nine-tenths. If I'm going to do something, I go all the way.
                        </p>
                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->
                <!-- SERVICES START -->
                <div class="services">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 item top dark-bg">
                            <div class="inner-content">
                                <i class="glyphicon glyphicon-knight colored-text"></i>
                                <h4 class="uppercase">1. Strategy</h4>
                                <p class="text-grey">
                                    Implement very well thought out and proven work/team stratagies to get the job done right and on time.
                                </p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->
                        <div class="col-sm-4 col-md-4 item top">
                            <div class="inner-content">
                                <i class="fa fa-android colored-text"></i>
                                <h4 class="uppercase">2. Branding</h4>
                                <p class="text-grey">
                                    Really good at helping get branding down and finding ways to help get your companies name known.
                                </p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->
                        <div class="col-sm-4 col-md-4 item top dark-bg">
                            <div class="inner-content">
                                <i class=" fa fa-pencil-square-o colored-text"></i>
                                <h4 class="uppercase">3. Web Design</h4>
                                <p class="text-grey">
                                    Good drawing and PhotoShop skills to help design and layout logos and websites prior to building. Great to be able to have all needs met at one place.
                                </p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.row -->
                    <div class="row">
                        <div class="col-sm-4 col-md-4 item">
                            <div class="inner-content">
                                <i class="fa fa-comments-o colored-text"></i>
                                <h4 class="uppercase">4. Social Media</h4>
                                <p class="text-grey">
                                    Great at gaining followers and likes on multiple social media networks.
                                </p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->
                        <div class="col-sm-4 col-md-4 item dark-bg">
                            <div class="inner-content">
                                <i class="fa fa-laptop colored-text"></i>
                                <i class="fa fa-mobile colored-text"></i>
                                <i class="fa fa-desktop colored-text"></i>
                                <h4 class="uppercase">5. Development</h4>
                                <p class="text-grey">
                                    Able to program in many languages to maximize the versitility of your websites visual optimization.
                                </p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->
                        <div class="col-sm-4 col-md-4 item">
                            <div class="inner-content">
                                <i class="fa fa-group colored-text"></i>
                                <h4 class="uppercase">6. Consulting</h4>
                                <p class="text-grey">
                                    Works well with others and loves peer learning and teaching.
                                </p>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.row -->
                </div>
                <!-- //SERVICES END -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //SERVICES SECTION END -->
    <!-- STRENGHTS SECTION START -->
    <section id="strenghts" class="section bg-image-yes">
        <div class="container-fluid section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="section-title uppercase">My Strengths</h2>

                        <p class="section-subtitle">Failure will never overtake me if my determination to succeed is strong enough.</p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->
                
                <div class="row">
                    <div class="col-md-12">

                        <!-- COLUMN CHART START -->
                        <div class="column-chart">
                            <div class="legend legend-left hidden-xs">
                                <h3 class="legend-title">ME</h3>
                            </div>
                            <!-- //.legend -->

                            <div class="legend legend-right hidden-xs">
                                <div class="item">
                                    <h4>Superhero</h4>
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <h4>Preety Good</h4>
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <h4>Good</h4>
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <h4>Newbie</h4>
                                </div>
                                <!-- //.item -->
                            </div>
                            <!-- //.legend -->

                            <div class="chart clearfix">
                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">83%</span>

                                        <div class="item-progress" data-percent="83">
                                            <span class="title uppercase">Creativity</span>
                                        </div>
                                        <!-- //.item-progress -->
                                    </div>
                                    <!-- //.bar -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">98%</span>

                                        <div class="item-progress" data-percent="98">
                                            <span class="title uppercase">Reliable</span>
                                        </div>
                                        <!-- //.item-progress -->
                                    </div>
                                    <!-- //.bar -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">90%</span>

                                        <div class="item-progress" data-percent="90">
                                            <span class="title uppercase">Comunication</span>
                                        </div>
                                        <!-- //.item-progress -->
                                    </div>
                                    <!-- //.bar -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">88%</span>

                                        <div class="item-progress" data-percent="88">
                                            <span class="title uppercase">Leadership</span>
                                        </div>
                                        <!-- //.item-progress -->
                                    </div>
                                    <!-- //.bar -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">96%</span>

                                        <div class="item-progress" data-percent="96">
                                            <span class="title uppercase">Passion</span>
                                        </div>
                                        <!-- //.item-progress -->
                                    </div>
                                    <!-- //.bar -->
                                </div>
                                <!-- //.item -->
                            </div>
                            <!-- //.chart -->
                        </div>
                        <!-- //COLUMN CHART END -->

                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //STRENGHTS SECTION END -->
    <!-- RESUME SECTION START -->
    <section id="resume" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="section-title uppercase">My Resume</h2>

                        <p class="section-subtitle">
                            If you call failures experiments, you can put them in your resume and claim them as achievements.
                        </p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->
                
                <!-- EDUCATION START -->
                <div class="row education">
                    <div class="col-md-10 col-md-offset-1">
                        <h3>
                            My Education
                            <br>
                            2011 - 2015
                        </h3>

                        <div class="panel-group resume" id="education">
                            <div class="resume-item">
                                <div class="resume-year">
                                    <span class="resume-year">2015 - 2015</span>
                                </div>
                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#education1" data-toggle="collapse" data-parent="#education"></a>
                                </div>
                                <!-- //.resume-btn -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4 class="resume-title">Codeup</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="education1" class="panel-collapse collapse in">
                                        <div class="panel-body text-grey">
                                            <p>
                                                Graduate Type: Entry-Level Software Engineer <br>
                                                Technologies: Proficiency in PHP + JavaScript + Laravel + jQuery. Exposure to MySQL, Linux, Apache/nginx, cloud deployments (<a title="Codeup Full-Stack Syllabus" href="http://codeup.com/codeup-full-stack-syllabus/" target="_blank">Syllabus</a>)<br>
                                                Duration: 4 months<br>
                                                Coding hours: Classroom hours during program (480) + study hall hours (288) = 768 total<br>
                                                Schedule: Full-time: 9am-4pm, Monday through Friday<br>
                                                Student-to-Teacher Ratio: 8:1, on average
                                            </p>
                                        </div>
                                        <!-- //.panel-body -->
                                    </div>
                                    <!-- //.panel-collapse -->
                                </div>
                                <!-- //.panel -->
                            </div>
                            <!-- //.resume-item -->

                            <div class="resume-item">
                                <div class="resume-year">
                                    <span class="resume-year">2011 - 2013</span>
                                </div>
                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#education2" class="collapsed" data-toggle="collapse" data-parent="#education"></a>
                                </div>
                                <!-- //.resume-btn -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4 class="resume-title">Worked Towards Nursing Degree -  UTSA</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="education2" class="panel-collapse collapse">
                                        <div class="panel-body text-grey">
                                            <p>
                                                While attending UTSA on a path to get my Bachlors degree in nursing I was required to take a computer class as part of my basics. This is where I initially discovered that I was genuinely interested in web development. My Wife's father has been a Web Developer for over 20 years and before that was a nurse; so I spoke with him and he guided me to some online programming schools.
                                            </p>
                                        </div>
                                        <!-- //.panel-body -->
                                    </div>
                                    <!-- //.panel-collapse -->
                                </div>
                                <!-- //.panel -->
                            </div>
                            <!-- //.resume-item -->

                            <div class="resume-item">
                                <div class="resume-year">
                                    <span class="resume-year">2007 - 2011</span>
                                </div>
                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#education3" class="collapsed" data-toggle="collapse" data-parent="#education"></a>
                                </div>
                                <!-- //.resume-btn -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4 class="resume-title">Graduation -  Smithson Valley HS</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="education3" class="panel-collapse collapse">
                                        <div class="panel-body text-grey">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
                                            </p>
                                        </div>
                                        <!-- //.panel-body -->
                                    </div>
                                    <!-- //.panel-collapse -->
                                </div>
                                <!-- //.panel -->
                            </div>
                            <!-- //.resume-item -->
                        </div>
                        <!-- //.panel-group -->
                    </div>
                    <!-- //.col-md-10 -->
                </div>
                <!-- //EDUCATION END -->
            
                <!-- WORK EXPERIENCE START -->
                <div class="row work-experience">
                    <div class="col-md-10 col-md-offset-1">
                        <h3>
                            Work Experience
                            <br>
                            2011 - Now
                        </h3>

                        <div class="panel-group resume" id="work">
                            <div class="resume-item">
                                <div class="resume-year">
                                    <span class="resume-year">2014 - Now</span>
                                </div>
                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#work1" data-toggle="collapse" data-parent="#work"></a>
                                </div>
                                <!-- //.resume-btn -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4 class="resume-title">Senior Developer/ Owner - Domain Builder</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="work1" class="panel-collapse collapse in">
                                        <div class="panel-body text-grey">
                                            <p>
                                                Responsibilities:
                                                <br>
                                                Owner and developer at <a href="www.domain-builder.com">Domain Builder</a>. A custom website hosting and building company for the average company in need of a strong web pressence.
                                            </p>
                                        </div>
                                        <!-- //.panel-body -->
                                    </div>
                                    <!-- //.panel-collapse -->
                                </div>
                                <!-- //.panel -->
                            </div>
                            <!-- //.resume-item -->

                            <div class="resume-item">
                                <div class="resume-year">
                                    <span class="resume-year">2013 - now</span>
                                </div>
                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#work2" class="collapsed" data-toggle="collapse" data-parent="#work"></a>
                                </div>
                                <!-- //.resume-btn -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4 class="resume-title">Pharmacy Technician - H-E-B</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="work2" class="panel-collapse collapse">
                                        <div class="panel-body text-grey">
                                            <p>
                                                Responsibilities:
                                                <br>
                                                Design of print collateral and trade show displays, redesign of company website and microsites, design and development of email blasts, development of brands for affiliate organizations.
                                            </p>
                                        </div>
                                        <!-- //.panel-body -->
                                    </div>
                                    <!-- //.panel-collapse -->
                                </div>
                                <!-- //.panel -->
                            </div>
                            <!-- //.resume-item -->

                            <div class="resume-item">
                                <div class="resume-year">
                                    <span class="resume-year">2011 - 2013</span>
                                </div>
                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#work3" class="collapsed" data-toggle="collapse" data-parent="#work"></a>
                                </div>
                                <!-- //.resume-btn -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4 class="resume-title">Pizza Delivery - Pizza Hut</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="work3" class="panel-collapse collapse">
                                        <div class="panel-body text-grey">
                                            <p>
                                                Responsibilities:
                                                <br>
                                                Filming and editing of promotional videos, administration of system and network integrity.
                                            </p>
                                        </div>
                                        <!-- //.panel-body -->
                                    </div>
                                    <!-- //.panel-collapse -->
                                </div>
                                <!-- //.panel -->
                            </div>
                            <!-- //.resume-item -->

                            <div class="resume-item">
                                <div class="resume-year">
                                    <span class="resume-year">2011 - 2013</span>
                                </div>
                                <!-- //.resume-year -->

                                <div class="resume-btn">
                                    <a href="#work4" class="collapsed" data-toggle="collapse" data-parent="#work"></a>
                                </div>
                                <!-- //.resume-btn -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4 class="resume-title">Pharmacy Technician - Berry Oaks Pharmacy</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="work4" class="panel-collapse collapse">
                                        <div class="panel-body text-grey">
                                            <p>
                                                Responsibilities:
                                                <br>
                                                Redesign of brand guidelines and standards microsite, design of departmental logo lock-ups, photography of products for marketing collateral, design of corporate Twitter layout.
                                            </p>
                                        </div>
                                        <!-- //.panel-body -->
                                    </div>
                                    <!-- //.panel-collapse -->
                                </div>
                                <!-- //.panel -->
                            </div>
                            <!-- //.resume-item -->
                        </div>
                        <!-- //.panel-group -->
                    </div>
                    <!-- //.col-md-10 -->
                </div>
                <!-- //WORK EXPERIENCE END -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //RESUME SECTION END -->
    
    
    <!-- REFERENCES SECTION START -->
    <section id="references" class="section bg-image-yes">
        <div class="container-fluid section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-title uppercase">References</h2>

                        <p class="section-subtitle">Testimonials are enough to convince people for now.</p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->
                
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="flexslider references">
                            <div class="slides">
                                <div class="item">
                                    <div class="animated" data-animation-effect="flipInX">
                                        <div class="profile hidden-xs">
                                            <img src="assets/images/references/profile-image-1.jpg" alt="" class="img-responsive img-circle img-thumbnail"/>
                                        </div>

                                        <div class="content">
                                            <h3>Lorena Group</h3>

                                            <p>
                                                "Berg is officially the man! His level of professionalism and the understanding of the subject matter is the reason i will be looking forward to working with him in the future."
                                            </p>

                                            <p class="source">
                                                Eka Sari Lorena
                                                <br>
                                                <span>President Director</span>
                                            </p>
                                        </div>
                                        <!-- //.content -->
                                    </div>
                                    <!-- //.animated -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="animated" data-animation-effect="flipInX">
                                        <div class="profile hidden-xs">
                                            <img src="assets/images/references/profile-image-2.jpg" alt="" class="img-responsive img-circle img-thumbnail"/>
                                        </div>

                                        <div class="content">
                                            <h3>NET TV</h3>

                                            <p>
                                                "As always Berg did an excellent job in just few hours. Great communication and fast excecution. Thanks for great work :)"
                                            </p>

                                            <p class="source">
                                                Wishnutama Kusubandio
                                                <br>
                                                <span>CO-FOUNDER / CEO</span>
                                            </p>
                                        </div>
                                        <!-- //.content -->
                                    </div>
                                    <!-- //.animated -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="animated" data-animation-effect="flipInX">
                                        <div class="profile hidden-xs">
                                            <img src="assets/images/references/profile-image-3.jpg" alt="" class="img-responsive img-circle img-thumbnail"/>
                                        </div>

                                        <div class="content">
                                            <h3>MNC Group</h3>

                                            <p>
                                                "As always, great creative thinking for the best solution. Berg is by far the most professional and knowledgeable provider I worked with. I will hire him again :)"
                                            </p>

                                            <p class="source">
                                                Hary Tanoesoedibjo
                                                <br>
                                                <span>President Director</span>
                                            </p>
                                        </div>
                                        <!-- //.content -->
                                    </div>
                                    <!-- //.animated -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="animated" data-animation-effect="flipInX">
                                        <div class="profile hidden-xs">
                                            <img src="assets/images/references/profile-image-4.jpg" alt="" class="img-responsive img-circle img-thumbnail"/>
                                        </div>

                                        <div class="content">
                                            <h3>CT Corp</h3>

                                            <p>
                                                "We called on Berg to help us deliver on few projects with tight deadlines. He seamlessly integrated into our workflow and quickly became a key part of our team. Great job!"
                                            </p>

                                            <p class="source">
                                                Chairul Tanjung
                                                <br>
                                                <span>Founder and Chairman</span>
                                            </p>
                                        </div>
                                        <!-- //.content -->
                                    </div>
                                    <!-- //.animated -->
                                </div>
                                <!-- //.item -->

                                <div class="item">
                                    <div class="animated" data-animation-effect="flipInX">
                                        <div class="profile hidden-xs">
                                            <img src="assets/images/references/profile-image-5.jpg" alt="" class="img-responsive img-circle img-thumbnail"/>
                                        </div>

                                        <div class="content">
                                            <h3>Mustika Ratu</h3>

                                            <p>
                                                "Berg technical knowledge and branding experience came together and resulted in a site that is not only catching and interesting, but also one that is user-friendly. Thanks again."
                                            </p>

                                            <p class="source">
                                                Mooryati Soedibyo
                                                <br>
                                                <span>President Director</span>
                                            </p>
                                        </div>
                                        <!-- //.content -->
                                    </div>
                                    <!-- //.animated -->
                                </div>
                                <!-- //.item -->
                            </div>
                            <!-- //.slides -->

                            <div class="flexslider-controls">
                                <ul class="flex-control-nav">
                                    <li>
                                        <img src="assets/images/references/profile-image-1.jpg" alt="" class="img-responsive"/>
                                    </li>

                                    <li>
                                        <img src="assets/images/references/profile-image-2.jpg" alt="" class="img-responsive"/>
                                    </li>

                                    <li>
                                        <img src="assets/images/references/profile-image-3.jpg" alt="" class="img-responsive"/>
                                    </li>

                                    <li>
                                        <img src="assets/images/references/profile-image-4.jpg" alt="" class="img-responsive"/>
                                    </li>

                                    <li>
                                        <img src="assets/images/references/profile-image-5.jpg" alt="" class="img-responsive"/>
                                    </li>
                                </ul>
                            </div>
                            <!-- //.flexslider-controls -->

                            <ul class="flex-direction-nav-custom list-inline hidden-xs">
                                <li>
                                    <a class="flex-prev" href="#">
                                        <i class="icon-Left-3"></i>
                                    </a>
                                </li>

                                <li>
                                    <a class="flex-next" href="#">
                                        <i class="icon-Right-3"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- //.flexslider -->
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //REFERENCES SECTION END -->
    
    
    <!-- SKILLS SECTION START -->
    <section id="skills" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="section-title uppercase">Skills & Expertise</h2>

                        <p class="section-subtitle">A winner is someone who recognizes his God-given talents, works his tail off to develop them into skills, and uses these skills to accomplish his goals.</p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->
                
                <!-- CIRCLE CHART START -->
                <div class="circle-chart">
                    <div class="row">
                        <div class="col-sm-4 col-md-2">
                            <div class="item">
                                <div class="circle">
                                    <span class="item-progress" data-percent="95"></span>
                                </div>
                                <!-- //.circle -->

                                <span class="percent">95%</span>

                                <h4 class="text-center uppercase">HTML5 + CSS3</h4>
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.col-md-2 -->

                        <div class="col-sm-4 col-md-2">
                            <div class="item">
                                <div class="circle">
                                    <span class="item-progress" data-percent="85"></span>
                                </div>
                                <!-- //.circle -->

                                <span class="percent">85%</span>

                                <h4 class="text-center uppercase">JS</h4>
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.col-md-2 -->

                        <div class="col-sm-4 col-md-2">
                            <div class="item">
                                <div class="circle">
                                    <span class="item-progress" data-percent="80"></span>
                                </div>
                                <!-- //.circle -->

                                <span class="percent">80%</span>

                                <h4 class="text-center uppercase">Laravel</h4>
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.col-md-2 -->

                        <div class="col-sm-4 col-md-2">
                            <div class="item">
                                <div class="circle">
                                    <span class="item-progress" data-percent="90"></span>
                                </div>
                                <!-- //.circle -->

                                <span class="percent">90%</span>

                                <h4 class="text-center uppercase">PHP</h4>
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.col-md-2 -->

                        <div class="col-sm-4 col-md-2">
                            <div class="item">
                                <div class="circle">
                                    <span class="item-progress" data-percent="90"></span>
                                </div>
                                <!-- //.circle -->

                                <span class="percent">90%</span>

                                <h4 class="text-center uppercase"> SASS</h4>
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.col-md-2 -->

                        <div class="col-sm-4 col-md-2">
                            <div class="item last">
                                <div class="circle">
                                    <span class="item-progress" data-percent="85"></span>
                                </div>
                                <!-- //.circle -->

                                <span class="percent">85%</span>

                                <h4 class="text-center ">MySQL </h4>
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.col-md-2 -->
                    </div>
                    <!-- //.row -->
                </div>
                <!-- //CIRCLE CHART END -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //SKILLS SECTION END -->
    
    
    <!-- KNOWLEDGE SECTION START -->
    <section id="knowledge" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="section-title uppercase">Knowledge</h2>

                        <p class="section-subtitle">Human behavior flows from three main sources: desire, emotion, and knowledge.</p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->
                
                <!-- BAR CHART START -->
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="bar-chart">
                            <div class="item">
                                <h4 class="uppercase">Brand Marketing</h4>

                                <div class="bar">
                                    <span class="percent">55%</span>
                                    <span class="item-progress" data-percent="55"></span>
                                </div>
                                <!-- //.bar -->
                            </div>
                            <!-- //.item -->

                            <div class="item">
                                <h4 class="uppercase">Web Development</h4>

                                <div class="bar">
                                    <span class="percent">95%</span>
                                    <span class="item-progress" data-percent="95"></span>
                                </div>
                                <!-- //.bar -->
                            </div>
                            <!-- //.item -->

                            <div class="item">
                                <h4 class="uppercase">Digital Design</h4>

                                <div class="bar">
                                    <span class="percent">75%</span>
                                    <span class="item-progress" data-percent="75"></span>
                                </div>
                                <!-- //.bar -->
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.bar-chart -->
                    </div>
                    <!-- //.col-md-6 -->

                    <div class="col-sm-6 col-md-6">
                        <div class="bar-chart">
                            <div class="item">
                                <h4 class="uppercase">Brand Design</h4>

                                <div class="bar">
                                    <span class="percent">75%</span>
                                    <span class="item-progress" data-percent="75"></span>
                                </div>
                                <!-- //.bar -->
                            </div>
                            <!-- //.item -->

                            <div class="item">
                                <h4 class="uppercase">Internet Marketing</h4>

                                <div class="bar">
                                    <span class="percent">80%</span>
                                    <span class="item-progress" data-percent="80"></span>
                                </div>
                                <!-- //.bar -->
                            </div>
                            <!-- //.item -->

                            <div class="item">
                                <h4 class="uppercase">Photo Editing</h4>

                                <div class="bar">
                                    <span class="percent">75%</span>
                                    <span class="item-progress" data-percent="75"></span>
                                </div>
                                <!-- //.bar -->
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //.bar-chart -->
                    </div>
                    <!-- //.col-md-6 -->
                </div>
                <!-- //BAR CHART END -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
        
    </section>
    <!-- //KNOWLEDGE SECTION END -->
    
    
    <!-- ACCOLADES SECTION START -->
    <section id="accolades" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="section-title uppercase">Accolades</h2>

                        <p class="section-subtitle">The accolades, just like the scrapes and bruises, fade in the end, and all you're left with is your ambition.</p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->
                
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">

                        <!-- ACCOLADES START -->
                        <div class="accolades">
                            <div class="item">
                                <i class="fa fa-twitter"></i>

                                <div class="content">
                                    <h3>Marketing Excellence Awards 2014</h3>

                                    <p class="text-grey">Excellence in Social Media Marketing</p>
                                </div>
                                <!-- //.content -->
                            </div>
                            <!-- //.item -->

                            <div class="item">
                                <i class="fa fa-lightbulb-o"></i>
                                <div class="content">
                                    <h3>The "Big Idea" Competition 2012</h3>

                                    <p class="text-grey">Top 3 Team</p>
                                </div>
                                <!-- //.content -->
                            </div>
                            <!-- //.item -->

                            <div class="item">
                                <i class="fa fa-paint-brush"></i>

                                <div class="content">
                                    <h3>Water Seven Art Directors Club Awards 2010</h3>

                                    <p class="text-grey">Finalist - Design</p>

                                    <p class="text-grey">Finalist - Print Ad</p>
                                </div>
                                <!-- //.content -->
                            </div>
                            <!-- //.item -->

                            <div class="item">
                                <i class="glyphicon glyphicon-headphones"></i>
                                <div class="content">
                                    <h3>Young Guns Award 2009</h3>

                                    <p class="text-grey">Finalist - Digital Campaign</p>
                                </div>
                                <!-- //.content -->
                            </div>
                            <!-- //.item -->
                        </div>
                        <!-- //ACCOLADES END -->

                        <div class="bookmark text-grey text-center">
                            <i class="icon-Bookmark"></i>
                        </div>
                        <!-- //.bookmark -->
                    </div>
                    <!-- //.col-md-6 -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //ACCOLADES SECTION END -->
        <!-- MILESTONES SECTION START -->
    <section id="milestones" class="section bg-image-yes">
        <div class="container-fluid section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 class="section-title uppercase">Milestones Achieved</h2>

                        <p class="section-subtitle">My path has not been determined. I shall have more experiences and pass many more milestones.</p>

                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-8 -->
                </div>
                <!-- //.row -->
                
                <!-- MILESTONES START -->
                <div class="milestones">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <div class="circle">
                                <i class="fa fa-coffee"></i>
                            </div>
                            <!-- //.circle -->
                            <span class="number" data-from="10" data-to="560" data-refresh-interval="6">
                                560
                            </span>
                            <h4>Cups of Tea</h4>
                        </div>
                        <!-- //.item -->
                        <div class="col-sm-6 col-md-3 item">
                            <div class="circle">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <!-- //.circle -->
                            <span class="number" data-from="5" data-to="640" data-refresh-interval="6   ">
                                640
                            </span>
                            <h4>Hours Worked</h4>
                        </div>
                        <!-- //.item -->
                        <div class="col-sm-6 col-md-3 item">
                            <div class="circle">
                                <i class="fa fa-code"></i>
                            </div>
                            <!-- //.circle -->
                            <span class="number" data-from="0" data-to="6" data-refresh-interval="3">
                                6
                            </span>
                            <h4>Succesful Projects</h4>
                        </div>
                        <!-- //.item -->
                        <div class="col-sm-6 col-md-3 item">
                            <div class="circle">
                                <i class="fa fa-smile-o"></i>
                            </div>
                            <!-- //.circle -->
                            <span class="number" data-from="0" data-to="6" data-refresh-interval="3">
                                6
                            </span>
                            <h4>Happy Clients</h4>
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.row -->
                </div>
                <!-- //MILESTONES END -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //MILESTONES SECTION END -->
    <!-- WORK PROCESS SECTION START -->
    <section id="work-process" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-title uppercase">Work Process</h2>
                        <p class="section-subtitle">
                            As a human being, I'm work in process.
                        </p>
                        <span class="divider center"></span>
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-grey text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->
                <!-- WORK PROCESS START -->
                <div class="work-process">
                    <div class="row">
                        <div class="col-sm-2 col-md-2 item no-margin first">
                            <div class="inner-content">
                                <i class="fa fa-lightbulb-o"></i>
                                <span class="title">1. Idea</span>
                                <span class="dot"></span>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->
                        <div class="col-sm-2 col-md-2 item">
                            <div class="inner-content">
                                <i class="fa fa-pencil"></i>
                                <span class="title">2. Sketch</span>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->
                        <div class="col-sm-2 col-md-2 item no-margin">
                            <div class="inner-content">
                                <i class="fa fa-desktop"></i>
                                <span class="title">3. Design</span>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->
                        <div class="col-sm-2 col-md-2 item">
                            <div class="inner-content">
                                <i class="fa fa-code"></i>
                                <span class="title">4. Develop</span>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->
                        <div class="col-sm-2 col-md-2 item no-margin">
                            <div class="inner-content">
                                <i class="fa fa-bug"></i>
                                <span class="title">5. Test</span>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->
                        <div class="col-sm-2 col-md-2 item last">
                            <div class="inner-content">
                                <i class="fa fa-rocket"></i>
                                <span class="title">6. Launch</span>
                                <span class="dot"></span>
                            </div>
                            <!-- //.inner-content -->
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.row -->
                </div>
                <!-- //WORK PROCESS END -->
                
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-grey text-justify">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </p>
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //WORK PROCESS SECTION END -->
    <!-- CONTACT SECTION START -->
    <section id="contact" class="section">
        <div class="container section-wrapper">
            <div class="section-content">
                <div class="row">
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

                            <h4 class="text-grey">remingtonwilliams@gmail.com</h4>

                            <span class="divider center"></span>
                        </div>
                        <!-- //CONTACT DETAILS END -->
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->
            </div>
            <!-- //.section-content -->
        </div>
        <!-- //.container -->
    </section>
    <!-- //CONTACT SECTION END -->
    <!-- FOOTER START -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-scroll">
                        <a href="#home"><i class="fa fa-chevron-up"></i></a>
                    </div>
                    <!-- //.page-scroll -->
                    
                    <ul class="list-inline social-icons">
                        <li>
                            <div class="item">
                                <a href="https://www.facebook.com/remingtonandniki.williams" target="_blank">
                                    <i alt="facebook" class="fa fa-facebook" ></i>
                                </a>
                            </div>
                            <!-- //.item -->
                        </li>
                        
                        <li>
                            <div class="item">
                                <a href="https://twitter.com/remingtonlw" target="_blank">
                                    <i alt="twitter" class="fa fa-twitter"></i>
                                </a>
                            </div>
                            <!-- //.item -->
                        </li>
                        
                        <li>
                            <div class="item">
                                <a href="https://www.linkedin.com/pub/remington-williams/105/134/25b" target="_blank">
                                    <i alt="linkedin" class="fa fa-linkedin"></i>
                                </a>
                            </div>
                            <!-- //.item -->
                        </li>
                        
                        <li>
                            <div class="item">
                                <a href="https://github.com/remington9" target="_blank">
                                    <i alt="github" class="fa fa-github"></i>
                                </a>
                            </div>
                            <!-- //.item -->
                        </li>
                        
                        <li>
                            <div class="item">
                                <a href="#" target="_blank">
                                    <i alt="pinterest" class="fa fa-pinterest"></i>
                                </a>
                            </div>
                            <!-- //.item -->
                        </li>
                    </ul>
                </div>
                <!-- //.col-md-12 -->
            </div>
            <!-- //.row -->
            
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright text-center">
                        <p class="text-grey">&copy; 2015 Remington Williams. All rights reserved.</p>
                    </div>
                    <!-- //.copyright -->
                </div>
                <!-- //.col-md-12 -->
            </div>
            <!-- //.row -->
        </div>
        <!-- //.container -->
    </footer>
    <!-- //FOOTER END -->
    <!-- Modal -->
    <div class="modal fade" id="myModalwrapper" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Download Resume</h4>
          </div>
          <div class="modal-body">
            I will be uploading a pdf copy of my resume here later!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save to Downloads</button>
          </div>
        </div>
      </div>
    </div>
   <!-- // Modal end -->
    <!-- Main JS -->
    <!-- plugins js -->
    <script src="/plugins/sticky/jquery.sticky.js"></script>
    <script src="/plugins/easing/jquery.easing.min.js"></script>
    <script src="/plugins/jpreloader/js/jpreloader.min.js"></script>
    <script src="/plugins/detectmobilebrowser/detectmobilebrowser.js"></script>
    <script src="/plugins/debouncer/debouncer.js"></script>
    <script src="/plugins/inviewer/jquery.inview.min.js"></script>
    <script src="/plugins/matchHeight/jquery.matchHeight-min.js"></script>
    <script src="/plugins/countTo/jquery.countTo.js"></script>
    <script src="/plugins/magnificPopup/jquery.magnific-popup.min.js"></script>
    <script src="/plugins/flexSlider/jquery.flexslider-min.js"></script>
    <!-- Animation JS-->
    <script src="/js/main.js"></script>
    <script src="/js/animation.js"></script>
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
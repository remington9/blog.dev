<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Simon Says Game</title>
	<link rel="stylesheet" type="text/css" href="/css/simplesimon.css">
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<!-- The raptorize file  -->
	<script src="/js/jquery.raptorize.1.0.js"></script>
</head>
<body>
	<div class="wrapper">
		<h1>Simple Simon</h1>
			<div class="game-board">
				<div class="simon">
					<div class="tile red" data-number="0" id="0"></div>
					<div class="tile blue" data-number="1" id="1"></div>
					<div class="tile purple" data-number="2" id="2"></div>
					<div class="tile green" data-number="3" id="3"></div>
				</div>
			</div>
			<div class="game-info">
		        <button id="round" class="btn btn-lrg" disabled="disabled">Round # 0</button>
		        <button id="start" class="btn btn-lrg">Start</button>
		        <button id="myButton" class="btn btn-lrg btn-block">Reset</button>
			</div>
	</div>
	<script src="/js/simplesimon.min.js"></script>
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
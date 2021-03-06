<!DOCTYPE html>
<html>
<head>
	<title>Whack-a-Mole Game</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="/bootstrap-3.3.5-dist/css/bootstrap.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="/css/whackamole.css">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

</head>
<body>
	<div id="header"></div>
	<div id="asides"></div>
	<div id="clearbackground">
		Oh no! Krillin has been killed (as usual) D:<br>
		Collect all of the Dragon Balls<br>
		and Avoid Clicking Enemies to Win!
	</div>
	<div id="wrapper">
		
		<div class="empty" id="one"><img ></div>
		<div class="empty" id="two"><img ></div>
		<div class="empty" id="three"><img ></div>
		<div class="empty" id="four"><img ></div>
		<div class="empty" id="five"><img ></div>
		<div class="empty" id="six"><img ></div>
		<div class="empty" id="seven"><img ></div>
		<div class="empty" id="eight"><img ></div>
		<div class="empty" id="nine"><img ></div>
		
	</div>
	<div id="buttons">
		<button id="start" class="btn btn-lrg btn-info btn-block">Save Krillin!</button>
		<button id="gathered" class="btn btn-lrg btn-info btn-block" disabled="disabled">Balls Gathered #  !</button>
		<button id="timer" class="btn btn-lrg btn-warning btn-block" disabled="disabled">Time left 20 seconds!</button>
	</div>
	<!-- modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close reloadPage" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h2 class="modal-title" id="myModalLabel">KRILLIN LIVES AGAIN!</h2>
	      </div>
	      <div class="modal-body">
	      	<div class="thumbnail">
	    	</div>
	      </div>
	      <div class="modal-footer">
	      	<h2>(TO DIE ANOTHER DAY)!</h2>
	        <button type="button" class="btn btn-default reloadPage" data-dismiss="modal">Close</button>
	        
	      </div>
	    </div>
	  </div>
	</div>
	<!-- modal2 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close reloadPage" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h2 class="modal-title" id="myModalLabel">YOU RAN OUT OF TIME!</h2>
	      </div>
	      <div class="modal-body">
	      	<div class="thumbnail2">
	    	</div>
	      </div>
	      <div class="modal-footer">
	      	<h2>The Bad Guys Won D:!</h2>
	        <button type="button" class="btn btn-default reloadPage" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="/js/whackamole.js"></script>
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
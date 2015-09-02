<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/calculator.css">
	<title>JS Calculator project</title>
</head>
<body>
	<main id="main">
		<form method="post">
		<input type="text" id="leftOperand" value="" placeholder="first value" class="operand" name="left operand" readonly>
		<input type="text" id="operator" value="" placeholder="+ - * /" class="operator" name="operator" readonly>
		<input type="text" id="rightOperand" value="" placeholder="second value" class="operand" name="right" readonly>
		</form>
		<p class="clearfix">
			<button id="1" type="button" class="number" value="1">1</button>
			<button id="2" type="button" class="number" value="2">2</button>
			<button id="3" type="button" class="number" value="3">3</button>
			<button id="+" type="button" value="+" class="symbol">+</button>
		</p>
		<p class="clearfix">
			<button id="4" type="button" class="number" value="4">4</button>
			<button id="5" type="button" class="number" value="5">5</button>
			<button id="6" type="button" class="number" value="6">6</button>
			<button id="-" type="button" value="-" class="symbol">-</button>
		</p>
		<p class="clearfix">
			<button id="7" type="button" class="number" value="7">7</button>
			<button id="8" type="button" class="number" value="8">8</button>
			<button id="9" type="button" class="number" value="9">9</button>
			<button id="*" type="button" value="*" class="symbol">*</button>
		</p>
		<p class="clearfix">
			<button id="C" type="button" value="C">C</button>
			<button id="0" type="button" class="number" value="0">0</button>
			<button id="equals" type="button" value="=" class="symbol">=</button>
			<button id="/" type="button" value="/" class="symbol">/</button>
		</p>
	</main>
	<!-- js link -->
	<script src="/js/calculator.js"></script>
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
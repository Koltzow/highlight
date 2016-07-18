<!doctype html>

<html lang="no">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="google" content="notranslate"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>HighlightJS demo</title>

	<!-- STYLESHEETS -->
	<style>
		* {
			margin: 0;
			padding: 0;
			border: 0;
			outline: none;
			-webkit-appearance: none;
			text-decoration: none;
			font-family: arial, sans-serif;
			cursor: default;
			-webkit-font-smoothing: antialiased;
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-o-user-select: none;
			user-select: none;
			-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
		}
		
		html, body {
			width: 100%;
			height: 100%;
			background: #63dcb0;
			text-align: center;
		}
		
		h1 {
			text-align: center;
			margin-top: 200px;
			margin-bottom: 50px;
			color: #2a8564;
		}
	
		#btn1 {
			margin-top: 0px;
			background: #f21799;
			padding: 20px 30px;
			border-radius: 5px;
			color: white;
			display: inline-block;
			border-bottom: 4px solid #880051;
			font-weight: bold;
		}
		
		#btn2 {
			display: inline-block;
			margin-left: 10px;
			margin-top: 0px;
			background: #0063cc;
			padding: 20px 30px;
			border-radius: 5px;
			color: white;
			border-bottom: 4px solid #002d81;
			font-weight: bold;
		}
		
		#btn3 {
			margin-top: 20px;
			background: #f21799;
			padding: 20px 30px;
			border-radius: 5px;
			color: white;
			display: inline-block;
			border-bottom: 4px solid #880051;
			font-weight: bold;
		}
		
		#btn4 {
			display: inline-block;
			margin-left: 10px;
			margin-top: 0px;
			background: #0063cc;
			padding: 20px 30px;
			border-radius: 5px;
			color: white;
			border-bottom: 4px solid #002d81;
			font-weight: bold;
		}
	</style>
		
</head>

<body>
	<h1>HighlightJS</h1>
	<div id="btn1" class="btn">Button 1</div>
	<div id="btn2" class="btn2">Button 2</div><br />
	<div id="btn3" class="btn3">Button 3</div>
	<div id="btn4" class="btn4">Button 4</div>
	
	<script src="../src/highlight.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		
		var highlight = new Highlight('btn', 'images/highlight-solid.png');
		var highlight2 = new Highlight('btn2', 'images/highlight-light.png');
		var highlight3 = new Highlight('btn3', 'images/highlight-bright.png');
		var highlight4 = new Highlight('btn4', 'images/highlight-cross.png');
	
	</script>

</body>

</html>
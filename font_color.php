<!DOCTYPE html>
<html>
	<head>
		<title> Font and Color Exercises on Javascript | 11-02-2019 </title>
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="font_color.js"></script>
	</head>
	<body style="margin-left: 25%;">
		<h1> Font and Color Exercises on Javascript </h1>
		<textarea id="text" style="width: 300px; height: 300px;"></textarea>  <br> <br>
		<span> <label> Add font size </label> <button onclick="addFontSize()" class="btn btn-success" > + </button> </span> <br> <br>  
		<span> <label> Reduce font size </label> <button onclick="lessFontSize()" class="btn btn-success" > - </button> </span> <br> <br>

		<label> Change text color </label>
		<input type="color" name="" id="textColor" onchange="textColor(this)"> <br> <br>

		<label> Change textarea color </label>
		<input type="color" name="" id="backgroundColor" onchange="backgroundColor(this)">

	</body>
</html>
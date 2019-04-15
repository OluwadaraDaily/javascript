<!DOCTYPE html>
<html>
	<head>
		<title> Simple jQuery exercise | 14-01-2019 </title>
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
		<script src="jquery.min.js"></script>


			<script>
			$(function(){
				// alert("oiyiuhi");
				count = 1;
				$('#add').click(function(){					
					var value = parseInt($('#output').text()) + count;
					$('#output').text(value).fadeIn('slow');
					// $('#output').text("What's up?");
				});

				$('#less').click(function(){					
					var value = parseInt($('#output').text()) - count;
					if (value < 0) {
						return false;
					}

					else $('#output').text(value);
					if (value < 1) {
						$('#output').text(value).fadeOut('slow');
					}

					// $('#output').text("What's up?");

				});

			});
		</script>
	</head>
	<body style="margin-left: 700px; margin-top: 200px;">
		<p>
			<h1 style="margin-left: -120px;"> Toggle Numbers </h1>
			<button id="add" class="btn btn-primary"> + </button> <br> <br>
			<div id="output" style="display: none" class="container"> 0 </div> <br> <br>
			<button id="less" class="btn btn-secondary"> - </button>
		</p>
	</body>
</html>
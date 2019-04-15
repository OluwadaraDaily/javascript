<!DOCTYPE html>
<html>
	<head>
		<title> Regular Expressions | 12-02-2019 </title>
		<script type="text/javascript">
				function validate(){ 
				 var Address = document.forms['form']['address'];
				 var postalCode = document.forms['form']['postalCode'];
				 var oneWord = document.forms['form']['oneWord'];
				 var twoWords = document.forms['form']['twoWords'];

				 if (Address.value == "") {
				 	console.log("Address box is empty, fill it!");
				 	return Address.focus();	
				 }
				}
		</script>
	</head>
	<body>
		<h1> Regular Expressions Exercise </h1>
		<form method="POST"	onsubmit="return validate()" name="form">
			<label> Address </label>
			<textarea name="address" id="address" class="form-control">  </textarea> <br> <br>

			<label> Postal Code </label>
			<input type="text" name="postalCode" class="form-control"> <br> <br>

			<label> One word </label>
			<input type="text" name="oneWord" class="form-control">  <br> <br>

			<label> Two or more words </label>
			<input type="text" name="twoWords" class="form-control"> <br> <br>

			<input type="submit" name="submit" value="LET'S GO">

		</form>
	</body>
</html>
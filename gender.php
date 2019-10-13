<?php

     $gen = $_POST['gender'];

echo $gen;

?>

<html>
	<head>
			<title></title>
	</head>
	<body>
			<form method="post" action="gender.php">
			<fieldset>
				<legend><b>Gender</b></legend>
				<table border="0" >	
					<tr>
					<td>
						<input type="radio" name="gender" value="male" /> Male
						<input type="radio" name="gender" value="female"/> Female
						<input type="radio" name="gender" value="other"/> Other
						<?php echo $gen;?>
					</td>
					
				</tr>
				<td>
						<input type="submit" name="submit" value="Submit">
					</td>
				</table>
			</fieldset>
				</form>
	</body>
</html>
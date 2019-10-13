<?php

     $dob = $_POST['date'];

echo $dob;

?>

<html>
	<head>
			<title></title>
	</head>
	<body>
			<form method="post" action="email.php">
			<fieldset>
				<legend><b>DOB</b></legend>
				<table border="0" >	
					<tr>
					<input type="date" name="date" <?php echo $dob;?>/>
					<?php echo $dob;?>
				</tr>
				</tr>
				
					
				</tr>
				<td>
						<input type="submit" name="submit" value="Submit">
					</td>
				</table>
			</fieldset>
				</form>
	</body>
</html>
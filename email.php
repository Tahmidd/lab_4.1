<?php

     $email = $_POST['email'];

echo $email;

?>

<html>
	<head>
			<title></title>
	</head>
	<body>
			<form method="post" action="email.php">
			<fieldset>
				<legend><b>Email</b></legend>
				<table border="0" >	
					<tr>
					<input type="email" name="email" <?php echo $email;?> />
				<?php echo $email;?>
				
					
					</tr>
					<td>
						<input type="submit" name="submit" value="Submit">
					</td>
				</table>
				</fieldset>
				</form>
	</body>
</html>
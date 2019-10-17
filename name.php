<?php

     $name = $_POST['name'];

echo $name;

?>

<html>
	<head>
			<title></title>
	</head>
	<body>

			<form method="post" action="name.php">
			<fieldset>
				<legend><b>name</b></legend>
				<table border="0" >	
					<tr>
					<input type="text" name="name" value="<?php echo $name;?>"/>
					<?php
					echo $name;
					?>
				</tr>
				</tr>
				
					<td>
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
				</table>
			</fieldset>
			</form>
	</body>
</html>
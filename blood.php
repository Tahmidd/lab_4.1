<?php

     $blood = $_POST['blood'];

echo $blood;

?>

<html>
	<head>
			<title></title>
	</head>
	<body>
			<form method="post" action="blood.php">
			<fieldset>
				<legend><b>Blood Group</b></legend>
				<table border="0" >	
					<tr>
				    <td>
						<select name="blood">
							<option value="null"></option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							
						</select>
						<?php echo $blood;?>
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

<!doctype html>
<html>
	<head>
		<title>Assignment 3 part 1</title>
		<h1></h1>
	</head>
	
	<script src=""></script>	
	<body>
	<?php
	/*Here is my Php code */
	$i = -50;
	$c = 0;
	echo"<table border='2'>";
	echo"<td>Fernehite  </td> <td> Celcius </td>";
	while( $i <= 32)
	{
    	$c = (($i-32)*5/9);
		echo "<tr bgcolor='lightblue'><td>".$i."</td><td>".$c."</td></tr>";
		$i+= 5;
	}
	while( $i <= 50 && $i> 32)
	{
    	$c = (($i-32)*5/9);
		echo "<tr><td>".$i."</td><td>".$c."</td></tr>";
		$i+= 5;
	}
	echo"</table>";
	

	
	?>
	</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table border="0">		
		<?php 
		$n=10;
		$st="Lập trình php";
		for ($i=0; $i <$n ; $i++) { 
			if ($i%2==0) {
				echo '<tr><td style="background-color: blue">'.$st.'</td></tr>' ;	
			}
			else {
				echo "<tr><td>".$st."</td></tr>" ;	
			}
		}
	?>
	</table>

</body>
</html>
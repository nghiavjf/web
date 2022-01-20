<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		$a=[100];
			$j=0;
			for ($i=0; $i <=100 ; $i++) { 
				if ($i%7==0) {
					$a[$j]=$i;
					$j=$j+1;
				}
			}
		foreach ($a as $key => $value) {
						echo $value." ";
					}			
		
	?>
</body>
</html>
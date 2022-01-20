<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	
  	<form action="ngay" method="_SERVER">
  		<select name="ngay">
		<?php
			$th=$_SERVER['thang'];
			if ($th==2) {
					for ($j=1; $j <=28 ; $j++) { 
						echo '<option>'.$j.'</option>';
				}
			}
			else{
				for ($j=1; $j <=31 ; $j++) { 
				echo '<option>'.$j.'</option>';
				}	
			}
				
		?>
  	</select>
  	<select name="thang">
  		<?php  
  			for ($i=1; $i <=12 ; $i++) { 
					echo '<option>'.$i.'</option>';
			}
  		?>
  	</select>
  	<select >
  		<?php  
  			$n=2000;
  			for ($i=1; $i <=21 ; $i++) { 
					echo '<option>'.$n.'</option>';
					$n+=1;
			}
  		?>
  	</select>
  	</form>
</body>
</html>
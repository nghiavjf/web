<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		if (isset($_GET["t"])and isset($_GET["l"])and isset($_GET["n"]))
		{
			$t=$_GET["t"];
			$l=$_GET["l"];
			$n=$_GET["n"];
			if (is_numeric($t)and is_numeric($l)and is_numeric($n) ) {
				for ($i=1; $i <=$n ; $i++) { 
					$t=$t+$t*($l/100);
				}

			}
		}
		
		?>	
	<form method="GET">
			<h2>tinh lai xuat</h2>
			<table border="1" >
	    		<tr> 
	    			<td>so tien</td>
	    			<td><label><?php echo number_format($_GET["t"],2)."$"; ?></label> </td> 
	    		</tr>
	    		<tr>
	    			<td>lai xuat</td>
	    			<td><label><?php echo $l."%"; ?></label> </td>
	    		</tr>
	    		<tr>
	    			<td>so nam</td>
	    			<td><label><?php echo $n." year"; ?></label> </td>
	    		</tr>
	    		<tr>
	    			<td>tg tien</td>
	    			<td><label><?php echo number_format($t,2)."$"; ?></label> </td>
	    		</tr>
	    	</table>
		</form>
</body>
</html>
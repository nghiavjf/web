<?php
	include("ketnoi.php");
$sql = "SELECT * FROM nguoidung";
if($result = $pdo->query($sql))
{
    while($row=$result->fetch(PDO::FETCH_NUM))
    {	
    	echo $row[0] . '  ' . $row[1] . '  ' . $row[2];
	  	echo '<br />';
    }
}



?>
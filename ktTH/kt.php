<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
		if (isset($_GET["km"]))
		{
            $km=$_GET["km"];
            if($km>30){
                $tg=13000+12000*29+11000*($km-30);
            }
            else{
                $tg=13000+12000*($km-1);
            }
                	
		}	
?>
<form method="GET" class="form-check">
    <h2>Tính Tiền Taxi</h2>
    <table class="table-bordered">
        <tr?> 
            <td>Số km</td>
            <td><label><?php echo $km." km"; ?></label> </td> 
        </tr>
        <tr>
            <td>Số Tiền</td>
            <td><label><?php echo number_format($tg)." vnd"; ?></label> </td>
        </tr>
    </table>
</form>
    
</body>
</html>
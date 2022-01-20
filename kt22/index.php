<?php
session_start();
require_once('connection.php');
$query =  "SELECT * from books";

$result = $conn->query($query);

$data = array();

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shop Books</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">


</head>

<body>
    <div class="container" style="background:#while">
        <h3 align="center" style="color:black; font-size: 30px">DEMO SHOPPING CART</h3>
        <a href="giohang.php" type="button" class="btn btn-primary" style="background:#CC9999; margin-top: 20px">Giỏ Hàng</a>
        <hr>
        <table class="table-striped" id="example" >
           
            <tbody >
            <?php foreach ($data as $row) { ?>
                <tr >
                    <td colspan="2"><b><?=$row['title']?></b></td>
                </tr>
                <tr>
                    <td><b>Tác Giả : </b><?=$row['author']?><?php echo " -"; ?></td>
                    <td style="text-align: right;"><b>Giá Sách : </b><?=$row['price']?><?php echo ".000 VND "; ?></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right;">
                        <a href="add_sp.php?id=<?=$row['id']?>" type="button" class="btn" style="color:#660000 ; background:#FFE4C4">Mua sách này</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>    
        
    </div>
</body>

</html>
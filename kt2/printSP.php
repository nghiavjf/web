<?php
session_start();
require_once('connection.php');
$query =  "SELECT * from sanpham";

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
    <title>Phonghao</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Data table -->
    <link type="text/css" rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container" style="background:#99FFFF">
        <h3 align="center" style="color:#CC3300">Danh sách sản phẩm</h3>
        <hr>
        <table class="table" id="example">
            
            <thead>
                <tr>
                    <th scope="col" style="color:#660000;font-size: 20px">Mã Sản Phẩm</th>
                    <th scope="col" style="color:#660000;font-size: 20px">Tên Sản Phâm</th>
                    <th scope="col" style="color:#660000;font-size: 20px">Giới Thiệu</th>
                    <th scope="col" style="color:#660000;font-size: 20px">Số Lượng</th>
                    <th scope="col" style="color:#660000;font-size: 20px">Đơn Giá</th>
                    <th scope="col" style="color:#660000;font-size: 20px"></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $row) { ?>
                <tr>
                    <th scope="row"><?=$row['MaSP']?></th>
                    <td><?=$row['TenSP']?></td>
                    <td><?=$row['GioiThieu']?></td>
                    <td><?=$row['SoLuong']?></td>
                    <td><?=$row['DonGia']?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
    </div>
</body>

</html>
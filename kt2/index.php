<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>nghia</title>
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
    <div class="container" style="background:#CCFFCC">
        <h3 align="center" style="color:#660000; font-size: 30px">DANH SÁCH SẢN PHẨM</h3>
        <hr>
        <table class="table" id="example">
            <thead>
                <tr>
                    <th scope="col" style="color:#660000">DANH SÁCH</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php?>
                <tr>
                    <td>Thêm sản phẩm vào danh sách</td>
                    <td>
                        <a href="insertSP.php" type="button" class="btn btn-default" style="color:#660000; background: #33CCFF">Thực Hiện</a>
                        
                    </td>
                </tr>
                <tr>
                    <td>In danh sách sản phẩm</td>
                    <td>
                        <a href="printSP.php" type="button" class="btn btn-default" style="color:#660000; background: #33CCFF">Thực Hiện</a>
                        
                    </td>
                </tr>
                <tr>
                    <td>Tìm sản phẩm theo tên sản phẩm</td>
                    <td>
                        <a href="searchSP.php" type="button" class="btn btn-default" style="color:#660000; background: #33CCFF">Thực Hiện</a>
                        
                    </td>
                </tr>
            <?php?>
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
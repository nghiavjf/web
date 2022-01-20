<?php
include('../db/connect.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Thống kê</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="../css/style1.css">
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
    <body>
    <h5>Xin chào admin 
    <?php
        if(isset($_GET['login'])){
            $dangxuat=$_GET['login'];
        }else{
            $dangxuat='';
        }
        if($dangxuat=='dangxuat'){
            session_destroy();
            header('location: index.php');
        }
        $sql_select_admin=mysqli_query($mysqli,"select * from admin");
        $j=0;
        while($row_tenadmin=mysqli_fetch_array($sql_select_admin)){
            $j++;
            echo $row_tenadmin['tenadmin'];
        }
    ?> 
    <a href="?login=dangxuat">Đăng xuất</a></h5>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="xulydatcho.php">Đặt chỗ</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="xulyhoadon.php">Hóa đơn</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="xulydanhmuc.php" >Loại ô đỗ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="xulysanpham.php">Ô đỗ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="xulykhachhang.php">Khách hàng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="thongke.php" style="color:red">Thống kê</a>
            </li>
            </ul>
        </div>
        </nav><br><br>
    <div class="container">
        <div>
        <?php
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = date("Y-m");
            $sql_tk_odo = mysqli_query($mysqli,"select *, Count(datcho.maodo) as sol
            from hoadon,datcho,odo
            WHERE hoadon.madatcho=datcho.madatcho AND datcho.maodo=odo.maodo and hoadon.ngaylaphd LIKE '$date%'
            group by datcho.maodo ORDER BY sol DESC");
            $i=0;
            while($row_tk_odo=mysqli_fetch_array($sql_tk_odo)){
                $i++;
            ?>
            <input type="hidden" name="" value="<?php echo  $row_tk_odo['tenodo'] ?>" id="<?php echo 'tenodo'.$i?>">
            <input type="hidden" name="" value="<?php echo  $row_tk_odo['sol'] ?>" id="<?php echo 'soodo'.$i?>">
            <?php
            }
            ?>
            <input type="hidden" name="" value="<?php echo  $i ?>" id="i">
            <?php
            $sql_tk_m = mysqli_query($mysqli,"SELECT SUM(tongtien) FROM hoadon WHERE ngaylaphd like '$date%' and trangthaihd=1");
            $row_tk_m=mysqli_fetch_array($sql_tk_m);
            $day = (int)date("d");
            for ($i=1; $i <=$day ; $i++) {
                for ($j=1; $j <=3; $j++) { 
                    if($i<10){
                        $d_m = $date.'-0'.$i;
                    }else{
                        $d_m = $date.'-'.$i;
                    }
                    $sql_tk_dm = mysqli_query($mysqli,"SELECT SUM(tongtien) FROM hoadon,datcho,odo 
                    WHERE odo.maodo=datcho.maodo and hoadon.madatcho=datcho.madatcho and hoadon.ngaylaphd like '$d_m'  and hoadon.trangthaihd=1 and odo.maloaio=$j");
                    $row_tk_dm=mysqli_fetch_array($sql_tk_dm);
                    ?>
                    <input type="hidden" name="<?php echo 'loai'.$j.'ngay'.$i ?>" value="<?php echo  $row_tk_dm[0] ?>" id="<?php echo 'loai'.$j.'ngay'.$i?>">
                    <?php
                }
            }
            $date_y = date("Y");
            $sql_tk_y = mysqli_query($mysqli,"SELECT SUM(tongtien) FROM hoadon WHERE ngaylaphd like '$date_y%' and trangthaihd=1");
            $row_tk_y=mysqli_fetch_array($sql_tk_y);
            
            for ($i=1; $i <=12 ; $i++) { 
                if($i<10){
                    $m_y1 = $date_y.'-0'.$i;
                    $m_y2 = ($date_y-1).'-0'.$i;
                    $m_y3 = ($date_y-2).'-0'.$i;
                }else{
                    $m_y1 = $date_y.'-'.$i;
                    $m_y2 = ($date_y-1).'-'.$i;
                    $m_y3 = ($date_y-2).'-'.$i;
                }
                $sql_tk_my1 = mysqli_query($mysqli,"SELECT SUM(tongtien) FROM hoadon WHERE ngaylaphd like '$m_y1%' and trangthaihd=1");
                $row_tk_my1 = mysqli_fetch_array($sql_tk_my1);
                $sql_tk_my2 = mysqli_query($mysqli,"SELECT SUM(tongtien) FROM hoadon WHERE ngaylaphd like '$m_y2%' and trangthaihd=1");
                $row_tk_my2 = mysqli_fetch_array($sql_tk_my2);
                $sql_tk_my3 = mysqli_query($mysqli,"SELECT SUM(tongtien) FROM hoadon WHERE ngaylaphd like '$m_y3%' and trangthaihd=1");
                $row_tk_my3 = mysqli_fetch_array($sql_tk_my3);
                ?>
                <input type="hidden" name="<?php echo 't1hang'.$i ?>" value="<?php echo  $row_tk_my1[0] ?>" id="<?php echo 'nam'.$date_y.'thang'.$i?>">
                <input type="hidden" name="<?php echo 't2hang'.$i ?>" value="<?php echo  $row_tk_my2[0] ?>" id="<?php echo 'nam'.($date_y-1).'thang'.$i?>">
                <input type="hidden" name="<?php echo 't3hang'.$i ?>" value="<?php echo  $row_tk_my3[0] ?>" id="<?php echo 'nam'.($date_y-2).'thang'.$i?>">
                <?php
            }
        ?>
        </div>
        <div class="odo">
            <div id="chart3">
            </div>
        </div>

        <div class="line-chart">
        </div>

        <div class="thang">
            <div class="sum1">
                <h5 class="sum-h4">Tổng Danh Thu Tháng</h5>
                <input type="hidden"  value="<?php echo $day ?>" id="ngay">
                <h5 class="sum-h4" id="m"> 
                    <?php
                        $month = date("m/Y");
                        echo $month;
                    ?>
                </h5>
                <span class="sum-sp"><?php echo number_format($row_tk_m[0]).'vnđ' ?></span>
            </div>
            <div id="chart">
            </div>
        </div>

        <div class="line-chart">
        </div>

        <div class="nam">
            <div class="sum1">
                <h5 class="sum-h4">Tổng Danh Thu Năm</h5>
                <h5 class="sum-h4" >
                    <?php 
                        $year = date("Y");
                    ?>
                    <select name="chon_nam" class="sele_y" id="y" >
                        <option value="<?php echo $year ?>" select ><?php echo $year ?> </option>                
                        <option value="<?php echo ($year-1) ?>"><?php echo ($year-1) ?> </option>
                        <option value="<?php echo ($year-2) ?>"><?php echo ($year-2) ?> </option>
                    </select>
                </h5>
                <span class="sum-sp"><?php echo number_format($row_tk_y[0]).'vnđ' ?></span>
            </div>
            <div id="chart1">
            </div>
        </div>

    </div>

    <script>
      const soi = document.querySelector("#i");
      const a = document.querySelector("#chart1");
      let date_m = document.querySelector('#m').innerText;
      const selected =document.querySelector('#y');
      let date_y =new Date().getFullYear();
      const day = document.querySelector('#ngay').value;
      let arr1=[];
      let arr2=[];
      let arr3=[];
      let arrday=[];

      let arrsol=[];
      let arrtenodo=[];
      for (let index = 1; index <= soi.value ; index++) {
          arrtenodo.push(document.querySelector(`#tenodo${index}`).value);
          arrsol.push(Number(document.querySelector(`#soodo${index}`).value));
      }

      console.log(arrsol);

      for (let i = 1; i <= day ; i++) {
          if (document.querySelector(`#loai1ngay${i}`).value=='' && document.querySelector(`#loai2ngay${i}`).value=='' && document.querySelector(`#loai3ngay${i}`).value=='' ) {
              arr1.push(0);
              arr2.push(0);
              arr3.push(0);
          }else if(document.querySelector(`#loai1ngay${i}`).value=='' ){
              arr1.push(0);
              arr2.push(Number(document.querySelector(`#loai2ngay${i}`).value));
              arr3.push(Number(document.querySelector(`#loai3ngay${i}`).value));
          }
          else if(document.querySelector(`#loai2ngay${i}`).value=='' ){
              arr1.push(Number(document.querySelector(`#loai1ngay${i}`).value));
              arr2.push(0);
              arr3.push(Number(document.querySelector(`#loai3ngay${i}`).value));
          }else if(document.querySelector(`#loai3ngay${i}`).value=='' ){
              arr1.push(Number(document.querySelector(`#loai1ngay${i}`).value));
              arr2.push(Number(document.querySelector(`#loai2ngay${i}`).value));
              arr3.push(0);
          }else{
              arr1.push(Number(document.querySelector(`#loai1ngay${i}`).value));
              arr2.push(Number(document.querySelector(`#loai2ngay${i}`).value));
              arr3.push(Number(document.querySelector(`#loai3ngay${i}`).value));
          }

          if (i<10) {
              arrday.push(`0${i}`);
          }else{
              arrday.push(`${i}`);
          }
          
      };

      var arr=[0,0,0,0,0,0,0,0,0,0,0,0];
      function setarray(item, i){
          if(document.querySelector(`#nam${date_y}thang${i+1}`).value==''){
              return 0;
          }else{
              return  document.querySelector(`#nam${date_y}thang${i+1}`).value;
          }
      };
      var array_my = arr.map(setarray);

      var options = {
          series: [{
              name: 'ô 4 chỗ',
              data: arr1
              }, {
              name: 'ô 7 chỗ',
              data: arr2
              }, {
              name: 'ô 16 chỗ',
              data: arr3
          }],
          chart: {
              height: 350,
              type: 'line',
              zoom: {
                  enabled: false
              }
          },
          dataLabels: {
              enabled: false
          },
          stroke: {
              curve: 'straight'
          },
          title: {
            text: `Biểu đồ danh thu tháng ${date_m}`,
            align: 'center',
            style: {
              fontSize:  '20px',
              fontWeight:  'bold',
              fontFamily:  undefined,
              color:  '#263238'
              },
          },
          xaxis: {
              categories: arrday
          },
          yaxis: {
              labels: {
              formatter: function (val) {
                  var tongtien = new Intl.NumberFormat('vi-VN', { maximumSignificantDigits: 3 }).format(val)
                  return tongtien;
              },
            },
            title: {
              text: 'VNĐ',
              style: {
              fontSize:  '15px',
              fontWeight:  'bold',
              fontFamily:  undefined,
              color:  '#263238'
              },
            },
          },
          tooltip: {
              x: {
                  format: 'dd/MM/yy'
              },
          },
      };
      var chart = new ApexCharts(document.querySelector("#chart"), options);
      chart.render();

      var options = {
            series: [{
              name: "Desktops",
              data: array_my
          }],
            chart: {
            height: 350,
            type: 'line',
            zoom: {
              enabled: false
            }
          },
          dataLabels: {
            enabled: true,
          },
          stroke: {
            curve: 'straight'
          },
          title: {
            text: `Biểu đồ danh thu năm ${date_y}`,
            align: 'center',
            style: {
              fontSize:  '20px',
              fontWeight:  'bold',
              fontFamily:  undefined,
              color:  '#263238'
              },
          },
          grid: {
            row: {
              colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
              opacity: 0.5
            },
          },
          xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          },
          yaxis: {
            labels: {
              formatter: function (val) {
                  var tongtien = new Intl.NumberFormat('vi-VN', { maximumSignificantDigits: 3 }).format(val)
                  return tongtien;
              },
            },
            title: {
              text: 'VNĐ',
              style: {
              fontSize:  '15px',
              fontWeight:  'bold',
              fontFamily:  undefined,
              color:  '#263238'
              },
            },
          },
          };
          var chart1 = new ApexCharts(a, options);
          chart1.render();

          var options = {
            series: [{
            name: 'Số lần đặt chỗ',
            data: arrsol
          }],
            chart: {
            type: 'bar',
            height: 350
          },
          plotOptions: {
            bar: {
              borderRadius: 4,
              horizontal: true,
            }
          },
          dataLabels: {
            enabled: true,
          },
          title: {
            text: `Các ô đỗ được sử dụng nhiều trong tháng ${date_m}`,
            align: 'center',
            style: {
              fontSize:  '20px',
              fontWeight:  'bold',
              fontFamily:  undefined,
              color:  '#263238'
              },
          },
          xaxis: {
            categories: arrtenodo,
            title: {
              text: 'Số lần đặt chỗ',
              style: {
              fontSize:  '15px',
              fontWeight:  'bold',
              fontFamily:  undefined,
              color:  '#263238'
              },
            },
            labels: {
              formatter: function(val, index) {
                return val;
              }
            },
          }
          };
        var chart = new ApexCharts(document.querySelector("#chart3"), options);
        chart.render();

        selected.addEventListener('change', (e) =>{
        date_y = e.target.value;
        array_my=arr.map(setarray);
        a.removeChild(a.childNodes[1]);
        var options = {
          series: [{
            name: "Desktops",
            data: array_my
        }],
          chart: {
          height: 350,
          type: 'line',
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: true
        },
        stroke: {
          curve: 'straight'
        },
        title: {
          text: `Biểu đồ danh thu năm ${date_y}`,
          align: 'center',
          style: {
            fontSize:  '20px',
            fontWeight:  'bold',
            fontFamily:  undefined,
            color:  '#263238'
            },

        },
        grid: {
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        },
        yaxis: {
          labels: {
            formatter: function (val) {
                var tongtien = new Intl.NumberFormat('vi-VN', { maximumSignificantDigits: 3 }).format(val)
                return tongtien;
            },
          },
          title: {
            text: 'VNĐ',
            style: {
            fontSize:  '15px',
            fontWeight:  'bold',
            fontFamily:  undefined,
            color:  '#263238'
            },
          },
        },
        };
        var chart1 = new ApexCharts(a, options);
        chart1.render();
      });
    </script>
    </body>
</html>

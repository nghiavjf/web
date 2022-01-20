<?php
$conn = mysqli_connect("localhost", "root", "", "rating");
    //Nếu có lỗi xảy ra thì dừng đoạn mã và in ra thông báo lỗi.
    if(mysqli_connect_errno()!==0)
    {
        die("Khong the ket noi toi CSDL".mysqli_connect_error()." ocurred.");
    }
?>
<?php
function getRatingInfo($id){
	global $conn;
	$query = "SELECT * FROM rating_info WHERE product_id=".$id;
	$result = mysqli_query($conn, $query);
	$return =  'Đánh giá<br /><ul id="rating-info">';
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_array($result);
		$return .= "<li><strong>5</strong>: ".$row['rate_5']."</li>";
		$return .= "<li><strong>4</strong>: ".$row['rate_4']."</li>";
		$return .= "<li><strong>3</strong>: ".$row['rate_3']."</li>";
		$return .= "<li><strong>2</strong>: ".$row['rate_2']."</li>";
		$return .= "<li><strong>1</strong>: ".$row['rate_1']."</li>";
	}else{
		for($i = 1; $i < 6; $i++){
			$return .= "<li>".$i.": 0%</li>";
		}
	}
	$return .= "</ul>";

	return $return;
}
function setRatingInfo($id, $rate){
	global $conn;
	$query = "SELECT rate_".$rate." FROM rating_info WHERE product_id=".$id;
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);
	$i = $row['rate_'.$rate];
	$i++;
	$query = "UPDATE rating_info SET rate_".$rate."=".$i." WHERE product_id=".$id;
	$result = mysqli_query($conn,$query);
}
?>
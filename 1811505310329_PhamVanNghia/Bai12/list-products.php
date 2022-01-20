<?php
function listProduct($id){
	global $conn;
	$query = "SELECT * FROM products";
	$result = mysqli_query($conn, $query);

	$return = "";
	while($row = mysqli_fetch_array($result)){
		$rating_info = getRatingInfo($row['id']);
		$return .= '<div class="product-info">
				<div id="product-img">
					<img src="'.$row['img_url'].'" alt="" title="" />
				</div>'.$rating_info.'
				<div class="clear-fx"></div>
				<h2><a href="index.php?id='.$row['id'].'">'.$row['title'].'</a></h2></div>';
	}
	return $return;
}
?>
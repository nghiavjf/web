<?php
function getProduct($id){
	global $conn;
	$query = "SELECT * FROM products WHERE id=".$id;
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);

	$rating_info = getRatingInfo($id);
	$return = '<div id="product-img">
					<img src="'.$row['img_url'].'" alt="" title="" />
				</div>'.$rating_info.'
				<div class="clear-fx"></div>
				<h2>'.$row['title'].'</h2>';

	return $return;
}
?>
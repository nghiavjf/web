<?php
		$sql_dm = mysqli_query($mysqli,"select * from danhmuc order by dm_id asc");
	?>
	<div class="navbar-inner" style="color: #9ACD32">
            <div class="container" >
			<nav class="navbar navbar-expand-lg navbar-light bg-light" style="">
               
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <ul class="navbar-nav ml-auto text-center"  >
                        <li class="nav-item active mr-lg-2 mb-lg-0 mb-2" style="width:150px;">
                                                    <a class="nav-link" href="index.php" style="margin-top:10px; font-weight: bold">Trang chủ
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<?php
							$sql_dm_ngang = mysqli_query($mysqli,"select * from danhmuc order by dm_id asc");
							while($row_dm_ngang = mysqli_fetch_array($sql_dm_ngang)){
						?>
                                                <li class="nav-item  mr-lg-2 mb-lg-0 mb-2" >

                                                    <a class="nav-link " href="?quanly=dm&id=<?php echo $row_dm_ngang["dm_id"]?>" role="button" aria-haspopup="true" aria-expanded="false" >
								<?php echo $row_dm_ngang["dm_name"]?>
							</a>
						<?php
							}
						?>
						</li>
								
                                                <li class="nav-item" style="width:150px;">
                            <a class="nav-link" href="?quanly=lienhe" style="margin-top: 10px;">Liên hệ</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
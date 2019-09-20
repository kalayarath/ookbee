<?php
	require("connect.php")
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP Web</title>
	<link rel="stylesheet" href="/ookbee/stylesheet/bootstrap.min.css">
 	<link rel="stylesheet" href="/ookbee/stylesheet/bootstrap-theme.min.css">
</head>

<body style="margin-top: 10px;">
 	<?php
 		$perpage = 5;
 		if (isset($_GET['page'])) {
 			$page = $_GET['page'];
 		} else {
 			$page = 1;
 		}
 
 		$start = ($page - 1) * $perpage;
 
 	?>

 	<div class="container">
 		<div class="row">
 			<div class="col-lg-12">
 				<table class="table table-bordered table-hover">
 					<thead>
 					<tr>
					<th width="5%">ลำดับ</th>
					<th width="15%">ชื่อ</th>
					<th width="15%">นามสกุล</th>
					<th width="5%">เพศ</th>
					<th width="10%">วันเกิด</th>
					<th width="10%">อีเมลล์</th>
					<th width="20%">ที่อยู่</th>
					<th width="5%">เบอร์โทรศัพท์</th>
					<th width="5%">แก้ไข</th>
					<th width="5%">ลบ</th>
					</tr>
 					</thead>

 				<tbody>

 				<?php
				$sql = "SELECT * FROM userdata limit $start, $perpage";
				$result = mysqli_query($conn,$sql);
				$i = 1;
				if(mysqli_num_rows($result) > 0){
					
					while($row = mysqli_fetch_assoc($result)){
						echo"<tr>";
							echo"<td>".$row['id']."</td>";
							echo"<td>".$row['name']."</td>";
							echo"<td>".$row['lastname']."</td>";
							echo"<td>".$row['gender']."</td>";
							echo"<td>".$row['birthday']."</td>";
							echo"<td>".$row['email']."</td>";
							echo"<td>".$row['address']."</td>";
							echo"<td>".$row['telephone']."</td>";
							echo"<td><a href='edit_form.php?id=".$row['id']."'>แก้ไข</a></td>";
							echo"<td><a href='data.php?delete_id=".$row['id']."'
								onclick='return confirm(\"คุณต้องการลบข้อมูลหรือไม่\")'>ลบ</a></td>";
						echo "</tr>";
						$i++;
					}
				}else{
					echo "EMPTY DATA";
				}
				?>
				</tbody>
 				</table>
			<?php
 			$sql2 = "SELECT * FROM userdata";
 			$query2 = mysqli_query($conn, $sql2);
 			$total_record = mysqli_num_rows($query2);
 			$total_page = ceil($total_record / $perpage);
 			?>
 
 			<nav>
 				<ul class="pagination">
 				<li>
 					<a href="index.php?page=1" aria-label="Previous">
 					<span aria-hidden="true">&laquo;</span>
 					</a>
 				</li>

 				<?php for($i=1;$i<=$total_page;$i++){ ?>
 				<li><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
 				<?php } ?>

 				<li>
 				<a href="index.php?page=<?php echo $total_page;?>" aria-label="Next">
 				<span aria-hidden="true">&raquo;</span>
 				</a>
 				</li>
 				</ul>
 			</nav>
 		</div>
 	</div>
 </div> <!-- /container -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="/ookbee/js/bootstrap.min.js"></script>
 </body>

</html>

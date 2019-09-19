<?php
	require("connect.php")
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Web</title>
</head>

	<body>
		<h1> ข้อมูล user </h1>
		<a href="add_form.php">เพิ่ม user</a>
		<table border="1">
			<tr>
				<th width="5%">ลำดับ</th>
				<th width="15%">ชื่อ</th>
				<th width="15%">นามสกุล</th>
				<th width="5%">เพศ</th>
				<th width="5%">วันเกิด</th>
				<th width="15%">อีเมลล์</th>
				<th width="30%">ที่อยู่</th>
				<th width="5%">เบอร์โทรศัพท์</th>
				<th width="5%">แก้ไข</th>
				<th width="5%">ลบ</th>
			</tr>
			<?php
				$sql = "SELECT * FROM userdata";
				$result = mysqli_query($conn,$sql);
				$i = 1;
				if(mysqli_num_rows($result) > 0){
					
					while($row = mysqli_fetch_assoc($result)){
						echo"<tr>";
							echo"<td>".$i."</td>";
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
		</table>
	</body>

</html>

<?php

    require("connect.php");

    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $sql = "SELECT * FROM userdata WHERE id = $id";
        $row = mysqli_query($conn, $sql);
        $result = mysqli_fetch_assoc($row);

        if(!$result){
            echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <title>Edit User information</title>
</head>

<body>
    <form action="data.php" method="post">
        <fieldset>
            <legend>User information</legend>

            <label>ชื่อ: </label><br>
            <input type="text" name="edit_name" required value="<?php echo $result['name'] ?>"><br>

            <label>นามสกุล: </label><br>
            <input type="text" name="edit_lastname" required value="<?php echo $result['lastname'] ?>"><br>

            <label>เพศ: </label><br>
            <input type="text" name="edit_gender" required value="<?php echo $result['gender'] ?>"><br>

            <label>วันเกิด: </label><br>
            <input type="date" name="edit_birthday" required value="<?php echo $result['birthday'] ?>"><br>

            <label>อีเมลล์: </label><br>
            <input type="text" name="edit_email" required value="<?php echo $result['email'] ?>"><br>

            <label>ที่อยู่: </label><br>
            <input type="text" name="edit_address" required value="<?php echo $result['address'] ?>"><br>

            <label>เบอร์โทรศัพท์: </label><br>
            <input type="text" name="edit_telephone" required value="<?php echo $result['telephone'] ?>"><br><br>

            <input type="hidden" name="edit_form_id" value="<?php echo $result['id'] ?>">
            <input type="submit" value="Save">

        </fieldset>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="th">
<head>
    <title>Bootstrap Example</title>
</head>

<body>
    <form action="data.php" method="post">
        <fieldset>
            <legend>User information:</legend>
            <label>ชื่อ:</label><br>
            <input type="text" name="name"><br>

            <label>นามสกุล:</label><br>
            <input type="text" name="lastname"><br>

            <label>เพศ:</label><br>
            <input type="text" name="gender"><br>

            <label>วันเกิด:</label><br>
            <input type="date" name="birthday"><br>

            <label>อีเมลล์:</label><br>
            <input type="text" name="email"><br>

            <label>ที่อยู่:</label><br>
            <input type="text" name="address"><br>

            <label>เบอร์โทรศัพท์:</label><br>
            <input type="text" name="telephone"><br><br>

            <input type="submit" value="บันทึกข้อมูล">

        </fieldset>
    </form>
</body>

</html>

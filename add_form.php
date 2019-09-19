<!DOCTYPE html>
<html lang="th">
<head>
    <title>Bootstrap Example</title>
</head>

<body>
    <form action="data.php" method="post" name="myForm" onsubmit="return validateForm()">
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


<script>
function validateForm() {
  var name = document.forms["myForm"]["name"].value;
  var lastname = document.forms["myForm"]["lastname"].value;
  var gender = document.forms["myForm"]["gender"].value;
  var birthday = document.forms["myForm"]["birthday"].value;
  var email = document.forms["myForm"]["email"].value;
  var address = document.forms["myForm"]["address"].value;
  var telephone = document.forms["myForm"]["telephone"].value;
  if (name == "" || lastname == "" || gender == "" || birthday == "" || email == "" || address == "" || telephone == "") {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
}
</script>
</html>

<?php

    require("connect.php");

    //save edit data to mySQL
    if(isset($_POST['edit_form_id'])){
        $name = $_POST['edit_name'];
        $lastname = $_POST['edit_lastname'];
        $gender = $_POST['edit_gender'];
        $birthday = $_POST['edit_birthday'];
        $email = $_POST['edit_email'];
        $address = $_POST['edit_address'];
        $telephone = $_POST['edit_telephone'];
        $id = $_POST['edit_form_id'];


        $sql = "UPDATE userdata SET name='$name', lastname='$lastname', gender='$gender',
        birthday='$birthday', email='$email', address='$address',telephone='$telephone' WHERE id=$id";

        if(mysqli_query($conn, $sql)){
            echo "Record updated successfully";
            echo "<br><a href='index.php'>Back to All User Page</a>";
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else if(isset($_GET['delete_id'])){
        $id = $_GET['delete_id'];

        //to delete a record
        $sql = "DELETE FROM userdata WHERE id=$id";

        if(mysqli_query($conn, $sql)){
            echo "Record deleted successfully";
            echo "<br><a href='index.php'>Back to All User Page</a>";
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        //add new data form to mySQL
        if($_POST['name']){
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $gender = $_POST['gender'];
            $birthday = $_POST['birthday'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $telephone = $_POST['telephone'];


            $sql = "INSERT INTO `userdata`(`id`, `name`, `lastname`, `gender`, `birthday`, `email`, `address`, `telephone`) 
            VALUES (null,'$name','$lastname','$gender','$birthday','$email','$address','$telephone')";

            if(mysqli_query($conn, $sql)){
                echo "New record created successfully";
                echo "<br><a href='index.php'>Back to All User Page</a>";
            }else{
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }   
    }


?>
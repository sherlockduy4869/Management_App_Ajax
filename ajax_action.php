<?php
    include_once("db.php");

    //inset data
    if(isset($_POST['full_name'])){
        $full_name = $_POST['full_name'];
        $phone_number = $_POST['phone_number'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $note = $_POST['note'];

        $result = mysqli_query($con,"INSERT INTO tbl_customer(customer_full_name,customer_email,customer_phone,customer_address,note) 
        VALUES('$full_name','$phone_number','$address','$email','$note')");

    }
?>
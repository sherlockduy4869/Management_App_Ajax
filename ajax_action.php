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

    //Edit data
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $text = $_POST['text'];
        $column_name = $_POST['column_name'];

        $result = mysqli_query($con,"UPDATE tbl_customer SET $column_name = '$text' WHERE customer_id = '$id' ");

    }


    //Get data
    $outPut = '';
    $sql_select =  mysqli_query($con,'SELECT * FROM tbl_customer ORDER BY customer_id DESC');
    $outPut.='
        <div class="table table-responsive">
        
        <table class = "table table-bordered">
            <thead>
                <tr>
                    <td>Full Name</td>
                    <td>Phone Number</td>
                    <td>Address</td>
                    <td>Email</td>
                    <td>Note</td>
                </tr>
            </thead>
    ';

    if(mysqli_num_rows($sql_select)>0){

        while($rows = mysqli_fetch_array($sql_select)){
            $outPut .= '
            <tbody>
                <tr>
                    <td class = "full_name" data-id1 = '.$rows['customer_id'].' contenteditable>'.$rows['customer_full_name'].'</td>
                    <td contenteditable>'.$rows['customer_phone'].'</td>
                    <td contenteditable>'.$rows['customer_address'].'</td>
                    <td contenteditable>'.$rows['customer_email'].'</td>
                    <td contenteditable>'.$rows['note'].'</td>
                </tr>
            </tbody>
        
            ';
        }
    }
    else{
        $outPut .= '

            <tbody>
                <tr>
                    <td colspan="5">Data not found</td>
                </tr>
            </tbody>
        
        ';
    }

    $outPut.='

    </table>

    </div>

    ';

    echo $outPut;
?>
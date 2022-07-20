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

    //delete data
    if(isset($_POST['id_del'])){
        $id_del = $_POST['id_del'];

        $result = mysqli_query($con,"DELETE FROM tbl_customer WHERE customer_id = '$id_del' ");
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
                    <td>Customize</td>
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
                    <td><button data-id_del = '.$rows['customer_id'].' class = "btn btn-sm btn-danger del_data" name="delete_data">X</button></td>
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
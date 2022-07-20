<?php
    include_once('db.php');
    $sql_nation = mysqli_query($con,"SELECT * FROM tbl_nation ORDER BY id_nation");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>

    <!--Boostrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- JS file -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="script.js"></script>

</head> 
<body>
    <div class="container">
        <div class="col-md-12">
            <h3>Insert Data In Form</h3>
            <form method="POST" id="insert_data">
                <label>Full name</label>
                <input type="text" class="form-control" id="full_name" placeholder="Enter your full name" required>
                <label>Phone number</label>
                <input type="text" class="form-control" id="phone_number" placeholder="Enter your phone number" required>
                <label>Address</label>
                <input type="text" class="form-control" id="address" placeholder="Enter your address" required>
                <label>Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required> 
                <label>Note</label>
                <input type="text" class="form-control" id="note" placeholder="Enter note here" required>
                <br>
                <input type="button" id="button_insert" name="insert_data" value="INSERT" class="btn btn-primary">
            </form>
            <h3>Load Data By Ajax</h3>
            <div id="load_data">
            </div>

            <div>
                <h3>Select Data Using Ajax</h3>
                <label for="">Nation</label>
                <select class="form-control" id="nation" name="nation">
                    <option value="">---Choose Nation---</option>
                    <?php
                        while($row_nation = mysqli_fetch_array($sql_nation)){
                            echo '<option value="'.$row_nation['id_nation'].'">'.$row_nation['nation_name'].'</option>';
                        }
                    ?>
                </select>
                <label for="">Capital</label>
                <select class="form-control" id="capital" name="capital">

                </select>
            </div>
        </div>
    </div>
</body>
</html>
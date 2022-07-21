<?php
    include_once('db.php');
    $sql_nation = mysqli_query($con,"SELECT * FROM tbl_nation ORDER BY id_nation");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Image</title>

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
            <form action="ajax_action.php" id="submit_from" method="POST">
                <div class="form-group input_img">
                    <label for="">Choose Image</label> <br>
                    <input type="file" name="file" id="image_file"> <br>
                    <span class="help-block">Allow image: .jpeg/.jpg/.png</span>
                </div>
                <input type="submit" name="upload_btn" class="btn btn-success" value="Upload">
            </form>
            <br>
            <h3 align = "center">PREVIEW</h3>
            <div class="row" id="img_preview">
                
            </div>
        </div>
    </div>
</body>
</html>
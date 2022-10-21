<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js">
    <link rel="icon" href="../photo/logo.png">
    <title>Hello people</title>
</head>

<body style="background-color: whitesmoke;">
    <?php
    include("../item_header/header_user.php")
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col">
                <div class="shadow p-3 mb-5 rounded bg-white">
                    <div class="card-body">
                        <div align="center">
                            <img src="../photo/S__13910020.jpg" class="rounded-circle img-fluid img-thumnall shadow p-1" alt="" style="width: 250px;">
                        </div>
                        <br>
                        <div align="center">
                            <input type="file" class="btn btn-info" name="" id="">
                        </div>
                        <div align="right">
                            <input type="button" class="btn btn-primary shadow" value="ตกลง" onclick="return confirm('คุณแน่ใจที่จะทำการแก้ไขโปรไฟล์หรือไม่ ??')">
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</body>

</html>
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
    include("../item_header/header_admin.php");
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
                        <div align="right">
                            <a href="../page_Edit_admin/Edit_img.php" target="blank"><input type="button" class="btn btn-primary shadow" value="แก้ไขโปรไฟล์ของคุณ"></a>
                        </div>
                    </div>
                </div>
                <div align="center">
                    <p class="h5">Sataporn 00000</p>
                </div>
                <br>
                <div class="border-bottom"></div>
            </div>
            <div class="col-md-1"></div>
        </div>
        <br>
        <!--row 2 -->
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <div>
                    <a href="../page_Edit_admin/Edit_password.php" target="_blank"><input type="submit" class="btn btn-info shadow p-3" value="Editpassword"></a>
                    <a href="../page_Edit_admin/Edit_information.php" target="_blank"><input type="submit" class="btn btn-info shadow p-3" value="Editinformation"></a>
                    <a href="../item_table/table_active.php" target="_blank"><input type="submit" class="btn btn-info shadow p-3" value="table_active"></a>
                    <a href="../item_table/table_post.php" target="blank"><input type="submit" class="btn btn-info shadow p-3" value="table_post"></a>
                </div>
            </div>
            <div class="col-md-4">
                <a href="../item_table/table_comments.php" target="_blank"><input type="submit" class="btn btn-info shadow p-3" value="table_comments"></a>
                <a href="../item_table/table_detel.php" target="_blank"><input type="submit" class="btn btn-info shadow p-3" value="table_detel"></a>

            </div>
            <div class="col-md-1"></div>

        </div>
    </div>
</body>

</html>
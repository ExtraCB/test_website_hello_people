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
            <div class="col-md-6">
                <div class="shadow p-3 mb-5 rounded bg-white mt-5">
                    <div class="card-body">
                     
                        <div>
                            <img src="../photo/S__13910020.jpg" class="rounded-circle img-fluid img-thumnall shadow p-1" alt="" style="width: 40px;">
                            <label for="">Sataporn 00000</label>
                            &nbsp;
                            <label for="">00/00/0000</label>
                        </div>
                        <br>
                        <div>
                            <p class="h6">โพสต์จะแสดงที่นี้</p>
                        </div>
                        <br>
                        <div>
                            <img src="../photo/147443.jpg" class="img-fluid img-thumbnall" alt="">
                        </div>
                        <br>
                        <div class="shadow p-3 mb-5 rounded bg-white">
                            <div class="card-body">

                                <div>
                                    <div align="right">
                                    <a href="../page_Edit_user/Edit_comments.php"  target="blank"><input type="submit" class="btn btn-danger shadow " value="Edit"></a>
                                    </div>
                                    <img src="../photo/S__13910020.jpg" class="rounded-circle img-fluid img-thumnall shadow p-1" alt="" style="width: 40px;">
                                    <label for="">Sataporn 00000</label>


                                </div>
                                <br>
                                <div>
                                    <p class="h6">แสดงความคิดเห็น</p>
                                </div>
                                <br>
                                <div class="border-bottom"></div>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">


                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="แสดงความคิดเห็นของคุณ">
                                <br>
                                <div align="right">
                                    <input type="submit" class="btn btn-primary shadow " value="ตกลง" onclick="return confirm('คุณแน่ใจที่จะมำการอสดงความคิดเห็นหรือไม่')">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="shadow p-3 mb-5 rounded bg-white mt-5 position-fixed">
                    <div class="card-body">
                        <p class="h5">คนที่คุณอาจจะรู้จัก</p>
                        <br>
                        <div>
                            <img src="../photo/S__13910020.jpg" class="rounded-circle img-fluid img-thumnall shadow p-1" alt="" style="width: 40px;">
                            <label for="">Sataporn 00000</label>
                        </div>
                        <div align="right">
                        <a href="../page_friend/relation.php" target="black"><input type="submit" class="btn btn-primary" value="เพิ่มเติม"></a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="co-md-1"></div>
        </div>
    </div>
</body>

</html>
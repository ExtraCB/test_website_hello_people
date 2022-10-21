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
            <div class="col-md-1" style="height: 50px;"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div>
                    <div>
                        <p class="h5">คนที่คุณอาจจะรู้จัก</p>
                    </div>
                    <div class="shadow p-3 mb-5 rounded bg-white">
                        <div class="card-body">
                            <div>
                                <div>
                                    <img src="../photo/S__13910020.jpg" class="rounded-circle img-fluid img-thumnall shadow p-1" alt="" style="width: 40px;">
                                    <label for="">Sataporn 00000</label>
                                </div>
                                <br>
                                <div align="right">
                                    <input type="submit" class="btn btn-primary shadow" value="เพิ่มเพื่อน">
                                    <input type="reset" class="btn btn-danger shadow" value="ยกเลิก">
                                </div>
                                <br>
                                <div class="border-bottom"></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <p class="h5">เพื่อน</p>
                    </div>
                    <div class="shadow p-3 mb-5 rounded bg-white">
                        <div class="card-body">
                            <div>
                                <div>
                                    <img src="../photo/S__13910020.jpg" class="rounded-circle img-fluid img-thumnall shadow p-1" alt="" style="width: 40px;">
                                    <label for="">Sataporn 00000</label>
                                </div>
                                <br>
                                <div align="right">

                                    <input type="reset" class="btn btn-danger shadow" value="ลบเพื่อน">
                                </div>
                                <br>
                                <div class="border-bottom"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <p class="h5">คนที่ส่งคำขอมาเป็นเพื่อน</p>
                    </div>
                    <div class="shadow p-3 mb-5 rounded bg-white">
                        <div class="card-body">
                            <div>
                                <div>
                                    <img src="../photo/S__13910020.jpg" class="rounded-circle img-fluid img-thumnall shadow p-1" alt="" style="width: 40px;">
                                    <label for="">Sataporn 00000</label>
                                </div>
                                <br>
                                <div align="right">
                                    <input type="submit" class="btn btn-primary shadow" value="ตอบรับ">
                                    <input type="reset" class="btn btn-danger shadow" value="ลบ">
                                </div>
                                <br>
                                <div class="border-bottom"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <p class="h5">คนที่ส่งคำขอไปเป็นเพื่อน</p>
                    </div>
                    <div class="shadow p-3 mb-5 rounded bg-white">
                        <div class="card-body">
                            <div>
                                <div>
                                    <img src="../photo/S__13910020.jpg" class="rounded-circle img-fluid img-thumnall shadow p-1" alt="" style="width: 40px;">
                                    <label for="">Sataporn 00000</label>
                                </div>
                                <br>
                                <div align="right">
                                    
                                    <input type="reset" class="btn btn-danger shadow" value="ยกเลิกคำขอ">
                                </div>
                                <br>
                                <div class="border-bottom"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

</body>

</html>
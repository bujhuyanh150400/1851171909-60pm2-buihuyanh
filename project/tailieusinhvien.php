<?php include("path.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-eqiuv="X-UA-Compatible" content="ie=edge">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/ecc4c4d503.js" crossorigin="anonymous"></script>

    <!-- GG font -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

    <!-- Custom Styling-->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Tài liệu sinh viên</title>
</head>

<body>
    <!--facebook-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0" nonce="gBEhvkkt"></script>


    <?php include "header.php"; ?>


    <!--Page wrapper-->

    <div class="page-wrapper">

        <!-- content -->
        <div class="content clearfix">
            <!--main content-->
            <div class="main-content single">


                <div class="post-content">
                    <h2 style="text-align: center;"><i class="fas fa-book"></i>Tài liệu sinh viên</h2>
                    <h3>MẪU ĐƠN SINH VIÊN CẦN BIẾT</h3>
                    <a href="MauDon_DKH.doc">Đăng kí học</a>
                    <br>
                    <a href="MauDon_Huy-DKH.doc">Hủy Đăng kí học</a>
                    <br>
                    <a href="MauDon_DeNghi.doc">Đề nghị</a>
                    <br>
                    <a href="DHCQ_DonSVthoihoc.doc">Thôi học</a>
                    <br>
                    <a href="DHCQ-DonXinCN-GDQP.doc">Đơn xin CN- GDQP, download </a><br>
                    <a href="Mau 1 don cam ket hoc tai truong.doc">Đơn cam kết (dành cho sinh viên cảnh báo học tập mức 3 lần 1)</a><br>
                    <h5 style="text-align: right;"><a href="trangchu.php">Trang chủ</a></h5>
                </div>


            </div>
            <!--//main content-->
            <div class="sidebar single">
                <div class="fb-page" data-href="https://www.facebook.com/daihocthuyloi1959" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/daihocthuyloi1959" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/daihocthuyloi1959">Đại Học Thủy Lợi</a></blockquote>
                </div>
                <div class="seaction topics">
                    <h2 class="seaction-title">Topic</h2>
                    <ul>
                    <li><a href="nghiencuukhoahoc.php"><i class="fas fa-atom"> Nghiên cứu khoa học</i></a></li>
                        <li><a href="loichaomung.php"><i class="fas fa-school"> Lời chào mừng</i></a></li>
                        <li><a href="daotao.php"><i class="fas fa-book">Đào tạo</i></a></li>
                        <li><a href="tailieusinhvien.php"><i class="fas fa-book-reader">Tài liệu sinh viên</i></a></li>
                        <li><a href="lienhe.php"><i class="fas fa-phone">Liên hệ</i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //content -->


    </div>

    <!--//Page wrapper-->

    <!-- footer-->
    <?php include("footer.php"); ?>

        
        <div class="footer-bottom">
            &copy; tlu.edu.vn | Desgined by huyanh 1851171909 60pm2
        </div>
    </div>

    <!-- //footer-->


    <!-- Jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--slick-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!--Custom script-->
    <script src="assets/js/scripts.js"></script>

</body>

</html>
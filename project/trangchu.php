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
    <title>Khoa CNTT - ĐH Thủy lợi</title>
</head>

<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0" nonce="8BbgfkfU"></script>
<!--header-->
    <?php include("header.php"); ?>

    <!--Page wrapper-->
    <!-- content -->
    <div class="content clearfix">
        <!--main content-->
        <div class="main-content">
            <h1 >TOPIC- CSE TLU</h1>
            <a href="create_topic.php" class="btn " >THÊM TOPIC</a>
            <br><br><br>
            <table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="white">
            <thead>
              <tr>
                    
                    <th width="6%" align="center" bgcolor=#4d4dff>STT</th>
                    <th width="30%" align="center" bgcolor=#4d4dff><i class="fas fa-book">Bài Đăng</th>
                    <th width="45%" align="center" bgcolor=#4d4dff><i class="fas fa-book">Nội dung</th>
                    <th width="13%" align="center" bgcolor=#4d4dff><i class="fas fa-user">Tên </th>
                    <th width="20%" align="center" bgcolor=#4d4dff></th>
              </tr>
          </thead>
            <?php

            require 'connect.php';
            include 'fuction.php';
            $topic = getall();
            foreach($topic as $row){
            ?>

            <tr>
                  <td bgcolor="#e6e6ff" scope="row"> <?php echo $row[0] ?> </td>
                  <td bgcolor="#e6e6ff"><?php echo $row[1] ?></td>
                  <td bgcolor="#e6e6ff"><?php echo $row[2] ?></td>
                  <td bgcolor="#e6e6ff"><?php echo $row[3] ?></td>

                  <td bgcolor="#e6e6ff"><a href="view_topic.php?id=<? if(isset($row['topic_id'])) {echo $rows['topic_id'];}?>"><i class="fas fa-bookmark"></i>CHI TIẾT</a></td>
            </tr>
            <?php } ?>          
            <tr>
         
            </tr>
            </table>
            <br>
            <br>

            <h1>NEW DAILY</h1>
            <br>
            <div class="post">
                <img src="assets/images/1.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h2><a href="10sailamcuasinhvien.php"> 10 sai lầm của sinh viên năm nhất</a></h2>
                    <i class="fas fa-user"> Huy Anh</i> &nbsp;
                    <i class="fas fa-calendar">10-10-2020</i>
                    <p class="preview-text">
                        Những sai lầm của sinh viên năm nhất mà bạn phải trải qua
                    </p>
                    <a href="10sailamcuasinhvien.php" class="btn read-more"> Đọc thêm </a>
                </div>
            </div>
            <div class="post">
                <img src="assets/images/huongvemientrung.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h2><a href="huongvemientrung.php"> Đại học Thủy Lợi - Hướng về miền Trung</a></h2>
                    <i class="fas fa-user"> Bích Việt - Minh Thành</i> &nbsp;
                    <i class="fas fa-calendar">16-10-2020</i>
                    <p class="preview-text">
                        (TLU) - Chiều nay (16/10) tại Hội nghị cấp uỷ mở rộng đầu năm học 2020 - 2021, Đảng ủy Trường Đại học Thủy lợi đã phát động đến toàn thể các đồng chí đảng viên trong Đảng bộ trường ủng hộ vì miền Trung ruột thịt.
                    </p>
                    <a href="huongvemientrung.php" class="btn read-more"> Đọc thêm </a>
                </div>
            </div>
            <div class="post">
                <img src="assets/images/totnghiep.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h2><a href="totnghiep.php"> Hơn 1000 sinh viên được công nhận tốt nghiệp học kỳ II năm học 2019-2020</a></h2>
                    <i class="fas fa-user"> Huy Anh</i> &nbsp;
                    <i class="fas fa-calendar">15-10-2020</i>
                    <p class="preview-text">
                        (TLU) – Sáng nay (15/10), Trường Đại học Thủy lợi tổ chức Lễ tốt nghiệp và trao bằng kỹ sư, cử nhân học kỳ II năm học 2019-2020 cho hơn 1000 sinh viên
                    </p>
                    <a href="totnghiep.php" class="btn read-more"> Đọc thêm </a>
                </div>
            </div>
        </div>
        <!--//main content-->
        <div class="sidebar single">
        <div class="fb-page" data-href="https://www.facebook.com/daihocthuyloi1959/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/daihocthuyloi1959/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/daihocthuyloi1959/">Đại Học Thủy Lợi</a></blockquote></div>
            <div class="seaction topics">
                
                <h2 class="seaction-title">PHẦN NHÀ TRƯỜNG</h2>
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

    <div class="page-wrapper">
        <!--post silder-->

        <div class="post-slider">
            <h2 class="slider-title">Ảnh</h2>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>

            <div class="post-wrapper">
                <div class="post">
                    <img src="assets/images/2.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4 style="text-align: center;">Lễ tốt nghiệp 2019-2020</h4>

                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/3.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4 style="text-align: center;">Đại học Thủy Lợi</a>
                        </h4>
                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/4.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4 style="text-align: center;">Giảng viên ĐH Thủy Lợi</h4>
                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/5.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4 style="text-align: center;">Sinh viên ĐH Thủy Lợi</h4>
                    </div>
                </div>


            </div>

        </div>
        <!--//post silder-->



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
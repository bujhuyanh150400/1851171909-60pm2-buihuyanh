<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Custom Styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Admin Styling -->
  <link rel="stylesheet" href="assets/css/admin.css">
  <title>Admin - Create Post</title>
</head>
<body>
  <!-- header -->
  <?php include("header.php"); ?>
  <!-- // header -->
  <div class="admin-wrapper clearfix">
    <!-- Admin Content -->
    <div class="admin-content clearfix">
   
      
      <div class="">
        <h2 style="text-align: center;">Tạo Post</h2>
        <form id="form1" name="form1" method="post" action="add_topic.php">
          <div class="input-group">
            <label>Chủ đề post</label>
            <input type="text" name="topic_detail" id="topic_detail" class="text-input">
          </div>
          <br>

          <div class="input-group">
            <label>Bài viết</label>
            <textarea class="text-input" name="topic_inf" id="topic_inf"></textarea>
          </div>
          <div class="input-group">
            <button type="submit" name="submit" class="btn">Đăng</button> <button type="reset" name="submit2" value="reset" class="btn">Reset</button>
          </div>
          <br>
          <br>

          <div class="button-group">
        <a href="trangchu.php" class="btn btn-sm">Trang chủ</a>
      </div>
        </form>
      </div>
    </div>
    <!-- // Admin Content -->
  </div>
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- CKEditor 5 -->
  <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
  <!-- Custome Scripts -->
  <script src="../../scripts.js"></script>
</body>
</html>

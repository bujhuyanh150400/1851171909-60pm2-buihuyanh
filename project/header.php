<?php      
        session_start();
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
        }
    ?>

<header>
        <div class="logo">
            <h1 href="<?php echo BASE_URL . '/trangchu.php' ?>" class="logo-text"><span> CSE </span> TLU</h1>
        </div>
        <i class="fas fa-bars menu-toggle"></i>
        <ul class="nav">
            <li><a href="trangchu.php">Trang chủ</a></li>
            <li><a href="gioithieu.php">Giới thiệu</a></li>

            <li><a><i class="fa fa-user"></i><?php echo htmlspecialchars($_SESSION["user_name"]); ?></a>
        <ul class="dropdown">
            <li><a href="reset-password.php" >thay đổi mật khẩu</a></li>
            <li><a href="logout.php" >đăng xuất</a></li>
          </ul>
        </li> 

        </ul>
    </header>
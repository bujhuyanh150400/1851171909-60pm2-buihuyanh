<?php
require_once "connect.php";
 
$user_name = $user_pass = $confirm_password = "";
$user_name_err = $user_pass_err = $confirm_password_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty(trim($_POST["user_name"]))){
        $username_err = "Hãy điền tên đăng nhập";
    } else{
        $sql = "SELECT user_id FROM user WHERE user_name = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_user_name);
            $param_user_name = trim($_POST["user_name"]);
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $user_name_err = "tên này đã được lấy";
                } else{
                    $user_name = trim($_POST["user_name"]);
                }
            } else{
                echo "LỖI";
            }
            mysqli_stmt_close($stmt);
        }
    }

    if(empty(trim($_POST["user_pass"]))){
        $user_pass_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["user_pass"])) < 6){
        $user_pass_err = "Mật khẩu phải dài hơn 6 chữ";
    } else{
        $user_pass = trim($_POST["user_pass"]);
    }
    
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Hãy xác thực mật khẩu";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($user_pass_err) && ($user_pass != $confirm_password)){
            $confirm_password_err = "Mật khẩu không đúng";
        }
    }
    if(empty($user_name_err) && empty($user_pass_err) && empty($confirm_password_err)){
        $sql = "INSERT INTO user (user_name,user_pass) VALUES (?, ?)";      
        if($stmt = mysqli_prepare($conn, $sql)){
            mysqli_stmt_bind_param($stmt, "ss", $param_user_name, $param_user_pass);
            $param_user_name = $user_name;
            $param_user_pass = password_hash($user_pass, PASSWORD_DEFAULT);
            if(mysqli_stmt_execute($stmt)){
                header("location: login.php");
            } else{
                echo "có lỗi gì đó";
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng kí</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper h1 {font-family:"Candal", serif;
                     color: #303063;}
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<div class="wrapper">
        <h1>Đăng Kí</h1>
        <br>
        <br>
        <h4>Điền thông tin đăng kí vào đây:</h4>
        <br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Tên đăng nhập</label>
                <input type="text" name="user_name" class="form-control" value="<?php echo $user_name; ?>">
                <span class="help-block"><?php echo $user_name_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($user_pass_err)) ? 'has-error' : ''; ?>">
                <label>Mật khẩu</label>
                <input type="password" name="user_pass" class="form-control" value="<?php echo $user_pass; ?>">
                <span class="help-block"><?php echo $user_pass_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Xác nhận mật khẩu</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Đăng kí">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Bạn đã có tài khoản ? <a href="login.php">Đăng nhập vào đây</a>.</p>
        </form>
</div>
</body>
</html>
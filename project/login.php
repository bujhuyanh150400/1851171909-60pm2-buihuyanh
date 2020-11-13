<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: trangchu.php");
    exit;
}

require_once "connect.php";

$user_name = $user_pass = "";
$user_pass = $user_pass = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 

    if(empty(trim($_POST["user_name"]))){
        $username_err = "Điển thông tin đăng nhập.";
    } else{
        $user_name = trim($_POST["user_name"]);
    }
    

    if(empty(trim($_POST["user_pass"]))){
        $userpass_err = "Điền mật khẩu.";
    } else{
        $user_pass = trim($_POST["user_pass"]);
    }
   
    if(empty($username_err) && empty($userpass_err)){

        $sql = "SELECT user_id, user_name, user_pass FROM user WHERE user_name = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){

            mysqli_stmt_bind_param($stmt, "s", $param_user_name);
            

            $param_user_name = $user_name;
            

            if(mysqli_stmt_execute($stmt)){

                mysqli_stmt_store_result($stmt);
                

                if(mysqli_stmt_num_rows($stmt) == 1){                    

                    mysqli_stmt_bind_result($stmt, $user_id, $user_name, $hashed_user_pass);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($user_pass, $hashed_user_pass)){

                            session_start();
                            

                            $_SESSION["loggedin"] = true;
                            $_SESSION["user_id"] = $user_id;
                            $_SESSION["user_name"] = $user_name;                            
                            

                            header("location: trangchu.php");
                        } else{

                            $userpass_err = "Mật khẩu bạn nhập không đúng";
                        }
                    }
                } else{
 
                    $username_err = "sai tài khoản";
                }
            } else{
                echo "LỖI";
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
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper h1 {
            font-family:"Candal", serif ;
            color: #303063;

        }
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <img src="assets/images/logo1.jpg">
        <h1>Đăng nhập</h1>
  
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Tên đăng nhập</label>
                <input type="text" name="user_name" class="form-control" value="<?php echo $user_name; ?>">
                <span class="help-block"><?php echo (!empty($username_err)) ? 'sai tài khoản' : ''; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($userpass_err)) ? 'has-error' : ''; ?>">
                <label>Mật khẩu</label>
                <input type="password" name="user_pass" class="form-control">
                <span class="help-block"><?php echo (!empty($userpass_err)) ? 'sai mật khẩu' : ''; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Zô">
            </div>
            <p>Không có tài khoản ? <a href="register.php">Đăng kí nhanh</a>.</p>
        </form>
    </div>    
</body>
</html>
<?php
$conn = mysqli_connect("localhost","root","","forum",);
if(!$conn)
{
    die("ket noi that bai");
    exit();
}
mysqli_select_db($conn,"topic") ;
if (!$conn) {
    die ("die");
    exit;
}
?>
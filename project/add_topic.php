<?php


require('topic_connect.php'); 
$topic_id =isset($_GET['topic_id']);
$sql = "SELECT * FROM topic WHERE topic_id = '$topic_id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0)
{
    echo "ip da ton tai ";
}
else {

$topic_detail = isset($_POST['topic_detail']) ? $_POST['topic_detail'] : '';
$topic_inf = isset($_POST['topic_inf']) ? $_POST['topic_inf'] : '';
$topic_by = isset($_POST['topic_by']) ? $_POST['topic_by'] : '';
include 'fuction.php';
$s = insert($topic_id,$topic_detail,$topic_inf,$topic_by);
if($s){
    header("location:trangchu.php");
}
else {
   echo 'lỗi';
   exit ;
}
}
?>
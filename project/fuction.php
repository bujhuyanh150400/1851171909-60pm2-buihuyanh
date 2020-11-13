<?php
function getall()
{
    global $conn;
    $sql = "SELECT* FROM topic";
    $result = mysqli_query($conn,$sql);
    $topic = mysqli_fetch_all($result);
    return $topic;
}
function getOne($topic_id)
{
    global $conn;
    $sql ="SELECT * from topic where topic_id ='$topic_id'";
    $result = mysqli_query($conn,$sql);
    $topics = mysqlI_fetch_array($result);
    return $topics;
}
function insert($topic_id,$topic_detail,$topic_inf,$topic_by)
{
    global $conn;
    $sql ="INSERT INTO topics (topic_id,topic_detail,topic_inf,topic_by)
    VALUES ('$topic_id','$topic_detail','$topic_inf','$topic_by');";  
      $result = mysqli_query($conn,$sql);
      if($result)
      return true;

      return false;
}
function deleterow($topic_id)
{
    global $conn;
    $sql = "DELETE FROM topic WHERE topic_id ='$topic_id'";
    if(mysqli_query($conn,$sql))
        return true;
    else
        return false;
}
function updaterow($topic_id,$topic_detail,$topic_inf)
{
    global $conn;
    $sql =" UPDATE topic SET topic_inf ='$topic_inf' , topic_detail='$topic_detail' WHERE topic_id ='$topic_id' ;";
    $result = mysqli_query($conn,$sql);
    if($result)
        return true;

        return false;
}
?>

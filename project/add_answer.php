<?php

require_once 'connect.php';

// Get value of id that sent from hidden field
$topic_id = isset($_GET['topic_id']) ? $_GET['topic_id'] : '';
// Find highest answer number.
$post_id = isset($_GET['post_id']) ? $_GET['post_id'] : '';
$sql="SELECT MAX(a_id) AS Maxa_id FROM forum_answer WHERE post_id='$post_id'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result);

// add + 1 to highest answer number and keep it in variable name "$Max_id". if there no answer yet set it = 1
if ($rows) {
$Max_id = $rows['Maxa_id']+1;
}
else {
$Max_id = 1;
}


$sql="SELECT MAX(a_id) AS Maxa_id FROM forum_answer WHERE post_id='$post_id'";
$a_name=isset($_POST['a_name']);
$a_answer=isset($_POST['a_answer']);
$sql2="INSERT INTO forum_answer(post_id, a_id, a_name, a_answer)VALUES('$post_id', '$Max_id', '$a_name', '$a_answer')";
$result2=mysqli_query($conn,$sql2);
if($result2){
echo "Successful<BR>";
echo "<a href='view_topic.php?id=".$topic_id."'>View your answer</a>";
$sql3="UPDATE topic SET reply='$Max_id' WHERE topic_id='$topic_id'";
$result3=mysqli_query($conn,$sql3);
}
else {
echo "ERROR";
}

?>
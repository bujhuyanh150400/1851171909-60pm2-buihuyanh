<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/ecc4c4d503.js" crossorigin="anonymous"></script>

    <!-- GG font -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
    <title>TOPIC</title>
</head>
<body>
<?php require_once 'header.php'?>
<?php
require_once 'topic_connect.php';
$topic_id=isset($_GET['topic_id']);

$sql="SELECT * FROM topic WHERE topic_id='$topic_id'";
$result=mysqli_query($conn,$sql);

$rows=mysqli_fetch_array($result);
?>

<table width="1080" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#e6e6ff"><strong>Bài Đăng</strong><?php if(isset($row['topic_id'])) {echo $rows['topic_id'];} ?></td>
</tr>

<tr>
<td bgcolor="#e6e6ff"><strong>Nội dung</strong><?php echo isset($rows[2]); ?></td>
</tr>

<tr>
<td bgcolor="#e6e6ff"><strong>TÊN :</strong> <?php echo isset($rows[3]); ?> 
</tr>

</table></td>
</tr>
</table>
<BR>

<?php

$tbl_name2="forum_answer"; // Switch to table "forum_answer"
$post_id=isset($_GET['post_id']);
$sql2="SELECT * FROM $tbl_name2 WHERE post_id='$post_id'";
$result2=mysqli_query($conn,$sql2);

while($rows=mysqli_fetch_array($result2)){
?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#F8F7F1"><strong>ID</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><? echo $rows['a_id']; ?></td>
</tr>
<tr>
<td width="18%" bgcolor="#F8F7F1"><strong>TÊN</strong></td>
<td width="5%" bgcolor="#F8F7F1">:</td>
<td width="77%" bgcolor="#F8F7F1"><? echo $rows['a_name']; ?></td>
</tr>
<tr>
<td bgcolor="#F8F7F1"><strong>Nội dung</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><? echo $rows['a_answer']; ?></td>
</tr>
</table></td>
</tr>
</table><br>

 

<?php
}

$sql3="SELECT view FROM topic WHERE topic_id='$topic_id'";
$result3=mysqli_query($conn,$sql3);

$rows=mysqli_fetch_array($result3);
$view=isset($rows['view']) ? count($rows['view']) : 0;

 

// if have no counter value set counter = 1
if(empty($view)){
$view=1;
$sql4="INSERT INTO topic(view) VALUES('$view') WHERE topic_id='$topic_id'";
$result4=mysqli_query($conn,$sql4);
}

 

// count more value
$addview=$view+1;
$sql5="update topic set view='$addview' WHERE topic_id='$topic_id'";
$result5=mysqli_query($conn,$sql5);

?>


<BR>
<table width="1080" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="add_answer.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td width="18%"><strong>Tên</strong></td>
<td width="3%">:</td>
<td width="79%"><input name="a_name" type="text" id="a_name" size="45"></td>
</tr>
<tr>
<td valign="top"><strong>Nội dung</strong></td>
<td valign="top">:</td>
<td><textarea name="a_answer" cols="45" rows="3" id="a_answer"></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="id" type="hidden" value="<? echo $id; ?>"></td>
<td><input type="submit" name="Submit" value="Đăng"> <input type="reset" name="Submit2" value="Reset"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
 
 
<!-- /.Container-->
<?php require_once 'footer.php'?>
</body>
</html>

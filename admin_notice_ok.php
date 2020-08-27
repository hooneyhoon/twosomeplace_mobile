<meta charset="UTF-8">
<?php
$_category = $_POST["category"];
$_title = $_POST["title"];
$_content = $_POST["content"];
$_date = date("Y-m-d");

include "dbcon.php";

$sql = "insert into notice(category,title,content,date,hit)values('$_category','$_title','$_content','$_date',0);";

mysqli_query($con,$sql);

mysqli_close($con);

echo "
    <script type='text/javascript'>
    alert('공지 등록하였습니다.');
    location.href='admin_notice.php';
    </script>";
?>
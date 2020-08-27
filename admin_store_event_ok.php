<meta charset="UTF-8">
<?php
$_store_name = $_POST["store_name"];
$_event_content = $_POST["event_content"];
$_event_time = $_POST["event_time"];
$_date = date("Y-m-d");

include "dbcon.php";

$sql = "insert into store_event(store_name,event_content,event_time,date)values('$_store_name','$_event_content','$_event_time','$_date');";

mysqli_query($con,$sql);

mysqli_close($con);

echo "
    <script type='text/javascript'>
    alert('이벤트를 등록하였습니다.');
    location.href='admin_store_event.php';
    </script>";
?>
<meta charset="UTF-8">
<?php
$store_date = $_POST["store_date"];
$store_name = $_POST["store_name"];
$store_number = $_POST["store_number"];
$date = date("Y-m-d");

include "dbcon.php";

$sql = "insert into store_open(store_date,store_name,store_number,date)values('$store_date','$store_name','$store_number','$date');";

mysqli_query($con,$sql);

mysqli_close($con);

echo "
    <script type='text/javascript'>
    alert('신규오픈매장을 등록하였습니다.');
    location.href='admin_store_open.php';
    </script>";
?>
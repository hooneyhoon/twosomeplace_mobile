<meta charset="UTF-8">
<?php
session_start(); 
$s_id = isset($_SESSION["uid"])? $_SESSION["uid"]:"";
$s_name = isset($_SESSION["uname"])? $_SESSION["uname"]:"";
$s_idx = isset($_SESSION["idx"])? $_SESSION["idx"]:"";

if(!$s_idx == 1 || !$s_id == 'admin'){
    echo "
    <script type='text/javascript'>
    alert('관리자외엔 접근 불가합니다.');
    location.href='index.php';
    </script>
";
    return false;
};

$store_date = $_POST["store_date"];
$store_name = $_POST["store_name"];
$store_number = $_POST["store_number"];
$idx = $_POST["idx"];

include "dbcon.php";

$sql = "update store_open set store_date='$store_date',store_name='$store_name',store_number='$store_number' where idx=$idx;";

mysqli_query($con,$sql);

mysqli_close($con);

echo"
    <script type='text/javascript'>
    alert('신규 오픈 매장이 수정되었습니다.');
    location.href='admin_store_open.php';
    </script>";
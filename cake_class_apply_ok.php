<meta charset="UTF-8">
<?php

session_start(); 
$s_id = isset($_SESSION["uid"])? $_SESSION["uid"]:"";
$s_name = isset($_SESSION["uname"])? $_SESSION["uname"]:"";
$s_idx = isset($_SESSION["idx"])? $_SESSION["idx"]:"";

$store = $_POST["store"];
$uname = $_POST["uname"];
$mobile = $_POST["mobile"];
$email_id = $_POST["email_id"];
$email_dns = $_POST["email_dns"];
$email = $_POST["email_id"]."@".$_POST["email_dns"];
$postalcode = $_POST["postalcode"];
$address_1 = $_POST["address_1"];
$address_2 = $_POST["address_2"];
$how_many = $_POST["how_many"];
$when = $_POST["when"];
$apply = $_POST["apply"];
$reg_date = date("Y-m-d");

include "dbcon.php";

$sql = "insert into cakeclass_reservation(uid,store,uname,mobile,email,postalcode,address_1,address_2,number_of_people,class_time,apply,reg_date)values('$s_id','$store','$uname','$mobile','$email','$postalcode','$address_1','$address_2',$how_many,'$when','$apply','$reg_date');";


mysqli_query($con, $sql);

mysqli_close($con);

echo "
    <script type='text/javascript'>
    alert('케이크 클래스 신청완료되었습니다.');
    location.href='twosomeplace_service_cakeclass.php';
    </script>
";
?>
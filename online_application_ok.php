<meta charset="UTF-8">
<?php
$user = $_POST["user"];
$email_id = $_POST["email_id"];
$email_dns = $_POST["email_dns"];
$email = $email_id."@".$email_dns;
$mobile = $_POST["mobile"];
$call_time = $_POST["call_time"];
$postalcode = $_POST["postalcode"];
$address_1 = $_POST["address_1"];
$address_2 = $_POST["address_2"];
$store_hold = $_POST["store_hold"];
$store_postalcode = $_POST["postalcode2"];
$store_address_1 = $_POST["address2_1"];
$store_address_2 = $_POST["address2_2"];
$space = ($_POST["space"])? $_POST["space"]:0;
$s_name = $_POST["s_name"];
$hope_area = $_POST["location"];
$apply = $_POST["apply"];
$reg_date = date("Y-m-d");

include "dbcon.php";

$sql = "insert into online_counseling(uname,email,mobile,calltime,postalcode,address_1,address_2,store_hold,store_postalcode,store_address_1,store_address_2,space,store_name,hope_area,apply,reg_date) values('$user','$email','$mobile','$call_time','$postalcode','$address_1','$address_2','$store_hold','$store_postalcode','$store_address_1','$store_address_2',$space,'$s_name','$hope_area','$apply','$reg_date');";

mysqli_query($con,$sql);

mysqli_close($con);

echo "
    <script type='text/javascript'>
    alert('온라인 창업 상담신청이 완료되었습니다.');
    location.href='twosomeplace_franchise_online_application.php';
    </script>";
?>
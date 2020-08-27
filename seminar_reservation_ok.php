<meta charset="UTF-8">
<?php

session_start(); 
$s_id = isset($_SESSION["uid"])? $_SESSION["uid"]:"";
$s_name = isset($_SESSION["uname"])? $_SESSION["uname"]:"";
$s_idx = isset($_SESSION["idx"])? $_SESSION["idx"]:"";

$choice_date = $_POST["choice_date"];
$uname = $_POST["uname"];
$mobile = $_POST["mobile"];
$email_id = $_POST["email_id"];
$email_dns = $_POST["email_dns"];
$email = $email_id."@".$email_dns;
$postalcode = $_POST["postalcode"];
$address_1 = $_POST["address_1"];
$address_2 = $_POST["address_2"];
$hope_area = $_POST["hope_area"];
$hold = $_POST["hold"];
$funds = $_POST["funds"];
$apply = $_POST["apply"];
$reg_date = date("Y-m-d");

include "dbcon.php";

$sql = "insert into seminar_reservation(uid,reservation_date,uname,mobile,email,postalcode,address_1,address_2,hope_area,hold,funds,apply,reg_date)values( '$s_id','$choice_date','$uname','$mobile','$email','$postalcode','$address_1','$address_2','$hope_area','$hold','$funds','$apply','$reg_date');";

mysqli_query($con,$sql);

mysqli_close($con);

echo "
    <script type='text/javascript'>
    alert('창업설명회 세미나예약 완료되었습니다.');
    location.href='twosomeplace_franchise_seminar.php';
    </script>";
?>
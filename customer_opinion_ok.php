<meta charset="UTF-8">
<?php

session_start(); 
$s_id = isset($_SESSION["uid"])? $_SESSION["uid"]:"";
$s_name = isset($_SESSION["uname"])? $_SESSION["uname"]:"";
$s_idx = isset($_SESSION["idx"])? $_SESSION["idx"]:"";



$uname = $_POST["uname"];
$email_id = $_POST["email_id"];
$email_dns = $_POST["email_dns"];
$email = $email_id."@".$email_dns;
$mobile = $_POST["mobile"];
$store = $_POST["store"];
$choice = $_POST["choice"];
$title = $_POST["title"];
$main_text = $_POST["main_text"];
$apply = $_POST["apply"];
$apply_choice = $_POST["apply_choice"];
$reg_date = date("Y-m-d");

include "dbcon.php";

$sql = "insert into customer_opinion(uid,uname,email,mobile,store,choice,title,main_text,apply,apply_choice,reg_date)values( '$s_id','$uname','$email','$mobile','$store','$choice','$title','$main_text','$apply','$apply_choice','$reg_date');";


mysqli_query($con,$sql);

mysqli_close($con);

echo"
    <script type='text/javascript'>
    alert('고객님의 의견 감사합니다.');
    location.href='twosomeplace_service_center.php';
    </script>
";
?>
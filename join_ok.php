<meta charset="UTF-8">
<?php
$uname = $_POST["uname"];
$uid = $_POST["uid"];
$pwd = $_POST["pwd"];
$mobile = $_POST["mobile"];
$email_id = $_POST["email_id"];
$email_dns = $_POST["email_dns"];
$email = $email_id."@".$email_dns;
$postalcode = $_POST["postalcode"];
$address_1 = $_POST["address_1"];
$address_2 = $_POST["address_2"];
$apply = $_POST["apply"];
$reg_date = date("Y-m-d");

include "dbcon.php";

$sql = "insert into twosome_members(uname,uid,pwd,mobile,email,postalcode,address_1,address_2,apply,reg_date)values( '$uname','$uid','$pwd','$mobile','$email','$postalcode','$address_1','$address_2','$apply','$reg_date');";

mysqli_query($con,$sql);

mysqli_close($con);

echo "
    <script type='text/javascript'>
    location.href='welcome.php';
    </script>";
?>
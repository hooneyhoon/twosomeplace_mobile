<meta charset="UTF-8">
<?php

session_start(); 
$s_id = isset($_SESSION["uid"])? $_SESSION["uid"]:"";
$s_name = isset($_SESSION["uname"])? $_SESSION["uname"]:"";
$s_idx = isset($_SESSION["idx"])? $_SESSION["idx"]:"";


$user = $_POST["user"];
$uname = $_POST["uname"];
$ustore = $_POST["ustore"];
$email_id = $_POST["email_id"];
$email_dns = $_POST["email_dns"];
$email = $email_id."@".$email_dns;
$mobile = $_POST["mobile"];
$apply = $_POST["apply"];
$reg_date = date("Y-m-d");

include "dbcon.php";

$sql = "insert into information_application(uid,user,uname,store_name,email,mobile,apply,reg_date)values('$s_id','$user','$uname','$ustore','$email','$mobile','$apply','$reg_date');";

mysqli_query($con,$sql);

mysqli_close($con);

echo "
    <script type='text/javascript'>
    alert('정보공개서 신청 완료되었습니다.')
    location.href='twosomeplace_franchise_Information_Disclosure_Application.php';
</script>
";

?>


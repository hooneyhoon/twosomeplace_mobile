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

$pwd = $_POST["pwd"];
$email = $_POST["email_id"]."@".$_POST["email_dns"];
$mobile = $_POST["mobile"];
$idx = $_POST["idx"];

include "dbcon.php";

if(!$pwd){//비밀번호를 입력하지 않은 경우
    $sql = "update twosome_members set mobile='$mobile',email='$email' where idx=$idx;";
}else{//비밀번호도 입력한 경우
    $sql = "update twosome_members set pwd='$pwd', mobile='$mobile', email='$email'  where idx=$idx;";
}


mysqli_query($con,$sql);

mysqli_close($con);

echo"
    <script type='text/javascript'>
    alert('회원정보가 수정되었습니다.');
    location.href='admin_member.php';
    </script>";
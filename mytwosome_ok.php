<meta charset="UTF-8">
<?php

session_start();
$s_id = isset($_SESSION["uid"])? $_SESSION["uid"]:"";
$s_name = isset($_SESSION["uname"])? $_SESSION["uname"]:"";
$s_idx = isset($_SESSION["idx"])? $_SESSION["idx"]:"";

if(!$s_idx){
    echo "
    <script type='text/javascript'>
    alert('잘못된 접근입니다.');
    location.href='index.php';
    </script>
";
    return false;
};

$pwd = $_POST["pwd"];
$email = $_POST["email_id"]."@".$_POST["email_dns"];
$mobile = $_POST["mobile"];
$postalcode = $_POST["postalcode"];
$address_1 = $_POST["address_1"];
$address_2 = $_POST["address_2"];


include "dbcon.php";

if(!$pwd){//비밀번호를 입력하지 않은 경우
    $sql = "update twosome_members set email='$email', mobile='$mobile' where idx=$s_idx;";
}else{//비밀번호도 입력한 경우
    $sql = "update twosome_members set pwd='$pwd', email='$email', mobile='$mobile' where idx=$s_idx;";
}

mysqli_query($con,$sql);

mysqli_close($con);

echo "
    <script type='text/javascript'>
    alert('회원정보가 수정되었습니다.');
    location.href='mytwosome.php';
</script>
";

?>
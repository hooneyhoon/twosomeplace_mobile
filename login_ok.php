<meta charset="UTF-8">
<?php

session_start();

$uid = $_POST["uid"];
$pwd = $_POST["pwd"];

include "dbcon.php";

$sql = "select idx, uid, pwd, uname, pwd from twosome_members where uid = '$uid';";

$result = mysqli_query($con,$sql);

$array = mysqli_fetch_array($result);

if($uid != $array["uid"]){
    
    echo "
        <script type='text/javascript'>
            alert('일치하는 아이디가 없습니다.');
            history.back();
        </script>
    ";
    
    return false;
    
}else{
    
    if($pwd != $array["pwd"]){
        
        echo "
            <script type='text/javascript'>
            alert('비밀번호가 일치하지 않습니다.');
            history.back();
            </script>
        ";
        return false;
    };
};

$_SESSION["uid"] = $array["uid"];
$_SESSION["uname"] = $array["uname"];
$_SESSION["idx"] = $array["idx"];

echo "
    
    <script type='text/javascript'>
    alert('로그인 되었습니다.');
    location.href='index.php';
    </script>
";

?>
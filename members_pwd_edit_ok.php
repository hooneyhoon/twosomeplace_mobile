<meta charset="UTF-8">
<?php

$pwd = $_POST["new_pwd"];
$uid = $_POST["uid"];

include "dbcon.php";

$sql = "update twosome_members set pwd='$pwd' where uid='$uid';";

mysqli_query($con,$sql);

mysqli_close($con);

echo "
   <script type='text/javascript'>
    alert('비밀번호가 수정되었습니다.');
    location.href='twosomeplace_login.php';
    </script>
     ";
?>
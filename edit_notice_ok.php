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

$category = $_POST["category"];
$title = $_POST["title"];
$content = $_POST["content"];
$idx = $_POST["idx"];

include "dbcon.php";

$sql = "update notice set category='$category',title='$title',content='$content' where idx=$idx;";

mysqli_query($con,$sql);

mysqli_close($con);

echo"
    <script type='text/javascript'>
    alert('공지가 수정되었습니다.');
    location.href='admin_notice.php';
    </script>";
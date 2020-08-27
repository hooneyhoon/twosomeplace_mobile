<meta charset="UTF-8">
<?php

session_start();

unset($_SESSION["uid"]);
unset($_SESSION["uname"]);
unset($_SESSION["idx"]);

echo "
    <script type='text/javascript'>
    alert('로그아웃 되었습니다.');
    location.href='index.php';
    </script>
";
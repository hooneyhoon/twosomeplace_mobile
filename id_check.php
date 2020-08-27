<?php

$sch_id = $_POST["sch_id"];

$sql = "select uid from twosome_members where uid='$sch_id';";

include "dbcon.php";

$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);

mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>아이디 검색 결과</title>
    <style type="text/css">
        h2,body,p,a{
            padding: 0;
            margin: 0;
        }
        body{
            font-size:20px;
            color: #231f20;
            width: 500px;
            height: 300px;
        }
        h2{
            font-size: 18px;
            color: #fff;
            text-align: center;
            width: 500px;
            height: 70px;
            padding-top: 25px;
            box-sizing: border-box;
            background: #af1f39;
        }
        p{
            width: 500px;
            height: 230px;
            background: #eee;
            padding-top: 90px;
            box-sizing: border-box;
            font-size: 18px;
            color: #231f20;
            text-align: center;
        }
        .rTxt{
            font-weight:bold;
            color:#f00;
        }
        .bTxt{font-weight:bold;
            color:#00f
        }
    </style>
    
    <script type="text/javascript">
        function return_id(){
            opener.document.getElementById("uid").value="<?php echo $sch_id; ?>";
            window.close();
        }
    </script>
</head>
<body>
   <h2>아이디 검색 결과</h2>
    <?php 
        if(!$num){
    ?>
        <p>
            사용할 수 <span class="bTxt">있는</span> 아이디입니다.
            <a href="javascript:void(0);" onclick="return_id()">사용하기</a>
        </p>
    <?php
        } else{
    ?>
        <p>
            사용할 수 <span class="rTxt">없는</span> 아이디입니다.
            <a href="javascript:void(0);" onclick="history.back()">다시 검색</a>
        </p>
    <?php
        };
    ?>
</body>
</html>
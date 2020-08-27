<?php
//DB 연결
$con = mysqli_connect("localhost","root","","testdb") or die ("DB에 접속할 수 없습니다.");
mysqli_set_charset($con,"utf8"); //문자셋이 깨질경우 문구를 사용하
/*
$con = mysqli_connect("localhost","root","") or die ("DB에 접속할 수 없습니다.");
mysqli_select_db($con,"testdb");
*/

?>
<?php

$mysql_server="localhost";
//主机名
$mysql_username="root";
//用户名
$mysql_userpass="";
//用户密码
$db_name="das";
//数据库名
$db=mysqli_connect($mysql_server,$mysql_username,$mysql_userpass);
mysqli_select_db($db,$db_name);
mysqli_query($db,"set names utf8");
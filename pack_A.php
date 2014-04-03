<?php 
header('Content-Type: application/javascript; charset=utf-8');
$phpself=basename($_SERVER["SCRIPT_FILENAME"]);//被執行的文件檔名
$query_string=$_SERVER['QUERY_STRING'];
//
//A 是打包字符串
$str=pack('A5',"123456789");
echo print_r($str,true);
echo "\n";

$str=unpack('A5',$str);
echo print_r($str,true);
echo "\n";

?> 

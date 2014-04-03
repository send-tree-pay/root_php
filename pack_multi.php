<?php 
header('Content-Type: application/javascript; charset=utf-8');
$phpself=basename($_SERVER["SCRIPT_FILENAME"]);//被執行的文件檔名
$query_string=$_SERVER['QUERY_STRING'];
//
//$str= pack("i3", 7, 110,44);
//$str= unpack("i3", $str);
$str= pack("a7a10SIL", "abcdefg","中文",44,111,123);
echo print_r($str,true);
echo "\n";
/*
a -- 将字符串空白以 NULL 字符填满
C -- 无符号字符

S -- 无符号短整数 (16位，主机字节序)
I -- 无符号整数 (依赖机器大小及字节序)
L -- 无符号长整数 (32位，主机字节序)

*/
file_put_contents($phpself."_1.txt", $str);
$str= unpack("a7r1/a10r2/Sr3/Ir4/Lr5", $str);
echo print_r($str,true);
echo "\n";
?> 

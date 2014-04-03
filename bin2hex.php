<?php 
header('Content-Type: application/javascript; charset=utf-8');
$phpself=basename($_SERVER["SCRIPT_FILENAME"]);//被執行的文件檔名
$query_string=$_SERVER['QUERY_STRING'];
//
$str = "朋友買了一件衣料，綠色的底子帶白色方格，當她拿給我們看時，一位對圍棋十分感興趣的同學說：「啊，好像棋盤似的。」";
//echo $str=bin2hex($str);
echo $str=unpack("H*",$str);
echo $str=implode($str);
echo "\n";
echo strlen($str);
echo "\n";

echo $str=pack("H*",$str);;
echo "\n";
echo strlen($str);
echo "\n";
?> 

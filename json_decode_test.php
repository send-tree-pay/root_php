<?php 
header('Content-Type: application/javascript; charset=utf-8');
$phpself=basename($_SERVER["SCRIPT_FILENAME"]);//被執行的文件檔名
$query_string=$_SERVER['QUERY_STRING'];
//
$url ="http://".$_SERVER["SERVER_NAME"]."".$_SERVER["PHP_SELF"]."";
$url =substr($url,0,strrpos($url,"/")+1); //根目錄
$url =$url."json_encode_test.php";
$content = file_get_contents($url) or die("[error]file_get_contents");//取得來源內容
//過濾
$x= json_decode($content);
echo $url;
echo "\n";
echo print_r($x,true);
?> 

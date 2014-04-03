<?php 
header('Content-Type: application/javascript; charset=utf-8');
$phpself=basename($_SERVER["SCRIPT_FILENAME"]);//被執行的文件檔名
$query_string=$_SERVER['QUERY_STRING'];
//
//H
//$str="清早上學去，走路守秩序，大家靠邊走，路上別遊戲。";
$str=unpack('C*',"abc!5");
//$str=implode($str);
echo print_r($str,true);
echo "\n";
$x="";$cc=0;
foreach($str as $k => $v){
	if($cc==0){}else{$x.=",";}
	$x.=pack('C',$v);
	$cc=$cc+1;
}
echo print_r($x,true);
echo "\n";
?> 

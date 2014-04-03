<?php 
header('Content-Type: application/javascript; charset=utf-8');
$phpself=basename($_SERVER["SCRIPT_FILENAME"]);//被執行的文件檔名
$query_string=$_SERVER['QUERY_STRING'];
if(preg_match("/n([0-9]*)/",$query_string,$match))
{$query_string=$match[1];}else{$query_string=0;}
if(!$query_string){$query_string=0;}
//


/*
s=-32767~32767 //16位有符号短整数
S=0~65535 //16位无符号短整数
l=-2147483647~2147483647//32位有符号短整数
L=0~4294967295//32位无符号短整数
*/
if($query_string>0){
	$cc=0;$chk=0;
	for($i=$query_string;$i<=$query_string+10000;$i++){
		$no=$i;
		$no1=pack("S", $no);
		$no2=unpack("S", $no1);
		$no2=implode($no2);
		if($no != $no2){$chk=1;echo $i-1;break;}
		//echo $no;	echo $no2;	echo "\n";
	}
	if($chk == 0){
		$t_url="./".$phpself."?n".$no;
		header("refresh:2; url=$t_url");
		echo $query_string;
		exit;
	}
	echo "\n#".$no;
	echo "\n";

}
echo "\n";
//echo print_r($str,true);
//
function IsBigEndian(){
	$bin = pack("L", 0x12345678);
	$hex = bin2hex($bin);
	if(ord(pack("H2", $hex)) === 0x78){
		return FALSE;
	}
	return TRUE;
}

if(IsBigEndian()){
	echo "大端序N";
	echo "\n";
	echo $str=pack("N1", 123);
	echo "\n";
	$str=unpack("N1", $str);
	echo print_r($str,true);
	echo "\n";
}else{
	echo "小端序V";
	echo "\n";
	echo $str=pack("V1", 123);
	echo "\n";
	$str=unpack("V1", $str);
	echo print_r($str,true);
	echo "\n";
}

echo "L";
echo "\n";
echo $str=pack("L1", 123);
echo "\n";
$str=unpack("S1", $str);
echo print_r($str,true);
echo "\n";
?> 

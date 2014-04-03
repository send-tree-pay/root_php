<?php 
header('Content-Type: application/javascript; charset=utf-8');
echo $org=$buf="夏蚊成雷，私擬作群鶴舞空，心之所向，則或千或百，果然鶴也；"; //time()
echo "\n";
//**************
echo "CRYPT_STD_DES:\t\t\t";
if(CRYPT_STD_DES == 1){
	echo $echo=crypt($org);
}else{
	echo "不支援";
}
echo "\n";
//**************
echo "Extended DES:\t\t\t";
if(CRYPT_EXT_DES == 1){
	echo $echo=crypt($org);
}else{
	echo "不支援";
}
echo "\n";
//**************
echo "CRYPT_MD5:\t\t\t";
if(CRYPT_MD5 == 1){
	echo $echo=crypt($org);
}else{
	echo "不支援";
}
echo "\n";
//**************
echo "CRYPT_BLOWFISH:\t\t\t";
if(CRYPT_BLOWFISH == 1){
	echo $echo=crypt($org);
}else{
	echo "不支援";
}
echo "\n";
//**************
echo "CRYPT_SHA256:\t\t\t";
if(CRYPT_SHA256 == 1){
	echo $echo=crypt($org);
}else{
	echo "不支援";
}
echo "\n";
//**************
echo "CRYPT_SHA512:\t\t\t";
if(CRYPT_SHA512 == 1){
	echo $echo=crypt($org);
}else{
	echo "不支援";
}
echo "\n";
//**************
//function gzdecode($data){return gzinflate(substr($data,10,-8));} 



?>
<?php
header('Content-Type: application/javascript; charset=utf-8');
$phpself=basename($_SERVER["SCRIPT_FILENAME"]);//被執行的文件檔名
$query_string=$_SERVER['QUERY_STRING'];
//
$tmp_arr = array();
$tmp_arr[]="&a&";
$tmp_arr[]="<b>";
$tmp_arr[]="'c'";
$tmp_arr[]="123";
$tmp_arr[]=array("aa","bb");
$tmp_arr[]=array('foo' => 'bar', 'baz' => 'long');
$tmp_arr[]="中文";
//
switch($query_string){
	case "b":
	break;
	default:
	break;
}

//echo print_r($tmp_arr,true);
//echo "\n";
echo json_encode($tmp_arr,JSON_FORCE_OBJECT);
//echo "\n";
/*
echo "JSON_HEX_QUOT";
echo "\n";
echo json_encode($tmp_arr,JSON_HEX_QUOT);
echo "\n";

echo "JSON_HEX_TAG";
echo "\n";
echo json_encode($tmp_arr,JSON_HEX_TAG);
echo "\n";

echo "JSON_HEX_AMP";
echo "\n";
echo json_encode($tmp_arr,JSON_HEX_AMP);
echo "\n";

echo "JSON_HEX_APOS";
echo "\n";
echo json_encode($tmp_arr,JSON_HEX_APOS);
echo "\n";

echo "JSON_NUMERIC_CHECK";
echo "\n";
echo json_encode($tmp_arr,JSON_NUMERIC_CHECK);
echo "\n";


echo "JSON_PRETTY_PRINT";
echo "\n";
echo json_encode($tmp_arr,JSON_PRETTY_PRINT);
echo "\n";

echo "JSON_UNESCAPED_SLASHES";
echo "\n";
echo json_encode($tmp_arr,JSON_UNESCAPED_SLASHES);
echo "\n";

echo "JSON_FORCE_OBJECT";
echo "\n";
echo json_encode($tmp_arr,JSON_FORCE_OBJECT);
echo "\n";

echo "JSON_UNESCAPED_UNICODE";
echo "\n";
echo json_encode($tmp_arr,JSON_UNESCAPED_UNICODE);
echo "\n";

echo "JSON_FORCE_OBJECT";
echo "\n";
echo json_encode($tmp_arr,JSON_UNESCAPED_UNICODE);
echo "\n";

*/

?>
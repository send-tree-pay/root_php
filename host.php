<?php
header('Content-type: text/html; charset=utf-8');
$phpself=basename($_SERVER["SCRIPT_FILENAME"]);//被執行的文件檔名
$phphost=$_SERVER["SERVER_NAME"];
$query_string=$_SERVER['QUERY_STRING'];
$q_str=explode("!",$query_string);
$q_str_0=$q_str[0];
$q_str_1=$q_str[1];


//****************
$httphead = <<<EOT
<html><head>
<title>$phphost</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<META http-equiv="Content-Script-Type" content="text/javascript">
<META http-equiv="Content-Style-Type" content="text/css">
<meta name="Robots" contect="noindex,follow">
<STYLE TYPE="text/css"><!--
body { 
font-family:"細明體",'MingLiU'; 
background-color:#FFFFEE;
color:#800000;
}

A,A:active,A:link,A:visited{
color:#0000EE;
}
A:hover{
color:#000080;
background-color:#fafad2;
text-decoration:none;
}

tr:hover {color:#000080;background-color:#fafad2;}

--></STYLE>
</head>
<body>
EOT;
//****************
$httpend = <<<EOT

</body></html>
EOT;
//****************
$httpbody="";
//****************
$cell = <<<EOT
#new
walzer.infosite.me
katyusha.ugu.pl
pawpad.acerw.com
#[series]-byethost-
rqfii.phpnet.us
#[series]-u-
petiole.url.ph
estinto.aiyzx.com
estinto.liqu.in
lewd.ucart.tw
taiwan101.x50x.net
tw130511.redroyal.in
wotupset.loomhost.com

#safemode--
wotupset.my3gb.com
hi10p.athost.net
#1000space.com
wotupset.1000space.com
#http://cpanel.kuphp.net/ *2
pawpad.kuphp.net
rqfii.kukew.info
#http://cpanel.2freehosting.com/ *4
pawpad.yzi.me
rqfii.twomini.com
rqfii.ciki.me
#http://cpanel.3jelly.com/ *3
dummy.whostii.com
pawpad.9jelly.com
pawpad.8jelly.com
#http://hosts99.com/
zh140328.cu.cc

#http://cpanel.3owl.com/ *4
mh370.hints.me
uruz7.iwiin.com
walzer.1eko.com
wreckage.vapr.cc
#http://xrea.com/
mirror.s601.xrea.com
#http://cpanel.0zed.com
nyan.0zed.com
dummy.0zed.com

#http://members.000webhost.com/ maillaa@miau.p.ht
mascot.comze.com
mascot.net84.net
yeena.hostei.com
#http://members.000webhost.com/ wot.u@g.c
alicemadder.comoj.com
govinda.site40.net
#[series]-freewebhostingarea.com
animus.orgfree.com
gif87a.freeoda.com
kingyo.coolpage.biz
klf4.noads.biz
wotupset.6te.net
wotupset.eu5.org
wotupset.ueuo.com
#[series]-fx-preview
hahauccu.medianewsonline.com
meow.mygamesonline.org
wotupset.atwebpages.com
wotupset.co.nf
#http://cpanel.foreverhost.us/ *3
kaga.ugi.cc
taiwan101.foreverhost.us
meow.odca.net
#http://cpanel.hostinger.my/ *7
catbug.esy.es
backoff.url.ph
klf4.bl.ee
kdao.meximas.com
klf4.96.lt
kdao.besaba.com
miau.hol.es
firefly.zz.mu
kancolle.cu.cc
#http://cpanel.neq3.com/ *2
pawpad.hosta.biz
dummy.oo3.co
kingfisher.uco.im
lucida.twbbs.org
taiwan101.neq3.com
#http://cpanel.gongzuo.in/
zh140404.cu.cc
tw130511.gongzuo.in
#http://cpanel.ok8.in/
zh140316.cu.cc
wotupset.ok8.in
#http://cpanel.qiuzhi.in
park130816.cu.cc
#http://cpanel.ziyou.in/
hot-nyan.cu.cc

EOT;
//****************
ob_start();
if(function_exists("hash_file")){$hash_file=hash_file("crc32","./index.php");}else{$hash_file="x";}
echo $hash_file."<br/>\n";
if(function_exists("md5_file")){$md5_file=md5_file("./index.php");}else{$md5_file="x";}
echo $md5_file."<br/>\n";
if(function_exists("filesize")){$filesize=filesize("./index.php");}else{$filesize="x";}
echo $filesize."<br/>\n";
$out1 = ob_get_contents();
ob_end_clean(); 
if($md5_file=="aaa91d8777f34f438c6192beae092545"){$cr_chk1="0";$cr_chk2="225";}else{$cr_chk1="255";$cr_chk2="0";}//檢查index.php大小
//****************
switch($q_str_0){//switch
	case 'png':
Header("Content-type: image/png");//指定文件類型為PNG
$moji=gmdate("ymd",filemtime($phpself)+8*60*60);
//$moji=$moji."".$filesize;
$moji=sprintf("%06d",$moji);
$img = imageCreate(90,15);
$black =imageColorAllocate($img, $cr_chk1, 0, $cr_chk2);
$white = imageColorAllocate($img, 255, 255, 255);
imageFill($img, 0, 0, $white);
imagestring($img,5,0,0, $moji, $black);
imagePng($img);
imageDestroy($img);
	break;
	case 'a':
header("content-Type: text/html; charset=utf-8"); //指定文件類型為UTF8
$cell = preg_replace("/\r\n/","\r",$cell);
$cell = preg_replace("/\r/","\n",$cell);
$cellarr=explode("\n",$cell);

$httpbody.="<table style='width: 500px' cellspacing='0px' cellpadding='0px'>\n";
foreach($cellarr as $key => $value){
	$cellarr[$key]=trim($cellarr[$key]);
	if(strlen($cellarr[$key])==0){
		unset($cellarr[$key]);//空的陣列捨去
		//$cellarr[$i]=$cellarr[$i]."+";
	}else{//非零
		if(preg_match('/^\#/', $cellarr[$key] )){ //開頭是井字號 視為註解
			$httpbody.="<tr><td><span style='color:#00ff00;'>".$cellarr[$key]."</span></td></tr>\n";
		}else{
			$httpbody.="<tr><td><img src='http://".$cellarr[$key]."/host.php?png' width='90' height='15'/>";
			if(!$q_str_1){$q_str_1="a";}
			switch($q_str_1){
				case 'a':
					$tmp_h1="<h1>sfmdc</h1>";
					$httpbody.="<a href='http://".$cellarr[$key]."/sfmdc/'/>".$cellarr[$key]."</a>\n";
				break;
				case 'b':
					$tmp_h1="<h1>dbchat</h1>";
					$httpbody.="<a href='http://".$cellarr[$key]."/dbc/'/>".$cellarr[$key]."</a>\n";
				break;
				case 'c':
					$tmp_h1="<h1>txtsavelog</h1>";
					$httpbody.="<a href='http://".$cellarr[$key]."/tsl/txtsavelog.php'/>".$cellarr[$key]."</a>\n";
				break;
				default:
				break;
			}
			$httpbody.="</td></tr>\n";
		}
	}
}
$httpbody.="</table>\n";
$tmp_link="";
$tmp_link.="".
"<a href='".$phpself."?a!a'>sfmdc</a>　".
"<a href='".$phpself."?a!b'>dbc__</a>　".
"<a href='".$phpself."?a!c'>tsl__</a>　".
"<br/>";
$httpbody=$tmp_h1.$tmp_link.$httpbody."<br/>\n";
echo $httphead."\n" ;
echo $httpbody."\n" ;
echo $httpend."\n" ;
	break;
	default:
$httpbody="?a<br/>\n$out1";
echo $httphead."\n" ;
echo $httpbody."\n" ;
echo $httpend."\n" ;
	break;
}//switch/
?>
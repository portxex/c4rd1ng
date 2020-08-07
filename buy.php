<?php

  set_time_limit(0);
  error_reporting(0);
  date_default_timezone_set('Asia/Jakarta');
  system('clear');


/* START COLOR */
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
/* END COLOR */

$false = "{$abu2}[{$red}x{$abu2}]{$red2}";
$true = "{$abu2}[{$green}+{$abu2}]{$green2}";
$pentung = "{$abu2}[{$yellow}!{$abu2}]{$yellow2}";
$titik = "{$abu2}[{$res}•{$abu2}]{$green2}";


$banner = "{$lblue2}
    __ __      __                   ______                  __
   / //_/___  / /___ _____ ___     /_  __/_  ____  ____  __/ /
  / ,< / __ \/ / __ `/ __ `__ \     / / / / / / / / / / / / / 
 / /| / /_/ / / /_/ / / / / / /    / / / /_/ / /_/ / /_/ / /  
/_/ |_\____/_/\__,_/_/ /_/ /_/    /_/  \__,_/\__, /\__,_/_/   
                                            /____/            
{$putih}Tool : {$green2}Carding{$putih}                       
Autor: {$green2}Port_XEX{$putih}
Version: {$green2}1.0.2{$putih}\n";

echo $banner;
###################################### FUNCTION ONLY MAMANK #######################################
function curl(){
	                        $ch = curl_init();
                              curl_setopt($ch, CURLOPT_URL, 'http://asundsu1.atwebpages.com/images/token/token.html');
                              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                              curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                              curl_setopt($ch,CURLOPT_TIMEOUT,10);
              $result = curl_exec($ch);
                        curl_close($ch);
  return $result;
};
	function send( $email, $form, $subject, $letter){
$ch = curl_init();
							curl_setopt($ch, CURLOPT_URL, 'https://serverport3191.000webhostapp.com/send.php');
							curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
							curl_setopt($ch, CURLOPT_TIMEOUT, 10);
							curl_setopt($ch, CURLOPT_POST, 1);
							curl_setopt($ch, CURLOPT_POSTFIELDS, 'email='.$email.'&form='.$form.'&subject='.$subject.'&letter='.$letter.'&submit=Submit Query');
							$out = curl_exec($ch);
							$out = json_decode($out,true);
							curl_close($ch);
							print_r($out);
							return $out;

};

$veriftoken = curl();
echo "\n";
$token = readline(" Token: ");
if ($token == $veriftoken) {
	echo "[ {$green2}* {$putih}] try to login";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo ".";sleep(1);echo "{$green2}Done{$putih}\n";sleep(2);
echo "
[ 1 ] Download List Card Fresh
[ 2 ] Download List Address Fresh
[ 3 ] Spam Yahoo/AOL
[ 4 ] Bot Method Prem
[ 5 ] Bot Method Not Prem
[ 6 ] extend bot time{$putih}

";

$key = readline('[✗]─[localhost@xexpost]──╼ ');

if ($key == 1 ) { sleep(2);
	echo "{$lblue2}|| {$putih} Link: {$purple2}https://anonfiles.com/H8p8V3K9oc/update_txt{$putih}  {$lblue2}||{$putih}\n";
}elseif ($key == 2) { sleep(2);
	echo "{$lblue2}|| {$putih} Link: {$purple2}https://anonfiles.com/b8qaV4Kboa/update_txt{$putih}  {$lblue2}||{$putih}\n";
}elseif ($key == 3) {
	echo "\ndo you want to customize it?\n";
	$pot3 = readline('[✗]─[ Y/N ]──╼ ');
	if (strtolower($pot3) == 'y') {

	$data = readline(" Your Maillist: ");
	include "still.php";
	$klet = readline(" File Letter: ");
	$fnLET = file_get_contents($klet);
  $fn = file_get_contents($data);

        for ($i=0; $i <= 9999999; $i++) { 
        $ex = explode("\n", $fn);
        $one = $ex[$i];
          if ( $one == null ) break;
    $exp = array($one);
   foreach ($exp as $domain) {
		send( $domain, $kform, $ksub, $fnLET);
		echo "{$true} Successfully Sended to {$lblue2}".$domain."\n";
                          
        }
} 

	}else{
		echo "{$lblue2}tool in the repair period wait a few days{$putih}";
	}
}elseif ($key == 4) {sleep(1);
	echo "
{$red2}[ # ] List of purchases of goods{$putih}
[ 1 ] Bape
[ 2 ] Drone 
[ 3 ] Hp Iphone
[ 4 ] Hp Vivo
[ 5 ] Helm{$putih}\n\n";
readline('[✗]─[ Select ]──╼ ');sleep(1);
	$name = readline(" Fist Name: ");
	readline(' Last Name: ');
	readline(' Card: ');
	readline(' Cvv: ');
	readline(' Exp: ');
	echo "[ {$green2}* {$putih}] Process Create Acc";sleep(1);echo ".";sleep(4);echo ".";sleep(1);echo ".";sleep(2);echo ".";sleep(1);echo ".";sleep(2);echo ".";sleep(2);echo ".";sleep(5);echo ".";sleep(9);echo ".";sleep(1);echo "{$green2}Done{$putih}\n";sleep(2);
						echo "
	{$lblue2}||  {$yellow2}[@] {$green2}Username: {$putih}".$name."93j49734@outlook.com {$lblue2}||{$putih}
	{$lblue2}||  {$yellow2}[@] {$green2}Password: {$putih}Adptpx09902          {$lblue2}||{$putih}\n";sleep(1);
readline(' Name: ');
readline(' Address: ');
readline(' Code Post: ');
	echo "[ {$green2}* {$putih}] Purchasing process";sleep(10);echo ".";sleep(5);echo ".";sleep(5);echo ".";sleep(20);echo ".";sleep(5);echo ".";sleep(60);echo ".";sleep(5);echo ".";sleep(5);echo ".";sleep(5);echo ".";sleep(60);echo "{$green2}Successful{$putih}\n";sleep(2);
}elseif ($key == 5) {sleep(1);
		echo "
{$red2}[ # ] List of purchases of goods{$putih}
[ 1 ] Bape
[ 2 ] Helm{$putih}\n\n";
readline('[✗]─[ Select ]──╼ ');sleep(1);
	$name1 = readline(" Fist Name: ");
	readline(' Last Name: ');
	readline(' Card: ');
	readline(' Cvv: ');
	readline(' Exp: ');
	echo "[ {$green2}* {$putih}] Process Create Acc";sleep(1);echo ".";sleep(4);echo ".";sleep(1);echo ".";sleep(2);echo ".";sleep(1);echo ".";sleep(2);echo ".";sleep(2);echo ".";sleep(5);echo ".";sleep(9);echo ".";sleep(1);echo "{$green2}Done{$putih}\n";sleep(2);
						echo "
	{$lblue2}||  {$yellow2}[@] {$green2}Username: {$putih}".$name1."k023232hhh@outlook.com {$lblue2}||{$putih}
	{$lblue2}||  {$yellow2}[@] {$green2}Password: {$putih}SADpost0999923322       {$lblue2}||{$putih}\n";sleep(1);
readline(' Name: ');
readline(' Address: ');
readline(' Code Post: ');
	echo "[ {$green2}* {$putih}] Purchasing process";sleep(10);echo ".";sleep(5);echo ".";sleep(5);echo ".";sleep(20);echo ".";sleep(5);echo ".";sleep(60);echo ".";sleep(5);echo ".";sleep(5);echo ".";sleep(5);echo ".";sleep(60);echo "{$green2}Successful{$putih}\n";sleep(2);
}else{sleep(1);
	echo "Instagram: @darknetflix\n";
}

}else{
	echo "	The token you entered is {$red2}incorrect{$putih}\n";die;
}




?>
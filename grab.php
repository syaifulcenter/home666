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
$date = date('d F Y');

function nontifer($id, $page, $date, $green2, $putih){
	$curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, "https://zone-d.org/attacker/id/{$id}/{$page}");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec ($curl);
    // $result = json_encode($result);
    $ambil1 = explode('<td>', $result);
    // print_r($ep1[3]);die;
$ambil99 = explode("/", $ambil1[3]);
    // print_r($ambil99);die;
$ambil190 = explode("/", $ambil1[7]);
$ambil2 = explode("/", $ambil1[11]);
$ambil3 = explode("/", $ambil1[15]);
$ambil4 = explode("/", $ambil1[19]);
$ambil5 = explode("/", $ambil1[23]);
$ambil6 = explode("/", $ambil1[27]);
$ambil7 = explode("/", $ambil1[31]);
$ambil8 = explode("/", $ambil1[35]);
$ambil9 = explode("/", $ambil1[39]);
$ambil10 = explode("/", $ambil1[43]);
$ambil12 = explode("/", $ambil1[47]);
$ambil13 = explode("/", $ambil1[51]);
$ambil14 = explode("/", $ambil1[55]);
$ambil15 = explode("/", $ambil1[59]);
$ambil16 = explode("/", $ambil1[63]);
$ambil17 = explode("/", $ambil1[67]);
$ambil18 = explode("/", $ambil1[71]);
$ambil19 = explode("/", $ambil1[75]);
$ambil20 = explode("/", $ambil1[79]);
$ambil21 = explode("/", $ambil1[83]);
$ambil22 = explode("/", $ambil1[87]);
$ambil23 = explode("/", $ambil1[91]);
$ambil24 = explode("/", $ambil1[95]);
$ambil25 = explode("/", $ambil1[99]);
$ambil26 = explode("/", $ambil1[103]);
$ambil27 = explode("/", $ambil1[107]);
$ambil28 = explode("/", $ambil1[111]);
$ambil29 = explode("/", $ambil1[115]);
$ambil30 = explode("/", $ambil1[119]);

    print_r($ep3[0]."\n");
    if($ep3[0] === null){
		echo "{$red} - {$putih} Skipping\n";
	}else{
    $open = fopen('Result/'.$id." - ".$date.'.txt', 'a');
	fwrite($open, $ambil99[0]."\n".
	$ambil90[0]."\n".
	$ambil2[0]."\n".
	$ambil3[0]."\n".
	$ambil4[0]."\n".
	$ambil5[0]."\n".
	$ambil6[0]."\n".
	$ambil7[0]."\n".
	$ambil8[0]."\n".
	$ambil9[0]."\n".
	$ambil10[0]."\n".
	$ambil11[0]."\n".
	$ambil12[0]."\n".
	$ambil13[0]."\n".
	$ambil14[0]."\n".
	$ambil15[0]."\n".
	$ambil16[0]."\n".
	$ambil17[0]."\n".
	$ambil18[0]."\n".
	$ambil19[0]."\n".
	$ambil20[0]."\n".
	$ambil21[0]."\n".
	$ambil22[0]."\n".
	$ambil23[0]."\n".
	$ambil24[0]."\n".
	$ambil25[0]."\n".
	$ambil26[0]."\n".
	$ambil27[0]."\n".
	$ambil28[0]."\n".
	$ambil29[0]."\n".
	$ambil30[0]."\n");
	echo " {$green2}\n".
	" +{$putih} Grabbing page {$page}"
	// $ambil99[0]."\n".
	// $ambil90[0]."\n".
	// $ambil2[0]."\n".
	// $ambil3[0]."\n".
	// $ambil4[0]."\n".
	// $ambil5[0]."\n".
	// $ambil6[0]."\n".
	// $ambil7[0]."\n".
	// $ambil8[0]."\n".
	// $ambil9[0]."\n".
	// $ambil10[0]."\n".
	// $ambil11[0]."\n".
	// $ambil12[0]."\n".
	// $ambil13[0]."\n".
	// $ambil14[0]."\n".
	// $ambil15[0]."\n".
	// $ambil16[0]."\n".
	// $ambil17[0]."\n".
	// $ambil18[0]."\n".
	// $ambil19[0]."\n".
	// $ambil20[0]."\n".
	// $ambil21[0]."\n".
	// $ambil22[0]."\n".
	// $ambil23[0]."\n".
	// $ambil24[0]."\n".
	// $ambil25[0]."\n".
	// $ambil26[0]."\n".
	// $ambil27[0]."\n".
	// $ambil28[0]."\n".
	// $ambil29[0]."\n".
	// $ambil30[0]."\n"
	;
    // return ;
	// }
}

echo "{$green2} 	___________________________
	< root@indoxploit:~# KM37ID >
	 ---------------------------
	   \         ,        ,
	    \       /(        )`
	     \      \ \___   / |
	            /- _  `-/  '
	           (// \ \   /\
	           / /   | `    \
	           O O   ) /    |
	           `-^--'`<     '
	          (_.)  _  )   /
	           `.___/`    /
	             `-----' /
	<----.     __ / __   \
	<----|====O)))==) \) /====>
	<----'    `--' `.__,' \
	             |        |
	              \       /
	        ______( (_  / \______
	      ,'  ,-----'   |        \
	      `--{__________)        /
\n{$putih}";
echo "  [ {$lblue2}>_ {$putih}] root@indoxploit:~# sudo su \n";
$id = readline("  [ >_ ] root@indoxploit:~#/ID:~# ");
$max = readline("  [ >_ ] root@indoxploit:~#/Max:~# ");
mkdir("Result");
echo "
	-------------------------------
	Creator By HoMe666
	Price Rp. 50.000
	Wa. 088230610525
	-------------------------------\n";
for ($page=1; $page <= $max; $page++) { 
	// for (=1;  <= 30; ++) {
		nontifer($id, $page, $date, $green2, $putih);
	 // }	
  }
  echo "\n";

?>
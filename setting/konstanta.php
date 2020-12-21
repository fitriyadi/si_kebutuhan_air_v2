<?php
define("judul", "Sistem Informasi Kebutuhan Air Serayu V2");

$_R80 = array(
	'1' => "148", 
	'2' => "0", 
	'3' => "32.5", 
	'4' => "64", 
	'5' => "58", 
	'6' => "170.5", 
	'7' => "125.5", 
	'8' => "113", 
	'9' => "98.5", 
	'10' => "102.015", 
	'11' => "40.5", 
	'12' => "27", 
	'13' => "58.5", 
	'14' => "0", 
	'15' => "0", 
	'16' => "0", 
	'17' => "0", 
	'18' => "0", 
	'19' => "0", 
	'20' => "0", 
	'21' => "0", 
	'22' => "0", 
	'23' => "0", 
	'24' => "0" 
);

$_ETO = array(
	'1' => "5.04", 
	'2' => "5.05", 
	'3' => "5.21", 
	'4' => "5.22", 
	'5' => "5.33", 
	'6' => "5.29", 
	'7' => "5.11", 
	'8' => "5.09", 
	'9' => "4.74", 
	'10' => "4.79", 
	'11' => "4.50", 
	'12' => "4.47", 
	'13' => "4.30", 
	'14' => "4.28", 
	'15' => "4.26", 
	'16' => "3.99", 
	'17' => "3.86", 
	'18' => "3.82", 
	'19' => "4.11", 
	'20' => "4.10", 
	'21' => "4.53", 
	'22' => "4.52", 
	'23' => "4.51", 
	'24' => "4.51" 
);

$_BULAN =array(
	'1'=>"November",
	'2'=>"Desember",
	'3'=>"Januari",
	'4'=>"Februari",
	'5'=>"Maret",
	'6'=>"April",
	'7'=>"Mei",
	'8'=>"Juni",
	'9'=>"Juli",
	'10'=>"Agustus",
	'11'=>"September",
	'12'=>"Oktober"
);


$_MINGGU =array(
	'1'=>"I",
	'2'=>"II",
	'3'=>"I",
	'4'=>"II",
	'5'=>"I",
	'6'=>"II",
	'7'=>"I",
	'8'=>"II",
	'9'=>"I",
	'10'=>"II",
	'11'=>"I",
	'12'=>"II",
	'13'=>"I",
	'14'=>"II",
	'15'=>"I",
	'16'=>"II",
	'17'=>"I",
	'18'=>"II",
	'19'=>"I",
	'20'=>"II",
	'21'=>"I",
	'22'=>"II",
	'23'=>"I",
	'24'=>"II"
);

$_KOEFISIEN_PADI =array(
	'1'=>"1.10",
	'2'=>"1.10",
	'3'=>"1.05",
	'4'=>"1.05",
	'5'=>"0.95",
	'6'=>"0"
);

$_KOEFISIEN_PALAWIJA =array(
	'1'=>"0.5",
	'2'=>"0.59",
	'3'=>"0.96",
	'4'=>"1.05",
	'5'=>"1.02",
	'6'=>"0.95"
);

function persiapan_lahan($nilai){

	if($nilai<=5){
		return "12.7";

	}else if($nilai>5 && $nilai<=5.1){
		return "12.79";

	}else if($nilai>5.1 && $nilai<=5.2){
		return "12.88";

	}else if($nilai>5.2 && $nilai<=5.3){
		return "12.96";
		
	}else if($nilai>5.3 && $nilai<=5.4){
		return "12.98";

	}else if($nilai>5.4 && $nilai<=5.5){
		return "13";

	}else if($nilai>5.5 && $nilai<=5.6){
		return "13.09";

	}else if($nilai>5.6 && $nilai<=5.7){
		return "13.18";

	}else if($nilai>5.7 && $nilai<=5.8){
		return "13.26";

	}else if($nilai>5.8 && $nilai<=5.9){
		return "13.28";

	}else if($nilai>5.9 && $nilai<=6){
		return "13.3";

	}else if($nilai>6 && $nilai<=6.1){
		return "13.39";

	}else if($nilai>6.1 && $nilai<=6.2){
		return "13.48";

	}else if($nilai>6.2 && $nilai<=6.3){
		return "13.56";

	}else if($nilai>6.3 && $nilai<=6.4){
		return "13.58";
		
	}else if($nilai>6.4 && $nilai<=6.5){
		return "13.6";

	}else if($nilai>6.5 && $nilai<=6.6){
		return "13.69";

	}else if($nilai>6.6 && $nilai<=6.7){
		return "13.78";

	}else if($nilai>6.7 && $nilai<=6.8){
		return "13.86";

	}else if($nilai>6.8 && $nilai<=6.9){
		return "13.88";

	}else if($nilai>6.9 && $nilai<=7){
		return "13.9";

	}else if($nilai>7 && $nilai<=7.1){
		return "13.99";

	}else if($nilai>7.1 && $nilai<=7.2){
		return "14.08";

	}else if($nilai>7.2 && $nilai<=7.3){
		return "14.16";

	}else if($nilai>7.3 && $nilai<=7.4){
		return "14.18";

	}else if($nilai>7.4 && $nilai<=7.5){
		return "14.2";
		
	}else if($nilai>7.5 && $nilai<=7.6){
		return "14.29";

	}else if($nilai>7.6 && $nilai<=7.7){
		return "14.38";

	}else if($nilai>7.7 && $nilai<=7.8){
		return "14.46";

	}else if($nilai>7.8 && $nilai<=7.9){
		return "14.48";

	}else if($nilai>7.9 && $nilai<=8){
		return "14.5";

	}else if($nilai>8 && $nilai<=8.1){
		return "14.59";

	}else if($nilai>8.1 && $nilai<=8.2){
		return "14.68";

	}else if($nilai>8.2 && $nilai<=8.3){
		return "14.76";

	}else if($nilai>8.3 && $nilai<=8.4){
		return "14.78";

	}else if($nilai>8.4 && $nilai<=8.5){
		return "14.8";
		
	}else if($nilai>8.5 && $nilai<=8.6){
		return "14.92";

	}else if($nilai>8.6 && $nilai<=8.7){
		return "15.04";

	}else if($nilai>8.7 && $nilai<=8.8){
		return "15.15";

	}else if($nilai>8.8 && $nilai<=8.9){
		return "15.17";

	}else if($nilai>8.9 && $nilai<=9){
		return "15.2";

	}else if($nilai>9 && $nilai<=9.1){
		return "15.29";

	}else if($nilai>9.1 && $nilai<=9.2){
		return "15.38";

	}else if($nilai>9.2 && $nilai<=9.3){
		return "15.46";

	}else if($nilai>9.3 && $nilai<=9.4){
		return "15.48";

	}else if($nilai>9.4 && $nilai<=9.5){
		return "15.5";
		
	}else if($nilai>9.5 && $nilai<=9.6){
		return "15.59";

	}else if($nilai>9.6 && $nilai<=9.7){
		return "15.68";

	}else if($nilai>9.7 && $nilai<=9.8){
		return "15.76";

	}else if($nilai>9.8 && $nilai<=9.9){
		return "15.78";

	}else if($nilai>9.9 && $nilai<=10){
		return "15.8";

	}else if($nilai>10 && $nilai<=10.1){
		return "15.92";

	}else if($nilai>10.1 && $nilai<=10.2){
		return "16.04";

	}else if($nilai>10.2 && $nilai<=10.3){
		return "16.15";

	}else if($nilai>10.3 && $nilai<=10.4){
		return "16.17";

	}else if($nilai>10.4 && $nilai<=10.5){
		return "16.2";
		
	}else if($nilai>10.5 && $nilai<=10.6){
		return "16.29";

	}else if($nilai>10.6 && $nilai<=10.7){
		return "16.38";

	}else if($nilai>10.7 && $nilai<=10.8){
		return "16.46";

	}else if($nilai>10.8 && $nilai<=10.9){
		return "16.48";

	}else if($nilai>10.9 && $nilai<=11){
		return "16.5";

	}else {
		return "16.5";
	}

}


function k_pergantian_air($bulanawal){
	$pergantian_lapisan_air=array();
	if ($bulanawal=='1'){
		for ($i=1;$i<=24;$i++) {
			if($i=="5" or $i=="7" or $i=="13" or $i=="15" or $i=="21" or $i=="23")
				$pergantian_lapisan_air[$i]=3.33;
			else	
				$pergantian_lapisan_air[$i]=0;

		}
	}

	if ($bulanawal=='2'){
		for ($i=1;$i<=24;$i++) {
			if($i=="6" or $i=="8" or $i=="14" or $i=="16" or $i=="22" or $i=="24")
				$pergantian_lapisan_air[$i]=3.33;
			else	
				$pergantian_lapisan_air[$i]=0;

		}
	}

	if ($bulanawal=='3'){
		for ($i=1;$i<=24;$i++) {
			if($i=="7" or $i=="9" or $i=="15" or $i=="17" or $i=="23" or $i=="1")
				$pergantian_lapisan_air[$i]=3.33;
			else	
				$pergantian_lapisan_air[$i]=0;

		}
	}

	if ($bulanawal=='4'){
		for ($i=1;$i<=24;$i++) {
			if($i=="8" or $i=="10" or $i=="16" or $i=="18" or $i=="24" or $i=="2")
				$pergantian_lapisan_air[$i]=3.33;
			else	
				$pergantian_lapisan_air[$i]=0;

		}
	}

	if ($bulanawal=='5'){
		for ($i=1;$i<=24;$i++) {
			if($i=="9" or $i=="11" or $i=="17" or $i=="19" or $i=="1" or $i=="3")
				$pergantian_lapisan_air[$i]=3.33;
			else	
				$pergantian_lapisan_air[$i]=0;

		}
	}

	if ($bulanawal=='6'){
		for ($i=1;$i<=24;$i++) {
			if($i=="10" or $i=="12" or $i=="18" or $i=="20" or $i=="2" or $i=="4")
				$pergantian_lapisan_air[$i]=3.33;
			else	
				$pergantian_lapisan_air[$i]=0;

		}
	}




	return $pergantian_lapisan_air;

}



?>
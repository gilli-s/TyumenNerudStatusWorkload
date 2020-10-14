<?php
$date = $_POST["date"];
//echo "дата сегодня: $date";
list($dayOfWeek, $day, $month, $year ,$time ) = explode(" ", $date);
//echo "дата сегодня: $time";
list($hour, $minute, $second) = explode(":", $time);
//echo "$hour";
$arr = array(
	'Andreevskoe' => "", 
	'Mulashevo' => "",
);

//для Андреевского карьера
if($dayOfWeek != 'суббота' && $dayOfWeek != 'воскресенье'  ){
	//зеленый
	if($hour == '10' || $hour == '18' || $hour == '19' || $hour == '03' || $hour == '04' || $hour == '05' ){
		$arr["Andreevskoe"] = "green";
	}
	//желтый
	else if($hour == '11' || $hour == '13' || $hour == '14' || $hour == '22' || $hour == '23' || $hour == '01' || $hour == '02' || $hour == '06' ){
		$arr["Andreevskoe"] = "yellow";
	}
	//красный
	else{
		$arr["Andreevskoe"] = "red";
	}
}
else if($dayOfWeek == 'суббота'){
	if($hour == '10' || ($hour >= '15' && $hour <= '23') || ($hour >= '00' && $hour < '08')){
		$arr["Andreevskoe"] = "green";
	}
	else if($hour >= '11' && $hour < '15' ){
		$arr["Andreevskoe"] = "yellow";
	}
	else $arr["Andreevskoe"] = "red";
}
else if($dayOfWeek == 'воскресенье'){
	if($hour == '08' || $hour == '06'){
		$arr["Andreevskoe"] = "yellow";
	}
	else if( ($hour >= '20' && $hour <= '21') || ($hour == '07') ){
		$arr["Andreevskoe"] = "red";
	}
	else $arr["Andreevskoe"] = "green";
}
else{
	echo "Undefinded error";
}

//для Мулашовского карьера
if($hour == '08' || $hour == '13'){
	$arr["Mulashevo"] = "red";
}
else if($hour == '09' || $hour == '11' || $hour == '12' || $hour == '16'){
	$arr["Mulashevo"] = "yellow";
}
else if($hour == '10' || $hour == '14' || $hour == '15' || ($hour >= '17' && $hour < '20' ) ){
	$arr["Mulashevo"] = "green";
}
else $arr["Mulashevo"] = "sleep";

echo json_encode($arr);






















?>
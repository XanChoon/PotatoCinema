<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
	$curl = curl_init();
	
	//$search_string = "anotherera2";
	//$url = "https://www.amazon.com/s/field-keywords=$search_string";
	$url = "http://fbcinema.com/";
	curl_setopt($curl,CURLOPT_URL,$url); 
	curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false); #Request HTTPS
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
	$result = curl_exec($curl);
	preg_match_all("/<a href="(.*?)"/s",$result,$matches);
	print_r($matches);
	curl_close($curl);
	?>
</body>
</html>


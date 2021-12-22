<?php 
 header("Access-Control-Allow-Origin: *");
  $curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://6cb2bbc9414ed837d085f0c5ac809700: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@winesubscribe12.myshopify.com/admin/api/2021-10/products.json",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	//CURLOPT_POSTFIELDS => "shopName=%3Ewinesubscribe12%3E&accessToken=%3E6cb2bbc9414ed837d085f0c5ac809700%3E",
	CURLOPT_HTTPHEADER => [
		"content-type: application/x-www-form-urlencoded",
		"x-rapidapi-host: https://winesubscribe12.myshopify.com/admin/api/2021-10/products.json",
		"x-rapidapi-key: 6cb2bbc9414ed837d085f0c5ac809700"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	//echo "fdf";
	//$json_data = file_get_contents($response);
	$txet=json_decode($response,true);
	//echo $txet['products'][0]['tags'];
	//$characters = json_decode($response); 
	//echo $response;
 
	echo $txet['products'][0]['tags'];
	$i=0;
  //$car[]=array(10);
	while($i<9)
	{
		 $car[$i]=$txet['products'][$i]['tags'];
		//echo "<br>";
		$i++;
	}
	 
	}
  $fek=$car;
?>
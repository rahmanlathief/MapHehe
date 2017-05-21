<?php
	// $url = "http://api.tvmaze.com/schedule";
	// $json = file_get_contents($url);
	// $val = json_decode($json, TRUE);

	// for($i = 0; $i < count($val); $i++){
	// 	echo $val[$i]['airdate']." ".$val[$i]['airtime']." ".$val[$i]['show']['name']." - ".$val[$i]['name']."<br>";
	// }

	$url = "https://maps.googleapis.com/maps/api/place/radarsearch/json?location=51.503186,-0.126446&radius=5000&type=museum&key=AIzaSyCeGwonPtpsfFugeAhRZaiSCw6VnqFXpk8";
	$json = file_get_contents($url);
	$val = json_decode($json, TRUE);
	$last = count($val['results']);
	for($i = 0; $i < $last-1; $i++){
		foreach ( $val['results'][$i]['geometry'] as $value ) {
			echo ("['".$val['results'][$i]['id']."',".$value['lat'].",".$value['lng'].'],<br />');
		}
	}
	echo ("[".$val['results'][$last-1]['id'].",".$val['results'][$last-1]['geometry']['location']['lat'].",".$val['results'][$last-1]['geometry']['location']['lng'].']');
?>
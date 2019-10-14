<?php
include_once('./_common.php');
include_once('./_head.php');

function getpoint2($data,$start_str,$end_str)
{
	$i=0;
	while(is_int($pos = strpos($data, $start_str, $i))) { 
		$pos += strlen($start_str); 
		$endpos = strpos($data,$end_str, $pos); 
		$value = substr($data, $pos, $endpos-$pos);
		$value_array[] = $value;
		$i = $endpos;
	}
	return $value_array;
}

function get_latlng($address){
	$list_arr = null;
	$url = "http://maps.googleapis.com/maps/api/geocode/xml?address=".$address;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_FAILONERROR, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 100);

	$html = curl_exec($ch);

  $lat = getpoint2($html,"<lat>","</lat>");
  $lng = getpoint2($html,"<lng>","</lng>");

	$list_arr[0] = $lat[0];
	$list_arr[1] = $lng[0];
	return $list_arr;
 }

$address1 = "인천 남동구 백범로 376";
 if($address1 != "") {
	$addr = str_replace(" ","",$address1.$address2);
	$addr_arr = get_latlng($addr);
	$addr_lat = $addr_arr[0];
	$addr_lng = $addr_arr[1];
}
?>
    
                  
                  <div class="map" id="map_canvas"></div>
                  <div class="address mt20 row">
                    <div class="col_xs_10 col_sm_4 mt10">
                    <i class="fa fa-map-marker"></i> <span>주소 : 인천 남동구 백범로 376 (간석동, 도시타워) 6층</span> 
                    </div>
                    <div class="col_xs_10 col_sm_6 mt10">
                    <i class="fa fa-phone"></i> <span>070-4735-6470</span>
                    </div>
                  </div>
                  
                   
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXYX4_ZhGtNy_8EMqDInkp34SqTP3Kw08&sensor=true&language=kr"></script>
<script>
	function initialize() {
		// 서울
		var mapOptions = {
			scaleControl: true,
			center: new google.maps.LatLng(<?=$addr_lat?>, <?=$addr_lng?>),
			zoom: 16
		};
	
		var map = new google.maps.Map(document.getElementById('map_canvas'),
				mapOptions);
	
		var marker = new google.maps.Marker({
			map: map,
			position: map.getCenter()
		});
	}
	
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php
include_once('./_tail.php');
?>
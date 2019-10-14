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

$address1 = "전북 전주시 완산구 아중로 33, 전주정보문화산업진흥원 미디어센터 308호";
 if($address1 != "") {
	$addr = str_replace(" ","",$address1.$address2);
	$addr_arr = get_latlng($addr);
	$addr_lat = $addr_arr[0];
	$addr_lng = $addr_arr[1];
}
?>
    
    <style>
    	#headerimg{
    		display:none;
    	}
    </style>
                  
    <div class="about_us">



    	<!-- 회사소개 코드 삽입부분 -->
    	<!-- 회사소개 코드 삽입부분 -->
    	<!-- 회사소개 코드 삽입부분 -->
    	<!-- 회사소개 코드 삽입부분 -->
    	<!-- 회사소개 코드 삽입부분 -->



    </div>


    	<!-- 기존코드 참고하세요 -->
		<!--  <div class="about_us">
	        
	        <div class="about">
	          <h3>사람은 실수를 하지만 아이박스는 실수하지 않습니다!</h3>
	          <p>
	          저희 (유)누누는 어린이 하차 확인 장치를 만드는 제조기업입니다.<br />
			  국내에서 뿐만 아니라 전 세계에서 지속적으로 발생하는 차량 내 아이 갇힘 사고를 예방하기 위해 <br />
			  동작감지를 통해 아이를 구조할 수 있는 아이박스를 개발하였습니다.</p>
	        </div>
	      </div>
	       
	      <div class="map mt50" id="map_canvas"></div>
	      <div class="address mt20 row">
	        <div class="col_xs_10 col_sm_4 mt10">
	        <i class="fa fa-map-marker"></i> <span>주소 : 전북 전주시 완산구 아중로 33, 전주정보문화산업진흥원 미디어센터 308호 </span> 
	        </div>
	        <div class="col_xs_10 col_sm_6 mt10">
	        <i class="fa fa-phone"></i> <span>070-5173-6002</span>
	        </div>
	      </div> -->
                  

<script src="https://goo.gl/maps/CPrKJwG88WrsjA7W7"></script>
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
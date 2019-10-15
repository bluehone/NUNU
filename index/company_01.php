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


	<!-- <div><img src="..\img\company_01.jpg" alt="" style="max-width: 1600px; height: auto;"></div>		리뉴얼작업 이미지 -->

	<!-- 기존코드 참고하세요 -->
		 	        
	        <div>
	          <h3 class="mt20" style="font-weight:700; font-size:2em">‘누누’는 차량에 남겨진 아이를 구하는 일을 합니다. </h3>
	          <p class="mt20" style="font-weight:400; font-size:1.2em">
	          	저희 (유)누누는 어린이 하차 확인 장치를 만드는 제조기업입니다.<br> 
				국내에서 뿐만 아니라 전 세계에서 지속적으로 발생하는 차량 내 아이 갇힘 사고를 예방하기 위해<br>
				동작감지를 통해 아이를 구조할 수 있는 ‘아이박스’를 개발하였습니다.<br><br> 
				언제나 교통약자를 위한 최고의 안전시스템 개발을 목적으로 사고예방을 위해 노력하는 기업으로써,<br> 
				운전자의 실수로 차량에 방치된 아이를 즉각적으로 구조할 수 있도록 어린이 안전사고 예방을 위한<br> 
				제품을 만들기 위해 노력하겠습니다.</p>
	        </div>

		  
		<div class="mt20">
			<h3 style="font-weight:700; font-size:2em">오시는길</h3>			
		</div>
		<div class="mt20">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12940.132072534412!2d127.1536944!3d35.8236656!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x83c13d4a02748769!2z7KCE7KO87KCV67O066y47ZmU7IKw7JeF7KeE7Z2l7JuQ!5e0!3m2!1sko!2skr!4v1571041202724!5m2!1sko!2skr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>

	      <div class="address row">
	        <div class="col_xs_10 col_sm_4 mt10">
	        <i class="fa fa-map-marker"></i> <span>주소 : 전북 전주시 완산구 아중로 33, 전주정보문화진흥원 미디어센터 308호</span> 
	        </div>
	        <div class="col_xs_10 col_sm_6 mt10">
	        <i class="fa fa-phone"></i> <span>070-5173-6002</span>
	        </div>
		  </div>
		  

                  

<!-- <script src="https://goo.gl/maps/CPrKJwG88WrsjA7W7"></script>
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
</script> -->
      
<?php
include_once('./_tail.php');
?>
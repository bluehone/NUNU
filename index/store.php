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
    
      <div class="store main_section">
        <ul class="tab_menu">
          <li data-tab="1" class="on">서울</li>
          <li data-tab="2">인천/경기</li>
          <li data-tab="3">강원도</li>
          <li data-tab="4">충청도</li>
        </ul>
        
        <div class="store_info tabview">
          <?php for($i=1; $i<=1; $i++) { ?>
          <div class="row mt50">
            <div class="col_xs_10 col_sm_5">
              <h3 class="store_name">서울 강남점</h3>
              <table class="basic_table">
                <colgroup>
                  <col width="35%" />
                  <col width="" />
                </colgroup>
                <tbody>
                  <tr>
                    <th>대표번호</th>
                    <td>1600-4735</td>
                  </tr>
                  <tr>
                    <th>직통번호</th>
                    <td>010-4735-4735</td>
                  </tr>
                  <tr>
                    <th>사업자</th>
                    <td>홍길동</td>
                  </tr>
                  <tr>
                    <th>사업자등록번호</th>
                    <td>000-00-00000</td>
                  </tr>
                  <tr>
                    <th>대부업등록번호</th>
                    <td>2016-인천남동구-0001</td>
                  </tr>
                  <tr>
                    <th>카카오톡 상담ID</th>
                    <td>blueiloan</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col_xs_10 col_sm_5 pr30">
              <div class="row mt40">
                <div class="col_xs_10 col_sm_3 mb30 text_center"><img src="<?php echo G5_THEME_URL?>/index/images/store1.jpg" /></div>
                <div class="col_xs_10 col_sm_3 mb30 text_center"><img src="<?php echo G5_THEME_URL?>/index/images/store2.jpg" /></div>
                <div class="col_xs_10 col_sm_3 mb30 text_center"><img src="<?php echo G5_THEME_URL?>/index/images/store3.jpg" /></div>
                <div class="col_xs_10 col_sm_3 mb30 text_center"><img src="<?php echo G5_THEME_URL?>/index/images/store4.jpg" /></div>
                <div class="col_xs_10 col_sm_3 mb30 text_center"><img src="<?php echo G5_THEME_URL?>/index/images/store3.jpg" /></div>
                <div class="col_xs_10 col_sm_3 mb30 text_center"><img src="<?php echo G5_THEME_URL?>/index/images/store4.jpg" /></div>
              </div>
            </div>
          </div>
          
          <div class="map mt20" id="map_canvas"></div>
          <div class="address mt20 row">
            <div class="col_xs_10 col_sm_4 mt10">
            <i class="fa fa-map-marker"></i> <span>주소 : 서울 중구 세종대로 110 </span> 
            </div>
            <div class="col_xs_10 col_sm_6 mt10">
            <i class="fa fa-phone"></i> <span>070-000-0000</span>
            </div>
          </div>
          <?php } ?>
          
        </div><!-- store_info end -->
        
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
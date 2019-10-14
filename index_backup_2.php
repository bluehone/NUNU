<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

/*
if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}*/


include_once(G5_THEME_PATH.'/head.php');
?>

<style>
  #headerimg{
    display:block !important;
  }
</style>

<!-- visual_section end -->
      
      
      <!-- <div class="store_panel">
        <div class="container">
          <div class="row">
            <div class="col_xs_10 col_sm_8">
              <h3>전국영업점 안내</h3>
              <p>컴퍼니전당포 파트너는 가까운곳에 있습니다. 전화 한통으로 신혹하게 서비스를 이용하실 수 있습니다.</p>
            </div>
            <div class="col_xs_10 col_sm_2 text_right"><a href="">전국영업점보기</a></div>
          </div>
        </div>
      </div> -->

      <!-- 영역 2 :: 이미지 슬라이더  -->
      <div id="slider_section" class="pt30 pb30 bg-white">
        <!-- <div class="container"> -->
          <!-- <div class="row"> -->
            <!-- 영역 2 - 1 슬라이더1  :: 이미지 사이즈 : 1140 x 400(픽셀)  -->

            <div class="swiper-container mb30">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="<?php echo G5_THEME_IMG_URL?>/slider1.jpg" width="100%" >
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo G5_THEME_IMG_URL?>/slider1.jpg" width="100%" >
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo G5_THEME_IMG_URL?>/slider1.jpg" width="100%" >
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo G5_THEME_IMG_URL?>/slider1.jpg" width="100%" >
                </div>
              </div>
                <!-- Add Arrows -->
              <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
              <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
            </div>


            <!-- 영역 2 - 2 슬라이더2  :: 이미지 사이즈 : 1140 x 400(픽셀)  -->
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="<?php echo G5_THEME_IMG_URL?>/slider2.jpg" width="100%" >
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo G5_THEME_IMG_URL?>/slider2.jpg" width="100%" >
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo G5_THEME_IMG_URL?>/slider2.jpg" width="100%" >
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo G5_THEME_IMG_URL?>/slider2.jpg" width="100%" >
                </div>
              </div>

              <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
              <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
            </div>
          <!-- </div> -->
        <!-- </div> -->
      </div>
    </div>
    <style>
      #ourobject_section{
        position:relative;
      }
      #ourobject_section:after{
        content: "";
        display:block;
        position: absolute;
            width: 100%;
    height: 100%;
    top: 0;
    left: 0;
         background-image: url('http://webnunure.bluef.kr/theme/f067/img/section3.jpg'); 
         /*background-attachment: fixed;*/
         opacity: 0.5;
         z-index: -1;
      }
    </style>
    <div id="ourobject_section" >
      <div class="container">
      <!-- 영역 3 :: 우리의 목표는 ~  -->
        <img src="<?php echo G5_THEME_IMG_URL?>/section3.jpg" width="100%" >
      </div>


    </div>

      <!-- 영역 4 :: 푸터  -->
      <div id="footer" class="container pt20">
        <div id="footer-info" clas="row ">
          <div id="f1" class="col_xs_10 col_sm_3">
            <h1 class="text-center mt10 mb10">온라인 문의</h1>
            <form name="req_form_m" id="req_form_m" method="post">
              <input type="hidden" name="bo_table" id="bo_table" value="online">
                <div class="quick_panel">
                  <div class="quick_form">
                    <div class="clearfix">
                      <div class="quick_left">
                        <div class="form_group">
                          <!-- <label>성함</label> -->
                          <input type="text" name="wr_subject" id="wr_subject" class="form_box" placeholder="성함" />
                        </div>
                        <div class="form_group">
                          <!-- <label>연락처</label> -->
                          <input type="text" name="wr_1" id="wr_1"  class="form_box" placeholder="연락처" maxlength="13" />
                        </div>

                        <div class="form_group agree">
                          <input type="checkbox" name="agree" value="Y"/> 개인정보취급방침 동의  
                        </div>
                        <div class="form_group">
                          <input type="hidden" name="wr_3" id="wr_3"  class="form_box"  value="" placeholder="#" />
                        </div>
                      </div>
                      <div class="quick_right">
                        <div class="form_group pl20">
                          <!-- <label>문의내용</label> -->
                          <textarea class="form_box" rows="5"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form_group text_center">
                      <a href="" class="push sm_ubmit_btn">문의하기</a>
                    </div>
                  </div>
                </div>

            </form>
          </div>

          <div id="f2" class="col_xs_10 col_sm_3 text-center m-auto pb30" >
            <h1 class="text-center mt10 mb20">오시는 길</h1>
            <img class="m-auto text-center" src="<?php echo G5_THEME_IMG_URL?>/map.png" width="70%" >

              <h4 class="mt10">전북 전주시 완산구 이중로 33,</h4>
              <h4>전주정보문화진흥원 멀티미디어센터 308호</h4>
          </div>

          <div id="f3" class="col_xs_10 col_sm_3 text-center" >
            <h1 class="text-center mt10 mb10">고객센터</h1>
            <h1 class="text-center mt20 mb10" style="color:#5765c8">070-5173-6002</h1>
            <h2 class="text-center mt20 mb10">상담시간 : 10:00 ~  17:00</h2>
            <h2 class="text-center mt20 mb30">주말 및 공휴일 휴무</h2>
            <img class="m-auto text-center mt40" src="<?php echo G5_THEME_IMG_URL?>/kakao.jpg" width="40%" >


            
          </div>
        </div>
      </div>

      <div id="footer-location" class="container pt20 pb30">
        <h1 class="text-center mt10 mb20">오시는 길</h1>
          <!-- * 카카오맵 - 지도퍼가기 -->
        <!-- 1. 지도 노드 -->
        <div id="daumRoughmapContainer1570228835441" class="root_daum_roughmap root_daum_roughmap_landing" style="width:80%; margin:0 auto;"></div>

        <!--
          2. 설치 스크립트
          * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
        -->
        <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

        <!-- 3. 실행 스크립트 -->
        <script charset="UTF-8">
          new daum.roughmap.Lander({
            "timestamp" : "1570228835441",
            "key" : "vayv",
            "mapWidth" : "100%",
            "mapHeight" : "360"
          }).render();
        </script>
      </div>

      



      <div class="content_section mt50 mb50" hidden>
        <div class="service_panel">
          <div class="container">
            <h3 class="title">제품소개</h3>
            <div class="row mt30">
              
              <div class="col_xs_10 col_sm_5 mt30 service" data-service="1">
                <div class="service_head service1"></div>
                <div class="service_body">
                <img src="..\index\images\Control Box.jpg" width="250" height="250" alt="">
                  <h4>주장치</h4>
                  <p>차량과 직접 연결되어 운전자석에 설치<br> 감지 데이터를 서버와 송수신하며, 차량제어 담당</p>
                  <a href="">More Info &gt;</a>
                </div>
              </div>
              <div class="col_xs_10 col_sm_5 mt30 service" data-service="2">
                <div class="service_head service2"></div>
                <img src="index/images/Control Box.jpg" alt="감지기">
                <div class="service_body">
                  <h4>감지기</h4>
                  <p>차량 내 좌석 상부에 동작 감지 센서를 사용하여 <br>확인이 가능하도록 설계되어 있습니다.</p>
                  <a href="">More Info &gt;</a>
                </div>
              </div>
            </div>
          </div>
        </div>


      <div class="content_section mt50 mb50">
        <div class="service_panel">
          <div class="container">
            <h3 class="title">IOT 서비스</h3>
            <div class="row mt30">
              <div class="col_xs_10 col_sm_5 mt30 service" data-service="3">
                <div class="service_head service3"></div>
                <div class="service_body">
                  <h4>실시간 차량정보 확인</h4>
                  <p>서버를 통해 실시간 차량 위치, 감지기 작동 여부, <br>감지기 고장 확인 등을 확인 할 수 있으며, <br>설정을 통해 유사시 경찰서, 소방서 등으로 구조요청을 할 수 있습니다.</p>
                  <a href="">More Info &gt;</a>
                </div>
              </div>
              <div class="col_xs_10 col_sm_5 mt30 service" data-service="4">
                <div class="service_head service4"></div>
                <div class="service_body">
                  <h4>모바일 연결</h4>
                  <p>차량 내 아이가 방치되면 실시간으로 어플을 통해 알려줍니다.<br>
                    운전기사, 선생님, 학부모 등 실시간으로 정보를 제공하여 구조를 요청할수 있습니다.</p>
                  <a href="">More Info &gt;</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        
        <!-- <div class="banner_panel">
          <div class="container">
            <h3 class="title">전당대출 품목안내</h3>
            <div class="clearfix">
              <div class="banner type1 pointer" onclick="location.href='<?php echo G5_THEME_URL?>/index/loan_01.php'">
                <h3>명품브랜드</h3>
                <p>가방, 시계, 구두 등 국내에 유통되는 모든 명품제품</p>
              </div>
              <div class="banner type2 pointer" onclick="location.href='<?php echo G5_THEME_URL?>/index/loan_02.php'">
                <h3>귀금속</h3>
                <p>금, 다이아몬드, 루비, 사파이어 등 모든 귀금속</p>
              </div>
              <div class="banner type3 pointer" onclick="location.href='<?php echo G5_THEME_URL?>/index/loan_03.php'">
                <h3>바이크&amp;자동차</h3>
                <p>중고거래가 되는 수입바이크 및 중형이상의 자동차</p>
              </div>
              <div class="banner type4 pointer" onclick="location.href='<?php echo G5_THEME_URL?>/index/loan_04.php'">
                <h3>IT 디지털기기</h3>
                <p>카메라,노트북,태블릿,스마트폰 등 모든 고급 디지털기기</p>
              </div>
              <div class="banner type5 pointer" onclick="location.href='<?php echo G5_THEME_URL?>/index/loan_01.php'">
                <h3>부동산</h3>
                <p>아파트,빌라,다가구주택,오피스텔,토지 등 부동산 담보대출</p>
              </div>
              <div class="banner type6 pointer" onclick="location.href='<?php echo G5_THEME_URL?>/index/loan_02.php'">
                <h3>기타품목</h3>
                <p>골프,수집품,악기 등 국내외 유통되는 모든 품목</p>
              </div>
            </div>
          </div>
        </div> -->
        
        <div class="cs_panel">
          <div class="container text_center">
            <h3 class="title">고객센터</h3>
            <h1>070-5173-6002</h1>
            <p>평일 오전10시 ~ 오후 8시<br/>주말 및 공휴일 휴무</p>
          </div>
        </div>
        
        <form name="req_form_m" id="req_form_m" method="post">
		    <input type="hidden" name="bo_table" id="bo_table" value="online">
        <div class="container">
          <div class="quick_panel">
            <h3 class="title">온라인 문의</h3>
            <div class="quick_form">
              <div class="clearfix">
                <div class="quick_left">
                  <div class="form_group">
                    <label>이름</label>
                    <input type="text" name="wr_subject" id="wr_subject" class="form_box" placeholder="이름을 입력하세요" />
                  </div>
                  <div class="form_group">
                    <label>연락처</label>
                    <input type="text" name="wr_1" id="wr_1"  class="form_box" placeholder="- 포함 (010-000-0000)" maxlength="13" />
                  </div>
                  <div class="form_group">
                    <label>문의분야</label>
                    <input type="text" name="wr_3" id="wr_3"  class="form_box"  placeholder="문의분야를 입력하세요 (제품문의/제휴문의)" />
                  </div>
                </div>
                <div class="quick_right">
                  <div class="form_group pl20">
                    <label>문의내용</label>
                    <textarea class="form_box" rows="10"></textarea>
                  </div>
                </div>
              </div>
              <div class="form_group agree">
              개인정보취급방침 동의 <input type="checkbox" name="agree" value="Y"/> <a href="" class="pushbox">전문보기</a>
              </div>
              <div class="form_group text_center">
                <a href="" class="push sm_ubmit_btn">문의하기</a>
              </div>
            </div>
          </div>
        </div>
        </form>
        
      </div><!-- content_section end -->


<script language="javascript">
function autoHypenPhone(str) {
		str = str.replace(/[^0-9]/g, '');
		var tmp = '';

		if(str.substring(0,2)=="02"){
			if (str.length < 3) {
				return str;
			} else if (str.length < 6) {
				tmp += str.substr(0, 2);
				tmp += '-';
				tmp += str.substr(2);
				return tmp;
			} else if (str.length < 10) {
				tmp += str.substr(0, 2);
				tmp += '-';
				tmp += str.substr(2, 3);
				tmp += '-';
				tmp += str.substr(5);
				return tmp;
			} else {
				tmp += str.substr(0, 2);
				tmp += '-';
				tmp += str.substr(2, 4);
				tmp += '-';
				tmp += str.substr(6, 4);
				return tmp;
			}
		}else{
			if (str.length < 4) {
				return str;
			} else if (str.length < 7) {
				tmp += str.substr(0, 3);
				tmp += '-';
				tmp += str.substr(3);
				return tmp;
			} else if (str.length < 11) {
				tmp += str.substr(0, 3);
				tmp += '-';
				tmp += str.substr(3, 3);
				tmp += '-';
				tmp += str.substr(6);
				return tmp;
			} else {
				tmp += str.substr(0, 3);
				tmp += '-';
				tmp += str.substr(3, 4);
				tmp += '-';
				tmp += str.substr(7);
				return tmp;				
			}
		}

		return str;
	}

		var cellPhone = document.getElementById('wr_1');
		cellPhone.onkeyup = function (event) {
			event = event || window.event;
			var _val = this.value.trim();
			this.value = autoHypenPhone(_val);
		};


		$(function(){
			$('.sm_ubmit_btn').click(function(){		
				var f = document.req_form_m;
			
				if($("#wr_subject").val()==""){
					alert("이름을 입력하세요");
					$("#wr_subject").focus();
					return false;
				}

				if($("#wr_1").val()==""){
					alert("휴대폰 번호를 입력하세요");
					$("#wr_1").focus();
					return false;
				}				
				
				if($("#wr_3").val()==""){
					alert("문의분야를 입력하세요");
					$("#wr_3").focus();
					return false;
				}			
				
				if($(":checkbox[name='agree']:checked").val()!="Y"){
					alert("개인정보취급방침에 동의하셔야 합니다.");
					$("#agree").focus();
					return false;
				}
				
					$.ajax({
						url: "/theme/f067/index/query.php",
						type: 'POST',
						data: $("#req_form_m").serialize(),
						success: function(re){
							if(re=="Y"){
								alert("상담신청이 접수되었습니다.");
								$("#wr_subject").val("");
								$("#wr_1").val("");
								$("#wr_2").val("");
								$("#wr_3").val("");
								$(":checkbox[name='agree']").attr('checked', false);
							}
						 }
					});
			});
			
		})
</script>
<script src="https://unpkg.com/swiper/js/swiper.js"></script>
  
 <script>
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
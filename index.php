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

.slick-slide {
  text-align: center;
  color: #419be0;
  background: white;
}

.slick-next, .slick-prev{
  position: absolute;
    top: 50%;
    width: calc(var(--swiper-navigation-size)/ 44 * 27);
    height: var(--swiper-navigation-size);
    margin-top: calc(-1 * var(--swiper-navigation-size)/ 2);
    z-index: 10;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--swiper-navigation-color,var(--swiper-theme-color));
  }
  .slick-next{ right: 18px; font-size:20px; color:#1767d6;}
  .slick-prev{ left: 18px; font-size:20px; color:#1767d6;}
  </style>

<!--[if IE]>
<style>
    .slider-div { padding-top:5%; }
    #langs-li:hover{border-bottom:0px}

</style>
<![endif]--> 

      <!-- 영역 2 :: 이미지 슬라이더  -->
      <div style="background:#fff">
        <div id="slider_section" class="pt30 pb30 bg-white">
          <section class="regular slider">
            <div class='container'>
              <div class='single-item'>
                <div class="swiper-slide" style="padding-left:15px; padding-right:15px;">
                  <div id="f1" class="slider-div col_xs_10 col_sm_5">
                    <img src="<?php echo G5_THEME_IMG_URL?>/maindev.jpg" width="60%" style="margin:0 auto;">
                  </div>
                  <div id="f1" class="slider-div col_xs_10 col_sm_5">
                    <h1 class="text-center mt10 mb10" >아이박스</h1>
                    <h2 class="text-center mt10 mb10" >주장치</h2>
                    <h4 class="text-center mt10 mb10">차량과 직접 연결되어 운전자석에 설치 감지데이터를 서버와 송수신하며, 차량제어 담당</h4>
                    
                  </div>
                </div>

                <div class="swiper-slide" style="padding-left:15px; padding-right:15px;">
                  <div id="f1" class="slider-div col_xs_10 col_sm_5">
                    <img src="<?php echo G5_THEME_IMG_URL?>/maindev.jpg" width="60%" style="margin:0 auto;" >
                  </div>
                  <div id="f1" class="slider-div col_xs_10 col_sm_5">
                    <h1 class="text-center mt10 mb10" >아이박스</h1>
                    <h2 class="text-center mt10 mb10" >주장치</h2>
                    <h4 class="text-center mt10 mb10">차량과 직접 연결되어 운전자석에 설치 감지데이터를 서버와 송수신하며, 차량제어 담당</h4>
                    
                  </div>
                </div>

                <div class="swiper-slide" style="padding-left:15px; padding-right:15px;">
                  <div id="f1" class="slider-div col_xs_10 col_sm_5">
                    <img src="<?php echo G5_THEME_IMG_URL?>/maindev.jpg" width="60%" style="margin:0 auto;" >
                  </div>
                  <div id="f1" class="slider-div col_xs_10 col_sm_5">
                    <h1 class="text-center mt10 mb10" >아이박스</h1>
                    <h2 class="text-center mt10 mb10" >주장치</h2>
                    <h4 class="text-center mt10 mb10">차량과 직접 연결되어 운전자석에 설치 감지데이터를 서버와 송수신하며, 차량제어 담당</h4>
                    
                  </div>
                </div>


                
              </div>
            </div>

          </section>
          <br>
          <br>
          <br>
          <br>

           <section class="regular slider">
            <div class='container'>
              <div class='single-item'>

                 <div class="swiper-slide" style="padding-left:15px; padding-right:15px;">
                    <div id="f1" class="slider-div col_xs_10 col_sm_5">
                      <h1 class="text-center mt10 mb10" >어플연동</h1>
                      <h2 class="text-center mt10 mb10" >IoT로 더 안전하게!</h2>
                      <h4 class="text-center mt10 mb10">차량 내 아이가 방치되면 실시간으로 어플을 통해 알려줍니다. 운전기사, 선생님, 학부모 등 실시간으로 정보를 제공하여 구조를 요청할 수 있습니다. </h4>
                    </div>
                     <div id="f1" class="slider-div col_xs_10 col_sm_5">
                      <img src="<?php echo G5_THEME_IMG_URL?>/apps.jpg" width="30%" style="margin:0 auto;" >
                    </div>
                  </div>



                  <div class="swiper-slide" style="padding-left:15px; padding-right:15px;">
                    <div id="f1" class="slider-div col_xs_10 col_sm_5">
                      <h1 class="text-center mt10 mb10" >어플연동</h1>
                      <h2 class="text-center mt10 mb10" >IoT로 더 안전하게!</h2>
                      <h4 class="text-center mt10 mb10">차량 내 아이가 방치되면 실시간으로 어플을 통해 알려줍니다. 운전기사, 선생님, 학부모 등 실시간으로 정보를 제공하여 구조를 요청할 수 있습니다. </h4>
                    </div>
                     <div id="f1" class="slider-div col_xs_10 col_sm_5">
                      <img src="<?php echo G5_THEME_IMG_URL?>/apps.jpg" width="30%" style="margin:0 auto;" >
                    </div>
                  </div>



                  <div class="swiper-slide" style="padding-left:15px; padding-right:15px;">
                    <div id="f1" class="slider-div col_xs_10 col_sm_5">
                      <h1 class="text-center mt10 mb10" >어플연동</h1>
                      <h2 class="text-center mt10 mb10" >IoT로 더 안전하게!</h2>
                      <h4 class="text-center mt10 mb10">차량 내 아이가 방치되면 실시간으로 어플을 통해 알려줍니다. 운전기사, 선생님, 학부모 등 실시간으로 정보를 제공하여 구조를 요청할 수 있습니다. </h4>
                    </div>
                     <div id="f1" class="slider-div col_xs_10 col_sm_5">
                      <img src="<?php echo G5_THEME_IMG_URL?>/apps.jpg" width="30%" style="margin:0 auto;" >
                    </div>
                  </div>

                
              </div>
            </div>

          </section>
          

             <div hidden>
              <!-- 영역 2 - 1 슬라이더1  :: -->
              <div class="swiper-container your-class mb30">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div id="f1" class="col_xs_10 col_sm_4">
                      <img src="<?php echo G5_THEME_IMG_URL?>/maindev.jpg" width="60%" >
                    </div>
                    <div id="f1" class="col_xs_10 col_sm_4">
                      <h1 class="text-center mt10 mb10" >아이박스</h1>
                      <h2 class="text-center mt10 mb10" >주장치</h2>
                      <h4 class="text-center mt10 mb10">차량과 직접 연결되어 운전자석에 설치 감지데이터를 서버와 송수신하며, 차량제어 담당</h4>
                      
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div id="f1" class="col_xs_10 col_sm_4">
                      <img src="<?php echo G5_THEME_IMG_URL?>/maindev.jpg" width="60%" >
                    </div>
                    <div id="f1" class="col_xs_10 col_sm_4">
                      <h1 class="text-center mt10 mb10" >아이박스</h1>
                      <h2 class="text-center mt10 mb10" >주장치</h2>
                      <h4 class="text-center mt10 mb10">차량과 직접 연결되어 운전자석에 설치 감지데이터를 서버와 송수신하며, 차량제어 담당</h4>
                      
                    </div>
                  </div>
                </div>
                  <!-- Add Arrows -->
                <div id="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
                <div id="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
              </div>


              <!-- 영역 2 - 2 슬라이더2  ::   -->
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div id="f1" class="col_xs_10 col_sm_4">
                      <h1 class="text-center mt10 mb10" >어플연동</h1>
                      <h2 class="text-center mt10 mb10" >IoT로 더 안전하게!</h2>
                      <h4 class="text-center mt10 mb10">차량 내 아이가 방치되면 실시간으로 어플을 통해 알려줍니다. 운전기사, 선생님, 학부모 등 실시간으로 정보를 제공하여 구조를 요청할 수 있습니다. </h4>
                    </div>
                     <div id="f1" class="col_xs_10 col_sm_4">
                      <img src="<?php echo G5_THEME_IMG_URL?>/apps.jpg" width="40%" >
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div id="f1" class="col_xs_10 col_sm_4">
                      <h1 class="text-center mt10 mb10" >어플연동</h1>
                      <h2 class="text-center mt10 mb10" >IoT로 더 안전하게!</h2>
                      <h4 class="text-center mt10 mb10">차량 내 아이가 방치되면 실시간으로 어플을 통해 알려줍니다. 운전기사, 선생님, 학부모 등 실시간으로 정보를 제공하여 구조를 요청할 수 있습니다. </h4>
                    </div>
                     <div id="f1" class="col_xs_10 col_sm_4">
                      <img src="<?php echo G5_THEME_IMG_URL?>/apps.jpg" width="40%" >
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div id="f1" class="col_xs_10 col_sm_4">
                      <h1 class="text-center mt10 mb10" >어플연동</h1>
                      <h2 class="text-center mt10 mb10" >IoT로 더 안전하게!</h2>
                      <h4 class="text-center mt10 mb10">차량 내 아이가 방치되면 실시간으로 어플을 통해 알려줍니다. 운전기사, 선생님, 학부모 등 실시간으로 정보를 제공하여 구조를 요청할 수 있습니다. </h4>
                    </div>
                     <div id="f1" class="col_xs_10 col_sm_4">
                      <img src="<?php echo G5_THEME_IMG_URL?>/apps.jpg" width="40%" >
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div id="f1" class="col_xs_10 col_sm_4">
                      <h1 class="text-center mt10 mb10" >어플연동</h1>
                      <h2 class="text-center mt10 mb10" >IoT로 더 안전하게!</h2>
                      <h4 class="text-center mt10 mb10">차량 내 아이가 방치되면 실시간으로 어플을 통해 알려줍니다. 운전기사, 선생님, 학부모 등 실시간으로 정보를 제공하여 구조를 요청할 수 있습니다. </h4>
                    </div>
                     <div id="f1" class="col_xs_10 col_sm_4">
                      <img src="<?php echo G5_THEME_IMG_URL?>/apps.jpg" width="40%" >
                    </div>
                  </div>
                </div>

                <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
                <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
              </div>
            </div>


        </div>
      </div>
    </div>
   
    <style>
      .ourobject_pc {
        padding-top: 70px; padding-bottom:70px;
        border-top: 3px solid #fff;
        border-bottom: 3px solid #fff;
      }
      .ourobject_mobile{
        display:none;
        padding-top:30px; padding-bottom:30px;
      }
      .ourobject_bg{
        min-height: 400px;
      }

      #ourobject_section .container{
        
      }


      @media (max-width:473px){

        #ourobject_section{
         
        }

        .ourobject_mobile{
          display:block;
          border-top: 3px solid #fff;
          border-bottom: 3px solid #fff;
          margin-bottom:30px;
        }
        .ourobject_pc{
          display: none;
        }
        .outobject_mobile h1{
          font-size:0.5rem !important;
        }
        .ourobject_bg{
          background-repeat: no-repeat !important;
          background-size: cover !important;
          max-height:170px;
          min-height:150px;
        }
      }

    </style>
    <div id="ourobject_section">
      <div class="container mt30 mb30" >
      <!-- 영역 3 :: 우리의 목표는 ~  -->
        <div class="row ourobject_bg" style="background:url('<?php echo G5_THEME_IMG_URL?>/section3_without_text.jpg')">
          <div class="col_xs_3 pt70 pb70 text-center">
          </div>
          <div class="col_xs_3 ourobject_pc text-center " style="background:#0000005c; margin-top:7%">
            <h1 class="text-white"> 우리의 목표는 <br><br>아이들의 안전한 세상입니다</h1>
          </div>

          <div class="col_xs_3 ourobject_mobile text-center " style="background:#0000005c; margin-top:7%">
            <h6 class="text-white"> 우리의 목표는 <br><br>아이들의 안전한 세상입니다</h6>
          </div>

          <div class="col_xs_3 pt70 pb70 text-center">
          </div>

          <!-- <img src="<?php echo G5_THEME_IMG_URL?>/section3.jpg" width="100%"> -->
        </div>
      </div>


    </div>

      <!-- 영역 4 :: 푸터  -->
      <div id="footer" class="mt30">
        <div class="container pt20">
          <div id="footer-info" clas="row ">
            <h1 class="text-center mt10 mb20 text-white">온라인 문의</h1>

            <div id="f1" class="col_xs_10 col_sm_7">
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
                          <div class="form_group">
                            <!-- <label>이메일</label> -->
                            <input type="text" name="wr_2" id="wr_2"  class="form_box" placeholder="이메일" maxlength="13" />
                          </div>

                          <div class="form_group">
                            <input type="hidden" name="wr_3" id="wr_3"  class="form_box"  value="" placeholder="#" />
                          </div>
                        </div>
                        <div class="quick_right">
                          <div class="form_group pl20">
                            <!-- <label>문의내용</label> -->
                            <textarea class="form_box" rows="7" placeholder="문의내용"></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="form_group agree text-white text-center mb20" style="margin-bottom:20px !important">
                        <input type="checkbox" name="agree" value="Y"/> 개인정보 수집 및 이용에 동의합니다  
                      </div>
                      <div class="form_group text_center">
                        <a href="" class="push sm_ubmit_btn" style="background:#fec64d; font-color:black;">문의하기</a>
                      </div>
                    </div>
                  </div>

              </form>
            </div>
            <div id="f2" class="col_xs_10 col_sm_2 text-center mb20" >
              <div style="background:#000000a6; padding-top:15px; padding-bottom:15px;">
                <h2 class="text-center mt10 mb10" style="color:#fec64d; margin-bottom:10px">고객센터</h2>
                <div style=" margin-left:5px; margin-right:5px; padding-right:30px; padding-left:40px">
                  <h3 class="text-center mt10 mb10 text-white callcenter-text" >Tel : 070-5173-6002</h3>
                  <h3 class="text-center mt10 mb10 text-white callcenter-text" >Fax : 070-5173-6008</h3>
                  <h3 class="text-center mt10 mb10 text-white callcenter-text" >상담 : 10:00 ~ 17:00</h3>
                  <h3 class="text-center mt10 mb10 text-white callcenter-text" >주말 및 공휴일 휴무</h3>
                </div>
                <img class="m-auto text-center mt40" src="<?php echo G5_THEME_IMG_URL?>/kakao.jpg" width="40%" >
              </div>

              
            </div>
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
}


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
				
				// if($("#wr_3").val()==""){
				// 	alert("문의분야를 입력하세요");
				// 	$("#wr_3").focus();
				// 	return false;
				// }			
				
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
<!-- <script src="https://unpkg.com/swiper/js/swiper.js"></script> -->
<script src="http://divtagtutorials.com/wp-content/uploads/2014/03/idangerous.swiper-2.1.min_.js"></script>
  
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
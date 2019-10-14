<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

/*
if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}*/

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_THEME_PATH.'/index/include/site_config.php');

include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<div id="wrapper">

  <!--========================================================
                            HEADER
  =========================================================-->
    <style>
      html, body {
      position: relative;
      height: 100%;
    }
    body {
      background: #fff;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      height: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
    .swiper-button-next, .swiper-container-rtl .swiper-button-prev{ right:23px; font-size: 23px;}
    .swiper-button-prev, .swiper-container-rtl .swiper-button-next{ left:23px;}
    .swiper-button-prev{font-size: 23px; }
    .bg-white{ background:#fff; }
    .text-center{ text-align: center; }
    .quick-panel{ margin-top: 30px; }
    .quick_panel{ margin-top: 30px !important; }

    .quick_form .agree{
      border: unset;
      margin:unset;
      padding:unset;
    }
    .quick_panel .push{ background: #0b540a }
    .m-auto{ margin:0 auto; }
    .wrap_controllers{display: none; }

     /* #f1, #f2{
        border-right: 0.7px solid #a2a1a1;
      }*/
      #footer-info{ height:310px; }

    @media (max-width:478px){
      #f1, #f2{ border-right: unset; }
    }
      .navigation{ background: #fff ; }
      .nav{ /*margin-right:19%;*/ }
      .top_banner{ background: #fff; }
      .top_banner span{ padding: unset; }
      .top-box-l{
        padding: 5px;
        padding-right: 9px !important;
        padding-left: 9px;
        border-radius: 5px 0 0 5px;
        font-weight: 200;
        font-size: 15px;
        margin-right:-5px;
        border-left: 1px solid #3e3e3e;
        border-top: 1px solid #3e3e3e;
        border-bottom: 1px solid #3e3e3e;
      }
      .top-box-r{
        padding: 5px;
        padding-right: 9px;
        padding-left: 9px;
        border-radius: 0 5px 5px 0;
        font-weight: 200;
        font-size: 15px;
        background: #fff;
        color:black;
        border-right: 1px solid #3e3e3e;
        border-top: 1px solid #3e3e3e;
        border-bottom: 1px solid #3e3e3e;
      }
      .tb-selected{
        background: #1061cc;
        color: #fff;
      }
      .dropdown > ul > li {
        display: inline-block;
        position: relative;
      }
      .dropdown > ul > li > ul {
        position: absolute;
        list-style-type: none;
        padding-left: 0px;
        display: none;
      }

      .dropdown > ul > #dn2:hover > .sub_menu2{
        display: block;
        z-index: 5000;
        background: #000000bf;
        background: rgba(0, 0, 0, 0.7490196078431373);
        top:104px;
      }

      .sub_menu2_1{
        margin:0 auto; 
        width: 80%; 
        height:50%;
        text-align:center;
        margin-left:13px; 
        border-bottom:1px solid #fff; 
        border-bottom-width:50%;
      }
      .sub_menu2_2{
         margin:0 auto; 
        height:50%;
         width: 80%; 
         text-align: center;
         margin-left:13px; 
         border-bottom:1px solid #fff;  
         border-width:50%
      }
      .sub_menu2_3{
         margin:0 auto; 
        height:50%;
         width: 100%;
         text-align: center;
      }
      @media (max-width:993px){
        #f1, #f2{ border-right: unset; }
        .sub_menu2_1, .sub_menu2_2, .sub_menu2_3{ margin-left:unset; text-align: left;}
        .cs_tel{ display:none;}
        .main{ margin-top:20px;}
      }
      .rd-mobilepanel_title{ display: none; }
      li a:hover{ color : #fec64d; }
      li:hover{border-bottom:4px solid #fec64d; box-sizing : border-box;}
      /*#langs-li:hover{border-bottom:unset; box-sizing : border-box;}*/

      li{box-sizing : border-box;}
      .sub_panel{ background: #cc3601; }
      .sub_path>li{ float:right; border:unset; }
      .sub_path>li:first-child{ border:unset; }
      .sub_path>li span, .sub_path>li>a{ padding-right:unset; }
      #langs{
        display: inline-block;
        width: 100%;
        padding: 0 25px 4px;
        font-size: 18px;
        line-height: 96px;
        text-align: center;
      }
      @media (max-width: 479px) {#wrapper { margin-top: 56px; } }

      .swiper-slide{ height: 400px; border: 2px solid #383838;}
      .swiper-slide h1{ font-size: 3.5rem; color:#fec64d; margin-bottom:10px}
      .swiper-slide h2{ font-size: 2.5rem; color:#383838; margin-bottom:10px}
      .swiper-slide h4{ font-size: 1.5rem; color:black; margin-bottom:10px}

      @media (max-width:479px){
        .swiper-slide{ height: 150px;}
        .swiper-slide h1{ font-size: 1.0rem; color:#fec64d; margin-bottom:10px}
        .swiper-slide h2{ font-size: 0.5rem; color:#383838; margin-bottom:10px}
        .swiper-slide h4{ font-size: 0.3rem; color:black; margin-bottom:10px}
        .swiper-button-next, .swiper-container-rtl .swiper-button-prev{ right:12px !important; }
        .swiper-button-prev, .swiper-container-rtl .swiper-button-next{ left:12px !important; }
        .slick-next{ right: 3px !important; }
        .slick-prev{ left: 3px !important;  } 
      }
      #ourobject_section{ position:relative; }
      #ourobject_section:after{
        content: "";
        display:block;
        position: absolute;
            width: 100%;
        height: 100%;
        top: 0;
        left: 0;
         background-image: url('http://webnunure.bluef.kr/theme/f067/img/section3_without_text.jpg'); 
         background-attachment: fixed;
         background-size:contain;
         opacity: 0.5;
         z-index: -1;
      }
      #footer{
        background-image:url("<?php echo G5_THEME_IMG_URL?>/contactbg.jpg");
        background-attachment: fixed;
        background-size:cover;
      }
      .text-white{ color:#fff; }
      .callcenter-text{ border-bottom: 1px dotted;  padding-bottom:10px ; }

      .mt30{ margin-top: 30px; }
      .mt40{ margin-top: 40px; }
      .mt50{ margin-top: 50px; }
      .mt60{ margin-top: 60px; }
      .mt70{ margin-top: 70px; }
      .mt80{ margin-top: 80px; }
      .mt90{ margin-top: 90px; }
      .mt100{ margin-top: 100px; }

      .mb30{ margin-bottom: 30px; }
      .mb40{ margin-bottom: 40px; }
      .mb50{ margin-bottom: 50px; }
      .mb60{ margin-bottom: 60px; }
      .mb70{ margin-bottom: 70px; }
      .mb80{ margin-bottom: 80px; }
      .mb90{ margin-bottom: 90px; }
      .mb100{ margin-bottom: 100px; }

      .pt30{ padding-top: 30px; }
      .pt40{ padding-top: 40px; }
      .pt50{ padding-top: 50px; }
      .pt60{ padding-top: 60px; }
      .pt70{ padding-top: 70px; }
      .pt80{ padding-top: 80px; }
      .pt90{ padding-top: 90px; }
      .pt100{ padding-top: 100px; }

      .pb30{ padding-bottom: 30px; }
      .pb40{ padding-bottom: 40px; }
      .pb50{ padding-bottom: 50px; }
      .pb60{ padding-bottom: 60px; }
      .pb70{ padding-bottom: 70px; }
      .pb80{ padding-bottom: 80px; }
      .pb90{ padding-bottom: 90px; }
      .pb100{ padding-bottom: 100px; }


      .quick_form .form_group { margin-bottom: 14px; }
      .mobile-lang{ display:none !important; }
      @media (max-width:992px){ 
        .mobile-lang{ display:block; } 
        .top-box-l, .top-box-r{ width: 30%; display:inline-block !important;}
        .top-box-l{ margin-left: 20px; margin-bottom:15px; }
      }

      ul.sub_path.clearfix {
          padding-right: 50px !important;
      }

      .slick-initialized .slick-slide{ display: flex; }

    </style>


    <header class="header_theme_1">
      
      <nav class="navigation">
        <div class="container">
          <h1><a href="/" title="로고"><img src="<?php echo G5_THEME_URL?>/index/images/logo.png" /></a></h1>
          <div class="dropdown">
            <ul class="nav" data-type="navbar">
              <li data-num="6" class="mobile-lang">
                <a class="top-box-l tb-selected" href="#">Kr</a><a class="top-box-r" href="#">En</a>
              </li>

              <li><a href="/">HOME</a></li>
              <li id="dn1" data-num="1">
                <a href="<?php echo G5_THEME_URL?>/index/company_01.php">회사소개</a>
                <!-- <ul class="subnav sub_menu1">
                  <li><a href="<?php echo G5_THEME_URL?>/index/loan_01.php">명품브랜드</a></li>
                  <li><a href="<?php echo G5_THEME_URL?>/index/loan_02.php">귀금속</a></li>
                  <li><a href="<?php echo G5_THEME_URL?>/index/loan_03.php">바이크&amp;자동차</a></li>
                  <li><a href="<?php echo G5_THEME_URL?>/index/loan_04.php">IT 디지털기기</a></li>
                </ul> -->
              </li>
              <li id="dn2" data-num="2">
                <a href="<?php echo G5_THEME_URL?>/index/loan_01.php">제품소개</a>
                <ul class="subnav sub_menu2">
                  <li class="sub_menu2_1">
                    <a class="" href="<?php echo G5_THEME_URL?>/index/loan_01.php">아이박스</a>
                  </li>
                  <li class="sub_menu2_2">
                    <a class="" href="<?php echo G5_THEME_URL?>/index/loan_02.php">주장치</a>
                  </li>
                  <li class="sub_menu2_3">
                   <a style="margin:0 auto;" href="<?php echo G5_THEME_URL?>/index/loan_03.php">감지기</a>
                  </li>
                </ul>
                <li class="sub_menu2_4">

                </li>
              </li>
              <li data-num="3"><a href="<?php echo G5_THEME_URL?>/index/loan_04.php">동작원리</a></li>
              <li data-num="4"><a href="<?php echo G5_BBS_URL?>/board.php?bo_table=qna">온라인문의</a></li>
              <li data-num="5" id="langs-li">
                <span class="cs_tel" id="langs"> 
                  <a class="top-box-l tb-selected" href="#">한국어</a>
                  <a class="top-box-r" href="#">English</a>
                </span>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    
  <!--========================================================
                            CONTENTS
  =========================================================-->
  <div class="main" style="background: #005700; ">
    <div class="container">
      <img id="headerimg" src="<?php echo G5_THEME_IMG_URL?>/section1.jpg" width="100%" >
    </div>
  </div>
    <div class="main container" style="background: #fff">

      <?php if($pn != "index") { ?>
      <div class="sub_panel">
        <div class="container">
          <div class="row">
            <div class="col_sm_3"><h2><?php echo $step1 ?></h2></div>
            <!-- <div class="col_sm_7"><p>유치원 통학차량 잠자는 아이 예방 장치</p></div> -->
          </div>
        </div>
      </div>
      
      <div class="subnav_section">
        <div class="container">
          <ul class="sub_path clearfix">
            <?php if($step2 !=='n') { ?>
            <li><a href="#" style="background:unset;">> &nbsp; &nbsp;<?php echo $step2 ?></a>
              <!-- <? include G5_THEME_PATH."/index/sub_menu.php"; ?> -->
            </li>
            <?php }?>
            <li><span>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $step1 ?></span></li>
            <li><span>Home</span></li>

          </ul>
        </div>
      </div>
      
      <div class="sub_section">
        <div class="container">
          <div class="row">
            <div class="col_xs_10 col_sm_10">
              <div class="subcontent_panel">
              
                <div class="sub_head clearfix">

                </div>
                
                <div class="sub_body">
      <?php } ?>
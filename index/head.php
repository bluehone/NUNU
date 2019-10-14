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
<!-- <div id="wrapper"> -->
  <!--========================================================
                            HEADER
  =========================================================-->
    <style>
      html, body {
      position: relative;
      height: 100%;
    }
    body {
      background: #eee;
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
    .swiper-button-next, .swiper-container-rtl .swiper-button-prev{
      right:23px;
      font-size: 23px;
    }
    .swiper-button-prev, .swiper-container-rtl .swiper-button-next{
      left:23px;
    }
    .swiper-button-prev{
      font-size: 23px;

    }
    .bg-white{
      background:#fff;
    }
    .text-center{
      text-align: center;
    }
    .quick-panel{
      margin-top: 30px;
    }
    .quick_panel{
      margin-top: 30px !important;
    }

    .quick_form .agree{
      border: unset;
      margin:unset;
      padding:unset;
    }
    .quick_panel .push{
      background: #0b540a
    }
    .m-auto{
      margin:0 auto;
    }
    .wrap_controllers{
      display: none;
    }

      #f1, #f2{
        border-right: 0.7px solid #a2a1a1;
      }
      #footer-info{
        height:310px;
      }

    @media (max-width:478px){
      #f1, #f2{
        border-right: unset;
      }
    }
      .navigation{
        background: #fff ;
      }
      .nav{
        /*margin-right:19%;*/
      }
      .top_banner{
        background: #fff;
      }
      .top_banner span{
        padding: unset;
      }
      .top-box-l{
        padding: 5px;
        padding-right: 9px;
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
    </style>
    <header class="header_theme_1">
      <h2 class="top_banner clearfix">
        <div class="container">
          <!-- <span>누누</span> --> 
          <span class="cs_tel"> 

              <a class="top-box-l tb-selected" href="#">한국어</a>

              <a class="top-box-r" href="#">English</a>

          </span>
        </div>
      </h2>

  <style>
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
      }

      .sub_menu2_1{
        margin:0 auto; 
        width: 80%; 
        text-align:center;
        margin-left:13px; 
        border-bottom:1px solid #fff; 
        border-bottom-width:50%;
      }
      .sub_menu2_2{
         margin:0 auto; 
         width: 80%; 
         text-align: center;
         margin-left:13px; 
         border-bottom:1px solid #fff;  
         border-width:50%
      }
      .sub_menu2_3{
         margin:0 auto; 
         width: 100%;
         text-align: center;
      }
      @media (max-width:993px){
        #f1, #f2{
          border-right: unset;
        }
        .sub_menu2_1, .sub_menu2_2, .sub_menu2_3{
          margin-left:unset;
          text-align: left;
        }
        .cs_tel{
          display:none;
        }
        .main{
          margin-top:50px;
        }
      }

      .rd-mobilepanel_title{
        display: none;
      }
      li a:hover{
        color : #de0000;
      }


      .sub_panel{
        background: #cc3601;
      }
      .sub_path>li{
        float:right;
        border:unset;
      }
      .sub_path>li:first-child{
        border:unset;
      }
      .sub_path>li span, .sub_path>li>a{
        padding-right:unset;
      }

    </style>

      <nav class="navigation">
        <div class="container">
          <h1><a href="/" title="로고"><img src="<?php echo G5_THEME_URL?>/index/images/logo.png" /></a></h1>
          <div class="dropdown">
            <ul class="nav" data-type="navbar">
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
              </li>
              <li data-num="3"><a href="<?php echo G5_THEME_URL?>/index/loan_04.php">동작원리</a></li>
              <li data-num="4"><a href="<?php echo G5_BBS_URL?>/board.php?bo_table=qna">온라인문의</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    
 
  <!--========================================================
                            CONTENTS
  =========================================================-->
  <div class="main">

        <img id="headerimg" src="<?php echo G5_THEME_IMG_URL?>/section1.jpg" width="100%" >

  </div>
    <div class="main">

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
            <?php if($step2) { ?>
            <li><a href="#" style="background:unset;">> &nbsp; &nbsp;<?php echo $step2 ?></a>
              <!-- <? include G5_THEME_PATH."/index/sub_menu.php"; ?> -->
            </li>
            <?php } else{?>
            <li><span>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $step1 ?></span></li>
            <li><span>Home</span></li>
          <?php } ?>
          </ul>
        </div>
      </div>
      
      <div class="sub_section">
        <div class="container">
          <div class="row">
            <div class="col_xs_10 col_sm_10">
              <div class="subcontent_panel">
              
                <div class="sub_head clearfix">
                  <h2 class="pull_left"><?php echo $step2 ?></h2>
                </div>
                
                <div class="sub_body">
      <?php } ?>


      <!-- <div class="visual_section">
        <div class="main_panel">
          <div class="slide_img1"></div>
          <div class="slide_img2"></div>
        </div>
        
        <div class="slogan_banner_overlay">
          <div class="container clearfix">
            <div class="slogan_panel">
              <div><span class="sg1">IOT로 더 안전하게 '아이박스'</span></div>
              <div><span class="sg2">유치원 통학차량 잠자는 아이 예방 장치</span></div>
              <div><span class="sg3 pointer" onclick="location.href=''">문의하기</span></div>
            </div>
          </div>
        </div>
        
      </div>  -->


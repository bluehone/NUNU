<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

/*
if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
*/
?>

<? if($pn != "index") { ?>
                
                </div><!-- sub_body end -->
              
              </div> <!-- subcontent_panel end -->
            </div>
          </div>
        </div>
      </div><!-- sub_section end -->
      <? } ?>


    </div>
  <!--========================================================
                            FOOTER
  =========================================================-->

  <style>
    .footer{
      background: #a8a8a8;
      color:#fff;
      font-size:17px;
      font-weight:400;
    }
  </style>
    <footer>
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col_xs_10 col_sm_10 text_center mb20">
              (유)누누 <span> | </span> 대표 장원석 <span> | </span> Tel: 070-5173-6002 <span> | </span> FAX : 070-5173-6008 <span> | </span> E-mail : nunu6009@hanmail.net  <br>
              주소 : 전라북도 전주시 완산구 아중로 33, 전주정보문화진흥원 멀티미디어센터 308호 <span> | </span> 사업자등록번호 376-87-01284 
            </div>
            <div class="col_xs_10 col_sm_10 text_center">
             ⓒ Copyright 2018. 누누 All Rights Reserved. 
              <a href="/admin/" class="push push_1 admin" target="_blank">ADMIN</a> 
             
            </div>
            <div class="col_xs_10 col_sm_1 text_right pt10" >
            </div>
          </div>
          <!-- <div class="loan_notice">
            <p>
            대출금리 : 연 27.9%이내(연체금리 연 27.9%이내) / 취급수수료 등 기타 부대비용 없음.<br />
            </p>
            <p>
            중개수수료를 요구하거나 받는 것은 불법으로 블루아이론은 중개수수료를 요구하지 않습니다. <br />
            과도한 빚은 당신에게 큰 불행을 안겨 줄 수 있습니다. 
            </p>
          </div> -->
        </div>
      </div>
    </footer>

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>
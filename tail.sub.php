<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<?php if ($is_admin == 'super') {  ?><!-- <div style='float:left; text-align:center;'>RUN TIME : <?php echo get_microtime()-$begin_time; ?><br></div> --><?php }  ?>

<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
[if lte IE 7]>
<script>
	
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]
<script src="<?php echo G5_THEME_URL?>/index/include/js/script.js"></script>
<script src="<?php echo G5_THEME_URL?>/index/include/js/jquery.rd-navbar.js"></script>

  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="<?php echo G5_THEME_URL?>/jquery.placeholder.min.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
	$('input, textarea').placeholder();

</script>

  <script type="text/javascript">
    $(".single-item").slick({
    	arrows: true,
		infinite: true,
		autoplay: false,
		speed: 500,
		nextArrow: '<i class="slick-next fa fa-arrow-right"></i>',
  		prevArrow: '<i class="slick-prev fa fa-arrow-left"></i>',
		dots: false
});




			
  </script>



</body>
</html>
<?php echo html_end(); // HTML 마지막 처리 함수 : 반드시 넣어주시기 바랍니다. ?>
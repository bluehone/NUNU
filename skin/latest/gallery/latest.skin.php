<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>

<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->
    <?php for ($i=0; $i<count($list); $i++) {  ?>
		<div class="col_xs_10 col_sm_3 mb20">
			<?

				$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], 370, 220);
				if($thumb['src']) {
					$img_content = '<p><a href="'.$list[$i]["href"].'&bo_table='.$bo_table.'&sca='.$list[$i]['cate'].'"><img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" class="img_fullwidth"></a></p>';
				} else {
					$img_content = '<span style="width:114px;height:68px">no image</span>';
				}
				$img_content .= "<p class=\"title\"><a href=\"".$list[$i]['href'].'&bo_table='.$bo_table.'&sca='.$list[$i]['cate']."\">".$list[$i]['subject']."</a></p>";
				echo $img_content;
			?>
		</div>
    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <div class="col_xs_10 col_sm_11" style="height:279px"></div>
    <?php }  ?>
<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->
<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once $board_skin_path."/board_head.skin.php";

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

	<div class="history">
	<?
		$sql = "SELECT * FROM $write_table group by wr_subject order by wr_subject desc";
		$result=sql_query($sql);

		while($row=sql_fetch_array($result)) {
	?>
		<div class="row">
				<div class="col_xs_10 col_sm_2">
					<h4><?=$row[wr_subject]?></h4>
				</div>
				<div class="col_xs_10 col_sm_8">
					<?
						$sql = "SELECT * FROM $write_table where wr_subject = '".$row[wr_subject]."' order by wr_1 desc";
						$result1=sql_query($sql);

						while($row1=sql_fetch_array($result1)) {

							$content = strip_tags($row1[wr_content]);

							$content = nl2br($content);

					?>
						<p><span><?=$row1[wr_1]?>월</span> <?= $content ?></p>
					<?
						}
					?>

				</div>
		</div>
		<hr class="hr_line" />
	<? 
		} 
	?>
	</div>
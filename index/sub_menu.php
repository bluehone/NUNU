              <ul class="subnav_panel" style="display:none">
                
                <?php 
								  if($code==1) { 
								?>
                <li><a href="<?php echo G5_THEME_URL?>/index/loan_01.php" <?php if($sub==1) { ?>class="on"<?php } ?>>명품브랜드</a></li>
                <li><a href="<?php echo G5_THEME_URL?>/index/loan_02.php" <?php if($sub==2) { ?>class="on"<?php } ?>>귀금속</a></li>
                <li><a href="<?php echo G5_THEME_URL?>/index/loan_03.php" <?php if($sub==3) { ?>class="on"<?php } ?>>바이크&amp;자동차</a></li>
                <li><a href="<?php echo G5_THEME_URL?>/index/loan_04.php" <?php if($sub==4) { ?>class="on"<?php } ?>>IT 디지털기기</a></li>
                
								<?php 
								  } else if($code==2) { 
								?>
                <li><a href="<?php echo G5_THEME_URL?>/index/process_01.php" <?php if($sub==1) { ?>class="on"<?php } ?>>이용안내</a></li>
                
                <?php 
								  } else if($code==3) { 
								?>
                <li><a href="<?php echo G5_THEME_URL?>/index/online.php" <?php if($sub==1) { ?>class="on"<?php } ?>>전국영업점</a></li>
                
                <?php 
								  } else if($code==4) { 
								?>
                <li><a href="<?php echo G5_BBS_URL?>/board.php?bo_table=qna" <?php if($sub==1) { ?>class="on"<?php } ?>>온라인문의</a></li>
               
                <?php 
								  } else if($code==5) { 
								?>
                <li><a href="<?php echo G5_THEME_URL?>/index/company_01.php" <?php if($sub==1) { ?>class="on"<?php } ?>>회사소개</a></li>
                
                <?php 
								  } else if($code==10) { 
							  ?>
                <li><a href="#" class="on">멤버쉽</a></li>
								
								<?php } ?>
                
              </ul>

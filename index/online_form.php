<?
	$sql = " select * from g5_content where co_id = 'privacy'  ";
    $co = sql_fetch($sql);

?>
          <div class="loan_title">
            <h2>고객맞춤상담으로 방문없이 간편하게 지원해드립니다.</h2>
            <p>
              &bull; 중개수수료를 요구하거나 받는 것은 불법입니다.<br />
              &bull; 취급수수료 및 기타부대비용 없습니다.<br />
              &bull; 과도한 빚은 당신에게 큰 불행을 안겨줄 수 있으며 고통의 시작입니다.
            </p>
          </div>
          <div class="inquiry_panel form_content mt60">
            <form name="req_form_m" id="req_form_m" method="post">
			      <input type="hidden" name="bo_table" id="bo_table" value="online">
            <div class="row">
              <div class="col_xs_10 col_sm_5 form_group">
                <label>이름 *</label>
                <input type="text" name="wr_subject" id="wr_subject" class="form_box form_block" />
              </div>
              <div class="col_xs_10 col_sm_5 form_group">
                <label>휴대폰 *</label>
                <input type="text" name="wr_1" id="wr_1" class="form_box form_block"  placeholder="-포함 (010-000-0000)" maxlength="13"/>
              </div>
              <div class="col_xs_10 col_sm_5 form_group">
                <label>대출희망금액 *</label>
                <input type="text" name="wr_3" id="wr_3" class="form_box form_block" />
              </div>
              <div class="col_xs_10 col_sm_5 form_group">
                <label>대출상품 *</label>
                <select class="form_select form_block" name="wr_2" id="wr_2">
                  <option value="">선택하세요</option>
                  <option value="직장인대출">직장인대출</option>
                  <option value="사업자대출">사업자대출</option>
                  <option value="여성/주부대출">여성/주부대출</option>
                  <option value="개인회생대출">개인회생대출</option>
                </select>
              </div>
            </div>
            <a href="javascript:" class="push sm_ubmit_btn">대출상담신청</a>
            </form>
          </div>


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
					alert("대출희망금액을 입력하세요");
					$("#wr_3").focus();
					return false;
				}			
				if($("#wr_2").val()==""){
					alert("대출상품을 선택하세요");
					$("#wr_2").focus();
					return false;
				}
				
				/*if($(":checkbox[name='agree']:checked").val()!="Y"){
					alert("개인정보취급방침에 동의하셔야 합니다.");
					$("#agree").focus();
					return false;
				}*/
				
					$.ajax({
						url: "/theme/f067/index/query.php",
						type: 'POST',
						data: $("#req_form_m").serialize(),
						success: function(re){
							if(re=="Y"){
								alert("대출신청이 접수되었습니다.");
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

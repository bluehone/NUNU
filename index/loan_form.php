                        <form name="req_form_m" id="req_form_m" method="post">
						<input type="hidden" name="bo_table" id="bo_table" value="online">
                        <table class="form_table">
                          <colgroup>
                            <col width="25%" />
                            <col width="" />
                          </colgroup>
                          <tbody>
                            <tr>
                              <th>대출상품</th>
                              <td>
                                <select class="form_box" name="wr_2" id="wr_2">
                                  <option value="명품브랜드" <? if($mode=="loan1"){ echo "selected"; } ?>>명품브랜드</option>
                                  <option value="귀금속" <? if($mode=="loan2"){ echo "selected"; } ?>>귀금속</option>
                                  <option value="바이크&자동차" <? if($mode=="loan3"){ echo "selected"; } ?>>바이크&amp;자동차</option>
                                  <option value="IT 디지털기기" <? if($mode=="loan4"){ echo "selected"; } ?>>IT 디지털기기</option>
                                </select>
                              </td>
                            </tr>
                            <tr>
                              <th>이름</th>
                              <td><input type="text" name="wr_subject" id="wr_subject" class="form_box" placeholder="이름을 입력하세요" /></td>
                            </tr>
                            <tr>
                              <th>연락처</th>
                              <td><input type="text" name="wr_1" id="wr_1"  class="form_box" placeholder="-포함 (010-123-0000)" /></td>
                            </tr>
                            <tr>
                              <th>품목</th>
                              <td><input type="text" name="wr_3" id="wr_3"  class="form_box" placeholder="품목을 입력하세요" /> </td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="text_center pa10">
                          <input type="checkbox" name="agree" value="Y"/> 개인정보수집/이용에 관한 동의 [보기]
                        </div>
                        <a href="#" class="push sm_ubmit_btn">대출상담신청</a>
                        </form>



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
						
				if($("#wr_2").val()==""){
					alert("대출상품을 선택하세요");
					$("#wr_2").focus();
					return false;
				}

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
					alert("품목을 입력하세요");
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
								alert("대출 상담신청이 접수되었습니다.");
								$("#wr_subject").val("");
								$("#wr_1").val("");
								$("#wr_3").val("");
								$(":checkbox[name='agree']").attr('checked', false);
							}
						 }
					});
			});
			
		})
</script>
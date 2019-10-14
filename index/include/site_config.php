<?
$pn=substr(basename($PHP_SELF),0,-4);
switch($pn) {

//index
  case "index":
    $code="0";
  break;
	

//대출상품
	case "loan_01":  case "loan_02":  case "loan_03": 
		$code="1";  $step1="제품소개";
		if($pn=="loan_01")				  { $sub="1"; $step2="아이박스"; }
		else if($pn=="loan_02")		{ $sub="2"; $step2="주장치"; }
		else if($pn=="loan_03")		{ $sub="3"; $step2="감지기"; }
		// else if($pn=="loan_04")		{ $sub="4"; $step2="ehd"; }
	break;

	case "loan_04":  
		$code="1";  $step1="동작원리"; $step2="n";
	break;

//대출절차
	case "process_01":
		$code="2"; $sub="1"; $step1="이용안내"; $step2="이용안내";
	break;

//안심한도조회
	case "store":
		$code="3"; $sub="1"; $step1="전국영업점"; $step2="전국영업점안내";
	break;

//회사소개
	case "company_01":
		$code="5"; $sub="1"; $step1="회사소개"; $step2="n";
	break;

//멤버쉽
	case "register":  case "login":  case "password_lost":  case "register_form":  case "member_confirm":
		$code="10"; $sub="1"; $step1="멤버쉽";  
		if($pn=="register" || ($pn=="register_form" && !$member['mb_id']) )			{$step2="회원가입"; }
		else if($pn=="login")		{$step2="로그인"; }
		else if($pn=="member_confirm" || ($pn=="register_form" && $member['mb_id']))		{$step2="정보수정"; }
		else if($pn=="password_lost")		{$step2="아이디/비밀번호 찾기"; }
	break;

//게시판
 default:
	if($bo_table == "qna")				{ $code="4"; $sub="1"; $step1="온라인문의";   $step2="온라인문의"; }
	
break;
}

?>
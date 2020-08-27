<?php

session_start(); 
$s_id = isset($_SESSION["uid"])? $_SESSION["uid"]:"";
$s_name = isset($_SESSION["uname"])? $_SESSION["uname"]:"";
$s_idx = isset($_SESSION["idx"])? $_SESSION["idx"]:"";

if(!$s_idx){
    echo "
    <script type='text/javascript'>
    alert('로그인이 필요합니다.');
    location.href='twosomeplace_login.php';
    </script>
";
    return false;
};

?>
<!DOCTYPE>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>투썸플레이스 가맹점 정보공개서</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/twosomeplace_franchise_Information_Disclosure_Application.css" type="text/css">
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
    //logout
    function logout_check(){
        var q = confirm("정말 로그아웃 하시겠습니까?");
            
        if(q){
                location.href = "logout.php";
            };
    };
        
    $(document).ready(function(){
        $(".gnb > ul >li").mouseenter(function(){
            $(".gnb ul ul,.nav_bg,.line").stop().slideDown(250);
        });
        $(".gnb > ul >li").mouseleave(function(){
            $(".gnb ul ul, .nav_bg,.line").stop().slideUp(250);
        });
        
        //quick_menu_close
        $(".quick_close").click(function(){
            $(".quick_menu").hide();
        });
    });
    
    $(document).ready(function(){
        var fb = document.getElementById("fb");
        var fh = document.getElementById("fh");
        
        fb.onclick=function(){
        fh.checked=false;
        }
        
        fh.onclick=function(){
        fb.checked=false;
        }
        
    });
        
    function form_check(){
        
    var fb = document.getElementById("fb");
    var fh = document.getElementById("fh");
    var uname = document.getElementById("uname");
    var ustore = document.getElementById("ustore");
    var email_id = document.getElementById("email_id");
    var email_dns = document.getElementById("email_dns");
    var mobile = document.getElementById("mobile");
    var apply = document.getElementById("apply");
    
    if(!fb.checked == !fh.checked){
        alert("신청자 구분을 선택해주세요.");
        return false;
    };
    
    if(!uname.value){
        alert("이름이 누락되었습니다.");
        uname.focus();
        return false;
    };
    
    if(fb.checked && !ustore.value){
        alert("점포명이 누락되었습니다.");
        ustore.focus();
        return false;
    };
        
    if (!email_id.value) {
        alert("이메일아이디가 누락되었습니다.");
        email_id.focus();
        return false;
    };
    
    if (!email_dns.value) {
        alert("이메일도메인이 누락되었습니다.");
        email_dns.focus();
        return false;
    };
    
    if (!mobile.value) {
        alert("연락처가 누락되었습니다.");
        mobile.focus();
        return false;
    };
    
    var reg = /^[0-9]+$/g;
    if (!reg.test(mobile.value)) {
       alert("숫자만 입력 가능합니다.");
       mobile.focus();
       return false;
    };
    
    if (!apply.checked) {
        alert("약관의 동의가 필요합니다");
        apply.focus();
        return false;
    };
    
    document.info_form.submit();
        
    };
        
    //도메인
    function change_email(){
            var email_dns = document.getElementById("email_dns");
            var email_sel = document.getElementById("email_sel");
            
            var idx = email_sel.options.selectedIndex;
            var selected_value =email_sel.options[idx].value;
            
            email_dns.value = selected_value;
        };
    
    </script>
</head>
<body>
   <header>
   <div class="header_wrap">
    <h1><a href="index.php">투썸플레이스</a></h1>
    
    <nav class="gnb">
        <h2>주요 메뉴</h2>
            <ul>
                <li class="gnb1"><a href="twosomeplace_menu_coffee.php">메뉴</a>
                    <ul class="lnb1">
                        <li class="lnb1_1"><a href="twosomeplace_menu_coffee.php">COFFEE</a></li>
                        <li class="lnb1_2"><a href="twosomeplace_menu_beverage.php">BEVERAGE</a></li>
                        <li class="lnb1_3"><a href="twosomeplace_menu_food.php">FOOD</a></li>
                        <li class="lnb1_4"><a href="twosomeplace_menu_md.php">MD상품</a></li>
                        <li class="lnb1_5"><a href="twosomeplace_menu_wholecake.php">WHOLE CAKE</a></li>
                    </ul>
                </li>
                
                <li class="gnb2"><a href="twosomeplace_store_search.php">매장</a>
                    <ul class="lnb2">
                        <li class="lnb2_1"><a href="twosomeplace_store_search.php">매장찾기</a></li>
                        <li class="lnb2_2"><a href="twosomeplace_store_grandopen.php">신규오픈매장</a></li>
                        <li class="lnb2_3"><a href="twosomeplace_store_event.php">매장별 이벤트</a></li>
                    </ul>
                </li>
                
                <li class="gnb3"><a href="twosomeplace_franchise_opensystem.php">프랜차이즈</a>
                    <ul class="lnb3">
                        <li class="lnb3_1"><a href="twosomeplace_franchise_opensystem.php">창업 정보 절차</a></li>
                        <li class="lnb3_2"><a href="twosomeplace_franchise_online_application.php">온라인 창업상담</a></li>
                        <li class="lnb3_3"><a href="twosomeplace_franchise_bankingproduct.php">가맹점전용 금융상품</a></li>
                        <li class="lnb3_4"><a href="twosomeplace_franchise_Information_Disclosure_Application.php">가맹점 정보공개서</a></li>
                        <li class="lnb3_5"><a href="twosomeplace_franchise_FAQ.php">FAQ</a></li>
                        <li class="lnb3_6"><a href="twosomeplace_franchise_seminar.php">창업설명회</a></li>
                    </ul>
                </li>
                
                <li class="gnb4"><a href="#none">커뮤니티</a>
                    <ul class="lnb4">
                        <li class="lnb4_1"><a href="twosomeplace_news.php">뉴스&amp;공지</a></li>
                        <li class="lnb4_2"><a href="twosomeplace_event.php">이벤트</a></li>
                        <li class="lnb4_3"><a href="twosomeplace_service_center.php">고객센터</a></li>
                    </ul>
                </li>
                
                <li class="gnb5"><a href="twosomeplace_service_mobileapp.php">서비스</a>
                    <ul class="lnb5">
                        <li class="lnb5_1"><a href="twosomeplace_service_mobileapp.php">모바일 투썸APP</a></li>
                        <li class="lnb5_2"><a href="twosomeplace_service_cakeclass.php">케이크클래스</a></li>
                        <li class="lnb5_3"><a href="twosomeplace_Corporate_and_group_purchasing.php">기업 및 단체구매</a></li>
                        <li class="lnb5_4"><a href="twosomeplace_service_catering.php">케이터링서비스</a></li>
                        <li class="lnb5_5"><a href="twosomeplace_service_membership.php">멤버십&amp;제휴</a></li>
                    </ul>
                </li>
                
                <li class="gnb6"><a href="twosomeplace_brandis.php">투썸플레이스</a>
                    <ul class="lnb6">
                        <li class="lnb6_1"><a href="twosomeplace_brandis.php">BRAND is</a></li>
                        <li class="lnb6_2"><a href="twosomeplace_coffeeis.php">COFFEE is</a></li>
                        <li class="lnb6_3"><a href="twosomeplace_dessertis.php">DESSERT is</a></li>
                        <li class="lnb6_4"><a href="twosomeplace_recuit.php">RECRUIT</a></li>
                    </ul>
                </li>
            </ul>
    </nav><!--//gnb-->    

    <nav class="top_menu">
        <h2>사용자 메뉴</h2>
            <ul>
                <?php
                    if(!$s_id){
                        echo "<li class=\"top_menu1\"><a href=\"twosomeplace_login.php\">로그인</a></li>";
                        echo "<li class=\"top_menu2\"><a href=\"twosomeplace_join.php\">회원가입</a></li>";
                    }else{
                        if($s_id == "admin" || $s_id == 1){
                            echo "<li class=\"top_menu0\"><a href=\"administrator_mode.php\">관리자모드</a></li>";
                            echo "<li class=\"top_menu1\"><a href=\"javascript:void(0);\" onclick=\"logout_check()\">로그아웃</a></li>";
                        }else{
                            echo "<li class=\"top_menu1\"><a href=\"javascript:void(0);\" onclick=\"logout_check()\">로그아웃</a></li>";
                            echo "<li class=\"top_menu2\"><a href=\"mytwosome.php\">MY투썸</a></li>";
                        };
                    };
                ?>
                <li class="top_menu3"><a href="twosomeplace_service_center.php">고객센터</a></li>
                <li class="top_menu4"><a href="twosomeplace_sitemap.php">사이트맵</a></li>
                <li class="top_menu5"><a href="https://www.instagram.com/atwosomeplace_official/">인스타그램</a></li>
                <li class="top_menu6"><a href="https://www.facebook.com/ATWOSOMEPLACE">페이스북</a></li>
            </ul>
    </nav><!--//top_menu-->
    </div><!--//header_wrap-->
    <div class="nav_bg"></div><!--//lnb배경-->
    </header><!--//header-->


    <aside class="quick_menu">   
        <h2>퀵 메뉴</h2>
            <ul>
               <li class="quick_menu1"><a href="twosomeplace_store_search.php">매장찾기</a></li>
               <li class="quick_menu2"><a href="twosomeplace_franchise_seminar.php">투썸플레이스 창업설명회 신청</a></li>
               <li class="quick_close">닫기</li>
            </ul>
    </aside><!--//quick_menu-->

    <main>
        <div class="background_wrap">
        <div class="background"></div>      
        </div><!--//background_wrap-->
        <section class="title_text_bg">
        <h2>가맹점 정보 공개서</h2>
            <p>가맹점주님 또는 가맹희망자님들 <span class="title_txt">투썸플레이스 가맹 정보 공개서</span> 신청하세요!</p>
        </section><!--//title_text_bg-->
        
        <section class="information_a">
            
            <h3>정보 공개서 신청 <span class="info_txt">Information Disclosure Application</span></h3>
            
            <section class="info_form">
                <form name="info_form" action="twosomeplace_info_apply.php" method="post">
                    <fieldset class="info_1">
                        <legend class="info_title1">신청서 작성</legend>
                        <p class="user">
                            <span class="redTxt">*</span>신청자 구분
                            <input type="checkbox" name="user" id="fb" value="B" class="u_check1">
                            <label for="fb" class="user1">가맹점 사업자</label>
                            <input type="checkbox" name="user" id="fh" value="H" class="u_check2">
                            <label for="fh" class="user2">가맹점 희망자</label>        
                        </p>
                        <p class="uname">
                            <label for="uname" class="uname_title"><span class="redTxt">*</span>성명</label>
                            <input type="text" name="uname" id="uname" class="uname_input">
                        </p>
                        <p class="store_name">
                            <label for="ustore" class="store_name_title"><span class="redTxt">*</span>점포명(가맹사업자)</label>
                            <input type="text" name="ustore" id="ustore" class="store_name_input">
                        </p>
                        <p class="email">
                            <label for="email" class="email_title"><span class="redTxt">*</span>이메일</label>
                            <input type="text" name="email_id" id="email_id" class="email_input1">
                            <label for="email_dns" class="email_c">@</label>
                            <input type="text" name="email_dns" id="email_dns" class="email_input2">
                            <select name="email_sel" id="email_sel" onchange="change_email()" class="sel_dns">
                               <option value="">직접입력</option>
                                <option value="naver.com">naver.com</option>
                                <option value="hanmail.net">hanmail.net</option>
                                <option value="gmail.com">gmail.com</option>
                                <option value="nate.com">nate.com</option>
                            </select>
                        </p>
                        <p class="mobile">
                            <label for="mobile" class="mobile_title"><span class="redTxt">*</span>연락처</label>
                            <input type="text" name="mobile" id="mobile" class="mobile_input">
                            "-"생략
                        </p>
                    </fieldset>
                    
                    <fieldset class="info_2">
                        <legend class="info_title2">개인정보 수집 동의</legend>
                        <p class="info2_txt">
                            1. 개인정보의 수집 및 이용 목적<br>저희 투썸플레이스는 가맹점을 희망하는 고객님들께 '투썸플레이스 정보공개서' 열람 서비스를 제공하기 위하여 성명, 이메일, 연락처의 개인정보 항목을 수집합니다.<br>2. 회원의 개인정보 보유, 이용기간과 파기<br>투썸플레이스 정보공개서 열람 신청 등록일로부터 1달 이후에는 해당 정보를 지체없이 파기합니다.<br>3. 개인정보의 파기 절차<br>투썸플레이스 정보공개서 열람을 위해 입력한 정보는 목적이 달성된 후 별도의 DB로 옮겨져 내부방침 및 기타 관련 법령에 의한 정보보호 사유에 따라<br>(보유 및 이용기간 참조) 일정 기간 저장된 후 파기되어 지며, 전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다.
                        </p>
                        <p class="apply">
                            <input type="checkbox" name="apply" id="apply" value="Y">
                            <label for="apply">동의합니다.</label>
                        </p>
                    </fieldset>
                    
                    <button type="button" onclick="form_check()" class="btn">정보공개서 신청</button>
                </form>         
                                
            </section>
            
        </section><!--//information_a-->
        
    
    </main>
    
    
    <footer>
    
    <h2>사이트 이용안내</h2>
    
                     
    <section class="term">
    <h3>약관 및 정책</h3>
        <ul>
            <li class="term1"><a href="twosomeplace_recuit.php">리크루트</a></li>
            <li class="term2"><a href="twosomeplace_term_of_use.php">이용약관</a></li>
            <li class="term3"><a href="twosomeplace_privacy.php">개인정보처리방침</a></li>
            <li class="term4"><a href="twosomeplace_e-mail_collection.php">이메일무단수집거부</a></li>
            <li class="term5"><a href="twosomeplace_legal_notice.php">법적고지</a></li>
        </ul>
    </section><!--//term-->    
    <section class="footer_bottom">

    <div class="footer_bottom_wrap1">
    <address class="footer1">서울특별시 중구 을지로170,8층(을지로4가,을지로트윈타워)투썸플레이스㈜</address>
    <p class="footer2">대표이사 : 이영상</p>
    <p class="footer3">개인정보관리 책임자 : 박상욱</p>
    <p class="footer4">고객센터 : 1577-4410</p>
    <p class="footer5">팩스 : 02-2058-6777</p>
    </div>
    <div class="footer_bottom_wrap2">
    <p class="footer6">사업자등록번호 :  404-86-01054</p>
    <p class="footer7">통신판매업종신고증 : 제 2018-서울중구-0353호</p>
    <p class="footer8">대표이메일 : twosomemaster@cj.net</p>
    </div>

    <p class="footer9">copyright &copy; 2019 A TWOSOME PLACE CO.LTD.ALL RIGHTS RESERVED</p>
    
    </section><!--//footer_bottom-->
    </footer><!--//foooter-->            
            
        
        
</body>
</html>
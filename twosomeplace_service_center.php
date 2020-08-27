<meta charset="UTF-8">
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
    <title>투썸플레이스 고객센터</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/twosomeplace_service_center.css" type="text/css">
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
        
        $(".click1").click(function(){
           $(".click1>p").slideToggle("fast");
           $(".click2>p").slideUp("fast");
           $(".click3>p").slideUp("fast");
        
        });
        
        $(".click2").click(function(){
           $(".click2>p").slideToggle("fast");
           $(".click1>p").slideUp("fast");
           $(".click3>p").slideUp("fast");
        });
        
        $(".click3").click(function(){
           $(".click3>p").slideToggle("fast");
           $(".click2>p").slideUp("fast");
           $(".click1>p").slideUp("fast");
        });
   
        
        //quick_menu_close
        $(".quick_close").click(function(){
            $(".quick_menu").hide();
        });
    });
    
            
    function form_check(){
        
    var uname = document.getElementById("uname");
    var store = document.getElementById("store");
    var choice = document.getElementById("choice");
    var title = document.getElementById("title");
    var main_text = document.getElementById("main_text");
    var mobile = document.getElementById("mobile");
    var apply = document.getElementById("apply");
    var apply_2 = document.getElementById("apply_2");
    var apply_2_not = document.getElementById("apply_2_not");
    
    if(!uname.value){
        alert("이름이 누락되었습니다.");
        uname.focus();
        return false;
    };
    
    if (!mobile.value) {
        alert("휴대전화가 누락되었습니다.");
        mobile.focus();
        return false;
    };
    
    var reg = /^[0-9]+$/g;
    if (!reg.test(mobile.value)) {
       alert("숫자만 입력 가능합니다.");
       mobile.focus();
       return false;
    };
    
    if (!store.value) {
        alert("매장명이 누락되었습니다.");
        store.focus();
        return false;
    };
        
    if (!choice.value) {
        alert("고객의 소리의 종류를 선택해주세요.");
        choice.focus();
        return false;
    };
    
    if (!title.value) {
        alert("제목이 누락되었습니다.");
        title.focus();
        return false;
    };
    
    if (!main_text.value) {
        alert("내용이 누락되었습니다.");
        main_text.focus();
        return false;
    };
    
    if (!apply.checked) {
        alert("약관의 동의가 필요합니다");
        apply.focus();
        return false;
    };
    
    if (!apply_2.checked == !apply_2_not.checked) {
        alert("약관의 선택이 필요합니다");
        apply_second.focus();
        return false;
    };
    
    document.opinion_form.submit();
        
    };
        
    //도메인
    function change_email(){
            var email_dns = document.getElementById("email_dns");
            var sel_dns = document.getElementById("sel_dns");
            
            var idx = sel_dns.options.selectedIndex;
            var selected_value =sel_dns.options[idx].value;
            
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
        <div class="title_bg"></div>      
        <section class="title_text_bg">
        <h2>투썸플레이스 고객센터</h2>
            <p>고객 한 분 한 분의 의견에 귀 기울이는  <span class="redTxt">투썸플레이스</span>가 되겠습니다!</p>
        </section><!--//title_text_bg-->
        <section class="FAQ">
            <h2>TWOSOMEPLACE <span class="bTxt">FAQ</span></h2>
            <ul>
                <li class="click1">회원관련 FAQ<span class="space1">회원탈퇴를 하려면 어떻게 해야 하나요?</span><span class="click">click</span>
                    <p class="blind_txt">
                        투썸플레이스 홈페이지의 회원탈퇴는 회원님께서 원하시면 언제든지<br>자유롭게 탈퇴하실 수 있으며 홈페이지내 마이페이지에서 탈퇴하시면<br>즉시 탈퇴 하실 수 있습니다.
                    </p>
                </li>
                <li class="click2">서비스관련 FAQ<span class="space2">매장에서 일하려면 어떻게 해야하나요?</span><span class="click">click</span>
                    <p class="blind_txt">
                        투썸플레이스에서는 바리스타, 홀서비스등의 정규직, 파트타임직<br>인력을 매장별로 수시로 채용하고 있습니다. 투썸에서 채용을 하는<br>경우 홈페이지 채용 페이지를 통해 공지하오니 채용란을<br>참고하시기 바랍니다.
                    </p>
                </li>
                <li class="click3">서비스관련 FAQ<span class="space2">배송도 가능한가요?</span><span class="click_2">click</span>
                    <p class="blind_txt">
                        투썸플레이스에서는 고객편의를 위해 온라인 예약 서비스를<br>제공하고 있습니다만 배송시 제품의 파손의 우려로 인해<br>배송서비스는 하지 않고 있습니다. 예약하신 케익의 수령을 위해서는<br>매장으로 직접 방문해주시기 바랍니다. 일부 매장의 경우 매장과<br>가까운 지역의 단체주문시 배송서비스를 제공하기도 하니<br>단체주문의 경우 매장으로 직접 문의해주시기 바랍니다.
                    </p>
                </li>
            </ul>
        </section><!--//FAQ-->
        <div class="customer_opinion_wrap">
        <section class="customer_opinion">
           <h2>TWOSOMEPLACE 고객의 소리</h2>
            <form name="opinion_form" action="customer_opinion_ok.php" method="post">
                <fieldset class="form1">
                    <legend>고객의 소리</legend>
                    <p class="uname">
                        <label for="uname" class="uname_title"><span class="redTxt">*</span>이름</label>
                        <input type="text" name="uname" id="uname" class="uname_input">
                    </p>
                    <p class="email">
                        <label for="email_id" class="email_title">이메일</label>
                        <input type="text" name="email_id" id="email_id" class="email_id_input">
                        <label for="email_dns" class="email_c">@</label>
                        <input type="text" name="email_dns" id="email_dns" class="email_dns_input">
                        <select name="sel_dns" id="sel_dns" class="dns_select" onchange="change_email()">
                            <option value="">직접입력</option>
                            <option value="naver.com">네이버</option>
                            <option value="gmail.com">구글</option>
                            <option value="hanmail.net">다음</option>
                        </select>
                    </p>
                    <p class="mobile">
                        <label for="mobile" class="mobile_title"><span class="redTxt">*</span>휴대전화</label>
                        <input type="text" name="mobile" id="mobile" class="mobile_input">
                        <span class="form_text">“-”생략 숫자만 입력해주세요.</span>
                    </p>
                    <p class="store">
                        <label for="store" class="store_title"><span class="redTxt">*</span>매장명</label>
                        <input type="text" name="store" id="store" class="store_input">
                    </p>
                    <p class="opinion">
                        <label for="choice" class="opinion_title"><span class="redTxt">*</span>고객의 소리 선택</label>
                        <select name="choice" id="choice" class="opinion_select">
                            <option value="">고객의 소리 종류를 선택해주세요.</option>
                            <option value="아이디어 제안">아이디어 제안</option>
                            <option value="문의">문의</option>
                            <option value="칭찬">칭찬</option>
                            <option value="불만">불만</option>
                        </select>
                    </p>
                    <p class="title">
                        <label for="title" class="title_title"><span class="redTxt">*</span>제목</label>
                        <input type="text" name="title" id="title" class="title_input">
                    </p>
                    <p class="main_text">
                        <label for="main_text" class="main_text_title"><span class="redTxt">*</span>내용</label>
                        <textarea name="main_text" id="main_text" class="main_text_input" maxlength="500"></textarea>
                        <span class="form_text2">한글 500자 이내로 입력해주세요.</span>
                    </p>
                </fieldset>
                <fieldset class="form2">
                    <legend>개인 정보 수집 동의</legend>
                    <p class="apply_form_1">
                        1. 개인정보의 수집 및 이용 목적<br>문의사항 해결 및 불만처리의 원활한 의사소통을 목적으로 다음의 개인정보를 수집하고자 합니다.<br>2. 개인정보 수집 및 활용동의 <span class="redTxt">(필수)</span><br>목적: 문의사항 해결 및 불만처리 / 항목: 이름, 연락처 / 보유기간: 상담이 완료된 시점부터 3년간 보관<br>고객님께서는 개인정보 수집 동의에 거부할 수 있으며, 거부 시 고객센터 상담문의 서비스를 이용하실 수 없습니다.
                    </p>
                    <p>
                        <input type="checkbox" name="apply" id="apply"  value="Y" class="apply_box">
                        <label for="apply">동의 합니다.</label>
                    </p>
                    <p class="apply_form_2">
                        3. 개인정보 수집 및 활용동의 <span class="bTxt">(선택)</span><br>목적: 문의사항 해결 및 불만처리에 대한 이메일 회신 / 항목: 이메일주소 / 보유기간: 상담이 완료된 시점부터 3년간 보관<br>고객님께서는 개인정보 수집 동의에 거부할 수 있으며, 거부 시에도 고객센터 상담문의 서비스 이용 가능합니다.
                    </p>
                    <p class="apply_check" id="apply_second">
                        <input type="radio" name="apply_choice" id="apply_2" value="Y" class="apply_box">
                        <label for="apply_2">동의 합니다.</label>
                        <input type="radio" name="apply_choice" id="apply_2_not" value="N" class="apply_box">
                        <label for="apply_2_not">동의 하지 않습니다.</label>
                    </p>
                    <p class="form2_txt">
                        관련 문의사항은 고객센터 1577-4410으로 문의해주시기 바랍니다. 감사합니다.
                    </p>
                </fieldset>
                <button type="button" onclick="form_check()" class="btn">고객의 소리 접수</button>
            </form>
        </section><!--//customer_opinion-->
         <section class="notice">
            <h2>고객의 소리 안내사항</h2>
            <p>
                1. 답변은 고객님의 요청 시 이메일로 발송되거나, 로그인 후 확인하실 수 있습니다.<br>2. 욕설, 광고, 타인의 명예를 훼손하는 자료 등을 올리시거나 반복적으로 비난성 글을 올리시는<br>회원님의 게시물은 별도 통보 없이 임의 삭제되거나, 답변드리지 않을 수 있습니다.<br>3. 매장과 관련된 내용의 경우, 해당 가맹점에 작성자의 개인정보를 전달할 수 있습니다.<br>4. 접수해 주신 내용은 공정거래위원회 고시 소비자 분쟁 해결기준에 의거하여 처리됩니다.
            </p>
        </section><!--//notice-->  
        </div><!--//customer_opinion_wrap-->
        
    </main>
    
    
    <footer>
    
    <h2>사이트 이용안내</h2>
    
                     
    <section class="term">
    <h3>약관 및 정책</h3>
        <ul>
            <li class="term1"><a href="twosomeplace_recuit.php">리크루트</a></li>
            <li class="term2"><a href="twosomeplace_term_of_use.php">이용약관</a></li>
            <li class="term3"><a href="twosomeplace_privacy.php">개인정보처리방침</a></li>
            <li class="term4"><a href="twosomeplace_e-mail_collection">이메일무단수집거부</a></li>
            <li class="term5"><a href="twosomeplace_legal_notice">법적고지</a></li>
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
<?php

session_start(); 
$s_id = isset($_SESSION["uid"])? $_SESSION["uid"]:"";
$s_name = isset($_SESSION["uname"])? $_SESSION["uname"]:"";
$s_idx = isset($_SESSION["idx"])? $_SESSION["idx"]:"";

?>
<!DOCTYPE>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>투썸플레이스 개인정보처리방침</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/twosomeplace_privacy.css" type="text/css">
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
        <section class="term_of_use">
            <h2>투썸플레이스 개인정보처리방침</h2>
            <div>
                <h3>■ 개인정보 처리방침</h3>
                <p>투썸플레이스㈜는(이하 ‘당사’) 회원의 개인정보를 매우 중요시 하며, 정보통신망 이용촉진 및 정보보호 등에 관한 법률 및 개인정보보호법을 준수하고 있습니다. 당사는 개인정보처리방침을 통하여 회원이 제공한 개인정보가 어떠한 용도와 방식으로 이용되고 있으며 개인정보를 위해 어떠한 조치가 취해지고 있는지 알려드립니다.</p>
                <h3>1. 개인정보의 수집 및 이용 목적</h3>
                <p>① 당사는 회원에게 다양한 서비스를 제공하기 위해 아래와 같은 개인정보를 수집하고 있습니다. 단, 회원의 기본적 인권 침해의 우려가 있는 민감한 개인정보(인종 및 민족, 사상 및 신조, 출신지 및 본적지, 정치적 성향 및 범죄기록, 건강상태 및 성생활 등)와 주민등록번호는 법령상 근거 없이 불필요하게 수집하지 않습니다.<br><br>
                ② 개인정보 수집 및 활용 동의(필수사항)<br>목적(성인)<br>멤버십 필수 서비스 제공, 계약의 성립/유지/종료를 위한 본인 식별 및 실명확인, 회원에 대한 고지 사항 전달, 통합ID관리, 카드발급, 포인트 적립 및 사용, 포인트 정산, 고객센터 운영, 불량회원 부정이용 방지 및 비인가 사용방지, 혜택 및 서비스 개발을 위한 통계분석 및 연구조사, VIP 서비스 제공<br>항목(성인)<br>성명, 아이디, 비밀번호, 생년월일, 이메일 주소, 휴대전화번호, 본인확인기관을 통해 받는 결과값(CI)<br>보유기간(성인)<br>투썸플레이스㈜ 약관동의 철회 시 즉시 삭제, CJ ONE 탈퇴 시 탈퇴 후 30일까지<br>목적(미성년)<br>만 14세 미만 회원가입 처리를 위한 법정대리인 동의 여부 확인 및 추후 법정대리인 본인확인<br>항목(미성년)<br>만 14세 미만 회원의 법정대리인 본인확인 정보(성명, 본인확인기관을 통해 받는 결과값(CI))<br>보유기간(미성년)<br>투썸플레이스㈜ 약관동의 철회 시 즉시 삭제, CJ ONE 탈퇴 시 탈퇴 후 30일까지<br><br>③ 개인정보 수집 및 활용 동의(선택사항)<br>목적<br>사은/판촉행사 등 각종 이벤트, 행사 관련 정보안내 및 제반 마케팅 활동, 당사의 상품/서비스 안내 및 권유<br>항목<br>상기 목적에 따라 수집하는 개인정보 항목<br>보유기간<br>약관동의 철회 시 즉시 삭제, CJ ONE 탈퇴 시 탈퇴 후 30일까지<br><br>④ 서비스 이용 또는 사업처리 과정에서 생성 수집되는 각종정보<br>- 서비스이용기록, 접속로그, 쿠키, 결제기록, 이용정지기록, 스마트영수증 정보(상품 및 결제정보), 투썸오더(스마트오더) 정보(상품 및 결제정보) 등</p>
                <h3>2. 개인정보 수집 방법 및 수집에 대한 동의</h3>
                <p>① 개인정보 수집 방법<br>
                당사는 홈페이지, 고객센터 및CJ그룹 제휴사(CJ ONE), ‘쿠키(cookie)’에 의한 방법으로 개인정보를 수집합니다.<br>
                ※ CJ ONE : CJ 그룹 계열사간의 서비스를 하나의 패밀리서비스로 통합 관리 및 운영<br><br>
                ② 개인정보 수집에 대한 동의 절차<br>
                회원께서 개인정보처리방침과 서비스이용약관 등에 대해 『동의합니다.』버튼을 클릭하면 개인정보 수집에 대해 동의한 것으로 봅니다.<br><br>
                ③ 동의거부 권리와 불이익<br>
                회원은 서비스 제공 및 이용의 목적으로 개인정보를 제공하는 것에 동의하지 않을 수 있습니다.</p>
                <h3>3. 개인정보 제3자 제공에 대한 동의</h3>
                <p>① 당사는 회원의 개인정보를 ‘개인정보 수집, 이용목적 및 수집하는 개인정보 항목’에서 고지한 범위 내에서 이용하며, 동 범위를 초과하여 이용하거나 타인 또는 타기업, 기관에 제공하지 않습니다. 단 회원이 사전에 동의하거나, 서비스 제공에 따른 요금정산을 위하여 필요한 경우, 통계작성 학술연구 또는 시장조사를 위하여 필요한 경우로서 특정 개인을 알아볼 수 없는 형태로 가공하여 제공하는 경우, 법률에 특별한 규정이 있는 경우, 관계법률에서 정한 절차와 방법에 따라 수사기관이 개인정보 제공을 요구하는 경우는 별도로 제외됩니다. 현재 회원의 개인정보를 제공하고 있는 업체는 아래와 같습니다.</p>
                <h3>개인정보 제3자 제공 업체</h3>
                <p>당사는 개인정보의 처리와 관련하여 아래와 같이 업무를 위탁하고 있으며, 관계 법령에 따라 위탁계약 시 개인정보가 안전하게 관리될 수 있도록 필요한 사항을 규정하고 있습니다.<br>제3자<br>CJ ONE(CJ올리브네트웍스)<br>제공하는 개인정보항목<br>성명, 아이디, 비밀번호, 생년월일, 이메일 주소, 휴대전화번호, 본인확인기관을 통해 받는 결과값(CI), 회원등급<br>이용목적<br>- 웹사이트 로그인, CJ ONE포인트 적립 및 사용, 기타 CJ ONE멤버십 관련한 서비스 제공<br>- CJ ONE의 ‘개인정보 수집 및 활용’에 따른 이용<br>보유 및 이용기간<br>당사 서비스 이용약관 철회 또는 CJ ONE 회원 탈퇴 후 30일까지<br><br>② 회원은 CJ ONE 서비스 제공 및 이용 이외의 목적으로 제3자에게 본인의 개인정보를 제공하는 것에 동의하지 않을 수 있습니다.<br>③ 당사는 개인정보 제공업체에 변경이 생길 수 있습니다. 이에 대한 변경사항은 당사 인터넷 사이트를 통해 제공받는 자, 이용목적, 제공하는 개인정보항목, 보유 및 이용기간에 대하여 공지하고 별도의 고객동의를 득하여 업체에게 제공됩니다.<br>④ 회원은 기 동의한 개인정보 제3자 제공에 대한 철회를 요청할 수 있으며, 요청하는 창구는 아래와 같습니다. 단, 통합온라인서비스 가입 회원의 경우 CJ ONE에게로의 제3자 제공동의를 철회한 경우, 당사 온라인 사이트 이용이 중지되고, 회원과 관련된 기록들이 삭제되어 복구가 불가능하니 신중하게 요청하시기 바랍니다.<br>■ 홈페이지 : www.twosome.co.kr의 개인정보 수정 페이지<br>■ 이메일 : helpmaster@twosome.co.kr<br>■ 전 화 : 1577-4410</p>
                <h3>4. 개인정보처리의 위탁</h3>
                <p>당사는 개인정보의 처리와 관련하여 아래와 같이 업무를 위탁하고 있으며, 관계 법령에 따라 위탁계약 시 개인정보가 안전하게 관리될 수 있도록 필요한 사항을 규정하고 있습니다.<br>수탁업체	/ 위탁범위	/ 보유 및 이용기간<br>CJ올리브네트웍스(재위탁: 나이스정보통신) / - 회원정보 시스템 운영 - 회원정보 시스템 개발 - 마케팅 이벤트 제작 및 운영 - EDM 및 SMS 발송 - 온라인 쇼핑몰 결제 - 기프트카드 정산 및 고객안내/CS처리(재위탁) / 당사 서비스 이용약관 철회 또는 CJ ONE 회원 탈퇴 후 30일까지<br>㈜쿠프마케팅 / 모바일 쿠폰 및 경품 발송 / 당사 서비스 이용약관 철회 또는 CJ ONE 회원 탈퇴 후 30일까지<br>도모브로더 / SNS 운영 및 SNS 이벤트 경품 발송 / 당사 서비스 이용약관 철회 또는 CJ ONE 회원 탈퇴 후 30일까지<br>KCP(한국사이버결제) / 결제서비스 위탁 / 당사 서비스 이용약관 철회 또는 CJ ONE 회원 탈퇴 후 30일까지<br>CJ 텔레닉스 / 녹취데이터 보관 / 당사 서비스 이용약관 철회 또는 CJ ONE 회원 탈퇴 후 30일까지</p>
                <h3>5. 개인정보 보호 책임자 및 담당부서</h3>
                <p>① 회원의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 당사는 개인정보보호책임자를 두고 있습니다. 개인정보와 관련한 문의사항이 있으시면 아래의 개인정보보호책임자에게 연락 주시기 바랍니다. 회원의 문의사항에 신속하고 성실하게 답변해 드리겠습니다.<br>개인정보 보호 책임자<br>성명 : 장재호 / 소속 : 정보전략담당 / 직급 : 전무 / 이메일 주소 : helpmaster@twosome.co.kr / 전화번호 : 02-2058-6514 / ※ 개인정보 보호 담당부서로 연결됩니다.<br>개인정보 보호 담당부서<br>소속 : 정보전략담당 정보보호 담당자 / 이메일 주소 : helpmaster@twosome.co.kr / 전화번호 : 02-2058-6514<br>② 개인정보 열람청구 및 민원처리<br>당사는 귀하의 의견을 소중하게 생각하며, 귀하는 의문사항으로부터 언제나 성실한 답변을 받을 권리가 있습니다. 당사는 귀하와의 원활한 의사소통을 위해 민원처리 부서를 운영하고 있습니다. 민원처리 부서 연락처는 다음과 같습니다.<br>개인정보 열람청구 및 민원처리<br>소속 : 고객만족파트 / 이메일 주소 : helpmaster@twosome.co.kr / 전화번호 : 1577-4410 / 팩스 : 02-2058-6777</p>
                <h3>6. 정보 자동 수집 장치의 설치/운영 및 거부에 관한 사항</h3>
                <p>① 당사는 개인화되고 맞춤화된 서비스를 제공하기 위해서 이용자의 정보를 수시로 불러오는 ‘쿠키(cookie)’를 사용합니다. 쿠키는 웹사이트를 운영하는데 이용되는 서버가 이용자의 브라우저에게 보내는 아주 작은 텍스트 파일로 이용자 컴퓨터의 하드디스크에 저장되며, 쿠키는 개인을 식별하는 정보를 자동적/능동적으로 수집하지 않으며, 이용자는 언제든지 이러한 쿠키의 저장을 거부하거나 삭제할 수 있습니다.<br>② 당사는 다음과 같은 목적을 위해 쿠키를 사용합니다.<br>1) 이용자의 접속 빈도나 방문 시간 등을 분석하고 이용자의 취향과 관심분야를 파악하여 타겟(target) 마케팅 및 서비스 개편 등의 척도로 활용합니다.<br>2) 당사가 진행하는 각종 이벤트에서 귀하의 참여 정보 및 방문 회수를 파악하여 차별적인 응모 기회를 부여하고 개인의 관심 분야에 따라 차별화된 정보를 제공하기 위한 자료로 이용됩니다.<br>③ 귀하는 쿠키 설치에 대한 선택권을 가지고 있습니다. 따라서, 귀하는 웹 브라우저에서 옵션을 설정함으로써 모든 쿠키를 허용하거나, 쿠키가 저장될 때마다 확인을 거치거나, 아니면 모든 쿠키의 저장을 거부할 수도 있습니다. 귀하께서 쿠키 설치를 거부하셨을 경우 홈페이지 일부 서비스 제공에 어려움이 있을 수 있습니다.<br>④ 쿠키 설정을 거부하는 방법으로는<br>1) 쿠키 설치 허용 여부를 지정하는 방법 (Internet Explorer를 사용하고 있는 경우)<br>i. [도구] 메뉴에서 [인터넷 옵션]을 선택합니다.<br>ii. [개인정보 탭]을 클릭합니다.<br>iii. [개인정보보호 수준]을 설정하시면 됩니다.<br>2) 받은 쿠키를 보는 방법 (Internet Explorer를 사용하고 있는 경우)<br>i. [도구]메뉴에서 [인터넷 옵션]을 선택합니다.<br>ii. [일반 탭(기본 탭)]에서 [설정]을 클릭한 다음 [파일 보기]를 선택합니다.</p>
                <h3>7. 개인정보의 열람, 정정 방법</h3>
                <p>회원은 언제든지 등록되어 있는 회원의 개인정보를 열람하거나 정정하실 수 있습니다. 회원의 개인정보에 대한 열람 또는 정정을 하고자 할 경우에는 홈페이지 내 [개인정보관리] 또는 [개인정보변경]을 클릭하여 본인 확인 절차를 거치신 후 직접 열람 또는 정정하거나, 위 개인정보 관련 민원 처리 부서로 연락하시면 지체 없이 조치하겠습니다.<br>회원이 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까지 당해 개인정보를 이용 또는 제공하지 않습니다. 또한 잘못된 개인정보를 제3자에게 이미 제공한 경우에는 정정 처리결과를 제3자에게 지체 없이 통지하여 정정이 이루어지도록 조치하겠습니다.<br>다만, 다음의 경우에는 개인정보의 열람 및 정정을 제한할 수 있습니다.<br>- 본인 또는 제3자의 생명, 신체, 재산 또는 권익을 현저하게 해할 우려가 있는 경우<br>- 당해 서비스제공자의 업무에 현저한 지장을 미칠 우려가 있는 경우<br>- 법령에 위반하는 경우 등</p>
                <h3>8. 동의 철회(회원 탈퇴) 방법</h3>
                <p>회원은 회원가입 시 개인정보의 수집, 이용 및 제공에 대해 동의하신 내용을 언제든지 철회하실 수 있습니다. 동의철회(회원탈퇴)는 홈페이지 내 [회원탈퇴]를 클릭하여 본인 확인 절차를 거치신 후 직접 동의철회(회원탈퇴)를 하시거나, 위 개인정보 관련 민원 처리 부서로 연락하시면 지체 없이 회원의 개인정보를 파기하는 등 필요한 조치를 하겠습니다.<br>단, 동의철회(회원탈퇴) 시 당사 SMS 발송 처리 소요시간과 수신거부 시점과의 시간차로 인하여 SMS 수신이 이뤄질 수도 있으니 양해부탁드리며, 지체없이 위 필요한 조치가 이루어 질 수 있도록 하겠습니다.<br>단, 구)멤버십 회원과 패밀리포인트 회원은 해당 서비스가 종료됨에 따라 온라인회원으로만 관리되며, 온라인 회원 탈퇴방법으로 언제든지 철회하실 수 있습니다.</p>
                <h3>9. 개인정보의 보유기간 및 이용기간</h3>
                <p>(1) 당사는 개인정보의 수집목적 또는 제공받은 목적이 달성된 때에는 회원의 개인정보를 지체 없이 파기합니다. 다만, 다음 각 호의 경우 일정기간 동안 예외적으로 수집한 회원정보의 전부 또는 일부를 보관할 수 있습니다.<br>① 회원가입정보의 경우<br>- 수집한 회원 정보를 회원 탈퇴 후 30일간 보유<br>(30일의 유예기간은 30일 내 변심으로 인한 재가입 시 이전 아이디의 사용 및 회원님의 활동 데이터를 복구하기 위함이며, 무분별한 회원탈퇴 및 재가입으로 인한 피해를 줄이기 위함입니다.)<br>② 대금지급정보의 경우 : 대금의 완제일 또는 채권소멸시효기간이 만료된 때<br>③ 배송정보의 경우 : 물품 또는 서비스가 인도되거나 제공된 때<br>④ 설문조사, 이벤트 등의 목적을 위하여 수집한 경우: 당해 설문조사, 이벤트 등이 종료한 때<br>⑤ 탈퇴한 회원이 자신의 게재물에 대한 삭제를 요청 시 즉각 삭제 처리합니다.<br>(2) 위 예외 경우에도 불구하고 상법 및 ‘전자상거래 등에서 소비자보호에 관한 법률’ 등 관련 법령의 규정에 의하여 다음과 같이 일정기간 보유해야 할 필요가 있을 경우에는 관련 법령이 정한 기간 또는 다음 각 호의 기간 동안 회원정보를 보유할 수 있습니다.<br>상법 등 법령의 규정에 의하여 보존할 필요성이 있는 경우<br>① 계약 또는 청약철회 등에 관한 기록 : 5년<br>② 대금결제 및 재화 등의 공급에 관한 기록 : 5년 (전자상거래 등에서의 소비자 보호에 관한 법률의거)<br>③ 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년<br>- 기타 정당한 절차에 따라 보유기간을 미리 회원에게 고지하거나 명시한 경우 : 고지한 보유 기간까지<br>(3) 개인정보를 파기하는 때에는 다음과 같은 방법에 의합니다.<br>- 종이에 출력된 개인정보 : 분쇄기로 분쇄하거나 소각<br>- 전자적 파일형태로 저장된 개인정보 : 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제<br>(4) 장기 미이용 회원 개인정보 분리보관<br>- 당사는 다른 법령에서 별도의 기간을 정하고 있거나 고객의 요청이 있는 경우를 제외하면, 당사의 서비스를 1년 이상 재이용하지 아니하는 회원의 개인정보를 다른 회원의 개인정보와 분리하여 별도로 저장 및 관리합니다.<br>- 당사는 휴면 전환 30일 전까지 휴면 예정 회원에게 별도 분리 보관되는 사실 및 휴면 예정일, 별도 분리 보관하는 개인정보 항목을 이메일, 서면, 모사전송, 전화 또는 이와 유사한 방법 중 어느 하나의 방법으로 회원에게 알립니다.<br>- 장기 미이용 하여 별도 분리 보관된 고객이 추후 온·오프라인을 통한 상품 구매 등 기타 서비스를 이용할 경우 분리 보관된 계정은 복구됩니다.</p>
                <h3>10. 만 14세 미만 아동의 개인정보보호</h3>
                <p>① 만 14세 미만 아동은 법정대리인의 동의를 받아야 회원가입이 가능하며, 가입 시 개인정보를 수집하거나 제3자에게 제공하고자 하는 경우 법정대리인의 동의를 받습니다.<br>② 만 14세 미만 아동의 법정대리인은 아동의 개인정보에 대한 열람, 정정, 동의 철회를 요청할 수 있으며, 이러한 요청이 있을 경우 당사는 지체 없이 필요한 조치를 취합니다.<br>③ 만 14세 미만 아동의 정보를 제3자에게 제공하고자 하는 경우에는 법정대리인의 동의를 받습니다.<br>④ 당사는 법정대리인의 동의를 얻기 위하여 법정대리인의 성명, 본인확인기관을 통해 받는 결과값(CI) 등 필요한 최소한의 정보를 요구할 수 있습니다. 이때 수집된 법정대리인의 개인정보는 법정대리인의 동의 여부 확인 용도 외에는 이용하지 않습니다.</p>
                <h3>11. 이용자 및 법정 대리인 권리와 그 행사방법</h3>
                <p>① 회원 및 법정 대리인은 언제든지 등록되어 있는 자신 또는 만 14세 미만의 아동의 개인정보를 조회 하거나 수정 가능하며 회원 탈퇴를 통해 제공한 개인정보이용에 관한 동의를 철회할 수 있습니다. 회원 정보 조회, 변경 및 탈퇴 신청은 당사가 운영하는 홈페이지(www.twosome.co.kr) 또는 고객센터(1577-4410)를 통하여 할 수 있습니다.<br>② 회원이 개인정보의 오류에 대한 정정은 당사가 운영하는 홈페이지 또는 고객센터로 연락하여 수정하시면 됩니다.</p>
                <h3>12. 개인정보보호를 위한 기술적, 관리적 대책</h3>
                <p>당사는 개인정보를 취급함에 있어 개인정보가 분실, 누출, 변조 또는 훼손되지 않도록 다음과 같은 관리적 대책을 강구하고 있습니다.<br>① 개인정보취급자 인원의 최소화는 물론 각 직원 별 회원정보 접근 권한을 달리하고, 수시보안교육을 통해 본 방침의 준수를 강조하고 있습니다.<br>② 당사는 이용자 개인의 실수나 기본적인 인터넷의 위험성 때문에 일어나는 일들에 대해 책임을 지지 않습니다. 회원 개개인이 본인의 개인정보를 보호하기 위해서 자신의 아이디와 비밀번호를 적절하게 관리하고 그에 대한 책임을 져야 합니다.<br>③ 그 외 내부 관리자의 실수나 기술관리 상의 사고로 인해 개인정보의 상실, 유출, 변조, 훼손이 유발될 경우 당사는 즉각 고객께 사실을 알리고 적절한 대책과 보상을 강구할 것입니다.<br>④ 당사는 보안사고 및 고객님의 개인정보를 안전하게 보호하기 위해 내부망 내에 침입방지시스템 및 침입차단시스템을 갖추고 있습니다.<br>⑤ 당사는 128Bit SSL 암호화 알고리즘을 이용하여 네트워크 상의 개인정보를 안전하게 전송할 수 있는 방식을 채택하고 있습니다.<br>⑥ 당사는 백신프로그램을 이용하여 컴퓨터 바이러스에 의한 피해를 방지하기 위한 조치를 취하고 있습니다. 백신프로그램은 주기적으로 업데이트되며 갑작스런 바이러스가 출현할 경우 백신이 나오는 즉시 이를 제공함으로써 개인정보가 침해되는 것을 방지하고 있습니다.<br>⑦ 전산실은 통제구역으로 지정하여 출입을 엄격히 통제하고 있습니다.</p>
                <h3>13. 개인정보침해 관련 상담 및 신고</h3>
                <p>개인정보침해에 대한 신고·상담이 필요하신 경우에는 개인정보보호책임자에 전화 또는 서면, 이메일 주소로 연락하시거나, 한국인터넷진흥원(KISA)내 개인정보침해신고센터로 문의하시기 바랍니다.<br>[개인정보침해신고센터]<br>전화 : 118<br>URL : www.118.or.kr<br><br>[대검찰청 사이버수사과]<br>전화 : 1301<br>URL : www.spo.go.kr<br><br>[경찰청 사이버안전]<br>전화 : 182<br>URL : cyberbureau.police.go.kr<br><br>[개인정보 분쟁조정위원회]<br>전화 : 02-2100-2499<br>URL : www.kopico.go.kr</p>
                <h3>14. 정책 변경에 따른 공지의무</h3>
                <p>본 개인정보처리방침은 2018년 2월 1일에 제정되었으며 법령정책 또는 보안기술의 변경에 따라 내용의 추가삭제 및 수정이 있을 시에는 변경되는 개인정보처리방침을 시행하기 전에 투썸플레이스㈜가 운영하는 인터넷사이트의 첫 페이지를 통해 변경이유 및 내용 등을 공지합니다. 본 개인정보처리방침의 내용은 수시로 변경될 수 있으므로 사이트를 방문하실 때마다 이를 확인하시기 바랍니다.</p>
                <h3>15. 영상정보처리기기 운영방침</h3>
                <p>당사는 영상정보처리기기 운영방침을 통해 당사에서 처리하는 영상정보가 어떠한 용도와 방식으로 이용되고 있는지 알려드립니다.<br>① 영상정보처리기기의 설치 근거 및 설치 목적<br>당사는 개인정보보호법 제25조 제1항에 따라 다음과 같은 목적으로 영상정보처리기기를 설치, 운영합니다<br>- 시설안전 및 화재 예방<br>- 고객의 안전을 위한 범죄 예방<br>② 설치 대수, 설치 위치 및 촬영범위<br>설치 대수: 전국 직영매장 약 640대<br>설치 위치 및 촬영 범위: 설치 위치 : 각 직영매장 내 주요시설(※ 각 직영매장 내 CCTV 안내판 부착) / 촬영 범위 : 매장 내 주요 시설물<br>③ 관리책임자 및 접근권한자<br>고객의 영상정보를 보호하고 개인영상정보와 관련한 불만을 처리하기 위하여, 아래와 같이 개인영상정보 관리책임자를 두고 있습니다.<br>관리책임자: 이름 : 장재호 / 직책 : 전무 / 연락처 : 02-2058-6518 / ※ 개인정보 보호 담당부서로 연결됩니다<br>접근권한자: 이름 : 각 매장 점장 / 직책 : 점장 / 연락처 : 각 직영매장 전화번호 / ※ 연락처 : 홈페이지 > 매장정보 > 매장찾기<br>④ 영상정보의 촬영시간, 보관기간, 보관장소 및 처리방법<br>촬영시간: 24시간 / 보 관 기 간: 촬영일로부터 약 30일 / 보 관 장 소: 점포 사무실 내 특정장소<br>- 처리방법 : 개인영상정보의 목적 외 이용, 제3자 제공, 파기, 열람 등 요구에 관한 사항을 기록관리하고, 보관기간 만료 시 복원이 불가능한 방법으로 영구 삭제(출력물의 경우 파쇄 또는 소각)합니다.<br>⑤ 개인영상정보의 확인 방법 및 장소에 관한 사항<br>개인영상정보 보호책임자에게 미리 연락하면 당사가 지정하는 특정 장소에서 확인이 가능합니다.<br>⑥ 정보주체의 영상정보 열람 등 요구에 대한 조치<br>개인영상정보에 관하여 열람 또는 존재 확인, 삭제를 원하는 경우 언제든지 당사에 요구하실 수 있습니다. 단, 귀하가 촬영된 개인영상정보 및 명백히 정보주체의 급박한 생명, 신체, 재산의 이익을 위하여 필요한 개인영상정보에 한정됩니다.<br>당사는 개인영상정보에 관하여 열람 또는 존재 확인, 삭제를 요구한 경우 해당 요구를 검토하여 지체없이 필요한 조치를 취할 것이며 불가피하에 해당 요구를 거부하는 경우에는 그 사유를 통지하도록 하겠습니다.<br>⑦ 영상정보의 안전성 확보조치<br>당사는 폐쇄 네트웍 또는 방화벽 등의 보안시스템을 통하여 고객의 영상정보를 보호하고 있습니다. 또한 개인영상정보 보호를 위하여 해당 영상정보를 취급하는 인원을 최소한으로 제한하고 있으며 지속적인 교육을 시행하고 있습니다. 개인영상정보의 임의적인 취급을 제한하기 위하여 개인영상정보의 열람 시 열람 목적, 열람자, 열람 일시 등을 기록, 관리하고 있으며 영상정보의 보관장소는 보안구역으로 정하고 사전 승인된 인력 이외에는 출입을 통제하고 있습니다.<br>⑧ 영상정보처리기기 운영·관리 방침 변경에 관한 사항<br>이 영상정보처리기기 운영·관리 방침은 2012년 8월 13일에 제정되었으며 법령, 정책 또는 보안기술의 변경에 따라 내용의 추가, 삭제 및 수정이 있을 시에는 시행하기 최소 7일전에 당사 홈페이지를 통해 변경사유 및 내용 등을 공지하도록 하겠습니다.<br>- 공고일자 : 2020년 05월 20일 / 시행일자 : 2020년 05월 27일<br><br>개인정보 처리방침(v1.2) 2020/03/20 제정<br>개인정보 처리방침(v1.1) 2019/01/17 제정<br>개인정보 처리방침(v1.0) 2018/02/01 제정</p>
            </div>
        </section>
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
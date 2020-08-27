<?php

session_start(); 
$s_id = isset($_SESSION["uid"])? $_SESSION["uid"]:"";
$s_name = isset($_SESSION["uname"])? $_SESSION["uname"]:"";
$s_idx = isset($_SESSION["idx"])? $_SESSION["idx"]:"";

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>투썸플레이스 창업정보절차</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/twosomeplace_franchise_opensystem.css" type="text/css">
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
    <div class="opensystem_bg"></div>
    <section class="opensystem">
    <h2>투썸플레이스 파트너분들을 환영합니다!</h2>
    <p class="title_sub">투썸플레이스 창업절차를 자세히 알려드립니다.</p>
    <ul>
        <li class="opensystem_1">
            <p class="open_text">01. 가맹점 창업 문의</p>
            <p class="open_subtext">본사홈페이지 또는<br>전화 (080-723-2323)신청 및 접수</p>
        </li>
        <li class="opensystem_2">
            <p class="open_text">02. 접수 및 담당자 개별 상담</p>
            <p class="open_subtext">회사소개, 투썸플레이스<br>프렌차이즈 사업 설명</p>
        </li>
        <li class="opensystem_3">
            <p class="open_text1">03 . 후보지선정, 상권분석 본사 개설 승인</p>
            <p class="open_subtext">사업 타당성 분석<br>가맹점신청서 접수 / 정보공개서 제공</p>
        </li>
        <li class="opensystem_4">
            <p class="open_text">04. 가맹계약 체결</p>
            <p class="open_subtext">계약 기간 3년 계약만료 후 1년단위 재계약<br>추가 비용 없음</p>
        </li>
        <li class="opensystem_5">
            <p class="open_text">05. 가맹금/보증금/교육비 입금</p>
            <p class="open_subtext">가맹금 2,000만원 / 보증금 1,000만원<br>교육비 150만원</p>
        </li>
        <li class="opensystem_6">
            <p class="open_text2">06. 시공 : 점포실측,<br>디자인 결정후 공사진행</p>
            <p class="open_subtext1">실측 후  설계도면 작성, 점주님과 최종협의<br>시공업체 선정(입찰), 공사계약<br>공사기간 약 25일~35일 예상</p>
        </li>
        <li class="opensystem_7">
            <p class="open_text">07. 직원채용 및 교육</p>
            <p class="open_subtext">본사와 점주님의 협약 후 직원 면접 및 채용<br>점주님 및 직원교육 (10일: 이론,실습 교육)</p>
        </li>
        <li class="opensystem_8">
            <p class="open_text3">08. 인,허가 및 영업준비</p>
            <p class="open_subtext">각종 인/허가 증명서 발급<br>카드승인 및 영업 관련 모든 사항 점검<br>OPEN준비 (리허설)</p>
        </li>
        <li class="opensystem_9">
            <p class="open_text">09. 점포 오픈</p>
            <p class="open_subtext">오픈 프로모션 진행<br>투썸플레이스 영업 시작</p>
        </li>
    </ul>
    </section><!--//opensystem-->
    <section class="opensystem_info">
    <h2>창업정보</h2>
    <section class="info_1">
    <h3>- 창업조건 -</h3>
    <ul>
        <li class="store_term1">
            <p class="info1_txt">창업 가능 상권</p>
            <p class="info1_subtxt">상업지, 오피스, 역세권,<br>대학가, 대형 집객시설물 등</p>
        </li>
        <li class="store_term2">
            <p class="info1_txt">창업 기준 면적</p>
            <p class="info1_subtxt">1층 : 148.7㎡(45평)<br>전면 8M 이상</p>
        </li>
        <li class="store_term3">
            <p class="info1_txt">기본 시설 사향</p>
            <p class="info1_subtxt">전기 : 70Kw 이상<br>용도 : 근린생활시설 1종 또는 2종<br>기타 : 급, 배수 / 급, 배기 가능</p>
        </li>
    </ul>
    </section><!--//info_1-->
    <section class="info_2">
    <h3>- 예상투자비용 -</h3>
    <div class="info2_bordertop"></div>
    <ul>
        <li class="investmentcosts1">
            <p class="info2_txt1">가맹비</p>
            <p class="info2_txt2">20,000 (단위:천원)</p>
            <p class="info2_txt3">소멸성<br>(영업표시의 사용 및<br>영업관리, 지도의 대가)</p>
        </li>
        <li class="investmentcosts2">
            <p class="info2_txt1">보증금</p>
            <p class="info2_txt2">10,000 (단위:천원)</p>
            <p class="info2_txt3">계약 종료시 반환<br>(물품대금지급 보증금,<br>VAT 없음)</p>
        </li>
        <li class="investmentcosts3">
            <P class="info2_txt1">교육비</P>
            <P class="info2_txt2">1,500 (단위:천원)</P>
            <P class="info2_txt3">이론, 실습 교육 (10일)</P>
        </li>
        <li class="investmentcosts4">
            <p class="info2_txt1">기획 관리비</p>
            <p class="info2_txt2">5,000 (단위:천원)</p>
            <p class="info2_txt3">인테리어 설계비</p>
        </li>
        <li class="investmentcosts5">
            <p class="info2_txt1">인테리어</p>
            <p class="info2_txt2">83,250 ~ 94,050 (단위:천원)</p>
            <p class="info2_txt3">45평기준<br>(185만원/평 ~ 209만원/평)</p>
        </li>
        <li class="investmentcosts6">
            <p class="info2_txt1">간판/사인물</p>
            <p class="info2_txt2">12,000 (단위:천원)</p>
            <p class="info2_txt3">전면 15M 점포 기준<br>(1면 추가시 400만원 추가<br>1M당 100만원 추가)</p>
        </li>
        <li class="investmentcosts7">
            <p class="info2_txt1">가구</p>
            <p class="info2_txt2">33.000 ~ 35,000 (단위:천원)</p>
            <p class="info2_txt3">의자, 테이블 등</p>
        </li>
        <li class="investmentcosts8">
            <p class="info2_txt1">장비/설비류</p>
            <p class="info2_txt2">69,700 ~ 77,000 (단위:천원)</p>
            <p class="info2_txt3">커피 머신, 케익 쇼케이스,<br>냉장고 등</p>
        </li>
    </ul>   
    </section><!--//info_2-->
    <div class="bordertop"></div>
    <p class="opentxt1">합계 : 234,450 ~ 254,550 (단위: 천원)  /  45평, 전면15M 점포 기준</p>   
    <p class="opentxt2">* 별도공사: 철거공사, 화장실공사, 외부테라스공사, 계단공사, 전기증설(80KW), 용도변경 별도,냉난방기<br>* 점주(자체)공사 시 SI관리비 평당 15만원<br>* 상기 투자비는 매장형태 및 상황에 따라 변동될 수 있습니다.</p> 
    <p class="opentxt3">본사 홈페이지 또는 전화 (080-723-2323)로 신청하시면창업희망지역의 점포개발담당자와 연결하여 상담드리겠습니다!</p>
    </section><!--//opensystem_info-->
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
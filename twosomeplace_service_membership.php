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
    <title>투썸플레이스 멤버십&amp;제휴카드</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/twosomeplace_service_membership.css" type="text/css">
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
    <div class="membership_bg"></div>
    <div class="membership_wrap">
    <section class="cj_intro">
    <h2>멤버십 &amp; 제휴카드</h2>
    
    <h3>CJ ONE</h3>
        <p>CJ ONE은 문화, 외식, 쇼핑, 엔터테인먼트 등 CJ의 다양한 라이프스타일 브랜드가 <span class="cj_intro_text">하나의 멤버십 서비스로 통합</span>되어<br>한 장의 카드로 포인트를 적립/사용하고 CJ에서 제공하는 다양한 혜택을 함께 즐길 수 있는<br>CJ의 새로운 <span class="cj_intro_text">통합멤버십 서비스</span>입니다.</p>
    </section><!--//cj_intro-->
    <section class="cj_about">    
    <h3>CJ ONE 알아보기</h3>
    <ul class="boder_box">
        <li><a href=#membership1 class="btn1">CJONE 혜택보기</a></li>
        <li><a href="twosomeplace_join.php" class="btn2">CJONE 가입하기</a></li>
        <li><a href=#membership2 class="btn3">제휴카드 알아보기</a></li>
    </ul>
    </section><!--//cj_about-->
    <section class="cjone_sevice">
    <h4 id="membership1">CJONE 혜택보기</h4>
    <dl class="cjone_service_border">
       
        <div class="point_j_wrap">
        <dt class="point_j">포인트 적립</dt>
        <div class="point_j_text">
        <dd><span class="bold">· 결제금액의 2% 적립</span><br><br>-모바일 교환권 사용 및 제휴/할인 시, 0.5% 적립</dd>
        <dd>·영수증 날짜 기준, 결제 당일에 한해 사후 적립 가능 (기존 결제 취소 후 적립)</dd>
        <dd>·동일매장 기준 1일 최대 5회까지 적립 가능 (선적립 카드는 최대 3회)</dd>
        <dd>·일부 특수점포(마트/병원/휴게소/공항 등)는 CJ ONE 포인트 적립/사용 불가</dd>
        <dd>·모바일 교환권 및 제휴/할인을 포함하여 결제 시 전체 결제금액의 0.5% 적립</dd>
        </div><!--//point_text_wrap-->
        </div><!--//point_j_wrap-->
        
        <div class="point_s_wrap">
        <dt class="point_s">포인트 사용</dt>
        <div class="point_s_text">
        <dd><span class="bold">· 1,000포인트 이상 보유시, 10포인트 단위로 현금처럼 사용</span><br><br>1포인트는 1원의 가치를 지니며, 투썸플레이스에서는<br>1,000포인트 이상 보유시 10포인트 단위로 현금처럼 사용 가능합니다.</dd>
        <dd>·포인트 사용시, 반드시 CJ ONE 카드(모바일카드 또는 APP 가능)를<br>제시하셔야 하며, 10,000 포인트 이상 사용 시에는 CJ ONE 멤버십 카드<br>비밀번호 4자리를 입력해야 포인트 사용이 가능합니다.<br>(비밀번호는 CJ ONE 홈페이지-나의 카드에서 입력/설정 가능)</dd>
        </div><!--//point_s_text-->
        </div><!--//point_s_wrap-->
        
        <div class="bonus_p_wrap">
        <dt class="bonus_p">보너스 포인트 추가적립</dt>
        <div class="bonus_p_text">
        <dd><span class="bold">· 기본 적립 포인트의 50% 또는 100% 추가 적립</span></dd><br>
            <dd>- 매월 CJ ONE 제휴 브랜드를 4개 이용하시면,<br>해당 월 총 적립 포인트의 50%를 보너스 포인트로 추가 적립해드립니다.<br><span class="text_s">(예 : 투썸플레이스, CGV, 올리브영, 오쇼핑에서 한 달동안 총 1,000 포인트 적립시, 익월에 500 포인트 추가 적립.)</span></dd>
            <dd>- 매월 CJ ONE 제휴 브랜드를 5개 이상 이용하시면, 해당 월 총 적립 포인트의<br>100%를 보너스 포인트로 추가 적립해드립니다.<br><span class="text_s">(예 : 투썸플레이스, CGV, 올리브영, 오쇼핑, 엠넷에서 한 달동안 총 1,000 포인트 적립시, 익월에 1,000 포인트 추가 적립.)</span></dd>
        </div><!--//bonus_p_text-->
        </div><!--//bonus_p_wrap-->
        
        <div class="cp_service_wrap">
        <dt class="cp_service">쿠폰 서비스</dt>
        <div class="cp_service_text">
        <dd><span class="bold">· 내가 사용할 수 있는 쿠폰이 CJ ONE 카드 한 장에 쏘옥~</span><br><br>CJ ONE 회원이 되시면 쿠폰 찾아 여기저기 다닐 필요 없이 CJ ONE 제휴 브랜드의 쿠폰을<br>카드 한 장에 담아드립니다.</dd>
        <dd>·단, 반드시 CJ ONE 카드를 제시하셔야 쿠폰 사용이 가능합니다.(모바일카드 또는 APP 가능)</dd>
        </div><!--//cp_service_text-->
        </div><!--//cp_service_wrap-->
        
        <div class="point_p_wrap">
        <dt class="point_p">포인트 선물하기</dt>
        <div class="point_p_text">
        <dd><span class="bold">· 포인트를 함께 모아 사용하세요!</span><br><br>친구, 가족, 연인과 함께 CJ ONE 회원이 되어<br>CJ ONE 제휴 브랜드를 이용하시고, 포인트를 선물하거나, 선물받은<br>포인트를 내가 모은 포인트와 함께 사용하세요!</dd>
        </div><!--//point_p_text-->
        </div><!--//point_p_wrap-->
        
        <div class="culture_wrap">
        <dt class="culture">문화공연과 이벤트</dt>
        <div class="culture_text">
        <dd><span class="bold">· CJ ONE 회원 전용 문화 공연 및 다양한 이벤트 혜택이 가득~</span></dd>
        </div><!--//culture_text-->
        </div><!--//culture_wrap-->
    </dl>
    </section><!--//cjone_sevice-->
    <section class="cjone_card">
    <p class="cjone_card_text1">CJ ONE 제휴 브랜드의 각 매장에서 카드를 발급 받으실 수 있습니다.</p>
    <a href="http://cjone.com/cjmweb/point-card/guide.do" class="btn4">CJONE 카드 발급매장찾기</a>
        <p class="cjone_card_text2">매장에서 발급 받으신 카드는 <span class="bold">CJ 홈페이지에서 회원가입 후 카드 등록하세요!</span><br>홈페이지에 등록되지 않은 카드는 포인트를 사용하실 수 없습니다.</p>
    <div class="cjone_card_btn">
    <a href="http://cjone.com/cjmweb/point-card/guide.do" class="btn5">CJONE 모바일 카드 발급</a>
    <a href="http://cjone.com/cjmweb/point-card/guide.do" class="btn6">CJONE 카드 등록하기</a>
    </div><!--//cjone_card_btn-->
    </section>
    <section class="cooperate_card">
    <h4 id="membership2">제휴카드</h4>
    <section class="cooperate_card_subscription">
    <p>CJONE 제휴카드</p>
    <a href="http://cjone.com/cjmweb/point-card/branded-card.do" class="btn7">카드 신청하기</a>
    </section><!--//cooperate_card_subscription-->
    <section class="cooperate_card_about">
    <dl>
        <div class="card_1">
        <dt>CJ ONE 삼성카드</dt>
        <dd><span class="card_bold">15% 할인 + CJ ONE 포인트 1% 적립</span><br>월 5회 / 1회 최대 3만원 (전원 실적 20만원 이상)<br>할인 횟수 초과 시 기본 적립률 (2%)의 2배 적립<br>할인 한도는 15% 할인 브랜드 통합 기준</dd>
        </div><!--//card_1-->
        
        <div class="card_2">
        <dt>CJ ONE 신한카드</dt>
        <dd><span class="card_bold">15% 할인 + CJ ONE 포인트 1% 적립</span><br>월 5회 / 1회 최대 3만원 (전원 실적 20만원 이상)<br>할인 횟수 초과 시 기본 적립률 (2%)의 2배 적립<br>할인 한도는 15% 할인 브랜드 통합 기준</dd>
        </div><!--//card_2-->
        
        <div class="card_3">
        <dt>CJ ONE 신한 체크카드</dt>
        <dd><span class="card_bold">10% 현금 캐시백</span><br>일 1회, 월 5회 / 1회 최대 1천원 캐시백<br>한도는 투썸플레이스 / 뚜레쥬르 통합 기준</dd>
        </div><!--//card_3-->
        
        <div class="card_4">
        <dt>CJ ONE 하나 체크카드</dt>
        <dd><span class="card_bold">적립한 CJ ONE 포인트의 2배 캐시백</span><br>1만원 이상 결제 시 / 월 최대 1만원 캐시백<br>전월 실적 20만원 이상 시, 캐시백 혜택 제공<br>2만원 당 100원 캐시백 (2배 캐시백과 중복 적용)<br>전월 실적 20만원 이상 시, 캐시백 혜택 제공</dd>
        </div><!--//card_3-->
        
    
        <div class="card_5">
        <dt>The CJ 카드</dt>
        <dd><span class="card_bold">10% 할인</span><br>구매금액 및 할인 횟수 제한 없음</dd>
        </div><!--//card_4-->
        
        <div class="card_6">
        <dt>현대카드</dt>
        <dd><span class="card_bold">20% M포인트 사용</span><br>포인트 부족 시, 보유분만큼만 차감</dd>
        </div><!--//card_5-->
        
        <div class="card_7">
        <dt>삼성카드</dt>
        <dd><span class="card_bold">100% 삼성카드 포인트 사용</span><br>포인트 부족 시, 보유분만큼만<br>차감 및 포인트 사용분 적립 불가</dd>
        </div><!--//card_6-->
        
        <div class="card_8">
        <dt>KB국민 스타카드</dt>
        <dd><span class="card_bold">15% 할인</span><br>엔터테인먼트 할인 맞춤서비스 선택회원에 한함<br>월 2회, 연간 20만원 한도 내</dd>
        </div><!--//card_7-->
        
        <div class="card_9">
        <dt>신한 Lady 카드</dt>
        <dd><span class="card_bold">20% 할인</span><br>월 2회, 연 6회 통합 할인 횟수 적용<br>및 1회 구매금액 10만원 내 할인<br>전월 실적 30만원 이상 시 혜택 제공</dd>
        </div><!--//card_8-->
    </dl>
    </section><!--//cooperate_card_about-->
    </section><!--//cooperate_card-->
    </div><!--//membership_wrap-->
    
   </main><!--//content-->
    
    
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
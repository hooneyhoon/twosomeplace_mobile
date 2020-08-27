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
    <title>투썸플레이스</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/twosomeplace_main.css" type="text/css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.js"></script>
    <script type="text/javascript">
    //logout
    function logout_check(){
        var q = confirm("정말 로그아웃 하시겠습니까?");
            
        if(q){
                location.href = "logout.php";
            };
    };
    
    
    $(document).ready(function(){
        
        //gnb
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
        
        //main img
        $('.slider_fade').bxSlider({ 
          mode: "fade",
          auto:true
        });
        
        //bestseller
        var coffee = $('.bestseller_coffee_slider').bxSlider({ 
            mode: "horizontal",
            auto:true,
            minSlides:5,
            maxSlides:5,
            moveSlides:1,
            slideWidth:180,
            autoStart:true,
            autoHover:true
        });
        
        var beverage = $('.bestseller_beverage_slider').bxSlider({ 
            mode: "horizontal",
            auto:true,
            minSlides:5,
            maxSlides:5,
            moveSlides:1,
            slideWidth:180,
            autoStart:true,
            autoHover:true
        });
        
        var food = $('.bestseller_food_slider').bxSlider({ 
            mode: "horizontal",
            auto:true,
            minSlides:5,
            maxSlides:5,
            moveSlides:1,
            slideWidth:180,
            autoStart:true,
            autoHover:true
        });
        
        var cake = $('.bestseller_cake_slider').bxSlider({ 
            mode: "horizontal",
            auto:true,
            minSlides:5,
            maxSlides:5,
            moveSlides:1,
            slideWidth:180,
            autoStart:true,
            autoHover:true
        });
        $('.bestseller1').click(function(){
            $('.bestseller_coffee').show();
            $('.bestseller_beverage').hide();
            $('.bestseller_food').hide();
            $('.bestseller_cake').hide();
            
            coffee.reloadSlider();
        });
        $('.bestseller2').click(function(){
            $('.bestseller_coffee').hide();
            $('.bestseller_beverage').show();
            $('.bestseller_food').hide();
            $('.bestseller_cake').hide();
            
            beverage.reloadSlider();
        });
        $('.bestseller3').click(function(){
            $('.bestseller_coffee').hide();
            $('.bestseller_beverage').hide();
            $('.bestseller_food').show();
            $('.bestseller_cake').hide();
            
            food.reloadSlider();
        });
        $('.bestseller4').click(function(){
            $('.bestseller_coffee').hide();
            $('.bestseller_beverage').hide();
            $('.bestseller_food').hide();
            $('.bestseller_cake').show();
            
            cake.reloadSlider();
        });
       
    });
        
    $( document ).ready(function() {
    cookiedata = document.cookie; 
 
    if ( cookiedata.indexOf("ncookie=done") < 0 ){ 
        document.getElementById('popup').style.display = "block";    //  팝업창 아이디
    } else {
        document.getElementById('popup').style.display = "none";    // 팝업창 아이디
    }
});
function setCookie( name, value, expiredays ) { 
    var todayDate = new Date(); 
    todayDate.setDate( todayDate.getDate() + expiredays );
    document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
} 
function closeWin() { 
    document.getElementById('popup').style.display = "none";    // 팝업창 아이디
}
function todaycloseWin() { 
    setCookie( "ncookie", "done" , 1 );     // 저장될 쿠키명 , 쿠키 value값 , 기간( ex. 1은 하루, 7은 일주일)
    document.getElementById('popup').style.display = "none";    // 팝업창 아이디
}
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
    
    <!--공지팝업-->
    <aside id="popup">
        <h2>공지사항</h2>
        <p>본 사이트는 상업적 목적이 아닌<br><span class="pop_text">개인 포트폴리오 용도</span>로 제작되었습니다.<br> 홈페이지의 일부 내용과 기타 이미지 등은<br> 그 출처가 따로 있음을 밝힙니다.</p>
        <div class="pop_form">
        <a href="#none"  onclick="todaycloseWin();" title="오늘 하루 이창을 열지않음" class="f_close"> [오늘하루 이창을 열지않음]</a>
        <a href="#none"  onclick="closeWin();" title="닫기" class="o_close"> [닫기] </a>
        </div>
    </aside><!--//pop_up-->
    
    <main id="content">
    <div class="skipMenu">
    <a href="#banner"><span>투썸소식 바로가기</span></a>
    <a href="#product"><span>투썸제품 바로가기</span></a>
    <a href="#bestseller"><span>베스트셀러 바로가기</span></a>
    <a href="#franchise"><span>창업정보 바로가기</span></a>
    <a href="#mobileapp"><span>모바일app 바로가기</span></a>
    <a href="#class"><span>케이크클래스 바로가기</span></a>
    </div>
    
    <section class="main_banner" id="banner">
        <h2>투썸플레이스 소식</h2>
            <ul class="slider_fade">
                <li class="spring"><a href="javascript:void(0);">봄시즌 신제품 출시안내</a></li>
                <li class="yogiyo"><a href="event_yogiyo.php">요기요주문 최대 3000원 할인행사</a></li>
                <li class="mornignset"><a href="event_morning.php">투썸모닝세트 5+1스탬프행사</a></li>
                <li class="thanks"><a href="event_thanks.php">감사의달5월,투썸thanks페어링행사</a></li>
            </ul>
    </section><!--//main_banner-->
    
    <div class="product_introduce_wrap">
    <section class="product_introduce" id="product">
        <h2>투썸플레이스 제품소개</h2>
        <section class="product_introduce2">
        <p class="product_introduce_title">A-List 핸드드립커피</p>
        <p class="product_introduce_text">아로마노트,블랙그라운드,디카페인커피까지<br /> 가정이나 회사에서 간편하게<br /> 투썸플레이스 원두를 즐겨보세요!</p>
        <a class="bt1" href="twosomeplace_menu_md.php">제품 자세히보기</a>
        </section>
    </section><!--//product_introduce-->
    </div><!--//product_introduce_wrap-->
    
    <div class="bestseller_wrap">
    <section class="bestseller" id="bestseller">    
    <h2 class="twosome_bestseller">투썸플레이스 베스트셀러</h2>
    <p class="bestseller_text">투썸플레이스의<br />인기있는 메뉴들을 즐겨보세요!</p>
        <ul class="bestseller_title">
            <li class="bestseller1"><a href="javascript:void(0);">COFFEE</a></li>
            <li class="bestseller2"><a href="javascript:void(0);">BEVERAGE</a></li>
            <li class="bestseller3"><a href="javascript:void(0);">FOOD</a></li>
            <li class="bestseller4"><a href="javascript:void(0);">WHOLECAKE</a></li>
        </ul>
 
    <section class="bestseller_coffee">
            <h3>커피</h3>
            <ul class="bestseller_coffee_slider">
                <li class="bestseller_coffee1"><a href="twosomeplace_menu_coffee.php"><span>아이스아인슈페너</span>
                    진한 아메리카노와<br />버터스카치 크림이<br />조화로운 아인슈페너</a>
                </li>
                <li class="bestseller_coffee2"><a href="twosomeplace_menu_coffee.php"><span>아이스롱블랙</span>
                    진하고 부드러운 커피<br />플레이버를 느낄 수 있는<br />에스프레소음료</a>
                </li>
                <li class="bestseller_coffee3"><a href="twosomeplace_menu_coffee.php"><span>아이스카라멜마끼아또</span>
                    라떼에 바닐라와<br />카라멜소스의 조화로<br />시원 달콤한 에스프레소음료</a>
                </li>
                <li class="bestseller_coffee4"><a href="twosomeplace_menu_coffee.php"><span>아이스바닐라라떼</span>
                    달콤한 바닐라 향과<br />풍부한 에스프레소의<br />부드러운 라떼</a>
                </li>
                <li class="bestseller_coffee5"><a href="twosomeplace_menu_coffee.php"><span>바닐라아포카토</span>
                    바닐라 아이스크림<br />에스프레소의 조합의<br />시그니쳐 음료</a>
                </li>
                <li class="bestseller_coffee6"><a href="twosomeplace_menu_coffee.php"><span>콜드브루</span>
                    깊은 풍미와 단맛이<br />느껴지는 부드럽고<br />깔끔한 콜드브루 커피</a>
                </li>
                <li class="bestseller_coffee7"><a href="twosomeplace_menu_coffee.php"><span>오늘의커피</span>
                    투썸의 원두를<br />드립 방식으로<br/>추출한 커피</a>
                </li>
                <li class="bestseller_coffee8"><a href="twosomeplace_menu_coffee.php"><span>시그니처라떼</span>
                    생크림과 우유의<br />고소함이 잘 어울리는<br />시그니처 라떼</a>
                </li>
            </ul>
    </section><!--//bestseller_coffee-->


    <section class="bestseller_beverage">
          <h3>음료</h3>
           <ul class="bestseller_beverage_slider">
               <li class="bestseller_beverage1"><a href="twosomeplace_menu_beverage.php"><span>키위바나나주스</span>
                   그린 키위와<br />바나나가<br />블렌딩 된 주스</a>
               </li>
               <li class="bestseller_beverage2"><a href="twosomeplace_menu_beverage.php"><span>레몬셔벗에이드</span>
                   샴페인향,라임,민트로<br />시원하고 청량하게<br />즐기는 에이드</a>
               </li>
               <li class="bestseller_beverage3"><a href="twosomeplace_menu_beverage.php"><span>자몽에이드</span>
                   자몽의 상큼함과<br />청량감이 입안 가득<br />느껴지는 에이드</a>
               </li>
               <li class="bestseller_beverage4"><a href="twosomeplace_menu_beverage.php"><span>스트로베리피치프라페</span>
                   딸기와 복숭아의<br />상큼함이 어우러진<br />스무디 타입 음료</a>
               </li>
               <li class="bestseller_beverage5"><a href="twosomeplace_menu_beverage.php"><span>모카칩프라페</span>
                   모카향이 나면서<br />달콤하고 향긋한<br />스무디 타입 음료</a>
               </li>
               <li class="bestseller_beverage6"><a href="twosomeplace_menu_beverage.php"><span>망고바나나라떼</span>
                   망고와 바나나의<br />조화를 느낄 수 있는<br />부드러운 라떼</a>
               </li>
               <li class="bestseller_beverage7"><a href="twosomeplace_menu_beverage.php"><span>바닐라쉐이크</span>
                   바닐라 아이스크림<br />과 우유를 블렌딩한<br />달콤한 쉐이크</a>
               </li>
               <li class="bestseller_beverage8"><a href="twosomeplace_menu_beverage.php"><span>오렌지에이드</span>
                   오렌지를 그대로<br />갈아 넣은 상큼한<br />오렌지 에이드</a>
               </li>
            </ul>
    </section><!--//bestseller_beverage-->

    
    <section class="bestseller_food">      
          <h3>음식</h3>
           <ul class="bestseller_food_slider">
               <li class="bestseller_food1"><a href="twosomeplace_menu_food.php"><span>떠먹는스트로베리<br />초콜릿생크림</span>
                   딸기, 크런치볼이<br />씹히는 진한 초콜릿<br />생크림케이크</a>
               </li>
                <li class="bestseller_food2"><a href="twosomeplace_menu_food.php"><span>떠먹는<br />아이스박스</span>
                    블랙쿠키,마스카포네크림의<br />조화로운 아메리칸<br />스타일 케이크</a>
                </li>
                <li class="bestseller_food3"><a href="twosomeplace_menu_food.php"><span>더치솔티드카라멜</span>
                    초콜릿 시트와<br />솔티드카라멜 조합의<br />프리미엄 케이크</a>
                </li>
                <li class="bestseller_food4"><a href="twosomeplace_menu_food.php"><span>떠먹는헤이즐넛<br/>생크림크레이프</span>
                    헤이즐넛초콜릿생크림에<br />부드러운 크레이프의<br />조화로운 떠먹는 케이크</a>
                </li>
                <li class="bestseller_food5"><a href="twosomeplace_menu_food.php"><span>할라피뇨스테이크<br />바게트샌드위치</span>
                    소고기와 매콤한 할라피뇨<br />위에 치즈를 올린<br />필라델피아식 샌드위치</a>
                </li>
                <li class="bestseller_food6"><a href="twosomeplace_menu_food.php"><span>아보카도콥샐러드</span>
                    아보카도,치킨,베이컨 등<br />일곱 가지 재료가<br />푸짐한 한끼 샐러드</a>
                </li>
                <li class="bestseller_food7"><a href="twosomeplace_menu_food.php"><span>B.L.E.T샌드위치</span>
                    레몬마요네즈,베이컨,<br />달걀,로메인,레터스,<br />토마토를 넣은 샌드위치</a>
                </li>
                <li class="bestseller_food8"><a href="twosomeplace_menu_food.php"><span>레몬치킨클럽</span>
                    곡물식빵에 상큼한<br />치킨샐러드와 베이컨,야채가<br />들어간 클럽스타일 샌드위치</a>
                </li>
            </ul>
    </section><!--//bestseller_food-->
    
    <section class="bestseller_cake">      
          <h3>홀케이크</h3>
           <ul class="bestseller_cake_slider">
                <li class="bestseller_cake1"><a href="twosomeplace_menu_wholecake.php"><span>모어댄쿠키<br />1호</span>
                    초코시트 사이에<br />크림치즈,블랙쿠키파우더가<br />믹스된 달콤한 케이크</a>
                </li>
                <li class="bestseller_cake2"><a href="twosomeplace_menu_wholecake.php"><span>스트로베리<br />초코생크림</span>
                    딸기,초코생크림과<br />크런치 초코볼이 씹히는<br />투썸 베스트 케이크</a>
                </li>
                <li class="bestseller_cake3"><a href="twosomeplace_menu_wholecake.php"><span>딸기생크림</span>
                    담백한 생크림과<br />부드러운 시트, 딸기를<br />올린 생크림 케이크</a>
                </li>
                <li class="bestseller_cake4"><a href="twosomeplace_menu_wholecake.php"><span>레드벨벳</span>
                    레드벨벳시트,과일,<br />진한크림치즈의<br />조화로운 케이크</a>
                </li>
                <li class="bestseller_cake5"><a href="twosomeplace_menu_wholecake.php"><span>뉴욕치즈</span>
                    부드럽고 촉촉한<br />진한 치즈의 향이 나는<br />구움치즈 케이크</a>
                </li>
                <li class="bestseller_cake6"><a href="twosomeplace_menu_wholecake.php"><span>마스카포네생크림<br />믹스드베리</span>
                    마스카포네 생크림과<br />베리들을 새콤달콤하게<br />즐길 수 있는 케이크</a>
                </li>
                <li class="bestseller_cake7"><a href="twosomeplace_menu_wholecake.php"><span>퀸즈캐롯</span>
                    캐롯 시트와 묵직한<br />크림치즈를 풍성하게<br />레이어한 케이크</a>
                </li>
                <li class="bestseller_cake8"><a href="twosomeplace_menu_wholecake.php"><span>TWG밀크티쉬폰</span>
                    홍차쉬폰시트에<br />TWG TEA로 만든 홍차<br />생크림 밀크티 쉬폰</a>
                </li>
            </ul>
    </section><!--//bestseller_cake-->


        
    <article class="new_product">     
        <h2>투썸플레이스 신제품</h2>
        <a href="twosomeplace_menu_beverage.php">스트로베리요거트프라페</a>
    </article><!--//new_product-->
    </section><!--//bestseller-->
    </div><!--//bestseller_wrap-->
    
    <div class="franchise_wrap">
    <section class="franchise" id="franchise">
        <h2>투썸플레이스 창업문의</h2>
        <p class="franchise1">투썸플레이스는 파트너 분들을 환영합니다!</p>
        <p class="franchise2">투썸플레이스 창업절차를 자세히 알려드립니다.</p>
        <a class="bt2" href="twosomeplace_franchise_opensystem.php">창업 자세히보기</a>
    </section><!--//franchise-->   
    </div><!--//franchise_wrap-->
    
    <div class="mobile_app_wrap">
    <section class="mobile_app" id="mobileapp">     
        <h2>투썸플레이스 모바일어플</h2>
    <div class="mobile_app_sub_wrap">
    <section class="mobile_app_sub">
        <p>쉽고 빠르게 주문하는 모바일주문서비스 '투썸오더'</p>
        <p>혜택이 차곡차곡 쌓이는 '투썸리워드&amp;스탬프'</p>
        <p>다양한 종류의 투썸케이크를 미리 주문할 수 있는 '예약시스템'</p>
    </section><!--//mobile_app_sub-->
        <p class="mobile_app_title">모바일 투썸으로 더 편리하고 새로워진 투썸플레이스를 만나보세요!</p>
        <a class="bt3" href="twosomeplace_service_mobileapp.php">APP 자세히보기</a>
    </div><!--//mobile_app_sub_wrap-->
    </section><!--//mobile_app-->
    </div>
    
    <div class="cake_class_wrap">
    <section class="cake_class" id="class">                
    <h2>투썸플레이스 케이크교실</h2>
    <section class="cake_class_text">
    <p class="cake_class1">케이크 클래스</p>
    <p class="cake_class2">투썸플레이스 케이크교실로<br />나만의 케이크를 만들어 보세요!</p>
    <p class="cake_class3">투썸케이크마스터와 함께하는 클래스 시간!</p>
    <a class="bt4" href="twosomeplace_service_cakeclass.php">클래스 신청</a>
    </section><!--//cake_class_text-->
    </section><!--//cake_class-->    
    </div><!--//cake_class_wrap-->
    
    <div class="sns_wrap">
    <section class="sns">
    <h2>투썸플레이스SNS</h2>
        <ul class="sns1">
            <li class="sns_sub1"><a href="https://www.instagram.com/p/B95_QoGnWzW/?utm_source=ig_web_button_share_sheet">#투썸모닝세트</a></li>
            <li class="sns_sub2"><a href="https://www.instagram.com/p/B93aX4vnApe/?utm_source=ig_web_copy_link">#봄시즌신제품출시</a></li>
            <li class="sns_sub3"><a href="https://www.instagram.com/p/B-JhyCFnX3l/?utm_source=ig_web_copy_link">#봄시즌스프링세트</a></li>
            <li class="sns_sub4"><a href="https://www.instagram.com/p/B9oBW4nnw9S/?utm_source=ig_web_copy_link">#스트로베리키링출시</a></li>
            <li class="sns_sub5"><a href="https://www.instagram.com/p/B88MKTrH7v2/?utm_source=ig_web_copy_link">#스트로베리시즌제품출시</a></li>
        </ul>
        <ul class="sns2">
            <li class="sns_sub6"><a href="https://www.instagram.com/p/B9srwCqHybL/?utm_source=ig_web_copy_link">#화이트데이홍보</a></li>
            <li class="sns_sub7"><a href="https://www.instagram.com/p/B80sqgTn5wI/?utm_source=ig_web_copy_link">#초성퀴즈이벤트</a></li>
            <li class="sns_sub8"><a href="https://www.instagram.com/p/B8x5VuXnY5S/?utm_source=ig_web_copy_link">#2020신상텀블러출시</a></li>
            <li class="sns_sub9"><a href="https://www.instagram.com/p/B8vUJXonZ_L/?utm_source=ig_web_copy_link">#아인슈페너출시</a></li>
            <li class="sns_sub10"><a href="https://www.instagram.com/p/B8LnipVn7AD/?utm_source=ig_web_copy_link">#인스타100K팔로우이벤트</a></li>
        </ul>
    </section><!--//sns-->
    </div><!--//sns_wrap-->
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
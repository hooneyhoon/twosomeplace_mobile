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
    <title>투썸플레이스 메뉴소개</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/twosomeplace_menu_coffee.css" type="text/css">
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
    
    $(document).ready(function() { 
        var all = document.getElementById("all");
        var es = document.getElementById("es");
        var brewed = document.getElementById("brewed");
        var coldbrew = document.getElementById("coldbrew");
        
        all.onclick=function(){
            
                es.checked=false;
                brewed.checked=false;
                coldbrew.checked=false;

        }
        
        es.onclick=function(){
            
                all.checked=false;
                brewed.checked=false;
                coldbrew.checked=false;

        }
        
        brewed.onclick=function(){
            
                es.checked=false;
                all.checked=false;
                coldbrew.checked=false;

        }
        
        coldbrew.onclick=function(){
            
                es.checked=false;
                brewed.checked=false;
                all.checked=false;

        }
        
            
        $(".all").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".c_espresso,.c_brewed,.c_coldbrew").show(); 
            } 
        }); 
        
        $(".espresso").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".c_espresso").show();
                $(".c_brewed,.c_coldbrew").hide();
            } 
        }); 
        
        $(".bw").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".c_brewed").show();
                $(".c_espresso,.c_coldbrew").hide();
            } 
        }); 
        
        $(".cb").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".c_coldbrew").show();
                $(".c_espresso,.c_brewed").hide();
            } 
        }); 
    });


        
    $(document).ready(function(){
        
    $(".info_close").click(function(){
           $(this).parent().hide();
       });
        
    $(".one").click(function(){
         $(this).parent().next().next().show();
       });
        
    $(".two").click(function(){
        $(this).parent().next().next().next().show();
       });
        
    $(".zero").click(function(){
        $(this).parent().next().show();
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
        
        <div class="background">
            <section class="menu_lnb">
                <ul>
                    <li class="coffee"><a href="twosomeplace_menu_coffee.php">Coffee</a></li>
                    <li class="lnb_line"></li>
                    <li class="beverage"><a href="twosomeplace_menu_beverage.php">Beverage</a></li>
                    <li class="lnb_line"></li>
                    <li class="food"><a href="twosomeplace_menu_food.php">Food</a></li>
                    <li class="lnb_line"></li>
                    <li class="MD"><a href="twosomeplace_menu_md.php">MD상품</a></li>
                    <li class="lnb_line"></li>
                    <li class="wholecake"><a href="twosomeplace_menu_wholecake.php">Wholecake</a></li>
                </ul>
            </section><!--//menu_lnb-->
        </div><!--//background-->
        <div class="check_form">
        <form name="" action="" method="">
            <fieldset class="box">
                <legend><span class="check_coffee">Coffee</span>투썸플레이스의 아로마노트, 블랙그라운드, 디카페인으로 추출한 에스프레소로 음료 제공해드립니다.</legend>
                <p class="bd_box">
                    <input type="checkbox" name="menu" id="all" class="all">
                    <label for="all">전체상품</label>
                    <input type="checkbox" name="menu" id="es" class="espresso">
                    <label for="es">에스프레소</label>
                    <input type="checkbox" name="menu" id="brewed" class="bw">
                    <label for="brewed">브루드커피</label>
                    <input type="checkbox" name="menu" id="coldbrew" class="cb">
                    <label for="coldbrew">콜드브루</label>
                </p>
            </fieldset>
        </form>
        </div><!--//check_form-->
        <section class="c_espresso">
        <section class="es_title">
            <p><span class="title_b">에스프레소</span>카페인 함량 : 블랙그라운드 144.9mg  /  아로마노트 168.6mg  카페인함량은 매장마다 조금씩 다를수 있습니다.</p>    
        </section><!--//es_title-->
        
        
        <section class="es_1">
           <div class="menu_img">
           <div class="es1_img one"></div>
           </div>
           <div class="new_sticker"></div>
            <section class="es_1_info">
            <div class="info_close"></div>
            <h3><span class="es">아이스 흑임자 라떼</span><br>Iced Black Sesame Cafe Latte</h3>
            <p class="es_info">고소한 흑임자에 깊은 에스프레소를 곁들여<br>달콤하고 감미롭게 즐길 수 있는 라떼</p>
            <p class="nutri">1회 제공량 (414ml)   /   칼로리 (355kcal)<br>당류 (24g/24%)   /   단백질 (7g/12%)<br>포화지방 (12g/80%)   /   나트륨 (130mg/7%)</p>
           </section><!--//es_1_info-->
        </section><!--//es_1-->
        
        <section class="es_2">
           <div class="menu_img">
           <div class="es2_img one"></div>
           </div>
           <div class="new_sticker"></div>
           <section class="es_2_info">
            <div class="info_close"></div>
            <h3><span class="es">흑임자 라떼</span><br>Black Sesame Cafe Latte</h3>
            <p class="es_info">고소한 흑임자에 깊은 에스프레소를 곁들여<br>달콤하고 감미롭게 즐길 수 있는 라떼</p>
            <p class="nutri">1회 제공량 (414ml)   /   칼로리 (395kcal)<br>당류 (35g/5%)   /   단백질 (9g/16%)<br>포화지방 (12g/80%)   /   나트륨 (150mg/8%)</p>
           </section><!--//es_2_info-->
        </section><!--//es_2-->
        
        <section class="es_3">
          <div class="menu_img">
           <div class="es3_img two"></div>
           </div>
          <div class="new_sticker"></div>
          <div class="best_sticker"></div>
           <section class="es_3_info">
            <div class="info_close"></div>
            <h3><span class="es">아이스 아인슈페너</span><br>Iced Einspanner</h3>
            <p class="es_info">진한 아메리카노와 리치한 버터스카치 크림이<br>조화로운 클래식 모던 감성의 아인슈페너</p>
            <p class="nutri">1회 제공량 (414ml)   /   칼로리 (185kcal)<br>당류 (8g / 8%)   /   단백질 (2g / 3%)<br>포화지방 (9g / 60%)   /   나트륨 (15mg / 1%)</p>
           </section><!--//es_3_info-->
        </section><!--//es_3-->
        
        <section class="es_4">
         <div class="menu_img">
           <div class="es4_img one"></div>
           </div>
          <div class="new_sticker"></div>
           <section class="es_4_info">
            <div class="info_close"></div>
            <h3><span class="es">아인슈페너</span><br>Einspanner</h3>
            <p class="es_info">진한 아메리카노와 리치한 버터스카치 크림이<br>조화로운 클래식 모던 감성의 아인슈페너</p>
            <p class="nutri">1회 제공량 (353ml)   /   칼로리 (135kcal)<br>당류 (11g / 11%)   /   단백질 (2g / 3%)<br>포화지방 (4g / 27%)   /   나트륨 (20mg / 1%)</p>
           </section><!--//es_4_info-->
        </section><!--//es_4-->
        

            <p class="es_menu_title">아이스 흑임자 라떼</p>
            <p class="es_menu_title">흑임자 라떼</p>
            <p class="es_menu_title">아이스 아인슈페너</p>
            <p class="es_menu_title1">아인슈페너</p>

        
        <section class="es_5">
          <div class="menu_img">
           <div class="es5_img zero"></div>
           </div>
           <section class="es_5_info">
            <div class="info_close"></div>
            <h3><span class="es">아이스 흑당 카페라떼</span><br>Iced Black Sugar Cafe Latte</h3>
            <p class="es_info">흑당의 진한 풍미가 투썸의 두 가지 원두와<br>조화롭게 어울리는 커피</p>
            <p class="nutri">1회 제공량 (414ml)   /   칼로리 (210kcal)<br>당류 (28g / 28%)   /   단백질 (5g / 9%)<br>포화지방 (2.6g / 17%)   /   나트륨 (55mg / 3%)</p>
           </section><!--//es_5_info-->
        </section><!--//es_5-->
        
        <section class="es_6">
           <div class="menu_img">
           <div class="es6_img zero"></div>
           </div>
           <section class="es_6_info">
            <div class="info_close"></div>
            <h3><span class="es">흑당 카페라떼</span><br>Black Sugar Cafe Latte</h3>
            <p class="es_info">흑당의 진한 풍미가 투썸의 두 가지 원두와<br>조화롭게 어울리는 커피</p>
            <p class="nutri">1회 제공량 (355ml)   /   칼로리 (165kcal)<br>당류 (22g / 22%)   /   단백질 (4g / 7%)<br>포화지방 (2.0g / 13%)   /   나트륨 (45mg / 2%)</p>
           </section><!--//es_6_info-->
        </section><!--//es_6-->
        
        <section class="es_7">
          <div class="menu_img">
           <div class="es7_img zero"></div>
           </div>
           <section class="es_7_info">
            <div class="info_close"></div>
            <h3><span class="es">스페니쉬 연유라떼</span><br>Spanish Condensed Milk Latte</h3>
            <p class="es7_info">평화로운 유럽초원의 감성을 담은<br>부드럽고 달콤한 라떼<br>블랙 그라운드: 깊은 풍미와 초콜릿과 같은 단맛<br>아로마 노트 : 부드럽고 깔끔한 단맛</p>
            <p class="nutri">1회 제공량 (355ml)   /   칼로리 (320kcal)<br>당류 (33g / 33%)   /   단백질 (11g / 20%)<br>포화지방 (7g / 47%)   /   나트륨 (130mg / 7%)</p>
           </section><!--//es_7_info-->
        </section><!--//es_7-->
        
        <section class="es_8">
          <div class="menu_img">
           <div class="es8_img zero"></div>
           </div>
           <section class="es_8_info">
            <div class="info_close"></div>
            <h3><span class="es">아이스 스페니쉬 연유라떼</span><br>Iced Spanish Condensed Milk Latte</h3>
            <p class="es8_info">평화로운 유럽초원의 감성을 담은<br>부드럽고 달콤한 라떼<br>블랙 그라운드: 깊은 풍미와 초콜릿과 같은 단맛<br>아로마 노트 : 부드럽고 깔끔한 단맛</p>
            <p class="nutri">1회 제공량 (414ml)   /   칼로리 (225kcal)<br>당류 (22g / 22%)   /   단백질 (7g / 12%)<br>포화지방 (4.7g / 31%)   /   나트륨 (80mg / 4%)</p>
           </section><!--//es_8_info-->
        </section><!--//es_8-->
        
            <p class="es_menu_title">아이스 흑당 카페라떼</p>
            <p class="es_menu_title">흑당 카페라떼</p>
            <p class="es_menu_title">스페니쉬 연유라떼</p>
            <p class="es_menu_title1">아이스 스페니쉬 연유라떼</p>
        
        <section class="es_9">
          <div class="menu_img">
           <div class="es9_img zero"></div>
           </div>
           <section class="es_9_info">
            <div class="info_close"></div>
            <h3><span class="es">롱블랙</span><br>Long Black</h3>
            <p class="es9_info">아메리카노보다 진하고 부드러운<br>커피 플레이버를 느낄 수 있는 에스프레소 음료<br>Short Size로만 제공</p>
            <p class="nutri">1회 제공량 (237ml)   /   칼로리 (10kcal)<br>당류 (0g / 0%)   /   단백질 (1g미만 / 1%)<br>포화지방 (0g / 0%)   /   나트륨 (5mg / 1%)</p>
           </section><!--//es_9_info-->
        </section><!--//es_9-->
        
        <section class="es_10">
         <div class="menu_img">
           <div class="es10_img one"></div>
           </div>
          <div class="best_sticker2"></div>
           <section class="es_10_info">
            <div class="info_close"></div>
            <h3><span class="es">아이스 롱블랙</span><br>Iced Long Black</h3>
            <p class="es10_info">아메리카노보다 진하고 부드러운<br>커피 플레이버를 느낄 수 있는 에스프레소 음료<br>Short Size로만 제공</p>
            <p class="nutri">1회 제공량 (237ml)   /   칼로리 (10kcal)<br>당류 (0g / 0%)   /   단백질 (1미만g / 1%)<br>포화지방 (0g / 0%)   /   나트륨 (5mg / 1%)</p>
           </section><!--//es_10_info-->
        </section><!--//es_10-->
        
        <section class="es_11">
         <div class="menu_img">
           <div class="es11_img zero"></div>
           </div>
           <section class="es_11_info">
            <div class="info_close"></div>
            <h3><span class="es">숏라떼</span><br>Short Latte</h3>
            <p class="es11_info">에스프레소와 우유가 어우러져 진한 바디감과<br>부드러운 풍미를 느낄 수 있는 에스프레소 음료<br>Short Size로만 제공</p>
            <p class="nutri">1회 제공량 (237ml)   /   칼로리 (110kcal)<br>당류 (8g / 8%)   /   단백질 (5g / 9%)<br>포화지방 (3.6g / 24%)   /   나트륨 (90mg / 5%)</p>
           </section><!--//es_11_info-->
        </section><!--//es_11-->
        
        <section class="es_12">
          <div class="menu_img">
           <div class="es12_img zero"></div>
           </div>
           <section class="es_12_info">
            <div class="info_close"></div>
            <h3><span class="es">아이스 숏라떼</span><br>Iced Short Latte</h3>
            <p class="es12_info">에스프레소와 우유가 어우러져 진한 바디감과<br>부드러운 풍미를 느낄 수 있는 에스프레소 음료<br>Short Size로만 제공</p>
            <p class="nutri">1회 제공량 (237ml)   /   칼로리 (95kcal)<br>당류 (6g / 6%)   /   단백질 (5g / 9%)<br>포화지방 (3.0g / 20%)   /   나트륨 (75mg / 4%)</p>
           </section><!--//es_12_info-->
        </section><!--//es_12-->
        
            <p class="es_menu_title">롱블랙</p>
            <p class="es_menu_title">아이스 롱블랙</p>
            <p class="es_menu_title">숏라떼</p>
            <p class="es_menu_title1">아이스 숏라떼</p>
        
        <section class="es_13">
         <div class="menu_img">
           <div class="es13_img one"></div>
           </div>
          <div class="best_sticker2"></div>
           <section class="es_13_info">
            <div class="info_close"></div>
            <h3><span class="es">카라멜 마끼아또</span><br>Caramel Macchiato</h3>
            <p class="es13_info">바닐라 향을 넣은 스팀밀크 위에<br>에스프레소 샷을 넣고 카라멜 소스를<br>뿌린 달콤한 에스프레소 음료</p>
            <p class="nutri">1회 제공량 (355ml)   /   칼로리 (235kcal)<br>당류 (25g / 25%)   /   단백질 (8g / 14%)<br>포화지방 (7g / 44%)   /   나트륨 (130mg / 6%)</p>
           </section><!--//es_13_info-->
        </section><!--//es_13-->
        
        <section class="es_14">
         <div class="menu_img">
           <div class="es14_img one"></div>
           </div>
          <div class="best_sticker2"></div>
           <section class="es_14_info">
            <div class="info_close"></div>
            <h3><span class="es">아이스 카라멜 마끼아또</span><br>Iced Caramel Macchiato</h3>
            <p class="es14_info">잘 어우러진 바닐라 향과 우유,<br>에스프레소 샷 위에 카라멜 소스를 뿌려<br>시원하면서도 달콤하게 즐길 수 있는<br>에스프레소 음료</p>
            <p class="nutri">1회 제공량 (414ml)   /   칼로리 (195kcal)<br>당류 (28g / 28%)   /   단백질 (5g / 9%)<br>포화지방 (3.5g / 23%)   /   나트륨 (110mg / 6%)</p>
           </section><!--//es_14_info-->
        </section><!--//es_14-->
        
        <section class="es_15">
         <div class="menu_img">
           <div class="es15_img one"></div>
           </div>
          <div class="best_sticker2"></div>
           <section class="es_15_info">
            <div class="info_close"></div>
            <h3><span class="es">카페 아메리카노</span><br>Cafe Americano</h3>
            <p class="es15_info">진하게 로스팅한 커피 원두에서 에스프레소를<br>추출하여 투썸 고유의 원두 풍미를 느낄 수 있는<br>에스프레소 음료</p>
            <p class="nutri">1회 제공량 (355ml)   /   칼로리 (15kcal)<br>당류 (0g / 0%)   /   단백질 (1g / 1%)<br>포화지방 (0g / 0%)   /   나트륨 (5mg / 1%)</p>
           </section><!--//es_15_info-->
        </section><!--//es_15-->
        
        <section class="es_16">
         <div class="menu_img">
           <div class="es16_img one"></div>
           </div>
          <div class="best_sticker2"></div>
           <section class="es_16_info">
            <div class="info_close"></div>
            <h3><span class="es">카페 아이스 아메리카노</span><br>Iced Cafe Americano</h3>
            <p class="es16_info">진하게 로스팅한 커피 원두에서 에스프레소를<br>추출하여 시원한 얼음을 담아 산뜻하게<br>즐길 수 있는 깔끔한 스타일의 에스프레소 음료</p>
            <p class="nutri">1회 제공량 (414ml)   /   칼로리 (10kcal)<br>당류 (0g / 0%)   /   단백질 (1g / 1%)<br>포화지방 (0g / 0%)   /   나트륨 (5mg / 1%)</p>
           </section><!--//es_16_info-->
        </section><!--//es_16-->
        
            <p class="es_menu_title">카라멜 마끼아또</p>
            <p class="es_menu_title">아이스 카라멜 마끼아또</p>
            <p class="es_menu_title">카페 아메리카노</p>
            <p class="es_menu_title1">카페 아이스 아메리카노</p>
        
        <section class="es_17">
         <div class="menu_img">
           <div class="es17_img one"></div>
           </div>
          <div class="best_sticker2"></div>
           <section class="es_17_info">
            <div class="info_close"></div>
            <h3><span class="es">바닐라 라떼</span><br>Vanilla Latte</h3>
            <p class="es_info">달콤한 바닐라 향과 풍부한 에스프레소가<br>조화를 이룬 부드러운 라떼</p>
            <p class="nutri">1회 제공량 (355ml)   /   칼로리 (235kcal)<br>당류 (30g / 30%)   /   단백질 (8g / 14%)<br>포화지방 (5g / 33%)   /   나트륨 (130mg / 7%)</p>
           </section><!--//es_17_info-->
        </section><!--//es_17-->
        
        <section class="es_18">
         <div class="menu_img">
           <div class="es18_img one"></div>
           </div>
          <div class="best_sticker2"></div>
           <section class="es_18_info">
            <div class="info_close"></div>
            <h3><span class="es">아이스 바닐라 라떼</span><br>Iced Vanilla Latte</h3>
            <p class="es_info">달콤한 바닐라 향과 풍부한 에스프레소가<br>조화를 이룬 부드러운 라떼</p>
            <p class="nutri">1회 제공량 (414ml)   /   칼로리 (165kcal)<br>당류 (25g / 25%)   /   단백질 (4g / 7%)<br>포화지방 (2.8g / 7%)   /   나트륨 (70mg / 4%)</p>
           </section><!--//es_18_info-->
        </section><!--//es_18-->
        
        <section class="es_19">
         <div class="menu_img">
           <div class="es19_img one"></div>
           </div>
          <div class="best_sticker2"></div>
           <section class="es_19_info">
            <div class="info_close"></div>
            <h3><span class="es">카페모카</span><br>Cafe Mocha</h3>
            <p class="es19_info">진한 초콜릿 모카 시럽과 풍부하고 진한 농도의<br>에스프레소를 스팀밀크와 혼합하여  부드러운<br>휘핑크림을 올린 달콤한 에스프레소 음료</p>
            <p class="nutri">1회 제공량 (355ml)   /   칼로리 (270kcal)<br>당류 (27g / 27%)   /   단백질 (8g / 14%)<br>포화지방 (9g / 60%)   /   나트륨 (120mg / 6%)</p>
           </section><!--//es_19_info-->
        </section><!--//es_19-->
        
        <section class="es_20">
         <div class="menu_img">
           <div class="es20_img one"></div>
           </div>
          <div class="best_sticker2"></div>
           <section class="es_20_info">
            <div class="info_close"></div>
            <h3><span class="es">아이스 카페모카</span><br>Iced Cafe Mocha</h3>
            <p class="es20_info">모카 시럽과 풍부한 에스프레소를<br>신선한 우유와 혼합하여 진한 초콜릿 맛이<br>가득한 에스프레소 음료</p>
            <p class="nutri">1회 제공량 (414ml)   /   칼로리 (290kcal)<br>당류 (25g / 25%)   /   단백질 (5g / 9%)<br>포화지방 (11g / 73%)   /   나트륨 (100mg / 5%)</p>
           </section><!--//es_20_info-->
        </section><!--//es_20-->

            <p class="es_menu_title">바닐라 라떼</p>
            <p class="es_menu_title">아이스 바닐라 라떼</p>
            <p class="es_menu_title">카페모카</p>
            <p class="es_menu_title1">아이스 카페모카</p>
       
        <section class="es_21">
          <div class="menu_img">
           <div class="es21_img one"></div>
           </div>
           <div class="best_sticker2"></div>
            <section class="es_21_info">
             <div class="info_close"></div>
             <h3><span class="es">카페 라떼</span><br>Cafe Latte</h3>
             <p class="es21_info">풍부하고 진한 농도의 에스프레소와<br>스팀밀크 위에 부드러운 우유 거품을<br>살짝 올려준 에스프레소 음료</p>
             <p class="nutri">1회 제공량 (355ml)   /   칼로리 (175kcal)<br>당류 (12g / 12%)   /   단백질 (8g / 14%)<br>포화지방 (6g / 40%)   /   나트륨 (140mg / 7%)</p>
            </section><!--//es_21_info-->
         </section><!--//es_21-->
         
         <section class="es_22">
          <div class="menu_img">
           <div class="es22_img one"></div>
           </div>
           <div class="best_sticker2"></div>
            <section class="es_22_info">
             <div class="info_close"></div>
             <h3><span class="es">아이스 카페 라떼</span><br>Iced Cafe Latte</h3>
             <p class="es22_info">풍부하고 진한 농도의 에스프레소와<br>시원한 우유가 어우러진<br>부드러운 에스프레소 음료</p>
             <p class="nutri">1회 제공량 (414ml)   /   칼로리 (100kcal)<br>당류 (7g / 7%)   /   단백질 (5g / 7%)<br>포화지방 (3.2g / 21%)   /   나트륨 (80mg / 4%)</p>
            </section><!--//es_22_info-->
         </section><!--//es_22-->
         
         <section class="es_23">
          <div class="menu_img">
           <div class="es23_img one"></div>
           </div>
           <div class="best_sticker2"></div>
            <section class="es_23_info">
             <div class="info_close"></div>
             <h3><span class="es">티라미수 라떼</span><br>Tiramisu Latte</h3>
             <p class="es_info">부드럽고 달콤한 화이트크림과<br>진한 마스카포네 치즈가 조화로운 라떼</p>
             <p class="nutri23">1회 제공량 (355ml)   /   칼로리 (540kcal)<br>당류 (33g / 33%)   /   단백질 (11g / 20%)<br>포화지방 (29g / 193%)   /   나트륨 (250mg / 13%)</p>
            </section><!--//es_23_info-->
         </section><!--//es_23-->
         
         <section class="es_24">
          <div class="menu_img">
           <div class="es24_img one"></div>
           </div>
           <div class="best_sticker2"></div>
            <section class="es_24_info">
             <div class="info_close"></div>
             <h3><span class="es">카푸치노</span><br>Cappuccino</h3>
             <p class="es24_info">풍부하고 진한 농도의 에스프레소 위에<br>스팀밀크와 부드럽고 풍부한 양의 우유거품을<br>올린 에스프레소 음료</p>
             <p class="nutri">1회 제공량 (355ml)   /   칼로리 (145kcal)<br>당류 (10g / 10%)   /   단백질 (7g / 12%)<br>포화지방 (5g / 33%)   /   나트륨 (105mg / 5%)</p>
            </section><!--//es_24_info-->
         </section><!--//es_24-->
         
             <p class="es_menu_title">카페 라떼</p>
             <p class="es_menu_title">아이스 카페 라떼</p>
             <p class="es_menu_title">티라미수 라떼</p>
             <p class="es_menu_title1">카푸치노</p>
         
         <section class="es_25">
          <div class="menu_img">
           <div class="es25_img one"></div>
           </div>
           <div class="best_sticker2"></div>
            <section class="es_25_info">
             <div class="info_close"></div>
             <h3><span class="es">시그니처 라떼</span><br>Signature Latte</h3>
             <p class="es25_info">투썸의 커피맛을 극대화 시킨 생크림과<br>우유의 고소함이 잘 어울리는 시그니처 라떼<br>Short Size로만 제공</p>
             <p class="nutri">1회 제공량 (296ml)   /   칼로리 (235kcal)<br>당류 (5g / 5%)   /   단백질 (4g / 7%)<br>포화지방 (13g / 87%)   /   나트륨 (35mg / 2%)</p>
            </section><!--//es_25_info-->
         </section><!--//es_25-->
         
         <section class="es_26">
          <div class="menu_img">
           <div class="es26_img one"></div>
           </div>
           <div class="best_sticker2"></div>
            <section class="es_26_info">
             <div class="info_close"></div>
             <h3><span class="es">에스프레소 콘파나 싱글</span><br>Espresso Con Panna Single</h3>
             <p class="es26_info">에스프레소 원액에 휘핑크림이 어우러져<br>진한 향과 휘핑크림의 부드럽고 달콤한 맛을<br>함께 느낄 수 있는 에스프레소 음료</p>
             <p class="nutri">1회 제공량 (30ml)   /   칼로리 (60kcal)<br>당류 (1g / 1%)   /   단백질 (1g / 1%)<br>포화지방 (3.6g / 24%)   /   나트륨 (5mg / 1%)</p>
            </section><!--//es_26_info-->
         </section><!--//es_26-->
         
         <section class="es_27">
          <div class="menu_img">
           <div class="es27_img one"></div>
           </div>
           <div class="best_sticker2"></div>
            <section class="es_27_info">
             <div class="info_close"></div>
             <h3><span class="es">에스프레소 콘파나 더블</span><br>Espresso Con Panna Double</h3>
             <p class="es27_info">에스프레소 원액에 휘핑크림이 어우러져<br>진한 향과 휘핑크림의 부드럽고 달콤한 맛을<br>함께 느낄 수 있는 에스프레소 음료</p>
             <p class="nutri">1회 제공량 (65ml)   /   칼로리 (90kcal)<br>당류 (2g / 2%)   /   단백질 (1g / 1%)<br>포화지방 (6g / 40%)   /   나트륨 (5mg / 1%)</p>
            </section><!--//es_27_info-->
         </section><!--//es_27-->
         
         <section class="es_28">
          <div class="menu_img">
           <div class="es28_img one"></div>
           </div>
           <div class="best_sticker2"></div>
            <section class="es_28_info">
             <div class="info_close"></div>
             <h3><span class="es">에스프레소 마끼아또 싱글</span><br>Espresso Macchiato Single</h3>
             <p class="es28_info">에스프레소 원액에 부드러운 우유 거품이<br>어우러져 진한 향과 부드러운 거품을 함께<br>즐길 수 있는 에스프레소 음료</p>
             <p class="nutri">1회 제공량 (30ml)   /   칼로리 (15kcal)<br>당류 (1g / 1%)   /   단백질 (1g / 1%)<br>포화지방 (0g / 0%)   /   나트륨 (15mg / 1%)</p>
            </section><!--//es_28_info-->
         </section><!--//es_28-->
         
             <p class="es_menu_title">시그니처 라떼</p>
             <p class="es_menu_title">에스프레소 콘파나 싱글</p>
             <p class="es_menu_title">에스프레소 콘파나 더블</p>
             <p class="es_menu_title1">에스프레소 마끼아또 싱글</p>

         <section class="es_29">
          <div class="menu_img">
           <div class="es29_img one"></div>
           </div>
           <div class="best_sticker2"></div>
            <section class="es_29_info">
             <div class="info_close"></div>
             <h3><span class="es">에스프레소 마끼아또 더블</span><br>Espresso Macchiato Double</h3>
             <p class="es29_info">에스프레소 원액에 부드러운 우유 거품이<br>어우러져 진한 향과 부드러운 거품을 함께<br>즐길 수 있는 에스프레소 음료</p>
             <p class="nutri">1회 제공량 (65ml)   /   칼로리 (20kcal)<br>당류 (1g / 1%)   /   단백질 (1g / 1%)<br>포화지방 (0g / 0%)   /   나트륨 (15mg / 1%)</p>
            </section><!--//es_29_info-->
         </section><!--//es_29-->
         
         <section class="es_30">
          <div class="menu_img">
           <div class="es30_img one"></div>
           </div>
           <div class="best_sticker2"></div>
            <section class="es_30_info">
             <div class="info_close"></div>
             <h3><span class="es">에스프레소 싱글</span><br>Espresso Single</h3>
             <p class="es_info">카라멜 향과 더불어 달콤쌉싸름한 맛을<br>느낄 수 있는 깊고 진한 풍미의 에스프레소 음료</p>
             <p class="nutri">1회 제공량 (25ml)   /   칼로리 (5kcal)<br>당류 (0g / 0%)   /   단백질 (1g 미만/ 1%)<br>포화지방 (0g / 0%)   /   나트륨 (0mg / 0%)</p>
            </section><!--//es_30_info-->
         </section><!--//es_30-->
         
         <section class="es_31">
          <div class="menu_img">
           <div class="es31_img one"></div>
           </div>
           <div class="best_sticker2"></div>
            <section class="es_31_info">
             <div class="info_close"></div>
             <h3><span class="es">에스프레소 더블</span><br>Espresso Double</h3>
             <p class="es_info">카라멜 향과 더불어 달콤쌉싸름한 맛을<br>느낄 수 있는 깊고 진한 풍미의 에스프레소 음료</p>
             <p class="nutri">1회 제공량 (50ml)   /   칼로리 (10kcal)<br>당류 (0g / 0%)   /   단백질 (1g미만 / 1%)<br>포화지방 (0g / 0%)   /   나트륨 (5mg / 1%)</p>
            </section><!--//es_31_info-->
         </section><!--//es_31-->
         
         <section class="es_32"></section>
        
             <p class="es_menu_title">에스프레소 마끼아또 더블</p>
             <p class="es_menu_title">에스프레소 싱글</p>
             <p class="es_menu_title1">에스프레소 더블</p>
        
        </section><!--//c_espresso_1-->

        <section class="c_brewed">
          <section class="brew_title">
            <p><span class="title_b">브루드 커피</span>투썸플레이스 만의 깔끔한 필터커피를 즐겨보세요!</p>    
        </section><!--//brew_title-->
           
        <section class="br_01">
          <div class="menu_img">
           <div class="br1_img one"></div>
           </div>
           <div class="best_sticker2"></div>
            <section class="br_01_info">
             <div class="info_close"></div>
             <h3><span class="bw">오늘의 커피</span><br>Brewed Coffee of the Day</h3>
             <p class="bw_info">투썸의 원두를 드립 방식으로 드립커피</p>
             <p class="nutri">1회 제공량 (355ml)   /   칼로리 (15kcal)<br>당류 (0g / 0%)   /   단백질 (1g / 1%)<br>포화지방 (0g / 0%)   /   나트륨 (10mg / 1%)</p>
            </section><!--//br_01_info-->
         </section><!--//br_01-->
           
        <section class="br_02">
          <div class="menu_img">
           <div class="br2_img one"></div>
           </div>
           <div class="best_sticker2"></div>
            <section class="br_02_info">
             <div class="info_close"></div>
             <h3><span class="bw">아이스 커피</span><br>Iced Coffee</h3>
             <p class="bw_info">투썸의 원두를 드립 방식으로 내려 얼음과 함께<br>시원하게 즐기는 에스프레소 음료</p>
             <p>1회 제공량 (355ml)   /   칼로리 (10kcal)<br>당류 (0g / 0%)   /   단백질 (0g / 0%)<br>포화지방 (0g / 0%)   /   나트륨 (10mg / 0%)</p>
            </section><!--//br_02_info-->
         </section><!--//br_02-->
         <section class="br_03"></section>
         <section class="br_04"></section>
         
            <p class="es_menu_title">오늘의 커피</p>
            <p class="es_menu_title1">아이스 커피</p>
         
         </section><!--//c_brewed-->
        
        <section class="c_coldbrew">
        <section class="cold_title">
            <p><span class="title_b">콜드브루</span>투썸플레이스 만의 콜드브루를 드셔보세요!</p>    
            </section><!--//cold_title-->
        
        <section class="cb_01">
           <div class="menu_img">
           <div class="cb1_img one"></div>
           </div>
           <div class="best_sticker2"></div>
            <section class="cb_01_info">
             <div class="info_close"></div>
             <h3><span class="cb">콜드브루</span><br>Cold Brew</h3>
             <p class="cb_info">커피 본연의 깊은 풍미와 단맛이 느껴지는<br>부드럽고 깔끔한 콜드브루 커피</p>
             <p class="nutri">1회 제공량 (414ml)   /   칼로리 (10kcal)<br>당류 (0g / 0%)   /   단백질 (1g / 1%)<br>포화지방 (0g / 0%)   /   나트륨 (15mg / 1%)</p>
            </section><!--//cb_01_info-->
         </section><!--//cb_01-->
        
        <section class="cb_02">
            <div class="menu_img">
           <div class="cb2_img zero"></div>
           </div>
            <section class="cb_02_info">
             <div class="info_close"></div>
             <h3><span class="cb">콜드브루 라떼</span><br>Cold Brew Latte</h3>
             <p class="cb_info">콜드브루와 우유가 어우러져<br>더욱 부드럽게 즐길 수 있는 콜드브루 라떼<br></p>
             <p class="nutri">1회 제공량 (414ml)   /   칼로리 (70kcal)<br>당류 (5g / 5%)   /   단백질 (4g / 6%)<br>포화지방 (2.1g / 14%)   /   나트륨 (65mg / 3%)</p>
            </section><!--//cb_02_info-->
         </section><!--//cb_02-->
            <section class="cb_03"></section>
            <section class="cb_04"></section>
            
            <p class="es_menu_title">콜드브루</p>
            <p class="es_menu_title1">콜드브루 라떼</p>
            
        </section><!--//c_coldbrew-->   
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
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
    <link rel="stylesheet" href="css/twosomeplace_menu_food.css" type="text/css">
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
        var cake = document.getElementById("cake");
        var icecreme = document.getElementById("icecreme")
        var sandwich = document.getElementById("sandwich");
        var salad = document.getElementById("salad");
        var bakery = document.getElementById("bakery");
        var macaron = document.getElementById("macaron");
        var cookie = document.getElementById("cookie");
        
        all.onclick=function(){
            
                cake.checked=false;
                icecreme.checked=false;
                sandwich.checked=false;
                salad.checked=false;
                bakery.checked=false;
                macaron.checked=false;
                cookie.checked=false;

        }
        
        cake.onclick=function(){
            
                all.checked=false;
                icecreme.checked=false;
                sandwich.checked=false;
                salad.checked=false;
                bakery.checked=false;
                macaron.checked=false;
                cookie.checked=false;
        }
        
        icecreme.onclick=function(){
            
                cake.checked=false;
                all.checked=false;
                sandwich.checked=false;
                salad.checked=false;
                bakery.checked=false;
                macaron.checked=false;
                cookie.checked=false;

        }
        
        sandwich.onclick=function(){
            
                cake.checked=false;
                icecreme.checked=false;
                all.checked=false;
                salad.checked=false;
                bakery.checked=false;
                macaron.checked=false;
                cookie.checked=false;

        }
        
        salad.onclick=function(){
            
                cake.checked=false;
                icecreme.checked=false;
                sandwich.checked=false;
                all.checked=false;
                bakery.checked=false;
                macaron.checked=false;
                cookie.checked=false;

        }
        
        bakery.onclick=function(){
            
                cake.checked=false;
                icecreme.checked=false;
                sandwich.checked=false;
                salad.checked=false;
                all.checked=false;
                macaron.checked=false;
                cookie.checked=false;

        }
        
        macaron.onclick=function(){
            
                cake.checked=false;
                icecreme.checked=false;
                sandwich.checked=false;
                salad.checked=false;
                bakery.checked=false;
                all.checked=false;
                cookie.checked=false;

        }
        
        cookie.onclick=function(){
            
                cake.checked=false;
                icecreme.checked=false;
                sandwich.checked=false;
                salad.checked=false;
                bakery.checked=false;
                macaron.checked=false;
                all.checked=false;

        }


        $(".all").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".f_cake,.f_icecreme,.f_macaron,.f_sandwich,.f_salad,.f_bakery,.f_cookie").show(); 
            } 
        }); 
        
        $(".cake").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".f_cake").show();
                $(".f_icecreme,.f_macaron,.f_sandwich,.f_salad,.f_bakery,.f_cookie").hide();
            } 
        }); 
        
        $(".icecreme").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".f_icecreme").show();
                $(".f_cake,.f_macaron,.f_sandwich,.f_salad,.f_bakery,.f_cookie").hide();
            } 
        }); 
        
        $(".sandwich").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".f_sandwich").show();
                $(".f_cake,.f_icecreme,.f_macaron,.f_salad,.f_bakery,.f_cookie").hide();
            } 
        }); 
        
        $(".salad").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".f_salad").show();
                $(".f_cake,.f_icecreme,.f_macaron,.f_sandwich,.f_bakery,.f_cookie").hide();
            } 
        }); 
        
        $(".bakery").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".f_bakery").show();
                $(".f_cake,.f_icecreme,.f_macaron,.f_sandwich,.f_salad,.f_cookie").hide();
            } 
        }); 
        
        $(".macaron").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".f_macaron").show();
                $(".f_cake,.f_icecreme,.f_sandwich,.f_salad,.f_bakery,.f_cookie").hide();
            } 
        }); 
        
        $(".cookie").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".f_cookie").show();
                $(".f_cake,.f_icecreme,.f_macaron,.f_sandwich,.f_salad,.f_bakery").hide();
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
                <legend><span class="check_food">Food</span>투썸플레이스의 맛있는 디저트, 샌드위치, 베이커리, 쿠키등 다양하게 즐겨보세요!</legend>
                <p class="bd_box">
                    <input type="checkbox" name="menu" id="all" class="all">
                    <label for="all">전체상품</label>
                    <input type="checkbox" name="menu" id="cake" class="cake">
                    <label for="cake">케이크</label>
                    <input type="checkbox" name="menu" id="icecreme" class="icecreme">
                    <label for="icecreme">아이스크림</label>
                    <input type="checkbox" name="menu" id="sandwich" class="sandwich">
                    <label for="sandwich">샌드위치</label>
                    <input type="checkbox" name="menu" id="salad" class="salad">
                    <label for="salad">샐러드</label>
                    <input type="checkbox" name="menu" id="bakery" class="bakery">
                    <label for="bakery">베이커리</label>
                    <input type="checkbox" name="menu" id="macaron" class="macaron">
                    <label for="macaron">마카롱/초콜릿</label>
                    <input type="checkbox" name="menu" id="cookie" class="cookie">
                    <label for="cookie">쿠키</label>
                </p>
            </fieldset>
        </form>
        </div><!--//check_form-->
        <section class="f_cake">
        <section class="cake_title">
            <p><span class="title_b">케이크</span>투썸플레이스의 생크림케이크, 무스케이크 다양하게 즐겨보세요!</p>    
        </section><!--//cake_title-->
        
        
        <section class="cake_1">
           <div class="menu_img">
           <div class="cake1_img two"></div>
           </div>
           <div class="new_sticker"></div>
           <div class="best_sticker2"></div>
           <section class="cake_1_info">
            <div class="info_close"></div>
            <h3><span class="cake">베리 블러썸 무스</span><br>Berry Blossom Mousse</h3>
            <p class="cake_info5">부드러운 마스카포네 생크림과 상큼한 오렌지<br>쥬레, 라즈베리 무스의 조화가 부드럽게<br>어우러진 핑크빛 무스케이크<br>* 계란,우유,대두,밀,돼지고기,아황산류,<br>쇠고기 함유</p>
            <p class="nutri">1회 제공량 (183g)   /   칼로리 (285kcal)<br>당류 (21g / 21%)   /   단백질 (2g / 4%)<br>포화지방 (13g / 87%)   /   나트륨 (30mg / 2%)</p>
           </section><!--//cake_1_info-->
        </section><!--//cake_1-->
        
        <section class="cake_2">
           <div class="menu_img">
           <div class="cake2_img one"></div>
           </div>
           <div class="new_sticker"></div>
           <section class="cake_2_info">
            <div class="info_close"></div>
            <h3><span class="cake">생딸기 가득 타르트</span><br>Strawberry Tart</h3>
            <p class="cake_info5">버터 풍미가 가득한 바삭한 타르트에<br>베리 무스와 화이트 시트를 레이어하고<br>신선한 딸기를 한 가득 올려 마무리한<br>무스 타르트<br>* 계란,우유,대두,밀,돼지고기 함유</p>
            <p class="nutri">1회 제공량 (124g)   /   칼로리 (335kcal)<br>당류 (23g / 23%)   /   단백질 (5g / 9%)<br>포화지방 (9g / 60%)   /   나트륨 (75mg / 4%)</p>
           </section><!--//cake_2_info-->
        </section><!--//cake_2-->
        
        <section class="cake_3">
          <div class="menu_img">
           <div class="cake3_img zero"></div>
           </div>
           <section class="cake_3_info">
            <div class="info_close"></div>
            <h3><span class="cake">헤이즐넛 마스카포네 치즈</span><br>Hazelnut Mascarpone Cheese</h3>
            <p class="cake_info4">뉴욕치즈 케이크 위에 진한 풍미의 헤이즐넛<br>가나슈를 레이어 하고 헤이즐넛&amp;마스카포네<br>치즈 생크림을 풍성하게 올린 케이크<br>* 계란, 우유, 대두, 밀 함유</p>
            <p class="nutri">1회 제공량 (152g)   /   칼로리 (285kcal)<br>당류 (17g / 17%)   /   단백질 (4g / 7%)<br>포화지방 (13g / 86%)   /   나트륨 (95mg / 5%)</p>
           </section><!--//cake_3_info-->
        </section><!--//cake_3-->
        
        <section class="cake_4">
         <div class="menu_img">
           <div class="cake4_img one"></div>
           </div>
          <div class="best_sticker"></div>
           <section class="cake_4_info">
            <div class="info_close"></div>
            <h3><span class="cake">떠먹는 헤이즐넛 생크림 크레이프</span><br>Hazelnuts Fresh Cream Crepe</h3>
            <p class="cake_info4">크리미한 헤이즐넛 초콜릿 생크림에 부드러운<br>크레이프를 겹겹이 쌓아올려 달콤한 초콜릿의<br>매력을 극대화한 떠먹는 케이크<br>* 계란,우유,대두,밀,돼지고기,아황산류 함유</p>
            <p class="nutri">1회 제공량 (174g)   /   칼로리 (570kcal)<br>당류 (40g / 40%)   /   단백질 (7g / 13%)<br>포화지방 (20g / 133%)   /   나트륨 (90mg / 5%)</p>
           </section><!--//cake_4_info-->
        </section><!--//cake_4-->
        

            <p class="b_menu_title">베리 블러썸 무스</p>
            <p class="b_menu_title">생딸기 가득 타르트</p>
            <p class="b_menu_title">헤이즐넛 마스카포네 치즈</p>
            <p class="b_menu_title1">떠먹는 헤이즐넛 생크림 크레이프</p>

        
        <section class="cake_5">
          <div class="menu_img">
           <div class="cake5_img zero"></div>
           </div>
           <section class="cake_5_info">
            <div class="info_close"></div>
            <h3><span class="cake">모어 댄 쿠키 앤 크림</span><br>More than Cookie N Cream</h3>
            <p class="cake_info5">초코시트 사이사이 크림치즈와 블랙쿠키<br>파우더가 믹스된 크림이 층층이 쌓여<br> 부드러움과 달콤함을 한번에 느낄 수 있는<br>디저트 케이크<br>* 계란,우유,대두,밀,돼지고기 함유</p>
            <p class="nutri">1회 제공량 (155g)   /   칼로리 (385kcal)<br>당류 (33g / 33%)   /   단백질 (3g / 5%)<br>포화지방 (15g / 100%)   /   나트륨 (85mg / 4%)</p>
           </section><!--//cake_5_info-->
        </section><!--//cake_5-->
        
        <section class="cake_6">
           <div class="menu_img">
           <div class="cake6_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="cake_6_info">
            <div class="info_close"></div>
            <h3><span class="cake">퀸즈 캐롯</span><br>Queen's Carrot</h3>
            <p class="cake_info4">담백한 당근과 상큼한 오렌지 필로 식감을 살린<br>촉촉한 캐롯 시트와 묵직한 크림치즈를 풍성하게<br> 레이어한 영국식 티 케이크<br>*계란,우유,대두,밀,호두 함유</p>
            <p class="nutri">1회 제공량 (179g)   /   칼로리 (575kcal)<br>당류 (36g / 36%)   /   단백질 (7g / 12%)<br>포화지방 (21g / 140%)   /   나트륨 (470mg / 24%)</p>
           </section><!--//cake_6_info-->
        </section><!--//cake_6-->
        
        <section class="cake_7">
          <div class="menu_img">
           <div class="cake7_img zero"></div>
           </div>
           <section class="cake_7_info">
            <div class="info_close"></div>
            <h3><span class="cake">비 마이 스트로베리</span><br>Be My Strawberry</h3>
            <p class="cake_info4">스트로베리 생크림과 스트로베리콤포트 과육을<br>듬뿍 샌드하고, 마스카포네치즈크림으로<br>마무리한 리얼 스트로베리 생크림케이크<br>*계란,우유,대두,밀,돼지고기,아황산류 함유</p>
            <p class="nutri">1회 제공량 (154g)   /   칼로리 (410kcal)<br>당류 (33g / 33%)   /   단백질 (5g / 9%)<br>포화지방 (12g / 80%)   /   나트륨 (120mg / 6%)</p>
           </section><!--//cake_7_info-->
        </section><!--//cake_7-->
        
        <section class="cake_8">
          <div class="menu_img">
           <div class="cake8_img zero"></div>
           </div>
           <section class="cake_8_info">
            <div class="info_close"></div>
            <h3><span class="cake">블랙 벨벳</span><br>Black Velvet</h3>
            <p class="cake_info4">진한 블랙시트에 풍부한 크림치즈 크림이 <br>샌드되고 다크체리가 들어가 상큼함을 더한<br>세련된 룩의 블랙벨벳 케이크<br>*계란,우유,대두,밀 함유</p>
            <p class="nutri">1회 제공량 (151g)   /   칼로리 (525kcal)<br>당류 (40g / 40%)   /   단백질 (6g / 10%)<br>포화지방 (16g / 107%)   /   나트륨 (280mg / 14%)</p>
           </section><!--//cake_8_info-->
        </section><!--//cake_8-->
        
        
            <p class="b_menu_title">모어 댄 쿠키 앤 크림</p>
            <p class="b_menu_title">퀸즈 캐롯</p>
            <p class="b_menu_title">비 마이 스트로베리</p>
            <p class="b_menu_title1">블랙 벨벳</p>
            
            
        <section class="cake_9">
          <div class="menu_img">
           <div class="cake9_img zero"></div>
           </div>
           <section class="cake_9_info">
            <div class="info_close"></div>
            <h3><span class="cake">딸기 생크림</span><br>Strawberry Fresh Cream Cake</h3>
            <p class="cake_info4">담백한 생크림과 부드러운 시트에 풍성한<br>딸기 데코레이션이 고급스러운 제품<br>*계란, 우유, 대두, 밀, 돼지고기, 아황산류 함유<br>*매장 별로 딸기 외 대체 과일 데코레이션운영.</p>
            <p class="nutri">1회 제공량 (117g)   /   칼로리 (305kcal)<br>당류 (27g / 27%)   /   단백질 (4g / 7%)<br>포화지방 (8g / 53%)   /   나트륨 (95mg / 5%)</p>
           </section><!--//cake_9_info-->
        </section><!--//cake_9-->
        
        <section class="cake_10">
          <div class="menu_img">
           <div class="cake10_img zero"></div>
           </div>
           <section class="cake_10_info">
            <div class="info_close"></div>
            <h3><span class="cake">카푸치노 생크림</span><br>Cappuccino Cake</h3>
            <p class="cake_info5">에티오피아 원두로 우려낸 커피 크림에<br>초코시트로 풍성하게 레이어링하고, 부드러운<br>마스카포네 치즈크림으로 마무리한<br>생크림 케이크<br>*계란, 우유, 대두,밀 함유</p>
            <p class="nutri">1회 제공량 (157g)   /   칼로리 (435kcal)<br>당류 (21g / 21%)   /   단백질 (4g / 7%)<br>포화지방 (21g / 140%)   /   나트륨 (115mg / 6%</p>
           </section><!--//cake_10_info-->
        </section><!--//cake_10-->
        
        <section class="cake_11">
          <div class="menu_img">
           <div class="cake11_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="cake_11_info">
            <div class="info_close"></div>
            <h3><span class="cake">초콜릿 크렘슈</span><br>Chocolate Creme Choux</h3>
            <p class="cake_info4">부드럽고 크리미한 스위스 머랭이 바삭한 슈<br>위에 하얀 눈처럼 내려 앉아 진하고 리치한<br>초콜릿 크렘과 어우러진 디저트<br>*난류,우유,대두,밀,돼지고기 함유</p>
            <p class="nutri">1회 제공량 (120g)   /   칼로리 (350kcal)<br>당류 (17g / 17%)   /   단백질 (5g / 9%)<br>포화지방 (16g / 107%)   /   나트륨 (100mg / 5%)</p>
           </section><!--//cake_11_info-->
        </section><!--//cake_11-->
        
        <section class="cake_12">
          <div class="menu_img">
           <div class="cake12_img zero"></div>
           </div>
           <section class="cake_12_info">
            <div class="info_close"></div>
            <h3><span class="cake">바닐라 크렘슈</span><br>Vanilla Creme Choux</h3>
            <p class="cake_info4">부드럽고 크리미한 스위스 머랭이 바삭한 슈<br>위에 하얀 눈처럼 내려 앉아 부드럽고 리치한<br>바닐라 크렘과 어우러진 디저트<br>*난류,우유,대두,밀,돼지고기 함유</p>
            <p class="nutri">1회 제공량 (126g)   /   칼로리 (360kcal)<br>당류 (18g / 18%)   /   단백질 (6g / 11%)<br>포화지방 (16g / 107%)   /   나트륨 (130mg / 7%)</p>
           </section><!--//cake_12_info-->
        </section><!--//cake_12-->
        
        
            <p class="b_menu_title">딸기 생크림</p>
            <p class="b_menu_title">카푸치노 생크림</p>
            <p class="b_menu_title">초콜릿 크렘슈</p>
            <p class="b_menu_title1">바닐라 크렘슈</p>
        
        <section class="cake_13">
          <div class="menu_img">
           <div class="cake13_img zero"></div>
           </div>
           <section class="cake_13_info">
            <div class="info_close"></div>
            <h3><span class="cake">생크림 피칸 타르트</span><br>Fresh Cream Pecan Tart</h3>
            <p class="cake_info3">타르트 쉘 위에 고소한 피칸과 생크림을 가득<br>올린 구움 타르트<br>*난류,우유,대두,밀,돼지고기 함유</p>
            <p class="nutri">1회 제공량 (105g)   /   칼로리 (410kcal)<br>당류 (27g / 27%)   /   단백질 (5g / 9%)<br>포화지방 (10g / 67%)   /   나트륨 (60mg / 3%)</p>
           </section><!--//cake_13_info-->
        </section><!--//cake_13-->    
            
        <section class="cake_14">
          <div class="menu_img">
           <div class="cake14_img zero"></div>
           </div>
           <section class="cake_14_info">
            <div class="info_close"></div>
            <h3><span class="cake">생크림 소프트 쉬폰</span><br>Fresh Cream Chiffon</h3>
            <p class="cake_info3">부드러운 텍스쳐의 쉬폰과 신선한 생크림을<br>곁들여 먹는 미니 디저트<br>*계란,우유,대두,밀,돼지고기 함유</p>
            <p class="nutri">1회 제공량 (246g)   /   칼로리 (935kcal)<br>당류 (35g / 35%)   /   단백질 (54g / 98%)<br>포화지방 (28g / 187%)   /   나트륨 (290mg / 15%)</p>
           </section><!--//cake_14_info-->
        </section><!--//cake_14-->
        
        <section class="cake_15">
          <div class="menu_img">
           <div class="cake15_img zero"></div>
           </div>
           <section class="cake_15_info">
            <div class="info_close"></div>
            <h3><span class="cake">바닐라 크렘 브륄레</span><br>Vanilla Creme Brulee</h3>
            <p class="cake_info4">바닐라빈이 듬뿍 들어간 순백의 하얀 무스 속에<br>달콤한 크렘브륄레가 숨겨진 바닐라빈<br>아이스크림을 닮은 맛의 프리미엄 무스케이크<br>*계란,우유,대두,밀,돼지고기 함유</p>
            <p class="nutri">1회 제공량 (168g)   /   칼로리 (420kcal)<br>당류 (30g / 30%)   /   단백질 (9g / 16%)<br>포화지방 (15g / 100%)   /   나트륨 (490mg / 25%)</p>
           </section><!--//cake_15_info-->
        </section><!--//cake_15-->
        
        <section class="cake_16">
          <div class="menu_img">
           <div class="cake16_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="cake_16_info">
            <div class="info_close"></div>
            <h3><span class="cake">TWG 밀크 쉬폰</span><br>TWG Royal Milktea Chiffon</h3>
            <p class="cake_info4">부드럽고 촉촉한 홍차쉬폰 시트에 TWG TEA를<br>정성스레 우려내어 만든 홍차 생크림으로 더욱<br>진해진 로얄밀크티 쉬폰<br>*계란,우유,대두,밀 함유</p>
            <p class="nutri">1회 제공량 (106g)   /   칼로리 (335kcal)<br>당류 (18g / 18%)   /   단백질 (4g / 7%)<br>포화지방 (13g / 87%)   /   나트륨 (115mg / 6%)</p>
           </section><!--//cake_16_info-->
        </section><!--//cake_16-->
        
        
            <p class="b_menu_title">생크림 피칸 타르트</p>
            <p class="b_menu_title">생크림 소프트 쉬폰</p>
            <p class="b_menu_title">바닐라 크렘 브륄레</p>
            <p class="b_menu_title1">TWG 밀크 쉬폰</p>
            
        
        <section class="cake_17">
          <div class="menu_img">
           <div class="cake17_img zero"></div>
           </div>
           <section class="cake_17_info">
            <div class="info_close"></div>
            <h3><span class="cake">더치 솔티드 카라멜</span><br>Dutch Salted Caramel</h3>
            <p class="cake_info5">부드럽고 촉촉한 초콜릿 시트와 카라멜 생크림<br>사이사이, 네덜란드산 솔티드카라멜 크런치펄과<br>로스티드 월넛을 듬뿍 넣고, 옆면에 크럼블을<br>데코레이션한 프리미엄 케이크<br>*난류,우유,대두,밀,돼지고기,호두 함유</p>
            <p class="nutri">1회 제공량 (129g)   /   칼로리 (460kcal)<br>당류 (20g / 20%)   /   단백질 (6g / 11%)<br>포화지방 (14g / 93%)   /   나트륨 (240mg / 12%)</p>
           </section><!--//cake_17_info-->
        </section><!--//cake_17-->
        
        <section class="cake_18">
          <div class="menu_img">
           <div class="cake18_img zero"></div>
           </div>
           <section class="cake_18_info">
            <div class="info_close"></div>
            <h3><span class="cake">까망베르 치즈</span><br>Camembert Cheese Cake</h3>
            <p class="cake_info4">까망베르 치즈를 넣어 까망베르 특유의 약간<br>짭짜름한 맛이 일품이며, 커피또는 차와 아주<br>잘 어울리는 케이크<br>*계란,우유,대두,밀 함유</p>
            <p class="nutri">1회 제공량 (97g)   /   칼로리 (385kcal)<br>당류 (17g / 17%)   /   단백질 (6g / 11%)<br>포화지방 (19g / 127%)   /   나트륨 (170mg / 9%)</p>
           </section><!--//cake_18_info-->
        </section><!--//cake_18-->
        
        <section class="cake_19">
          <div class="menu_img">
           <div class="cake19_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="cake_19_info">
            <div class="info_close"></div>
            <h3><span class="cake">떠먹는 스트로베리 초콜릿 생크림</span><br>Strawberry Chocolate Fresh Cream Cake</h3>
            <p class="cake_info5">한가득 올린 상큼한 딸기, 크런치 초코볼이<br>알알이 씹히는 진한 초콜릿 생크림 시트가<br>조화를 이루는 디저트<br>*난류,우유,대두,밀 함유<br>* 매장 별로 딸기 외 대체 과일 데코레이션운영</p>
            <p class="nutri">1회 제공량 (213g)   /   칼로리 (615kcal)<br>당류 (37g / 37%)   /   단백질 (8g / 15%)<br>포화지방 (24g / 16%)   /   나트륨 (170mg / 9%)</p>
           </section><!--//cake_19_info-->
        </section><!--//cake_19-->
        
        <section class="cake_20">
          <div class="menu_img">
           <div class="cake20_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="cake_20_info">
            <div class="info_close"></div>
            <h3><span class="cake">떠먹는 티라미수</span><br>Tiramisu</h3>
            <p class="cake_info5">마스카포네 치즈와 진한 에스프레소 시럽으로<br>샌드 된 촉촉한 시트 위에 순도 높은 발로나<br>파우더를 올린 이탈리아 대표 무스 케이크<br>*계란,우유,대두,밀,돼지고기 함유<br>* 파티팩 구매시, 피스 6조각 구성</p>
            <p class="nutri">1회 제공량 (144g)   /   칼로리 (475kcal)<br>당류 (24g / 24%)   /   단백질 (8g / 15%)<br>포화지방 (26g / 173%)   /   나트륨 (75mg / 4%)</p>
           </section><!--//cake_20_info-->
        </section><!--//cake_20-->
        
            <p class="b_menu_title">더치 솔티드 카라멜</p>
            <p class="b_menu_title">까망베르 치즈</p>
            <p class="b_menu_title">떠먹는 스트로베리 초콜릿 생크림</p>
            <p class="b_menu_title1">떠먹는 티라미수</p>
            
        <section class="cake_21">
          <div class="menu_img">
           <div class="cake21_img zero"></div>
           </div>
           <section class="cake_21_info">
            <div class="info_close"></div>
            <h3><span class="cake">벨지안 가나슈</span><br>Belgian Chocolate Ganache</h3>
            <p class="cake_info4">벨기에산 다크 초콜릿 가나슈와 시트 사이사이<br>초코 크런치, 크럼블로 바삭한 식감을 더한<br>케이크<br>*계란,우유,대두,밀 함유</p>
            <p class="nutri">1회 제공량 (149g)   /   칼로리 (659kcal)<br>당류 (50g / 50%)   /   단백질 (9g / 16%)<br>포화지방 (25g / 167%)   /   나트륨 (200mg / 10%)</p>
           </section><!--//cake_21_info-->
        </section><!--//cake_21-->
        
        <section class="cake_22">
          <div class="menu_img">
           <div class="cake22_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="cake_22_info">
            <div class="info_close"></div>
            <h3><span class="cake">떠먹는 딸기 레어 치즈</span><br>Strawberry Rare Cheese</h3>
            <p class="cake_info5">상큼한 딸기퓨레와 부드러운 크림치즈, 고소한<br>크럼블, 라즈베리가 함께 어울려 봄을 닮은 맛의<br>떠먹는 케이크<br>*계란, 우유, 대두, 밀, 돼지고기 함유<br>* 파티팩 구매시, 피스 6조각 구성</p>
            <p class="nutri">1회 제공량 (163g)   /   칼로리 (455kcal)<br>당류 (34g / 34%)   /   단백질 (7g / 13%)<br>포화지방 (15g / 100%)   /   나트륨 (180mg / 9%)</p>
           </section><!--//cake_22_info-->
        </section><!--//cake_22-->
        
        <section class="cake_23">
          <div class="menu_img">
           <div class="cake23_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="cake_23_info">
            <div class="info_close"></div>
            <h3><span class="cake">떠먹는 스 아이스박스</span><br>Ice Box Cake</h3>
            <p class="cake_info5">블랙쿠키 층에 마스카포네 크림의 수분이<br>전이되어 촉촉하고 부드럽게 즐기는 떠먹는<br>타입의 아메리칸 스타일 케이크<br>*난류,우유,대두,밀 함유<br>* 파티팩 구매시, 피스 6조각 구성</p>
            <p class="nutri">1회 제공량 (190g)   /   칼로리 (775kcal)<br>당류 (36g / 36%)   /   단백질 (8g / 15%)<br>포화지방 (37g / 247%)   /   나트륨 (460mg / 23%)</p>
           </section><!--//cake_23_info-->
        </section><!--//cake_23-->
        
        <section class="cake_24">
          <div class="menu_img">
           <div class="cake24_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="cake_24_info">
            <div class="info_close"></div>
            <h3><span class="cake">그뤼에르 치즈 무스</span><br>Gruyere Cheese Mousse</h3>
            <p class="cake_info4">겉은 블랙 초코 크런치로 커버되고, 안은 화이트<br>그뤼에르치즈 무스와 시트로 구성된<br>반전 무스케이크<br>*난류,우유,대두,밀,돼지고기 함유</p>
            <p class="nutri">1회 제공량 (130g)   /   칼로리 (450kcal)<br>당류 (22g / 22%)   /   단백질 (6g / 11%)<br>포화지방 (18g / 120%)   /   나트륨 (180mg / 9%)</p>
           </section><!--//cake_24_info-->
        </section><!--//cake_24-->
        
            <p class="b_menu_title">벨지안 가나슈</p>
            <p class="b_menu_title">떠먹는 딸기 레어 치즈</p>
            <p class="b_menu_title">떠먹는 스 아이스박스</p>
            <p class="b_menu_title1">그뤼에르 치즈 무스</p>
            
        <section class="cake_25">
          <div class="menu_img">
           <div class="cake25_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="cake_25_info">
            <div class="info_close"></div>
            <h3><span class="cake">트리플 초콜릿 무스</span><br>Triple Chocolate Mousse Cake</h3>
            <p class="cake_info4">다크, 밀크, 화이트 세 가지 초콜릿을 한 번에<br>즐길 수 있는 Triple Chocolate Layer<br>무스케이크<br>*계란,우유,대두,밀,돼지고기 함유</p>
            <p class="nutri">1회 제공량 (112g)   /   칼로리 (365kcal)<br>류 (22g / 22%)   /   단백질 (5g / 9%)<br>포화지방 (16g / 107%)   /   나트륨 (85mg / 4%)</p>
           </section><!--//cake_25_info-->
        </section><!--//cake_25-->
        
        <section class="cake_26">
          <div class="menu_img">
           <div class="cake26_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="cake_26_info">
            <div class="info_close"></div>
            <h3><span class="cake">뉴욕 치즈</span><br>Newyork Cheese Cake</h3>
            <p class="cake_info3">부드럽고 촉촉한 식감과 진한 치즈 맛을<br>느낄 수 있는 뉴욕스타일의 구움치즈케이크<br>* 계란, 우유, 대두, 밀, 쇠고기 함유</p>
            <p class="nutri">1회 제공량 (102g)   /   칼로리 (310kcal)<br>당류 (21g / 21%)   /   단백질 (5g / 9%)<br>포화지방 (14g / 93%)   /   나트륨 (200mg / 10%)</p>
           </section><!--//cake_26_info-->
        </section><!--//cake_26-->
        
        <section class="cake_27">
          <div class="menu_img">
           <div class="cake27_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="cake_27_info">
            <div class="info_close"></div>
            <h3><span class="cake">로즈베리 생크림</span><br>Rose Berry Fresh Cream Cake</h3>
            <p class="cake_info4">부드러운 화이트 초콜릿 생크림과 상큼한<br>라즈베리 꿀리Coulis의 촉촉한 맛에 은은하게<br>장미향이 어우러지는 생크림 케이크<br>*계란,우유,대두,밀 함유</p>
            <p class="nutri">1회 제공량 (91g)   /   칼로리 (300kcal)<br>당류 (21g / 21%)   /   단백질 (4g / 7%)<br>포화지방 (12g / 80%)   /   나트륨 (100mg / 5%)</p>
           </section><!--//cake_27_info-->
        </section><!--//cake_27-->
        
        <section class="cake_28">
          <div class="menu_img">
           <div class="cake28_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="cake_28_info">
            <div class="info_close"></div>
            <h3><span class="cake">레드벨벳</span><br>Red Velvet Cake</h3>
            <p class="cake_info4">인상적인 붉은 컬러 레드벨벳 4단 시트에<br>과일 데코로 상큼함을 더하고, 진한 크림치즈로<br>아이싱된 케이크<br>*난류,우유,대두,밀,아황산류,쇠고기 함유</p>
            <p class="nutri">1회 제공량 (153g)   /   칼로리 (375kcal)<br>당류 (32g / 32%)   /   단백질 (4g / 7%)<br>포화지방 (13g / 87%)   /   나트륨 (170mg / 9%)</p>
           </section><!--//cake_28_info-->
        </section><!--//cake_28-->
        
            <p class="b_menu_title">트리플 초콜릿 무스</p>
            <p class="b_menu_title">뉴욕 치즈</p>
            <p class="b_menu_title">로즈베리 생크림</p>
            <p class="b_menu_title1">레드벨벳</p>
            
        <section class="cake_29">
          <div class="menu_img">
           <div class="cake29_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="cake_29_info">
            <div class="info_close"></div>
            <h3><span class="cake">딸기 요거</span><br>Strawberry Yogur Fresh Cream Cake</h3>
            <p class="cake_info5">생크림 플레인 요거트, 담백한 프랑스산<br>생크림과 부드러운 시트가 잘 어울리는 케익으로<br>딸기로 데코레이션하여 상큼함을 더한 케익<br>*계란, 우유, 대두, 밀, 아황산류 함유<br>* 매장 별로 딸기 외 대체 과일 데코레이션운영</p>
            <p class="nutri">1회 제공량 (107g)   /   칼로리 (270kcal)<br>당류 (22g / 22%)   /   단백질 (4g / 7%)<br>포화지방 (9g / 60%)   /   나트륨 (100mg / 5%)</p>
           </section><!--//cake_29_info-->
        </section><!--//cake_29-->
        
        <section class="cake_30">
          <div class="menu_img">
           <div class="cake30_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="cake_30_info">
            <div class="info_close"></div>
            <h3><span class="cake">클래식 가토</span><br>Classic Gateau Chocolate</h3>
            <p class="cake_info4">부드러운 초코시트에 다크와 밀크가 혼합된<br>초콜릿 가나슈를 샌드하여 부드럽고 진한 맛을<br>즐길 수 있는 케이크<br>*난류,우유,대두,밀 함유</p>
            <p class="nutri">1회 제공량 (107g)   /   칼로리 (275kcal)<br>당류 (16g / 16%)   /   단백질 (5g / 9%)<br>포화지방 (12g / 80%)   /   나트륨 (70mg / 4%)</p>
           </section><!--//cake_30_info-->
        </section><!--//cake_30-->
        
        <section class="cake_31"></section>
        <section class="cake_32"></section>
        
            <p class="b_menu_title">딸기 요거</p>
            <p class="b_menu_title1">클래식 가토</p>
        </section><!--//f_cake-->

        <section class="f_icecreme">
          <section class="icecreme_title">
            <p><span class="title_b">아이스크림</span>투썸플레이스만의 아이스크림을 즐겨보세요!</p>    
        </section><!--//icecreme_title-->
           
        <section class="ice_1">
          <div class="menu_img">
           <div class="ice1_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="ice_1_info">
             <div class="info_close"></div>
             <h3><span class="ice">블루베리 파블랑</span><br>Blueberry Pablanc</h3>
             <p class="ice_info4">블루베리 요거트에 블루베리, 산딸기, 그래놀라,<br> 소프트 아이스크림이 조화로운 상큼달콤한<br>아이스크림 디저트 음료<br>* 계란, 우유, 밀 함유</p>
             <p class="nutri">1회 제공량 (232ml)   /   칼로리 (270kcal)<br>당류 (27g / 27%)   /   단백질 (5g / 9%)<br>포화지방 (6g / 40%)   /   나트륨 (75mg / 4%)</p>
            </section><!--//ice_1_info-->
         </section><!--//ice_1-->
         
         <section class="ice_2">
          <div class="menu_img">
           <div class="ice2_img zero"></div>
           </div>
            <section class="ice_2_info">
             <div class="info_close"></div>
             <h3><span class="ice">쇼콜라쿠키 파브랑</span><br>Chocolat Cookie Pablanc</h3>
             <p class="ice_info4">발로나 초콜릿에 크런치한 초코 과자, 와플과<br>아이스크림을 층층이 올려 달콤하게 즐기는<br>아이스크림 디저트 음료<br>*계란, 우유, 대두, 밀 함유</p>
             <p class="nutri">1회 제공량 (220ml)   /   칼로리 (355kcal)<br>당류 (23g / 23%)   /   단백질 (6g / 11%)<br>포화지방 (10g / 67%)   /   나트륨 (190mg / 10%)</p>
            </section><!--//ice_2_info-->
         </section><!--//ice_2-->
         
         <section class="ice_3">
          <div class="menu_img">
           <div class="ice3_img zero"></div>
           </div>
            <section class="ice_3_info">
             <div class="info_close"></div>
             <h3><span class="ice">소프트아이스크림 콘</span><br>Soft Ice Cream_Cone</h3>
             <p class="ice_info3">바삭하고 고소한 수제 와플콘과 함께 즐길 수<br>있는, 입안 가득 꽉 차는 크리미한 풍미의<br>소프트 아이스크림</p>
             <p class="nutri">1회 제공량 (135g)   /   칼로리 (325kcal)<br>당류 (21g / 21%)   /   단백질 (6g / 10%)<br>포화지방 (10g / 67%)   /   나트륨 (160mg / 8%)</p>
            </section><!--//ice_3_info-->
         </section><!--//ice_3-->
         
         <section class="ice_4">
          <div class="menu_img">
           <div class="ice4_img zero"></div>
           </div>
            <section class="ice_4_info">
             <div class="info_close"></div>
             <h3><span class="ice">소프트 아이스크림 컵</span><br>Soft Ice Cream_Cup</h3>
             <p class="ice_info">입안 가득 꽉 차는 크리미한 풍미의 부드러운<br>소프트 아이스크림</p>
             <p class="nutri">1회 제공량 (110g)   /   칼로리 (195kcal)<br>당류 (17g / 17%)   /   단백질 (4g / 7%)<br>포화지방 (7g / 47%)   /   나트륨 (70mg / 4%)</p>
            </section><!--//ice_4_info-->
         </section><!--//ice_4-->
          
            <p class="b_menu_title">블루베리 파블랑</p>
            <p class="b_menu_title">쇼콜라쿠키 파브랑</p>
            <p class="b_menu_title">소프트아이스크림 콘</p>
            <p class="b_menu_title1">소프트아이스크림 컵</p>
            
        </section><!--//f_icecreme-->   
        
        <section class="f_macaron">
          <section class="macaron_title">
            <p><span class="title_b">마카롱 / 초콜렛</span>투썸플레이스 다양한 디저트로 달콤한 시간을보내세요! </p>    
        </section><!--//macaron_title-->
        
        <section class="maca_1">
          <div class="menu_img">
           <div class="maca1_img one"></div>
           </div>
           <div class="new_sticker"></div>
            <section class="maca_1_info">
             <div class="info_close"></div>
             <h3><span class="maca">유자 레몬 마카롱</span><br>Macaron [Citron Lemon]</h3>
             <p class="maca_info4">프랑스 대표 초콜릿 브랜드 발로나의 유자<br>초콜릿으로 만든 진한 가나슈 필링과 레몬의<br>상큼함이 더해진 마카롱<br>*계란,우유,대두,밀 함유</p>
             <p class="nutri">1회 제공량 (25g)   /   칼로리 (105kcal)<br>당류 (11g / 11%)   /   단백질 (1g / 2%)<br>포화지방 (2g / 13%)   /   나트륨 (10mg / 1%)</p>
            </section><!--//maca_1_info-->
         </section><!--//maca_1-->
         
         <section class="maca_2">
          <div class="menu_img">
           <div class="maca2_img one"></div>
           </div>
           <div class="new_sticker"></div>
            <section class="maca_2_info">
             <div class="info_close"></div>
             <h3><span class="maca">마다가스카르 바닐라 마카롱</span><br>Macaron [Madagascar Vanilla]</h3>
             <p class="maca_info3">마다가스카르 바닐라빈이 듬뿍 들어간 가나슈가<br>특징인 달콤한 마카롱<br>*계란, 우유, 대두, 밀 함유</p>
             <p class="nutri">1회 제공량 (25g)   /   칼로리 (100kcal)<br>당류 (10g / 10%)   /   단백질 (1g / 2%)<br>포화지방 (2g / 13%)   /   나트륨 (15mg / 1%)</p>
            </section><!--//maca_2_info-->
         </section><!--//maca_2-->
         
         <section class="maca_3">
          <div class="menu_img">
           <div class="maca3_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="maca_3_info">
             <div class="info_close"></div>
             <h3><span class="maca">산딸기 마카롱</span><br>Macaron [Raspberry]</h3>
             <p class="maca_info3">품질좋은 산딸기 퓨레를 사용하여 진짜 산딸기를<br>먹는 듯한 새콤달콤함을 느낄 수 있는 제품<br>*계란, 우유, 대두, 밀 함유</p>
             <p class="nutri">1회 제공량 (25g)   /   칼로리 (100kcal)<br>당류 (12g / 12%)   /   단백질 (1g / 2%)<br>포화지방 (1.1g / 7%)   /   나트륨 (10mg / 1%)</p>
            </section><!--//maca_3_info-->
         </section><!--//maca_3-->
         
         <section class="maca_4">
          <div class="menu_img">
           <div class="maca4_img zero"></div>
           </div>
            <section class="maca_4_info">
             <div class="info_close"></div>
             <h3><span class="maca">그린티 마카롱</span><br>Macaron [Green Tea]</h3>
             <p class="maca_info3">국내산 녹차가루를 사용하여 깊고 그윽한 향이<br>살아있는 녹차 마카롱<br>*계란, 우유, 대두, 밀 함유</p>
             <p class="nutri">1회 제공량 (25g)   /   칼로리 (100kcal)<br>당류 (10g / 10%)   /   단백질 (1g / 2%)<br>포화지방 (1.4g / 9%)   /   나트륨 (15mg / 1%)</p>
            </section><!--//maca_4_info-->
         </section><!--//maca_4-->
          
            <p class="b_menu_title">유자 레몬 마카롱</p>
            <p class="b_menu_title">마다가스카르 바닐라 마카롱</p>
            <p class="b_menu_title">산딸기 마카롱</p>
            <p class="b_menu_title1">그린티 마카롱</p>
            
        <section class="maca_5">
          <div class="menu_img">
           <div class="maca5_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="maca_5_info">
             <div class="info_close"></div>
             <h3><span class="maca">벨지안초코릿 마카롱 </span><br>Macaron [Belgian Chocolate]</h3>
             <p class="maca_info3">프리미엄 초콜릿을 사용하여 깊고 진한<br>카카오의 풍미가 느껴지는 제품<br>*계란,우유,대두,밀 함유</p>
             <p class="nutri">1회 제공량 (25g)   /   칼로리 (105kcal)<br>당류 (11g / 11%)   /   단백질 (1g / 2%)<br>포화지방 (1.8g / 12%)   /   나트륨 (10mg / 1%)</p>
            </section><!--//maca_5_info-->
         </section><!--//maca_5-->
         
         <section class="maca_6">
          <div class="menu_img">
           <div class="maca6_img zero"></div>
           </div>
            <section class="maca_6_info">
             <div class="info_close"></div>
             <h3><span class="maca">블루베리 마카롱</span><br>Macaron [Blueberry]</h3>
             <p class="maca_info3">화이트가나슈와 블루베리 원물이 조화롭게<br>어우러지는 마카롱<br>*계란,우유,대두,밀 함유</p>
             <p class="nutri">1회 제공량 (25g)   /   칼로리 (100kcal)<br>당류 (10g / 10%)   /   단백질 (1g / 2%)<br>포화지방 (1.2g / 8%)   /   나트륨 (10mg / 1%)</p>
            </section><!--//maca_6_info-->
         </section><!--//maca_6-->
         
         <section class="maca_7">
          <div class="menu_img">
           <div class="maca7_img zero"></div>
           </div>
            <section class="maca_7_info">
             <div class="info_close"></div>
             <h3><span class="maca">마카롱 세트 6개입</span><br>Macaron Set [6EA]</h3>
             <p class="maca7_info5">눈길을 사로잡는 생생한 컬러, 한입 베어<br> 물었을 때 녹아내리듯 부서지는 크런치함, 풍부한<br>크림의 촉촉한 부드러움, 입안 가득 퍼지는 달콤한<br>6가지 마카롱을 한 번에 맛 볼 수 있는 세트 제품<br>*계란,우유,대두,밀 함유</p>
             <p class="nutri">원산지 및 영야성분은 개별 제품정보를<br>확인하여 주세요! </p>
            </section><!--//maca_7_info-->
         </section><!--//maca_7-->
         
         <section class="maca_8">
          <div class="menu_img">
           <div class="maca8_img zero"></div>
           </div>
            <section class="maca_8_info">
             <div class="info_close"></div>
             <h3><span class="maca">마카롱 세트 12개입</span><br>Macaron Set [12EA]</h3>
             <p class="maca8_info5">눈길을 사로잡는 생생한 컬러, 한입 베어<br> 물었을 때 녹아내리듯 부서지는 크런치함, 풍부한<br>크림의 촉촉한 부드러움, 입안 가득 퍼지는 달콤한<br>6가지 마카롱을 한 번에 맛 볼 수 있는 세트 제품<br>*계란,우유,대두,밀 함유</p>
             <p class="nutri">원산지 및 영야성분은 개별 제품정보를<br>확인하여 주세요! </p>
            </section><!--//maca_8_info-->
         </section><!--//maca_8-->
          
            <p class="b_menu_title">벨지안초코릿 마카롱</p>
            <p class="b_menu_title">블루베리 마카롱</p>
            <p class="b_menu_title">마카롱 세트 6개입</p>
            <p class="b_menu_title1">마카롱 세트 12개입</p>
            
        <section class="maca_9">
          <div class="menu_img">
           <div class="maca9_img zero"></div>
           </div>
            <section class="maca_9_info">
             <div class="info_close"></div>
             <h3><span class="maca">벨지안 화이트 쿠키앤크림</span><br>Belgian White Cookie and Cream<br>Chocolate</h3>
             <p class="maca_info">벨기에산 화이트 초콜릿으로 만든 달콤한<br>쿠키앤크림 볼 초콜릿</p>
             <p class="nutri">* 표기사항 및 영양성분 정보는<br>제품에 기재되어 있습니다.</p>
            </section><!--//maca_9_info-->
         </section><!--//maca_9-->
         
         <section class="maca_10">
          <div class="menu_img">
           <div class="maca10_img zero"></div>
           </div>
            <section class="maca_10_info">
             <div class="info_close"></div>
             <h3><span class="maca">벨지안 밀크</span><br>Belgian Milk Chocolate</h3>
             <p class="maca_info">벨기에산 밀크 초콜릿으로 코팅한 달콤한<br>코코볼로 남녀노소 누구나 좋아하는<br>베이직 플레이버의 볼 초콜릿</p>
             <p class="nutri">* 표기사항 및 영양성분 정보는<br>제품에 기재되어 있습니다.</p>
            </section><!--//maca_10_info-->
         </section><!--//maca_10-->
         
         <section class="maca_11">
          <div class="menu_img">
           <div class="maca11_img zero"></div>
           </div>
            <section class="maca_11_info">
             <div class="info_close"></div>
             <h3><span class="maca">벨지안 다크 아몬드</span><br>Belgian Dark Almond Chocolate</h3>
             <p class="maca_info">벨기에산 다크 초콜릿으로 코팅된 크런치한<br>아몬드로 커피와 곁들여 즐기기 좋은 볼 초콜릿</p>
             <p class="nutri">* 표기사항 및 영양성분 정보는<br>제품에 기재되어 있습니다.</p>
            </section><!--//maca_11_info-->
         </section><!--//maca_11-->
         
         <section class="maca_12">
          <div class="menu_img">
           <div class="maca12_img zero"></div>
           </div>
            <section class="maca_12_info">
             <div class="info_close"></div>
             <h3><span class="maca">벨지안 초콜릿 3개입 SET</span><br>BBelgian Chocolate Gift Set</h3>
             <p class="maca_info">벨기에산 초콜릿으로 만든 세 가지 플레이버의<br>볼 초콜릿 세트</p>
             <p class="nutri">* 표기사항 및 영양성분 정보는<br>제품에 기재되어 있습니다.</p>
            </section><!--//maca_12_info-->
         </section><!--//maca_12-->
         
            <p class="b_menu_title">벨지안 화이트 쿠키앤크림</p>
            <p class="b_menu_title">벨지안 밀크</p>
            <p class="b_menu_title">벨지안 다크 아몬드</p>
            <p class="b_menu_title1">벨지안 초콜릿 3개입 SET</p>
        
        </section><!--//f_macaron-->
        
        <section class="f_sandwich">
          <section class="sandwich_title">
            <p><span class="title_b">샌드위치</span>투썸플레이스 영양만점 든든한 샌드위치!</p>    
        </section><!--//sandwich_title-->
        
        <section class="san_1">
          <div class="menu_img">
           <div class="san1_img one"></div>
           </div>
           <div class="new_sticker"></div>
            <section class="san_1_info">
             <div class="info_close"></div>
             <h3><span class="san">에그 베이컨브리오슈</span><br>EGG BACON BRIOCHE</h3>
             <p class="san_info4">두툼하고 촉촉한 계란 오믈렛과 베이컨, 치즈가<br>브리오슈 빵과 어우러진 샌드위치<br>모닝세트 운영시간 open~am10:00<br>*계란,우유,대두,밀,돼지고기,닭고기,쇠고기 함유</p>
             <p class="nutri">1회 제공량 (195g)   /   칼로리 (400kcal)<br>당류 (4g / 4%)   /   단백질 (24g / 43%)<br>포화지방 (6g / 40%)   /   나트륨 (370mg / 19%)</p>
            </section><!--//san_1_info-->
         </section><!--//san_1-->
         
         <section class="san_2">
          <div class="menu_img">
           <div class="san2_img one"></div>
           </div>
           <div class="new_sticker"></div>
            <section class="san_2_info">
             <div class="info_close"></div>
             <h3><span class="san">토마토 머쉬룸 피자 토스트</span><br>TOMATO MUSHROOM PIZZA TOAST</h3>
             <p class="san2_info3">볶은 버섯과 토마토 소스가 어우러진 피자 토스트<br>모닝세트 운영시간 open~am10:00<br>*밀,대두,우유,계란,토마토 함유</p>
             <p class="nutri">1회 제공량 (140g)   /   칼로리 (340kcal)<br>당류 (5g / 5%)   /   단백질 (17g / 31%)<br>포화지방 (8g / 53%)   /   나트륨 (610mg / 31%)</p>
            </section><!--//san_2_info-->
         </section><!--//san_2-->
         
         <section class="san_3">
          <div class="menu_img">
           <div class="san3_img zero"></div>
           </div>
            <section class="san_3_info">
             <div class="info_close"></div>
             <h3><span class="san">스윗 에그 토스트</span><br>SWEET EGG TOAST</h3>
             <p class="san_info4">스크램블에그, 햄, 치즈에 달콤한 연유가 들어간<br>단짠 토스트<br>*계란, 우유, 대두, 밀, 돼지고기, 쇠고기<br>조개류굴 함유</p>
             <p class="nutri">1회 제공량 (169g)   /   칼로리 (260kcal)<br>당류 (5g / 5%)   /   단백질 (13g / 23%)<br>포화지방 (4.2g / 28%)   /   나트륨 (370mg / 19%)</p>
            </section><!--//san_3_info-->
         </section><!--//san_3-->
         
          <section class="san_4">
          <div class="menu_img">
           <div class="san4_img zero"></div>
           </div>
            <section class="san_4_info">
             <div class="info_close"></div>
             <h3><span class="san">클래식 루벤</span><br>CLASSIC REUBEN</h3>
             <p class="san_info4">비프 파스트라미, 사워크라우트, 에멘탈 치즈로<br>만든 클래식 루벤 샌드위치<br>*계란, 우유, 대두, 밀, 토마토, 쇠고기, 아황산류 함유</p>
             <p class="nutri">1회 제공량 (213g)   /   칼로리 (460kcal)<br>당류 (4g / 4%)   /   단백질 (29g / 53%)<br>포화지방 (9g / 60%)   /   나트륨 (1170mg / 59%)</p>
            </section><!--//san_4_info-->
         </section><!--//san_4-->
         
            <p class="b_menu_title">에그 베이컨브리오슈</p>
            <p class="b_menu_title">토마토 머쉬룸 피자 토스트</p>
            <p class="b_menu_title">스윗 에그 토스트</p>
            <p class="b_menu_title1">클래식 루벤</p>
            
        <section class="san_5">
          <div class="menu_img">
           <div class="san5_img zero"></div>
           </div>
            <section class="san_5_info">
             <div class="info_close"></div>
             <h3><span class="san">멜팅 치즈 &amp; 비프</span><br>MELTING CHEESE &amp; BEEF</h3>
             <p class="san_info3">체다치즈와 소고기가 푸짐하게 들어간<br>치즈버거 맛의 샌드위치<br>*우유, 대두, 밀, 쇠고기 함유</p>
             <p class="nutri">1회 제공량 (219g)   /   칼로리 (375kcal)<br>당류 (5g / 5%)   /   단백질 (25g / 45%)<br>포화지방 (4.9g / 33%)   /   나트륨 (590mg / 30%)</p>
            </section><!--//san_5_info-->
         </section><!--//san_5-->
         
         <section class="san_6">
          <div class="menu_img">
           <div class="san6_img zero"></div>
           </div>
            <section class="san_6_info">
             <div class="info_close"></div>
             <h3><span class="san">스파이시 튜나 바게트</span><br>SPICY TUNA BAGUETTE</h3>
             <p class="san_info3">12가지 곡물 사워도우 바게트로 만든 매콤한<br>튜나 샌드위치<br>*대두, 밀, 우유, 계란, 쇠고기 함유</p>
             <p class="nutri">1회 제공량 (268g)   /   칼로리 (540kcal)<br>당류 (1g / 1%)   /   단백질 (22g / 40%)<br>포화지방 (3g / 20%)   /   나트륨 (990mg / 50%)</p>
            </section><!--//san_6_info-->
         </section><!--//san_6-->
         
         <section class="san_7">
          <div class="menu_img">
           <div class="san7_img zero"></div>
           </div>
            <section class="san_7_info">
             <div class="info_close"></div>
             <h3><span class="san">초리조&amp;모짜렐라 크루아상</span><br>HOT CHORIZO AND MOZZARELLA<br>CROISSANT</h3>
             <p class="san_info4">스파이시 초리조와 멜팅 모짜렐라 치즈를 함께<br>즐길 수 있는 프렌치 크루아상<br>*초리조chorizo : 스페인 전통 소시지<br>*계란, 우유, 밀, 돼지고기 함유</p>
             <p class="nutri">1회 제공량 (94g)   /   칼로리 (330kcal)<br>당류 (3g / 3%)   /   단백질 (15g / 27%)<br>포화지방 (11g / 73%)   /   나트륨 (500mg / 25%)</p>
            </section><!--//san_7_info-->
         </section><!--//san_7-->
         
         <section class="san_8">
          <div class="menu_img">
           <div class="san8_img zero"></div>
           </div>
            <section class="san_8_info">
             <div class="info_close"></div>
             <h3><span class="san">애플&amp;까망베르 크루아상</span><br>APPLE AND CAMEMBERT CRIOSSANT</h3>
             <p class="san_info3">아삭한 사과 슬라이스와 부드러운 까망베르<br>치즈가 함께 어우러진 프렌치 크루아상<br>*계란, 우유, 대두, 밀, 아황산류 함유</p>
             <p class="nutri">1회 제공량 (133g)   /   칼로리 (400kcal)<br>당류 (6g / 6%)   /   단백질 (10g / 18%)<br>포화지방 (14g / 93%)   /   나트륨 (460mg / 23%)</p>
            </section><!--//san_8_info-->
         </section><!--//san_8-->
         
            <p class="b_menu_title">멜팅 치즈 &amp; 비프</p>
            <p class="b_menu_title">스파이시 튜나 바게트</p>
            <p class="b_menu_title">초리조&amp;모짜렐라 크루아상</p>
            <p class="b_menu_title1">애플&amp;까망베르 크루아상</p>
            
        <section class="san_9">
          <div class="menu_img">
           <div class="san9_img zero"></div>
           </div>
            <section class="san_9_info">
             <div class="info_close"></div>
             <h3><span class="san">그릴드포카치아갈릭치킨</span><br>GRILLED FOCACCIA GARLIC CHICKEN</h3>
             <p class="san_info3">부드러운 치킨과 갈릭마요, 썬드라이 토마토의<br>상큼한 맛이 어우러진 따뜻한 샌드위치<br>*계란,우유,대두,밀,토마토,닭고기,쇠고기 함유</p>
             <p class="nutri">1회 제공량 (163g)   /   칼로리 (300kcal)<br>당류 (2g / 2%)   /   단백질 (17g / 30%)<br>포화지방 (1.0g / 7%)   /   나트륨 (610mg / 31%)</p>
            </section><!--//san_9_info-->
         </section><!--//san_9-->
         
             
        <section class="san_10">
          <div class="menu_img">
           <div class="san10_img zero"></div>
           </div>
            <section class="san_10_info">
             <div class="info_close"></div>
             <h3><span class="san">그릴드포카치아햄&amp;치즈</span><br>GRILLED FOCACCIA HAM&amp;CHEESE</h3>
             <p class="san_info3">고소한 치즈의 풍미와 포카치아의 식감을 함께<br>즐기는 따뜻한 샌드위치<br>*계란,우유,대두,밀,쇠고기 함유</p>
             <p class="nutri">1회 제공량 (268g)   /   칼로리 (540kcal)<br>당류 (1g / 1%)   /   단백질 (22g / 40%)<br>포화지방 (3g / 20%)   /   나트륨 (990mg / 50%)</p>
            </section><!--//san_10_info-->
         </section><!--//san_10-->
         
         <section class="san_11">
          <div class="menu_img">
           <div class="san11_img zero"></div>
           </div>
            <section class="san_11_info">
             <div class="info_close"></div>
             <h3><span class="san">토마토모짜렐라랩</span><br>TOMATO MOZZARELLA WRAP</h3>
             <p class="san_info5">토마토 또띠아에 신선한 토마토와 모짜렐라치즈<br>돌돌말아 매콤한 타르타르소스와 함께 간편하게<br>즐기는 랩샌드위치<br>*난류,우유,대두,밀,돼지고기,토마토,아황산류<br>쇠고기 함유</p>
             <p class="nutri">1회 제공량 (251g)   /   칼로리 (455kcal)<br>당류 (2g / 2%)   /   단백질 (22g / 40%)<br>포화지방 (13g / 87%)   /   나트륨 (920mg / 46%)</p>
            </section><!--//san_11_info-->
         </section><!--//san_11-->
         
         <section class="san_12">
          <div class="menu_img">
           <div class="san12_img zero"></div>
           </div>
            <section class="san_12_info">
             <div class="info_close"></div>
             <h3><span class="san">시저치킨랩</span><br>CAESAR CHICKEN WRAP</h3>
             <p class="san_info4">클로렐라 또띠아에 도톰한 치킨과 상큼한 야채를<br>시저드레싱과 함께 간편하게 즐기는 랩샌드위치<br>*난류,우유,대두,밀,돼지고기,아황산류,닭고기<br>쇠고기 함유</p>
             <p class="nutri">1회 제공량 (194g)   /   칼로리 (395kcal)<br>당류 (4g / 4%)   /   단백질 (21g / 38%)<br>포화지방 (5g / 33%)   /   나트륨 (960mg / 48%)</p>
            </section><!--//san_12_info-->
         </section><!--//san_12-->
         
            <p class="b_menu_title">그릴드포카치아갈릭치킨</p>
            <p class="b_menu_title">그릴드포카치아햄&amp;치즈</p>
            <p class="b_menu_title">토마토모짜렐라랩</p>
            <p class="b_menu_title1">시저치킨랩</p>
            
        <section class="san_13">
          <div class="menu_img">
           <div class="san13_img zero"></div>
           </div>
            <section class="san_13_info">
             <div class="info_close"></div>
             <h3><span class="san">올리브 치킨 파니니</span><br>OLIVE CHICKEN PANINI</h3>
             <p class="san_info3">올리브 타페나드를 듬뿍 바른 빵에 선드라이<br>토마토와 담백한 치킨으로 맛을 낸 파니니<br>*우유,대두,밀,토마토,닭고기 함유</p>
             <p class="nutri">1회 제공량 (206g)   /   칼로리 (590kcal)<br>당류 (4g / 4%)   /   단백질 (35g / 64%)<br>포화지방 (11g / 73%)   /   나트륨 (1310mg / 66%)</p>
            </section><!--//san_13_info-->
         </section><!--//san_13-->
         
         <section class="san_14">
          <div class="menu_img">
           <div class="san14_img zero"></div>
           </div>
            <section class="san_14_info">
             <div class="info_close"></div>
             <h3><span class="san">칠리 소시지 바게트 샌드위치</span><br>CHILI SAUSAGE BAGUETTE SANDWICH</h3>
             <p class="san_info4">탱글탱글한 소시지와 칠리미트 소스, 그리고<br>고소한 치즈가 매력적인 바게트 샌드위치<br>*난류,우유,대두,밀,돼지고기,토마토,아황산류<br>닭고기,쇠고기 함유</p>
             <p class="nutri">1회 제공량 (238g)   /   칼로리 (440kcal)<br>당류 (7g / 7%)   /   단백질 (18g / 32%)<br>포화지방 (4.8g / 32%)   /   나트륨 (1270mg / 63%)</p>
            </section><!--//san_14_info-->
         </section><!--//san_14-->
         
         <section class="san_15">
          <div class="menu_img">
           <div class="san15_img zero"></div>
           </div>
            <section class="san_15_info">
             <div class="info_close"></div>
             <h3><span class="san">할라피뇨 스테이크 바게트 샌드위치</span><br>JALAPENO STEAK BAGUETTE SANDWICH</h3>
             <p class="san_info4">맛있게 구운 소고기와 매콤한 할라피뇨 위에<br>치즈를 올려 든든한 한 끼에 어울리는<br>필라델피아식 샌드위치<br>*난류,우유,대두,밀,쇠고기 함유</p>
             <p class="nutri">1회 제공량 (244g)   /   칼로리 (585kcal)<br>당류 (7g / 7%)   /   단백질 (27g / 49%)<br>포화지방 (11g / 71%)   /   나트륨 (1530mg / 77%)</p>
            </section><!--//san_15_info-->
         </section><!--//san_15-->
         
         <section class="san_16">
          <div class="menu_img">
           <div class="san16_img zero"></div>
           </div>
            <section class="san_16_info">
             <div class="info_close"></div>
             <h3><span class="san">페스토 햄치즈 파니니</span><br>PESTO HAM &amp; CHEESE</h3>
             <p class="san_info">터키햄, 스위스 치즈, 후레쉬 모짜렐라 치즈에<br>바질페스토가 어우러진 치아바타 HOT 샌드위치</p>
             <p class="nutri">1회 제공량 (186g)   /   칼로리 (535kcal)<br>당류 (4g / 4%)   /   단백질 (24g / 44%)<br>포화지방 (11g / 73%)   /   나트륨 (780mg / 39%)</p>
            </section><!--//san_16_info-->
         </section><!--//san_16-->
         
            <p class="b_menu_title">올리브 치킨 파니니</p>
            <p class="b_menu_title">칠리 소시지 바게트 샌드위치</p>
            <p class="b_menu_title">할라피뇨 스테이크 바게트 샌드위치</p>
            <p class="b_menu_title1">페스토 햄치즈 파니니</p>
            
        <section class="san_17">
          <div class="menu_img">
           <div class="san17_img zero"></div>
           </div>
            <section class="san_17_info">
             <div class="info_close"></div>
             <h3><span class="san">멕시칸 파니니</span><br>MEXICAN PANINI</h3>
             <p class="san_info">데리야끼 치킨, 볶은 파프리카, 후레쉬 모짜렐라<br>치즈를 넣은 치아바타 HOT 샌드위치</p>
             <p class="nutri">1회 제공량 (218g)   /   칼로리 (550kcal)<br>당류 (6g / 6%)   /   단백질 (27g / 49%)<br>포화지방 (11g / 73%)   /   나트륨 (1060mg / 53%)</p>
            </section><!--//san_17_info-->
         </section><!--//san_17-->
         
         <section class="san_18">
          <div class="menu_img">
           <div class="san18_img zero"></div>
           </div>
            <section class="san_18_info">
             <div class="info_close"></div>
             <h3><span class="san">바베큐 치킨 파니니</span><br>BARBECUE CHICKEN PANINI</h3>
             <p class="san_info3">바비큐 소스를 곁들인 치킨을 넣은 치아바타<br>HOT 샌드위치<br>*우유,대두,밀,토마토,닭고기 함유</p>
             <p class="nutri">1회 제공량 (271g)   /   칼로리 (500kcal)<br>당류 (11g /11%)   /   단백질 (33g / 60%)<br>포화지방 (4g / 27%)   /   나트륨 (950mg / 48%)</p>
            </section><!--//san_18_info-->
         </section><!--//san_18-->
         
         <section class="san_19">
          <div class="menu_img">
           <div class="san19_img zero"></div>
           </div>
            <section class="san_19_info">
             <div class="info_close"></div>
             <h3><span class="san">스크램블 에그 샌드위치</span><br>SCRAMBLED EGG SANDWICH</h3>
             <p class="san_info4">부드러운 우유식빵에 스크램블 에그와 베이컨,<br>치즈가 어우러진 샌드위치<br>모닝세트 운영시간 open~am10:00<br>*계란, 대두, 밀, 우유, 돼지고기, 쇠고기 함유</p>
             <p class="nutri">1회 제공량 (150g)   /   칼로리 (435kcal)<br>당류 (4g / 4%)   /   단백질 (19g / 35%)<br>포화지방 (11g / 73%)   /   나트륨 (850mg / 43%)</p>
            </section><!--//san_19_info-->
         </section><!--//san_19-->
         
         <section class="san_20">
          <div class="menu_img">
           <div class="san20_img zero"></div>
           </div>
            <section class="san_20_info">
             <div class="info_close"></div>
             <h3><span class="san">크로크무슈</span><br>CROQUE-MONSIEUR</h3>
             <p class="san_info3">두툼한 식빵에 터키브레스트 햄과 뮌스터 치즈를<br>넣은 담백하고 든든한 샌드위치<br>*난류,우유,대두,밀 함유</p>
             <p class="nutri">1회 제공량 (155g)   /   칼로리 (415kcal)<br>당류 (5g / 5%)   /   단백질 (24g / 44%)<br>포화지방 (11g / 73%)   /   나트륨 (750mg / 38%)</p>
            </section><!--//san_20_info-->
         </section><!--//san_20-->
         
            <p class="b_menu_title">멕시칸 파니니</p>
            <p class="b_menu_title">바베큐 치킨 파니니</p>
            <p class="b_menu_title">할라피뇨 스테이크 바게트 샌드위치</p>
            <p class="b_menu_title1">크로크무슈</p>
            
        <section class="san_21">
          <div class="menu_img">
           <div class="san21_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="san_21_info">
             <div class="info_close"></div>
             <h3><span class="san">B.E.L.T 샌드위치</span><br>B.E.L.T SANDWICH</h3>
             <p class="san_info5">부드러운 우유식빵에 레몬마요네즈<br>스프레드하고 베이컨, 달걀, 로메인, 레터스,<br>토마토를 넣은 기본 샌드위치<br>*난류,우유,대두,밀,돼지고기,토마토,아황산류<br>쇠고기 함유</p>
             <p class="nutri">1회 제공량 (264g)   /   칼로리 (585kcal)<br>당류 (10g / 10%)   /   단백질 (26g / 47%)<br>포화지방 (7g / 47%)   /   나트륨 (1120mg / 56%)</p>
            </section><!--//san_21_info-->
         </section><!--//san_21-->
         
         <section class="san_22">
          <div class="menu_img">
           <div class="san22_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="san_22_info">
             <div class="info_close"></div>
             <h3><span class="san">토마토 모짜렐라</span><br>TOMATO MOZZARELLA CHEESE</h3>
             <p class="san_info4">신선한 토마토와 쫀득한 모짜렐라치즈가<br>어우러진 담백한 이탈리안 샌드위치<br>*난류,우유,대두,밀,돼지고기,토마토,아황산류<br>쇠고기 함유</p>
             <p class="nutri">1회 제공량 (210g)   /   칼로리 (435kcal)<br>당류 (3g /3%)   /   단백질 (24g / 44%)<br>포화지방 (6g / 40%)   /   나트륨 (990mg / 50%)</p>
            </section><!--//san_22_info-->
         </section><!--//san_22-->
         
         <section class="san_23">
          <div class="menu_img">
           <div class="san23_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="san_23_info">
             <div class="info_close"></div>
             <h3><span class="san">레몬치킨클럽</span><br>LEMON-CHICKEN CLUB</h3>
             <p class="san_info5">곡물식빵에 상큼한 레몬,파마산치즈로 맛을 낸<br>치킨샐러드와 바삭한 베이컨, 후레쉬한 야채가<br>들어간 클럽스타일 샌드위치<br>*난류,우유,대두,밀,토마토,아황산류,닭고기<br>쇠고기 함유</p>
             <p class="nutri">1회 제공량 (288g)   /   칼로리 (710kcal)<br>당류 (6g / 6%)   /   단백질 (35g / 64%)<br>포화지방 (7g / 47%)   /   나트륨 (1060mg / 53%)</p>
            </section><!--//san_23_info-->
         </section><!--//san_23-->
         
         <section class="san_24"></section>
         
            <p class="b_menu_title">B.E.L.T 샌드위치</p>
            <p class="b_menu_title">토마토 모짜렐라</p>
            <p class="b_menu_title1">레몬치킨클럽</p>
         
        </section><!--//f_sandwich-->
        
        <section class="f_salad">
          <section class="salad_title">
            <p><span class="title_b">샐러드</span>투썸플레이스 영양만점 든든한 샐러드!</p>    
        </section><!--//salad_title-->
        
        <section class="sal_1">
          <div class="menu_img">
           <div class="sal1_img zero"></div>
           </div>
            <section class="sal_1_info">
             <div class="info_close"></div>
             <h3><span class="sal">반숙란</span><br>SOFT-BOILED EGG</h3>
             <p class="sal1_info">가벼운 식사를 원할 때, 촉촉함이 살아있는 반숙란<br>*계란</p>
             <p class="nutri">1회 제공량 (100g)   /   칼로리 (65kcal)<br>당류 (0g / 0%)   /   단백질 (6g / 11%)<br>포화지방 (1.4g / 9%)   /   나트륨 (190mg / 10%)</p>
            </section><!--//sal_1_info-->
         </section><!--//sal_1-->
         
         <section class="sal_2">
          <div class="menu_img">
           <div class="sal2_img zero"></div>
           </div>
            <section class="sal_2_info">
             <div class="info_close"></div>
             <h3><span class="sal">후무스&amp;베지스틱</span><br>HUMMUS&amp;VEGGIE STICKS</h3>
             <p class="sal_info4">병아리콩을 갈아 만든 고소한 후무스와 신선한<br>베지스틱에 그릭 요거 갈릭 드레싱을 곁들인<br>건강한 샐러드<br>*우유, 대두 함유</p>
             <p class="nutri">1회 제공량 (302g)   /   칼로리 (126kcal)<br>당류 (0g /0%)   /   단백질 (9g / 16%)<br>포화지방 (1.2g / 8%)   /   나트륨 (105mg / 5%)</p>
            </section><!--//sal_2_info-->
         </section><!--//sal_2-->
         
         <section class="sal_3">
          <div class="menu_img">
           <div class="sal3_img zero"></div>
           </div>
            <section class="sal_3_info">
             <div class="info_close"></div>
             <h3><span class="sal">쉬림프 그릭 샐러드</span><br>SHRIMP GREEK SALAD</h3>
             <p class="sal3_info4">스파이시 그릴드 쉬림프, 페타치즈, 신선한 채소에<br>상큼한 레몬 드레싱이 어우러진 싱그러운<br>지중해식 샐러드<br>*우유, 대두, 새우, 토마토, 아황산류 함유</p>
             <p class="nutri">1회 제공량 (191g)   /   칼로리 (171kcal)<br>당류 (0g / 0%)   /   단백질 (11g / 20%)<br>포화지방 (5g / 37%)   /   나트륨 (670mg / 34%)</p>
            </section><!--//sal_3_info-->
         </section><!--//sal_3-->
         
          <section class="sal_4">
          <div class="menu_img">
           <div class="sal4_img zero"></div>
           </div>
            <section class="sal_4_info">
             <div class="info_close"></div>
             <h3><span class="sal">쉬림프 콥 샐러드</span><br>SHRIMP COBB SALAD</h3>
             <p class="sal4_info4">그릴드 쉬림프, 오이, 베이컨 등 일곱 가지 재료가<br>가득! 한 끼 식사로 손색없는 푸짐한 샐러드<br>*계란, 우유, 대두, 밀, 돼지고기, 토마토, 아황산류<br>쇠고기 함유</p>
             <p class="nutri">1회 제공량 (227g)   /   칼로리 (205kcal)<br>당류 (0g / 0%)   /   단백질 (21g / 38%)<br>포화지방 (1.0g / 7%)   /   나트륨 (280mg / 14%)</p>
            </section><!--//sal_4_info-->
         </section><!--//sal_4-->
         
            <p class="b_menu_title">반숙란</p>
            <p class="b_menu_title">후무스&amp;베지스틱</p>
            <p class="b_menu_title">쉬림프 그릭 샐러드</p>
            <p class="b_menu_title1">쉬림프 콥 샐러드</p>
         
         <section class="sal_5">
          <div class="menu_img">
           <div class="sal5_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="sal_5_info">
             <div class="info_close"></div>
             <h3><span class="sal">아보카도 콥 샐러드</span><br>AVOCADO COBB SALAD</h3>
             <p class="sal5_info4">아보카도, 그릴드 치킨, 베이컨 등 일곱 가지 재료가<br>가득! 한 끼 식사로 손색없는 푸짐한 샐러드<br>*계란, 우유, 대두, 밀, 돼지고기, 토마도, 아황산류<br>닭고기, 쇠고기 함유</p>
             <p class="nutri">1회 제공량 (252g)   /   칼로리 (250kcal)<br>당류 (0g / 0%)   /   단백질 (22g / 39%)<br>포화지방 (1.7g / 11%)   /   나트륨 (300mg / 15%)</p>
            </section><!--//sal_5_info-->
         </section><!--//sal_5-->
         
         <section class="sal_6">
          <div class="menu_img">
           <div class="sal6_img zero"></div>
           </div>
            <section class="sal_6_info">
             <div class="info_close"></div>
             <h3><span class="sal">카프레제 샐러드</span><br>CAPRESE SALAD</h3>
             <p class="sal_info3">후레쉬 모짜렐라 치즈와 향긋한 바질, 신선한<br>두가지 토마토가 풍성하게 들어간 샐러드<br>*우유, 대두, 토마토 함유</p>
             <p class="nutri">1회 제공량 (212g)   /   칼로리 (175kcal)<br>당류 (2g /2%)   /   단백질 (11g / 20%)<br>포화지방 (6g / 42%)   /   나트륨 (570mg / 28%)</p>
            </section><!--//sal_6_info-->
         </section><!--//sal_6-->
         
         <section class="sal_7">
          <div class="menu_img">
           <div class="sal7_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="sal_7_info">
             <div class="info_close"></div>
             <h3><span class="sal">허브치킨 가든샐러드</span><br>HERB CHICKEN GARDEN SALAD</h3>
             <p class="sal_info3">로즈마리를 넣어 마리네이드한 그릴드 치킨과<br>신선한 토마토, 채소가 어우러진 샐러드<br>*계란, 대두, 토마토, 닭고기, 쇠고기 함유</p>
             <p class="nutri">1회 제공량 (222g)   /   칼로리 (180kcal)<br>당류 (0g / 0%)   /   단백질 (16g / 29%)<br>포화지방 (0g / 0%)   /   나트륨 (225mg / 11%)</p>
            </section><!--//sal_7_info-->
         </section><!--//sal_7-->
         
         <section class="sal_8">
          <div class="menu_img">
           <div class="sal8_img zero"></div>
           </div>
            <section class="sal_8_info">
             <div class="info_close"></div>
             <h3><span class="sal">그릴드치킨 시저샐러드</span><br>GRILLED CHICKEN CAESAR SALAD</h3>
             <p class="sal8_info4">그릴드 치킨, 고소한 베이컨, 신선한 채소에<br>크리미한 시저드레싱이 어우러진 샐러드<br>*계란, 우유, 대두, 밀, 돼지고기, 아황산류, 닭고기<br>쇠고기 함유</p>
             <p class="nutri">1회 제공량 (177g)   /   칼로리 (235kcal)<br>당류 (0g / 0%)   /   단백질 (21g / 38%)<br>포화지방 (0g / 1%)   /   나트륨 (530mg / 27%)</p>
            </section><!--//sal_8_info-->
         </section><!--//sal_8-->
         
            <p class="b_menu_title">아보카도 콥 샐러드</p>
            <p class="b_menu_title">카프레제 샐러드</p>
            <p class="b_menu_title">허브치킨 가든샐러드</p>
            <p class="b_menu_title1">그릴드치킨 시저샐러드</p>
            
        <section class="sal_9">
          <div class="menu_img">
           <div class="sal9_img zero"></div>
           </div>
            <section class="sal_9_info">
             <div class="info_close"></div>
             <h3><span class="sal">건강한컵 리프레쉬</span><br>HEALTHY CUP REFRESH</h3>
             <p class="sal9_info">하루의 활력을 더하는 사과, 방울토마토와 포도를<br>가득 담은 건강한 과일 한 컵</p>
             <p class="nutri">1회 제공량 (150g)   /   칼로리 (75kcal)<br>당류 (10g / 10%)   /   단백질 (1g / 1%)<br>포화지방 (0g / 0%)   /   나트륨 (3mg / 0%)</p>
            </section><!--//sal_9_info-->
         </section><!--//sal_9-->
         
         <section class="sal_10">
          <div class="menu_img">
           <div class="sal10_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="sal_10_info">
             <div class="info_close"></div>
             <h3><span class="sal">플레인 그릭 요거트</span><br>PLAIN GREEK YOGURT</h3>
             <p class="sal_info4">통곡물의 풍부한 영양소가 담긴 그래놀라가<br>어우러진 건강한 그릭 요거트<br>모닝세트 운영시간 open~am10:00<br>* 우유,밀 함유</p>
             <p class="nutri">1회 제공량 (170g)   /   칼로리 (230kcal)<br>당류 (21g / 21g)   /   단백질 (7g / 13%)<br>포화지방 (2.7g / 18%)   /   나트륨 (120mg / 6%)</p>
            </section><!--//sal_10_info-->
         </section><!--//sal_10-->
         
         <section class="sal_11">
          <div class="menu_img">
           <div class="sal11_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="sal_11_info">
             <div class="info_close"></div>
             <h3><span class="sal">허니 바나나 그릭 요거트</span><br>HONEY BANANA GREEK YOGURT</h3>
             <p class="sal_info4">고소한 그래놀라와 신선한 생과일을 곁들여<br>건강한 그릭요거트<br>모닝세트 운영시간 open~am10:00<br>*우유,밀 함유</p>
             <p class="nutri">1회 제공량 (175g)   /   칼로리 (220kcal)<br>당류 (16g / 16%)   /   단백질 (6g / 10%)<br>포화지방 (2.1g / 14%)   /   나트륨 (95mg / 5%)</p>
            </section><!--//sal_11_info-->
         </section><!--//sal_11-->
         
         <section class="sal_12"></section>
         
            <p class="b_menu_title">건강한컵 리프레쉬</p>
            <p class="b_menu_title">플레인 그릭 요거트</p>
            <p class="b_menu_title1">허니 바나나 그릭 요거트</p>
        </section><!--//f_salad-->
        
        <section class="f_bakery">
          <section class="bakery_title">
            <p><span class="title_b">베이커리</span>투썸플레이스 다양한 베이커리들을 즐겨보세요!</p>    
        </section><!--//bakery_title-->
        
        <section class="ba_1">
          <div class="menu_img">
           <div class="ba1_img one"></div>
           </div>
           <div class="new_sticker"></div>
            <section class="ba_1_info">
             <div class="info_close"></div>
             <h3><span class="ba">호두 베이글(WITH 누텔라)</span><br>WALNUT BAGEL WITH NUTELLA</h3>
             <p class="ba1_info5">헤이즐넛 코코아 스프레드 누텔라와 만나<br>고소함을 더해줄 호두 베이글<br>*밀, 호두 함유<br>*누텔라의 원산지/영양성분은 제품 표기사항에서<br>확인 가능</p>
             <p class="nutri">1회 제공량 (110g)   /   칼로리 (305kcal)<br>당류 (7g / 7%)   /   단백질 (12g / 21%)<br>포화지방 (0.5g / 3%)   /   나트륨 (430mg / 21%)</p>
            </section><!--//ba_1_info-->
         </section><!--//ba_1-->
         
         <section class="ba_2">
          <div class="menu_img">
           <div class="ba2_img one"></div>
           </div>
           <div class="new_sticker"></div>
            <section class="ba_2_info">
             <div class="info_close"></div>
             <h3><span class="ba">플레인 베이글(WITH 누텔라)</span><br>PLAIN BAGEL WITH NUTELLA</h3>
             <p class="ba2_info5">구수한 곡물향이 나는 사워도우 베이글과<br>달콤한 누텔라의 조화<br>*밀, 호두 함유<br>*누텔라의 원산지/영양성분은 제품 표기사항에서<br>확인 가능</p>
             <p class="nutri">1회 제공량 (110g)   /   칼로리 (290kcal)<br>당류 (9g /9%)   /   단백질 (10g / 18%)<br>포화지방 (0g / 0%)   /   나트륨 (480mg / 24%)</p>
            </section><!--//ba_2_info-->
         </section><!--//ba_2-->
         
         <section class="ba_3">
          <div class="menu_img">
           <div class="ba3_img zero"></div>
           </div>
            <section class="ba_3_info">
             <div class="info_close"></div>
             <h3><span class="ba">레즌 스콘</span><br>RAISIN SCONE</h3>
             <p class="ba_info">건포도를 넣어 달콤함을 더한 레즌 스콘<br>*버터와 딸기잼이 함께 제공됩니다.</p>
             <p class="nutri">1회 제공량 (90g)   /   칼로리 (330kcal)<br>당류 (12g / 12%)   /   단백질 (6g / 11%)<br>포화지방 (9g / 60%)   /   나트륨 (170mg / 9%)</p>
            </section><!--//ba_3_info-->
         </section><!--//ba_3-->
         
         <section class="ba_4">
          <div class="menu_img">
           <div class="ba4_img zero"></div>
           </div>
            <section class="ba_4_info">
             <div class="info_close"></div>
             <h3><span class="ba">오리지널 스콘</span><br>ORIGINAL SCONE</h3>
             <p class="ba_info">진한 버터의 풍미가 느껴지는 오리지널 스콘<br>*버터와 딸기잼이 함께 제공됩니다.</p>
             <p class="nutri">1회 제공량 (90g)   /   칼로리 (335kcal)<br>당류 (9g / 9%)   /   단백질 (6g / 11%)<br>포화지방 (9g / 60%)   /   나트륨 (170mg / 9%)</p>
            </section><!--//ba_4_info-->
         </section><!--//ba_4-->
         
            <p class="b_menu_title">호두 베이글(WITH 누텔라)</p>
            <p class="b_menu_title">플레인 베이글(WITH 누텔라)</p>
            <p class="b_menu_title">레즌 스콘</p>
            <p class="b_menu_title1">오리지널 스콘</p>
            
        <section class="ba_5">
          <div class="menu_img">
           <div class="ba5_img zero"></div>
           </div>
            <section class="ba_5_info">
             <div class="info_close"></div>
             <h3><span class="ba">오렌지쇼콜라파운드</span><br>ORANGE CHOCOLAT POUND</h3>
             <p class="ba_info3">오렌지 필과 무화과가 들어간 촉촉하고 진한<br>초콜릿 파운드 케이크<br>*난류, 우유, 대두, 밀 아황산류 함유</p>
             <p class="nutri">1회 제공량 (88g)   /   칼로리 (315kcal)<br>당류 (27g / 27%)   /   단백질 (4g / 7%)<br>포화지방 (11g / 73%)   /   나트륨 (65mg / 3%)</p>
            </section><!--//ba_5_info-->
         </section><!--//ba_5-->
         
         <section class="ba_6">
          <div class="menu_img">
           <div class="ba6_img zero"></div>
           </div>
            <section class="ba_6_info">
             <div class="info_close"></div>
             <h3><span class="ba">TWG밀크티파운드</span><br>TWG MILK TEA POUND</h3>
             <p class="ba_info3">TWG 얼그레이 밀크티 향이 입 안 가득 퍼지는<br>부드러운 파운드 케이크<br>* 계란, 우유, 대두, 밀 함유</p>
             <p class="nutri">1회 제공량 (69g)   /   칼로리 (255kcal)<br>당류 (17g /17%)   /   단백질 (3g / 5%)<br>포화지방 (6g / 40%)   /   나트륨 (60mg / 3%)</p>
            </section><!--//ba_6_info-->
         </section><!--//ba_6-->
         
         <section class="ba_7">
          <div class="menu_img">
           <div class="ba7_img zero"></div>
           </div>
            <section class="ba_7_info">
             <div class="info_close"></div>
             <h3><span class="ba">스윗버터 토스트</span><br>SWEET BUTTER TOAST</h3>
             <p class="ba_info3">부드러운 생크림과 달콤한 메이플 시럽을<br>곁들인 부드럽고 달콤한 스윗버터 토스트<br>*난류,우유,밀,대두 함유</p>
             <p class="nutri">1회 제공량 (180g)   /   칼로리 (530kcal)<br>당류 (71g / 71%)   /   단백질 (13g / 24%)<br>포화지방 (25g / 167%)   /   나트륨 (1220mg / 6%)</p>
            </section><!--//ba_7_info-->
         </section><!--//ba_7-->
         
         <section class="ba_8">
          <div class="menu_img">
           <div class="ba8_img zero"></div>
           </div>
            <section class="ba_8_info">
             <div class="info_close"></div>
             <h3><span class="ba">스윗버터 토스트 위드베리</span><br>SWEET BUTTER TOAST WITH BERRY</h3>
             <p class="ba_info3">상큼한 베리와 부드러운 생크림, 달콤한 메이플<br>시럽을 곁들인 부드럽고 달콤한 스윗버터 토스트<br>*난류,우유,밀,대두 함유</p>
             <p class="nutri">1회 제공량 (218g)   /   칼로리 (522kcal)<br>당류 (85g / 85%)   /   단백질 (10g / 18%)<br>포화지방 (30g / 200%)   /   나트륨 (1220mg / 61%)</p>
            </section><!--//ba_8_info-->
         </section><!--//ba_8-->
         
            <p class="b_menu_title">오렌지쇼콜라파운드</p>
            <p class="b_menu_title">TWG밀크티파운드</p>
            <p class="b_menu_title">스윗버터 토스트</p>
            <p class="b_menu_title1">스윗버터 토스트 위드베리</p>
            
        <section class="ba_9">
          <div class="menu_img">
           <div class="ba9_img zero"></div>
           </div>
            <section class="ba_9_info">
             <div class="info_close"></div>
             <h3><span class="ba">더블초콜릿머핀</span><br>Double Chocolate Muffin</h3>
             <p class="ba_info3">진한 리얼 초콜릿이 머핀 안에 녹아 있고, 바삭한<br>초코칩이 위에 알알히 박혀 있어 두 배로 깊은<br>초콜릿을 즐길 수 있는 초콜릿머핀</p>
             <p class="nutri">1회 제공량 (120g)   /   칼로리 (495kcal)<br>당류 (26g / 26%)   /   단백질 (6g / 11%)<br>포화지방 (7g / 47%)   /   나트륨 (450mg / 23%)</p>
            </section><!--//ba_9_info-->
         </section><!--//ba_9-->
         
         <section class="ba_10">
          <div class="menu_img">
           <div class="ba10_img zero"></div>
           </div>
            <section class="ba_10_info">
             <div class="info_close"></div>
             <h3><span class="ba">라즈베리초코칩머핀</span><br>Raspberry Chocochip Muffin</h3>
             <p class="ba_info3">신선하고 상큼한 라즈베리 과육과 알알히<br>박혀있는 초코칩의 달콤함을 즐길 수 있는<br>라즈베리초코칩머핀</p>
             <p class="nutri">1회 제공량 (125g)   /   칼로리 (460kcal)<br>당류 (26g /26%)   /   단백질 (6g / 11%)<br>포화지방 (6g / 40%)   /   나트륨 (430mg / 22%)</p>
            </section><!--//ba_10_info-->
         </section><!--//ba_10-->
         
         <section class="ba_11">
          <div class="menu_img">
           <div class="ba11_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="ba_11_info">
             <div class="info_close"></div>
             <h3><span class="ba">오리지널블루베리머핀</span><br>Original Blueberry Muffin</h3>
             <p class="ba_info3">블루베리 슬라이스가 듬뿍 들어간 상큼함과<br>코코넛크럼플 토핑의 고소함을 즐길 수 있는<br>블루베리머핀</p>
             <p class="nutri">1회 제공량 (120g)   /   칼로리 (470kcal)<br>당류 (33g / 33%)   /   단백질 (6g / 11%)<br>포화지방 (6g / 40%)   /   나트륨 (410mg / 21%)</p>
            </section><!--//ba_11_info-->
         </section><!--//ba_11-->
         
         <section class="ba_12">
          <div class="menu_img">
           <div class="ba12_img zero"></div>
             </div>
            <section class="ba_12_info">
             <div class="info_close"></div>
             <h3><span class="ba">토마토 베이컨 블루밍브레드</span><br>TOMATO BACON BLOOMING BREAD</h3>
             <p class="ba_info3">소프트 바게트 사이사이에 매콤한 토마토소스와<br>베이컨을 듬뿍 넣은 든든한 한 끼 식사빵<br>* 우유,밀,돼지고기,토마토 함유</p>
             <p class="nutri">1회 제공량 (192g)   /   칼로리 (245kcal)<br>당류 (2g / 2%)   /   단백질 (12g / 22%)<br>포화지방 (1.0g / 7%)   /   나트륨 (620mg / 31%)</p>
            </section><!--//ba_12_info-->
         </section><!--//ba_12-->
         
            <p class="b_menu_title">더블초콜릿머핀</p>
            <p class="b_menu_title">라즈베리초코칩머핀</p>
            <p class="b_menu_title">오리지널블루베리머핀</p>
            <p class="b_menu_title1">토마토 베이컨 블루밍브레드</p>
            
        <section class="ba_13">
          <div class="menu_img">
           <div class="ba13_img zero"></div>
             </div>
            <section class="ba_13_info">
             <div class="info_close"></div>
             <h3><span class="ba">6치즈 블루밍브레드</span><br>6 CHEESE BLOOMING BREAD</h3>
             <p class="ba_info3">담백한 빵 사이사이에 6가지 치즈 몬테레이잭<br>에멘탈,모짜렐라,그뤼에르,레드체다<br>그라나파나노가 듬뿍 들어간 빵</p>
             <p class="nutri">1회 제공량 (187g)   /   칼로리 (300kcal)<br>당류 (0g / 0%)   /   단백질 (14g / 25%)<br>포화지방 (5g / 33%)   /   나트륨 (570mg / 29%)</p>
            </section><!--//ba_13_info-->
         </section><!--//ba_13-->
         
            <section class="ba_14"></section>
            <section class="ba_15"></section>
            <section class="ba_16"></section>

            <p class="b_menu_title1">6치즈 블루밍브레드</p>
            <p class="b_menu_title1"></p>
            <p class="b_menu_title1"></p>
            <p class="b_menu_title1"></p>
        </section><!--//f_bakery-->
        
         <section class="f_cookie">
          <section class="cookie_title">
            <p><span class="title_b">베이커리</span>투썸플레이스 다양한 베이커리들을 즐겨보세요!</p>    
        </section><!--//cookie_title-->
        
        <section class="coo_1">
          <div class="menu_img">
           <div class="coo1_img one"></div>
           </div>
           <div class="new_sticker"></div>
            <section class="coo_1_info">
             <div class="info_close"></div>
             <h3><span class="coo">그릭요거트 그래놀라 바</span><br>GREEK YOGURT GRANOLA BAR</h3>
             <p class="coo_info">6가지 곡물과 산뜻한 그릭요거트 맛이 어우러진<br>그래놀라 바</p>
             <p class="nutri">1회 제공량 (30g)   /   칼로리 (128kcal)<br>당류 (8g / 8%)   /   단백질 (2g / 4%)<br>포화지방 (1.5g / 10%)   /   나트륨 (50mg / 3%)</p>
            </section><!--//coo_1_info-->
         </section><!--//coo_1-->
         
         <section class="coo_2">
          <div class="menu_img">
           <div class="coo2_img one"></div>
           </div>
           <div class="new_sticker"></div>
            <section class="coo_2_info">
             <div class="info_close"></div>
             <h3><span class="coo">넛츠 앤 푸르츠</span><br>NUTS N FRUITS</h3>
             <p class="coo_info">고소한 피칸, 캐슈넛, 아몬드와 달콤한<br>홀 크랜베리, 애플 큐브로 구성된 든든한 견과 믹스</p>
             <p class="nutri">1회 제공량 (40g)</p>
            </section><!--//coo_2_info-->
         </section><!--//coo_2-->
         
         <section class="coo_3">
          <div class="menu_img">
           <div class="coo3_img one"></div>
           </div>
           <div class="new_sticker"></div>
            <section class="coo_3_info">
             <div class="info_close"></div>
             <h3><span class="coo">아몬드 튀일</span><br>ALMOND TUILE</h3>
             <p class="coo_info">구운 아몬드의 고소함이 더해진 바삭한 식감의<br>튀일 쿠키</p>
             <p class="nutri">1회 제공량 (78g)   /   칼로리 (413kcal)<br>당류 (2g / 24%)   /   단백질 (10g / 18%)<br>포화지방 (6g / 40%)   /   나트륨 (75mg / 4%)</p>
            </section><!--//coo_3_info-->
         </section><!--//coo_3-->
         
         <section class="coo_4">
          <div class="menu_img">
           <div class="coo4_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="coo_4_info">
             <div class="info_close"></div>
             <h3><span class="coo">쇼콜라 쿠키</span><br>CHOCOLAT COOKIE</h3>
             <p class="coo_info">진한 초콜릿 풍미와 아몬드의 고소함이 어우러진<br>달콤한 쿠키</p>
             <p class="nutri">1회 제공량 (100g)   /   칼로리 (535kcal)<br>당류 (17g / 17%)   /   단백질 (8g / 15%)<br>포화지방 (16g / 107%)   /   나트륨 (150mg / 8%)</p>
            </section><!--//coo_4_info-->
         </section><!--//coo_4-->
         
            <p class="b_menu_title">그릭요거트 그래놀라 바</p>
            <p class="b_menu_title">넛츠 앤 푸르츠</p>
            <p class="b_menu_title">아몬드 튀일</p>
            <p class="b_menu_title1">쇼콜라 쿠키</p>
            
        <section class="coo_5">
          <div class="menu_img">
           <div class="coo5_img zero"></div>
           </div>
            <section class="coo_5_info">
             <div class="info_close"></div>
             <h3><span class="coo">화이트 버터 쿠키</span><br>WHITE BUTTER COOKIE</h3>
             <p class="coo_info">부드럽고 진한 버터의 맛과 향이 느껴지는 쿠키</p>
             <p class="nutri">1회 제공량 (85g)   /   칼로리 (420kcal)<br>당류 (23g / 23%)   /   단백질 (4g / 7%)<br>포화지방 (11g / 73%)   /   나트륨 (70mg / 4%)</p>
            </section><!--//coo_5_info-->
         </section><!--//coo_5-->
         
        <section class="coo_6">
          <div class="menu_img">
           <div class="coo6_img one"></div>
           </div>
           <div class="new_sticker"></div>
            <section class="coo_6_info">
             <div class="info_close"></div>
             <h3><span class="coo">쿠키 선물 세트</span><br>COOKIE SET</h3>
             <p class="coo6_info">고마운 마음을 담아 전달하는 쿠키 선물 세트</p>
             <p class="nutri">제품별 확인</p>
            </section><!--//coo_6_info-->
         </section><!--//coo_6-->
         
         <section class="coo_7">
          <div class="menu_img">
           <div class="coo7_img zero"></div>
           </div>
            <section class="coo_7_info">
             <div class="info_close"></div>
             <h3><span class="coo">다크초콜릿쿠키</span><br>Dark Chocolate Cookie</h3>
             <p class="coo7_info">진한 초콜릿을 듬뿍 넣어 구워 낸 바삭 하고<br>촉촉한 아메리칸 쿠키</p>
             <p class="nutri">1회 제공량 (67g)   /   칼로리 (190kcal)<br>당류 (11g / 11%)   /   단백질 (2g / 4%)<br>포화지방 (4.7g / 31%)   /   나트륨 (110mg / 6%)<br>총중량 : 134g</p>
            </section><!--//coo_7_info-->
         </section><!--//coo_7-->
         
         <section class="coo_8">
          <div class="menu_img">
           <div class="coo8_img zero"></div>
           </div>
            <section class="coo_8_info">
             <div class="info_close"></div>
             <h3><span class="coo">피넛버터쿠키</span><br>Peanut Butter Cookie</h3>
             <p class="coo8_info">피넛버터의 고소한 맛과 향을 느낄 수 있는<br>바삭하고 촉촉한 아메리칸 쿠키</p>
             <p class="nutri">1회 제공량 (67g)   /   칼로리 (175kcal)<br>당류 (9g / 9%)   /   단백질 (3g / 5%)<br>포화지방 (4.1g / 27%)   /   나트륨 (150mg / 8%)<br>총중량 : 134g</p>
            </section><!--//coo_8_info-->
         </section><!--//coo_8-->
         
            <p class="b_menu_title">화이트 버터 쿠키</p>
            <p class="b_menu_title">쿠키 선물 세트</p>
            <p class="b_menu_title">다크초콜릿쿠키</p>
            <p class="b_menu_title1">피넛버터쿠키</p>
            
        <section class="coo_9">
          <div class="menu_img">
           <div class="coo9_img zero"></div>
           </div>
            <section class="coo_9_info">
             <div class="info_close"></div>
             <h3><span class="coo">투썸 랑그드샤</span><br>TWOSOME LANGUE DE CHAT</h3>
             <p class="coo9_info">얇고 바삭한 랑그드샤 쿠키에 깊은 풍미의 크림을<br>더해 더욱 매력적인 투썸 랑그드샤</p>
             <p class="nutri">1회 제공량 (90g)   /   칼로리 (495kcal)<br>총중량 : 90g (총제공량 : 1박스)</p>
            </section><!--//coo_9_info-->
         </section><!--//coo_9-->
         
         <section class="coo_10"></section>
         <section class="coo_11"></section>
         <section class="coo_12"></section>
         
            <p class="b_menu_title1">투썸 랑그드샤</p>
         
        </section><!--//f_cookie-->
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
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
    <link rel="stylesheet" href="css/twosomeplace_menu_beverage.css" type="text/css">
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
        var frape = document.getElementById("frape");
        var tea = document.getElementById("tea")
        var shake = document.getElementById("shake");
        var etc = document.getElementById("etc");
        
        all.onclick=function(){
            
                frape.checked=false;
                shake.checked=false;
                etc.checked=false;
                tea.checked=false;

        }
        
        frape.onclick=function(){
            
                all.checked=false;
                shake.checked=false;
                etc.checked=false;
                tea.checked=false;
        }
        
        tea.onclick=function(){
            
                all.checked=false;
                shake.checked=false;
                etc.checked=false;
                frape.checked=false;

        }
        
        shake.onclick=function(){
            
                frape.checked=false;
                all.checked=false;
                etc.checked=false;
                tea.checked=false;

        }
        
        etc.onclick=function(){
            
                frape.checked=false;
                shake.checked=false;
                all.checked=false;
                tea.checked=false;

        }
        

        $(".all").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".b_frape,.b_shake,.b_tea,.b_etc").show(); 
            } 
        }); 
        
        $(".fr").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".b_frape").show();
                $(".b_shake,.b_tea,.b_etc").hide();
            } 
        }); 
        
        $(".sha").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".b_shake").show();
                $(".b_frape,.b_tea,.b_etc").hide();
            } 
        }); 
        
        $(".t").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".b_tea").show();
                $(".b_shake,.b_frape,.b_etc").hide();
            } 
        }); 
        
        $(".e").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".b_etc").show();
                $(".b_shake,.b_frape,.b_tea").hide();
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
                <legend><span class="check_coffee">Beverage</span>투썸플레이스의 다양한 음료를 즐겨보세요!</legend>
                <p class="bd_box">
                    <input type="checkbox" name="menu" id="all" class="all">
                    <label for="all">전체상품</label>
                    <input type="checkbox" name="menu" id="frape" class="fr">
                    <label for="frape">프라페</label>
                    <input type="checkbox" name="menu" id="shake" class="sha">
                    <label for="shake">쉐이크</label>
                    <input type="checkbox" name="menu" id="tea" class="t">
                    <label for="tea">티(TWG)/티라떼</label>
                    <input type="checkbox" name="menu" id="etc" class="e">
                    <label for="etc">기타</label>
                </p>
            </fieldset>
        </form>
        </div><!--//check_form-->
        <section class="b_frape">
        <section class="fr_title">
            <p><span class="title_b">프라페</span>투썸플레이스의 다양한 스무디음료를 즐겨보세요!</p>    
        </section><!--//fr_title-->
        
        
        <section class="fr_1">
           <div class="menu_img">
           <div class="fr1_img one"></div>
           </div>
           <div class="new_sticker"></div>
            <section class="fr_1_info">
            <div class="info_close"></div>
            <h3><span class="fr">스트로베리 요거 프라페</span><br>Strawberry Yogur Frappe</h3>
            <p class="fr_info">진한 아메리카노와 리치한 버터스카치 크림이<br>조화로운 클래식 모던 감성의 아인슈페너</p>
            <p class="nutri">1회 제공량 (414ml)   /   칼로리 (185kcal)<br>당류 (8g / 8%)   /   단백질 (2g / 3%)<br>포화지방 (9g / 60%)   /   나트륨 (15mg / 1%)</p>
           </section><!--//fr_1_info-->
        </section><!--//fr_1-->
        
        <section class="fr_2">
           <div class="menu_img">
           <div class="fr2_img zero"></div>
           </div>
           <section class="fr_2_info">
            <div class="info_close"></div>
            <h3><span class="fr">제주 말차 프라페</span><br>Jeju Matcha Frappe</h3>
            <p class="fr_info2">제주산 말차와 연유 블렌딩이 조화로운<br>프리미엄 말차 프라페<br>알레르기 정보: 우유 함유</p>
            <p class="nutri">1회 제공량 (414ml)   /   칼로리 (410kcal)<br>당류 (61g / 61%)   /   단백질 (9g / 16%)<br>포화지방 (8g / 53%)   /   나트륨 (120mg / 6%)</p>
           </section><!--//fr_2_info-->
        </section><!--//fr_2-->
        
        <section class="fr_3">
          <div class="menu_img">
           <div class="fr3_img one"></div>
           </div>
          <div class="best_sticker"></div>
           <section class="fr_3_info">
            <div class="info_close"></div>
            <h3><span class="fr">스트로베리 피치 프라페</span><br>Strawberry Peach Frappe</h3>
            <p class="fr_info">딸기와 복숭아의 상큼함이 조화롭게<br>어우러진 스무디 타입 음료</p>
            <p class="nutri">1회 제공량 (414ml)   /   칼로리 (250kcal)<br>당류 (57g / 57%)   /   단백질 (1g / 1%)<br>포화지방 (0g / 0%)   /   나트륨 (5mg / 1%)</p>
           </section><!--//fr_3_info-->
        </section><!--//fr_3-->
        
        <section class="fr_4">
         <div class="menu_img">
           <div class="fr4_img one"></div>
           </div>
          <div class="best_sticker"></div>
           <section class="fr_4_info">
            <div class="info_close"></div>
            <h3><span class="fr">요거 프라페</span><br>Yogur Frappe</h3>
            <p class="fr_info">요거 파우더와 우유가 조화된, 깔끔하고<br>상큼한 맛의 요거트 아이스 블렌디드</p>
            <p class="nutri">1회 제공량 (414ml)   /   칼로리 (275kcal)<br>당류 (44g / 44%)   /   단백질 (5g / 9%)<br>포화지방 (2.8g / 19%)   /   나트륨 (85mg / 4%)</p>
           </section><!--//fr_4_info-->
        </section><!--//fr_4-->
        

            <p class="b_menu_title">스트로베리 요거 프라페</p>
            <p class="b_menu_title">제주 말차 프라페</p>
            <p class="b_menu_title">스트로베리 피치 프라페</p>
            <p class="b_menu_title1">요거 프라페</p>

        
        <section class="fr_5">
          <div class="menu_img">
           <div class="fr5_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="fr_5_info">
            <div class="info_close"></div>
            <h3><span class="fr">모카칩 프라페</span><br>Mocha Chip Frappe</h3>
            <p class="fr_info">모카향이 은은하게 입안에 감돌아 달콤하고<br>향긋함을 동시에 느낄 수 있는 프라페</p>
            <p class="nutri">1회 제공량 (414ml)   /   칼로리 (540kcal)<br>당류 (48g / 48%)   /   단백질 (8g / 14%)<br>포화지방 (13g / 87%)   /   나트륨 (220mg / 11%)</p>
           </section><!--//fr_5_info-->
        </section><!--//fr_5-->
        
        <section class="fr_6">
           <div class="menu_img">
           <div class="fr6_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="fr_6_info">
            <div class="info_close"></div>
            <h3><span class="fr">카라멜 프라페</span><br>Caramel Frappe</h3>
            <p class="fr_info2">커피 프라페에 달콤한 카라멜 시럽을 가미하고,<br>그 위에 휘핑크림과 카라멜 소스로 토핑하여<br>풍부한 카라멜 향을 느낄 수 있는 프라페</p>
            <p class="nutri">1회 제공량 (414ml)   /   칼로리 (415kcal)<br>당류 (36g / 36%)   /   단백질 (7g / 12%)<br>포화지방 (10g / 67%)   /   나트륨 (230mg / 12%)</p>
           </section><!--//fr_6_info-->
        </section><!--//fr_6-->
        
        <section class="fr_7">
          <div class="menu_img">
           <div class="fr7_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="fr_7_info">
            <div class="info_close"></div>
            <h3><span class="fr">망고 프라페</span><br>Mango Frappe</h3>
            <p class="fr_info3">열대 망고의 시원한 맛을 느낄 수 있는 프라페</p>
            <p class="nutri">1회 제공량 (414ml)   /   칼로리 (415kcal)<br>당류 (101g / 101%)   /   단백질 (0g / 0%)<br>포화지방 (0g / 0%)   /   나트륨 (5mg / 1%)</p>
           </section><!--//fr_7_info-->
        </section><!--//fr_7-->
        
        <section class="fr_8"></section>
        
            <p class="b_menu_title">모카칩 프라페</p>
            <p class="b_menu_title">카라멜 프라페</p>
            <p class="b_menu_title1">망고 프라페</p>
        
        
        </section><!--//b_frape-->

        <section class="b_shake">
          <section class="shake_title">
            <p><span class="title_b">쉐이크</span>투썸플레이스의 아이스크림과 함께 만드는 스무디음료를 즐겨보세요!</p>    
        </section><!--//shake_title-->
           
        <section class="sha_1">
          <div class="menu_img">
           <div class="sha1_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="sha_1_info">
             <div class="info_close"></div>
             <h3><span class="sha">로얄 밀크티 쉐이크</span><br>Royal Milk Tea Shake</h3>
             <p class="sha_info2">은은한 얼그레이 향이 감도는 블랙티와<br>진한 소프트 아이스크림이 어우러진<br>투썸 아이스크림 디저트 음료</p>
             <p class="nutri">1회 제공량 (414ml)   /   칼로리 (480kcal)<br>당류 (33g / 33g)   /   단백질 (10g / 18%)<br>포화지방 (14g / 93%)   /   나트륨 (140mg / 7%)</p>
            </section><!--//sha_1_info-->
         </section><!--//sha_1-->
           
        <section class="sha_2">
          <div class="menu_img">
           <div class="sha2_img zero"></div>
           </div>
            <section class="sha_2_info">
             <div class="info_close"></div>
             <h3><span class="sha">커피 쉐이크</span><br>Coffee Shake</h3>
             <p class="sha_info2">에스프레소의 쌉싸름함과<br>아이스크림의 달콤함을 동시에<br>즐길 수 있는 쉐이크</p>
             <p class="nutri">1회 제공량 (414ml)   /   칼로리 (385kcal)<br>당류 (39g / 39%)   /   단백질 (5g / 9%)<br>포화지방 (13g / 87%)   /   나트륨 (140mg / 7%)</p>
            </section><!--//sha_2_info-->
         </section><!--//sha_2-->
         
            
        <section class="sha_3">
          <div class="menu_img">
           <div class="sha3_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="sha_3_info">
             <div class="info_close"></div>
             <h3><span class="sha">초코 쉐이크</span><br>Choco Shake</h3>
             <p class="sha_info">바닐라 아이스크림과 발로나 초콜릿의 진한<br>풍미를 즐길 수 있는 쉐이크</p>
             <p class="nutri">1회 제공량 (414ml)   /   칼로리 (535kcal)<br>당류 (36g / 36%)   /   단백질 (8g / 15%)<br>포화지방 (16g / 105%)   /   나트륨 (170mg / 8%)</p>
            </section><!--//sha_3_info-->
         </section><!--//sha_3-->
         
         <section class="sha_4">
          <div class="menu_img">
           <div class="sha4_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="sha_4_info">
             <div class="info_close"></div>
             <h3><span class="sha">바닐라 쉐이크</span><br>Vanilla Shake</h3>
             <p class="sha_info">바닐라 아이스크림과 우유를 블렌딩한<br>부드럽고 달콤한 쉐이크</p>
             <p class="nutri">1회 제공량 (414ml)   /   칼로리 (485kcal)<br>당류 (40g / 40%)   /   단백질 (9g / 16%)<br>포화지방 (18g / 120%)   /   나트륨 (180mg / 9%)</p>
            </section><!--//sha_4_info-->
         </section><!--//sha_4-->
        
         
            <p class="b_menu_title">로얄 밀크티 쉐이크</p>
            <p class="b_menu_title">커피 쉐이크</p>
            <p class="b_menu_title">초코 쉐이크</p>
            <p class="b_menu_title1">바닐라 쉐이크</p>
         
         </section><!--//b_shake-->
        
        <section class="b_tea">
        <section class="tea_title">
            <p><span class="title_b">티(TWG) / 티라떼</span>TWG브랜드의 티로 만든 다양한 음료들과 그밖의 티베리에이션 음료들을 즐겨보세요!</p>    
            </section><!--//tea_title-->
        
        <section class="tea_1">
           <div class="menu_img">
           <div class="tea1_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="tea_1_info">
             <div class="info_close"></div>
             <h3><span class="tea">TWG 흑당 버블 밀크티</span><br>TWG Black Sugar Bubble Milk Tea</h3>
             <p class="tea_info">TWG 프렌치 얼그레이의 고급스러운 맛이<br>느껴지는 흑당 버블 밀크티</p>
             <p class="nutri">1회 제공량 (414ml)   /   칼로리 (280kcal)<br>당류 (38g / 38g)   /   단백질 (6g / 10%)<br>포화지방 (4.9g / 33%)   /   나트륨 (70mg / 4%)</p>
            </section><!--//tea_1_info-->
         </section><!--//tea_1-->
        
        <section class="tea_2">
           <div class="menu_img">
           <div class="tea2_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="tea_2_info">
             <div class="info_close"></div>
             <h3><span class="tea">허니 레몬티</span><br>Honey Lemon Tea</h3>
             <p class="tea_info">진한 TWG 프렌치 얼그레이 베이스에<br>달콤한 꿀과 상큼한 레몬이 더해진 티</p>
             <p class="nutri">1회 제공량 (355ml)   /   칼로리 (115kcal)<br>당류 (23g / 23%)   /   단백질 (0g / 0%)<br>포화지방 (0g / 0%)   /   나트륨 (5mg / 1%)</p>
            </section><!--//tea_2_info-->
         </section><!--//tea_2-->
        
        <section class="tea_3">
           <div class="menu_img">
           <div class="tea3_img zero"></div>
           </div>
            <section class="tea_3_info">
             <div class="info_close"></div>
             <h3><span class="tea">애플 민트티</span><br>Apple Mint Tea</h3>
             <p class="tea_info">TWG 그나와 민트티와 애플이 어우러진<br>베리에이션 티</p>
             <p class="nutri">1회 제공량 (355ml)   /   칼로리 (105kcal)<br>당류 (24g / 24%)   /   단백질 (0g / 0%)<br>포화지방 (0g / 0%)   /   나트륨 (10mg / 1%)</p>
            </section><!--//tea_3_info-->
         </section><!--//tea_3-->
         
        <section class="tea_4">
           <div class="menu_img">
           <div class="tea4_img zero"></div>
           </div>
            <section class="tea_4_info">
             <div class="info_close"></div>
             <h3><span class="tea">아이스 애플 민트티</span><br>Iced Apple Mint Tea</h3>
             <p class="tea_info">TWG 그나와 민트티와 애플이 어우러진<br>베리에이션 티</p>
             <p class="nutri">1회 제공량 (414ml)   /   칼로리 (120kcal)<br>당류 (30g / 30%)   /   단백질 (0g / 0%)<br>포화지방 (0g / 0%)   /   나트륨 (10mg / 1%)</p>
            </section><!--//tea_4_info-->
         </section><!--//tea_4-->    
                    
            <p class="b_menu_title">TWG 흑당 버블 밀크티</p>
            <p class="b_menu_title">허니 레몬티</p>
            <p class="b_menu_title">애플 민트티</p>
            <p class="b_menu_title1">아이스 애플 민트티</p>
        
        <section class="tea_5">
           <div class="menu_img">
           <div class="tea5_img zero"></div>
           </div>
            <section class="tea_5_info">
             <div class="info_close"></div>
             <h3><span class="tea">그나와 민트티</span><br>Gnawa Mint Tea</h3>
             <p class="tea_info">홍차, 녹차, 민트가 블렌딩 된<br>청량한 타입의 TWG 티</p>
             <p class="nutri">1회 제공량 (474ml)   /   칼로리 (0kcal)<br>당류 (0g / 0%)   /   단백질 (0g / 0%)<br>포화지방 (0g / 0%)   /   나트륨 (0mg / 0%)</p>
            </section><!--//tea_5_info-->
         </section><!--//tea_5-->
        
        <section class="tea_6">
           <div class="menu_img">
           <div class="tea6_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="tea_6_info">
             <div class="info_close"></div>
             <h3><span class="tea">아이스 그나와 민트티</span><br>Iced Gnawa Mint Tea</h3>
             <p class="tea_info">홍차, 녹차, 민트가 블렌딩 된<br>청량한 타입의 TWG 티</p>
             <p class="nutri">1회 제공량 (474ml)   /   칼로리 (0kcal)<br>당류 (0g / 0%)   /   단백질 (0g / 0%)<br>포화지방 (0g / 0%)   /   나트륨 (0mg / 0%)</p>
            </section><!--//tea_6_info-->
         </section><!--//tea_6-->
                   
        <section class="tea_7">
           <div class="menu_img">
           <div class="tea7_img zero"></div>
           </div>
            <section class="tea_7_info">
             <div class="info_close"></div>
             <h3><span class="tea">카모마일</span><br>Chamomile</h3>
             <p class="tea_info2">카페인이 없어 누구나 편안하게 즐길 수 있는<br>허브티로 풍부한 벌꿀향과<br>황금빛이 특징인 Tea</p>
             <p class="nutri">1회 제공량 (474ml)   /   칼로리 (0kcal)<br>당류 (불검출)   /   단백질 (0g / 0%)<br>포화지방 (0g / 0%)   /   나트륨 (0mg / 0%)</p>
            </section><!--//tea_7_info-->
         </section><!--//tea_7-->
            
        <section class="tea_8">
           <div class="menu_img">
           <div class="tea8_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="tea_8_info">
             <div class="info_close"></div>
             <h3><span class="tea">아이스 카모마일</span><br>Iced Chamomile</h3>
             <p class="tea_info2">카페인이 없어 누구나 편안하게 즐길 수 있는<br>허브티로 풍부한 벌꿀향과<br>황금빛이 특징인 Tea</p>
             <p class="nutri">1회 제공량 (474ml)   /   칼로리 (0kcal)<br>당류 (불검출)   /   단백질 (0g / 0%)<br>포화지방 (0g / 0%)   /   나트륨 (0mg / 0%)</p>
            </section><!--//tea_8_info-->
         </section><!--//tea_8-->    
                    
            <p class="b_menu_title">그나와 민트티</p>
            <p class="b_menu_title">아이스 그나와 민트티</p>
            <p class="b_menu_title">카모마일</p>
            <p class="b_menu_title1">아이스 카모마일</p>
            
        <section class="tea_9">
           <div class="menu_img">
           <div class="tea9_img zero"></div>
           </div>
            <section class="tea_9_info">
             <div class="info_close"></div>
             <h3><span class="tea">크림 카라멜</span><br>Creme Caramel Tea</h3>
             <p class="tea_info2">남아프리카 공화국의 루이보스 차에<br>달콤한 카라멜을 블렌딩하여 매력적이고<br>섬세함을 지닌 Tea</p>
             <p class="nutri">1회 제공량 (474ml)   /   칼로리 (0kcal)<br>당류 (0g / 0%)   /   단백질 (0g / 0%)<br>포화지방 (불검출)   /   나트륨 (0mg / 0%)</p>
            </section><!--//tea_9_info-->
         </section><!--//tea_9--> 
                
        <section class="tea_10">
           <div class="menu_img">
           <div class="tea10_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="tea_10_info">
             <div class="info_close"></div>
             <h3><span class="tea">아이스 크림 카라멜</span><br>Iced Creme Caramel Tea</h3>
             <p class="tea_info2">남아프리카 공화국의 루이보스 차에<br>달콤한 카라멜을 블렌딩하여 매력적이고<br>섬세함을 지닌 Tea</p>
             <p class="nutri">1회 제공량 (474ml)   /   칼로리 (0kcal)<br>당류 (0g / 0%)   /   단백질 (0g / 0%)<br>포화지방 (불검출)   /   나트륨 (0mg / 0%)</p>
            </section><!--//tea_10_info-->
         </section><!--//tea_10-->   
                   
        <section class="tea_11">
           <div class="menu_img">
           <div class="tea11_img zero"></div>
           </div>
            <section class="tea_11_info">
             <div class="info_close"></div>
             <h3><span class="tea">프렌치 얼그레이</span><br>French Earl Grey</h3>
             <p class="tea_info2">TWG의 대표적인 얼그레이 계열의 홍차.<br>클래식하면서 우아한 시트러스 과일향과<br>수레국화의 향긋한 향이 특징인 Tea</p>
             <p class="nutri">1회 제공량 (474ml)   /   칼로리 (0kcal)<br>당류 (불검출)   /   단백질 (0g / 0%)<br>포화지방 (0g / 0%)   /   나트륨 (0mg / 0%)</p>
            </section><!--//tea_11_info-->
         </section><!--//tea_11-->  
                   
         <section class="tea_12">
           <div class="menu_img">
           <div class="tea12_img zero"></div>
           </div>
            <section class="tea_12_info">
             <div class="info_close"></div>
             <h3><span class="tea">아이스 프렌치 얼그레이</span><br>Iced French Earl Grey</h3>
             <p class="tea_info2">TWG의 대표적인 얼그레이 계열의 홍차.<br>클래식하면서 우아한 시트러스 과일향과<br>수레국화의 향긋한 향이 특징인 Tea</p>
             <p class="nutri">1회 제공량 (474ml)   /   칼로리 (0kcal)<br>당류 (불검출)   /   단백질 (0g / 0%)<br>포화지방 (0g / 0%)   /   나트륨 (0mg / 0%)</p>
            </section><!--//tea_12_info-->
         </section><!--//tea_12-->
                    
            <p class="b_menu_title">크림 카라멜</p>
            <p class="b_menu_title">아이스 크림 카라멜</p>
            <p class="b_menu_title">프렌치 얼그레이</p>
            <p class="b_menu_title1">아이스 프렌치 얼그레이</p>
            
        <section class="tea_13">
           <div class="menu_img">
           <div class="tea13_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="tea_13_info">
             <div class="info_close"></div>
             <h3><span class="tea">1837 블랙티</span><br>1837 Black Tea</h3>
             <p class="tea_info3">TWG Tea의 시그니처 제품으로<br>버뮤다 삼각지대의 과일이 블렌딩되어<br>홍차의 은은한 맛과 스트로베리의 뒷맛이 좋아<br>대중에게 가장 사랑받고 있는 Tea</p>
             <p class="nutri">1회 제공량 (474ml)   /   칼로리 (0kcal)<br>당류 (불검출)   /   단백질 (0g / 0%)<br>포화지방 (불검출)   /   나트륨 (0mg / 0%)</p>
            </section><!--//tea_13_info-->
         </section><!--//tea_13-->
                   
        <section class="tea_14">
           <div class="menu_img">
           <div class="tea14_img zero"></div>
           </div>
            <section class="tea_14_info">
             <div class="info_close"></div>
             <h3><span class="tea">아이스 1837 블랙티</span><br>Iced 1837 Black Tea</h3>
             <p class="tea_info3">TWG Tea의 시그니처 제품으로<br>버뮤다 삼각지대의 과일이 블렌딩되어<br>홍차의 은은한 맛과 스트로베리의 뒷맛이 좋아<br>대중에게 가장 사랑받고 있는 Tea</p>
             <p class="nutri">1회 제공량 (474ml)   /   칼로리 (0kcal)<br>당류 (불검출)   /   단백질 (0g / 0%)<br>포화지방 (불검출)   /   나트륨 (0mg / 0%)</p>
            </section><!--//tea_14_info-->
         </section><!--//tea_14-->
                   
        <section class="tea_15">
           <div class="menu_img">
           <div class="tea15_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="tea_15_info">
             <div class="info_close"></div>
             <h3><span class="tea">허니 레몬 아이스티</span><br>Honey Lemon Iced Tea</h3>
             <p class="tea_info2">진한 TWG TEA 프렌치 얼그레이 베이스에<br>달콤한 꿀과 상큼한 레몬이 더해진<br>TWG 아이스티</p>
             <p class="nutri">1회 제공량 (474ml)   /   칼로리 (105kcal)<br>당류 (23g / 23%)   /   단백질 (0g / 0%)<br>포화지방 (0g / 0%)   /   나트륨 (0mg / 0%)</p>
            </section><!--//tea_15_info-->
         </section><!--//tea_15-->
                   
        <section class="tea_16">
           <div class="menu_img">
           <div class="tea16_img zero"></div>
           </div>
            <section class="tea_16_info">
             <div class="info_close"></div>
             <h3><span class="tea">오렌지 자몽티</span><br>Orange Grapefruit Tea</h3>
             <p class="tea_info">블러드 오렌지와 자몽을 그대로 착즙하여<br>따뜻하게 즐길 수 있는 과일티</p>
             <p class="nutri">1회 제공량 (355ml)   /   칼로리 (150kcal)<br>당류 (36g / 36%)   /   단백질 (1g / 1%)<br>포화지방 (0g / 0%)   /   나트륨 (25mg / 1%)</p>
            </section><!--//tea_16_info-->
         </section><!--//tea_16-->
                    
            <p class="b_menu_title">1837 블랙티</p>
            <p class="b_menu_title">아이스 1837 블랙티</p>
            <p class="b_menu_title">허니 레몬 아이스티</p>
            <p class="b_menu_title1">오렌지 자몽티</p>
            
        <section class="tea_17">
           <div class="menu_img">
           <div class="tea17_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="tea_17_info">
             <div class="info_close"></div>
             <h3><span class="tea">유자 레몬티</span><br>Citron Lemon Tea</h3>
             <p class="tea_info">달콤쌉싸름한 유자청과 레몬즙이 어우러진<br>상큼한 시트러스티</p>
             <p class="nutri">1회 제공량 (355ml)   /   칼로리 (250kcal)<br>당류 (57g / 57%)   /   단백질 (0g / 0%)<br>포화지방 (0g / 0%)   /   나트륨 (40mg / 2%)</p>
            </section><!--//tea_17_info-->
         </section><!--//tea_17-->
                   
        <section class="tea_18">
           <div class="menu_img">
           <div class="tea18_img zero"></div>
           </div>
            <section class="tea_18_info">
             <div class="info_close"></div>
             <h3><span class="tea">로얄 밀크티</span><br>Royal Milk Tea</h3>
             <p class="tea_info">향긋한 홍차향이 부드러운 우유와 어우러진<br>정통 밀크티</p>
             <p class="nutri">1회 제공량 (355ml)   /   칼로리 (270kcal)<br>당류 (28g / 28%)   /   단백질 (9g / 16%)<br>포화지방 (7g / 47%)   /   나트륨 (180mg / 9%)</p>
            </section><!--//tea_18_info-->
         </section><!--//tea_18-->
                   
        <section class="tea_19">
           <div class="menu_img">
           <div class="tea19_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="tea_19_info">
             <div class="info_close"></div>
             <h3><span class="tea">그린티 라떼</span><br>Green Tea Latte</h3>
             <p class="tea_info2">그린티 파우더를 고운 거품으로 녹여준 뒤<br>스팀우유를 붓고 우유거품으로 마무리한<br>부드러운 티라떼</p>
             <p class="nutri">1회 제공량 (355ml)   /   칼로리 (310kcal)<br>당류 (41g / 41%)   /   단백질 (10g / 18%)<br>포화지방 (7g / 46%)   /   나트륨 (160mg / 8%)</p>
            </section><!--//tea_19_info-->
         </section><!--//tea_19-->
                   
        <section class="tea_20">
           <div class="menu_img">
           <div class="tea20_img zero"></div>
           </div>
            <section class="tea_20_info">
             <div class="info_close"></div>
             <h3><span class="tea">아이스 그린티 라떼</span><br>Iced Green Tea Latte</h3>
             <p class="tea_info">녹차향과 우유가 만나 입안 가득 부드러움을<br>느낄 수 있는 티라떼</p>
             <p class="nutri">1회 제공량 (414ml)   /   칼로리 (215kcal)<br>당류 (34g / 34%)   /   단백질 (5g / 9%)<br>포화지방 (3.4g / 23%)   /   나트륨 (80mg / 4%)</p>
            </section><!--//tea_20_info-->
         </section><!--//tea_20-->
                    
            <p class="b_menu_title">유자 레몬티</p>
            <p class="b_menu_title">로얄 밀크티</p>
            <p class="b_menu_title">그린티 라떼</p>
            <p class="b_menu_title1">아이스 그린티 라떼</p>
            
        <section class="tea_21">
           <div class="menu_img">
           <div class="tea21_img zero"></div>
           </div>
            <section class="tea_21_info">
             <div class="info_close"></div>
             <h3><span class="tea">버블 그린티 라떼</span><br>Bubble Green Tea Latte</h3>
             <p class="tea_info2">깔끔한 녹차향과 부드러운 우유가 입안 가득<br>조화를 이룬 티라떼에 쫀득한 타피오카를<br>넣어 씹는 재미를 더한 음료</p>
             <p class="nutri">1회 제공량 (414ml)   /   칼로리 (400kcal)<br>당류 (34g / 34%)   /   단백질 (5g / 9%)<br>포화지방 (3.4g / 23%)   /   나트륨 (80mg / 4%)</p>
            </section><!--//tea_21_info-->
         </section><!--//tea_21-->
                   
        <section class="tea_22">
           <div class="menu_img">
           <div class="tea22_img zero"></div>
           </div>
            <section class="tea_22_info">
             <div class="info_close"></div>
             <h3><span class="tea">버블 밀크티</span><br>Bubble Milk Tea</h3>
             <p class="tea_info2">향긋한 홍차와 부드러운 우유가 입안 가득<br>조화를 이룬 티라떼에 쫀득한 타피오카를<br>넣어 씹는 재미를 더한 음료</p>
             <p class="nutri">1회 제공량 (414ml)   /   칼로리 (300kcal)<br>당류 (37g / 37%)   /   단백질 (6g / 11%)<br>포화지방 (4.8g / 32%)   /   나트륨 (110mg / 6%)</p>
            </section><!--//tea_22_info-->
         </section><!--//tea_22-->
                   
        <section class="tea_23"></section>
        <section class="tea_24"></section>
                    
            <p class="b_menu_title">버블 그린티 라떼</p>
            <p class="b_menu_title1">버블 밀크티</p>
           
            
        </section><!--//b_tea-->
        
        <section class="b_etc">
        
        <section class="etc_title">
            <p><span class="title_b">기타</span>다양한 투썸프레이스 음료들을 즐겨보세요!</p>    
        </section><!--//etc_title-->
              
        <section class="etc_1">
           <div class="menu_img">
           <div class="etc1_img two"></div>
           </div>
           <div class="new_sticker"></div>
           <div class="best_sticker2"></div>
            <section class="etc_1_info">
             <div class="info_close"></div>
             <h3><span class="etc">스트로베리 라떼</span><br>Strawberry Latte</h3>
             <p class="etc_info2">달콤한 스트로베리와 부드러운 우유가 만나<br>조화롭게 섞인 투썸 스트로베리<br>시즌 시그니처 음료</p>
             <p class="nutri">1회 제공량 (414ml)   /   칼로리 (210kcal)<br>당류 (34g/34%)   /   단백질 (5g/9%)<br>포화지방 (3.1g/21%)   /   나트륨 (45mg/2%)</p>
            </section><!--//etc_1_info-->
         </section><!--//etc_1-->
                  
        <section class="etc_2">
           <div class="menu_img">
           <div class="etc2_img two"></div>
           </div>
           <div class="new_sticker"></div>
           <div class="best_sticker2"></div>
            <section class="etc_2_info">
             <div class="info_close"></div>
             <h3><span class="etc">스트로베리 아보카도 라떼</span><br>Strawberry Avocado Latte</h3>
             <p class="etc_info">아보카도의 리치함과 고소함에 상큼한 딸기가<br>더해진 건강한 스트로베리 음료</p>
             <p class="nutri">1회 제공량 (414ml)   /   칼로리 (330kcal)<br>당류 (47g / 47%)   /   단백질 (7g / 12%)<br>포화지방 (5g / 33%)   /   나트륨 (120mg / 6%)</p>
            </section><!--//etc_2_info-->
         </section><!--//etc_2-->
                  
        <section class="etc_3">
           <div class="menu_img">
           <div class="etc3_img one"></div>
           </div>
           <div class="new_sticker"></div>
            <section class="etc_3_info">
             <div class="info_close"></div>
             <h3><span class="etc">쑥 라떼</span><br>Mugwort Latte</h3>
             <p class="etc_info">향긋한 쑥의 풍미와 부드러운 우유가 조화롭게<br>어우러지는 쑥 라떼</p>
             <p class="nutri">1회 제공량 (355ml)   /   칼로리 (290kcal)<br>당류 (30g / 30%)   /   단백질 (8g / 14%)<br>포화지방 (8g / 5%)   /   나트륨 (140mg / 7%)</p>
            </section><!--//etc_3_info-->
         </section><!--//etc_3-->
                  
        <section class="etc_4">
           <div class="menu_img">
           <div class="etc4_img one"></div>
           </div>
           <div class="new_sticker"></div>
            <section class="etc_4_info">
             <div class="info_close"></div>
             <h3><span class="etc">아이스 쑥 라떼</span><br>Iced Mugwort Latte</h3>
             <p class="etc_info">향긋한 쑥의 풍미와 부드러운 우유가 조화롭게<br>어우러지는 쑥 라떼</p>
             <p class="nutri">1회 제공량 (414ml)   /   칼로리 (320kcal)<br>당류 (33g / 33%)   /   단백질 (7g / 12%)<br>포화지방 (8g / 53%)   /   나트륨 (140mg / 7%)</p>
            </section><!--//etc_4_info-->
         </section><!--//etc_4-->
                   
                    
            <p class="b_menu_title">스트로베리 라떼</p>
            <p class="b_menu_title">스트로베리 아보카도 라떼</p>
            <p class="b_menu_title">쑥 라떼</p>
            <p class="b_menu_title1">아이스 쑥 라떼</p>
              
              
        <section class="etc_5">
           <div class="menu_img">
           <div class="etc5_img zero"></div>
           </div>
            <section class="etc_5_info">
             <div class="info_close"></div>
             <h3><span class="etc">흑당곡물 라떼</span><br>Black Sugar Grain Latte</h3>
             <p class="etc_info">다양한 곡물로 맛을 내어 고소하고<br>한 끼 식사로 손색없는 라떼</p>
             <p class="nutri">1회 제공량 (355ml)   /   칼로리 (220kcal)<br>당류 (18g/18%)   /   단백질 (6g/11%)<br>포화지방 (3.6g/24%)   /   나트륨 (60mg/3%)</p>
            </section><!--//etc_5_info-->
         </section><!--//etc_5-->
                  
        <section class="etc_6">
           <div class="menu_img">
           <div class="etc6_img zero"></div>
           </div>
            <section class="etc_6_info">
             <div class="info_close"></div>
             <h3><span class="etc">아이스 흑당 곡물 라떼</span><br>Iced Black Sugar Grain Latte</h3>
             <p class="etc_info">다양한 곡물로 맛을 내어 고소하고<br>한 끼 식사로 손색없는 라떼</p>
             <p class="nutri">1회 제공량 (414ml)   /   칼로리 (265kcal)<br>당류 (22g / 22%)   /   단백질 (8g / 14%)<br>포화지방 (4.4g / 29%)   /   나트륨 (70mg / 4%)</p>
            </section><!--//etc_6_info-->
         </section><!--//etc_6-->
                  
        <section class="etc_7">
           <div class="menu_img">
           <div class="etc7_img zero"></div>
           </div>
            <section class="etc_7_info">
             <div class="info_close"></div>
             <h3><span class="etc">상그리아 에이드</span><br>Sangria Ade</h3>
             <p class="etc_info">레드 와인 풍미에 신선한 생과일을 더해<br>청량하게 즐기는 무알코올 상그리아 에이드</p>
             <p class="nutri">1회 제공량 (474ml)   /   칼로리 (250kcal)<br>당류 (62g / 62%)   /   단백질 (0g / 0%)<br>포화지방 (불검출)   /   나트륨 (5mg / 1%)</p>
            </section><!--//etc_7_info-->
         </section><!--//etc_7-->
                  
        <section class="etc_8">
           <div class="menu_img">
           <div class="etc8_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="etc_8_info">
             <div class="info_close"></div>
             <h3><span class="etc">레몬셔벗 에이드</span><br>Lemon Sherbet Ade</h3>
             <p class="etc_info">드라이한 샴페인 향과 생라임, 민트잎이<br>어우러져 시원하고 청량하게 즐기는 에이드</p>
             <p class="nutri">1회 제공량 (474ml)   /   칼로리 (210kcal)<br>당류 (50g / 50%)   /   단백질 (0g / 0%)<br>포화지방  (불검출)   /   나트륨 (10mg / 1%)</p>
            </section><!--//etc_8_info-->
         </section><!--//etc_8-->
                   
                    
            <p class="b_menu_title">흑당곡물 라떼 </p>
            <p class="b_menu_title">아이스 흑당 곡물 라떼</p>
            <p class="b_menu_title">상그리아 에이드</p>
            <p class="b_menu_title1">레몬셔벗 에이드</p>
              
        <section class="etc_9">
           <div class="menu_img">
           <div class="etc9_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="etc_9_info">
             <div class="info_close"></div>
             <h3><span class="etc">고구마 라떼</span><br>Sweet Potato Latte</h3>
             <p class="etc_info">고구마를 통째로 갈아넣어 원물감이<br>살아있는 리얼 라떼</p>
             <p class="nutri">1회 제공량 (355ml)   /   칼로리 (305kcal)<br>당류 (37g/37%)   /   단백질 (8g/14%)<br>포화지방 (7g/47%)   /   나트륨 (140mg/7%)</p>
            </section><!--//etc_9_info-->
         </section><!--//etc_9-->
                  
        <section class="etc_10">
           <div class="menu_img">
           <div class="etc10_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="etc_10_info">
             <div class="info_close"></div>
             <h3><span class="etc">블루베리요거트 드링크</span><br>Blueberry Yogurt Drink</h3>
             <p class="etc_info">깊고 진한 블루베리 풍미와 요거트의 조화를<br>느낄 수 있는 음료</p>
             <p class="nutri">1회 제공량 (414ml)   /   칼로리 (255kcal)<br>당류 (35g / 35%)   /   단백질 (7g / 12%)<br>포화지방 (4.1g / 27%)   /   나트륨 (120mg / 6%)</p>
            </section><!--//etc_10_info-->
         </section><!--//etc_10-->
                  
        <section class="etc_11">
           <div class="menu_img">
           <div class="etc11_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="etc_11_info">
             <div class="info_close"></div>
             <h3><span class="etc">플레인요거트 드링크</span><br>Plain Yogurt Drink</h3>
             <p class="etc_info4">요거트의 깊은 풍미를 즐길 수 있는 음료</p>
             <p class="nutri">1회 제공량 (414ml)   /   칼로리 (170kcal)<br>당류 (17g / 17%)   /   단백질 (7g / 12%)<br>포화지방 (3.8g / 25%)   /   나트륨 (95mg / 4%)</p>
            </section><!--//etc_11_info-->
         </section><!--//etc_11-->
                  
        <section class="etc_12">
           <div class="menu_img">
           <div class="etc12_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="etc_12_info">
             <div class="info_close"></div>
             <h3><span class="etc">자몽 에이드</span><br>Grapefruit Ade</h3>
             <p class="etc_info">자몽의 상큼함과 청량감이 입안 가득<br>느껴지는 자몽 에이드</p>
             <p class="nutri">1회 제공량 (474ml)   /   칼로리 (145kcal)<br>당류 (28g / 28%)   /   단백질 (1g / 1%)<br>포화지방  (0g / 0%)   /   나트륨 (5mg / 1%)</p>
            </section><!--//etc_12_info-->
         </section><!--//etc_12-->
                   
                    
            <p class="b_menu_title">고구마 라떼</p>
            <p class="b_menu_title">블루베리요거트 드링크</p>
            <p class="b_menu_title">플레인요거트 드링크</p>
            <p class="b_menu_title1">자몽 에이드</p>
              
        <section class="etc_13">
           <div class="menu_img">
           <div class="etc13_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="etc_13_info">
             <div class="info_close"></div>
             <h3><span class="etc">오렌지 에이드</span><br>Orange Ade</h3>
             <p class="etc_info">오렌지를 그대로 갈아 넣은<br>상큼한 오렌지 에이드</p>
             <p class="nutri">1회 제공량 (474ml)   /   칼로리 (135kcal)<br>당류 (33g/33%)   /   단백질 (1g/1%)<br>포화지방 (0g/ 0%)   /   나트륨 (40mg/2%)</p>
            </section><!--//etc_13_info-->
         </section><!--//etc_13-->
                  
        <section class="etc_14">
           <div class="menu_img">
           <div class="etc14_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="etc_14_info">
             <div class="info_close"></div>
             <h3><span class="etc">초콜릿 라떼</span><br>Chocolate Latte</h3>
             <p class="etc_info">초콜릿의 풍부한 맛과 휘핑크림, 초코칩이<br>조화로운 달콤한 초콜릿 음료</p>
             <p class="nutri">1회 제공량 (355ml)   /   칼로리 (415kcal)<br>당류 (35g / 35%)   /   단백질 (10g / 18%)<br>포화지방 (14g / 93%)   /   나트륨 (190mg / 10%)</p>
            </section><!--//etc_14_info-->
         </section><!--//etc_14-->
                  
        <section class="etc_15">
           <div class="menu_img">
           <div class="etc15_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="etc_15_info">
             <div class="info_close"></div>
             <h3><span class="etc">아이스 초코릿 라떼</span><br>Iced Chocolate Latte</h3>
             <p class="etc_info">초콜릿의 풍부한 맛과 휘핑크림, 초코칩이<br>조화로운 달콤한 초콜릿 음료</p>
             <p class="nutri">1회 제공량 (414ml)   /   칼로리 (355kcal)<br>당류 (30g / 30%)   /   단백질 (7g / 12%)<br>포화지방 (11g / 73%)   /   나트륨 (140mg / 7%)</p>
            </section><!--//etc_15_info-->
         </section><!--//etc_15-->
                  
        <section class="etc_16">
           <div class="menu_img">
           <div class="etc16_img zero"></div>
           </div>
            <section class="etc_16_info">
             <div class="info_close"></div>
             <h3><span class="etc">오렌지 자몽 주스</span><br>Orange Grapefruit Juice</h3>
             <p class="etc_info">통 오렌지와 자몽을 블렌딩한 상큼함이<br>입안 가득 느껴지는 주스</p>
             <p class="nutri">1회 제공량 (474ml)   /   칼로리 (110kcal)<br>당류 (22g / 22%)   /   단백질 (3g / 6%)<br>포화지방  (0g / 0%)   /   나트륨 (110mg / 5%)</p>
            </section><!--//etc_16_info-->
         </section><!--//etc_16-->
                   
                    
            <p class="b_menu_title">오렌지 에이드</p>
            <p class="b_menu_title">초콜릿 라떼</p>
            <p class="b_menu_title">아이스 초코릿 라떼</p>
            <p class="b_menu_title1">오렌지 자몽 주스</p>
              
        <section class="etc_17">
           <div class="menu_img">
           <div class="etc17_img one"></div>
           </div>
           <div class="best_sticker"></div>
            <section class="etc_17_info">
             <div class="info_close"></div>
             <h3><span class="etc">키위 바나나 주스</span><br>Kiwi Banana Juice</h3>
             <p class="etc_info4">그린키위와 바나나가 블렌딩 된 주스</p>
             <p class="nutri">1회 제공량 (474ml)   /   칼로리 (190kcal)<br>당류 (29g/29%)   /   단백질 (2g/3%)<br>포화지방 (0g/0%)   /   나트륨 (100mg/5%)</p>
            </section><!--//etc_17_info-->
         </section><!--//etc_17-->
                  
        <section class="etc_18"></section>
        <section class="etc_19"></section>
        <section class="etc_20"></section>
                   
            <p class="b_menu_title1">오렌지 에이드</p>
               
        </section><!--//b_etc-->   
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
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
    <link rel="stylesheet" href="css/twosomeplace_menu_wholecake.css" type="text/css">
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
        var mousse = document.getElementById("mousse");
        var cream = document.getElementById("cream")
        
        all.onclick=function(){
            
                mousse.checked=false;
                cream.checked=false;

        }
        
        mousse.onclick=function(){
            
                all.checked=false;
                cream.checked=false;

        }
        
        cream.onclick=function(){
            
                mousse.checked=false;
                all.checked=false;

        }
        
       

        $(".all").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".w_mousse,.w_cream").show(); 
            } 
        }); 
        
        $(".mousse").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".w_mousse").show();
                $(".w_cream").hide();
            } 
        }); 
        
        $(".cream").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".w_cream").show();
                $(".w_mousse").hide();
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
        <section class="app_cake">
            <p class="app_cake_txt1">
                다양한 종류의 투썸케이크를 미리 주문할수 있는 <span class="app_cake_s">‘예약시스템’</span>
            </p>
            <p class="app_cake_txt2">
                <span class="app_cake_s">모바일 투썸</span>으로 더 편리하고 새로워진<br>투썸플레이스를 만나보세요!
            </p>
            <a href="twosomeplace_service_mobileapp.php" class="app_cake_bt">APP 자세히보기</a>
        </section>
        
        <div class="check_form">
        <form name="" action="" method="">
            <fieldset class="box">
                <legend><span class="check_food">Whole Cake</span>투썸플레이스에서 만날 수 있는 특별하고 다양한 케이크!</legend>
                <p class="bd_box">
                    <input type="checkbox" name="menu" id="all" class="all">
                    <label for="all">전체상품</label>
                    <input type="checkbox" name="menu" id="mousse" class="mousse">
                    <label for="mousse">무스케익</label>
                    <input type="checkbox" name="menu" id="cream" class="cream">
                    <label for="cream">생크림케익</label>
                </p>
            </fieldset>
        </form>
        </div><!--//check_form-->
        
        <section class="w_mousse">
        <section class="mousse_title">
            <p><span class="title_b">무스케익</span>투썸플레이스의 다양한 케익들을 즐겨보세요!    제조사 : 투썸플레이스(주) / 점포제조     유형 : 빵류(케익류)     보관방법 : 냉장보관     유통기한 : 구입 후 가급적 빨리 취식 해 주십시요!</p>    
        </section><!--//mousse_title-->
        
        
        <section class="mou_1">
           <div class="menu_img">
           <div class="mou1_img one"></div>
           </div>
           <div class="new_sticker"></div>
           <section class="mou_1_info">
            <div class="info_close"></div>
            <h3><span class="mou">생딸기 가득 타르트</span><br>Strawberry Tart</h3>
            <p class="mou_info4">버터 풍미가 가득한 바삭한 타르트에<br>베리 무스와 화이트 시트를 레이어하고 신선한<br>딸기를 한 가득 올려 마무리한 무스 타르트<br>* 계란,우유,대두,밀,돼지고기 함유</p>
            <p class="nutri">1회 제공량 (667g)   /   칼로리 (1795kcal)<br>당류 (121g / 121%)   /   단백질 (29g / 52%)<br>포화지방 (51g / 340%)   /   나트륨 (430mg / 22%)</p>
           </section><!--//mou_1_info-->
        </section><!--//mou_1-->
        
        <section class="mou_2">
           <div class="menu_img">
           <div class="mou2_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="mou_2_info">
            <div class="info_close"></div>
            <h3><span class="mou">헤이즐넛 마스카포네 치즈</span><br>Hazelnut Mascarpone Cheese</h3>
            <p class="mou_info5">담백한 뉴욕치즈 케이크 위에 진한 풍미의<br>헤이즐넛 가나슈를 레이어 하고,<br>헤이즐넛&amp;마스카포네 치즈 생크림을 풍성하게<br>올린 케이크<br>* 계란, 우유, 대두, 밀 함유</p>
            <p class="nutri">1회 제공량 (984g)   /   칼로리 (1960kcal)<br>당류 (111g / 111%)   /   단백질 (27g / 49%)<br>포화지방 (91g / 607%)   /   나트륨 (670mg / 34%)</p>
           </section><!--//mou_2_info-->
        </section><!--//mou_2-->
        
        <section class="mou_3">
           <div class="menu_img">
           <div class="mou3_img zero"></div>
           </div>
           <section class="mou_3_info">
            <div class="info_close"></div>
            <h3><span class="mou">모어 댄 쿠키 앤 크림 1호</span><br>More than Cookie N Cream</h3>
            <p class="mou_info4">초코시트 사이사이 크림치즈와 블랙쿠키<br>파우더가 믹스된 크림이 층층이 쌓여 부드러움과<br>달콤함을 한번에 느낄 수 있는 디저트 케이크<br>* 계란,우유,대두,밀,돼지고기 함유</p>
            <p class="nutri">1회 제공량 (880g)   /   칼로리 (2110kcal)<br>당류 (188g / 188%)   /   단백질 (15g / 27%)<br>포화지방 (80g / 533%)   /   나트륨 (430mg / 22%)</p>
           </section><!--//mou_3_info-->
        </section><!--//mou_3-->
        
        <section class="mou_4">
           <div class="menu_img">
           <div class="mou4_img zero"></div>
           </div>
           <section class="mou_4_info">
            <div class="info_close"></div>
            <h3><span class="mou">모어 댄 쿠키 앤 크림 2호</span><br>More than Cookie N Cream</h3>
            <p class="mou_info4">초코시트 사이사이 크림치즈와 블랙쿠키<br>파우더가 믹스된 크림이 층층이 쌓여 부드러움과<br>달콤함을 한번에 느낄 수 있는 디저트 케이크<br>* 계란,우유,대두,밀,돼지고기 함유</p>
            <p class="nutri2">1회 제공량 (1273g)   /   칼로리 (3125kcal)<br>당류 (262g / 262%)   /   단백질 (23g / 42%)<br>포화지방 (123g / 820%)   /   나트륨 (650mg / 33%)</p>
           </section><!--//mou_4_info-->
        </section><!--//mou_4--> 
        
            <p class="b_menu_title">생딸기 가득 타르트</p>
            <p class="b_menu_title">헤이즐넛 마스카포네 치즈</p>
            <p class="b_menu_title">모어 댄 쿠키 앤 크림 1호</p>
            <p class="b_menu_title1">모어 댄 쿠키 앤 크림 2호</p>
        
        <section class="mou_5">
           <div class="menu_img">
           <div class="mou5_img zero"></div>
           </div>
           <section class="mou_5_info">
            <div class="info_close"></div>
            <h3><span class="mou">레드 벨벳</span><br>Red Velvet Cake</h3>
            <p class="mou_info4">인상적인 붉은 컬러 레드벨벳 4단 시트에<br>과일 데코로 상큼함을 더하고, 진한 크림치즈로<br>아이싱된 케이크<br>*난류,우유,대두,밀,아황산류,쇠고기 함유</p>
            <p class="nutri">1회 제공량 (828g)   /   칼로리 (2050kcal)<br>당류 (175g / 175%)   /   단백질 (23g / 41%)<br>포화지방 (73g / 487%)   /   나트륨 (900mg / 45%)</p>
           </section><!--//mou_5_info-->
        </section><!--//mou_5--> 
        
        <section class="mou_6">
           <div class="menu_img">
           <div class="mou6_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="mou_6_info">
            <div class="info_close"></div>
            <h3><span class="mou">뉴욕 치즈</span><br>Newyork Cheese Cake</h3>
            <p class="mou_info3">부드럽고 촉촉한 식감과 진한 치즈의 향이<br>물씬 나는 정통 뉴욕 스타일의 구움치즈 케이크<br>*계란, 우유, 대두, 밀, 쇠고기 함유</p>
            <p class="nutri3">1회 제공량 (841g)   /   칼로리 (2550kcal)<br>당류 (190g / 190%)   /   단백질 (39g / 70%)<br>포화지방 (105g / 700%)   /   나트륨 (1580mg / 79%)</p>
           </section><!--//mou_6_info-->
        </section><!--//mou_6--> 
        
        <section class="mou_7">
           <div class="menu_img">
           <div class="mou7_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="mou_7_info">
            <div class="info_close"></div>
            <h3><span class="mou">마스카포네 티라미수</span><br>Mascarpone Tiramisu</h3>
            <p class="mou7_info4">마스카포네 치즈를 사용한 부드러운 크림과<br>진한 커피 시럽을 바른 시트를 사용하고, 순도높은<br>발로나 카카오 파우더로 마무리한 이탈리안 무스.<br>* 계란, 우유, 대두, 밀, 돼지고기 함유</p>
            <p class="nutri">1회 제공량 (708g)   /   칼로리 (2025kcal)<br>당류 (108g / 108%)   /   단백질 (39g / 71%)<br>포화지방 (95g / 633%)   /   나트륨 (580mg / 29%)</p>
           </section><!--//mou_7_info-->
        </section><!--//mou_7-->
        
         <section class="mou_8">
           <div class="menu_img">
           <div class="mou8_img zero"></div>
           </div>
           <section class="mou_8_info">
            <div class="info_close"></div>
            <h3><span class="mou">그뤼에르 치즈 무스</span><br>Gruyere Cheese Mousse</h3>
            <p class="mou_info4">겉은 블랙 초코 크런치로 커버되고, 안은 화이트<br>그뤼에르치즈 무스와 시트로 구성된 반전<br>무스 케이크<br>*계란,우유,대두,밀,돼지고기 함유</p>
            <p class="nutri2">1회 제공량 (703g)   /   칼로리 (2475kcal)<br>당류 (114g / 114%)   /   단백질 (33g / 60%)<br>포화지방 (101g / 673%)   /   나트륨 (800mg / 44%)</p>
           </section><!--//mou_8_info-->
        </section><!--//mou_8--> 
        
        
        
            <p class="b_menu_title">레드 벨벳</p>
            <p class="b_menu_title">뉴욕 치즈</p>
            <p class="b_menu_title">마스카포네 티라미수</p>
            <p class="b_menu_title1">그뤼에르 치즈 무스</p>
            
        <section class="mou_9">
           <div class="menu_img">
           <div class="mou9_img zero"></div>
           </div>
           <section class="mou_9_info">
            <div class="info_close"></div>
            <h3><span class="mou">퀸즈 캐롯</span><br>Queens Carrot Cake</h3>
            <p class="mou_info4">담백한 당근과 상큼한 오렌지 필로 식감을 살린<br>촉촉한 캐롯 시트와 묵직한 크림치즈를 풍성하게<br>레이어한 영국식 티 케이크<br>*계란,우유,대두,밀,호두 함유</p>
            <p class="nutri3">1회 제공량 (828g)   /   칼로리 (2635kcal)<br>당류 (169g / 169%)   /   단백질 (36g / 65%)<br>포화지방 (96g / 640%)   /   나트륨 (2180mg / 109%)</p>
           </section><!--//mou_9_info-->
        </section><!--//mou_9--> 
        
        <section class="mou_10">
           <div class="menu_img">
           <div class="mou10_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="mou_10_info">
            <div class="info_close"></div>
            <h3><span class="mou">벨지안 멜팅 가나슈</span><br>Belgian-Chocolate-Ganache</h3>
            <p class="mou_info5">벨기에산 다크 초콜릿 가나슈와 시트 사이사이<br>초코 크런치, 크럼블로 바삭한 식감을 더한 제품,<br>컷팅시 헤이즐넛 밀크 크림이 흘러나오는<br>반전 매력의 케이크<br>*난류, 우유, 대두, 밀 함유</p>
            <p class="nutri2">1회 제공량 (893g)   /   칼로리 (3250kcal)<br>당류 (242g / 242%)   /   단백질 (42g / 76%)<br>포화지방 (120g / 800%)   /   나트륨 (740mg / 37%)</p>
           </section><!--//mou_10_info-->
        </section><!--//mou_10--> 
        
        <section class="mou_11">
           <div class="menu_img">
           <div class="mou11_img zero"></div>
           </div>
           <section class="mou_11_info">
            <div class="info_close"></div>
            <h3><span class="mou">블랙 벨벳</span><br>Black Velvet</h3>
            <p class="mou_info4">진한 블랙시트에 크림치즈를 풍부하게 샌드하고<br>다크체리로 상큼하게 마무리한 세련된 룩의<br>구움 치즈 케이크<br>*계란,우유,대두,밀 함유</p>
            <p class="nutri3">1회 제공량 (843g)   /   칼로리 (2935kcal)<br>당류 (218g / 218%)   /   단백질 (34g / 61%)<br>포화지방 (95g / 633%)   /   나트륨 (1530mg / 77%)</p>
           </section><!--//mou_11_info-->
        </section><!--//mou_11--> 
        
        <section class="mou_12">
           <div class="menu_img">
           <div class="mou12_img zero"></div>
           </div>
           <section class="mou_12_info">
            <div class="info_close"></div>
            <h3><span class="mou">바닐라 크렘 브륄레</span><br>Vanilla Creme Brulee</h3>
            <p class="mou_info4">바닐라빈이 듬뿍 들어간 순백의 하얀 무스 속에<br>달콤한 크렘브륄레가 숨겨진 바닐라빈<br>아이스크림을 닮은 맛의 프리미엄 무스 케이크<br>*계란,우유,대두,밀,돼지고기 함유</p>
            <p class="nutri">1회 제공량 (794g)   /   칼로리 (1920kcal)<br>당류 (140g / 140%)   /   단백질 (42g / 76%)<br>포화지방 (59g / 393%)   /   나트륨 (400mg / 20%)</p>
           </section><!--//mou_12_info-->
        </section><!--//mou_12--> 
        
        
        
            <p class="b_menu_title">퀸즈 캐롯</p>
            <p class="b_menu_title">벨지안 멜팅 가나슈</p>
            <p class="b_menu_title">블랙 벨벳</p>
            <p class="b_menu_title1">바닐라 크렘 브륄레</p>
            
        <section class="mou_13">
           <div class="menu_img">
           <div class="mou13_img zero"></div>
           </div>
           <section class="mou_13_info">
            <div class="info_close"></div>
            <h3><span class="mou">까망베르 치즈</span><br>Camembert Cheese Cake</h3>
            <p class="mou_info5">생生 까망베르 치즈를 곱게 갈아 넣은 치즈<br>특유의 짭짤하고 진한 맛이 일품인<br>구움치즈 케이크. 원형 종이 박스에 담겨<br>선물용으로 좋은 제품<br>*계란,우유,대두,밀,돼지고기,아황산류 함유</p>
            <p class="nutri2">1회 제공량 (461g)   /   칼로리 (1815kcal)<br>당류 (77g / 77%)   /   단백질 (31g / 56%)<br>포화지방 (89g / 593%)   /   나트륨 (810mg / 41%)</p>
           </section><!--//mou_13_info-->
        </section><!--//mou_13--> 
        
        <section class="mou_14">
           <div class="menu_img">
           <div class="mou14_img zero"></div>
           </div>
           <section class="mou_14_info">
            <div class="info_close"></div>
            <h3><span class="mou">트리플 초콜릿 무스</span><br>Triple Chocolate Mousse Cake</h3>
            <p class="mou14_info3">다크, 밀크, 화이트 세 가지 초콜릿을 한 번에<br>즐길 수 있는 Triple Chocolate Layer 무스케이크<br>*계란,우유,대두,밀,돼지고기 함유</p>
            <p class="nutri">1회 제공량 (663g)   /   칼로리 (2180kcal)<br>당류 (126g / 126%)   /   단백질 (30g / 54%)<br>포화지방 (96g / 640%)   /   나트륨 (510mg / 26%)</p>
           </section><!--//mou_14_info-->
        </section><!--//mou_14--> 
        
        <section class="mou_15">
           <div class="menu_img">
           <div class="mou15_img zero"></div>
           </div>
           <section class="mou_15_info">
            <div class="info_close"></div>
            <h3><span class="mou">블랙 포레스트</span><br>Black Forest</h3>
            <p class="mou_info4">초콜릿 시트 사이사이 생크림과 체리를 샌드하고<br>상단에 생크림을 듬뿍 올린 뒤 초콜릿으로<br>데코레이션한 초콜릿 체리 생크림케이크<br>*계란,우유,대두,밀,돼지고기 함유</p>
            <p class="nutri2">1회 제공량 (557g)   /   칼로리 (1900kcal)<br>당류 (124g / 124%)   /   단백질 (16g / 29%)<br>포화지방 (100g / 667%)   /   나트륨 (190mg / 10%)</p>
           </section><!--//mou_15_info-->
        </section><!--//mou_15--> 
        
        <section class="mou_16">
           <div class="menu_img">
           <div class="mou16_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="mou_16_info">
            <div class="info_close"></div>
            <h3><span class="mou">클래식 가토</span><br>Classic Gateau Chocolate</h3>
            <p class="mou_info4">부드러운 초코시트에 다크와 밀크가 혼합된<br>초콜릿 가나슈를 샌드하여 부드럽고 진한 맛을<br>즐길 수 있는 케이크<br>*난류,우유,대두,밀 함유</p>
            <p class="nutri">1회 제공량 (522g)   /   칼로리 (1355kcal)<br>당류 (82g / 82%)   /   단백질 (24g / 44%)<br>포화지방 (59g / 393%)   /   나트륨 (360mg / 18%)</p>
           </section><!--//mou_16_info-->
        </section><!--//mou_16--> 
        
        
        
            <p class="b_menu_title">까망베르 치즈</p>
            <p class="b_menu_title">트리플 초콜릿 무스</p>
            <p class="b_menu_title">블랙 포레스트</p>
            <p class="b_menu_title1">클래식 가토</p>
            
        <section class="mou_17">
           <div class="menu_img">
           <div class="mou17_img zero"></div>
           </div>
           <section class="mou_17_info">
            <div class="info_close"></div>
            <h3><span class="mou">생크림 피칸 타르트</span><br>Fresh Cream Pecan Tart</h3>
            <p class="mou_info3">타르트 쉘 위에 고소한 피칸과 생크림을 가득<br>올린 구움 타르트<br>*계란,우유,대두,밀,돼지고기 함유</p>
            <p class="nutri">1회 제공량 (792g)   /   칼로리 (3110kcal)<br>당류 (207g / 207%)   /   단백질 (44g / 80%)<br>포화지방 (75g / 500%)   /   나트륨 (480mg / 24%)</p>
           </section><!--//mou_17_info-->
        </section><!--//mou_17--> 
        
        <section class="mou_18"></section>
        <section class="mou_19"></section>
        <section class="mou_20"></section>
        
 
            <p class="b_menu_title1">생크림 피칸 타르트</p>
        
        </section><!--//w_mousse-->
        
         <section class="w_cream">
        <section class="cream_title">
            <p><span class="title_b">무스케익</span>투썸플레이스의 다양한 케익들을 즐겨보세요!    제조사 : 투썸플레이스(주) / 점포제조     유형 : 빵류(케익류)     보관방법 : 냉장보관     유통기한 : 구입 후 가급적 빨리 취식 해 주십시요!</p>    
        </section><!--//cream_title-->
        
        
        <section class="cream_1">
           <div class="menu_img">
           <div class="cream1_img one"></div>
           </div>
           <div class="new_sticker"></div>
           <section class="cream_1_info">
            <div class="info_close"></div>
            <h3><span class="cream">딸기생크림 2호</span><br>Strawberry Fresh Cream Cake</h3>
            <p class="cream_info3">담백한 생크림과 부드러운 시트, 딸기를<br>풍성하게 올린 생크림 케이크<br>* 계란,우유,대두,밀,돼지고기,아황산류 함유</p>
            <p class="nutri">1회 제공량 (989g)   /   칼로리 (1640kcal)<br>당류 (179g / 179%)   /   단백질 (23g / 42%)<br>포화지방 (30g / 200%)   /   나트륨 (720mg / 36%)</p>
           </section><!--//cream_1_info-->
        </section><!--//cream_1-->
        
        <section class="cream_2">
           <div class="menu_img">
           <div class="cream2_img zero"></div>
           </div>
           <section class="cream_2_info">
            <div class="info_close"></div>
            <h3><span class="cream">화이트 포레스트 생크림</span><br>White Forest Fresh Cream Cake</h3>
            <p class="cream_info4">여름저격! 상큼달콤한 딸기생크림 케이크 위에<br>달콤한 화이트 컬 초콜릿과 드라이 라즈베리를<br>올린 투썸 여름 시즌 한정 생크림 케이크<br>* 계란, 우유, 대두, 밀, 돼지고기, 아황산류 함유</p>
            <p class="nutri">1회 제공량 (637g)   /   칼로리 (1785kcal)<br>당류 (145g / 145%)   /   단백질 (23g / 42%)<br>포화지방 (72g / 480%)   /   나트륨 (530mg / 27%)</p>
           </section><!--//cream_2_info-->
        </section><!--//cream_2-->
        
         <section class="cream_3">
           <div class="menu_img">
           <div class="cream3_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="cream_3_info">
            <div class="info_close"></div>
            <h3><span class="cream">스트로베리 초콜릿 생크림</span><br>Strawberry Chocolate Fresh Cream Cake</h3>
            <p class="cream_info4">한가득 올린 상큼한 딸기, 크런치 초코볼이<br>초코 생크림 사이사이 씹히는<br>투썸 베스트 생크림 케이크<br>* 매장 별로 딸기 외 대체 과일 데코레이션운영</p>
            <p class="nutri">1회 제공량 (726g)   /   칼로리 (1560kcal)<br>당류 (111g / 111%)   /   단백질 (26g / 47%)<br>포화지방 (50g / 333%)   /   나트륨 (470mg / 24%)</p>
           </section><!--//cream_3_info-->
        </section><!--//cream_3-->
        
        <section class="cream_4">
           <div class="menu_img">
           <div class="cream4_img zero"></div>
           </div>
           <section class="cream_4_info">
            <div class="info_close"></div>
            <h3><span class="cream">딸기 생크림</span><br>Strawberry Fresh Cream Cake</h3>
            <p class="cream_info3">담백한 생크림과 부드러운 시트, 딸기를 풍성하게<br>올린 생크림 케이크<br>*난류, 우유, 대두, 밀, 돼지고기, 아황산류 함유</p>
            <p class="nutri">1회 제공량 (716g)   /   칼로리 (1760kcal)<br>당류 (134g / 134%)   /   단백질 (21g / 38%)<br>포화지방 (58g / 387%)   /   나트륨 (490mg / 25%)</p>
           </section><!--//cream_4_info-->
        </section><!--//cream_4-->
        
            <p class="b_menu_title">딸기생크림 2호</p>
            <p class="b_menu_title">화이트 포레스트 생크림</p>
            <p class="b_menu_title">스트로베리 초콜릿 생크림</p>
            <p class="b_menu_title1">딸기 생크림</p>
            
        <section class="cream_5">
           <div class="menu_img">
           <div class="cream5_img zero"></div>
           </div>
           <section class="cream_5_info">
            <div class="info_close"></div>
            <h3><span class="cream">마스카포네 생크림 [믹스드베리]</span><br>Mascarpone Fresh Cream Cake</h3>
            <p class="cream_info5">하얀 케익 시트 속 마스카포네 생크림과 딸기가<br>어우러져 새콤달콤하게 즐길 수 있는 케이크<br>해당 제품 옆면의 흰색 부분은 화이트 시트이며,<br>실제로는 흰색이 아닌 약간의 노란색을 띱니다.<br>*계란,우유,대두,밀 함유</p>
            <p class="nutri">1회 제공량 (1044g)   /   칼로리 (2620kcal)<br>당류 (66g / 66%)   /   단백질 (21g / 38%)<br>포화지방 (212g / 1413%)   /   나트륨 (420mg / 21%)</p>
           </section><!--//cream_5_info-->
        </section><!--//cream_5-->
        
        <section class="cream_6">
           <div class="menu_img">
           <div class="cream6_img one"></div>
            </div>
            <div class="best_sticker"></div>
           <section class="cream_6_info">
            <div class="info_close"></div>
            <h3><span class="cream">마스카포네 생크림[천도복숭아]</span><br>Mascarpone Fresh Cream Cake</h3>
            <p class="cream_info6">하얀 케익 시트 속 마스카포네 생크림과<br>천도복숭아가 어우러져 새콤달콤하게 즐길 수<br>있는 케이크<br>해당 제품 옆면의 흰색 부분은 화이트 시트이며,<br>실제로는 흰색이 아닌 약간의 노란색을 띱니다.<br>*계란,우유,대두,밀,복숭아,아황산류 함유</p>
            <p class="nutri">1회 제공량 (1055g)   /   칼로리 (3255kcal)<br>당류 (173g / 173%)   /   단백질 (21g / 38%)<br>포화지방 (212g / 1413%)   /   나트륨 (410mg / 21%)</p>
           </section><!--//cream_6_info-->
        </section><!--//cream_6-->
        
        <section class="cream_7">
           <div class="menu_img">
           <div class="cream7_img zero"></div>
           </div>
           <section class="cream_7_info">
            <div class="info_close"></div>
            <h3><span class="cream">마스카포네 생크림 [자몽/오렌지]</span><br>Mascarpone Fresh Cream Cake</h3>
            <p class="cream_info6">신선한 자몽, 오렌지, 라즈베리와 부드러운<br>마스카포네 생크림이 어우러져 상큼하게<br>즐길 수 있는 케이크<br>해당 제품 옆면의 흰색 부분은 화이트 시트이며,<br>실제로는 흰색이 아닌 약간의 노란색을 띱니다.<br>*계란,우유,대두,밀,함유</p>
            <p class="nutri">1회 제공량 (1025g)   /   칼로리 (2610kcal)<br>당류 (62g / 62%)   /   단백질 (22g / 40%)<br>포화지방 (213g / 1420%)   /   나트륨 (410mg / 21%)</p>
           </section><!--//cream_7_info-->
        </section><!--//cream_7-->
        
        <section class="cream_8">
           <div class="menu_img">
           <div class="cream8_img zero"></div>
           </div>
           <section class="cream_8_info">
            <div class="info_close"></div>
            <h3><span class="cream">비 마이 스트로베리</span><br>Be My Strawbrry</h3>
            <p class="cream_info4">스트로베리 생크림과 스트로베리콤포트 과육을<br>듬뿍 샌드하고, 마스카포네치즈크림으로<br>마무리한 리얼 스트로베리 생크림케이크<br>*계란,우유,대두,밀,돼지고기,아황산류 함유</p>
            <p class="nutri">1회 제공량 (737g)   /   칼로리 (1990kcal)<br>당류 (154g / 154%)   /   단백질 (25g / 45%)<br>포화지방 (63g / 420%)   /   나트륨 (590mg / 30%)</p>
           </section><!--//cream_8_info-->
        </section><!--//cream_8-->
        
            <p class="b_menu_title">마스카포네 생크림 [믹스드베리]</p>
            <p class="b_menu_title">마스카포네 생크림[천도복숭아]</p>
            <p class="b_menu_title">마스카포네 생크림 [자몽/오렌지]</p>
            <p class="b_menu_title1">비 마이 스트로베리</p>
            
        <section class="cream_9">
           <div class="menu_img">
           <div class="cream9_img zero"></div>
           </div>
           <section class="cream_9_info">
            <div class="info_close"></div>
            <h3><span class="cream">리얼 생크림 2호</span><br>Fresh Cream Cake</h3>
            <p class="cream_info4">담백한 프랑스산 생크림과 부드러운 시트가<br>잘 어울리는 케이크<br>* 매장 별로 딸기 외 대체 과일 데코레이션운영<br>*계란,우유,대두,밀,아황산류 함유</p>
            <p class="nutri">1회 제공량 (1054g)   /   칼로리 (2630kcal)<br>당류 (196g / 196%)   /   단백질 (33g / 60%)<br>포화지방 (102g / 680%)   /   나트륨 (730mg / 37%)</p>
           </section><!--//cream_9_info-->
        </section><!--//cream_9-->
        
        <section class="cream_10">
           <div class="menu_img">
           <div class="cream10_img zero"></div>
           </div>
           <section class="cream_10_info">
            <div class="info_close"></div>
            <h3><span class="cream">카푸치노 생크림</span><br>Cappuccino Cake</h3>
            <p class="cream_info4">에티오피아 원두로 우려낸 커피 크림에<br>초코시트로 풍성하게 레이어링하고, 부드러운<br>마스카포네 치즈크림으로 마무리한 생크림 케이크<br>*계란, 우유, 대두,밀 함유</p>
            <p class="nutri">1회 제공량 (723g)   /   칼로리 (2005kcal)<br>당류 (103g / 103%)   /   단백질 (24g / 44%)<br>포화지방 (92g / 613%)   /   나트륨 (620mg / 31%)</p>
           </section><!--//cream_10_info-->
        </section><!--//cream_10-->
        
        <section class="cream_11">
           <div class="menu_img">
           <div class="cream11_img zero"></div>
           </div>
           <section class="cream_11_info">
            <div class="info_close"></div>
            <h3><span class="cream">로즈베리 생크림</span><br>Roseberry Fresh Cream Cake</h3>
            <p class="cream_info4">부드러운 화이트 초콜릿 생크림과 분홍빛 펄볼,<br>상큼한 라즈베리 꿀리의 촉촉한 맛에 은은하게<br>장미향이 어우러지는 생크림 케이크<br>*난류, 우유, 대두, 밀 함유</p>
            <p class="nutri">1회 제공량 (463g)   /   칼로리 (1315kcal)<br>당류 (91g / 91%)   /   단백질 (18g / 32%)<br>포화지방 (56g / 373%)   /   나트륨 (380mg / 19%)</p>
           </section><!--//cream_11_info-->
        </section><!--//cream_11-->
        
        <section class="cream_12">
           <div class="menu_img">
           <div class="cream12_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="cream_12_info">
            <div class="info_close"></div>
            <h3><span class="cream">TWG 밀크티 쉬폰</span><br>TWG Milktea Chiffon</h3>
            <p class="cream_info4">부드럽고 촉촉한 홍차쉬폰 시트에 TWG TEA를<br>정성스레 우려내어 만든 홍차 생크림으로 더욱<br>진해진 로얄밀크티 쉬폰<br>*계란,우유,대두,밀 함유</p>
            <p class="nutri">1회 제공량 (636g)   /   칼로리 (2000kcal)<br>당류 (107g / 107%)   /   단백질 (27g / 49%)<br>포화지방 (79g / 527%)   /   나트륨 (700mg / 35%)</p>
           </section><!--//cream_12_info-->
        </section><!--//cream_12-->
        
            <p class="b_menu_title">리얼 생크림 2호</p>
            <p class="b_menu_title">카푸치노 생크림</p>
            <p class="b_menu_title">로즈베리 생크림</p>
            <p class="b_menu_title1">TWG 밀크티 쉬폰</p>
            
        <section class="cream_13">
           <div class="menu_img">
           <div class="cream13_img zero"></div>
           </div>
           <section class="cream_13_info">
            <div class="info_close"></div>
            <h3><span class="cream">더치 솔티드 카라멜</span><br>Dutch Salted Caramel</h3>
            <p class="cream_info5">부드럽고 촉촉한 초콜릿 시트와 카라멜 생크림<br>사이사이, 네덜란드산 솔티드카라멜 크런치펄과<br>로스티드 월넛을 듬뿍 넣고, 옆면에 크럼블을<br>데코레이션한 프리미엄 케이크<br>*난류, 우유, 대두, 밀, 돼지고기, 호두 함유</p>
            <p class="nutri">1회 제공량 (645g)   /   칼로리 (2290kcal)<br>당류 (89g / 89%)   /   단백질 (34g / 61%)<br>포화지방 (69g / 460%)   /   나트륨 (1170mg / 59%)</p>
           </section><!--//cream_13_info-->
        </section><!--//cream_13-->
        
        <section class="cream_14">
           <div class="menu_img">
           <div class="cream14_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="cream_14_info">
            <div class="info_close"></div>
            <h3><span class="cream">요거 생크림 1호</span><br>Yogur Fresh Cream Cake</h3>
            <p class="cream_info4">유크림이 풍부한 유럽산 생크림을 사용한<br>고품격 과일 생크림 케이크<br>* 매장 별로 딸기 외 대체 과일 데코레이션운영<br>*계란, 우유, 대두, 밀, 아황산류 함유</p>
            <p class="nutri">1회 제공량 (609g)   /   칼로리 (1375kcal)<br>당류 (115g / 115%)   /   단백질 (20g / 36%)<br>포화지방 (47g / 313%)   /   나트륨 (450mg / 23%)</p>
           </section><!--//cream_14_info-->
        </section><!--//cream_14-->
        
        <section class="cream_15">
           <div class="menu_img">
           <div class="cream15_img zero"></div>
           </div>
           <section class="cream_15_info">
            <div class="info_close"></div>
            <h3><span class="cream">믹스드베리 초콜릿 생크림</span><br>Mixedberry Chocolate Fresh Cream Cake</h3>
            <p class="cream_info4">한가득 올린 상큼한 믹스드베리, 크런치 초코볼이<br>초코 생크림 사이사이 씹히는<br>투썸 베스트 생크림 케이크.<br>* 계란,우유,대두,밀 함유</p>
            <p class="nutri">1회 제공량 (635g)   /   칼로리 (1575kcal)<br>당류 (122g / 122%)   /   단백질 (25g / 45%)<br>포화지방 (50g / 333%)   /   나트륨 (470mg / 24%)</p>
           </section><!--//cream_15_info-->
        </section><!--//cream_15-->
        
        <section class="cream_16">
           <div class="menu_img">
           <div class="cream16_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="cream_16_info">
            <div class="info_close"></div>
            <h3><span class="cream">요거 생크림 2호</span><br>Yogur Fresh Cream Cake</h3>
            <p class="cream_info4">유크림이 풍부한 유럽산 생크림을 사용한<br>고품격 과일 생크림 케이크<br>* 매장 별로 딸기 외 대체 과일 데코레이션 운영<br>*계란, 우유, 대두, 밀, 아황산류 함유</p>
            <p class="nutri">1회 제공량 (875g)   /   칼로리 (1760kcal)<br>당류 (143g / 143%)   /   단백질 (26g / 47%)<br>포화지방 (60g / 400%)   /   나트륨 (630mg / 32%)</p>
           </section><!--//cream_16_info-->
        </section><!--//cream_16-->
        
            <p class="b_menu_title">더치 솔티드 카라멜</p>
            <p class="b_menu_title">요거 생크림 1호</p>
            <p class="b_menu_title">믹스드베리 초콜릿 생크림</p>
            <p class="b_menu_title1">요거 생크림 2호</p>
            
        <section class="cream_17">
           <div class="menu_img">
           <div class="cream17_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="cream_17_info">
            <div class="info_close"></div>
            <h3><span class="cream">초코 쉬폰</span><br>Chocolate Chiffon Cake</h3>
            <p class="cream_info3">초코파우더와 흰자거품으로 만든 초코시트에<br>생크림으로장식하고 초코가루로 장식한 제품<br>*계란,우유,대두,밀,복숭아,아황산류 함유</p>
            <p class="nutri">1회 제공량 (635g)   /   칼로리 (2085kcal)<br>당류 (140g / 140%)   /   단백질 (33g / 60%)<br>포화지방 (77g / 513%)   /   나트륨 (900mg / 45%)</p>
           </section><!--//cream_17_info-->
        </section><!--//cream_17-->
        
        <section class="cream_18">
           <div class="menu_img">
           <div class="cream18_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="cream_18_info">
            <div class="info_close"></div>
            <h3><span class="cream">장미 요거 생크림</span><br>Rose Cake</h3>
            <p class="cream_info4">장미 모양의 생크림 요거생크림 케익위에<br>딸기 파우더를 얹혀 분위기를 연출한 케익<br>[토핑 과일은 계절에 따라 틀려질 수 있습니다.]<br>*계란,우유,대두,밀,아황산류 함유</p>
            <p class="nutri">1회 제공량 (529g)   /   칼로리 (1485kcal)<br>당류 (116g / 116%)   /   단백질 (22g / 40%)<br>포화지방 (53g / 353%)   /   나트륨 (490mg / 25%)</p>
           </section><!--//cream_18_info-->
        </section><!--//cream_18-->
        
        <section class="cream_19">
           <div class="menu_img">
           <div class="cream19_img zero"></div>
           </div>
           <section class="cream_19_info">
            <div class="info_close"></div>
            <h3><span class="cream">블루베리 쉬폰</span><br>Blueberry Chiffon Cake</h3>
            <p class="cream_info3">블루베리쉬폰베이스를 이용한 제품으로<br>블루베리의 상큼한 맛이 특징<br>*계란,우유,대두,밀,아황산류 함유</p>
            <p class="nutri">1회 제공량 (837g)   /   칼로리 (2065kcal)<br>당류 (175g / 175%)   /   단백질 (27g / 49%)<br>포화지방 (61g / 407%)   /   나트륨 (820mg / 41%)</p>
           </section><!--//cream_19_info-->
        </section><!--//cream_19-->
        
        <section class="cream_20">
           <div class="menu_img">
           <div class="cream20_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="cream_20_info">
            <div class="info_close"></div>
            <h3><span class="cream">요거 하트</span><br>Yogur Heart Cake</h3>
            <p class="cream_info4">하트 모양의 생크림 요거생크림 케익위에<br>딸기 파우더를 얹혀 분위기를 연출한 케익<br>* 매장 별로 딸기 외 대체 과일 데코레이션운영<br>*계란,우유,대두,밀,아황산류 함유</p>
            <p class="nutri">1회 제공량 (687g)   /   칼로리 (1717kcal)<br>당류 (144g / 144%)   /   단백질 (26g / 47%)<br>포화지방 (55g / 367%)   /   나트륨 (640mg / 32%)</p>
           </section><!--//cream_20_info-->
        </section><!--//cream_20-->
        
            <p class="b_menu_title">초코 쉬폰</p>
            <p class="b_menu_title">장미 요거 생크림</p>
            <p class="b_menu_title">블루베리 쉬폰</p>
            <p class="b_menu_title1">요거 하트</p>
            
            
        </section><!--//w_cream-->
       
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
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
    <link rel="stylesheet" href="css/twosomeplace_menu_md.css" type="text/css">
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
        var coffee = document.getElementById("coffee");
        var mug = document.getElementById("mug");
        var tum = document.getElementById("tum");
        var etc = document.getElementById("etc");
        var set = document.getElementById("set");
        
        all.onclick=function(){
            
                coffee.checked=false;
                mug.checked=false;
                tum.checked=false;
                etc.checked=false;
                set.checked=false;

        }
        
        coffee.onclick=function(){
            
                all.checked=false;
                mug.checked=false;
                tum.checked=false;
                etc.checked=false;
                set.checked=false;

        }
        
        mug.onclick=function(){
            
                coffee.checked=false;
                all.checked=false;
                tum.checked=false;
                etc.checked=false;
                set.checked=false;

        }
        
         tum.onclick=function(){
            
                coffee.checked=false;
                all.checked=false;
                mug.checked=false;
                etc.checked=false;
                set.checked=false;

        }
         
         etc.onclick=function(){
            
                coffee.checked=false;
                tum.checked=false;
                mug.checked=false;
                all.checked=false;
                set.checked=false;

        }
         
         set.onclick=function(){
            
                coffee.checked=false;
                tum.checked=false;
                mug.checked=false;
                etc.checked=false;
                all.checked=false;

        }
         
    
        
       

        $(".all").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".m_coffee,.m_mug,.m_tumbler,.m_etc,.m_set").show(); 
            } 
        }); 
        
        $(".coffee").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".m_coffee").show();
                $(".m_mug,.m_tumbler,.m_etc,.m_set").hide();
            } 
        }); 
        
        $(".mug").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".m_mug").show();
                $(".m_coffee,.m_tumbler,.m_etc,.m_set").hide();
            } 
        });
        
        $(".tum").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".m_tumbler").show();
                $(".m_coffee,.m_mug,.m_etc,.m_set").hide(); 
            } 
        }); 
        
        $(".etc").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".m_etc").show();
                $(".m_coffee,.m_mug,.m_tumbler,.m_set").hide();
            } 
        }); 
        
        $(".set").on('click', function() { 
            if ( $(this).prop('checked') ) { 
                $(".m_set").show();
                $(".m_coffee,.m_mug,.m_tumbler,.m_etc").hide();
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
                <legend><span class="check_food">MD상품</span>투썸플레이스의 다양한 상품들을 구매 할 수 있습니다.</legend>
                <p class="bd_box">
                    <input type="checkbox" name="menu" id="all" class="all">
                    <label for="all">전체상품</label>
                    <input type="checkbox" name="menu" id="coffee" class="coffee">
                    <label for="coffee">커피</label>
                    <input type="checkbox" name="menu" id="mug" class="mug">
                    <label for="mug">머그</label>
                    <input type="checkbox" name="menu" id="tum" class="tum">
                    <label for="tum">텀블러</label>
                    <input type="checkbox" name="menu" id="etc" class="etc">
                    <label for="etc">기타</label>
                    <input type="checkbox" name="menu" id="set" class="set">
                    <label for="set">선물세트</label>
                </p>
            </fieldset>
        </form>
        </div><!--//check_form-->
        
        <section class="m_coffee">
        <section class="coffee_title">
            <p><span class="title_b">커피</span>투썸플레이스의 다양한 커피들을 즐겨보세요!</p>    
        </section><!--//coffee_title-->
        
        
        <section class="co_1">
           <div class="menu_img">
           <div class="co1_img zero"></div>
           </div>
           <!--<div class="new_sticker"></div>-->
           <section class="co_1_info">
            <div class="info_close"></div>
            <h3><span class="co">에이리스트 스틱 커피</span><br>a-List Stick Coffee</h3>
            <p class="co_info1">풍부한 바디감과 은은한 단맛이 균형을 이루는 커피</p>
            <p class="nutri">*식품유형: 커피<br>*제조원: (주)쟈뎅/ 충청남도 천안시 서북구 성거읍 정자 1길 166<br>*유통전문판매원: 투썸플레이스 주식회사 / 충청북도 음성군 대소면 대소산단로 20<br>*제조년월일, 유통기한 : 제품 별도 표시<br>*용량(중량) / 수량 : 17g (1.7g X 10개입)<br>*원재료명 / 함량 : 커피원두 100% [원산지 : 독일산 85%, 콜롬비아 10%, 브라질 5%]<br>*소비자상담 전화번호 : 고객센터(1577-4410) 또는 투썸플레이스 신논현점(02-540-2388) </p>
           </section><!--//co_1_info-->
        </section><!--//co_1-->
        
        <section class="co_2">
           <div class="menu_img">
           <div class="co2_img zero"></div>
           </div>
           <section class="co_2_info">
            <div class="info_close"></div>
            <h3><span class="co">에이리스트 캡슐 커피 아로마노트</span><br>a-List Capsule coffee Aroma note</h3>
            <p class="co_info1">에티오피아 산지의 원두를 블렌딩하여 싱그러운 과일과 플로럴한 아로마가 느껴지는 원두<br>*네스프레소 커피머신 호환 캡슐커피</p>
            <p class="nutri">*식품유형: 커피<br>*제조원: (주)흥국에프엔비 / 충청북도 음성군 삼성면 하이텍산단로 116-23<br>*유통전문판매원: 투썸플레이스 주식회사 / 충청북도 음성군 대소면 대소산단로 20<br>*제조년월일, 유통기한 : 제품 별도 표시<br>*용량(중량) / 수량 : 53g (5.3g x 10개입)<br>*원재료명 / 함량 : 커피원두 100% (에티오피아산 60%, 콜롬비아산 30%)<br>*소비자상담 전화번호 : 고객센터(1577-4410) 또는 투썸플레이스 신논현점(02-540-2388)</p>
           </section><!--//co_2_info-->
        </section><!--//co_2-->
        
        <section class="co_3">
           <div class="menu_img">
           <div class="co3_img zero"></div>
           </div>
           <section class="co_3_info">
            <div class="info_close"></div>
            <h3><span class="co">에이리스트 캡슐 커피 블랙그라운드</span><br>a-List Capsule coffee Blackground</h3>
            <p class="co_info1">중남미 산지 원두를 블렌딩하여 다크초콜릿과 입안가득 꽉 찬 바디감이 느껴지는 원두<br>*네스프레소 커피머신 호환 캡슐커피</p>
            <p class="nutri">*식품유형: 커피<br>*제조원: (주)흥국에프엔비 / 충청북도 음성군 삼성면 하이텍산단로 116-23<br>*유통전문판매원: 투썸플레이스 주식회사 / 충청북도 음성군 대소면 대소산단로 20<br>*제조년월일, 유통기한 : 제품 별도 표시<br>*용량(중량) / 수량 : 53g (5.3g x 10개입)<br>*원재료명 / 함량 : 커피원두 100% (에티오피아산 60%, 콜롬비아산 30%)<br>*소비자상담 전화번호 : 고객센터(1577-4410) 또는 투썸플레이스 신논현점(02-540-2388) </p>
           </section><!--//co_3_info-->
        </section><!--//co_3-->
        
         <section class="co_4">
           <div class="menu_img">
           <div class="co4_img zero"></div>
           </div>
           <section class="co_4_info">
            <div class="info_close"></div>
            <h3><span class="co">에이리스트 핸드드립커피 디카페인</span><br>a-List Hand Drip Coffee Decaf</h3>
            <p class="co_info1">중후한 풍미가 조화로운 디카페인<br>Cupping Note: Spicy, Rich, Full-Body</p>
            <p class="nutri">*식품유형: 커피<br>*제조원: (주)쟈뎅/ 충청남도 천안시 서북구 성거읍 정자 1길 166<br>*유통전문판매원: 투썸플레이스 주식회사 / 충청북도 음성군 대소면 대소산단로 20<br>*제조년월일, 유통기한 : 제품 별도 표시<br>*용량(중량) / 수량 : 40g (8g x 5개입)<br>*원재료명 / 함량 : 커피원두 100% (브라질산 60%, 과테말라산 40%)<br>*소비자상담 전화번호 : 고객센터(1577-4410) 또는 투썸플레이스 신논현점(02-540-2388)</p>
           </section><!--//co_4_info-->
        </section><!--//co_4-->
        
        
             
            <p class="b_menu_title">에이리스트 스틱 커피</p>
            <p class="b_menu_title">에이리스트 캡슐 커피 아로마노트</p>
            <p class="b_menu_title">에이리스트 캡슐 커피 블랙그라운드</p>
            <p class="b_menu_title1">에이리스트 핸드드립커피 디카페인</p>
            
        <section class="co_5">
           <div class="menu_img">
           <div class="co5_img zero"></div>
           </div>
           <section class="co_5_info">
            <div class="info_close"></div>
            <h3><span class="co">에이리스트 핸드드립커피 아로마노트</span><br>a-List hand drip coffee aromanote</h3>
            <p class="co_info1">산뜻한 풍미의 개성있는 아로마 노트<br>Cupping Note: Juicy, Floral, Medium-Body</p>
            <p class="nutri">*식품유형: 커피<br>*제조원: (주)쟈뎅/ 충청남도 천안시 서북구 성거읍 정자 1길 166<br>*유통전문판매원: 투썸플레이스 주식회사 / 충청북도 음성군 대소면 대소산단로 20<br>*제조년월일, 유통기한 : 제품 별도 표시<br>*용량(중량) / 수량 : 40g (8g X 5개입)<br>*원재료명 / 함량 : 커피원두 100% (에티오피아산 60 %, 콜롬비아산 20 %, 케냐산 10 %)<br>*소비자상담 전화번호 : 고객센터(1577-4410) 또는 투썸플레이스 신논현점(02-540-2388)</p>
           </section><!--//co_5_info-->
        </section><!--//co_5-->
        
        <section class="co_6">
           <div class="menu_img">
           <div class="co6_img zero"></div>
           </div>
           <section class="co_6_info">
            <div class="info_close"></div>
            <h3><span class="co">에이리스트 핸드드립커피 블랙그라운드</span><br>a-List hand drip coffee Blackground</h3>
            <p class="co_info1">깊고 진한 투썸 블랙그라운드<br>Cupping Note: Smoky, Sweet, Well-balanced</p>
            <p class="nutri">*식품유형: 커피<br>*제조원: (주)쟈뎅/ 충청남도 천안시 서북구 성거읍 정자 1길 166<br>*유통전문판매원: 투썸플레이스 주식회사 / 충청북도 음성군 대소면 대소산단로 20<br>*제조년월일, 유통기한 : 제품 별도 표시<br>*용량(중량) / 수량 : 40g (8g X 5개입)<br>*원재료명 / 함량 : 커피원두 100% (콜롬비아산 40 %, 에티오피아산 30 %, 브라질산 30 %)<br>*소비자상담 전화번호 : 고객센터(1577-4410) 또는 투썸플레이스 신논현점(02-540-2388) </p>
           </section><!--//co_6_info-->
        </section><!--//co_6-->
        
        <section class="co_7">
           <div class="menu_img">
           <div class="co7_img one"></div>
           </div>
           <section class="new_sticker"></section>
           <section class="co_7_info">
            <div class="info_close"></div>
            <h3><span class="co">SWP 디카페인</span><br>SWP Decaf</h3>
            <p class="co_info1">견과류의 고소함과 은은한 단맛이 조화로운 디카페인 원두<br>SWP란? 스위스 워터 프로세스 (SWISS WATER PROCESS) / 화학약품을 사용하지 않고 친환경 방식으로 깨끗한 물을<br>이용해 생두의 카페인을 제거하는 공정</p>
            <p class="nutri">*식품유형: 커피<br>*제조원: 투썸플레이스 주식회사 / 충청북도 음성군 대소면 대소산단로 20<br>*유통전문판매원: 투썸플레이스 주식회사 / 충청북도 음성군 대소면 대소산단로 20<br>*제조년월일, 유통기한 : 제품 별도 표시<br>*용량(중량) / 수량 : 200g<br>*원재료명 / 함량 : 커피원두 100% (콜롬비아산 60%, 브라질산 40%)<br>*소비자상담 전화번호 : 고객센터(1577-4410) 또는 투썸플레이스 신논현점(02-540-2388) </p>
           </section><!--//co_7_info-->
        </section><!--//co_7-->
        
        <section class="co_8">
           <div class="menu_img">
           <div class="co8_img zero"></div>
           </div>
           <section class="co_8_info">
            <div class="info_close"></div>
            <h3><span class="co">에티오피아 예가체프 아리차</span><br>Ethiopia Yirgacheff Aricha</h3>
            <p class="co_info1">화사한 아로마와 고급스러운 단맛, 은은한 산미의 커피<br>Cupping Note: Floral, Bright, Sweet</p>
            <p class="nutri">*식품유형: 커피<br>*제조원: 투썸플레이스 주식회사 / 충청북도 음성군 대소면 대소산단로 20<br>*유통전문판매원: 투썸플레이스 주식회사 / 충청북도 음성군 대소면 대소산단로 20<br>*제조년월일, 유통기한 : 제품 별도 표시<br>*용량(중량) / 수량 : 200g<br>*원재료명 / 함량 : 커피원두 100%(에티오피아산)<br>*소비자상담 전화번호 : 고객센터(1577-4410) 또는 투썸플레이스 신논현점(02-540-2388) </p>
           </section><!--//co_8_info-->
        </section><!--//co_8-->
        
        
             
            <p class="b_menu_title">에이리스트 핸드드립커피 아로마노트</p>
            <p class="b_menu_title">에이리스트 핸드드립커피 블랙그라운드</p>
            <p class="b_menu_title">SWP 디카페인</p>
            <p class="b_menu_title1">에티오피아 예가체프 아리차</p>
            
        <section class="co_9">
           <div class="menu_img">
           <div class="co9_img one"></div>
           </div>
           <section class="best_sticker"></section>
           <section class="co_9_info">
            <div class="info_close"></div>
            <h3><span class="co">블랙그라운드</span><br>Black Ground</h3>
            <p class="co_info1">깊고 진한 블랙그라운드<br>Cupping Note: Full-body, Nutty, Dark Chocolaty</p>
            <p class="nutri">*식품유형: 커피<br>*제조원: 투썸플레이스 주식회사 / 충청북도 음성군 대소면 대소산단로 20<br>*유통전문판매원: 투썸플레이스 주식회사 / 충청북도 음성군 대소면 대소산단로 20<br>*제조년월일, 유통기한 : 제품 별도 표시<br>*용량(중량) / 수량 : 200g<br>*원재료명 / 함량 : 커피원두 100% (원두 원산지 : 브라질, 콜롬비아, 과테말라, 에티오피아)<br>*소비자상담 전화번호 : 고객센터(1577-4410) 또는 투썸플레이스 신논현점(02-540-2388) </p>
           </section><!--//co_9_info-->
        </section><!--//co_9-->
        
        <section class="co_10">
           <div class="menu_img">
           <div class="co10_img one"></div>
           </div>
           <section class="best_sticker"></section>
           <section class="co_10_info">
            <div class="info_close"></div>
            <h3><span class="co">아로마노트</span><br>Aroma Note</h3>
            <p class="co_info1">산뜻한 풍미의 개성있는 아로마노트 플로럴한 아로마와 함께 싱그러운 과일향이 느껴지는 원두<br>Cupping Note: Berry-like, Juicy, Floral</p>
            <p class="nutri">*식품유형: 커피<br>*제조원: 투썸플레이스 주식회사 / 충청북도 음성군 대소면 대소산단로 20<br>*유통전문판매원: 투썸플레이스 주식회사 / 충청북도 음성군 대소면 대소산단로 20<br>*제조년월일, 유통기한 : 제품 별도 표시<br>*용량(중량) / 수량 : 200g<br>*원재료명 / 함량 : 커피원두 100% (원두 원산지 : 에티오피아, 콜롬비아, 브라질)<br>*소비자상담 전화번호 : 고객센터(1577-4410) 또는 투썸플레이스 신논현점(02-540-2388) </p>
           </section><!--//co_10_info-->
        </section><!--//co_10-->
        
        <section class="co_11">
           <div class="menu_img">
           <div class="co11_img zero"></div>
           </div>
           <section class="co_11_info">
            <div class="info_close"></div>
            <h3><span class="co">콜드브루 원액</span><br>Cold Brew</h3>
            <p class="co_info1">가정에서 즐기는 깊고 진한 투썸 콜드브루 커피원액500ml<br>Full-body, Nutty, Rich<br>*기호에 맞게 콜드브루 원액을 물, 우유 등에 희석해서 즐기세요</p>
            <p class="nutri">*식품유형: 커피<br>*제조원: (주)쟈뎅/ 충청남도 천안시 서북구 성거읍 정자 1길 166<br>*유통전문판매원: 투썸플레이스 주식회사 / 충청북도 음성군 대소면 대소산단로 20<br>*제조년월일, 유통기한 : 제품 별도 표시 / *용량(중량) / 수량 : 500ml<br>*원재료명 / 함량 : 커피 추출액(고형분 3.2% 이상, 원두: 콜롬비아산 45%, 브라질산 30%) 98%, 정제수, 산도조절제, 자몽종자추출물<br>*소비자상담 전화번호 : 고객센터(1577-4410) 또는 투썸플레이스 신논현점(02-540-2388) </p>
           </section><!--//co_11_info-->
        </section><!--//co_11-->
        
        <section class="co_12"></section>
        
             
            <p class="b_menu_title">블랙그라운드</p>
            <p class="b_menu_title">아로마노트</p>
            <p class="b_menu_title1">콜드브루 원액</p>
        
        </section><!--//m_coffee-->
        
        <section class="m_mug">
        <section class="mug_title">
            <p><span class="title_b">머그</span>투썸플레이스의 다양한 머그들을 즐겨보세요!</p>    
        </section><!--//mug_title-->
        
        
        <section class="mug_1">
           <div class="menu_img">
           <div class="mug1_img one"></div>
           </div>
           <div class="new_sticker"></div>
           <section class="mug_1_info">
            <div class="info_close"></div>
            <h3><span class="mug">투썸 베이직 스텐 머그 (화이트)</span><br>TWOSOME BASIC STAN MUG WHITE</h3>
            <p class="mug_info_f">용량 : 360ml<br>재질 : 스테인레스 스틸, 폴리프로필렌, 고무제<br>주요특징 :<br>- 이중구조로 생활 보온/보냉 가능<br>- 베이직하고 고급스러운 컬러 가공 구현과 깔끔한 디자인<br>- 손잡이가 있어 음용 시 편리<br>- 리드가 있어 먼지를 막고 온도 유실을 줄일 수 있음<br>주의사항 :<br>- 탄산,발효제품 사용불가<br>- 전자레인지,식기세척기 사용불가<br>- 외피는 강한 충격에 파손될 수 있음</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>1) 제품명 : 투썸베이직스텐머그(화이트)<br>2) 제조사 : RUSHAN QUANHAO TRADING CO.LTD<br>3) 수입원 : (주) 제이앤 / <br>서울시 성수일로 77 서울숲 IT벨리 10층 1009호<br>4) 반품 및 교환처 : 투썸플레이스 구입 매장<br>5) 고객센터 : 1577-4410<br>6) 판매사 : 투썸플레이스 주식회사<br>7) 식품위생법에 따른 수입신고를 필함</p>
           </section><!--//mug_1_info-->
        </section><!--//mug_1-->
        
        <section class="mug_2">
           <div class="menu_img">
           <div class="mug2_img one"></div>
           </div>
           <div class="new_sticker"></div>
           <section class="mug_2_info">
            <div class="info_close"></div>
            <h3><span class="mug">투썸 베이직 스텐 머그 (그레이)</span><br>TWOSOME BASIC STAN MUG GREY</h3>
            <p class="mug_info_f">용량 : 360ml<br>재질 : 스테인레스 스틸, 폴리프로필렌, 고무제<br>주요특징 :<br>- 이중구조로 생활 보온/보냉 가능<br>- 베이직하고 고급스러운 컬러 가공 구현과 깔끔한 디자인<br>- 손잡이가 있어 음용 시 편리<br>- 리드가 있어 먼지를 막고 온도 유실을 줄일 수 있음<br>주의사항 :<br>- 탄산,발효제품 사용불가<br>- 전자레인지,식기세척기 사용불가<br>- 외피는 강한 충격에 파손될 수 있음</p>
            
           </section><!--//mug_2_info-->
        </section><!--//mug_2-->
        
        <section class="mug_3">
           <div class="menu_img">
           <div class="mug3_img zero"></div>
           </div>
           <section class="mug_3_info">
            <div class="info_close"></div>
            <h3><span class="mug">멜팅 치즈 글라스</span><br>Melting Cheese Glass</h3>
            <p class="mug_info_f">재질 : 유리<br>주요특징-골드 그라데이션이 포인트인 유리컵</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>① 제품명 : 멜팅 치즈 글라스<br>② 제조사 : RUSHAN YUANHAO TRADING CO.LTD<br>③ 원산지 : 중국<br>④ 수입원 : (주)제이엔 /<br>서울시 성수일로 77 서울숲IT벨리 10층 1009호<br>⑤ 반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>⑥ 식품위생법에 따른 수입신고를 필함</p>
           </section><!--//mug_3_info-->
        </section><!--//mug_3-->
        
        <section class="mug_4">
           <div class="menu_img">
           <div class="mug4_img zero"></div>
           </div>
           <section class="mug_4_info">
            <div class="info_close"></div>
            <h3><span class="mug">치즈리드 머그</span><br>Cheese Lid Mug</h3>
            <p class="mug_info_f">재질 : 세라믹, 실리콘<br>주요특징 : 실내에서도 먼지를 막을 수 있는 리드와<br>세라믹 머그로 구성</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>① 제품명 : 치즈리드 머그<br>② 제조사 : RUSHAN YUANHAO TRADING CO.LTD<br>③ 원산지 : 중국<br>④ 수입원 : (주)제이엔 /<br>서울시 성수일로 77 서울숲IT벨리 10층 1009호<br>⑤ 반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>⑥ 식품위생법에 따른 수입신고를 필함</p>
           </section><!--//mug_4_info-->
        </section><!--//mug_4-->
       
            <p class="b_menu_title">투썸 베이직 스텐 머그 (화이트)</p>
            <p class="b_menu_title">투썸 베이직 스텐 머그 (그레이)</p>
            <p class="b_menu_title">멜팅 치즈 글라스</p>
            <p class="b_menu_title1">치즈리드 머그</p>
            
        <section class="mug_5">
           <div class="menu_img">
           <div class="mug5_img zero"></div>
           </div>
           <section class="mug_5_info">
            <div class="info_close"></div>
            <h3><span class="mug">투썸 마이 홀리데이 컵</span><br>Twosome My Holiday Cup</h3>
            <p class="mug_info_f">재질 : 스테인레스, 폴리프로필렌<br>설명 : 북유럽의 나무를 형상화한 스텐레스 소재<br>보온 : 2시간 / 보냉 : 4시간<br>※음료 또는 환경에 따라 달라질 수 있습니다※</p>
            <p class="nutri_f"></p>
           </section><!--//mug_5_info-->
        </section><!--//mug_5-->
        
        <section class="mug_6">
           <div class="menu_img">
           <div class="mug6_img zero"></div>
           </div>
           <section class="mug_6_info">
            <div class="info_close"></div>
            <h3><span class="mug">투썸 선셋 머그</span><br>TWOSOME SUNSET MUG</h3>
            <p class="mug_info_f2">1. 재질 : 스테인레스, 아크릴로니트릴<br>2. 용량 : 350ml<br>3. 보온 : 4시간 / 보냉 : 6시간<br>※음료 또는 환경에 따라 달라질 수 있습니다※<br>4. 주요특징 : 고급스러운 로즈골드 컬러로 엣지있는<br>팔각 쉐입의 스텐레스 머그입니다.<br>투명 리드가 있어 머그보다 보온, 보냉에 용이하며,<br>밀폐가 되지 않는 제품입니다.<br>5.사용 시 주의 사항<br>-급격한 온도 변화는 제품 파손의 원인이 되오니<br>사용에 주의하시기 바랍니다.</p>
            <p class="nutri_f">-우유나 유제품, 과즙 등 변질 되기 쉬운 음료를 장시간<br>방치 시 부패 될 수 있습니다.<br>- 본체를 장시간 물에 담가 두지 마시고 전자제인지<br>사용 불가합니다.<br>-세척 시 중성세제를 묻힌 부드러운 스펀지로 닦아 주십시오.<br>-뜨거운 음료를 넣고 흔들 때 압력으로 뚜껑이 열리거나<br>누수가 있을 수 있으며, 화상에 위험이 있습니다.<br>-과도하게 기울일 시 누수의 원인이 될 수 있습니다.<br>-제품 생산 시 작은 기포 또는 흠집이 있을 수 있습니다.<br>이는 공정 중 생기는 자연스러운 현상입니다.</p>
           </section><!--//mug_6_info-->
        </section><!--//mug_6-->
        
        <section class="mug_7">
           <div class="menu_img">
           <div class="mug7_img zero"></div>
           </div>
           <section class="mug_7_info">
            <div class="info_close"></div>
            <h3><span class="mug">투썸 홀로그램 글라스_대</span><br>TWOSOME HOLOGRAM GLASS L</h3>
            <p class="mug_info_f2">1. 재질 : 유리<br>2.용량 : 550ml<br>3. 주요특징 : 현재 트렌드인 홀로그램을 유리컵에<br>입혀 형상화한 제품으로 몽환적인 분위기를 연출<br>할 수 있습니다.<br>4. 사용 시 주의 사항<br>-급격한 온도 변화는 제품 파손의 원인이 되오니<br>사용에 주의하시기 바랍니다.<br>-세척 시 중성세제를 묻힌 부드러운 스펀지로<br>닦아 주십시오.<br>-글라스 제품이므로 충격을 받으면 금이 가거나<br>깨질 수 있습니다.</p>
            <p class="nutri_f">-제품 생산 시 작은 기포 또는 흠집이 있을 수 있습니다.<br>이는 공정 중 생기는 자연스러운 현상입니다.</p>
           </section><!--//mug_7_info-->
        </section><!--//mug_7-->
        
        <section class="mug_8">
           <div class="menu_img">
           <div class="mug8_img zero"></div>
           </div>
           <section class="mug_8_info">
            <div class="info_close"></div>
            <h3><span class="mug">투썸 홀로그램 글라스_소</span><br>TWOSOME HOLOGRAM GLASS R</h3>
            <p class="mug_info_f2">재질 : 유리<br>용량 : 300ml<br>주요특징 : 현재 트렌드인 홀로그램을 유리컵에<br>입혀 형상화한 제품으로 몽환적인 분위기를<br>연출 할 수 있습니다.홀로그램 제품은 사진보다<br>실물이 더 돋보이는 제품입니다.<br>4. 사용 시 주의 사항<br>-급격한 온도 변화는 제품 파손의 원인이 되오니<br>사용에 주의하시기 바랍니다.<br>-세척 시 중성세제를 묻힌 부드러운 스펀지로<br>닦아 주십시오.</p>
            <p class="nutri_f">-글라스 제품이므로 충격을 받으면 금이 가거나<br>깨질 수 있습니다.<br>-제품 생산 시 작은 기포 또는 흠집이 있을 수 있습니다.<br>이는 공정 중 생기는 자연스러운 현상입니다.</p>
           </section><!--//mug_8_info-->
        </section><!--//mug_8-->
       
            <p class="b_menu_title">투썸 마이 홀리데이 컵</p>
            <p class="b_menu_title">투썸 선셋 머그</p>
            <p class="b_menu_title">투썸 홀로그램 글라스_대</p>
            <p class="b_menu_title1">투썸 홀로그램 글라스_소</p>
            
        <section class="mug_9">
           <div class="menu_img">
           <div class="mug9_img zero"></div>
           </div>
           <section class="mug_9_info">
            <div class="info_close"></div>
            <h3><span class="mug">투썸블루밍머그_라일락</span><br>Twosome Blooming Mug_Lilac</h3>
            <p class="mug_info_f2">용량 : 만수시 360ml<br>재질 : 스테인레스 스틸, 폴리프로필렌, 고무제<br>주요특징<br>은은한 펄이 들어간 바디 컬러가 포인트<br>손잡이가 있어 사용에 용이함<br>뚜껑이 있어 기존 머그보다 보온에 용이함</p>
            <p class="nutri_f">주의사항<br>- 급격한 온도변화를 피하십시오<br>- 불에 직접 올려놓으면 파손의 우려가 있으니<br>주의하십시오<br>- 전자레인지 및 오븐 사용 금지<br>- 음료가 든 제품 가방에 휴대 금지<br>- 탄산 및 발효 음료나 식품에는 사용 금지<br>- 뜨거운물 및 탄산음료를 넣으면 팽창에 의해<br>내용물이 샐 수 있으니 주의하세요</p>
           </section><!--//mug_9_info-->
        </section><!--//mug_9-->
        
        <section class="mug_10">
           <div class="menu_img">
           <div class="mug10_img zero"></div>
           </div>
           <section class="mug_10_info">
            <div class="info_close"></div>
            <h3><span class="mug">투썸블루밍머그_민트</span><br>Twosome Blooming Mug_Mint</h3>
            <p class="mug_info_f2">용량 : 만수시 360ml<br>재질 : 스테인레스 스틸, 폴리프로필렌, 고무제<br>주요특징<br>은은한 펄이 들어간 바디 컬러가 포인트<br>손잡이가 있어 사용에 용이함<br>뚜껑이 있어 기존 머그보다 보온에 용이함</p>
            <p class="nutri_f">주의사항<br>- 급격한 온도변화를 피하십시오<br>- 불에 직접 올려놓으면 파손의 우려가 있으니<br>주의하십시오<br>- 전자레인지 및 오븐 사용 금지<br>- 음료가 든 제품 가방에 휴대 금지<br>- 탄산 및 발효 음료나 식품에는 사용 금지<br>- 뜨거운물 및 탄산음료를 넣으면 팽창에 의해<br>내용물이 샐 수 있으니 주의하세요</p>
           </section><!--//mug_10_info-->
        </section><!--//mug_10-->
        
        <section class="mug_11">
           <div class="menu_img">
           <div class="mug11_img zero"></div>
           </div>
           <section class="mug_11_info">
            <div class="info_close"></div>
            <h3><span class="mug">투썸마르크트머그_로즈골드</span><br>Twosome Markt Mug_Rose Gold</h3>
            <p class="mug_info_f">용량 : 만수시 420ml<br>재질 : 세라믹<br>주요특징<br>베를린 마켓 일러스트가 입혀진 대용량 머그<br>독특한 손잡이 모양이 포인트<br>로즈골드, 아이보리 바디 컬러가 은은하게 보이는 머그</p>
            <p class="nutri_f">주의사항<br>- 충격에 파손 주의<br>- 급격한 온도변화를 피하십시오<br>- 불에 직접 올려놓으면 파손의 우려가 있으니<br>주의하십시오<br>- 제품에 금이나 균열이 있을 시 사용을 중지해주십시오</p>
           </section><!--//mug_11_info-->
        </section><!--//mug_11-->
        
        <section class="mug_12">
           <div class="menu_img">
           <div class="mug12_img zero"></div>
           </div>
           <section class="mug_12_info">
            <div class="info_close"></div>
            <h3><span class="mug">투썸마르크트머그_아이보리</span><br>Twosome Markt Mug_Ivory</h3>
            <p class="mug_info_f">용량 : 만수시 420ml<br>재질 : 세라믹<br>주요특징<br>베를린 마켓 일러스트가 입혀진 대용량 머그<br>독특한 손잡이 모양이 포인트<br>로즈골드, 아이보리 바디 컬러가 은은하게 보이는 머그</p>
            <p class="nutri_f">주의사항<br>- 충격에 파손 주의<br>- 급격한 온도변화를 피하십시오<br>- 불에 직접 올려놓으면 파손의 우려가 있으니<br>주의하십시오<br>- 제품에 금이나 균열이 있을 시 사용을 중지해주십시오.</p>
           </section><!--//mug_12_info-->
        </section><!--//mug_12-->
       
            <p class="b_menu_title">투썸블루밍머그_라일락</p>
            <p class="b_menu_title">투썸블루밍머그_민트</p>
            <p class="b_menu_title">투썸마르크트머그_로즈골드</p>
            <p class="b_menu_title1">투썸마르크트머그_아이보리</p>
            
        <section class="mug_13">
           <div class="menu_img">
           <div class="mug13_img zero"></div>
           </div>
           <section class="mug_13_info">
            <div class="info_close"></div>
            <h3><span class="mug">투썸썸머크리스털머그Blue</span><br>Twosome Summer Crystal Mug Blue</h3>
            <p class="mug_info_f2">용량 : 만수시 330ml<br>재질 : 세라믹<br>주요특징 :<br>- 스와로브스키사의 크리스털을 사용한 머그<br>- ‘크리스털의 반짝이는’ 컨셉을 활용하여<br>유럽 도시의 밤하늘을 모티브로 한 머그<br>- 활용성 높은 사이즈와 유선형 쉐입이 특징</p>
            <p class="nutri_f">주의사항<br>- 크리스털이 부딪혀 깨질 수 있으니 단독 세척해 주십시오<br>- 크리스털 부착 제품은 전자레인지 및 오븐사용을 금합니다.<br>- 충격에 파손 주의<br>- 급격한 온도변화를 피하십시오.<br>- 불에 직접 올려놓으면 파손의 우려가 있으니 주의하십시오.<br>- 제품에 금이나 균열이 있을 시 사용을 중지해주십시오.</p>
           </section><!--//mug_13_info-->
        </section><!--//mug_13-->
        
        <section class="mug_14">
           <div class="menu_img">
           <div class="mug14_img zero"></div>
           </div>
           <section class="mug_14_info">
            <div class="info_close"></div>
            <h3><span class="mug">투썸썸머크리스털머그white</span><br>Twosome Summer Crystal Mug White</h3>
            <p class="mug_info_f2">용량 : 만수시 330ml<br>재질 : 세라믹<br>주요특징 :<br>- 스와로브스키사의 크리스털을 사용한 머그<br>- ‘크리스털의 반짝이는’ 컨셉을 활용하여<br>유럽 도시의 밤하늘을 모티브로 한 머그<br>- 활용성 높은 사이즈와 유선형 쉐입이 특징</p>
            <p class="nutri_f">주의사항<br>- 크리스털이 부딪혀 깨질 수 있으니 단독 세척해 주십시오<br>- 크리스털 부착 제품은 전자레인지 및 오븐사용을 금합니다.<br>- 충격에 파손 주의<br>- 급격한 온도변화를 피하십시오.<br>- 불에 직접 올려놓으면 파손의 우려가 있으니 주의하십시오.<br>- 제품에 금이나 균열이 있을 시 사용을 중지해주십시오.</p>
           </section><!--//mug_14_info-->
        </section><!--//mug_14-->
        
        <section class="mug_15">
           <div class="menu_img">
           <div class="mug15_img zero"></div>
           </div>
           <section class="mug_15_info">
            <div class="info_close"></div>
            <h3><span class="mug">투썸 글라스머그480</span><br>Twosome Glass mug 480</h3>
            <p class="mug_info_f">재질<br>- 내열 강화유리<br>특징<br>- 480ml로 음료를 가득 담을 수 있는 大사이즈의 머그<br>- 내열 강화유리 소재로 아이스/핫 음료 모두 사용 가능<br>주의사항<br>- 급격한 온도 변화시 파손될 수 있으므로<br>주의하시기 바랍니다.<br>- 수세미 등 표면이 거친 소재로 세척할 경우 본 제품<br>표면에 상처를 줄 수 있으므로 피해 주세요.<br>- 제품 특성상 미세한 금, 기포 등이 있을 수 있습니다.</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>제품명 : 투썸글라스머그480<br>원산지 : 중국<br>제조사 : YIWU SAIJI TEXTILE.,LTD.<br>수입원 : (주)에이스코리아 /<br>경기도 부천시 산업로 7번길 3, 2층<br>반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>식품위생법에 따른 수입신고를 필함</p>
           </section><!--//mug_15_info-->
        </section><!--//mug_15-->
        
        <section class="mug_16">
           <div class="menu_img">
           <div class="mug16_img zero"></div>
           </div>
           <section class="mug_16_info">
            <div class="info_close"></div>
            <h3><span class="mug">투썸글라스머그330</span><br>Twsome Glass mug 330</h3>
            <p class="mug_info_f">재질<br>- 내열 강화유리<br>특징<br>- 330ml로 가장 실용적인 사이즈의 머그<br>- 내열 강화유리 소재로 아이스/핫 음료 모두 사용 가능<br>주의사항<br>- 급격한 온도 변화시 파손될 수 있으므로<br>주의하시기 바랍니다.<br>- 수세미 등 표면이 거친 소재로 세척할 경우 본 제품<br>표면에 상처를 줄 수 있으므로 피해 주세요.<br>- 제품 특성상 미세한 금, 기포 등이 있을 수 있습니다.</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>제품명 : 투썸글라스머그330<br>원산지 : 중국<br>제조사 : YIWU SAIJI TEXTILE.,LTD.<br>수입원 : (주)에이스코리아 /<br>경기도 부천시 산업로 7번길 3, 2층<br>반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>식품위생법에 따른 수입신고를 필함</p>
           </section><!--//mug_16_info-->
        </section><!--//mug_16-->
       
            <p class="b_menu_title">투썸썸머크리스털머그Blue</p>
            <p class="b_menu_title">투썸썸머크리스털머그white</p>
            <p class="b_menu_title">투썸 글라스머그480</p>
            <p class="b_menu_title1">투썸글라스머그330</p>
            
        <section class="mug_17">
           <div class="menu_img">
           <div class="mug17_img zero"></div>
           </div>
           <section class="mug_17_info">
            <div class="info_close"></div>
            <h3><span class="mug">투썸크렘슈머그_바닐라</span><br>TWOSOME CREME CHOUX MUG_VANILLA</h3>
            <p class="mug_info_f2">주요특징<br>- 투썸 디저트인 크렘슈 모양을 형상화한 제품.<br>- 크렘슈 모양의 커버가 있어 온도유지 및 이물질<br>유입 방지 가능<br>- 커피 외 아이스크림, 스프 등 다양하게 활용 가능<br>용량 : 만수시 200ml<br>재질 : 세라믹</p>
            <p class="nutri_f">주의사항<br>- 충격에 파손 주의<br>- 급격한 온도변화를 피하십시오.<br>- 불에 직접 올려놓으면 파손의 우려가 있으니 주의하십시오.<br>- 제품에 금이나 균열이 있을 시 사용을 중지해주십시오.</p>
           </section><!--//mug_17_info-->
        </section><!--//mug_17-->
        
        <section class="mug_18">
           <div class="menu_img">
           <div class="mug18_img zero"></div>
           </div>
           <section class="mug_18_info">
            <div class="info_close"></div>
            <h3><span class="mug">투썸크렘슈머그_초콜릿</span><br>TWOSOME CREME CHOUX MUG_CHOCOLATE</h3>
            <p class="mug_info_f2">주요특징<br>- 투썸 디저트인 크렘슈 모양을 형상화한 제품.<br>- 크렘슈 모양의 커버가 있어 온도유지 및 이물질<br>유입 방지 가능<br>- 커피 외 아이스크림, 스프 등 다양하게 활용 가능<br>용량 : 만수시 200ml<br>재질 : 세라믹</p>
            <p class="nutri_f">주의사항<br>- 충격에 파손 주의<br>- 급격한 온도변화를 피하십시오.<br>- 불에 직접 올려놓으면 파손의 우려가 있으니 주의하십시오.<br>- 제품에 금이나 균열이 있을 시 사용을 중지해주십시오.</p>
           </section><!--//mug_18_info-->
        </section><!--//mug_18-->
        
        <section class="mug_19">
           <div class="menu_img">
           <div class="mug19_img zero"></div>
           </div>
           <section class="mug_19_info">
            <div class="info_close"></div>
            <h3><span class="mug">투썸크렘슈머그_라즈베리</span><br>TWOSOME CREME CHOUX MUG_RASPBERRY</h3>
            <p class="mug_info_f2">주요특징<br>- 투썸 디저트인 크렘슈 모양을 형상화한 제품.<br>- 크렘슈 모양의 커버가 있어 온도유지 및 이물질<br>유입 방지 가능<br>- 커피 외 아이스크림, 스프 등 다양하게 활용 가능<br>용량 : 만수시 200ml<br>재질 : 세라믹</p>
            <p class="nutri_f">주의사항<br>- 충격에 파손 주의<br>- 급격한 온도변화를 피하십시오.<br>- 불에 직접 올려놓으면 파손의 우려가 있으니 주의하십시오.<br>- 제품에 금이나 균열이 있을 시 사용을 중지해주십시오.</p>
           </section><!--//mug_19_info-->
        </section><!--//mug_19-->
        
        <section class="mug_20">
           <div class="menu_img">
           <div class="mug20_img zero"></div>
           </div>
           <section class="mug_20_info">
            <div class="info_close"></div>
            <h3><span class="mug">투썸 NEW머그그레이</span><br>NEW GREY MUG</h3>
            <p class="mug_info_f2">주요특징 :<br>-여성스러운 쉐입의 디자인 머그<br>-넓은 손잡이으로 그립감 좋음<br>주의사항 :<br>-강한 충격에 깨질 수 있습니다.<br>-급격한 온도변화로 인하여 파손 될 가능성이<br>있으므로 사용 전 주의요망</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>제품명 : 투썸 NEW머그그레이<br>제조사 : (주)카라신컴퍼니<br>원산지 : 중국<br>수입원 : (주)카라신컴퍼니 / 서울 종로구 동호로 403-10<br>반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>식품위생법에 따른 수입신고를 필함</p>
           </section><!--//mug_20_info-->
        </section><!--//mug_20-->
       
            <p class="b_menu_title">투썸크렘슈머그_바닐라</p>
            <p class="b_menu_title">투썸크렘슈머그_초콜릿</p>
            <p class="b_menu_title">투썸크렘슈머그_라즈베리</p>
            <p class="b_menu_title1">투썸 NEW머그그레이</p>
            
        <section class="mug_21">
           <div class="menu_img">
           <div class="mug21_img zero"></div>
           </div>
           <section class="mug_21_info">
            <div class="info_close"></div>
            <h3><span class="mug">투썸 NEW머그화이트</span><br>NEW WHITE MUG</h3>
            <p class="mug_info_f2">주요특징 :<br>-여성스러운 쉐입의 디자인 머그<br>-넓은 손잡이으로 그립감 좋음<br>주의사항 :<br>-강한 충격에 깨질 수 있습니다.<br>-급격한 온도변화로 인하여 파손 될 가능성이<br>있으므로 사용 전 주의요망</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>제품명 : 투썸 NEW머그화이트<br>제조사 : (주)카라신컴퍼니<br>원산지 : 중국<br>수입원 : (주)카라신컴퍼니 / 서울 종로구 동호로 403-10<br>반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>식품위생법에 따른 수입신고를 필함</p>
           </section><!--//mug_21_info-->
        </section><!--//mug_21-->
        
        <section class="mug_22">
           <div class="menu_img">
           <div class="mug22_img zero"></div>
           </div>
           <section class="mug_22_info">
            <div class="info_close"></div>
            <h3><span class="mug">브론즈 라벨 머그[화이트]</span><br>Bronze Label Mug[White]</h3>
            <p class="mug_info_f2">브론즈 라벨에 투썸 로고를 레이저 프린팅한<br>세련된 무광 코팅 머그<br>재질: porcelain, ceramic material<br>규격: 470ml<br>취급 시 주의사항<br>- 식기 세척기나 전자레인지, 오븐에 넣지 마십시오.<br>- 커피 또는 유색 음료를 장시간 사용 시, 착색이<br>될 수 있습니다.</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>제품명 : 브론즈 라벨 머그[화이트]<br>제조사 : RUSHAN YUANHAO TRADING CO.,LTD<br>원산지 : 중국<br>수입원 : (주)제이엔 /<br>서울시 성수일로 77 서울숲IT벨리 10층 1009호<br>반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>식품위생법에 따른 수입신고를 필함</p>
           </section><!--//mug_22_info-->
        </section><!--//mug_22-->
        
        <section class="mug_23">
           <div class="menu_img">
           <div class="mug23_img zero"></div>
           </div>
           <section class="mug_23_info">
            <div class="info_close"></div>
            <h3><span class="mug">브론즈 라벨 머그[블랙]</span><br>Bronze Label Mug[Black]</h3>
            <p class="mug_info_f2">브론즈 라벨에 투썸 로고를 레이저 프린팅한<br>세련된 무광 코팅 머그<br>재질: porcelain, ceramic material<br>규격: 470ml<br>취급 시 주의사항<br>- 식기 세척기나 전자레인지, 오븐에 넣지 마십시오.<br>- 커피 또는 유색 음료를 장시간 사용 시, 착색이<br>될 수 있습니다.</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>제품명 : 브론즈 라벨 머그[블랙]<br>제조사 : RUSHAN YUANHAO TRADING CO.,LTD<br>원산지 : 중국<br>수입원 : (주)제이엔 /<br>서울시 성수일로 77 서울숲IT벨리 10층 1009호<br>반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>식품위생법에 따른 수입신고를 필함</p>
           </section><!--//mug_23_info-->
        </section><!--//mug_23-->
        
        <section class="mug_24">
           <div class="menu_img">
           <div class="mug24_img zero"></div>
           </div>
           <section class="mug_24_info">
            <div class="info_close"></div>
            <h3><span class="mug">투썸 로고 머그[화이트]</span><br>TWOSOME LOGO MUG</h3>
            <p class="mug_info_f2">투썸플레이스의 로고가 심플하게 디자인된<br>화이트 색상의 머그.<br>제조사:<br>㈜스타아이앤씨 경기도 이천시 백사면 송말리 112-2<br>원산지: 한국<br>사이즈: 높이100*원형지름84 mm<br>용량: 360ml<br>재질: 도자기제<br>주의사항: 심한 충격에 주의</p>
            <p class="nutri_f"></p>
           </section><!--//mug_24_info-->
        </section><!--//mug_24-->
       
            <p class="b_menu_title">투썸 NEW머그화이트</p>
            <p class="b_menu_title">브론즈 라벨 머그[화이트]</p>
            <p class="b_menu_title">브론즈 라벨 머그[블랙]</p>
            <p class="b_menu_title1">투썸 로고 머그[화이트]</p>
       
     </section><!--//m_mug-->
               
               
    <section class="m_tumbler">
        <section class="tumbler_title">
            <p><span class="title_b">텀블러</span>투썸플레이스의 다양한 텀블러들을 즐겨보세요!</p>    
        </section><!--//tumbler_title-->
        
        
        <section class="tum_1">
           <div class="menu_img">
           <div class="tum1_img one"></div>
           </div>
           <div class="new_sticker"></div>
           <section class="tum_1_info">
            <div class="info_close"></div>
            <h3><span class="tum">투썸 베이직 스텐 텀블러 (화이트)</span><br>TWOSOME BASIC STAN TUMBLER WHITHE</h3>
            <p class="tum_info_f">용량 : 600ml<br>재질 : 스테인레스 스틸, 폴리프로필렌, 고무제<br>주요특징 :<br>- 이중구조로 생활 보온/보냉 가능<br>- 베이직하고 고급스러운 컬러 가공 구현과 깔끔한 디자인<br>- 리드가 있어 먼지를 막고 온도 유실을 줄일 수 있음<br>주의사항 :<br>- 탄산,발효제품 사용불가<br>- 전자레인지,식기세척기 사용불가<br>- 외피는 강한 충격에 파손될 수 있음</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>1) 제품명 : 투썸베이직스텐텀블러(화이트)<br>2) 제조사 : RUSHAN QUANHAO TRADING CO.,LTD<br>3) 수입원 : (주) 제이앤 /<br>서울시 성수일로 77 서울숲 IT벨리 10층 1009호<br>4) 반품 및 교환처 : 투썸플레이스 구입 매장<br>5) 고객센터 : 1577-4410<br>6) 판매사 : 투썸플레이스 주식회사<br>6) 식품위생법에 따른 수입신고를 필함</p>
           </section><!--//tum_1_info-->
        </section><!--//tum_1-->
              
        <section class="tum_2">
           <div class="menu_img">
           <div class="tum2_img one"></div>
           </div>
           <div class="new_sticker"></div>
           <section class="tum_2_info">
            <div class="info_close"></div>
            <h3><span class="tum">투썸 베이직 스텐 텀블러 (그레이)</span><br>TWOSOME BASIC STAN TUMBLER GREY</h3>
            <p class="tum_info_f">용량 : 600ml<br>재질 : 스테인레스 스틸, 폴리프로필렌, 고무제<br>주요특징 :<br>- 이중구조로 생활 보온/보냉 가능<br>- 베이직하고 고급스러운 컬러 가공 구현과 깔끔한 디자인<br>- 리드가 있어 먼지를 막고 온도 유실을 줄일 수 있음<br>주의사항 :<br>- 탄산,발효제품 사용불가<br>- 전자레인지,식기세척기 사용불가<br>- 외피는 강한 충격에 파손될 수 있음</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>1) 제품명 : 투썸베이직스텐텀블러(그레이)<br>2) 제조사 : RUSHAN QUANHAO TRADING CO.,LTD<br>3) 수입원 : (주) 제이앤 /<br>서울시 성수일로 77 서울숲 IT벨리 10층 1009호<br>4) 반품 및 교환처 : 투썸플레이스 구입 매장<br>5) 고객센터 : 1577-4410<br>6) 판매사 : 투썸플레이스 주식회사<br>6) 식품위생법에 따른 수입신고를 필함</p>
           </section><!--//tum_2_info-->
        </section><!--//tum_2-->
              
        <section class="tum_3">
           <div class="menu_img">
           <div class="tum3_img zero"></div>
           </div>
           <section class="tum_3_info">
            <div class="info_close"></div>
            <h3><span class="tum">마우스탑 텀블러</span><br>Mouse Top Tumbler</h3>
            <p class="tum_info_f">재질 : 스테인레스, 폴리프로필렌, 고무제<br>주요특징 : 상시 제품인 미니텀블러제품으로<br>리드 부분에 실리콘 소재로 아기 생쥐의<br>귀를 디자인한 텀블러<br>보온 : 2시간 / 보냉 : 4시간<br>※음료 또는 환경에 따라 달라질 수 있습니다※</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>제품명: 마우스탑 텀블러<br>제조사 : RUSHAN YUANHAO TRADING CO.,LTD<br>원산지 : 중국<br>수입원 : (주)제이엔 /<br>서울시 성수일로 77 서울숲IT벨리 10층 1009호<br>반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>식품위생법에 따른 수입신고를 필함</p>
           </section><!--//tum_3_info-->
        </section><!--//tum_3-->
              
        <section class="tum_4">
           <div class="menu_img">
           <div class="tum4_img zero"></div>
           </div>
           <section class="tum_4_info">
            <div class="info_close"></div>
            <h3><span class="tum">치즈&amp;마우스 텀블러</span><br>Cheese&amp;Mouse Tumbler</h3>
            <p class="tum_info_f">재질 : 스테인레스, 폴리프로필렌<br>주요특징 : 아기 생쥐가 투썸 치즈 케이크를<br>바라보는 대용량 텀블러<br>보온 : 2시간 / 보냉 : 4시간<br>※음료 또는 환경에 따라 달라질 수 있습니다※</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>① 제품명 : 치즈&amp;마우스 텀블러<br>② 제조사 : RUSHAN YUANHAO TRADING CO.,LTD<br>③ 원산지 : 중국<br>④ 수입원 : (주)제이엔 /<br>서울시 성수일로 77 서울숲IT벨리 10층 1009호<br>⑤ 반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>⑥ 식품위생법에 따른 수입신고를 필함</p>
           </section><!--//tum_4_info-->
        </section><!--//tum_4-->
               
            <p class="b_menu_title">투썸 베이직 스텐 텀블러 (화이트)</p>
            <p class="b_menu_title">투썸 베이직 스텐 텀블러 (그레이)</p>
            <p class="b_menu_title">마우스탑 텀블러</p>
            <p class="b_menu_title1">치즈&amp;마우스 텀블러</p>
               
               
        <section class="tum_5">
           <div class="menu_img">
           <div class="tum5_img zero"></div>
           </div>
           <section class="tum_5_info">
            <div class="info_close"></div>
            <h3><span class="tum">투썸 코르크 텀블러</span><br>Twosome Cork Tumbler</h3>
            <p class="tum_info_f">재질 : 스테인레스스틸, 폴리프로필렌, 아크릴로니트릴<br>설명: 화이트와 딥그린 컬러의 조화와<br>하단에 코르크가 포인트인 대용량 텀블러<br>보온 : 4시간 / 보냉 : 6시간<br>※음료 또는 환경에 따라 달라질 수 있습니다※</p>
            <p class="nutri_f"></p>
           </section><!--//tum_5_info-->
        </section><!--//tum_5-->
              
        <section class="tum_6">
           <div class="menu_img">
           <div class="tum6_img zero"></div>
           </div>
           <section class="tum_6_info">
            <div class="info_close"></div>
            <h3><span class="tum">투썸 마이 홀리데이 텀블러</span><br>Twosome My Holiday Tumbler</h3>
            <p class="tum_info_f">재질 : 스테인레스, 폴리프로필렌<br>설명 : 크리스마스 트리를 형상화한 스텐 텀블러<br>나무결을 살린 리드가 포인트<br>보온 : 3시간 / 보냉 : 5시간<br>※음료 또는 환경에 따라 달라질 수 있습니다※</p>
            <p class="nutri_f"></p>
           </section><!--//tum_6_info-->
        </section><!--//tum_6-->
              
        <section class="tum_7">
           <div class="menu_img">
           <div class="tum7_img zero"></div>
           </div>
           <section class="tum_7_info">
            <div class="info_close"></div>
            <h3><span class="tum">투썸 선셋 보틀</span><br>TWOSOME SUNSET BOTTLE</h3>
            <p class="tum_info_f2">재질 : 스테인레스스틸, 아크릴로니트릴<br>용량 : 460ml<br>주요특징 : 여름 컨셉의 칵테일을 모티브로한<br>쉐이커 형태의 보틀.<br>사용 시 주의 사항<br>-급격한 온도 변화는 제품 파손의 원인이 되오니<br>사용에 주의하시기 바랍니다.<br>-뚜껑을 열고 잠글때 반드시 텀블러의 중간<br>부분을 잡으세요.<br>-우유나 유제품, 과즙 등 변질 되기 쉬운 음료를 장시간 방치 시 부패 될 수 있습니다.</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>제품명: 투썸 선셋 보틀<br>제조사 : WUYI YASHAN PL<br>ASTIC PRODUCT FACTORY CO.,LTD<br>원산지 : 중국<br>수입원 : (주)지오그라픽스 / 서울 영등포구 선유로3길 10<br>반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>식품위생법에 따른 수입신고를 필함</p>
           </section><!--//tum_7_info-->
        </section><!--//tum_7-->
              
        <section class="tum_8">
           <div class="menu_img">
           <div class="tum8_img zero"></div>
           </div>
           <section class="tum_8_info">
            <div class="info_close"></div>
            <h3><span class="tum">투썸 선셋 텀블러</span><br>TWOSOME SUNSET TUMBLER</h3>
            <p class="tum8_info_f2">1. 재질 : 스테인레스, 아크릴로니트릴<br>2. 용량 : 540ml<br>3. 주요특징 : 랜덤으로 각이진 쉐입으로<br>무광 퍼플 계열의 바디 텀블러와<br>살짝 광이 감도는 로즈골드 컬러의 리드 컬러의 조합!!<br>환경을 생각하는 스텐레스 빨대가 구성되어 있고,<br>입구가 넓어 세척 시 용이합니다.<br>4. 구성 : 텀블러, 스트로우 1개<br>5. 사용 시 주의 사항<br>-급격한 온도 변화는 제품 파손의 원인이 되오니 사용에 주의하시기 바랍니다.</p>
            <p class="nutri_f">-우유나 유제품, 과즙 등 변질 되기 쉬운 음료를<br>장시간 방치 시 부패 될 수 있습니다.<br>-본체를 장시간 물에 담가 두지 마시고 전자제인지<br>사용 불가합니다.<br>-세척 시 중성세제를 묻힌 부드러운 스펀지로 닦아 주십시오.<br>-제품에 강한 충격을 주지 마십시오.<br>-뜨거운 음료를 넣고 흔들 때 압력으로 뚜껑이 열리거나<br>누수가 있을 수 있으며, 화상에 위험이 있습니다.<br>-과도하게 기울일 시 누수의 원인이 될 수 있습니다.<br>-제품 생산 시 작은 기포 또는 흠집이 있을 수 있습니다.<br>이는 공정 중 생기는 자연스러운 현상입니다.</p>
           </section><!--//tum_8_info-->
        </section><!--//tum_8-->
               
            <p class="b_menu_title">투썸 코르크 텀블러</p>
            <p class="b_menu_title">투썸 마이 홀리데이 텀블러</p>
            <p class="b_menu_title">투썸 선셋 보틀</p>
            <p class="b_menu_title1">투썸 선셋 텀블러</p>
               
        <section class="tum_9">
           <div class="menu_img">
           <div class="tum9_img zero"></div>
           </div>
           <section class="tum_9_info">
            <div class="info_close"></div>
            <h3><span class="tum">투썸 홀로그램 보틀</span><br>TWOSOME HOLOGRAM BOTTLE</h3>
            <p class="tum9_info_f2">재질 : 폴리프로필렌, 아크릴로니트릴<br>용량 : 460ml<br>주요특징 : 현재 트렌드인 홀로그램을 보틀에 입혀<br>은은한 도트 패턴과 함께 몽환적인 분위기를<br>연출 할 수 있습니다.<br>구성 : 보틀, 스트로우 1개<br>사용 시 주의 사항<br>-보틀제품으로 보온 보냉은 불가한 제품입니다.<br>-급격한 온도 변화는 제품 파손의 원인이 되오니<br>사용에 주의하시기 바랍니다.<br>-우유나 유제품, 과즙 등 변질 되기 쉬운 음료를<br>장시간 방치 시 부패 될 수 있습니다.</p>
            <p class="nutri_f">-본체를 장시간 물에 담가 두지 마십시오.<br>-세척 시 중성세제를 묻힌 부드러운 스펀지로<br>닦아 주십시오.<br>-뜨거운 음료를 넣고 흔들 때 압력으로 뚜껑이<br>열리거나 누수가 있을 수 있으며, 화상에 위험이 있습니다.<br>-과도하게 기울일 시 누수의 원인이 될 수 있습니다.<br>-제품에 강한 충격을 주지 마십시오.<br>-제품 생산 시 작은 기포 또는 흠집이 있을 수 있습니다.<br>이는 공정 중 생기는 자연스러운 현상입니다.<br>-끓는물에 삶거나 열탕 시에는 제품 파손 등<br>안전상 문제가 발생할 수 있습니다</p>
           </section><!--//tum_9_info-->
        </section><!--//tum_9-->
              
        <section class="tum_10">
           <div class="menu_img">
           <div class="tum10_img zero"></div>
           </div>
           <section class="tum_10_info">
            <div class="info_close"></div>
            <h3><span class="tum">투썸블루밍투톤텀블러</span><br>Twosome Blooming Two-tone Tumbler</h3>
            <p class="tum_info_f2">용량 : 만수시 600ml<br>재질 : 스테인레스 스틸, 폴리프로필렌, 고무제<br>주요특징<br>그라데이션이 들어간 바디 컬러가 포인트<br>대용량 및 입구가 넓어 사용이 용이함<br>리드 부분이 막혀있지 않아 바로 음료 시음이 가능</p>
            <p class="nutri_f">주의사항<br>- 급격한 온도변화를 피하십시오.<br>- 불에 직접 올려놓으면 파손의 우려가 있으니 주의<br>- 전자레인지 및 오븐 사용 금지<br>- 음료가 든 제품 가방에 휴대 금지<br>- 탄산 및 발효 음료나 식품에는 사용 금지<br>- 뜨거운물 및 탄산음료를 넣으면 팽창에 의해<br>내용물이 샐 수 있으니 주의하세요</p>
           </section><!--//tum_10_info-->
        </section><!--//tum_10-->
              
        <section class="tum_11">
           <div class="menu_img">
           <div class="tum11_img zero"></div>
           </div>
           <section class="tum_11_info">
            <div class="info_close"></div>
            <h3><span class="tum">투썸블루밍텀블러_라일락</span><br>Twosome Blooming Tumbler_Lilac</h3>
            <p class="tum_info_f2">용량 : 만수시 600ml<br>재질 : 스테인레스 스틸, 폴리프로필렌, 고무제<br>주요특징<br>그라데이션이 들어간 바디 컬러가 포인트<br>대용량 및 입구가 넓어 사용이 용이함<br>리드 부분이 막혀있지 않아 바로 음료 시음이 가능</p>
            <p class="nutri_f">주의사항<br>- 급격한 온도변화를 피하십시오.<br>- 불에 직접 올려놓으면 파손의 우려가 있으니 주의<br>- 전자레인지 및 오븐 사용 금지<br>- 음료가 든 제품 가방에 휴대 금지<br>- 탄산 및 발효 음료나 식품에는 사용 금지<br>- 뜨거운물 및 탄산음료를 넣으면 팽창에 의해<br>내용물이 샐 수 있으니 주의하세요</p>
           </section><!--//tum_11_info-->
        </section><!--//tum_11-->
              
        <section class="tum_12">
           <div class="menu_img">
           <div class="tum12_img zero"></div>
           </div>
           <section class="tum_12_info">
            <div class="info_close"></div>
            <h3><span class="tum">투썸블루밍텀블러_민트</span><br>Twosome Blooming Tumbler_Mint</h3>
            <p class="tum_info_f2">용량 : 만수시 600ml<br>재질 : 스테인레스 스틸, 폴리프로필렌, 고무제<br>주요특징<br>그라데이션이 들어간 바디 컬러가 포인트<br>대용량 및 입구가 넓어 사용이 용이함<br>리드 부분이 막혀있지 않아 바로 음료 시음이 가능</p>
            <p class="nutri_f">주의사항<br>- 급격한 온도변화를 피하십시오.<br>- 불에 직접 올려놓으면 파손의 우려가 있으니 주의<br>- 전자레인지 및 오븐 사용 금지<br>- 음료가 든 제품 가방에 휴대 금지<br>- 탄산 및 발효 음료나 식품에는 사용 금지<br>- 뜨거운물 및 탄산음료를 넣으면 팽창에 의해<br>내용물이 샐 수 있으니 주의하세요</p>
           </section><!--//tum_12_info-->
        </section><!--//tum_12-->
               
            <p class="b_menu_title">투썸 홀로그램 보틀</p>
            <p class="b_menu_title">투썸블루밍투톤텀블러</p>
            <p class="b_menu_title">투썸블루밍텀블러_라일락</p>
            <p class="b_menu_title1">투썸블루밍텀블러_민트</p>
               
        <section class="tum_13">
           <div class="menu_img">
           <div class="tum13_img zero"></div>
           </div>
           <section class="tum_13_info">
            <div class="info_close"></div>
            <h3><span class="tum">투썸마르크트텀블러_로즈골드</span><br>Twosome Markt Tumbler_Rose Gold</h3>
            <p class="tum_info_f2">용량 : 만수시 500ml<br>재질 : 스테인레스<br>주요특징<br>베를린 마켓 일러스트가 입혀진 대용량 텀블러<br>은은한 펄감이 입혀진 바디 색상이 포인트<br>보온. 보냉시간 6시간 유지 가능</p>
            <p class="nutri_f">주의사항<br>- 전자레인지, 탄산, 발효음료 사용 금지<br>- 충격에 파손 주의<br>- 급격한 온도변화를 피하십시오<br>- 불에 직접 올려놓으면 파손의 우려가 있으니 주의<br>- 제품에 금이나 균열이 있을 시 사용을 중지해주십시오</p>
           </section><!--//tum_13_info-->
        </section><!--//tum_13-->
              
        <section class="tum_14">
           <div class="menu_img">
           <div class="tum14_img zero"></div>
           </div>
           <section class="tum_14_info">
            <div class="info_close"></div>
            <h3><span class="tum">투썸마르크트텀블러_레드</span><br>Twosome Markt Tumbler_Red</h3>
            <p class="tum_info_f2">용량 : 만수시 500ml<br>재질 : 스테인레스<br>주요특징<br>베를린 마켓 일러스트가 입혀진 대용량 텀블러<br>은은한 펄감이 입혀진 바디 색상이 포인트<br>보온. 보냉시간 6시간 유지 가능</p>
            <p class="nutri_f">주의사항<br>- 전자레인지, 탄산, 발효음료 사용 금지<br>- 충격에 파손 주의<br>- 급격한 온도변화를 피하십시오<br>- 불에 직접 올려놓으면 파손의 우려가 있으니 주의<br>- 제품에 금이나 균열이 있을 시 사용을 중지해주십시오</p>
           </section><!--//tum_14_info-->
        </section><!--//tum_14-->
              
        <section class="tum_15">
           <div class="menu_img">
           <div class="tum15_img zero"></div>
           </div>
           <section class="tum_15_info">
            <div class="info_close"></div>
            <h3><span class="tum">투썸마르크트텀블러_아이보리</span><br>Twosome Markt Tumbler_Ivory</h3>
            <p class="tum_info_f2">용량 : 만수시 500ml<br>재질 : 스테인레스<br>주요특징<br>베를린 마켓 일러스트가 입혀진 대용량 텀블러<br>은은한 펄감이 입혀진 바디 색상이 포인트<br>보온. 보냉시간 6시간 유지 가능</p>
            <p class="nutri_f">주의사항<br>- 전자레인지, 탄산, 발효음료 사용 금지<br>- 충격에 파손 주의<br>- 급격한 온도변화를 피하십시오<br>- 불에 직접 올려놓으면 파손의 우려가 있으니 주의<br>- 제품에 금이나 균열이 있을 시 사용을 중지해주십시오</p>
           </section><!--//tum_15_info-->
        </section><!--//tum_15-->
        
        <section class="tum_16">
           <div class="menu_img">
           <div class="tum16_img zero"></div>
           </div>
           <section class="tum_16_info">
            <div class="info_close"></div>
            <h3><span class="tum">투썸이중슬림텀블러그레이</span><br>TWOSOME DOUBLE WALL SLIM TUMBLER GREY</h3>
            <p class="tum16_info_f2">용량 : 350ml<br>재질 : 스테인레스<br>주요특징<br>- 이중구조로 내부 온도가 외부로 덜 전달됨<br>- 군더더기 없는 베이직하고 깔끔한 디자인<br>- BPA Free<br>- 슬림하고 롱한 쉐입으로 그립감이 좋음<br>주의사항<br>- 보온 보냉 제품이 아닙니다.<br>- 탄산,발효제품 사용불가 합니다.<br>- 충격에 파손 주의<br>- 급격한 온도변화를 피하십시오<br>- 전자레인지,식기세척기 사용불가 합니다.<br>- 완벽한 밀폐제품이 아닙니다.</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>제품명 : 투썸이중슬림텀블러그레이<br>제조사 : (주)제이더블류굿즈 /<br>경기도 용인시 기흥구 동백중앙로 16번길 16-25<br>원산지 : 대한민국<br>반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>식품위생법에 따른 수입신고를 필함</p>
           </section><!--//tum_16_info-->
        </section><!--//tum_16-->
           
            <p class="b_menu_title">투썸마르크트텀블러_로즈골드</p>
            <p class="b_menu_title">투썸마르크트텀블러_레드</p>
            <p class="b_menu_title">투썸마르크트텀블러_아이보리</p>
            <p class="b_menu_title1">투썸이중슬림텀블러그레이</p>
               
        <section class="tum_17">
           <div class="menu_img">
           <div class="tum17_img zero"></div>
           </div>
           <section class="tum_17_info">
            <div class="info_close"></div>
            <h3><span class="tum">투썸이중슬림텀블러화이트</span><br>TWOSOME DOUBLE WALL SLIM TUMBLER WHITE</h3>
            <p class="tum17_info_f2">용량 : 350ml<br>재질 : 스테인레스<br>주요특징<br>- 이중구조로 내부 온도가 외부로 덜 전달됨<br>- 군더더기 없는 베이직하고 깔끔한 디자인<br>- BPA Free<br>- 슬림하고 롱한 쉐입으로 그립감이 좋음<br>주의사항<br>- 보온 보냉 제품이 아닙니다.<br>- 탄산,발효제품 사용불가 합니다.<br>- 충격에 파손 주의<br>- 급격한 온도변화를 피하십시오<br>- 전자레인지,식기세척기 사용불가 합니다.<br>- 완벽한 밀폐제품이 아닙니다.</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>제품명 : 투썸이중슬림텀블러화이트<br>제조사 : (주)제이더블류굿즈 /<br>경기도 용인시 기흥구 동백중앙로 16번길 16-25<br>원산지 : 대한민국<br>반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>식품위생법에 따른 수입신고를 필함</p>
           </section><!--//tum_17_info-->
        </section><!--//tum_17-->
          
        <section class="tum_18">
           <div class="menu_img">
           <div class="tum18_img zero"></div>
           </div>
           <section class="tum_18_info">
            <div class="info_close"></div>
            <h3><span class="tum">투썸마르크트텀블러_레드</span><br>Twosome Markt Tumbler_Red</h3>
            <p class="tum_info_f2">용량 : 만수시 320ml<br>재질 : 유리 및 실리콘<br>주요특징<br>- 스와로브스키사의 크리스털을 사용한 보틀<br>- 유럽 도시의 밤하늘에 내리는 Rain drop을<br>모티브로 한 유리 보틀<br>- 뚜껑 부분에 실리콘 재질의 손집이가 달려있어<br>휴대가 용이하며 밀폐 가능한 보틀<br>- 고무슬리브로 그립감이 좋고<br>미끄러지지 않는 실용적제품</p>
            <p class="nutri_f">주의사항<br>- 크리스털이 부딪혀 깨질 수 있으니 단독 세척해 주십시오<br>- 크리스털 부착 제품은 전자레인지 및 오븐사용을 금합니다.<br>- 충격에 파손 주의<br>- 급격한 온도변화를 피하십시오<br>- 불에 직접 올려놓으면 파손의 우려가 있으니 주의하십시오<br>- 제품에 금이나 균열이 있을 시 사용을 중지해주십시오</p>
           </section><!--//tum_18_info-->
        </section><!--//tum_18-->
          
        <section class="tum_19">
           <div class="menu_img">
           <div class="tum19_img zero"></div>
           </div>
           <section class="tum_19_info">
            <div class="info_close"></div>
            <h3><span class="tum">투썸 보온병 350</span><br>TWOSOME VACUUM TUMBLER</h3>
            <p class="tum19_info_f2">투썸 보온병 350<br>용량 : 350ml<br>재질 : 스틸, 폴리프로필렌, 실리콘<br>주요특징 : 내부 2중구조로 위생적인 안심 속마개로<br>물 흘림 방지, 보온보냉효력 3년 보증<br>더블월 진공층 의 특수 코팅으로 우수한 보온력<br>항균성분을 첨가하여 더욱 향상된 위생성<br>원산지 : 중국<br>주의사항<br>- 색이 짙은 내용물은 내부나 뚜껑에 착색될 수 있음<br>- 전제레인지 또는 오븐, 식기세척기&nbsp;사용 불가<br>- 외부에 의한 심한 충격 주의<br>- 드라이 아이스, 탄산, 발효식품 사용 불가<br>- 거친 수세미, 연마제 등 세척 시 외부에 스크레치가 날 수 있음</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>제품명 : 투썸 보온병 350<br>원산지 : 중국<br>제조사 : 난룽<br>수입원 : (주)워너비엠 / 경기도 광주시 희안대로 985<br>반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>식품위생법에 따른 수입신고를 필함</p>
           </section><!--//tum_19_info-->
        </section><!--//tum_19-->
          
        <section class="tum_20">
           <div class="menu_img">
           <div class="tum20_img zero"></div>
           </div>
           <section class="tum_20_info">
            <div class="info_close"></div>
            <h3><span class="tum">투썸 보온병_대</span><br>TWOSOME VACUUM TUMBLER L</h3>
            <p class="tum_info_f2">주요특징<br>-보온 효력 강화 특수 코팅<br>-2중 안심 속마개로 위생적인 사용 가능<br>-24시간 보온 지속 / 6시간 보냉 지속<br>-보온 보냉 3년 효력 보증소비자 센터 운영<br>주의사항<br>-탄산,발효제품 사용불가<br>-전자레인지,식기세척기 사용불가<br>-뚜껑을 포함한 상위 부분은 강한 충격에<br>파손될 수 있음<br>-스펀지로 부드럽게 세척 요망</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>① 제품명 : 투썸 보온병_대<br>② 원산지 : 중국<br>③ 제조사 : 난룽<br>④ 수입원 : (주)워너비엠 / 경기도 광주시 희안대로 985<br>④ 반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>⑤ 식품위생법에 따른 수입신고를 필함</p>
           </section><!--//tum_20_info-->
        </section><!--//tum_20-->
           
            <p class="b_menu_title">투썸이중슬림텀블러화이트</p>
            <p class="b_menu_title">투썸마르크트텀블러_레드</p>
            <p class="b_menu_title">투썸 보온병 350</p>
            <p class="b_menu_title1">투썸 보온병_대</p>
               
        <section class="tum_21">
           <div class="menu_img">
           <div class="tum21_img zero"></div>
           </div>
           <section class="tum_21_info">
            <div class="info_close"></div>
            <h3><span class="tum">투썸이중슬림텀블러화이트</span><br>TWOSOME DOUBLE WALL SLIM TUMBLER WHITE</h3>
            <p class="tum_info_f2">주요특징 :<br>-스테인레스 본연의 바디 색상 적용<br>-미니사이즈로 가방에 넣어도 부담없는 사이즈.<br>-BPA Free<br>-원산지 : 중국<br>- 용량: 200ml<br>주의사항 :<br>-탄산,발효제품 사용불가<br>-전자레인지,식기세척기 사용불가</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>제품명: 미니 텀블러[실버]<br>제조사 : RUSHAN YUANHAO TRADING CO.,LTD<br>원산지 : 중국<br>수입원 : (주)제이엔 /<br>서울시 성수일로 77 서울숲IT벨리 10층 1009호<br>반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>식품위생법에 따른 수입신고를 필함</p>
           </section><!--//tum_21_info-->
        </section><!--//tum_21-->
          
        <section class="tum_22">
           <div class="menu_img">
           <div class="tum22_img zero"></div>
           </div>
           <section class="tum_22_info">
            <div class="info_close"></div>
            <h3><span class="tum">미니 텀블러[핑크]</span><br>Mini Tumbler[Pink]</h3>
            <p class="tum_info_f2">휴대하기 편리한 미니 사이즈 텀블러<br>재질: 스테인레스 스틸, 폴리프로필렌, 고무제<br>규격: 200ml<br><br>주의사항<br>-보온,보냉 전용 제폼이 아닙니다.<br>-탄산,발효제품 사용이 불가합니다.<br>-전자레인지,식기세척기 사용이 불가합니다.<br>-완전 밀폐형 제품이 아니니 사용시<br>주의하시기 바랍니다.</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>① 제품명: 미니 텀블러[핑크]<br>② 제조사 : RUSHAN YUANHAO TRADING CO.,LTD<br>③ 원산지 : 중국<br>④ 수입원 : (주)제이엔 /<br>서울시 성수일로 77 서울숲IT벨리 10층 1009호<br>⑤ 반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>⑥ 식품위생법에 따른 수입신고를 필함</p>
           </section><!--//tum_22_info-->
        </section><!--//tum_22-->
          
        <section class="tum_23">
           <div class="menu_img">
           <div class="tum23_img one"></div>
           </div>
           <section class="best_sticker"></section>
           <section class="tum_23_info">
            <div class="info_close"></div>
            <h3><span class="tum">미니 텀블러[브라운]</span><br>Mini Tumbler[Brown]</h3>
            <p class="tum_info_f2">휴대하기 편리한 미니 사이즈 텀블러<br>재질: 스테인레스 스틸, 폴리프로필렌, 고무제<br>규격: 200ml<br><br>주의사항<br>-보온,보냉 전용 제폼이 아닙니다.<br>-탄산,발효제품 사용이 불가합니다.<br>-전자레인지,식기세척기 사용이 불가합니다.<br>-완전 밀폐형 제품이 아니니 사용시<br>주의하시기 바랍니다.</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>① 제품명: 미니 텀블러[브라운]<br>② 제조사 : RUSHAN YUANHAO TRADING CO.,LTD<br>③ 원산지 : 중국<br>④ 수입원 : (주)제이엔 /<br>서울시 성수일로 77 서울숲IT벨리 10층 1009호<br>⑤ 반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>⑥ 식품위생법에 따른 수입신고를 필함</p>
           </section><!--//tum_23_info-->
        </section><!--//tum_23-->
          
        <section class="tum_24">
           <div class="menu_img">
           <div class="tum24_img zero"></div>
           </div>
           <section class="tum_24_info">
            <div class="info_close"></div>
            <h3><span class="tum">투썸 화이트 텀블러</span><br>Twosome White Tumbler</h3>
            <p class="tum_info_f2">슬림디자인이 적용된 로고 텀블러<br>용량: 350ml<br>재질: 스테인레스 스틸, 폴리프로필렌, 고무제<br><br>주의사항<br>-보온,보냉 전용 제폼이 아닙니다.<br>-탄산,발효제품 사용이 불가합니다.<br>-전자레인지,식기세척기 사용이 불가합니다.<br>-완전 밀폐형 제품이 아니니 사용시 주의하시기<br>바랍니다.</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>제품명 : 투썸 화이트 텀블러<br>제조사 : RUSHAN YUANHAO TRADING CO.,LTD<br>원산지 : 중국<br>수입원 : (주)제이엔 /<br>서울시 성수일로 77 서울숲IT벨리 10층 1009호<br>반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>식품위생법에 따른 수입신고를 필함</p>
           </section><!--//tum_24_info-->
        </section><!--//tum_24-->
           
            <p class="b_menu_title">투썸이중슬림텀블러화이트</p>
            <p class="b_menu_title">미니 텀블러[핑크]</p>
            <p class="b_menu_title">미니 텀블러[브라운]</p>
            <p class="b_menu_title1">투썸 화이트 텀블러</p>
               
        <section class="tum_25">
           <div class="menu_img">
           <div class="tum25_img zero"></div>
           </div>
           <section class="tum_25_info">
            <div class="info_close"></div>
            <h3><span class="tum">투썸 레드 텀블러</span><br>Twosome Red Tumbler</h3>
            <p class="tum_info_f2">슬림디자인이 적용된 로고 텀블러<br>용량: 350ml<br>재질: 스테인레스 스틸, 폴리프로필렌, 고무제<br><br>주의사항<br>-보온,보냉 전용 제폼이 아닙니다.<br>-탄산,발효제품 사용이 불가합니다.<br>-전자레인지,식기세척기 사용이 불가합니다.<br>-완전 밀폐형 제품이 아니니 사용시<br>주의하시기 바랍니다.</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>제품명 : 투썸 레드 텀블러<br>제조사 : RUSHAN YUANHAO TRADING CO.,LTD<br>원산지 : 중국<br>수입원 : (주)제이엔 /<br>서울시 성수일로 77 서울숲IT벨리 10층 1009호<br>반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>식품위생법에 따른 수입신고를 필함</p>
           </section><!--//tum_25_info-->
        </section><!--//tum_25-->
          
        <section class="tum_26">
           <div class="menu_img">
           <div class="tum26_img zero"></div>
           </div>
           <section class="tum_26_info">
            <div class="info_close"></div>
            <h3><span class="tum">치즈LOVE 텀블러</span><br>Mouse Love Tumbler</h3>
            <p class="tum_info_f2">재질 : 스테인레스스틸, 폴리프로필렌, 고무제<br>주요특징 : 미니사이즈의 텀블러로 음료 또는<br>죽 등을 담을 수 있는 다용도 멀티 텀블러<br>보온 : 2시간 / 보냉 : 4시간<br>※음료 또는 환경에 따라 달라질 수 있습니다※</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>제품명: 치즈LOVE 텀블러<br> 제조사 : RUSHAN YUANHAO TRADING CO.,LTD<br>원산지 : 중국<br>수입원 : (주)제이엔 /<br>서울시 성수일로 77 서울숲IT벨리 10층 1009호<br> 반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>식품위생법에 따른 수입신고를 필함</p>
           </section><!--//tum_26_info-->
        </section><!--//tum_26-->
          
        <section class="tum_27"></section>
        <section class="tum_28"></section>
           
            <p class="b_menu_title">투썸 레드 텀블러</p>
            <p class="b_menu_title1">치즈LOVE 텀블러</p>
                
        </section><!--//m_tumbler-->
        
        <section class="m_etc">
        <section class="etc_title">
            <p><span class="title_b">기타</span>투썸플레이스의 다양한 제품들을 즐겨보세요!</p>    
        </section><!--//etc_title-->
        
        
        <section class="etc_1">
           <div class="menu_img">
           <div class="etc1_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="etc_1_info">
            <div class="info_close"></div>
            <h3><span class="etc">TWG TEA [1837 블랙티]</span><br>TWG TEA [1837 BLACK TEA]</h3>
            <p class="etc_info_f">A TWOSOME PLACE X TWG TEA<br><br>핸드메이드 100％ 면 소재로 제작한 TWG TEA<br>[2.5G*15EA]<br><br>상품은 5가지 플레이버로 준비되어있으며,<br>투썸 직영점에서 만나보실 수 있습니다.</p>
            <p class="nutri_f">1837블랙티 1837 Black Tea<br>TWG TEA의 시그니처 제품으로 버뮤다 삼각지대의<br>과일이 블렌딩되어 홍차의 은은한 맛과<br>스트로베리의 뒷맛이 좋아 가장 사랑받고 있는 TEA</p>
           </section><!--//etc_1_info-->
        </section><!--//etc_1-->
        
        <section class="etc_2">
           <div class="menu_img">
           <div class="etc2_img one"></div>
           </div>
           <div class="best_sticker"></div>
           <section class="etc_2_info">
            <div class="info_close"></div>
            <h3><span class="etc">TWG TEA [크림 카라멜]</span><br>TWG TEA [CREME CARAMEL]</h3>
            <p class="etc_info_f">A TWOSOME PLACE X TWG TEA<br><br>핸드메이드 100％ 면 소재로 제작한 TWG TEA<br>[2.5G*15EA]<br><br>상품은 5가지 플레이버로 준비되어있으며,<br>투썸 직영점에서 만나보실 수 있습니다.</p>
            <p class="nutri_f">크림 카라멜 Creme Caramel [Decaf]<br>남아프리카공화국의 루이보스차에 달콤한 카라멜을<br>블렌딩하여 매력적이고 섬세함을 지닌 TEA</p>
           </section><!--//etc_2_info-->
        </section><!--//etc_2-->
            
        <section class="etc_3">
           <div class="menu_img">
           <div class="etc3_img zero"></div>
           </div>
           <section class="etc_3_info">
            <div class="info_close"></div>
            <h3><span class="etc">TWG TEA [카모마일]</span><br>TWG TEA [CHAMOMILE]</h3>
            <p class="etc_info_f">A TWOSOME PLACE X TWG TEA<br><br>핸드메이드 100％ 면 소재로 제작한 TWG TEA<br>[2.5G*15EA]<br><br>상품은 5가지 플레이버로 준비되어있으며,<br>투썸 직영점에서 만나보실 수 있습니다.</p>
            <p class="nutri_f">카모마일 Chamomile [Decaf]<br>카페인이 없어 누구나 편안하게 즐길 수 있는 허브티로,<br>풍부한 벌꿀향과 황금빛이 특징인 TEA</p>
           </section><!--//etc_3_info-->
        </section><!--//etc_3-->
        
        <section class="etc_4">
           <div class="menu_img">
           <div class="etc4_img zero"></div>
           </div>
           <section class="etc_4_info">
            <div class="info_close"></div>
            <h3><span class="etc">투썸 홀로그램 쇼퍼백</span><br>TWOSOME HOLOGRAM SHOPPER BAG</h3>
            <p class="etc4_info5">재질 : TPU, 폴리에스터<br>사이즈 : 가방_33*36*10cm 가로*세로*폭<br>파우치_21*15*4.5cm 가로*세로*폭<br>구성 : 본품 가방, 파우치<br>주요특징 : 한 여름 따사로운 햇빛을 그대로 머금은 핑크 홀로그램 비치백, 내부가 비치는 걱정은 그만~! 쁘띠 파우치를<br>추가 구성!!!어디서나 시선강탈하는 홀로그램 빛으로 올 여름을 함께하세요!!<br>사용 시 주의 사항<br>- 본 제품은 PVC 소재로 세탁이 불가합니다.<br>- 오염 시 부드러운 천에 물을 묻혀 닦아주세요.<br>- 날카롭고 딱딱한 물체와 닿으면 스크레치 혹은 기타 여러가지 손상의 원인이 될 수 있습니다.<br>-다림질을 삼가해 주십시오.<br>-화기에 유의하십시오.<br>-생활 기스 및 오염, 꺽임에 약한 제품으로 사용 시 주의하십시오.</p>
            <p class="nutri_f"></p>
           </section><!--//etc_4_info-->
        </section><!--//etc_4-->
        
            <p class="b_menu_title">TWG TEA [1837 블랙티]</p>
            <p class="b_menu_title">TWG TEA [크림 카라멜]</p>
            <p class="b_menu_title">TWG TEA [카모마일]</p>
            <p class="b_menu_title1">투썸 홀로그램 쇼퍼백</p>
            
        <section class="etc_5">
           <div class="menu_img">
           <div class="etc5_img one"></div>
           </div>
           <div class="new_sticker"></div>
           <section class="etc_5_info">
            <div class="info_close"></div>
            <h3><span class="etc">투썸 레트로스프링 세트</span><br>TWOSOME RETRO SPRING SET</h3>
            <p class="etc_info_f2">제품명 : 투썸 레트로스프링 세트<br>구성 : 245ml 컵 2종 양면 접이식 거울 1종<br><br>구성제품 : 유리컵 2종<br>주요특징 :  제품마다 레트로한 디자인이 포인트<br>뒷면 투썸플레이스 로고 (흰색)<br>용량 및 재질 : 245ml<br>재질 : 석회 소다<br>제조국 : 중국<br>제조사 : ㈜께끼</p>
            <p class="nutri_f">구성제품 : 거울 1종<br>주요특징 : 휴대용 접이식 양면 일반경<br>크기 : 70x75x11(mm)<br>재질 : 메탈, 유리거울<br>제조국 : 대한민국<br>제조사 : ㈜께끼<br>주의사항<br>절대 밟거나 던지지 마세요<br>충격과 파손에 주의하시기 바랍니다</p>
           </section><!--//etc_5_info-->
        </section><!--//etc_5-->
        
        <section class="etc_6">
           <div class="menu_img">
           <div class="etc6_img one"></div>
           </div>
           <div class="new_sticker"></div>
           <section class="etc_6_info">
            <div class="info_close"></div>
            <h3><span class="etc">투썸 스트로베리 키링 2종(레드/핑크)</span><br>TWOSOME STRAWBERRY KEY-RING</h3>
            <p class="etc_info_f2">투썸 딸기 시즌의 시그니쳐 음료이자 올해 시즌 컨셉인<br>STRAWBERRY Vibe의 대표 음료 2종!<br>‘스트로베리 라떼’와 ‘스트로베리 요거 프라페’를<br>형상화한 귀엽고 앙증맞은 키링입니다<br><br>세트 판매가 아닌 개별 판매 상품입니다<br><br>사용 연령 :14세 이상(14세 미만의 어린이가<br>사용하기 부적절한 제품이오니 주의하십시오)</p>
            <p class="nutri6_f">MD 판매 상품 표시 사항<br>제품명 : 투썸 스트로베리 키링<br>제조국 : 중국<br>수입원 : 태양인터내셔널<br>반품 및 교환처 : 투썸플레이스 구입매장<br>고객센터 : 1577-4410<br>판매사 : 투썸플레이스 주식회사<br>재질 : PVC, 금속<br>취급시 주의사항 :<br>제조 용도 이외에는 사용하지 마십시오<br>작은 부품들이 많으니 입에 대거나 입에 넣고 빨지 마십시오<br>강한 충격에 의한 파손에 주의하십시오<br>불에 직접 닿거나 가까이 하지 마십시오</p>
           </section><!--//etc_6_info-->
        </section><!--//etc_6-->
        
        <section class="etc_7">
           <div class="menu_img">
           <div class="etc7_img zero"></div>
           </div>
           <section class="etc_7_info">
            <div class="info_close"></div>
            <h3><span class="etc">투썸 홀리데이 무드 전구 세트</span><br>Twosome Holiday Mood Light Set</h3>
            <p class="etc_info_f">구성 : 앵두전구 40구 패브릭월포스터 1ea<br>접착후크2ea<br><br>특징<br>앵두전구는 USB로 공간의 제약 없이<br>어디에든 설치 가능<br>웜화이트 컬러로, 따뜻한 분위기가 바로 연출<br>크리스마스 무드가 듬뿍 드러나는<br>노르딕 디자인의 패브릭 포스터<br>부드러운 폴리 재질로 600*900의 넉넉한 사이즈<br>간편하고 오래 사용할 수 있는 접착후크</p>
            <p class="nutri_f"></p>
           </section><!--//etc_7_info-->
        </section><!--//etc_7-->
        
        <section class="etc_8">
           <div class="menu_img">
           <div class="etc8_img zero"></div>
           </div>
           <section class="etc_8_info">
            <div class="info_close"></div>
            <h3><span class="etc">투썸 2020 데일리키트_펀</span><br>TWOSOME 2020 DAILY KIT_FUN</h3>
            <p class="etc_info_f">투썸과 우주 스타 BT21의 두번째 만남!!<br>BT21 캐릭터와 함께하는 2020년 데일리키트_펀<br>일상 속에서 활용도 높은 제품들로 구성하여<br>당신의 일상을 특별하게 투썸과 함께하세요.<br><br>구성품 : 다이어리, 데스크 매트, 먼슬리 스케줄러,<br>포스트카드 캘린더, 메모지, 실리콘 파우치,<br>153볼펜*2EA</p>
            <p class="nutri_f"></p>
           </section><!--//etc_8_info-->
        </section><!--//etc_8-->
        
            <p class="b_menu_title">투썸 레트로스프링 세트</p>
            <p class="b_menu_title">투썸 스트로베리 키링 2종(레드/핑크)</p>
            <p class="b_menu_title">투썸 홀리데이 무드 전구 세트</p>
            <p class="b_menu_title1">투썸 2020 데일리키트_펀</p>
            
        
        <section class="etc_9">
           <div class="menu_img">
           <div class="etc9_img zero"></div>
           </div>
           <section class="etc_9_info">
            <div class="info_close"></div>
            <h3><span class="etc">투썸 2020 데일리키트_모던</span><br>TWOSOME 2020 DAILY KIT_MODERN</h3>
            <p class="etc_info1">투썸과 우주 스타 BT21의 두번째 만남!!<br>BT21 캐릭터와 함께하는 2020년 데일리키트_펀<br>일상 속에서 활용도 높은 제품들로 구성하여<br>당신의 일상을 특별하게 투썸과 함께하세요.<br><br>구성품 : 다이어리, 데스크 매트, 먼슬리 스케줄러,<br>포스트카드 캘린더, 메모지, 실리콘 파우치,<br>153볼펜*2EA</p>
            <p class="nutri_f"></p>
           </section><!--//etc_9_info-->
        </section><!--//etc_9-->
        
        <section class="etc_10">
           <div class="menu_img">
           <div class="etc10_img zero"></div>
           </div>
           <section class="etc_10_info">
            <div class="info_close"></div>
            <h3><span class="etc">투썸블루투스미러볼스피커_블랙</span><br>Twosome Blooth Mirrorball Speaker_BLACK</h3>
            <p class="etc_info_f"> 크기 : 105 * 105 * 128 mm<br>무게 : 450g<br>주요특징 : 충전식으로 사용할 수 있는<br>블루투스 미러볼 스피커<br>무선으로 사용시간 최대 3.5시간<br>최대 사용 거리 8M<br>LED 버튼 ON/OFF 여부에 따라 스피커로만 사용 가능</p>
            <p class="nutri_f">주의사항<br>- 사용 전 사용설명서를 반드시 읽어주세요<br>- 휘발성 물질이나 폭발 물질이 있는 곳에서 사용 금지<br>- 여름철 자동차 및 텐트 내부에 방치 금지<br>- 물기나 비, 습기 많은곳에서 사용 금지<br>- 배터리 임의 분해 금지</p>
           </section><!--//etc_10_info-->
        </section><!--//etc_10-->
        
        <section class="etc_11">
           <div class="menu_img">
           <div class="etc11_img zero"></div>
           </div>
           <section class="etc_11_info">
            <div class="info_close"></div>
            <h3><span class="etc">투썸블루투스미러볼스피커_블랙</span><br>Twosome Blooth mirrorball speaker_RED</h3>
            <p class="etc_info_f"> 크기 : 105 * 105 * 128 mm<br>무게 : 450g<br>주요특징 : 충전식으로 사용할 수 있는<br>블루투스 미러볼 스피커<br>무선으로 사용시간 최대 3.5시간<br>최대 사용 거리 8M<br>LED 버튼 ON/OFF 여부에 따라 스피커로만 사용 가능</p>
            <p class="nutri_f">주의사항<br>- 사용 전 사용설명서를 반드시 읽어주세요<br>- 휘발성 물질이나 폭발 물질이 있는 곳에서 사용 금지<br>- 여름철 자동차 및 텐트 내부에 방치 금지<br>- 물기나 비, 습기 많은곳에서 사용 금지<br>- 배터리 임의 분해 금지</p>
           </section><!--//etc_11_info-->
        </section><!--//etc_11-->
        
        <section class="etc_12">
           <div class="menu_img">
           <div class="etc12_img zero"></div>
           </div>
           <section class="etc_12_info">
            <div class="info_close"></div>
            <h3><span class="etc">리버스후프프레스[블루]</span><br>RIVERS HOOP PRESS [BLUE]</h3>
            <p class="etc_info_f2">미분필터 기능으로 깔끔한 커피맛을 즐길 수 있는<br>리버스 프레스기<br>용량: 4CUP 720ml</p>
            <p class="nutri_f"></p>
           </section><!--//etc_12_info-->
        </section><!--//etc_12-->
        
            <p class="b_menu_title">투썸 2020 데일리키트_모던</p>
            <p class="b_menu_title">투썸블루투스미러볼스피커_블랙</p>
            <p class="b_menu_title">투썸블루투스미러볼스피커_레드</p>
            <p class="b_menu_title1">리버스후프프레스[블루]</p>
            
        <section class="etc_13">
           <div class="menu_img">
           <div class="etc13_img zero"></div>
           </div>
           <section class="etc_13_info">
            <div class="info_close"></div>
            <h3><span class="etc">리버스후프프레스[블랙]</span><br>RIVERS HOOP PRESS [BLUE]</h3>
            <p class="etc_info_f2">미분필터 기능으로 깔끔한 커피맛을 즐길 수 있는<br>리버스 프레스기<br>용량: 4CUP 720ml</p>
            <p class="nutri_f"></p>
           </section><!--//etc_13_info-->
        </section><!--//etc_13-->
        
        <section class="etc_14">
           <div class="menu_img">
           <div class="etc14_img zero"></div>
           </div>
           <section class="etc_14_info">
            <div class="info_close"></div>
            <h3><span class="etc">투썸 클린키트_스카이</span><br>Twosome Clean KIt_Clear Sky</h3>
            <p class="etc_info_f2">투썸과 함께 환경을 지키는 All In One Kit<br>구성품 : 텀블러 630ml<br>메쉬파우치<br>친환경세제<br>스텐스트로우 세트<br>오가닉 브러쉬</p>
            <p class="nutri_f"></p>
           </section><!--//etc_14_info-->
        </section><!--//etc_14-->
        
        <section class="etc_15">
           <div class="menu_img">
           <div class="etc15_img zero"></div>
           </div>
           <section class="etc_15_info">
            <div class="info_close"></div>
            <h3><span class="etc">투썸 클린키트_화이트</span><br>Twosome Clean Kit_Natural White</h3>
            <p class="etc_info_f2">투썸과 함께 환경을 지키는 All In One Kit<br>구성품 : 텀블러 630ml<br>메쉬파우치<br>친환경세제<br>스텐스트로우 세트<br>오가닉 브러쉬</p>
            <p class="nutri_f"></p>
           </section><!--//etc_15_info-->
        </section><!--//etc_15-->
        
        <section class="etc_16">
           <div class="menu_img">
           <div class="etc16_img zero"></div>
           </div>
           <section class="etc_16_info">
            <div class="info_close"></div>
            <h3><span class="etc">투썸 LOVE 파티팩</span><br>Twosome Love Party Pack</h3>
            <p class="etc16_info_f">구성<br>- 프롭스 6종<br>- 케이크픽 2종<br>- 파티 풍선 4종<br>- 컨페티 1종<br>- 가랜드 1종<br>주의사항<br>- 아이들의 손이 닿지 않는 곳에 보관해주세요<br>- 종이 소재는 훼손 또는 파손 주의하세요<br>- 프롭스 스틱 파손 시 파편으로 인한 상처 주의하세요<br>- 컨페티 조각은 입에 들어가지 않도록 주의하세요<br>- 풍선은 입에 넣고 빨지 마세요<br>- 구성 제품의 본래 용도 외 사용하지 마세요<br>- 금박 빤짝이 소제를 음용하지 마세요</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>제품명 : 투썸LOVE파티팩<br>제조사 : Yiwu Manduo Silicone Product Factory<br>원산지 : 중국<br>수입원 : 이지커머스 /<br>서울시 송파구 송파대로 167 테라타워 B동 1311호<br>반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>식품위생법에 따른 수입신고를 필함</p>
           </section><!--//etc_16_info-->
        </section><!--//etc_16-->
        
            <p class="b_menu_title">리버스후프프레스[블랙]</p>
            <p class="b_menu_title">투썸 클린키트_스카이</p>
            <p class="b_menu_title">투썸 클린키트_화이트</p>
            <p class="b_menu_title1">투썸 LOVE 파티팩</p>
            
        </section><!--//m_etc-->
        
        <section class="m_set">
        <section class="set_title">
            <p><span class="title_b">선물세트</span>투썸플레이스의 다양한 선물세트들을 즐겨보세요!</p>    
        </section><!--//set_title-->
        
        
        <section class="set_1">
           <div class="menu_img">
           <div class="set1_img zero"></div>
           </div>
           <section class="set_1_info">
            <div class="info_close"></div>
            <h3><span class="set">투썸 기프트세트20_5호</span><br>TWOSOME GIFT SET 20_5</h3>
            <p class="set_info_f">투썸 기프트세트20_5호<br>투썸 블랙그라운드 200g 1pack<br>홈카페 더블월 텀블러 1개 500ml<br>모던한 디자인과 더블월 구조로<br>생활 보온 보냉이 뛰어난 홈카페 텀블러<br>티타늄 코팅 드리퍼 1개<br>스테인리스 필터망과 티타늄 코팅으로 커피 본연의 맛을<br>고스란히 담아내는 드리퍼</p>
            <p class="nutri1_f">MD판매 상품 표시 사항<br>텀블러<br>제품명 및 제조사 : 홈카페 더블월 텀블러 /<br>GUANGZHOU LULU TONG METAL CO.,LTD<br>제품명 및 제조사 : 티타늄 코팅 드리퍼 /<br>WELLWAY ENTERPRISE DEVELOPMENT LIMITED<br>원산지 : 중국<br>수입원 : (주)휴레드 /<br>경기도 안양시 만안구 만안로 21(안양동), 3층 303호<br>반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>식품위생법에 따른 수입신고를 필함</p>
           </section><!--//set_1_info-->
        </section><!--//set_1-->
        
        <section class="set_2">
           <div class="menu_img">
           <div class="set2_img zero"></div>
           </div>
           <section class="set_2_info">
            <div class="info_close"></div>
            <h3><span class="set">투썸 기프트세트20_4호</span><br>TWOSOME GIFT SET 20_4</h3>
            <p class="set_info">투썸 기프트세트20_4호<br>투썸 에이리스트 핸드드립 커피 블랙그라운드 1pack [1pack X 5개입]<br>투썸 에이리스트 핸드드립 커피 아로마노트 2pack [1pack X 5개입]<br>투썸 에이리스트 스틱커피 5pack [1pack X 10개입]</p>
            <p class="nutri_f"></p>
           </section><!--//set_2_info-->
        </section><!--//set_2-->
        
        <section class="set_3">
           <div class="menu_img">
           <div class="set3_img zero"></div>
           </div>
           <section class="set_3_info">
            <div class="info_close"></div>
            <h3><span class="set">투썸 기프트세트20_3호</span><br>TWOSOME GIFT SET 20_3</h3>
            <p class="set_info">투썸 기프트세트20_3호<br>투썸 에이리스트 핸드드립 커피 블랙그라운드 1pack [1pack X 5개입]<br>투썸 에이리스트 핸드드립 커피 아로마노트 1pack [1pack X 5개입]<br>투썸 밤부 스텐텀블러 1개 I 용량 500ml<br>이중 진공 구조로 생활 보온 보냉이 가능하고 손잡이가 달려있어 휴대가 용이한 텀블러</p>
            <p class="nutri_f"></p>
           </section><!--//set_3_info-->
        </section><!--//set_3-->
        
        <section class="set_4">
           <div class="menu_img">
           <div class="set4_img zero"></div>
           </div>
           <section class="set_4_info">
            <div class="info_close"></div>
            <h3><span class="set">투썸 기프트세트20_2호</span><br>TWOSOME GIFT SET 20_2</h3>
            <p class="set_info">투썸 기프트세트20_2호<br>투썸 에이리스트 핸드드립 커피 블랙그라운드 2pack [1pack X 5개입]<br>투썸 롱 스텐머그 1개 I 용량 600ml<br>실내에서 사용하기 좋은 이중 스텐 구조로 생활 보온 보냉 효과가 좋은 대용량 머그</p>
            <p class="nutri_f"></p>
           </section><!--//set_4_info-->
        </section><!--//set_4-->
        
            <p class="b_menu_title">투썸 기프트세트20_5호</p>
            <p class="b_menu_title">투썸 기프트세트20_4호</p>
            <p class="b_menu_title">투썸 기프트세트20_3호</p>
            <p class="b_menu_title1">투썸 기프트세트20_2호</p>
            
        <section class="set_5">
           <div class="menu_img">
           <div class="set5_img zero"></div>
           </div>
           <section class="set_5_info">
            <div class="info_close"></div>
            <h3><span class="set">투썸 기프트세트20_1호</span><br>TWOSOME GIFT SET 20_1</h3>
            <p class="set_info_f">투썸 기프트세트20_1호<br>투썸 에이리스트 핸드드립 커피<br>블랙그라운드 1pack x 5개입<br>투썸 베이직 스텐머그(GOLD) 1개 I 용량 360ml<br>생활 보온 보냉이 가능하며 고급스러운 브론즈 컬러와<br>유선형 쉐입의 손잡이형 스테인리스 머그</p>
            <p class="nutri_f">MD판매 상품 표시 사항<br>제품명: 투썸 베이직 스텐머그(GOLD)<br>제조사 : RUSHAN YUANHAO TRADING CO.,LTD<br>원산지 : 중국<br>수입원 : (주)제이엔 /<br>서울시 성수일로 77 서울숲IT벨리 10층 1009호<br>반품 및 교환처 : 투썸플레이스 구입 매장<br>고객센터 : 1577-4410<br>(구입일로부터 14일 이내 영수증 지참 시 가능)<br>식품위생법에 따른 수입신고를 필함</p>
           </section><!--//set_5_info-->
        </section><!--//set_5-->
        
        <section class="set_6">
           <div class="menu_img">
           <div class="set6_img one"></div>
           </div>
           <section class="best_sticker"></section>
           <section class="set_6_info">
            <div class="info_close"></div>
            <h3><span class="set">투썸 기프트세트 19_6호</span><br>Twsosme Gift19_1</h3>
            <p class="set_info">2019 추석 시즌을 맞이하여 투썸에서 추석선물세트 출시<br>실속형과 프리미엄형 이원화 컨셉으로 큐레이션한 실속형 선물세트<br>풍부한 바디감과 은은한 단맛이 균형감을 이루는 투썸 스틱커피 10팩 구성</p>
            <p class="nutri_f"></p>
           </section><!--//set_6_info-->
        </section><!--//set_6-->
        
        <section class="set_7">
           <div class="menu_img">
           <div class="set7_img zero"></div>
           </div>
           <section class="set_7_info">
            <div class="info_close"></div>
            <h3><span class="set">투썸 기프트세트 19_5호</span><br>Twsosme Gift19_5</h3>
            <p class="set_info">2019 추석 시즌을 맞이하여 투썸에서 추석선물세트 출시<br>실속형과 프리미엄형 이원화 컨셉으로 큐레이션한 고급 선물세트<br>홈카페가 트렌드로 가정용 커피메이커의<br>선두주자인 비알레띠 브랜드 제품으로 커피 추출이 편리하며<br>원두의 맛을 고스란히 담아 낼수 있는<br>스테인레스필터의 드리퍼1,000ml<br>아로마노트 원두 200g 구성<br>주의사항 : 직화사용 금지 / 외주 충격 주의</p>
            <p class="nutri_f"></p>
           </section><!--//set_7_info-->
        </section><!--//set_7-->
        
        <section class="set_8">
           <div class="menu_img">
           <div class="set8_img zero"></div>
           </div>
           <section class="set_8_info">
            <div class="info_close"></div>
            <h3><span class="set">투썸 기프트세트 19_4호</span><br>Twsosme Gift19_4</h3>
            <p class="set_info">2019 추석 시즌을 맞이하여 투썸에서 추석선물세트 출시<br>실속형과 프리미엄형 이원화 컨셉으로 큐레이션한 고급형 선물세트<br>원두 이원화의 블랙그라운드, 아로마노트 원두의 캡슐 커피 4팩과<br>에스프레소와 어울리는 룽고잔과 소서 세트<br>주의사항 : 밀폐 불가 / 보온/보냉 불가</p>
            <p class="nutri_f"></p>
           </section><!--//set_8_info-->
        </section><!--//set_8-->
        
            <p class="b_menu_title">투썸 기프트세트20_1호</p>
            <p class="b_menu_title">투썸 기프트세트 19_6호</p>
            <p class="b_menu_title">투썸 기프트세트 19_5호</p>
            <p class="b_menu_title1">투썸 기프트세트 19_4호</p>
            
        <section class="set_9">
           <div class="menu_img">
           <div class="set9_img zero"></div>
           </div>
           <section class="set_9_info">
            <div class="info_close"></div>
            <h3><span class="set">투썸 기프트세트 19_3호</span><br>Twsosme Gift19_3</h3>
            <p class="set_info">2019 추석 시즌을 맞이하여 투썸에서 추석선물세트 출시<br>실속형과 프리미엄형 이원화 컨셉으로 큐레이션한<br>실속형 선물세트<br>신제품인 원두 이원화의 블랙그라운드, 아로마노트<br>핸드드립 파우치 2팩과 우드 재질의 환경 보호를<br>연상시키는 텀블러 구성<br>주의사항 : 텀블러 외관 나무 충격 주의<br>보온/보냉 불가</p>
            <p class="nutri_f"></p>
           </section><!--//set_9_info-->
        </section><!--//set_9-->
        
        <section class="set_10">
           <div class="menu_img">
           <div class="set10_img zero"></div>
           </div>
           <section class="set_10_info">
            <div class="info_close"></div>
            <h3><span class="set">투썸 기프트세트 19_2호</span><br>Twsosme Gift19_2</h3>
            <p class="set_info">2019 추석 시즌을 맞이하여 투썸에서 추석선물세트 출시<br>실속형과 프리미엄형 이원화 컨셉으로 큐레이션한 실속형 선물세트<br>투썸 스틱커피 3팩과 가을을 담은 대용량 텀블러 세트 구성<br>차량 컵 홀더 거치가 용이한 외관 쉐입이 특징인 텀블러<br>주의사항 : 진공텀블러로 탄산음료 사용 불가<br>음료, 환경에 따라 보온/보냉 기능 차이 있음</p>
            <p class="nutri_f"></p>
           </section><!--//set_10_info-->
        </section><!--//set_10-->
        
        <section class="set_11">
           <div class="menu_img">
           <div class="set11_img zero"></div>
           </div>
           <section class="set_11_info">
            <div class="info_close"></div>
            <h3><span class="set">투썸 기프트세트 19_1호</span><br>Twsosme Gift19_1</h3>
            <p class="set_info">2019 추석 시즌을 맞이하여 투썸에서 추석선물세트 출시<br>실속형과 프리미엄형 이원화 컨셉으로<br>큐레이션한 실속형 선물세트<br>투썸 콜드브루500ml와 글라스 드링킹자,<br>스테인리스 스트로우와 브러시 세트로 구성한 제품<br>주의사항 : 밀폐 불가<br>보온/보냉 불가</p>
            <p class="nutri_f"></p>
           </section><!--//set_11_info-->
        </section><!--//set_11-->
        
        <section class="set_12">
           <div class="menu_img">
           <div class="set12_img zero"></div>
           </div>
           <section class="set_12_info">
            <div class="info_close"></div>
            <h3><span class="set">TWG 선물세트</span><br>TWG Gift Set</h3>
            <p class="set_info">- TWG 버라이어티 팩<br><br>1837블랙티, 프렌치 얼그레이, 잉글리시 블랙퍼스트,<br>카모마일, 그랜드웨딩, 이터널썸머 5EAx6종=30EA<br><br>1. 1837블랙 티 : 홍차, 딸기<br>2. 프렌치 얼그레이 티 : 홍차, 베르가모트, 수레국화<br>3. 잉글리쉬 블랙퍼스트 티 : 홍차<br>4. 카모마일 : 카모마일 잎<br>5. 그랜드 웨딩 티 : 홍차, 망고, 해바라기, 포트마리골드, 설탕<br>6. 이터널 썸머 티 : 루이보스 잎, 히비스커스 꽃잎, 레드커런트, 장미 꽃잎</p>
            <p class="nutri_f"></p>
           </section><!--//set_12_info-->
        </section><!--//set_12-->
        
            <p class="b_menu_title">투썸 기프트세트 19_3호</p>
            <p class="b_menu_title">투썸 기프트세트 19_2호</p>
            <p class="b_menu_title">투썸 기프트세트 19_1호</p>
            <p class="b_menu_title1">TWG 선물세트</p>
        
        </section><!--//m_set-->
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
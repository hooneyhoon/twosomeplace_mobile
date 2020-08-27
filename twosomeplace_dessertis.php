<?php

session_start(); 
$s_id = isset($_SESSION["uid"])? $_SESSION["uid"]:"";
$s_name = isset($_SESSION["uname"])? $_SESSION["uname"]:"";
$s_idx = isset($_SESSION["idx"])? $_SESSION["idx"]:"";

?>
<!DOCTYPE >
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>투썸플레이스 디저트소개</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link
      rel="stylesheet"
      href="css/twosomeplace_dessertis.css"
      type="text/css"
    />
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
     <script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script type="text/javascript">
    //logout
    function logout_check(){
        var q = confirm("정말 로그아웃 하시겠습니까?");
            
        if(q){
                location.href = "logout.php";
            };
    };
        
      $(document).ready(function () {
        $(".gnb > ul >li").mouseenter(function () {
          $(".gnb ul ul,.nav_bg,.line").stop().slideDown(250);
        });
        $(".gnb > ul >li").mouseleave(function () {
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
    
    <div class="dessertis_title_bg"></div>
    <section class="dessertis_sub_title">
        <p class="sub_title_1"><span class="redTxt_b">투썸플레이스</span>의 전문적이고 다양한 디저트를 소개합니다!</p>
    </section>
    <section class="twosome_intro">
        <h2>투썸플레이스 디저트소개</h2>
        <p class="dessert_intro">
            투썸디저트는 <span class="bTxt">전문 파티쉐</span>가 직접 만들어 완성도를 높인 <span class="bTxt">케이크</span>는 물론 <span class="bTxt">마카롱, 정통 이탈리안 티라미수와 아포카토,<br>상큼한 과일이 토핑된 빙수</span>와 입안에서 부드럽게 녹는 <span class="bTxt">초콜릿</span>까지 다양한 디저트를 만나볼 수 있습니다.
        </p>
    </section><!--//twosome_intro-->
    <section class="dessert_intro">
        <h2>투썸플레이스 디저트 종류 소개</h2>
        <div class="cake_macaron_wrap">
        <section class="cake_macaron_intro">
        <h3 class="bTxt">케이크 CAKE</h3>
        <p class="cake_text">
            전통 유럽풍 디저트의 레시피로 하나하나 완성도 높으면서도<br>새로운 스타일의 맛과 멋을 살린 프리미엄 스타일의 달콤한디저트,<br>가족, 친구, 연인, 여럿이 모여 투썸의 프리미엄 케이크가 더욱 즐겁고<br>달콤한 시간을 선사합니다.
        </p>
        <h3 class="bTxt">마카롱 MACARON</h3>
        <p>
            프랑스 왕실에서 즐겨 먹던 마카롱은 아몬드 가루와 설탕, 달걀흰자로 구워 만든<br>수제 디저트 입니다. 눈길을 사로잡는 생생한 컬러, 한입 베어 물었을때 녹아<br>내리듯 부서지는 크런치함, 풍부한 크림의 촉촉한 부드러움, 입안 가득 퍼지는<br>달콤함을 소중한 분들께 선물하세요!
        </p>
        </section><!--//cake_macaron_intro-->
        </div><!--//cake_macaron_wrap-->
        <div class="choco_icecream_wrap">
        <section class="choco_icecream_intro">
            <h3 class="bTxt">초콜릿 CHOCOLATE</h3>
            <p class="choco_text">
                벨기에산 초콜릿과 엄선된 원료로 만들어낸 프리미엄 컬렉션.<br>취향에 따라 고를 수 있는 다양한 맛의 프랄린 &amp; 생 초콜릿,<br>쇼콜라티에의 노련함이 선사하는 최상의 부드러움을 느낄 수 있는<br>투썸의 프리미엄 초콜릿 컬렉션을 경험해보세요.
            </p>
            <h3 class="bTxt">아이스크림 ICECREAM</h3>
            <p>
                건강한 유산균이 들어있는 요거아이스크림부터 뜨거운 에스프레소의 진한<br>커피향이 어우러진 아포카토, 제철원료와 달콤한 디저트 토핑이 올라간 빙수까지<br>투썸만의 차별화된 맛을 볼 수 있습니다.
            </p>
        </section><!--//choco_icecream_intro-->
        </div><!--//choco_icecream_wrap-->
    </section><!--//dessert_intro-->
    <section class="dessert_signature">
        <h2>TWO SOME PLACE<br><span class="bTxt">Signature Coffee</span></h2>
        <section class="straw_cake">
            <h3>생크림 딸기 초코케익</h3>
            <p class="strawcake_txt">
                한가득 올린 상큼한 딸기, 크런치 초코볼이<br>초콜릿 시트 안에 알알이 씹히는<br>투썸 <span class="bTxt">베스트 생크림 케이크</span> 입니다.<br>남녀노소 누구나 좋아하는 투썸 시그니처 케이크,<br><span class="bTxt">언제나 1등을 놓치지 않는 베스트 셀러</span>입니다.
            </p>  
        </section><!--//straw_cake-->
        <section class="tiramisu">
            <h3>티라미수</h3>
            <p class="tiramisu_txt">
                18세기 이탈리아의 대표적인 가정식 디저트에서<br>출발해 프랑스에 옮겨가 본격적으로 디저트로<br>발달한 티라미수는 에스프레소 시럽에 담갔다<br>꺼낸 케이크 사이에 크림치즈를 채워 층을 만들고<br>그위에 초콜릿을 씌운 케이크를 말합니다.<br>맛을 보면 말을 잊을 정도라는 이 디저트는<br><span class="bTxt">날아갈 것 처럼 기분이 좋아지다</span> 라는 뜻을<br>가지고 있고 <span class="bTxt">투썸의 대표적인 케이크</span> 입니다. 
            </p>
        </section><!--//tiramisu-->
    </section><!--//dessert_signature-->
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

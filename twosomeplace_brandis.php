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
    <title>투썸플레이스 브랜드소개</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link
      rel="stylesheet"
      href="css/twosomeplace_brandis.css"
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
    
    <div class="brandis_title_bg"></div>
    <section class="brandis_sub_title">
        <p class="sub_title_1">프리미엄 디저트 카페 <span class="redTxt_b">투썸플레이스</span>를 소개합니다.</p>
    </section>
    <section class="brandis_info">
        <h2>TWOSOMEPLACE</h2>
        <ul>
            <li class="info1">- 투썸플레이스 소개 -</li>
            <li class="info2">- 투썸플레이스 역사 -</li>
            <li class="info3">- 투썸플레이스 BI -</li>
        </ul>
    </section><!--//brandis_info-->
    <section class="brandis_introduce">
        <h2>투썸플레이스 소개</h2>
        <h3>SMALL INDULGENCE</h3>
        <p class="small_text1">
            나만의 즐거움을 만날 수 있는 프리미엄 디저트 카페
        </p>
        <p class="small_text2">
            “ A cup of coffee , TWO of us , SOME dessert , PLACE ”
        </p>
        <p class="small_text3">
            전문 파티쉐의 손길로 완성도를 높인 케이크, 마카롱 등의 디저트와 깊고 풍부하게 본연의<br>맛과 향을 살린 커피, 유럽의 고풍스러운 카페에 온듯한 따뜻하고 편안한 분위기로 나만의 작은 즐거움(사치)을<br>만날 수 있는 특별한 공간을 제공합니다. 또한, 투썸플레이스는 ‘디저트 카페’의 리딩 브랜드로써,<br>선도적 디저트 문화와 함께 더욱 차별화된 제품과 서비스를 선보일 것입니다.
        </p>
        <h3>TWOSOME PAIRING</h3>
        <p class="pairing_text1">
             섬세하게 정성껏 내린 커피와 그에 어울리는 프리미엄 디저트의 조화
        </p>
        <dl class="pairing">
           <div class="pairing1">
            <dt class="pairing_title">투썸의 노하우가 담긴 최상의 커피</dt>
                <dd class="pairing_sub_txt">
                    투썸플레이스만의 맛있는 커피는 최상의 원두와<br>최적의 로스팅 포인트, 뛰어난 풍미를 살려내는<br>에스프레소 추출 능력, 이 세가지가 다채롭게<br>조화되어 만들어 집니다. 또한 다크 로스팅과 미디움<br>로스팅으로 제공되는 원두를 선택하여 취향에 맞는<br>커피를 즐길 수 있습니다.
                </dd>
            </div><!--//pairing1-->
            <div class="pairing2">
            <dt class="pairing_title">다양한 프리미엄 디저트</dt>
                <dd class="pairing_sub_txt">
                    전문 파티쉐가 매장에서 직접 만들어 완성도를<br>높인 케이크는 물론, 프랑스 고급 디저트인 마카롱,<br>정통 이탈리안 티라미수와 아포카토, 달콤바삭한<br>머랭디저트 파블로바와 입 안에서 부드럽게 녹는<br>생 초콜릿까지, 어디에도 없는 다양하고<br>차별화된 디저트를 만나볼 수 있습니다.
                </dd>
            </div><!--//pairing2-->
            <div class="pairing3">
            <dt class="pairing_title">자신만의 스타일로<br>더욱 멋지게 즐길 수 있는 ‘페어링’</dt>
                <dd class="pairing_sub_txt">
                    섬세하게 만들어내는 다양한 레시피의 커피메뉴와<br>선택의 폭이 넓은 프리미엄 디저트를 한 공간에서<br>즐길 수 있는 투썸플레이스에서는 저마다 좋아하는<br>커피에 그에 가장 잘 어울리는 디저트를 매칭하여,<br>더욱 풍부한 맛과 개성, 색다른 디저트 경험을<br>즐길 수 있습니다.
                </dd>
            </div><!--//pairing3-->
        </dl>
        
    </section><!--//brandis_introduce-->
    <section class="brandis_history1">
      <h2>투썸플레이스 역사소개</h2>
       <div class="history1_wrap">
        <h3>투썸플레이스 브랜드성장 소개</h3>
        <dl>
            <dt class="history1_sub_title">
                프리미엄 디저트 카페 탄생
            </dt>
            <dd class="history1_txt">
                소비자에게 커피전문점 조차 익숙치 않았던 2002년, Cafe with cake &amp; sandwich 라는 컨셉으로<br>전문 파티쉐가 매장에서 직접 만드는 케이크와 샌드위치를 제공하는 디저트 카페로 새로운 카페 문화를<br>선보인 투썸플레이스. 당시에는 생소했던 오픈 주방 시스템으로 고객의 신뢰를 더하고 다양한 프리미엄<br>케이크와 샌드위치, 디저트 메뉴를 선보여 오픈과 동시에 매니아 층이 형성되기도 했습니다. 
            </dd>
            <dt class="history1_sub_title">
                커피전문점의 새로운 기준을 마련하다.
            </dt>
            <dd class="history1_txt">
                2009년 가맹사업을 시작하면서 아카데미 프로그램을 강화하여 모든 매장에서 기존 브랜드 강점을<br>최대한 구현하고자 했고 2010년에는 BI / SI 리뉴얼과 함께 더욱 강화된 정통 유럽식 디저트와<br>유럽풍 살롱을 현대적으로 재해석한 세련되고 시크한 인테리어로 프리미엄 디저트 카페의 새로운<br>기준을 마련했습니다. 2016년 2월 신논현역에 커피 전문성을 강화하여 새롭게 선보인<br>로스터리 카페는 커피와 관련된 모든 것을 한자리에서 경험하고 즐길수 있는<br>투썸만의 커피문화공간으로, 커피와 어울리는 프리미엄 디저트와<br>매장에서 갓 구운 신선한 베이커리를 함께 즐길 수 있으며, 카페문화를 선도하는<br>투썸의 플래그십 매장으로 주목받고 있습니다.
            </dd>
            <dt class="history1_sub_title">
                국내를 넘어 세계로 향하다.
            </dt>
            <dd class="history1_txt">
                2002년 1호점 시작으로 현재 750여개 매장을 운영하는 투썸플레이스는<br>2011년 중국 1호점을 시작으로 해외시장에 프리미엄 디저트 문화를<br>전파하고 있습니다. 대한민국 프리미엄 디저트 카페를<br>넘어 글로벌 디저트 카페로서 세계로 도약하고 있습니다. 
            </dd>
        </dl>
        </div><!--//history1_wrap-->
    </section><!--//brandis_history1-->
    <section class="brandis_history2">
        <h3>TWO SOME PLACE<br><span class="redTxt">HISTORY</span></h3>
        <dl>
            <dt>2016</dt>
            <dd>투썸 로스터리 카페 신논현점 오픈</dd>
            <dd>투썸플레이스 700호점 돌파</dd>
            <dt>2015</dt>
            <dd>투썸 포스코사거리점 오픈</dd>
            <dd>투썸플레이스 600호점 돌파</dd>
            <dt>2014</dt>
            <dd>투썸플레이스 뉴 SI</dd>
            <dd>가로수길점, 광주상무점 오픈</dd>
            <dd>투썸플레이스 500호점 돌파</dd>
            <dt>2013</dt>
            <dd>투썸 스튜디오(홍대 테디점)오픈</dd>
            <dd>투썸플레이스 400호점 돌파</dd>
            <dt>2012</dt>
            <dd>해외 첫 복합 매장 중국 리두 오픈</dd>
            <dd>투썸플레이스 200호점 돌파</dd>
            <dt>2011</dt>
            <dd>투썸 중국 1호점 오픈</dd>
            <dt>2010</dt>
            <dd>BI / SI Renewal</dd>
            <dd>투썸플레이스 100호점 돌파</dd>
            <dt>2008</dt>
            <dd>투썸플레이스 가맹사업 시행(신사역 가맹1호점 오픈)</dd>
            <dt>2002</dt>
            <dd>투썸플레이스 브랜드 론칭(1호점 신촌점)</dd>
        </dl>
    </section><!--//brandis_history2-->
    <section class="brandis_BI">
       <div class="bi_wrap">
        <h2>투썸플레이스 BI소개</h2>
        <div class="bi_img"></div>
        <p class="bi_txt">
            다양한 커피마다 최적으로 어울리는 색다른 디저트까지! 나만의 즐거움을 만날수 있는<br>프리미엄 디저트 카페 투썸플레이스  입니다.
        </p>
        </div><!--//bi_wrap-->
    </section><!--//brandis_BI-->
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

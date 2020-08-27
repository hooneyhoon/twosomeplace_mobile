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
    <title>투썸플레이스 가맹점금융상품</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/twosomeplace_franchise_bankingproduct.css" type="text/css">
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
    <div class="bankingproduct_bg"></div>
    <div class="background">
    <div class="bankingproduct_wrap">
      <h2>가맹점 전용 금융상품</h2>
      <p class="bp_text1">CJ푸드빌 가맹점을 위한 특별한 금융상품에 대해 알려드립니다!</p>
      <p class="bp_text2">투썸플레이스 창업절차를 자세히 알려드립니다.</p>
      <div class="table_1">
      <h3>은행</h3>
      <ul>
          <li class="bank1">농협은행</li>
          <li class="bank2">하나은행</li>
          <li class="bank3">우리은행</li>
      </ul>
      </div><!--//table_1-->
      <div class="table_2">
      <h3>대출대상</h3>
      <dl>
          <dt>농협은행</dt>
          <dd class="table_2_n">투썸플레이스 예비창업자</dd>
          <dt>하나은행</dt>
          <dd class="table_2_h">투썸플레이스 예비창업자</dd>
          <dt>우리은행</dt>
          <dd class="table_2_w">투썸플레이스 예비창업자</dd>
      </dl>
      </div><!--//table_2-->
      <div class="table_3">
      <h3>대출한도 및 금액</h3>
      <dl>
          <dt>농협은행</dt>
          <dd class="table_3_n">창업자금: 최대1억2천</dd>
          <dt>하나은행</dt>
          <dd class="table_3_h">창업자금: 최대8천</dd>
          <dt>우리은행</dt>
          <dd class="table_3_w">창업자금:최대1억원<br>(창업소요자금2/3범위내)</dd>
      </dl>
      </div><!--//table_3-->
      <div class="table_4">
      <h3>대출금리</h3>
      <dl>
          <dt>농협은행</dt>
          <dd class="table_4_n">신용등급 4등급기준 4.7%</dd>
          <dt>하나은행</dt>
          <dd class="table_4_h">신용등급 3등급기준 3.90%</dd>
          <dt>우리은행</dt>
          <dd class="table_4_w">신용등급 1,2등급기준 3.75%<br>신용등급 3등급기준 3.99%<br>신용등급 4등급기준 4.29%</dd>
      </dl>
      </div><!--//table_4-->
      <div class="table_5">
      <h3>대출기간</h3>
      <dl>
          <dt>농협은행</dt>
          <dd class="table_5_n">창업자금<br>-할수상환: 5년이내(1년거치)<br>운영자금<br>-할부상환:3년이내,<br>일시상환(1년이내)</dd>
          <dt>하나은행</dt>
          <dd class="table_5_h">만기일시상환/부분원리금<br>분할상환(선택가능)<br>1~3년</dd>
          <dt>우리은행</dt>
          <dd class="table_5_w">만기일시상환<br>(마이너스대출포함):1년이내<br>분할상환:5년이내</dd>
      </dl>
      </div><!--//table_5-->
      <div class="table_6">
      <h3>대출문의</h3>
      <dl>
          <dt>농협은행</dt>
          <dd class="table_6_n">농협은행 1588-2100</dd>
          <dt>하나은행</dt>
          <dd class="table_6_h">김낙훈팀장(영업지원본부)<br>연락처:02-2002-1140</dd>
          <dt>우리은행</dt>
          <dd class="table_6_w">CJ금융센터 부지점장 차정광<br>연락처:02-2266-3200(내선510)</dd>
      </dl>
      </div><!--//table_6-->
      <div class="bank_text">
      <p class="bank_text_1">*대출한도 및 대출금리는 채무자의 신용등급에 따라 차등 적용됩니다.<br>*대출금액에 따른 인지대등 부대비용이 발생할 수 있습니다.<br>*대출금리 수준은 기준 금리 변동에 따라 변동할 수 있습니다.</p>
      </div><!--//bank_text-->
    </div><!--//bankingproduct_wrap-->
    </div><!--//background-->
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
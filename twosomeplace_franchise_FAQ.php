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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>투썸플레이스</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/twosomeplace_franchise_FAQ.css" type="text/css">
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
        
        $(".question h3").click(function(){
           $(".question p").not($(this).next()).slideUp("fast");
           $(this).next().slideToggle("fast");
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
     <div class="FAQ_bg"></div>
     <section class="qna_title">
     <h2>투썸플레이스 프랜차이즈 FAQ</h2>
     <p>카페 프랜차이즈 사업에 관심이 있는 여러분의 성공을 돕는 좋은 파트너가 되고자 합니다.</p>
    </section><!--//qna_title-->
     <div class="faq_icon"></div>
     <div class="question">
     <section class="qna1">
     <h3>Q. 가맹점을 창업하고 싶은데 어떻게 하면 되나요?</h3>
     <p>A. 점포가 있으신 경우 담당자에게 점포 위치와 연락처를 
     알려주시면 현장에서 상권 및 시장조사를 통하여 창업여부를 
    상담하여 드립니다. 점포가 없으신 경우 본사 또는 현장에서 
    담당자에게 신청서를 작성하여 창업상담을 받으실 수 있으며, 
    점포 물색에 도움을 줄 수 있습니다.</p>
    </section><!--//qna1-->
    <section class="qna2">
    <h3>Q. 매장 운영시간은 어떻게 되나요?</h3>
    <p>A. 투썸플레이스의 영업시간은 07:00~23:00으로 
     정해져 있으나, <br>상권의 특성에 따라 운영시간은 
     조절 가능하며, 운영시간의 조정은 <br>본사와의 
     협의 후 변경 가능합니다.</p>    
    </section>
    <section class="qna3">
    <h3>Q. 본사에서 직원 채용을 해주시나요?</h3>
    <p>A. 홀 운영직원과 아르바이트는 점주님께서 
     직접 채용하셔야 하며, <br>커피 아카데미를 통하여 매니저 인력을 
     추천해 드립니다. <br>또한 점포 규모와 예상 매출에 따라 
     본부에서 적정 직원 및 아르바이트 수를 제안해 드립니다.</p>    
    </section>
    <section class="qna4">
    <h3>Q. 점포 층수와 면적은 꼭 1층에 45평 이상이어야 하나요?</h3>
    <p>A. 실면적 45평 이하의 점포는 고객님들께 편안한 분위기를 
     제공하기 어려우며 좌석수의 한계로 인해 궁극적인 매출액 
     상승을 기대하기가 어렵기 때문에 45평을 기준으로 
     하고 있습니다. <br>단, 상권 및 입지에 따라 복층(1~2층)구조와 
      45평 이하로 창업이 <br>가능합니다.</p>
    </section>
    <section class="qna5">
    <h3>Q. 인테리어 공사는 본사를 통해서 해야하나요?</h3>
    <p>A. 인테리어 공사는 본사의 협력업체와 공개입찰을 통해 
     선정되어 <br>지원센터의 감리하에 진행하게 됩니다. 
     점주님께서 직접 공사하는 <br>것도 가능하나 투썸플레이스 
     전 매장과의 통일성을 위해 지원센터의 감리를 받으셔야 하며
     감리비용이 청구됩니다. 업체 선정은 복수 업체의 공개입찰 
     방식이며, 계약은 점주님과 공사업체가 직접하는 것이고 
     감리는 본사가 직접합니다.</p>    
    </section>
    <section class="qna6">
    <h3>Q. 계약기간과 재계약에 대해 알고 싶습니다.</h3>
    <p>A. 기본적인 가맹계약은 3년이며, 이후 1년 단위로 재계약을 
     <br>실시합니다. 재계약시 추가적인 비용은 발생하지 않으며, 
     <br>점포 상황에 따라 점포 내외부의 개보수를 할 수는 있습니다.</p>    
    </section>
    <section class="qna7">
    <h3>Q. 개설시 본사의 오픈지원은 어떻게 되나요?</h3>
    <p>A. 가맹점 오픈 시 본사 플로어 직원 2명, 주방직원 1명을 
     2주간 <br>파견하여, 오픈 초반 매장이 안정적으로 운영될 수 
     있도록 <br>파견 관리지원을 해드립니다.</p>    
    </section>
    </div><!--//question-->
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
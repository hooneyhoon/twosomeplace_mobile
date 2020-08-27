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
    <title>투썸플레이스 모바일APP소개</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/twosomeplace_service_mobileapp.css" type="text/css">
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
     <div class="mobileapp_bg"></div>
     <section class="mobileapp_intro">
     <div class="mobileapp_intro_wrap">
     <div class="mobileapp_wrap">
     <h2 class="mobile_title">모바일 투썸</h2>
        <p class="mobile_text">
        내 손 안의 투썸플레이스<br>모바일투썸은 투썸플레이스의 공식모바일 어플리케이션입니다.<br>쉽고 빠르게 주문하는 모바일주문 서비스 ‘<span class="mobile_s">투썸오더</span>’<br>혜택이 차곡 차곡 쌓이는 ‘<span class="mobile_s">투썸리워드</span>’와 ‘<span class="mobile_s">스탬프</span>’ 적립<br>다양한 종류의 투썸 케이크를 미리 주문할 수 있는 ‘<span class="mobile_s">예약 서비스</span>’<br>를 제공합니다. 이제 모바일투썸으로 더 편리하고 새로워진<br>투썸플레이스를 만나보세요!
        </p>
        <ul>
        <li class="ios">
            <a href="javascript:void(0);" class="download">App Store 다운로드</a>
        </li>
        <li class="android">
            <a href="javascript:void(0);" class="download">Google play 다운로드</a>
        </li>
        <li class="qrcorde">
            <p>QR코드</p>
        </li>
        </ul>
    </div><!--//mobileapp_wrap-->
     <section class="youtube">
         <iframe width="490" height="320" src="https://www.youtube.com/embed/5Qm7tV72-Aw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     </section>
     </div><!--//mobileapp_intro_wrap-->
     </section><!--//mobileapp_intro-->
     <section class="mobileapp_main">
     <h2>모바일 투썸 주요 기능</h2>
     <section class="giftcard">
     <section class="giftcard_icon"></section>
     <h3>투썸기프트카드</h3>
        <p class="giftcard_intro">
            투썸 기프트카드는 투썸플레이스 전 매장에서 현금처럼 사용이 가능한 충전식 선불카드 입니다.<br><span>모바일투썸에 등록된 기프트카드로 투썸플레이스 매장에서 결제하시면 다양한 투썸리워드 혜택을 받을 수 있습니다.</span><br>* 전국 투썸플레이스 매장 결제 시 이용가능 (단, 일부 특수점포 제외) 
        </p>
        <ul>
            <li class="giftcard_t1">
                <p>등록/구매</p>
                <ol>
                    <li>모바일투썸APP다운로드</li>
                    <li>모바일투썸 로그인</li>
                    <li>카드 등록</li>
                </ol>
            </li>
            <li class="giftcard_t2">
                <p>충전</p>
                <ol>
                    <li>MY CARD 메뉴 내 충전할 카드 선택</li>
                    <li>카드충전 버튼 선택</li>
                    <li>충전금액과 결제방법 선택후 결제</li>
                </ol>
            </li>
            <p class="giftcard_t2_txt">5만원 이상 자동충전을 설정하시면 충전시 마다 익일 투썸음료 1+1 쿠폰을 드립니다.</p>
            <li class="giftcard_t3">
                <p class="giftcard_t3_title">리워드 포인트 적립</p>
                <p class="giftcard_t3_txt1">리워드포인트 적립방법</p>
                <p class="giftcard_t3_txt2">
                    1. 구입하신 투썸 기프트카드를 모바일 투썸에 등록해주세요.<br>2. 매장 또는 투썸오더에서 투썸 기프트카드로 상품구매시 실결제금액(할인내역제외)에 대하여 1원=1포인트가 적립됩니다.<br>3. 구매 취소 시 적립된 포인트에 대해서도 자동 회수됩니다.<br>(단, 포인트 적립으로 발생된 레벨업 혜택쿠폰 사용시 구매 취소가 불가능합니다.)<br><span>4. 실결제금액 1원=1포인트</span>
                </p>         
            </li>
        </ul>
     </section><!--//giftcard-->
     <section class="reward_icon"></section>
     <section class="reward">
        <h3>투썸 리워드</h3>
        <p class="reward_txt1">
            상시 혜택<br>- 모바일투썸에 등록된 기프트카드 결제금액 <span>1원 당 1 포인트 적립</span><br>- 50,000 포인트를 적립하면, 익일 레벨 업!<br>- 레벨 승급일 기준, 아메리카노(R) 무료 쿠폰 발급<br>※ 투썸리워드는 총 100개의 레벨 (Lv.100부터는 AWESOME으로 표기)
        </p>
        <section class="reward_img"></section>
        <p class="reward_txt2">
            [유의사항]<br>투썸리워드의 포인트는 결제 시 사용이 불가하며, 결제금액 기준의 레벨 승급에만 적용<br>결제금액에 대한 1일/1회 레벨 승급 제한 없음<br>투썸리워드는 회사의 정책에 따라 변경될 수 있음<br>※ 투썸 기프트카드 자동 충전 5만원 이상 시, 투썸 음료 1+1 쿠폰 익일 발급
        </p>
    </section><!--//reward-->
    <section class="stamp_icon"></section>
    <section class="stamp">
        <h3>투썸 스탬프</h3>
        <p class="stamp_txt1">
            투썸 기프트카드로 결제 시, 참여 가능한 스탬프에 자동으로 적립됩니다.<br>특정 기간 동안 이벤트 상품을 구매 시 적립되는 스탬프에 따라 쿠폰 등의 혜택이 지급됩니다.<br>투썸모바일 내 스탬프 메뉴를 통하여 적립/사용 확인이 가능합니다.
        </p>
        <ul>
            <li class="stamp_t1">
                <p class="stamp_t1_1">스탬프의 종류</p>
                <p class="stamp_t1_2">
                    공통 스탬프<br>투썸플레이스 전 매장을 대상으로 진행되는 이벤트 스탬프
                </p>
                <p class="stamp_t1_3">
                    매장 스탬프<br>투썸플레이스 일부 점포에서 진행되는 매장별 이벤트 스탬프
                </p>
            </li>
            <li class="stamp_t2">
                <p class="stamp_t2_1">스탬프의 특징</p>
                <p class="stamp_t2_2">
                    1. 스탬프는 이동과 선물이 자유로워 편리하게 적립·사용할 수 있습니다.<br>2. 스탬프는 이벤트 해당 제품 구매 시 아래 순서에 따라 자동 적립됩니다.<br>(참여 공통 스탬프 - 참여 점포 스탬프 - 진행 공통 스탬프 - 진행 점포 스탬프)<br>3. 스탬프로 받은 혜택 쿠폰은 본인 사용은 물론 선물하기를 통해 선물이 가능합니다.
                </p>
            </li>
            <li class="stamp_t3">
                <p class="stamp_t3_1">유의사항</p>
                <p class="stamp_t3_2">
                   이벤트 해당 제품이 공통/매장 스탬프를 동시 진행할 경우, 스탬프 적립은 공통 스탬프에 자동 적립됩니다.<br>스탬프는 이벤트 해당 제품 구매 시 아래 우선순위에 따라 자동 적립됩니다.<br>(참여 공통 스탬프 - 참여 점포 스탬프 - 진행 공통 스탬프 - 진행 점포 스탬프)<br>스탬프로 받은 쿠폰은 본인 사용은 물론 선물하기를 통해 선물이 가능합니다. 
                </p>
            </li>
        </ul>
      </section><!--//stamp-->
      <section class="order_icon"></section>
      <section class="order">
        <h3>투썸 오더</h3>
        <p class="order_txt1">
            모바일투썸에서 미리 주문, 결제하고 인근 매장에 방문해 대기 없이 바로 주문한 메뉴를 수령할 수 있는<br>빠르고 편리한 모바일 주문 서비스입니다.
        </p>
        <section class="order_img"></section>
        <ol>
            <li>
                <p class="order_img_txt1">나만의 오더 매장, 단골 매장<br>주변 매장 목록에서 내가 원하는<br>매장을 쉽게 선택할 수 있습니다.</p>
            </li>
            <li>
                <p class="order_img_txt2">메뉴 리스트에서 원하는<br>메뉴를 터치하고<br>세부 옵션을 설정할 수 있습니다.</p>
            </li>
            <li>
                <p class="order_img_txt3">쿠폰, CJ ONE 포인트, 기프트카드<br>신용카드 등 원하는 결제 수단을<br>선택하여 결제할 수 있습니다.<br>투썸 기프트카드로 결제 시<br>CJ ONE 포인트, 투썸리워드 포인트,<br>스탬프를 동시에 적립할 수 있습니다.</p>
            </li>
            <li>
                <p class="order_img_txt4">결제완료 후 상품 준비과정을<br>확인할 수 있고, 상품 준비 완료 시<br>매장에서 수령 가능합니다.</p>
            </li>
        </ol>
      </section><!--//order-->
      <section class="cake_icon"></section>
     <section class="cake">
        <h3>투썸 홀케익 예약</h3>
        <p class="cake_txt">투썸플레이스의 다양한 케이크를 최소 3일 전에 주문, 픽업 예약할 수 있습니다.</p>
        <section class="cake_img"></section>
        <ol>
            <li>
                <p class="cake_img_txt1">원하는 매장을 선택하여 <br>주문할 수 있습니다.</p>
            </li>
            <li>
                <p class="cake_img_txt2">홀케이크예약 주문 시<br>파티용품 등 어울리는<br>다양한 부가상품을 함께<br>구매할 수 있습니다.</p>
            </li>
            <li>
                <p class="cake_img_txt3">쿠폰, CJ ONE 포인트, 기프트카드<br>신용카드 등 원하는 결제 수단을<br>선택하여 결제할 수 있습니다.<br>투썸 기프트카드로 결제 시<br>CJ ONE 포인트, 투썸리워드 포인트,<br>스탬프를 동시에 적립할 수 있습니다.</p>
            </li>
            <li>
                <p class="cake_img_txt4">원하는 예약날짜를 선택하고<br>결제완료 후 상품 준비과정을<br>확인할 수 있고, 상품 준비 완료 시<br>매장에서 수령 가능합니다.</p>
            </li>
        </ol>
    </section><!--//cake-->
    </section><!--//mobileapp_main-->
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
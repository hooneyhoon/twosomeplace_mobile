<?php

session_start(); 
$s_id = isset($_SESSION["uid"])? $_SESSION["uid"]:"";
$s_name = isset($_SESSION["uname"])? $_SESSION["uname"]:"";
$s_idx = isset($_SESSION["idx"])? $_SESSION["idx"]:"";

if(!$s_idx == 1 || !$s_id == 'admin'){
    echo "
    <script type='text/javascript'>
    alert('관리자외엔 접근 불가합니다.');
    location.href='index.php';
    </script>
";
    return false;
};

include "dbcon.php";

$sql = "select * from recuit order by idx desc;";

$result = mysqli_query($con,$sql);

$num = mysqli_num_rows($result);

$cnt = $num;

?>
<!DOCTYPE >
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>투썸플레이스 채용관리</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link
      rel="stylesheet"
      href="css/admin_recuit.css"
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
        
    function form_check(){
        var category = document.getElementById("category");
        var title = document.getElementById("title");
        var content = document.getElementById("content");
        
        if(!category.value){
            alert("카테고리를 선택해주세요.");
            category.focus();
            return false;
        };
        if(!title.value){
            alert("제목이 누락되었습니다.");
            title.focus();
            return false;
        }
        if(!content.value){
            alert("내용이 누락되었습니다.");
            content.focus();
            return false;
        };
        
        document.recuit_form.submit();
    }
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
    
    <div class="admin_recuit_title_bg"></div>
    <section class="admin_recuit">
       <h2>투썸플레이스 채용관리</h2>
       <p>
           <a href="administrator_mode.php" class="comeback">관리자 메뉴로 가기</a>
       </p>
       <hr>
       
       <section class="recuit_registration">
           <h3>투썸플레이스 채용등록</h3>
               
               <form name="recuit_form" action="admin_recuit_ok.php" method="post">
                   <fieldset class="form">
                       <legend>투썸플레이스 채용등록</legend>
                       <p class="category">
                           <label for="category" class="category_title"><span class="redTxt">*</span>카테고리</label>
                           <select name="category" id="category" class="sel_category">
                               <option value="">-- 채용 카테고리 선택 --</option>
                               <option value="[직영점] 바리스타 구인">[직영점] 바리스타 구인</option>
                               <option value="[직영점] 아르바이트 구인">[직영점] 아르바이트 구인</option>
                               <option value="[가맹점] 매니저 구인">[가맹점] 매니저 구인</option>
                               <option value="[가맹점] 바리스타 구인">[가맹점] 바리스타 구인</option>
                               <option value="[가맹점] 아르바이트 구인">[가맹점] 아르바이트 구인</option>
                           </select>
                       </p>
                       <p class="title_notice">
                           <label for="title" class="title_title"><span class="redTxt">*</span>제목</label>
                           <input type="text" name="title" id="title" class="title_input">
                       </p>
                       <p class="content">
                           <label for="content" class="content_title"><span class="redTxt">*</span>내용</label>
                           <textarea name="content" id="content" class="content_input"></textarea>
                       </p>
                   </fieldset>
                   <button type="button" onclick="form_check()" class="btn">공지등록</button>
               </form>
       </section><!--//notice_registration-->
       <hr>
       <section class="recuit_management">
        <h3>투썸플레이스 공지현황</h3>
        <section class="contents_title">
            <p class="c_t_1">번호</p>
            <p class="c_t_2">카테고리</p>
            <p class="c_t_3">제목</p>
            <p class="c_t_4">작성일</p>
            <p class="c_t_5">조회</p>
            <p class="c_t_6">수정</p>
            <p class="c_t_7">삭제</p>
        </section>
        <section>
           <?php
            for($i=1;$i<=$num;$i++){
            
            $array = mysqli_fetch_array($result);
                
            ?>
            <section class="contents">
                <p class="content_1"><?php echo $cnt; ?></p>
                <p class="content_2"><?php echo $array["category"]; ?></p>
                <p class="content_3"><?php echo $array["title"]; ?></p>
                <p class="content_4"><?php echo $array["date"]; ?></p>
                <p class="content_5"><?php echo $array["hit"]; ?></p>
                <p class="content_6">
                    <a href="edit_recuit.php?idx=<?php echo $array["idx"]; ?>" class="redTxt">수정</a>
                </p>
                <p class="content_7">
                <a href="delete_recuit.php?idx=<?php echo $array["idx"]; ?>" class="redTxt">삭제</a>
                </p> 
            </section><!--//contents-->
                <?php
            $cnt--
            ?>
            <?php
            }
            ?>   
           </section>
        </section><!--//recuit_management-->
    </section><!--//admin_recuit-->
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

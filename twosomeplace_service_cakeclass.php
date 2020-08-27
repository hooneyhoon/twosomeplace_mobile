<?php

session_start(); 
$s_id = isset($_SESSION["uid"])? $_SESSION["uid"]:"";
$s_name = isset($_SESSION["uname"])? $_SESSION["uname"]:"";
$s_idx = isset($_SESSION["idx"])? $_SESSION["idx"]:"";

if(!$s_idx){
    echo "
    <script type='text/javascript'>
    alert('로그인이 필요합니다.');
    location.href='twosomeplace_login.php';
    </script>
";
    return false;
};
?>
<!DOCTYPE >
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>투썸플레이스 케익클래스</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link
      rel="stylesheet"
      href="css/twosomeplace_service_cakeclass.css"
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
        var store = document.getElementById("store");
        var uname = document.getElementById("uname");
        var email_id = document.getElementById("email_id");
        var email_dns = document.getElementById("email_dns");
        var mobile = document.getElementById("mobile");
        var postalcode = document.getElementById("postalcode");
        var address_1 = document.getElementById("address_1");
        var address_2 = document.getElementById("address_2");
        var how_many = document.getElementById("how_many");
        var when = document.getElementById("when");
        var apply = document.getElementById("apply");
        
        if(!store.value){
            alert("클래스 매장선택이 누락되었습니다.");
            store.focus();
            return false;
        }
        if(!uname.value){
            alert("이름이 누락되었습니다.")
            uname.focus();
            return false;
        };
        if(!email_id.value){
            alert("이메일아이디가 누락되었습니다.")
            email_id.focus();
            return false;
        };
        if(!email_dns.value){
            alert("이메일도메인이 누락되었습니다.")
            email_dns.focus();
            return false;
        };
        if(!mobile.value){
            alert("휴대전화가 누락되었습니다.");
            mobile.focus();
            return false;
        };
        var reg = /^[0-9]+$/g;
        if (!reg.test(mobile.value)) {
          alert("숫자만 입력 가능합니다.");
          mobile.focus();
          return false;
        };
        if(!postalcode.value){
            alert("우편번호가 누락되었습니다.");
            postalcode.focus();
            return false;
        };
        if(!address_1.value){
            alert("주소가 누락되었습니다.");
            address_1.focus();
            return false;
        };
        if(!address_2.value){
            alert("상세주소가 누락되었습니다.");
            address_2.focus();
            return false;
        };
        if(!how_many.value){
            alert("클래스 신청인원이 누락되었습니다.");
            how_many.focus();
            return false;
        }
        var reg = /^[0-9]+$/g;
        if (!reg.test(how_many.value)) {
          alert("클래스 신청인원은 숫자만 입력 가능합니다.");
          how_many.focus();
          return false;
        };
        if(!when.value){
            alert("클래스 희망날짜가 누락되었습니다.");
            when.focus();
            return false;
        }
        if(when.value == "no"){
            alert("클래스가 마감되었습니다. 다른날짜로 선택바랍니다.");
            when.focus();
            return false;
        }
        if(!apply.checked){
            alert("약관의 동의가 누락되었습니다.");
            apply.focus();
            return false;
        };
        
        document.cake_class_form.submit();
    };
        
    //도메인
    function change_email(){
            var email_dns = document.getElementById("email_dns");
            var dns_select = document.getElementById("dns_select");
            
            var idx = dns_select.options.selectedIndex;
            var selected_value =dns_select.options[idx].value;
            
            email_dns.value = selected_value;
        };
        
    function search_address(){
        new daum.Postcode({
        oncomplete: function(data) {
             var addr = ''; // 주소 변수
                var extraAddr = ''; // 참고항목 변수

                //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    addr = data.roadAddress;
                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    addr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
                if(data.userSelectedType === 'R'){
                    // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                    // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                    if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                        extraAddr += data.bname;
                    }
                    // 건물명이 있고, 공동주택일 경우 추가한다.
                    if(data.buildingName !== '' && data.apartment === 'Y'){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                    if(extraAddr !== ''){
                        extraAddr = ' (' + extraAddr + ')';
                    }
                    // 조합된 참고항목을 해당 필드에 넣는다.
                    document.getElementById("address_1").value = extraAddr;
                
                } else {
                    document.getElementById("address_1").value = '';
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById('postalcode').value = data.zonecode;
                document.getElementById("address_1").value = addr;
                // 커서를 상세주소 필드로 이동한다.
                document.getElementById("address_2").focus();
        }
        }).open();
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
    <div class="cakeclass_title_bg"></div>
    <section class="cake_class_infomation">
    <div class="cake_class_intro_wrap">
    <section class="cake_class_intro">
    <h2>케이크 클래스 안내</h2>
    <p class="intro_1">
        INVITE YOU TO THE CAKE THEACHING CLASS
    </p>
    <p class="intro_2">
        투썸플레이스 <span class="redTxt">케이크교실</span>로 여러분을 초대합니다!
    </p>
    <p class="intro_3">
        * 단체 케이크교실 예약 가능
    </p>
    <div class="cake_img"></div>
    <p class="intro_4">
        투썸플레이스의 케이크 마스터와 함께하는 나만의 케이크 만들기!<br>특별한 날 직접 만든 케이크와 함께 하세요.
    </p>
    <section class="class_reservation_info">
    <h3>케익 예약 정보</h3>
    <ul>
        <li class="info_bottom"><span class="space1">&#8226; 언제</span>매주 수요일진행, 클래스 스케쥴은 매장별로 상이</li>
        <li class="info_bottom"><span class="space2">&#8226; 어디서</span>케이크교실 진행 매장 (하단에서 확인)</li>
        <li class="info_bottom"><span class="space">&#8226; 신청방법</span>매장방문 및 전화신청 및 케이크 클래스 신청서 작성</li>
        <li class="info_bottom"><span class="space">&#8226; 참가인원</span>최소인원 4명 이상 최대 8명까지 가능</li>
        <li><span class="space2">&#8226; 참가비</span>30,000원</li>
    </ul> 
    </section><!--//class_reservation_info-->
    <p class="intro_5">
        * 단체 케이크교실 신청 가능합니다.
    </p>
    </section><!--//cake_class_intro-->
    </div><!--//cake_class_intro_wrap-->
    <section class="cake_class_store_check">
    <h2>케이크 교실 진행 매장</h2>
    <p class="check_txt">
        일정 : 최소 일주일전 스케쥴로 신청서 작성 및 전화문의나 매장 방문 바랍니다.
    </p>
    <h3>케이크 클래스 진행 매장 안내</h3>
    <ul>
        <li class="store1">종로알파빌딩점<br>02-725-2388</li>
        <li class="store2">명동대연각타워점<br>02-318-2388</li>
        <li class="store3">광화문점<br>02-734-2368</li>
        <li class="store4">여의도점<br>02-782-2332</li>
        <li class="store5">부산화명수정점<br>051-365-2388</li>
        <li class="store6">서울대점<br>02-884-2385</li>
        <li class="store7">강남대륭타워점<br>02-538-2369</li>
        <li class="store8">역삼성홍타워점<br>02-508-2388</li>
    </ul>
    </section><!--//cake_class_store_check-->
    <div class="cake_class_application_wrap">
    <section class="cake_class_application">
    <h2>케이크 클래스 신청 <span class="cake_title">cake class application</span></h2>
    <form name="cake_class_form" action="cake_class_apply_ok.php" method="post">
    <fieldset class="cake_class_form1">
    <legend>케이크 클래스 신청서</legend>
    <p class="store">
        <label for="store" class="store_title"><span class="redTxt">*</span>케이크 클래스 매장 선택</label>
        <select name="store" id="store" class="store_choice">
            <option value="">매장을 선택해주세요.</option>
            <option value="종로알파빌딩점_02-725-2388">종로알파빌딩점</option>
            <option value="명동대연각타워점_02-318-2388">명동대연각타워점</option>
            <option value="광화문점_02-734-2368">광화문점</option>
            <option value="여의도점_02-782-2332">여의도점</option>
            <option value="부산화명수정점_051-365-2388">부산화명수정점</option>
            <option value="서울대점_02-884-2385">서울대점</option>
            <option value="강남대륭타워점_02-538-2369">강남대륭타워점</option>
            <option value="역삼성홍타워점_02-508-2388">역삼성홍타워점</option>
        </select>
    </p>
    <p class="uname">
        <label for="uname" class="uname_title"><span class="redTxt">*</span>이름</label>
        <input type="text" name="uname" id="uname" class="uname_input">
    </p>
    <p class="mobile">
        <label for="mobile" class="mobile_title"><span class="redTxt">*</span>휴대전화</label>
        <input type="text" name="mobile" id="mobile" class="mobile_input">
        <span class="mobile_txt">"-" 생략 숫자만 입력해주세요.</span>
    </p>
    <p class="email">
        <label for="email_id" class="email_title"><span class="redTxt">*</span>이메일</label>
        <input type="text" name="email_id" id="email_id" class="email_input1">
        <label for="email_dns" class="email_c">@</label>
        <input type="text" name="email_dns" id="email_dns" class="email_input2">
        <select name="dns_select" id="dns_select" onchange="change_email()" class="dns_choice">
            <option value="">직접입력</option>
            <option value="naver.com">네이버</option>
            <option value="gmail.com">구글</option>
            <option value="hanmail.net">다음</option>
            <option value="nate.com">네이트</option>
        </select>
    </p>
    <p class="postalcode">
       <label for="postalcode" class="postalcode_title"><span class="redTxt">*</span>우편번호</label>
        <input type="text" name="postalcode" id="postalcode" class="postalcode_input">
        <button type="button" onclick="search_address()" class="search_address">주소검색</button> 
    </p>
    <p class="address_1">
        <label for="address_1" class="address_1_title"><span class="redTxt">*</span>주소</label>
        <input type="text" name="address_1" id="address_1" class="address_1_input">
    </p>
    <p class="address_2">
        <label for="address_2" class="address_2_title"><span class="redTxt">*</span>상세주소</label>
        <input type="text" name="address_2" id="address_2" class="address_2_input">
    </p>
    <p class="how_many">
        <label for="how_many" class="how_many_title"><span class="redTxt">*</span>클래스 신청 인원</label>
        <input type="text" name="how_many" id="how_many" class="how_many_input">
    </p>
    <p class="when">
        <label for="when" class="when_title"><span class="redTxt">*</span>클래스 희망날짜</label>
        <select name="when" id="when" class="when_choice">
            <option value="">희망 주차를 선택해주세요.</option>
            <option value="no">1주차 수요일 -마감-</option>
            <option value="2주차 수요일 -가능-">2주차 수요일 -가능-</option>
            <option value="3주차 수요일 -가능-">3주차 수요일 -가능-</option>
            <option value="no">4주차 수요일 -마감-</option>
        </select>
        <span class="when_txt">조기마감시 클래스 스케쥴 변동이 있습니다.</span>
    </p>      
    </fieldset>
    <fieldset class="cake_class_form2">
        <legend class="apply_title">개인 정보 수집 동의</legend>
        <p class="apply_txt">
            1.개인정보의 수집 및 이용 목적<br>가맹점 개설에 관한 상담서비스 이용을 위한 본인 식별, 상담내용전달, 점포오픈 관련 정보 안내, 의사소통 경로 확보, 기타 원활한 양질의 서비스 제공 등<br>2. 수집하는 개인 정보의 항목<br>이름(한글/한문/영문), 휴대폰번호, 주소, 클래스 신청 인원, 클래스 희망날짜, 클래스 매장<br>3. 개인정보의 보유 및 이용시간<br>원칙적으로 개인정보의 수집목적 또는 제공받은 목적이 달성 시(창업설명회 종료시) 지체 없이 파기합니다.<br>- 고객님께서는 본 개인정보 수집 및 제공 동의에 거부하실 수 있으며, 거부시 서비스 이용에 제한될 수 있음을 알려드립니다.
        </p>
        <p class="apply">
            <input type="checkbox" name="apply" id="apply" value="Y" class="apply_input">
            <label for="apply">동의 합니다.</label>
        </p>
    </fieldset>
    <button type="button" onclick="form_check()" class="btn">케익클래스 신청</button>    
    </form>        
    </section><!--//cake_class_application-->
    </div><!--//cake_class_application_wrap-->
    </section><!--//cake_clas_info-->
      
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

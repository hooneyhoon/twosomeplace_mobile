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
    <title>투썸플레이스 온라인창업상담</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link
      rel="stylesheet"
      href="css/twosomeplace_franchise_online_application.css"
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
    
    $(document).ready(function(){
        var store = document.getElementById("store");
        var store_not = document.getElementById("store_not");
        
        store.onclick=function(){
        store_not.checked=false;
        }
        
        store_not.onclick=function(){
        store.checked=false;
        }
        
    });
        
    function form_check(){
        var user = document.getElementById("user");
        var email_id = document.getElementById("email_id");
        var email_dns = document.getElementById("email_dns");
        var mobile = document.getElementById("mobile");
        var call_time = document.getElementById("call_time");
        var postalcode = document.getElementById("postalcode");
        var address_1 = document.getElementById("address_1");
        var address_2 = document.getElementById("address_2");
        var store = document.getElementById("store");
        var store_not = document.getElementById("store_not");
        var postalcode2 = document.getElementById("postalcode2");
        var address2_1 = document.getElementById("address2_1");
        var address2_2 = document.getElementById("address2_2");
        var space = document.getElementById("space");
        var s_name = document.getElementById("s_name");
        var hope_location = document.getElementById("location");
        var apply = document.getElementById("apply");
        
        if(!user.value){
            alert("이름이 누락되었습니다.")
            user.focus();
            return false;
        };
        if(!email_dns.value){
            alert("이메일아이디가 누락되었습니다.")
            email_id.focus();
            return false;
        };
        if(!mobile.value){
            alert("휴대전화가 누락되었습니다.");
            return false;
        };
        if(!call_time.value){
            alert("연락가능한 시간대가 누락되었습니다.");
            call_time.focus();
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
        if(!store.checked == !store_not.checked){
            alert("가맹지소유 여부가 누락되었습니다.");
            return false;
        };
        if(store.checked && !postalcode2.value){
            alert("가맹지 우편번호가 누락되었습니다.");
            return false;
        };
        if(store.checked && !address2_1.value){
            alert("가맹지 주소가 누락되었습니다.");
            return false;
        };
        if(store.checked && !address2_2.value){
            alert("가맹지 상세주소가 누락되었습니다.");
            return false;
        };
        if(store.checked && !space.value){
            alert("가맹지 평수가 누락되었습니다.");
            return false;
        };
        if(store.checked && !s_name.value){
            alert("가맹지 현 상호가 누락되었습니다.");
            return false;
        };
        var reg = /^[0-9]+$/g;
        if (store.checked && !reg.test(space.value)) {
          alert("숫자만 입력 가능합니다.");
          space.focus();
          return false;
        };
        if(!hope_location.value){
            alert("가맹지 희망지역이 누락되었습니다.");
            hope_location.focus;
            return false;
        };
        if(!apply.checked){
            alert("약관의 동의가 누락되었습니다.");
            apply.focus();
            return false;
        };
        
        document.online_form.submit();
    };
    //도메인
    function change_email(){
            var email_dns = document.getElementById("email_dns");
            var email_sel = document.getElementById("email_sel");
            
            var idx = email_sel.options.selectedIndex;
            var selected_value =email_sel.options[idx].value;
            
            email_dns.value = selected_value;
        };
        
    function addr_search(){
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
    function addr2_search(){
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
                    document.getElementById("address2_1").value = extraAddr;
                
                } else {
                    document.getElementById("address2_1").value = '';
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById('postalcode2').value = data.zonecode;
                document.getElementById("address2_1").value = addr;
                // 커서를 상세주소 필드로 이동한다.
                document.getElementById("address2_2").focus();
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
      <div class="background"></div>

      <section class="title_text_bg">
        <h2>온라인 창업 상담</h2>
        <p>
          온라인 창업 상담 신청하시면 창업에 관련된 궁금한 점을 자세히
          알려드리겠습니다.
        </p>
      </section>
      <!--//title_text_bg-->
      <div class="online_a_wrap">
        <section class="online_a">
          <h3>
            온라인 창업 상담 신청
            <span class="info_txt">Online Start-up Counseling Application</span>
          </h3>

          <form name="online_form" action="online_application_ok.php" method="post">
            <fieldset class="online_a_first">
              <legend class="online_title">창업 희망자 정보</legend>
              <p class="uname">
                <label for="user" class="uname_title"><span class="redTxt">*</span>이름</label>
                <input type="text" name="user" id="user" class="uname_input"/>
              </p>
              <p class="email">
                <label for="email" class="email_title"><span class="redTxt">*</span>이메일</label>
                <input type="text" name="email_id" id="email_id" class="email_input1">
                <label for="email_dns" class="email_c">@</label>
                <input type="text" name="email_dns" id="email_dns" class="email_input2">
                <select name="email_sel" id="email_sel" onchange="change_email()" class="sel_dns">
                  <option value="">직접입력</option>
                  <option value="naver.com">naver.com</option>
                  <option value="hanmail.net">hanmail.net</option>
                  <option value="gmail.com">gmail.com</option>
                  <option value="nate.com">nate.com</option>
                </select>
              </p>
              <p class="mobile">
                <label for="mobile" class="mobile_title"><span class="redTxt">*</span>휴대전화</label>
                <input type="text" name="mobile" id="mobile" class="mobile_input">
                  <span class="add_txt">"-" 생략</span>
              </p>
              <p class="call_time">
                <label for="time" class="call_time_title"><span class="redTxt">*</span>연락 가능한 시간대</label>
                <select name="call_time" id="call_time" class="call_time_select">
                <option value="">연락가능한 시간대를 선택해주세요.</option>
                <option value="09:00 부터 11:00 사이">09:00 ~ 11:00</option>
                <option value="13:00 부터 15:00 사이">13:00 ~ 15:00</option>
                <option value="15:00 부터 18:00 사이">15:00 ~ 18:00</option>   </select>
              </p>
              <p class="postalcode">
                    <label for="postalcode" class="postalcode_title"><span class="redTxt">*</span>우편번호</label>
                    <input type="text" name="postalcode" id="postalcode" class="postalcode_input">
                    <button type="button" onclick="addr_search()" class="search_address">주소검색</button>
                </p>
                <p class="address">
                    <label for="address_1" class="address_title"><span class="redTxt">*</span>주소</label>
                    <input type="text" name="address_1" id="address_1" class="address_input">
                </p>
                <p class="d_address">
                    <label for="address_2" class="d_address_title"><span class="redTxt">*</span>상세주소</label>
                    <input type="text" name="address_2" id="address_2" class="d_address_input">
                </p>
            </fieldset>

            <fieldset class="online_a_middle">
              <legend class="online_title">가맹지 후보지 정보</legend>
              <p class="store_hold">
                <span class="redTxt">*</span>가맹지 소유 여부
                <input type="checkbox" name="store_hold" id="store" value="Y" class="store_check1" />
                <label for="store" class="store1">본인 소유</label>
                <input type="checkbox" name="store_hold" id="store_not" value="N" class="store_check2"/>
                <label for="store_not" class="store2">본인 미 소유</label>
              </p>
              <p class="postalcode2">
                    <label for="postalcode2" class="postalcode2_title">가맹지 우편번호</label>
                    <input type="text" name="postalcode2" id="postalcode2" class="postalcode2_input">
                    <button type="button" onclick="addr2_search()" class="search_address2">주소검색</button>
                </p>
                <p class="address2">
                    <label for="address2_1" class="address2_title">가맹지 주소</label>
                    <input type="text" name="address2_1" id="address2_1" class="address2_input">
                </p>
                <p class="d_address2">
                    <label for="address2_2" class="d_address2_title">가맹지 상세주소</label>
                    <input type="text" name="address2_2" id="address2_2" class="d_address2_input">
                </p>
              <p class="store_space">
                <label for="space" class="store_space_title">가맹지 평형</label>
                <input type="text" name="space" id="space" class="store_space_input" />
                  <span class="add_txt">평 (숫자로만 기입)</span>
              </p>
              <p class="store_name">
                <label for="s_name" class="store_name_title">현 가맹지 상호</label>
                <input type="text" name="s_name" id="s_name" class="store_name_input" />
              </p>
              <p class="hope">
                <label for="location" class="hope_title"><span class="redTxt">*</span>가맹지 희망지역</label>
                <input type="text" name="location" id="location" class="hope_input"
                />
              </p>
            </fieldset>

            <fieldset class="online_a_bottom">
              <legend class="online_apply">개인정보 수집 동의</legend>
              <p class="apply_txt">
                창업의뢰 관련 개인정보 수집동의<br />1.개인정보의 수집 및 이용
                목적<br />
                가맹점 개설에 관한 상담서비스 이용을 위한 본인 식별,
                상담내용전달, 점포오픈 관련 정보 안내, 의사소통 경로 확보, 기타
                원활한 양질의 서비스 제공 등<br />
                2. 수집하는 개인 정보의 항목<br />
                이름(한글/한문/영문), 전화번호, 휴대폰번호, 이메일주소, 주소,
                연락가능시간, 가맹점후보지 정보<br />
                3. 개인정보의 보유 및 이용시간<br />
                원칙적으로 개인정보의 수집목적 또는 제공받은 목적이 달성
                시(창업상담 종료시) 지체 없이 파기합니다.<br />
                - 고객님은 개인정보 수집 동의에 대해 거부하실 수 있으나, 미동의
                시 온라인 창업상담 서비스 이용에 제한이 있습니다.<br />
              </p>
              <p class="apply">
                <input type="checkbox" name="apply" id="apply" value="Y"/>
                <label for="apply">동의합니다.</label>
              </p>
            </fieldset>

            <button type="button" class="btn" onclick="form_check()">온라인 창업상담 신청</button>
          </form>
        </section>
        <!--//online_a-->
      </div>
      <!--//online_a_wrap-->
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

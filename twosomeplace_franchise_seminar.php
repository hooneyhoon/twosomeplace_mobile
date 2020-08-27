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
    <title>투썸플레이스 창업설명회</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link
      rel="stylesheet"
      href="css/twosomeplace_franchise_seminar.css"
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
        var choice_date = document.getElementById("choice_date");
        var uname = document.getElementById("uname");
        var mobile = document.getElementById("mobile");
        var email_id = document.getElementById("email_id");
        var email_dns = document.getElementById("email_dns");
        var postalcode = document.getElementById("postalcode");
        var address_1 = document.getElementById("address_1");
        var address_2 = document.getElementById("address_2");
        var hope_area = document.getElementById("hope_area");
        var hold = document.getElementById("hold");
        var funds = document.getElementById("funds");
        var apply = document.getElementById("apply");
        
        if(!choice_date.value){
            alert("설명회 예약날짜를 선택해주세요.");
            choice_date.focus();
            return false;
        };
        if(choice_date.value == 'close'){
            alert("이미 종료한 스케쥴입니다. 다른 예약날짜를 선택해주세요.");
            choice_date.focus();
            return false;
        };
        if(!uname.value){
            alert("이름이 누락되었습니다.");
            uname.focus();
            return false;
        };
        if(!mobile.value){
            alert("휴대전화가 누락되었습니다.");
            mobile.focus();
            return false;
        };
        if(!email_id.value){
            alert("이메일 아이디가 누락되었습니다.");
            email_id.focus();
            return false;
        };
        if(!email_dns.value){
            alert("이메일 도메인이 누락되었습니다.");
            email_dns.focus();
            return false;
        };
        if(!postalcode.value){
            alert("우편번호가 누락되었습니다.");
            postalcode.focus();
            return false;
        };
        if (!address_1.value) {
          alert("주소가 누락되었습니다.");
          address_1.focus();
          return false;
        };  
        if (!address_2.value) {
          alert("상세주소가 누락되었습니다.");
          address_2.focus();
          return false;
        };
        if (!hope_area.value) {
          alert("창업 희망지역이 누락되었습니다.");
          hope_area.focus();
          return false;
        };
        if (!hold.value) {
          alert("점포보유 여부가 누락되었습니다.");
          hold.focus();
          return false;
        };
        if (!funds.value) {
          alert("창업 보유자금이 누락되었습니다.");
          funds.focus();
          return false;
        };
        if (!apply.value) {
          alert("약관의 동의가 필요합니다.");
          apply.focus();
          return false;
        };
        
        document.reservation_form.submit();
    };
   
    function change_email() {
        var sel_dns = document.getElementById("sel_dns");
        var email_dns = document.getElementById("email_dns");
        var idx = sel_dns.options.selectedIndex;
        var dns = sel_dns.options[idx].value;

        email_dns.value = dns;
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
    
    <div class="seminar_title_bg"></div>
    <section class="seminar_sub_title">
        <p class="sub_title_1">당신의 창업 성공 스토리 <span class="redTxt">투썸플레이스</span>가 함께 합니다.</p>
        <p class="sub_title_2">투썸플레이스 창업설명회는 해당 날짜에 참석 예약 후 간단한 필기도구를 지참하셔서 방문하시기 바랍니다.<br>자세한 문의는 <span class="redTxt_b">080-723-2323</span>으로 연락바랍니다.</p>
    </section>
    <div class="background">
    <section class="reservation_schedule">
        <h2>5월 취업 설명회 예약 스케쥴</h2>
        <section class="may">
            <ul>
                <li class="may_1">5월1주차 / 1일 금요일 / 일정종료</li>
                <li class="may_3">5월3주차 / 15일 금요일 / 예약가능</li>
                <li class="may_5">5월5주차 / 29일 금요일 / 예약가능</li>
            </ul>
        </section><!--//may-->
        <form name="reservation_form" method="post" action="seminar_reservation_ok.php">
            <fieldset class="reservation_input_1">
                <legend>취업설명회 예약하기</legend>
                <p class="input_1">
                    <label for="choice_date" class="input1_title"><span class="redTxt">*</span>취업설명회 예약 날짜 선택</label>
                    <select name="choice_date" id="choice_date" class="input1_select">
                        <option value="">설명회 예약날짜 선택하세요.</option>
                        <option value="close">5월1주차 / 1일 금요일 / 일정종료</option>
                        <option value="5월3주차_15일_금요일_예약">5월3주차 / 15일 금요일 / 예약가능</option>
                        <option value="5월5주차_29일_금요일_예약">5월5주차 / 29일 금요일 / 예약가능</option>
                    </select>
                </p>
                <p class="input_2">
                    <label for="uname" class="input2_title"><span class="redTxt">*</span>이름</label>
                    <input type="text" name="uname" id="uname" class="input2_input">
                </p>
                <p class="input_3">
                    <label for="mobile" class="input3_title"><span class="redTxt">*</span>휴대전화</label>
                    <input type="text" name="mobile" id="mobile" class="input3_input">
                </p>
                <p class="input_4">
                    <label for="email" class="input4_title"><span class="redTxt">*</span>이메일</label>
                    <input type="text" name="email_id" id="email_id" class="input4_input_1">
                    <label for="email_dns" class="email_c">@</label>
                    <input type="text" name="email_dns" id="email_dns" class="input4_input_2">
                    <select name="sel_dns" id="sel_dns" onchange="change_email()" class="sel_dns">
                        <option value="">직접입력</option>
                        <option value="naver.com">naver.com</option>
                        <option value="hanmail.net">hanmail.net</option>
                        <option value="gmail.com">gmail.com</option>
                        <option value="nate.com">nate.com</option>
                     </select>
                </p>
                <p class="input_5">
                    <label for="postalcode" class="input5_title"><span class="redTxt">*</span>우편번호</label>
                    <input type="text" name="postalcode" id="postalcode" class="input5_input_1">
                    <button type="button" onclick="addr_search()" class="search_address">주소검색</button>
                </p>
                <p class="input_6">
                    <label for="address_1" class="input6_title"><span class="redTxt">*</span>주소</label>
                    <input type="text" name="address_1" id="address_1" class="input6_input_1">
                </p>
                <p class="input_7">
                    <label for="address_2" class="input7_title"><span class="redTxt">*</span>상세주소</label>
                    <input type="text" name="address_2" id="address_2" class="input7_input">
                </p>
                <p class="input_8">
                    <label for="hope_area" class="input8_title"><span class="redTxt">*</span>창업 희망 지역</label>
                    <input type="text" name="hope_area" id="hope_area" class="input8_input">
                </p>
                <p class="input_9">
                    <label for="hold" class="input9_title"><span class="redTxt">*</span>점포 보유 여부</label>
                    <select name="hold" id="hold" class="input9_select">
                        <option value="">점포 보유 유무를 고르세요.</option>
                        <option value="Y">점포 보유</option>
                        <option value="N">점포 비보유</option>
                    </select>
                </p>
                <p class="input_10">
                    <label for="funds" class="input10_title"><span class="redTxt">*</span>창업 보유 자금</label>
                    <select name="funds" id="funds" class="input10_select">
                        <option value="">대략적인 보유자금을 선택해주세요.</option>
                        <option value="D">보유자금 1억이하</option>
                        <option value="C">보유자금 1억이상</option>
                        <option value="B">보유자금 2억이상</option>
                        <option value="A">보유자금 5억이상</option>
                    </select>
                </p>
            </fieldset>
            <fieldset class="reservation_input_2">
                <legend>개인 정보 수집 동의</legend>
                <p class="apply_txt">
                    1.개인정보의 수집 및 이용 목적<br>가맹점 개설에 관한 상담서비스 이용을 위한 본인 식별, 상담내용전달, 점포오픈 관련 정보 안내, 의사소통 경로 확보, 기타 원활한 양질의 서비스 제공 등<br>2. 수집하는 개인 정보의 항목<br>이름(한글/한문/영문), 휴대폰번호, 주소, 창업예정지역, 점포 보유여부, 창업보유자금, 사업설명회 참석일자<br>3. 개인정보의 보유 및 이용시간<br>원칙적으로 개인정보의 수집목적 또는 제공받은 목적이 달성 시(창업설명회 종료시) 지체 없이 파기합니다.<br>- 고객님께서는 본 개인정보 수집 및 제공 동의에 거부하실 수 있으며, 거부시 서비스 이용에 제한될 수 있음을 알려드립니다.
                </p>
                <p class="apply_check">
                    <input type="checkbox" name="apply" id="apply" value="Y">
                    <label for="apply">동의합니다.</label>
                </p>
            </fieldset>
            <button type="button" onclick="form_check()" class="seminar_btn">창업설명회 예약신청</button>
        </form>
    </section><!--//reservation_schedule--> 
    <section class="seminar_info">
        <h2>[정기 창업설명회]</h2>
        <p class="info_1">
            서울/수도권 창업설명회<br>
            설명회 장소 : 투썸플레이스 을지로사옥<br>
            설명회 주소 : 서울 중구 마른내로 34(초동 106-9) KT&amp;G 을지로타워 6층
        </p>
        <p class="info_2">
            찾아오시는 길 : 지하철 : 을지로 3가역 9번출구 도보5분, 충무로역 6번출구 도보10분<br>
            버스 : 충무로, 을지로 3가, 명동성당, 백병원 등 도보 5~7분 내 다수
        </p>
        <p>
            <a href="https://place.map.kakao.com/748607916" class="seminar_place">설명회 장소 위치보기</a>
        </p>
    </section><!--//seminar_info-->
    <section class="seminar_reservation_method">
        <h2>[참석 예약방법]</h2>
        <p>
            1)홈페이지: 상단에 내용 작성하여 <span class="redTxt_b">창업설명회 예약신청하기</span><br>
            2)전화: <span class="redTxt_b">080-723-2323</span> 으로 신청
        </p>
    </section><!--//seminar_reservation_method--> 
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

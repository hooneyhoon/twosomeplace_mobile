<?php

session_start(); 
$s_id = isset($_SESSION["uid"])? $_SESSION["uid"]:"";
$s_name = isset($_SESSION["uname"])? $_SESSION["uname"]:"";
$s_idx = isset($_SESSION["idx"])? $_SESSION["idx"]:"";

if(!$s_idx){
    echo "
    <script type='text/javascript'>
    alert('잘못된 접근입니다.');
    location.href='index.php';
    </script>
";
    return false;
};

include "dbcon.php";

$sql = "select * from twosome_members where idx='$s_idx';";


$result = mysqli_query($con, $sql);

$array = mysqli_fetch_array($result);

$email = explode("@",$array["email"]);

mysqli_close($con);

?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>투썸플레이스 MY투썸</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link
      rel="stylesheet"
      href="css/mytwosome.css"
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

      function form_check() {
        var pwd = document.getElementById("pwd");
        var repwd = document.getElementById("repwd");
        var mobile = document.getElementById("mobile");
        var email_id = document.getElementById("email_id");
        var email_dns = document.getElementById("email_dns");
        var postalcode = document.getElementById("postalcode");
        var address_1 = document.getElementById("address_1");
        var address_2 = document.getElementById("address_2");

        var cnt = /^[a-z0-9]{5,15}$/g;
        if (!cnt.test(pwd.value) && pwd.value) {
          alert("영문소문자,숫자조합으로 5~15글자수로만 만들수 있습니다.");
          pwd.focus;
          return false;
        };

        if (repwd.value != pwd.value) {
          alert("입력하신 비밀번호가 다릅니다.");
          repwd.focus();
          return false;
        };
        
        if (!email_dns.value) {
          alert("이메일도메인이 누락되었습니다.");
          email_dns.focus();
          return false;
        };
          
        if (!postalcode.value) {
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
        
        if (!email_id.value) {
          alert("이메일아이디가 누락되었습니다.");
          email_id.focus();
          return false;
        };

        var reg = /^[0-9]+$/g;
        if (!reg.test(mobile.value)) {
          alert("숫자만 입력 가능합니다.");
          mobile.focus();
          return false;
        };

        document.mytwosome_form.submit();
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
      <div class="title_bg"></div>
      <section class="sub_title">
        <p>
          회원님의 CJONE 포인트는 <span class="redTxt_b">"7,600P"</span>입니다.
        </p>
      </section>
      <!--//sub_title-->
      <div class="main_wrap_bg">
        <div class="main_wrap">
          <h2>
            CJ ONE 통합회원정보 수정
          </h2>
          <section class="join_box">
            <form name="mytwosome_form" action="mytwosome_ok.php" method="post">
              <fieldset class="member_info">
                <legend class="join_title">회원가입</legend>
                <p class="form1">
                  <label for="uname" class="uname">이름</label>
                  <span class="textbox_uname">
                    <?php echo $array["uname"]; ?>
                  </span>
                </p>
                <p class="form2">
                  <label for="uid" class="uid">아이디</label>
                  <span class="textbox_uid">
                    <?php echo $array["uid"]; ?>         
                  </span>
                </p>
                <p class="form3">
                  <label for="pwd" class="pwd">비밀번호</label>
                  <input
                    type="password"
                    name="pwd"
                    id="pwd"
                    class="textbox_pwd"
                    placeholder="비밀번호를 입력해주세요."
                  />
                  <span class="pwd_txt">영문소문자 + 숫자 5~15자 조합</span>
                </p>
                <p class="form4">
                  <label for="repwd" class="repwd">비밀번호 확인</label>
                  <input
                    type="password"
                    name="repwd"
                    id="repwd"
                    class="textbox_repwd"
                    placeholder="비밀번호를 재입력해주세요."
                  />
                </p>
                <p class="form5">
                  <lable for="mobile" class="mobile">휴대전화</lable>
                  <input
                    type="text"
                    name="mobile"
                    id="mobile"
                    class="textbox_mobile"
                    value="<?php echo $array["mobile"]; ?>"
                  />
                  <span class="mobile_txt">“-”생략 숫자만 입력해주세요.</span>
                </p>
                <p class="form6">
                  <label for="email_id" class="email_id">이메일</label>
                  <input
                    type="text"
                    name="email_id"
                    id="email_id"
                    class="textbox_email_id"
                    value="<?php echo $email[0] ?>"
                  />
                  <span class="email_txt">@</span>
                  <input
                    type="text"
                    name="email_dns"
                    id="email_dns"
                    class="textbox_email_dns"
                    value="<?php echo $email[1] ?>"
                  />
                  <select
                    name="sel_dns"
                    id="sel_dns"
                    onchange="change_email()"
                    class="sel_dns"
                  >
                    <option value="">직접입력</option>
                    <option value="naver.com">네이버</option>
                    <option value="hanmail.net">다음</option>
                    <option value="gmail.com">구글</option>
                  </select>
                </p>
                <p class="form7">
                  <label for="postalcode" class="postalcode">우편번호</label>
                  <input
                    type="text"
                    size="3"
                    name="postalcode"
                    id="postalcode"
                    class="textbox_postalcode"
                    value="<?php echo $array["postalcode"]; ?>"
                  />
                  <button
                    type="button"
                    name=""
                    id=""
                    onclick="addr_search()"
                    class="check_postalcode"
                  >
                    주소검색
                  </button>
                </p>
                <p class="form8">
                  <lable for="address_1" class="address_1">주소</lable>
                  <input
                    type="text"
                    size="30"
                    name="address_1"
                    id="address_1"
                    class="textbox_address_1"
                    value="<?php echo $array["address_1"]; ?>"
                  />
                </p>
                <p class="form9">
                  <lable for="address_2" class="address_2">상세주소</lable>
                  <input
                    type="text"
                    size="30"
                    name="address_2"
                    id="address_2"
                    class="texbox_address_2"
                    value="<?php echo $array["address_2"]; ?>"
                  />
                </p>
              </fieldset>
              <p class="form11">
                <button type="button" onclick="form_check()" class="joinbox">
                  회원 정보 수정
                </button>
              </p>
            </form>
          </section>
          <!--//join_box-->
        </div>
        <!--//main_wrap-->
      </div>
      <!--main_wrap_bg-->
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

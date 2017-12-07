<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width">
  <title>대양</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/css/reset.css">
  <link rel="stylesheet" type="text/css" href="/css/swiper.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <link rel="stylesheet" type="text/css" href="/css/jquery.fullPage.css" />
  <link rel="stylesheet" type="text/css" href="/css/responsive.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <script src="/js/swiper.min.js"></script>
  <script type="text/javascript" src="/js/jquery.fullPage.js"></script>
  <script type="text/javascript" src="/js/sly.js"></script>
</head>
<body>

  <header class="hidden-lg-down <?php if(!$this->uri->segment(2)) { echo 'index_header'; } ?>">
    <div class="pc_header_top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6">
            <div class="pc_header_top_left">
              <a href="/">
                <img src="/images/header/insta.png" alt="인스타그램">
              </a>
              <a href="/">
                <img src="/images/header/facebook.png" alt="페이스북">
              </a>
              <a href="/">
                <img src="/images/header/youtube.png" alt="유튜브">
              </a>
              <a href="/">
                <img src="/images/header/blog.png" alt="블로그">
              </a>
            </div>
          </div>
          <div class="col-6">
            <div class="pc_header_top_right">
              <a href="/">
                KOR
              </a>
              <a href="/">
                ENG
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-3">
          <a href="/">
            <img src="/images/header/logo.png" alt="홈으로">
          </a>
        </div>
        <div class="col-9">
          <div class="header_nav_wrapper">
            <ul class="header_nav header_nav1">
              <li>
                회사소개
                <ul class="depth_2">
                  <li class="under_line"></li>
                  <li><a href="/index/summary"><h6>회사개요</h6></a></li>
                  <li><a href="/index/greeting"><h6>CEO 인사말</h6></a></li>
                  <li><a href="/index/history"><h6>기업연혁</h6></a></li>
                  <li><a href="/index/domain"><h6>사업영역</h6></a></li>
                  <li><a href="/index/price"><h6>인증 및 수상</h6></a></li>
                  <li><a href="/index/map"><h6>오시는 길</h6></a></li>
                </ul>
              </li>
              <li>
                <a href="/index/products">
                  제품소개
                </a>
              </li>
              <li>
                고객지원
                <ul class="depth_2">
                  <li class="under_line"></li>
                  <li><a href="/index/service_intro"><h6>서비스 소개</h6></a></li>
                  <li><a href="/index/faq"><h6>FAQ</h6></a></li>
                  <li><a href="/index/ask"><h6>문의</h6></a></li>
                  <li><a href="/index/reference"><h6>자료실</h6></a></li>
                </ul>
              </li>
              <li>
                미디어센터
                <ul class="depth_2">
                  <li class="under_line"></li>
                  <li><a href="/index/notice"><h6>공지사항</h6></a></li>
                  <li><a href="/index/news"><h6>기업소식</h6></a></li>
                  <li><a href="/index/video"><h6>영상자료</h6></a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="mobile_header hidden-xl-up <?php if(!$this->uri->segment(2)) { echo 'index_header'; } ?>">
    <div class="va_container">
      <div class="va_row pl15">
        <a href="/">
          <img class="mobile_header_logo" src="/images/header/logo.png" alt="">
        </a>
      </div>
      <div class="va_row mobile_hamburger">
        <img class="menu_link" src="/images/header/ic_menu_black.png" alt="">
      </div>
    </div>
  </div>

  <div class="right_hamburger_menu">
    <ul class="right_menu1">
      <li class="hamburger solid_bottom">
        <h4><strong>MENU</strong></h4>
      </li>
      <li class="hamburger solid_bottom">
        <h5>회사소개</h5>
        <ul class="dp2">
          <li><a href="/index/summary"><h6>회사개요</h6></a></li>
          <li><a href="/index/greeting"><h6>CEO 인사말</h6></a></li>
          <li><a href="/index/history"><h6>기업연혁</h6></a></li>
          <li><a href="/index/domain"><h6>사업영역</h6></a></li>
          <li><a href="/index/price"><h6>인증 및 수상</h6></a></li>
          <li><a href="/index/map"><h6>오시는 길</h6></a></li>
        </ul>
      </li>
      <li class="hamburger solid_bottom">
        <a href="/index/products">
          <h5>제품소개</h5>
        </a>
      </li>
      <li class="hamburger solid_bottom">
        <h5>고객지원</h5>
        <ul class="dp2">
          <li><a href="/index/service_intro"><h6>서비스 소개</h6></a></li>
          <li><a href="/index/faq"><h6>FAQ</h6></a></li>
          <li><a href="/index/ask"><h6>문의</h6></a></li>
          <li><a href="/index/reference"><h6>자료실</h6></a></li>
        </ul>
      </li>
      <li class="hamburger solid_bottom">
        <h5>미디어센터</h5>
        <ul class="dp2">
         <li><a href="/index/notice"><h6>공지사항</h6></a></li>
         <li><a href="/index/news"><h6>기업소식</h6></a></li>
         <li><a href="/index/video"><h6>영상자료</h6></a></li>
       </ul>
     </li>
   </ul>
   <div class="right_menu2">
    <a href="/">
      <img src="/images/header/insta.png" alt="인스타그램">
    </a>
    <a href="/">
      <img src="/images/header/facebook.png" alt="페이스북">
    </a>
    <a href="/">
      <img src="/images/header/youtube.png" alt="유튜브">
    </a>
    <a href="/">
      <img src="/images/header/blog.png" alt="블로그">
    </a>
    <div class="right_menu2_btn">
      <button type="button" value="ko">KOR</button>
      <button type="button" value="en">ENG</button>
    </div>
  </div>
</div>
<div class="black_wrapper"></div>

<script type="text/javascript">
  $(document).ready(function () {
    $(".header_nav3 .on").prependTo(".lang_target");

    $(".menu_link").click(function () {
      $(".right_hamburger_menu").css({"right": "0"});
      $(".black_wrapper").css("display", "block");
      $(".black_wrapper").css({"opacity": "0.7"});
    });

    $(".black_wrapper").click(function () {
      $(".right_hamburger_menu").css({"right": "-100%"});
      $(".black_wrapper").css({"opacity": "0"});
      setTimeout(function () {
        $(".black_wrapper").css("display", "none");
      }, 355);
    });


    $(".header_nav_wrapper").hover(function () {
      $('.header_sub').css({"height": "350px"});
    }, function () {
      $('.header_sub').css({"height": "0px"});
    });

    $(".header_nav > li").hover(function () {
      $(this).find(".depth_2").css({"opacity": "1"});
    }, function () {
      $(this).find(".depth_2").css({"opacity": "0"});
    });

    $(".right_hamburger_menu li").click(function () {
      $(".dp2").css({"height": "0"});
      if($(this).find(".dp2").css("height")=="auto"){
        $(this).find(".dp2").css({"height": "0"});    
      }else {
        $(this).find(".dp2").css({"height": "auto"});    
      }
    });
  });
</script>

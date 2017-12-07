<script type="text/javascript">
    $(document).ready(function () {
        $('#fullpage').fullpage({
            anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
            menu: '#menu',
            afterLoad: function (anchorLink, index) {
                if (anchorLink != 'firstPage' || anchorLink != 'lastPage')
                    $(".mouse_img").animate({'opacity': 0});
                $(".scroll_img").animate({'opacity': 1});

                if (anchorLink == 'firstPage') {
                    $(".mouse_img").animate({'opacity': 1});
                    $(".scroll_img").animate({'opacity': 1});
                }
                ;

                if (anchorLink == 'lastPage') {
                    $(".mouse_img").animate({'opacity': 0});
                    $(".scroll_img").animate({'opacity': 0});
                }
            }
        });
    });
</script>

<ul id="menu" class="fullpage_pagination">
    <li data-menuanchor="firstPage" class="active"><a href="#firstPage"></a></li>
    <li data-menuanchor="secondPage"><a href="#secondPage"></a></li>
    <li data-menuanchor="3rdPage"><a href="#3rdPage"></a></li>
    <li data-menuanchor="4thpage"><a href="#4thpage"></a></li>
    <li data-menuanchor="lastPage"><a href="#lastPage"></a></li>
</ul>

<div class="scroll_down_img">
    <img class="mouse_img" src="/images/common/mouse.png" alt="스크롤을 내려주세요"><br>
    <img class="scroll_img" src="/images/common/scroll.png" alt="스크롤을 내려주세요">
</div>

<div id="fullpage">
    <div class="section active" id="section0">
        <div class="swiper-container top_swiper" style="height:100%;">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide_bg_01" style="height:100%; background-image: url(/images/main/top1.jpg);">
                    <div class="va_container">
                        <div class="va_row">
                            <h1>
                                IT IS LIFE THAT<br>
                                <span style="font-weight:700;">INNOVATES THE FUTURE</span>
                            </h1>
                            <h4>[ 미래를 혁신하는 것은 삶입니다. ]</h4>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide slide_bg_02" style="background-image: url(/images/main/top1.jpg);">
                    <div class="va_container">
                        <div class="va_row">
                            <h1>
                                IT IS LIFE THAT<br>
                                <span style="font-weight:700;">INNOVATES THE FUTURE</span>
                            </h1>
                            <h4>[ 미래를 혁신하는 것은 삶입니다. ]</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination top_pagination"></div>
            <div class="swiper_button">
                <button class="btn index_slide_btn ico_play ico_pause" type="button">버튼</button>
            </div>
            <div class="swiper-button-next top_swiper_next"></div>
            <div class="swiper-button-prev top_swiper_prev"></div>
        </div>
        <script>
            $(document).ready(function () {
                var swiper = new Swiper('.top_swiper', {
                    pagination: '.top_pagination',
                    nextButton: '.top_swiper_next',
                    prevButton: '.top_swiper_prev',
                    effect: 'fade',
                    paginationClickable: true,
                    speed: 1200,
                    loop: true,
                    autoplay: 4500
                });
                $('.index_slide_btn').click(function () {
                    $(this).toggleClass('ico_pause');
                    if ($(this).hasClass('ico_pause')) {
                        swiper.startAutoplay();
                    } else {
                        swiper.stopAutoplay();
                    }
                });
                $(".scroll_img").click(function () {
                    $.fn.fullpage.moveSectionDown();
                });
            });
        </script>
    </div>
    <div class="section products_section" id="section1">
        <div class="top_text_box">
            <h2>PRODUCTS</h2>
            <h5>대양의료기의 제품들은 삶의 혁신을 이끌어 냅니다.</h5>
        </div>
        <div class="container no_pd_box">
            <div class="row">
                <div class="col-sm-6 col-6">
                    <div class="img_overlay_wrapper">
                        <img src="/images/main/box1.jpg" alt="">
                        <div class="va_container">
                            <div class="va_row">
                                <h4>Medical<br><strong>Aesthetic</strong></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-6">
                    <div class="img_overlay_wrapper">
                        <img src="/images/main/box2.jpg" alt="">
                        <div class="va_container">
                            <div class="va_row">
                                <h4>Physio<br><strong>Therapy</strong></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-6">
                    <div class="img_overlay_wrapper">
                        <img src="/images/main/box3.jpg" alt="">
                        <div class="va_container">
                            <div class="va_row">
                                <h4>Cosmetic</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-6">
                    <div class="img_overlay_wrapper">
                        <img src="/images/main/box4.jpg" alt="">
                        <div class="va_container">
                            <div class="va_row">
                                <h4>Accessory</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="section news_section" id="section2">
        <div class="top_text_box">
            <h2>NEWS</h2>
            <h5>대양의료기가 만들어 가는 다양한 이야기를 전합니다.</h5>
        </div>
        <div class="news_swiper_wrapper">
            <div class="swiper-container main_swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href='/index/news_view'>
                            <div class="pic_text_div">
                                <div class="pic_bg_img" style="background-image: url('/images/main/pic1.jpg')"></div>
                                <div class="pic_text">
                                    <h6>언론보도</h6>
                                    <h5>KIMES 2017 참가</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href='/index/news_view'>
                        <div class="pic_text_div">
                            <div class="pic_bg_img" style="background-image: url('/images/main/pic2.jpg')"></div>
                            <div class="pic_text">
                                <h6>언론보도</h6>
                                <h5>KIMES 2017 참가</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href='/index/news_view'>
                        <div class="pic_text_div">
                            <div class="pic_bg_img" style="background-image: url('/images/main/pic3.jpg')"></div>
                            <div class="pic_text">
                                <h6>언론보도</h6>
                                <h5>KIMES 2017 참가</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href='/index/news_view'>
                        <div class="pic_text_div">
                            <div class="pic_bg_img" style="background-image: url('/images/main/pic3.jpg')"></div>
                            <div class="pic_text">
                                <h6>언론보도</h6>
                                <h5>KIMES 2017 참가</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href='/index/news_view'>
                        <div class="pic_text_div">
                            <div class="pic_bg_img" style="background-image: url('/images/main/pic3.jpg')"></div>
                            <div class="pic_text">
                                <h6>언론보도</h6>
                                <h5>KIMES 2017 참가</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next news_swiper_next"></div>
                <div class="swiper-button-prev news_swiper_prev"></div>
            </div>
        </div>

        <div class="news_btn_area">
            <button type="button" class="news_swiper_btn news_swiper_btn_prev">
                <img src="/images/common/prev_btn.png" alt="뒤로">
            </button>
            <a href='/index/news'>
                <button type="button" class="view_all_btn basic_btn">전체보기</button>
            </a>
            <button type="button" class="news_swiper_btn news_swiper_btn_next">
                <img src="/images/common/next_btn.png" alt="다음">
            </button>
        </div>        

        <script>
            var swiper = new Swiper('.main_swiper', {
                paginationClickable: true,
                speed: 1000,
                spaceBetween: 15,
                slidesPerView: 4,
                nextButton: '.news_swiper_next',
                prevButton: '.news_swiper_prev',
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 15
                    }
                }
            });

            $(".news_swiper_btn_prev").click(function () {
                $(".news_swiper_prev").trigger("click");
            });
            $(".news_swiper_btn_next").click(function () {
                $(".news_swiper_next").trigger("click");
            });
        </script>
    </div>

    <div class="section fp-auto-height" id="section3">
        <div class="main_contents_board_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><b>공지사항</b></h2>
                        <ul class="main_contents_board_list">
                            <li>
                                <a href="/index/notice_view">
                                    <span class="subject">저주파 자극기 AutoMote202 판매중지 및 제품회...</span>
                                    <span class="date">2017-07-20</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index/notice_view">
                                    <span class="subject">2010 국제 의료기기 · 병원설비전시회</span>
                                    <span class="date">2017-07-20</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index/notice_view">
                                    <span class="subject">강원 유망중소기업 인증</span>
                                    <span class="date">2017-07-20</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index/notice_view">
                                    <span class="subject">KOTRA 보증브랜드 선정</span>
                                    <span class="date">2017-07-20</span>
                                </a>
                            </li>
                            <li>
                                <a href="/index/notice_view">
                                    <span class="subject">차세대 세계일류 상품 및 생산기업 선정 (지식경제부)</span>
                                    <span class="date">2017-07-20</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <div class="help_box">
                            <h3>고객센터 이용안내</h3>
                            <h3>Tel. 033-747-4465~6</h3>
                            <h4>AM 09:00 ~ PM 06:00 (토/일/공휴일 제외)</h4>
                            <button type="button" class="basic_btn">온라인 문의</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

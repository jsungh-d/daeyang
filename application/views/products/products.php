
<section class="sub_top_area" style="background-image: url('/images/products/top_bg.jpg')">
    <div class="container">
        <h2>제품소개</h2>
        <h4>미래의 혁신은 삶으로부터, 삶의 혁신은 대양의료기로부터</h4>
    </div>
</section>

<nav id="frame" class="products_nav">
    <ul>
        <li class="category">
            <a href="">
                <h4>Medical Aesthetic</h4>
            </a>
        </li>
        <li class="category">
            <a href="">
                <h4>Physio Therapy</h4>
            </a>
        </li>
        <li class="category">
            <a href="">
                <h4>Cosmetic</h4>
            </a>
        </li>
        <li class="category category_select">
            <a href="">
                <h4>Accessory</h4>
            </a>
        </li>
    </ul>
    <!-- <img class="next" src="/images/common/next.png" alt="">
        <img class="prev" src="/images/common/prev.png" alt=""> -->
    </nav>
    <script type="text/javascript">
        $(document).ready(function () {
            var options = {
                horizontal: 1,
                itemNav: 'basic',
                speed: 300,
                mouseDragging: 1,
                touchDragging: 1,
                forward: $(".next"),
                backward: $(".prev")
            };
            var frame = new Sly('#frame', options).init();

            $(window).resize(function () {
                frame.reload();
            });
        });
    </script>

    <section class="pd_section">
        <div class="sub_top_title">
            <h3>Medical Aesthetic</h3>
            <span class="hori_line"></span>
        </div>

        <div class="sub_check_wrapper">
            <div class="swiper-container sub_check_swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="sub_check_div">
                        <label class="radio_custom">
                            <div class="sub_check_div_img">
                                <img src="/images/products/img1.jpg" alt="제품">
                            </div>
                            <div class="sub_check_div_text">
                                <input type="radio" value="" name="obj_gubun">
                                <h5>HIFU System</h5>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sub_check_div">
                        <label class="radio_custom">
                            <div class="sub_check_div_img">
                                <img src="/images/products/img2.jpg" alt="제품">
                            </div>
                            <div class="sub_check_div_text">
                                <input type="radio" value="" name="obj_gubun">
                                <h5>HIFU System</h5>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sub_check_div">
                        <label class="radio_custom">
                            <div class="sub_check_div_img">
                                <img src="/images/products/img1.jpg" alt="제품">
                            </div>
                            <div class="sub_check_div_text">
                                <input type="radio" value="" name="obj_gubun">
                                <h5>HIFU System</h5>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sub_check_div">
                        <label class="radio_custom">
                            <div class="sub_check_div_img">
                                <img src="/images/products/img2.jpg" alt="제품">
                            </div>
                            <div class="sub_check_div_text">
                                <input type="radio" value="" name="obj_gubun">
                                <h5>HIFU System</h5>
                            </div>
                        </label>
                    </div>
                </div>
                
            </div>
            <div class="sub_check_swiper_bottom"></div>
            <div class="swiper-pagination sub_nav_pagination"></div>
            <div class="swiper-button-next sub_nav_swiper_next"></div>
            <div class="swiper-button-prev sub_nav_swiper_prev"></div>
        </div>
        <script>
            var swiper = new Swiper('.sub_check_swiper', {
              paginationClickable: true,
              pagination: '.sub_nav_pagination',
              nextButton: '.sub_nav_swiper_next',
              prevButton: '.sub_nav_swiper_prev',
              speed: 1000,
              spaceBetween: 10,
              slidesPerView: 3,
              breakpoints: {
                768: {
                  slidesPerView: 3,
                  spaceBetween: 10
              }
          }
      });
            $(".sub_nav h4").click(function(){
                $(".sub_nav h4").removeClass("active");
                $(this).addClass("active");
            });
        </script>
    </div>
</section>

<section class="products_obj_section">
    <div class="products_wrapper">
        <div class="products_obj">
            <div class="va_container">
                <div class="va_row">
                    <div class="products_obj_img">
                        <img src="/images/products/img2.jpg" alt="제품">
                    </div>
                    <h5 class="products_obj_text">Vinu Shape</h5>
                    <div class="products_obj_btn">
                        <button type="button" onclick="location.href='/index/products_view'">
                            <img src="/images/common/search_line.png" alt="자세히보기">
                        </button>
                        <button type="button">
                            <img src="/images/common/book.png" alt="내려받기">
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="products_obj">
            <div class="va_container">
                <div class="va_row">
                    <div class="products_obj_img">
                        <img src="/images/products/img2.jpg" alt="제품">
                    </div>
                    <h5 class="products_obj_text">Vinu Shape</h5>
                    <div class="products_obj_btn">
                        <button type="button" onclick="location.href='/index/products_view'">
                            <img src="/images/common/search_line.png" alt="자세히보기">
                        </button>
                        <button type="button">
                            <img src="/images/common/book.png" alt="내려받기">
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="products_obj">
            <div class="va_container">
                <div class="va_row">
                    <div class="products_obj_img">
                        <img src="/images/products/img2.jpg" alt="제품">
                    </div>
                    <h5 class="products_obj_text">Vinu Shape</h5>
                    <div class="products_obj_btn">
                        <button type="button" onclick="location.href='/index/products_view'">
                            <img src="/images/common/search_line.png" alt="자세히보기">
                        </button>
                        <button type="button">
                            <img src="/images/common/book.png" alt="내려받기">
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="products_obj">
            <div class="va_container">
                <div class="va_row">
                    <div class="products_obj_img">
                        <img src="/images/products/img2.jpg" alt="제품">
                    </div>
                    <h5 class="products_obj_text">Vinu Shape</h5>
                    <div class="products_obj_btn">
                        <button type="button" onclick="location.href='/index/products_view'">
                            <img src="/images/common/search_line.png" alt="자세히보기">
                        </button>
                        <button type="button">
                            <img src="/images/common/book.png" alt="내려받기">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="products_obj">
            <div class="va_container">
                <div class="va_row">
                    <div class="products_obj_img">
                        <img src="/images/products/img2.jpg" alt="제품">
                    </div>
                    <h5 class="products_obj_text">Vinu Shape</h5>
                    <div class="products_obj_btn">
                        <button type="button" onclick="location.href='/index/products_view'">
                            <img src="/images/common/search_line.png" alt="자세히보기">
                        </button>
                        <button type="button">
                            <img src="/images/common/book.png" alt="내려받기">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="products_obj">
            <div class="va_container">
                <div class="va_row">
                    <div class="products_obj_img">
                        <img src="/images/products/img2.jpg" alt="제품">
                    </div>
                    <h5 class="products_obj_text">Vinu Shape</h5>
                    <div class="products_obj_btn">
                        <button type="button" onclick="location.href='/index/products_view'">
                            <img src="/images/common/search_line.png" alt="자세히보기">
                        </button>
                        <button type="button">
                            <img src="/images/common/book.png" alt="내려받기">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="products_obj">
            <div class="va_container">
                <div class="va_row">
                    <div class="products_obj_img">
                        <img src="/images/products/img2.jpg" alt="제품">
                    </div>
                    <h5 class="products_obj_text">Vinu Shape</h5>
                    <div class="products_obj_btn">
                        <button type="button" onclick="location.href='/index/products_view'">
                            <img src="/images/common/search_line.png" alt="자세히보기">
                        </button>
                        <button type="button">
                            <img src="/images/common/book.png" alt="내려받기">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="products_obj">
            <div class="va_container">
                <div class="va_row">
                    <div class="products_obj_img">
                        <img src="/images/products/img2.jpg" alt="제품">
                    </div>
                    <h5 class="products_obj_text">Vinu Shape</h5>
                    <div class="products_obj_btn">
                        <button type="button" onclick="location.href='/index/products_view'">
                            <img src="/images/common/search_line.png" alt="자세히보기">
                        </button>
                        <button type="button">
                            <img src="/images/common/book.png" alt="내려받기">
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="products_obj">
            <div class="va_container">
                <div class="va_row">
                    <div class="products_obj_img">
                        <img src="/images/products/img2.jpg" alt="제품">
                    </div>
                    <h5 class="products_obj_text">Vinu Shape</h5>
                    <div class="products_obj_btn">
                        <button type="button" onclick="location.href='/index/products_view'">
                            <img src="/images/common/search_line.png" alt="자세히보기">
                        </button>
                        <button type="button">
                            <img src="/images/common/book.png" alt="내려받기">
                        </button>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="boardPaging">
        <span class="disableBtnFirst">‹ First</span>
        <span class="disableBtnPrev">&lt;</span>
        <span class="on">1</span>
        <span>
            <a href="/index/index/page/10" >2</a>
        </span>
        <span>
            <a href="/index/index/page/20" >3</a>
        </span>
        <span class="btnNext">
            <a href="/index/index/page/10" >&gt;</a>
        </span>
        <span class="btnLast">
            <a href="/index/index/page/20" >Last ›</a>
        </span>
    </div>

    <div class="bottom_search_div">
        <select name="">
            <option value="모델명">모델명</option>
            <option value=""></option>
        </select>
        <input type="text" placeholder="검색어" name="">
        <button type="button">
            <img src="/images/common/search_white.png" alt="검색">
        </button>
    </div>
</section>


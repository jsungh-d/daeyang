
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

    <section class="pd_section products_top_section">
        <div class="sub_top_title">
            <h3>Radio Frequency System</h3>
            <span class="hori_line"></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="sub_check_wrapper products_view_swiper">
                        <div class="swiper-container sub_check_swiper">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="sub_check_div">
                                    <div class="sub_check_div_img">
                                        <img src="/images/products/img1.jpg" alt="제품">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sub_check_div">
                                    <div class="sub_check_div_img">
                                        <img src="/images/products/img2.jpg" alt="제품">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sub_check_div">
                                    <div class="sub_check_div_img">
                                        <img src="/images/products/img1.jpg" alt="제품">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="sub_check_div">
                                    <div class="sub_check_div_img">
                                        <img src="/images/products/img2.jpg" alt="제품">
                                    </div>
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
                          speed: 1000
                      });
                  </script>
              </div>
          </div>
          <div class="col-sm-6">

            <div class="products_title_div">
                <div class="title">
                    <h4>Multi Functional Combination System</h4>
                    <h3>VinuShape</h3>
                </div>
                <div class="between">
                    <div class="between_left">
                        <span>SNS공유</span>
                        <button type="button">
                            <img src="/images/common/facebook_mini.png" alt="페이스북">
                        </button>
                        <button type="button">
                            <img src="/images/common/twitter_mini.png" alt="트위터">
                        </button>
                    </div>
                    <div class="between_right">
                        <span>제품설명서</span>
                        <button type="button">
                            <img src="/images/common/book.png" alt="설명서 보기">
                        </button>
                    </div>
                </div>
                <div class="detail">
                    <h5>
                        VinuShape is a revolutionary cellulite treatment which has Multi-polar RF, Dynamic super pulse negative pressure, LED and Cavitation.
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="products_obj_section">
    <div class="container">
        <div class="poducts_detail_div">
           <h4>제품 개요</h4>
           <p>
            Optimal combination of Multi-polar RF, Vacuum and Cavitation induces synergistic effects such as Cellulite reduction and body 
            reshaping.
        </p>
        <p>
            Specially designed Multi-polar applicator for eyelids and neck lifting.
        </p>
        <p>
            Smooth and powerful vibration effects by Super Pulse suction system.
        </p>
        <p>
            Versatile treatment which can meet wide range of patients demand.
        </p>
        <p>
            Easy & convenient treatment through various applicators(Removable applicator and  automatic recognition function).
        </p>
        <p>
            Minimize vibration and noise technology applied.        
        </p>
    </div>
    <div class="poducts_detail_div">
       <h4>제품사양</h4>
       <p>
        Optimal combination of Multi-polar RF, Vacuum and Cavitation induces synergistic effects such as Cellulite reduction and body 
        reshaping.
    </p>
    <p>
        Specially designed Multi-polar applicator for eyelids and neck lifting.
    </p>
    <p>
        Smooth and powerful vibration effects by Super Pulse suction system.
    </p>
    <p>
        Versatile treatment which can meet wide range of patients demand.
    </p>
    <p>
        Easy & convenient treatment through various applicators(Removable applicator and  automatic recognition function).
    </p>
    <p>
        Minimize vibration and noise technology applied.        
    </p>
</div>
<div class="poducts_detail_div">
   <h4>관련영상</h4>
   <div class="video_area">

   </div>
</div>
<div class="products_view_btn">
    <a href="/index/products">
        <button type="button" class="darkblue_btn">목록</button>
    </a>
</div>
</div>
</section>


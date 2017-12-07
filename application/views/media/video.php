<section class="sub_top_area" style="background-image: url('/images/media/top_bg.jpg')">
    <div class="container">
        <h2>미디어센터</h2>
        <h4>미래의 혁신은 삶으로부터, 삶의 혁신은 대양의료기로부터</h4>
    </div>
</section>
<nav id="frame"  class="products_nav">
    <ul>
        <li class="category">
            <a href="/index/notice">
                <h4>공지사항</h4>
            </a>
        </li>
        <li class="category">
            <a href="/index/news">
                <h4>기업소식</h4>
            </a>
        </li>
        <li class="category category_select">
            <a href="/index/video">
                <h4>영상자료</h4>
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
            <h3><strong>영상자료</strong></h3>
            <span class="hori_line"></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <h4 class="video_title"><strong>제품시연 영상</strong></h4>
                   <div class="video_area">
                    <video id="video" controls>
                        <source src="/images/media/video/main.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="col-12">
                    <div class="swiper-container video_select_swiper">
                      <div class="swiper-wrapper">
                        <!-- 반복 시작 -->
                        <div class="swiper-slide">
                            <div class="video_select_div">
                                <label>
                                    <div class="video_select_img">
                                        <!-- 썸네일 이미지-->
                                        <div class="thumb_img" style="background-image:url('/images/media/video/1.jpg')"></div>
                                        
                                        <img class="play_img" src="/images/common/play-circle.png" alt="보기">
                                        <div class="overlay_black"></div>
                                    </div>
                                    <h5 class="video_text"><strong>홍보영상</strong></h5>
                                    <!-- value = 비디오의 주소값 -->
                                    <input class="video_addr" type="radio" name="video" value="/images/media/video/main.mp4">
                                </label>
                            </div>
                        </div>
                        <!-- 반복 끝 -->
                        <div class="swiper-slide">
                            <div class="video_select_div">
                                <label>
                                    <div class="video_select_img">
                                        <div class="thumb_img" style="background-image:url('/images/media/video/2.jpg')"></div>
                                        
                                        <img class="play_img" src="/images/common/play-circle.png" alt="보기">
                                        <div class="overlay_black"></div>
                                    </div>
                                    <h5 class="video_text"><strong>시연영상</strong></h5>
                                    <input class="video_addr" type="radio" name="video" value="/images/media/video/zigpet_main_mp4.mp4">
                                </label>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="video_select_div">
                                <label>
                                    <div class="video_select_img">
                                        <div class="thumb_img" style="background-image:url('/images/media/video/3.jpg')"></div>
                                        
                                        <img class="play_img" src="/images/common/play-circle.png" alt="보기">
                                        <div class="overlay_black"></div>
                                    </div>
                                    <h5 class="video_text"><strong>전시회 참가현장</strong></h5>
                                    <input class="video_addr" type="radio" name="video" value="/images/media/video/main.mp4">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next video_swiper_next"></div>
                    <div class="swiper-button-prev video_swiper_prev"></div>
                </div>
                <script>
                    var swiper = new Swiper('.video_select_swiper', {
                      paginationClickable: true,
                      pagination: '.sub_nav_pagination',
                      nextButton: '.video_swiper_next',
                      prevButton: '.video_swiper_prev',
                      speed: 1000,
                      spaceBetween: 15,
                      slidesPerView: 3,
                      preventClicks: false,
                      breakpoints: {
                        768: {
                          slidesPerView: 2,
                          spaceBetween: 15
                      }
                  }
              });
          </script>    
      </div>
  </div>

</section>
<script type="text/javascript">
    $(document).ready(function(){
        $(".video_addr").change(function(){
            $("#video source").attr("src",$(this).val());
            $("#video")[0].load();

            var  text = $(this).siblings(".video_text").html();
            $(".video_title").html(text);
        });
    });
</script>
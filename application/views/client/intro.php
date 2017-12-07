
<section class="sub_top_area" style="background-image: url('/images/client/top_bg.jpg')">
    <div class="container">
        <h2>고객지원</h2>
        <h4>미래의 혁신은 삶으로부터, 삶의 혁신은 대양의료기로부터</h4>
    </div>
</section>
<nav id="frame" class="products_nav">
    <ul>
        <li class="category category_select">
            <a href="/index/service_intro">
                <h4>서비스 소개</h4>
            </a>
        </li>
        <li class="category ">
            <a href="/index/faq">
                <h4>FAQ</h4>
            </a>
        </li>
        <li class="category">
            <a href="/index/ask">
                <h4>문의</h4>
            </a>
        </li>
        <li class="category">
            <a href="/index/reference">
                <h4>자료실</h4>
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
            backward: $(".prev"),
            startAt: 3
        };
        var frame = new Sly('#frame', options).init();

        $(window).resize(function () {
            frame.reload();
        });
    });
</script>
<section class="pd_section service_intro_section">
    <div class="sub_top_title">
        <h3>서비스 소개</h3>
        <span class="hori_line"></span>
    </div>
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <div class="top_text_box">
                    <h3>늘 고객을 먼저 생각합니다.</h3>
                    <h5>
                        대양메디칼은 고객에게 양질의 제품, 교육 및 서비스를 제공하기 위해 최선을 다하고 있습니다.
                    </h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="domain_box">
                    <div class="img_bg_box" style="background-image: url('/images/client/intro/box1.jpg')">
                        <h4>시스템의 규정 준수 상태 확인</h4>
                    </div>

                    <div class="domain_box_text_div">
                        <p class="text"> 모든 포괄적인 문서 및 ISO9001 / 13485 인증</p>
                        <p class="text"> 전산화된 개별 기기 이력보고</p>
                        <p class="text"> 제조업체가 보증하는 품질 보장 기기 성능</p>
                        <p class="text"> 유지 관리 요구 사항을 지원하기 위해 제공되는 서비스 설명서</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="domain_box">
                    <div class="img_bg_box" style="background-image: url('/images/client/intro/box2.jpg')">
                        <h4>비즈니스를 위한 혜택</h4>
                    </div>

                    <div class="domain_box_text_div">
                        <p class="text"> 예방 유지 보수를 통한 기기 가동 시간 증대</p>
                        <p class="text"> 
                            제조업체 인증 서비스는 투자를 보호하고 인증되지 않은 제 3자 부품 
                            및 서비스 제공 업체의 불량으로 인한 문제를 방지합니다.
                        </p>
                        <p class="text"> 현장 대응 시간 보장</p>
                        <p class="text"> 현장 엔지니어의 수리시간 단축을 돕는 부품들</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="btn_area">
        <a href="">
            <button type="button" class="basic_btn">서비스 문의</button>
        </a>
    </div>
</section>
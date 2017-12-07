
<section class="sub_top_area" style="background-image: url('/images/introduce/top_bg.jpg')">
    <div class="container">
        <h2>회사소개</h2>
        <h4>미래의 혁신은 삶으로부터, 삶의 혁신은 대양의료기로부터</h4>
    </div>
</section>
<nav id="frame">
    <ul>
        <li class="category">
            <a href="/index/summary">
                <h4>회사개요</h4>
            </a>
        </li>
        <li class="category">
            <a href="/index/greeting">
                <h4>CEO 인사말</h4>
            </a>
        </li>
        <li class="category">
            <a href="/index/history">
                <h4>기업연혁</h4>
            </a>
        </li>
        <li class="category category_select">
            <a href="/index/domain">
                <h4>사업영역</h4>
            </a>
        </li>
        <li class="category">
            <a href="/index/price">
                <h4>인증 및 수상</h4>
            </a>
        </li>
        <li class="category">
            <a href="/index/map">
                <h4>오시는 길</h4>
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
<section class="pd_section">
    <div class="sub_top_title">
        <h3>사업영역</h3>
        <span class="hori_line"></span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="domain_box">
                    <div class="img_bg_box" style="background-image: url('/images/introduce/domain/box1.jpg')">
                    </div>
                    <h5>Aesthetic Division</h5>
                    <p>
                        Planning and Production of aesthetic equipment. 
                        Daeyang's Aesthetic Division will focus on medically based aesthetics and get clinical results in the structured network of Daeyang.
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="domain_box">
                    <div class="img_bg_box" style="background-image: url('/images/introduce/domain/box2.jpg')">
                    </div>
                    <h5>Physiotherapy Division</h5>
                    <p>
                        Planning and Production of Physiotherapy and rehabilitation equipment.
                        Daeyang's Physiotherapy Division has a wide range of devices for the electric therapy with different options which are able to satisfy different needs of the operators.
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="domain_box">
                    <div class="img_bg_box" style="background-image: url('/images/introduce/domain/box3.jpg')">
                    </div>
                    <h5>OEM & ODM</h5>
                    <p>
                        Division for the production on behalf of a third part.
                        Daeyang has OEM&ODM system for Physiotherapy and aesthetics personalizing with your own brand. Daeyang offers to create new brand with our technology and your idea.
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="domain_box">
                    <div class="img_bg_box" style="background-image: url('/images/introduce/domain/box4.jpg')">
                    </div>
                    <h5>Development Division</h5>
                    <p>
                        Division for development and research of new concept of medical and aesthetic area.
                        Development Division offers Daeyang new and expanding businesses with a comprehensive package of medical skill and technical assistance resources that support new business creations as well as emerging advanced technology industries.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

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
        <li class="category">
            <a href="/index/domain">
                <h4>사업영역</h4>
            </a>
        </li>
        <li class="category">
            <a href="/index/price">
                <h4>인증 및 수상</h4>
            </a>
        </li>
        <li class="category category_select">
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
                startAt: 5
            };
            var frame = new Sly('#frame', options).init();

            $(window).resize(function () {
                frame.reload();
            });
        });
    </script>
<section class="pd_section">
    <div class="sub_top_title">
        <h3>오시는 길</h3>
        <span class="hori_line"></span>
    </div>
    <div class="container">
        <div class="map_area">
            <img src="/images/introduce/map/map.jpg" alt="">
        </div>
        <div class="map_bottom_area">
            <table>
                <tr>
                    <th>주소</th>
                    <td>강원도 원주시 문막읍 동화공단로 147</td>
                </tr>
                <tr>
                    <th>연락처</th>
                    <td>033-747-4465~6</td>
                </tr>
                <tr>
                    <th>이메일</th>
                    <td>daeyang@daeyangmed.com</td>
                </tr>
            </table>

            <button class="blue_btn" type="button">
                <span>출발지 입력</span>
                <img src="/images/introduce/map/place.png" alt="">
            </button>
        </div>
    </div>
</section>
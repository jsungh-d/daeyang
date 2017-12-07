
<section class="sub_top_area" style="background-image: url('/images/introduce/top_bg.jpg')">
    <div class="container">
        <h2>회사소개</h2>
        <h4>미래의 혁신은 삶으로부터, 삶의 혁신은 대양의료기로부터</h4>
    </div>
</section>
<nav id="frame">
    <ul>
        <li class="category category_select">
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
                startAt: 0
            };
            var frame = new Sly('#frame', options).init();

            $(window).resize(function () {
                frame.reload();
            });
        });
    </script>
    <section class="pd_section">
        <div class="sub_top_title">
            <h3>회사 개요</h3>
            <span class="hori_line"></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <div class="top_text_box">
                        <h3>혁신적인 기술에 담은 올곧은 진심</h3>
                        <h5>
                            대양의료기주식회사는 국민 한 사람 한 사람의 건강과 행복에 기여하고자
                            끊임없는 기술혁신을 통한 최고 품질의 의료기기를 생산하고 있습니다.
                        </h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="summary_box">
                        <div class="img_bg_box" style="background-image: url('/images/introduce/summary/box1.jpg')">
                        </div>
                        <h5>우수한 연구인력</h5>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="summary_box">
                        <div class="img_bg_box" style="background-image: url('/images/introduce/summary/box2.jpg')">
                        </div>
                        <h5>지속적인 R&D 투자</h5>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="summary_box">
                        <div class="img_bg_box" style="background-image: url('/images/introduce/summary/box3.jpg')">
                        </div>
                        <h5>철저한 시장 분석</h5>
                    </div>
                </div>
            </div>
            <div class="summary_bg_box">
                <div class="row">
                    <div class="offset-md-2 col-md-8">

                        <div class="top_text_box">
                            <h3>항상 도전하는 개척정신과 투철한 장인정신</h3>
                            <h5>
                                대양의료기주식회사는 의료기 시장의 미래를 선도하는 세계적인 기업으로 우뚝 서
                                의료기 사업의 새로운 비전을 제시하고 건강한 인류사회 창조에 동참하겠습니다.
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="summary_bottom products_obj_section">
        <div class="container">
            <img src="/images/logo.png">
            <table>
                <colgroup>
                    <col width="33.3%"><col width="33.3%"><col width="33.3%">
                </colgroup>
                <tr>
                    <th>회사명</th>
                    <th>대표이사</th>
                    <th>설립일</th>
                </tr>
                <tr>
                    <td>대양의료기㈜</td>
                    <td>윤정섭</td>
                    <td>1978년 9월 1일</td>
                </tr>
                <tr>
                    <th>사업자등록번호</th>
                    <th>주생산품</th>
                    <th>회사소개서</th>
                </tr>
                <tr>
                    <td>130-81-71940</td>
                    <td>병원용 치료장비, 가정용 치료기기</td>
                    <td>
                        <button class="blue_btn" type="button">국문</button>
                        <button class="skyblue_btn" type="button">영문</button>
                        <button class="blue_btn" type="button">중문</button>
                    </td>
                </tr>
            </table>
        </div>
    </section>


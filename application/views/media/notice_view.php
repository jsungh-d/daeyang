
<section class="sub_top_area" style="background-image: url('/images/media/top_bg.jpg')">
    <div class="container">
        <h2>미디어센터</h2>
        <h4>미래의 혁신은 삶으로부터, 삶의 혁신은 대양의료기로부터</h4>
    </div>
</section>
<nav id="frame"  class="products_nav">
    <ul>
        <li class="category category_select">
            <a href="/index/notice">
                <h4>공지사항</h4>
            </a>
        </li>
        <li class="category">
            <a href="/index/news">
                <h4>기업소식</h4>
            </a>
        </li>
        <li class="category">
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

    <section class="pd_section board_view_section">
        <div class="sub_top_title">
            <h3><strong>공지사항</strong></h3>
            <span class="hori_line"></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="board_table_area">
                        <table class="board_view_table">
                            <thead>
                                <tr>
                                 <th>제목</th>
                                 <td colspan="3">
                                     [경기] 2017년 ITㆍ보안 스타트업을 위한 Skill-up 교육 개최
                                 </td>
                             </tr>
                             <tr>
                                 <th>작성자</th>
                                 <td>관리자</td>
                                 <th>작성일</th>
                                 <td>2017.12.05</td>
                             </tr>
                             <tr>
                                 <th>첨부파일</th>
                                 <td colspan="3">
                                     <a href="">
                                        경기_2017년_ITㆍ보안_스타트업을_위한_Skill-up_교육_개최_및_신청서.hwp
                                    </a>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                         <tr>
                            <td colspan="4">
                                ITㆍ보안 스타트업의 경영 효율성을 높여 기업 경쟁력을 강화하는 맞춤형 실무교육을 개최합니다.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="btn_area">
                <a href="/index/notice">
                    <button type="button" class="basic_btn gray_btn">목록</button>
                </a>
            </div>
            <div class="board_paging_area">
                <ul>
                    <li>
                        <a href="/index/notice_view">
                            <span class="board_paging_btn">다음글</span>
                            <span class="board_paging_title">
                                [서울] 창업스쿨 홈페이지 온라인 교육 실시
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="/index/notice_view">
                            <span class="board_paging_btn">이전글</span>
                            <span class="board_paging_title">
                                2017년 귀속 연말정산실무 특강 개최
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

</section>
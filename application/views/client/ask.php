
<section class="sub_top_area" style="background-image: url('/images/client/top_bg.jpg')">
    <div class="container">
        <h2>고객지원</h2>
        <h4>미래의 혁신은 삶으로부터, 삶의 혁신은 대양의료기로부터</h4>
    </div>
</section>
<nav id="frame" class="products_nav">
    <ul>
        <li class="category">
            <a href="/index/service_intro">
                <h4>서비스 소개</h4>
            </a>
        </li>
        <li class="category">
            <a href="/index/faq">
                <h4>FAQ</h4>
            </a>
        </li>
        <li class="category category_select">
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
                backward: $(".prev")
            };
            var frame = new Sly('#frame', options).init();

            $(window).resize(function () {
                frame.reload();
            });
        });
    </script>

    <section class="pd_section ask_section">
        <div class="sub_top_title">
            <h3>문의</h3>
            <span class="hori_line"></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="" method="post">
                        <table class="table_bordered">
                            <tbody>
                                <tr>
                                    <th>분야</th>
                                    <td>
                                        <select name="" class="ipt_basic ipt_width1">
                                            <option value="">제품문의</option>
                                            <option value=""></option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>성명</th>
                                    <td>
                                        <input type="text" name="" class="ipt_basic ipt_width1">
                                    </td>
                                </tr>
                                <tr>
                                    <th>소속</th>
                                    <td>
                                        <input type="text" name="" class="ipt_basic ipt_width1">
                                    </td>
                                </tr>
                                <tr>
                                    <th>이메일</th>
                                    <td>
                                        <input type="text" name="" class="ipt_basic ipt_width2">
                                        @
                                        <input type="text" name="" class="ipt_basic ipt_width2">
                                        <select name="" class="ipt_basic ipt_width2">
                                            <option value="">직접입력</option>
                                            <option value="">네이버</option>
                                            <option value="">다음</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>연락처</th>
                                    <td>
                                        <select name="" class="ipt_basic ipt_width3">
                                            <option value="">010</option>
                                        </select>
                                        <span style="margin:0 3px;">-</span>
                                        <input type="text" name="" class="ipt_basic ipt_width3">
                                        <span style="margin:0 3px;">-</span>
                                        <input type="text" name="" class="ipt_basic ipt_width3">
                                    </td>
                                </tr>
                                <tr>
                                    <th>내용</th>
                                    <td>
                                        <textarea name="" class="ipt_basic"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th>첨부</th>
                                    <td>
                                        <input type="file" name="" class="file_ipt">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn_area">
                            <button type="submit" class="basic_btn realblue_btn">등록</button>
                            <button type="button" class="basic_btn gray_btn">취소</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        $(document).ready(function(){

        });
    </script>
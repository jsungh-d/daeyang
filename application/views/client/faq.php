
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
        <li class="category category_select">
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
        <h3>FAQ</h3>
        <span class="hori_line"></span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="faq_list">
                    <ul>
                        <?php foreach ($lists as $row) { ?>
                            <li class="faq_list_obj">
                                <div class="question">
                                    <img src="/images/client/faq/q.png" alt="질문">
                                    <p><?= $row['QUESTION'] ?></p>
                                </div>
                                <div class="answer">
                                    <div class="answer_div">
                                        <img src="/images/client/faq/a.png" alt="답변">
                                        <p>
                                            <?= nl2br($row['ANSWER']) ?>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?= $pagination ?>

    <div class="bottom_search_div">
        <input type="text" placeholder="검색어" id="searchText" value="<?= $text ?>">
        <button type="button" id="searchBtn">
            <img src="/images/common/search_white.png" alt="검색">
        </button>
    </div>

</section>
<script type="text/javascript">
    $(document).ready(function () {
        $(".faq_list_obj").click(function () {
            if ($(this).hasClass("on")) {
                $(this).removeClass("on");
                $(this).find(".answer").css("height", "0px");
            } else {
                var height = $(this).find(".answer_div").find("p").height();
                $(".faq_list_obj").removeClass("on");
                $(".faq_list_obj").find(".answer").css("height", "0px");
                $(this).addClass("on");
                $(this).find(".answer").css("height", height + 30 + "px");
            }
        });

        $(window).resize(function () {
            var height = $(".faq_list_obj.on").find(".answer_div").find("p").height();
            $(".faq_list_obj.on").find(".answer").css("height", height + 30 + "px");
        });

        $("#searchText").keydown(function (key) {
            var text = $("#searchText").val();
            if (!text) {
                text = 'none';
            }
            if (key.keyCode == 13) {
                if (text) {
                    location.href = '/index/faq/q/text/' + encodeURI(text) + '';
                } else {
                    location.href = '/index/faq';
                }
            }
        });

        $("#searchBtn").click(function () {
            var text = $("#searchText").val();
            if (!text) {
                text = 'none';
            }
            if (text) {
                location.href = '/index/faq/q/text/' + encodeURI(text) + '';
            } else {
                location.href = '/index/faq';
            }
        });
    });
</script>
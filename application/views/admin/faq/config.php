<ol class="breadcrumb">
    <li class="breadcrumb-item">대양</li>
    <li class="breadcrumb-item active"><b>FAQ 관리</b></li>
</ol>

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-title">
                        <strong>FAQ 관리</strong>
                        <small>FAQ를 관리합니다</small>
                    </div>

                    <div class="card-actions">
                        <a href="#" class="btn-setting" onclick="location.href = '/admin/faqWrite'">
                            등록
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-custom land_list_table">
                        <colgroup>
                            <col width="80px">
                            <col width="">
                            <col width="13%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>번호</th>
                                <th>질문</th>
                                <th>관리</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!$lists) { ?>
                                <tr>
                                    <td colspan="7" style="text-align: center">
                                        등록사항이 없습니다.
                                    </td>
                                </tr>
                                <?php
                            } else {
                                if ($this->uri->segment(3) == 'q') {
                                    $num = $total_rows - $this->uri->segment(9);
                                    $page = $this->uri->segment(9);
                                    $gubun = $this->uri->segment(5);
                                    $title = $this->uri->segment(7);
                                } else {
                                    $num = $total_rows - $this->uri->segment(4);
                                    $page = $this->uri->segment(4);
                                    $gubun = "none";
                                    $title = "none";
                                }
                                foreach ($lists as $row) {
                                    ?>
                                    <tr>
                                        <td><?= $num ?></td>
                                        <td>
                                            <?= $row['QUESTION'] ?>
                                        </td>
                                        <td>
                                            <button type="button" class="modModalBtn btn btn-success" onclick="location.href = '/admin/faqModify/<?= $row['FAQ_IDX'] ?>'">수정</button>
                                            <button type="button" class="delBtn btn btn-danger" value="<?= $row['FAQ_IDX'] ?>" style="margin-top: 3px;">삭제</button>
                                        </td>
                                    </tr>
                                    <?php
                                    $num--;
                                }
                            }
                            ?>
                        </tbody>
                    </table>

                    <?= $pagination ?>
                </div>
            </div>
        </div>

    </div><!-- end row -->
</div><!-- end container -->

<script type="text/javascript">
    $(document).ready(function () {
        $(".delBtn").click(function () {
            if (confirm("삭제하시겠습니까?")) {
                var data = {FAQ_IDX: $(this).val()};
                $.ajax({
                    url: '/index.php/dataFunction/delFaq',
                    type: 'post',
                    dataType: 'text',
                    data: data,
                    success: function (data, status, xhr) {
                        location.reload();
                    }
                });
            }
        });
    });
</script>
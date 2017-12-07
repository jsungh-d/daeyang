<div class="row">
    <div class="col-md-12">
        <form action="/index.php/dataFunction/insFaq" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="card">
                <div class="card-header">
                    <strong>FAQ 등록</strong>
                    FAQ 를 등록합니다.
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-custom land_list_table custom_table_list">
                        <tbody>
                            <tr>
                                <th>제목</th>
                                <td>
                                    <input id="title" name="question" type="text" class="form-control" maxlength="150" value="" required>
                                </td>
                            </tr>
                            <tr>
                                <th>답변</th>
                                <td>
                                    <textarea name="answer" class="form-control" rows="10" cols="100" required></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <button type="button" onclick="location.href='/admin/noticeConfig'" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> 목록</button>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> 등록</button>
                    <!--<button type="button" class="btn btn-sm btn-danger" onclick="location.href = '/admin/noticeConfig'"><i class="fa fa-ban"></i> 취소</button>-->
                </div>
            </div>
        </form>
    </div>
</div>
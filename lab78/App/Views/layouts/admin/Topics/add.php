

    
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" action="?url=TopicController/handleTopic" method="POST">
                <div class="card-body">
                    <h4 class="card-title">Thêm chủ đề</h4>
                    <div class="form-group row">
                        <label for="ten" class="col-sm-3 text-end control-label col-form-label">Mã số</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Nhập mã loại " name="topic_id" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 text-end control-label col-form-label">Tên chủ đề</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Nhập tên loại " name="topic" required>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <input class="mr20 btn btn-primary" type="submit" name="themmoi" value="THÊM MỚI">
                        <button type="reset" class="btn btn-primary">Nhập lại</button>
                        <a href="?url=TopicController/listTopic"><button type="button" class="btn btn-primary">DANH
                                SÁCH</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

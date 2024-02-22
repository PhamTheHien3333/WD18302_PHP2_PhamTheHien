<?php
if (is_array($data)) {
    extract($data);
}
?>
<div class="row">
            <div class="col-md-12">
                <div class="card">
        <form action="?url=TopicController/updateTopic" method="POST">
        <div class="card-body">
        <h4 class="card-title">Cập nhật loại chủ đề</h4>
            <div class="form-group row">
                <label for="ten" class="col-sm-3 text-end control-label col-form-label">Mã loại</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nhập mã chủ đề " name="topic_id"
                    value="<?php if (isset($topic_id) && ($topic_id != ""))
                            echo $topic_id; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Tên chủ đề</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nhập tên chủ đề " name="topic"
                        value="<?php if (isset($topic) && ($topic != ""))
                            echo $topic; ?>">
                </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0))
                    echo $id; ?>">
                <input class="mr20 btn btn-primary" type="submit" name="capnhat" value="Cập nhật">
                <input class="mr20 btn btn-primary" type="reset" value="Nhập lại">

                <a href="?url=TopicController/listTopic"><button type="button" class="btn btn-primary">DANH SÁCH</button></a>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
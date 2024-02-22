<?php
if (is_array($data)) {
    extract($data);
}
    
?>
<div class="row">
            <div class="col-md-12">
                <div class="card">
        <form action="?url=PostController/updatePost" method="POST" enctype="multipart/form-data">
        <div class="card-body">
        <h4 class="card-title">Cập nhật bài viết</h4>
            <div class="form-group row">
                <label for="ten" class="col-sm-3 text-end control-label col-form-label">Mã số</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nhập mã sản phẩm " name="post_id">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Tiêu đề</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nhập tên sản phẩm " name="title"
                        value="<?php if (isset($title) && ($title != ""))
                            echo $title; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Nội dung</label>
                <div class="col-sm-9">
                    <input type="terabox" class="form-control" name="content"
                        value="<?php if (isset($content) && ($content != ""))
                            echo $content; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Người đăng</label>
                <div class="col-sm-9">
                    <input type="terabox" class="form-control" name="name"
                        value="<?php if (isset($name) && ($name != ""))
                            echo $name; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Ngày đăng</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" name="date"
                        value="<?php if (isset($date) && ($date != ""))
                            echo $date; ?>">
                </div>
            </div>
            <div class="border-top"></div>
                <div class="card-body">
                <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0))
                    echo $id; ?>">
                <input class="mr20 btn btn-primary" type="submit" name="capnhat" value="Cập nhật">
                <input class="mr20 btn btn-primary" type="reset" value="Nhập lại">

                <a href="?url=PostController/listPost"><button type="button" class="btn btn-primary">DANH SÁCH</button></a>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
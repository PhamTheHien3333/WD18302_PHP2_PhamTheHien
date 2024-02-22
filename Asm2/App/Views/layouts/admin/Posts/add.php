<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" action="?url=PostController/handlePost" method="POST"
                enctype="multipart/form-data">
                <div class="card-body">
                    <h4 class="card-title">Thêm bài viết</h4>
                
                    <div class="form-group row">
                        <label class="col-sm-3 text-end control-label col-form-label">Mã số</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Nhập tiêu đề " name="post_id" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 text-end control-label col-form-label">Tiêu đề</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Nhập tiêu đề " name="title" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 text-end control-label col-form-label">Nội dung</label>
                        <div class="col-sm-9">
                            <input type="textarea" class="form-control" placeholder="Nhập nội dung" name="content" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 text-end control-label col-form-label">Người đăng</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Nhập tên" name="name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 text-end control-label col-form-label">Ngày đăng</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" placeholder="" name="date" required>
                        </div>
                    </div>

                </div>
                <div class="border-top">
                    <div class="card-body">
                        <input class="mr20 btn btn-primary" type="submit" name="themmoi" value="THÊM MỚI">
                        <button type="reset" class="btn btn-primary">Nhập lại</button>
                        <a href="?url=PostController/listPost"><button type="button" class="btn btn-primary">DANH
                                SÁCH</button></a>
                    </div>
                </div>
            </form>
        </div>

    </div>

</div>
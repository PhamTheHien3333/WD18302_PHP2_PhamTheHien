<div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" action="./admin.php?act=addbl" method="POST">
                        <div class="card-body">
                            <h4 class="card-title">Thêm bình luận</h4>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">ID</label>
                                <div class="col-sm-9">
                                    <input type="text"  class="form-control" placeholder="Nhập tên loại " name="id" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Nội dung</label>
                                <div class="col-sm-9">
                                    <input type="text"  class="form-control" placeholder="Nhập tên tài khoản " name="noidung">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Iduser</label>
                                <div class="col-sm-9">
                                    <input type="text"  class="form-control" placeholder="Nhập mật khẩu" name="iduser">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Idpro</label>
                                <div class="col-sm-9">
                                    <input type="text"  class="form-control"  name="idpro">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Ngày bình luận</label>
                                <div class="col-sm-9">
                                    <input type="text"  class="form-control" name="ngaybinhluan">
                                </div>
                            </div>
                        <div class="border-top">
                            <div class="card-body">
                                <input class="mr20 btn btn-primary" type="submit" name="themmoi" value="THÊM MỚI">
                                <button type="reset" class="btn btn-primary">Nhập lại</button>
                                <a href="./admin.php?act=listbl"><button type="button" class="btn btn-primary">DANH SÁCH</button></a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

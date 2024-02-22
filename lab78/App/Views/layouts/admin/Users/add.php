<div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" action="?url=UserController/handleUser" method="POST">
                        <div class="card-body">
                            <h4 class="card-title">Thêm taì khoản</h4>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">ID</label>
                                <div class="col-sm-9">
                                    <input type="text"  class="form-control" name="user_id" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Tên người dùng</label>
                                <div class="col-sm-9">
                                    <input type="text"  class="form-control" name="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email"  class="form-control"  name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Mật khẩu</label>
                                <div class="col-sm-9">
                                    <input type="text"  class="form-control" name="password">
                                </div>
                            </div>
                            
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <input class="mr20 btn btn-primary" type="submit" name="themmoi" value="THÊM MỚI">
                                <button type="reset" class="btn btn-primary">Nhập lại</button>
                                <a href="?url=UserController/listUser"><button type="button" class="btn btn-primary">DANH SÁCH</button></a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

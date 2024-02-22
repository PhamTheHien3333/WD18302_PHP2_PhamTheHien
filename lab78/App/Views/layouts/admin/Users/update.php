<?php
if (is_array($data)) {
    extract($data);
}
?>
<div class="row">
            <div class="col-md-12">
                <div class="card">
        <form action="?url=UserController/updateUser" method="POST">
        <div class="card-body">
        <h4 class="card-title">Cập nhật tài khoản</h4>
             <div class="form-group row">
                <label for="ten" class="col-sm-3 text-end control-label col-form-label">ID</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nhập mã số " disabled>
                </div>
            </div>
            <div class="form-group row">
                <label for="ten" class="col-sm-3 text-end control-label col-form-label">Tên người dùng</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nhập tên người dùng " name="name"
                    value="<?php if (isset($name) && ($name != ""))
                            echo $name; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="email"
                        value="<?php if (isset($email) && ($email != ""))
                            echo $email; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Mật khẩu</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nhập tên mật khẩu" name="password"
                        value="<?php if (isset($password) && ($password != ""))
                            echo $password; ?>">
                </div>
            </div>
            
            <div class="border-top"></div>
                <div class="card-body">
                <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0))
                    echo $id; ?>">
                <input class="mr20 btn btn-primary" type="submit" name="capnhat" value="Cập nhật">
                <input class="mr20 btn btn-primary" type="reset" value="Nhập lại">

                <a href="?url=UserController/listUser"><button type="button" class="btn btn-primary">DANH SÁCH</button></a>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
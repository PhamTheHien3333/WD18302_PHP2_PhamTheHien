<?php
if (is_array($tk)) {
    extract($tk);
}
?>
<div class="row">
            <div class="col-md-12">
                <div class="card">
        <form action="./admin.php?act=updatetk" method="POST">
        <div class="card-body">
        <h4 class="card-title">Cập nhật tài khoản</h4>
             <div class="form-group row">
                <label for="ten" class="col-sm-3 text-end control-label col-form-label">ID</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nhập mã sản phẩm ">
                </div>
            </div>
            <div class="form-group row">
                <label for="ten" class="col-sm-3 text-end control-label col-form-label">Tài khoản</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nhập mã sản phẩm " name="user"
                    value="<?php if (isset($user) && ($user != ""))
                            echo $user; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Mật khẩu</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nhập tên sản phẩm " name="pass"
                        value="<?php if (isset($pass) && ($pass != ""))
                            echo $pass; ?>">
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
                <label for="ten" class="col-sm-3 text-end control-label col-form-label">Địa chỉ</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nhập mã sản phẩm " name="address"
                    value="<?php if (isset($address) && ($address != ""))
                            echo $address; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="ten" class="col-sm-3 text-end control-label col-form-label">Điện thoại</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control"  name="phone"
                    value="<?php if (isset($tel) && ($tel != ""))
                            echo $tel; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="ten" class="col-sm-3 text-end control-label col-form-label">Role</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control"  name="role"
                    value="<?php if (isset($role) && ($role != ""))
                            echo $role; ?>">
                </div>
            </div>
            <div class="border-top"></div>
                <div class="card-body">
                <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0))
                    echo $id; ?>">
                <input class="mr20 btn btn-primary" type="submit" name="capnhat" value="Cập nhật">
                <input class="mr20 btn btn-primary" type="reset" value="Nhập lại">

                <a href="./admin.php?act=listtk"><button type="button" class="btn btn-primary">DANH SÁCH</button></a>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
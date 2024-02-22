  <!-- Begin Page Content -->
  
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách tài khoản</h6>
    </div>
    <div class="card-body">
        <form action="?url=UserController/listUser" method="POST">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                    <th></th>
                    <th>Mã tài khoản</th>
                    <th>Tên người dùng</th>
                    <th>Email</th>
                    <th>Mật khẩu</th>
                    <th></th>
                    <?php
                         foreach ( $listUser as $User ){
                            extract($User);
                            $suatk = "?url=UserController/suaUser&user_id=".$user_id;
                            $xoatk = "?url=UserController/xoaUser&user_id=".$user_id;
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$user_id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$password.'</td>
                            <td><a href="'.$suatk.'"><input class="btn btn-primary" type="button" value="Sửa"></a><a href="'.$xoatk.'"><input class="btn btn-danger" type="button" value="Xóa"></a></td>
                        </tr>';
                         }
                    ?>                   
                </tbody>
            </table>
        </div>
        <div class="border-top">
        <div class="card-body">
        <button type="button" class="btn btn-primary">Chọn tất cả</button>
        <button type="button" class="btn btn-primary">Bỏ chọn tất cả</button>
        <a href="?url=UserController/addUser"><button type="button" class="btn btn-primary">Thêm mới</button></a>
        </div>
            </div>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->


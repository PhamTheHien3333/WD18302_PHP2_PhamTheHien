  <!-- Begin Page Content -->
  
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách danh mục</h6>
    </div>
    <div class="card-body">
        <form action="./admin.php?act=listbl" method="POST">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                    <th></th>
                    <th>Mã bình luận</th>
                    <th>Nội dung</th>
                    <th>Iduser</th>
                    <th>Idpro</th>
                    <th>Ngày bình luận</th>
                    <th></th>
                    <?php
                         foreach ( $listbinhluan as $binhluan ){
                            extract($binhluan);
                            $xoabl = "./admin.php?act=xoabl&id=".$id;
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$noidung.'</td>
                            <td>'.$iduser.'</td>
                            <td>'.$idpro.'</td>
                            <td>'.$ngaybinhluan.'</td>
                            <td><a href="'.$xoabl.'"><input class="btn btn-danger" type="button" value="Xóa"></a></td>
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
        <a href="./admin.php?act=addbl"><button type="button" class="btn btn-primary">Thêm mới</button></a>
        </div>
            </div>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->


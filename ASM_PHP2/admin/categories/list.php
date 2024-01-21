  <!-- Begin Page Content -->
  
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách danh mục</h6>
    </div>
    <div class="card-body">
        <form action="./admin.php?act=listdm" method="POST">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th></th>
                    <?php
                         foreach ( $listdanhmuc as $danhmuc ){
                            extract($danhmuc);
                            $suadm = "./admin.php?act=suadm&id=".$id;
                            $xoadm = "./admin.php?act=xoadm&id=".$id;
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td><a href="'.$suadm.'"><input class="btn btn-primary" type="button" value="Sửa"></a><a href="'.$xoadm.'"><input class="btn btn-danger" type="button" value="Xóa"></a></td>
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
        <a href="./admin.php?act=adddm"><button type="button" class="btn btn-primary">Thêm mới</button></a>
        </div>
            </div>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
    </div>
    <div class="card-body">
        <form action="./admin.php?act=listsp" method="POST">
        <div class="table-responsive">
            <form action="">
                <input type="text" name="kyw">
                <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                         foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>        
                </select>
                <input type="submit" name="li" value="Go">
            </form>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                    <th></th>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Hình ảnh</th>
                    <th>Mô tả</th>
                    <th></th>
                    <?php
                        foreach($listsanpham as $sanpham){
                            extract($sanpham);
                            $suasp = "./admin.php?act=suasp&id=".$id;
                            $xoasp = "./admin.php?act=xoasp&id=".$id;
                            $hinhpath="../upload/".$img;
                            if(is_file($hinhpath)){
                                $hinh="<img src='".$hinhpath."' height='80' ";
                            }else{
                                $hinh="no photo";
                            }
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$price.'</td>
                            <td>'.$hinh.'</td>
                            <td>'.$mota.'</td>
                            <td><a href="'.$suasp.'"><input class="btn btn-primary" type="button" value="Sửa"></a><a href="'.$xoasp.'"><input class="btn btn-danger" type="button" value="Xóa"></a></td>
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
        <a href="./admin.php?act=addsp"><button type="button" class="btn btn-primary">Thêm mới</button></a>
        </div>
        </div>
        </form>
    </div>
 </div>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách bài viết</h6>
    </div>
    <div class="card-body">
        <form action="?url=PostController/listPost" method="POST">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                    <th></th>
                    <th>Mã số</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Người đăng</th>
                    <th>Ngày đăng</th>
                    <th></th>
                    <?php
                        foreach($listPost as $items){
                            extract($items);
                            $suap = "?url=PostController/suaPost&post_id=".$post_id;
                            $xoap = "?url=PostController/xoaPost&post_id=".$post_id;
                            // $hinhpath="../upload/".$img;
                            // if(is_file($hinhpath)){
                            //     $hinh="<img src='".$hinhpath."' height='80' ";
                            // }else{
                            //     $hinh="no photo";
                            // }
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$post_id.'</td>
                            <td>'.$title.'</td>
                            <td>'.$content.'</td>
                            <td>'.$name.'</td>
                            <td>'.$date.'</td>
                            <td><a href="'.$suap.'"><input class="btn btn-primary" type="button" value="Sửa"></a><a href="'.$xoap.'"><input class="btn btn-danger" type="button" value="Xóa"></a></td>
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
        <a href="?url=PostController/handlePost"><button type="button" class="btn btn-primary">Thêm mới</button></a>
        </div>
        </div>
        </form>
    </div>
 </div>
</div>
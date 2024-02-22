
 <!-- Begin Page Content -->
  
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách chủ đề</h6>
    </div>
    <div class="card-body">
        <form action="?url=TopicController/listTopic" method="POST">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th></th>
                    <?php
                         foreach ( $listTopic as $items ){
                            extract($items);
                            $suatp = "?url=TopicController/suaTopic&topic_id=".$topic_id;
                            $xoatp = "?url=TopicController/xoaTopic&topic_id=".$topic_id;
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$topic_id.'</td>
                            <td>'.$topic.'</td>
                            <td>
                            <a href="'.$suatp.'"><input class="btn btn-primary" type="button" value="Sửa"></a>
                            <a href="'.$xoatp.'"><input class="btn btn-danger" type="button" value="Xóa"></a></td>
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
        <a href="?url=TopicController/addTopic"><button type="button" class="btn btn-primary">Thêm mới</button></a>
        </div>
            </div>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->


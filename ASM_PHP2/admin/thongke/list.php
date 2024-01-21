<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách danh mục</h6>
    </div>
    <div class="card-body">
        <form action="./admin.php?act=thongke" method="POST">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                    <th>Mã danh mục</th>
                    <th>Tên danh mục</th>
                    <th>Số lượng</th>
                    <th>Giá cao nhất</th>
                    <th>Giá thấp nhất</th>
                    <th>Giá trung bình</th>
                    <?php
                         foreach ( $listthongke as $thongke ){
                            extract($thongke);
                            echo '<tr>
                            <td>'.$madm.'</td>
                            <td>'.$tendm.'</td>
                            <td>'.$countsp.'</td>
                            <td>'.$maxprice.'</td>
                            <td>'.$minprice.'</td>
                            <td>'.$avg.'</td>
                        </tr>';
                         }
                    ?>                   
                </tbody>
            </table>
        </div>
        <div class="border-top">
        <div class="card-body">
        <a href="./admin.php?act=bieudo"><button type="button" class="btn btn-primary">Xem biểu đồ</button></a>
        </div>
            </div>
        </form>
    </div>
</div>

</div>
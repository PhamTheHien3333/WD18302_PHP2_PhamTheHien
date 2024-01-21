<?php
if (is_array($sp)) {
    extract($sp);
}
    $hinhpath="./upload/".$img;
    if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."' height='80' ";
    }else{
        $hinh="no photo";
    }
?>
<div class="row">
            <div class="col-md-12">
                <div class="card">
        <form action="./admin.php?act=updatesp" method="POST" enctype="multipart/form-data">
        <div class="card-body">
        <h4 class="card-title">Cập nhật sản phẩm</h4>
            <div class="form-group row">
                <label for="ten" class="col-sm-3 text-end control-label col-form-label">Mã loại</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nhập mã sản phẩm " name="masp">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Tên loại</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Nhập tên sản phẩm " name="tensp"
                        value="<?php if (isset($name) && ($name != ""))
                            echo $name; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Giá</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="giasp"
                        value="<?php if (isset($price) && ($price != ""))
                            echo $price; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Hình ảnh</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" name="hinh"
                        value="<?php 
                            echo $hinh; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 text-end control-label col-form-label">Mô tả</label>
                <div class="col-sm-9">
                    <input type="terabox" class="form-control" name="mota"
                        value="<?php if (isset($mota) && ($mota != ""))
                            echo $mota; ?>">
                </div>
            </div>
            <div class="border-top"></div>
                <div class="card-body">
                <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0))
                    echo $id; ?>">
                <input class="mr20 btn btn-primary" type="submit" name="capnhat" value="Cập nhật">
                <input class="mr20 btn btn-primary" type="reset" value="Nhập lại">

                <a href="./admin.php?act=listsp"><button type="button" class="btn btn-primary">DANH SÁCH</button></a>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
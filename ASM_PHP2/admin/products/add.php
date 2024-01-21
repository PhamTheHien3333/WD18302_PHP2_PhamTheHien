<div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" action="./admin.php?act=addsp" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title">Thêm sản phẩm</h4>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Danh mục</label>
                                <div class="col-sm-9">
                                    <select name="iddm">
                                        <?php
                                            foreach($listdanhmuc as $danhmuc){
                                                extract($danhmuc);
                                                echo '<option value="'.$id.'">'.$name.'</option>';
                                            }
                                        ?>                            
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Tên loại</label>
                                <div class="col-sm-9">
                                    <input type="text"  class="form-control" placeholder="Nhập tên loại " name="tensp">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Giá</label>
                                <div class="col-sm-9">
                                    <input type="text"  class="form-control" placeholder="Nhập giá tiền" name="giasp">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Hình ảnh</label>
                                <div class="col-sm-9">
                                    <input type="file"  class="form-control"  name="hinh">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Mô tả</label>
                                <div class="col-sm-9">
                                    <input type="textarea"  class="form-control" name="mota">
                                </div>
                            </div>
                            
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <input class="mr20 btn btn-primary" type="submit" name="themmoi" value="THÊM MỚI">
                                <button type="reset" class="btn btn-primary">Nhập lại</button>
                                <a href="./admin.php?act=listsp"><button type="button" class="btn btn-primary">DANH SÁCH</button></a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

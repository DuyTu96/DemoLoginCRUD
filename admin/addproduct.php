<?php
$sql = 'SELECT * FROM Category';
$query = mysqli_query($conn,$sql);

if (isset($_POST['submit'])) {
    $prd_id=$_POST['prd_id'];
    $cat_id=$_POST['cat_id'];
    $prd_name=$_POST['prd_name'];
    $prd_price=$_POST['prd_price'];
    $prd_size=$_POST['prd_size'];
    $prd_image=$_FILES['prd_image']['name'];
    $prd_image_tmp_name=$_FILES['prd_image']['tmp_name'];
    $prd_status= $_POST['prd_status'];
    $prd_featured=$_POST['prd_featured'];
    $prd_detials=$_POST['prd_detials'];

    $sql= "INSERT INTO `Product`(`prd_id`, `cat_id`, `prd_name`, `prd_price`, `prd_size`, `prd_image`,
                        `prd_status`, `prd_featured`, `prd_detials`) VALUES ('$prd_id','$cat_id',
                        '$prd_name','$prd_price','$prd_size','$prd_image','$prd_status','$prd_featured',
                        '$prd_detials')";
    $query=mysqli_query($conn,$sql);
    move_uploaded_file($prd_image_tmp_name, '/admin/img/product/'.$prd_image);
	header('location:index.php?page_layout=listproduct');
}
?>
<!--main-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-6 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Thêm sản phẩm</div>
                <div class="panel-body">
                    <div class="row" style="margin-bottom:40px">
                        <form method="post" enctype="multipart/form-data">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select name="cat_id" class="form-control">
                                        <?php while ($row= mysqli_fetch_array($query)) {?>
                                        <option value='<?php echo $row['cat_id'];?>' selected>
                                            <?php echo $row['cat_name'];?>
                                        </option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Mã sản phẩm</label>
                                    <input type="text" name="prd_id" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" name="prd_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Giá sản phẩm (Giá chung)</label>
                                    <input type="number" name="prd_price" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Size Sản Phẩm</label>
                                    <input type="text" name="prd_size" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Sản phẩm có nổi bật</label>
                                    <select name="prd_featured" class="form-control">
                                        <option value="0">Không</option>
                                        <option value="1">Có</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="prd_status" class="form-control">
                                        <option value="1">Còn hàng</option>
                                        <option value="0">Hết hàng</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Ảnh sản phẩm</label>
                                    <input id="img" type="file" name="prd_image" class="form-control hidden"
                                        onchange="changeImg(this)">
                                    <img id="avatar" class="thumbnail" width="100%" height="350px"
                                        src="img/import-img.png">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Thông tin</label>
                                    <textarea name="prd_detials" style="width: 100%;height: 100px;"></textarea>
                                    <button class="btn btn-success" name="submit" type="submit">Thêm sản phẩm</button>
                                    <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div>

    <!--/.row-->
</div>

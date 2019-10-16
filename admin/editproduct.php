<?php
$prd_id=$_GET['prd_id'];
$sql_cat = 'SELECT * FROM Category';
$query_cat = mysqli_query($conn,$sql_cat);

$sql="SELECT * FROM Product WHERE prd_id=$prd_id";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
if (isset($_POST['submit'])) {
    $cat_id=$_POST['cat_id'];
    $prd_name=$_POST['prd_name'];
    $prd_price=$_POST['prd_price'];
    $prd_size=$_POST['prd_size'];
    if($_FILES['prd_image']['name'] == ''){
		$prd_image = $row['prd_image'];
	}
	else{
		$prd_image = $_FILES['prd_image']['name'];
		$prd_image_tmp_name = $_FILES['prd_image']['tmp_name'];
		move_uploaded_file($prd_image_tmp_name, '../admin/img/product/'.$prd_image);
	}
    $prd_status= $_POST['prd_status'];
    $prd_featured=$_POST['prd_featured'];
    $prd_detials=$_POST['prd_detials'];

    $sql = "UPDATE `Product` SET `cat_id`='$cat_id',`prd_name`='$prd_name',
    `prd_price`='$prd_price',`prd_size`='$prd_size',`prd_image`='$prd_image',`prd_status`='$prd_status',
    `prd_featured`='$prd_featured',`prd_detials`='$prd_detials' WHERE prd_id=$prd_id";
    $query=mysqli_query($conn,$sql);
    header("location:index.php?page_layout=listproduct");
}
?>
<!--main-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-6 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Sửa sản phẩm</div>
                <div class="panel-body">
                    <div class="row" style="margin-bottom:40px">
                        <form method="post" enctype="multipart/form-data">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select name="cat_id" class="form-control">
                                        <?php while ($row_cat= mysqli_fetch_array($query_cat)) {?>
                                        <option value='<?php echo $row_cat['cat_id'];?>' selected>
                                            <?php echo $row_cat['cat_name'];?>
                                        </option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Mã sản phẩm</label>
                                    <input type="text" readonly="true" name="prd_id" class="form-control" value="<?php echo $row['prd_id'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" name="prd_name" class="form-control" value="<?php echo $row['prd_name']?>">
                                </div>
                                <div class="form-group">
                                    <label>Giá sản phẩm (Giá chung)</label>
                                    <input type="number" name="prd_price" class="form-control" value="<?php echo $row['prd_price']?>">
                                </div>
                                <div class="form-group">
                                    <label>Size Sản Phẩm</label>
                                    <input type="text" name="prd_size" class="form-control" value="<?php echo $row['prd_size']?>">
                                </div>
                                <div class="form-group">
                                    <label>Sản phẩm có nổi bật</label>
                                    <select name="prd_featured" class="form-control">
                                        <option value="0" <?php if($row['prd_featured']== 0){echo "selected";}?> >Không </option>
                                        <option value="1" <?php if($row['prd_featured']== 1){echo "selected";}?> >Có </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="prd_status" class="form-control">
                                        <option value="1" <?php if($row['prd_status']== 1){echo "selected";}?>>Còn hàng</option>
                                        <option value="0" <?php if($row['prd_status']== 0){echo "selected";}?>>Hết hàng</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Ảnh sản phẩm</label>
                                    <input id="img" type="file" name="prd_image" class="form-control hidden"
                                        onchange="changeImg(this)">
                                    <img id="avatar" class="thumbnail" width="100%" height="350px"
                                        src="../admin/img/product/<?php echo $row['prd_image']?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Thông tin</label>
                                    <textarea name="prd_detials" style="width: 100%;height: 100px;" value="<?php echo $row['prd_details']?>"></textarea>
                                    <button onClick = "alert('Sửa Sản Phẩm Thành Công!');"  class="btn btn-success" name="submit" type="submit">Sửa sản phẩm</button>
                                    <button class="btn btn-danger" name="reset" type="reset">Huỷ bỏ</button>
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

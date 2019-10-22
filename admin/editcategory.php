<?php
$cat_id=$_GET['cat_id'];
$sql_cat="SELECT * FROM Category WHERE cat_id =$cat_id";
$query_cat=mysqli_query($conn,$sql_cat);
$row_cat=mysqli_fetch_array($query_cat);

if (isset($_POST['submit'])) {
	$cat_name=$_POST['cat_name'];
	$sql= "UPDATE `Category` SET `cat_name`='$cat_name' WHERE cat_id='$cat_id'";
	$query=mysqli_query($conn,$sql);
	header('location:index.php?page_layout=category');
}
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home">
						<use xlink:href="#stroked-home"></use>
					</svg></a></li>
			<li class="active">Icons</li>
		</ol>
	</div>
	<!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Quản lý danh mục</h1>
		</div>
	</div>
	<!--/.row-->


	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-5">
						<form method="post">
							<div class="form-group">
								<label for="">Chọn Danh Mục Sửa:</label>
								<select class="form-control" name="parent">
								<?php 
								$sql_catt="SELECT * FROM Category WHERE cat_id =$cat_id";
								$query_catt=mysqli_query($conn,$sql_catt);
								while ($row_catt=mysqli_fetch_array($query_catt)) { ?>
								<option>---- <?php echo $row_catt['cat_name']?> ----</option>
								<?php }?>
								</select>
							</div>
							<div class="form-group">
								<label for="">Tên Danh mục</label>
								<input type="text" class="form-control" name="cat_name" placeholder="Tên danh mục mới"
									value="<?php echo $row_cat['cat_name']?>">
								<!-- <div class="alert bg-danger" role="alert">
									<svg class="glyph stroked cancel">
										<use xlink:href="#stroked-cancel"></use>
									</svg>Tên danh mục đã tồn tại!<a href="#" class="pull-right"><span
											class="glyphicon glyphicon-remove"></span></a>
								</div> -->
							</div>
							<button type="submit" class="btn btn-primary" name="submit">Sửa danh mục</button>
						</form>
						</div>
						<div class="col-md-7">
							<!-- <div class="alert bg-success" role="alert">
								<svg class="glyph stroked checkmark">
									<use xlink:href="#stroked-checkmark"></use>
								</svg> Đã sửa danh mục thành công! <a href="#" class="pull-right"><span
										class="glyphicon glyphicon-remove"></span></a>
							</div> -->
							<h3 style="margin: 0;"><strong>Phân cấp Menu</strong></h3>
							<div class="vertical-menu">
								<div class="item-menu active">Danh mục </div>
								<?php
								$sql="SELECT * FROM Category";
								$query=mysqli_query($conn,$sql);
								while ($row=mysqli_fetch_array($query)) { ?>
								<div class="item-menu"><span>--| <?php echo $row['cat_name'];?></span>
									<div class="category-fix">
										<a class="btn-category btn-primary" href="index.php?page_layout=editcategory&cat_id=<?php echo $row['cat_id']?>"><i
												class="fa fa-edit"></i></a>
										<a class="btn-category btn-danger" href="#"><i class="fas fa-times"></i></i></a>
									</div>
								</div>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>



		</div>
		<!--/.col-->


	</div>
	<!--/.row-->
</div>
<!--/.main-->
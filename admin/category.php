<?php
if (isset($_POST['submit'])) {
	$cat_name=$_POST['cat_name'];

	$sql_cat="INSERT INTO `Category`(`cat_name`) VALUES ('$cat_name')";
	if (mysqli_query($conn,$sql_cat)) {
		$alert="Thêm Danh Mục Thành Công!";
		header('location:index.php?page_layout=category');
	}else{
		$error="Thêm Danh Mục Thất Bại!";
	}
	
	
}
?>


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home">
						<use xlink:href="#stroked-home"></use>
					</svg></a></li>
			<li class="active">Danh mục</li>
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
							<form method="POST">
								<div class="form-group">
									<label for="">Tên Danh mục</label>
									<input type="text" class="form-control" name="cat_name" id=""
										placeholder="Tên danh mục mới">
									<?php if (isset($alert)|isset($error)) {?>
									<div class="alert bg-danger" role="alert">
										<svg class="glyph stroked cancel">
											<use xlink:href="#stroked-cancel"></use>
										</svg><?php echo $alert; echo $error; ?><a href="#" class="pull-right"><span
												class="glyphicon glyphicon-remove"></span></a>
									</div>
									<?php } ?>
								</div>
								<button type="submit" class="btn btn-primary" name="submit">Thêm danh mục</button>
							</form>
						</div>
						<div class="col-md-7">
							<!-- <div class="alert bg-success" role="alert">
									<svg class="glyph stroked checkmark">
										<use xlink:href="#stroked-checkmark"></use>
									</svg> Đã thêm danh mục thành công! <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
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
										<a class="btn-category btn-danger" href="deletecategory.php?cat_id=<?php echo $row['cat_id'] ?>"><i class="fas fa-times"></i></i></a>
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
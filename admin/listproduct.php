	<script>
	function deleteproduct() {
		confirm('Bạn có muốn xóa sản phẩm không?')
	}
	</script>
	
	<!--main-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Danh sách sản phẩm</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách sản phẩm</h1>
			</div>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">

					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<!-- <div class="alert bg-success" role="alert">
									<svg class="glyph stroked checkmark">
										<use xlink:href="#stroked-checkmark"></use>
									</svg>Đã thêm thành công<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
								</div> -->
								<a href="index.php?page_layout=addproduct" class="btn btn-primary">Thêm sản phẩm</a>
								<table class="table table-bordered" style="margin-top:20px;">
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Thông tin sản phẩm</th>
											<th>Giá sản phẩm</th>
											<th>Tình trạng</th>
											<th>Danh mục</th>
											<th width='18%'>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
									<?php
										$sql="SELECT * FROM Product INNER JOIN Category ON Product.cat_id=Category.cat_id";
										$query=mysqli_query($conn, $sql);
										while ($row=mysqli_fetch_array($query)) {
									?>
										<tr>
											<td>1</td>
											<td>
												<div class="row">
													<div class="col-md-3"><img src="../admin/img/product/<?php echo $row['prd_image']?>" alt="Áo đẹp" width="100px" class="thumbnail"></div>
													<div class="col-md-9">
														<p><strong>Mã sản phẩm : <?php echo $row['prd_id']?></strong></p>
														<p>Tên sản phẩm :<?php echo $row['prd_name']?></p>
														
														
													</div>
												</div>
											</td>
											<td><?php echo $row['prd_price']?> VND</td>
											<td>
												<a class = "btn <?php if($row['prd_status']==1){echo"btn-success";}else{echo"btn-danger";}?>" href="#" role="button"><?php if ($row['prd_status']==1){echo"Còn hàng";}else{echo"Hết Hàng";} ?></a>
											</td>
											<td><?php echo $row['cat_name']?></td>
											<td>
												<a href="index.php?page_layout=editproduct&prd_id=<?php echo $row['prd_id']?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true" name="editproduct"></i> Sửa</a>
												<a href="deleteproduct.php&prd_id=<?php echo $row['prd_id']?>"  class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true" name="deleteproduct"></i> Xóa</a>
											</td>
										</tr>
										<?php }?>
									</tbody>
								</table>
								<div align='right'>
									<ul class="pagination">
										<li class="page-item"><a class="page-link" href="#">Trở lại</a></li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">tiếp theo</a></li>
									</ul>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>

					</div>
				</div>
				<!--/.row-->


			</div>
			<!--end main-->
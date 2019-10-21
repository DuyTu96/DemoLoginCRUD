<?php
	$sql="SELECT * FROM User";
	$query=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($query);
	?>

<!--main-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home">
						<use xlink:href="#stroked-home"></use>
					</svg></a></li>
			<li class="active">Danh sách thành viên</li>
		</ol>
	</div>
	<!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Danh sách thành viên</h1>
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
							<a href="index.php?page_layout=adduser" class="btn btn-primary">Thêm Thành viên</a>
							<form method="post">
								<table class="table table-bordered" style="margin-top:20px;">

									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Email</th>
											<th>Full</th>
											<th>Password</th>
											<th>Level</th>
											<th width='18%'>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										<?php
									$sql_showlistuser="SELECT * FROM User";
									$query_showlistuser=mysqli_query($conn,$sql_showlistuser);
										while ($row_showlistuser=mysqli_fetch_array($query_showlistuser)) { ?>
										<tr>
											<td><?php echo $row_showlistuser['user_id']?></td>
											<td><?php echo $row_showlistuser['user_mail']?></td>
											<td><?php echo $row_showlistuser['user_name']?></td>
											<td><?php echo $row_showlistuser['user_pass']?></td>
											<td><?php echo $row_showlistuser['user_level']?></td>
											<td>
												<a href="index.php?page_layout=edituser&user_id=<?php echo $row_showlistuser['user_id']?>"
													class="btn btn-warning"><i class="fa fa-pencil"
														aria-hidden="true"></i>
													Sửa</a>
												<a href="delete_user.php?user_id=<?php echo $row_showlistuser['user_id']?>"
													class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"
														name="btndeleteuser"></i> Xóa</a>
											</td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</form>
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
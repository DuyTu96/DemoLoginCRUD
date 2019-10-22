
<!-- header -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php"><span><img style="height: 30px;" src="../images/logo.png"></span> Admin Store</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg><b> <?php echo $_COOKIE['rememberemail']?> </b> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu"><li><a href="index.php?page_layout=listuser"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>Thông tin</a></li>
						<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<!-- header -->
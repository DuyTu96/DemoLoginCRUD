<?php
if (isset($_POST['submit'])) {
    $user_name=$_POST['user_name'];
    $user_mail=$_POST['user_mail'];
    $user_pass=$_POST['user_pass'];
    $user_re_pass=$_POST['user_re_pass'];
    $user_level=$_POST['user_level'];
    
    $sql = "SELECT * FROM User
			WHERE user_mail = '$user_mail'";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_num_rows($query);
	if ($row > 0) {
        $alert1 = '<div class="alert alert-danger">Email đã tồn tại</div>';
    }elseif($user_pass != $user_re_pass){
        $alert = '<div class="alert alert-danger">Repassword Sai</div>';
    }else{
        $sql="INSERT INTO `User`(`user_name`, `user_mail`, `user_pass`, `user_level`) VALUES ('$user_name',
        '$user_mail','$user_pass','$user_level')";
        $query=mysqli_query($conn,$sql);
        header('location:index.php?page_layout=listuser');
    }
}
?>

<!--main-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm Thành viên</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><i class="fas fa-user"></i> Thêm thành viên</div>
                <div class="panel-body">
                    <div class="row justify-content-center" style="margin-bottom:40px">
                        <form method="post">
                            <div class="col-md-8 col-lg-8 col-lg-offset-2">

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="user_mail" class="form-control">
                                    <?php if (isset($alert1)) {
                                        echo $alert1;
                                     } ?>
                                </div>
                                <div class="form-group">
                                    <label>password</label>
                                    <input type="password" name="user_pass" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>repassword</label>
                                    <input type="password" name="user_re_pass" class="form-control">
                                    <?php if (isset($alert)) {
                                        echo $alert;
                                     } ?>
                                </div>
                                <div class="form-group">
                                    <label>Full name</label>
                                    <input type="full" name="user_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Level</label>
                                    <select name="user_level" class="form-control">
                                        <option Selected value="1">User</option>
                                        <option value="2">Admin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-lg-8 col-lg-offset-2 text-right">

                                    <button name="submit" class="btn btn-success" type="submit">Thêm thành viên</button>
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
<?php
$user_id=$_GET['user_id'];
$sql="SELECT * FROM User WHERE user_id=$user_id";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);

if(isset($_POST['submit'])){
    $user_mail=$_POST['user_mail'];
    $user_pass=$_POST['user_pass'];
    $user_name=$_POST['user_name'];
    $user_level=$_POST['user_level'];

    $sql_edituser="UPDATE `User` SET `user_name`='$user_name',`user_mail`='$user_mail',`user_pass`='$user_pass',`user_level`='$user_level' WHERE user_id = '$user_id' ";
    $query_edituser=mysqli_query($conn,$sql_edituser);
    header('location:index.php?page_layout=listuser');
}
?>
<!--main-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa Thành viên</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><i class="fas fa-user"></i> Sửa thành viên - <?php echo $row['user_mail']?>
                </div>
                <div class="panel-body">
                    <div class="row justify-content-center" style="margin-bottom:40px">
                        <form method="POST">
                            <div class="col-md-8 col-lg-8 col-lg-offset-2">

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="user_mail" class="form-control"
                                        value="<?php echo $row['user_mail'] ?>">
                                    <!-- <div class="alert alert-danger" role="alert">
                                        <strong>email đã tồn tại!</strong>
                                    </div> -->
                                </div>
                                <div class="form-group">
                                    <label>password</label>
                                    <input type="password" name="user_pass" class="form-control"
                                        value="<?php echo $row['user_pass']?>">
                                </div>
                                <div class="form-group">
                                    <label>Full name</label>
                                    <input type="text" name="user_name" class="form-control"
                                        value="<?php echo $row['user_name']?>">
                                </div>
                                <div class="form-group">
                                    <label>Level</label>
                                    <select name="user_level" class="form-control">

                                        <option <?php if($row['user_level']== 1){echo "selected"; }?> value="1">User
                                        </option>
                                        <option <?php if($row['user_level']== 2){echo "selected"; }?> value="2">Admin
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-lg-8 col-lg-offset-2 text-right">

                                    <button class="btn btn-success" type="submit" name="submit">Sửa thành viên</button>
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
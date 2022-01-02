<?php
require_once('../include/header.php');
?>
<?php
$id = $_GET['id'];
if(isset($id)){

}
else
{
  header("LOCATION:dashboard.php");
}
?>

<?php
require_once('../include/dbcon.php');
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE `id`='$id'";
$run = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($run);
$image = $data['image'];
$username = $data['username'];
$password = $data['password'];
$hoten = $data['hoten'];
$ngaysinh = $data['ngaysinh'];
$malop  = $data['malop'];
$quyen = $data['quyen'];

?>

<?php
//Update Student Query Code
    //require_once('../include/dbcon.php');

    if(isset($_POST['edit_user'])){
    $image = $_FILES['image']['name'];
    $temp_image_name =  $_FILES['image']['tmp_name'];
    $username = htmlentities(mysqli_real_escape_string($con,$_POST['username']));
    $password= htmlentities(mysqli_real_escape_string($con,$_POST['password']));
    $hoten= htmlentities(mysqli_real_escape_string($con,$_POST['hoten']));
    $ngaysinh= htmlentities(mysqli_real_escape_string($con,$_POST['ngaysinh']));
    $malop = htmlentities(mysqli_real_escape_string($con,$_POST['malop']));
    $quyen =  htmlentities(mysqli_real_escape_string($con,$_POST['quyen']));
    
    move_uploaded_file($temp_image_name,"../userimg/$image");
   $query = "UPDATE `users` SET `username`='$username', `password`='$password', `hoten`='$hoten', `ngaysinh`='$ngaysinh', `malop`='$malop', `quyen`='$quyen', `image`='$image' WHERE `id`='$id' ";
    $run = mysqli_query($con,$query);

    if($run)
    {
       $_SESSION['user_updated'] = "Cập nhật thành công";
       $user_updated =  $_SESSION['user_updated'];
    
    }
    else{

       $_SESSION['user_updated_failed'] = "Cập nhật thất bại";
       $user_updated_failed =  $_SESSION['user_updated_failed'];
     
     }
}
?>
      <!-- The Coding Has Been Started From Here -->

      <nav class="teal">
        <div class="container">
          <div class="nav-wrapper">
            <a href="" class="brand-logo center">Trường THPT Chuyên Quốc Học</a>
            <a href="" class="sidenav-trigger show-on-large" data-target="slide-out"><i class="material-icons">menu</i></a>
          </div>
        </div>
      </nav>


      <!-- The Dashboard Coding Started From Here -->

        <div class="row main">
            <div class="col l12 m12 s12">
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-panel">
                <div class="center">
                <h5 class="center red-text">
		<?php

              if(isset($user_updated)){
                echo $user_updated;
              }
              elseif(isset($user_updated_failed)){
                  echo $user_updated_failed."<br>".mysqli_error($con);
              }
            ?> </h5></div>
                     <div class="row">
                      <div class="col l4 m12 s12 center">
                     <div class="input-field file-field">
                     <input type="file" name="image" class="dropify" data-show-remove="false" data-default-file="../userimg/<?php echo $image;?>" />
                     </div>
                      </div>
                        <div class="col l4">
                            <div class="input-field">
                                    <i class="material-icons prefix">person</i>
                                <input type="text" name="username" id="username" required="required" value="<?php echo $username; ?>">
                                <label for="rollnow">Tên đăng nhập</label>
                            </div>
                            <div class="input-field">
                                <i class="material-icons prefix">password</i>
                                    <input type="text" name="password" id="password" required="required" value="<?php echo $password; ?>">
                                    <label for="name">Mật khẩu</label>
                                </div>
                                <div class="input-field">
                                        <i class="material-icons prefix">person_add</i>
                                        <input type="text" name="hoten" id="hoten" required="required" value="<?php echo $hoten; ?>">
                                        <label for="contact">Họ và tên</label>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col l4">
								<div class="input-field">
                                        <i class="material-icons prefix">cake</i>
                                        <input type="text" name="ngaysinh" id="ngaysinh" required="required" value="<?php echo $ngaysinh; ?>">
                                        <label for="city">Ngày sinh</label>
                                 </div>
								 
								<div class="input-field">
                                        <i class="material-icons prefix">class</i>
                                         <select name="quyen" required="required" >
										    <?php 
											if ($quyen=='1') {
											?>
                                            <option value="1" selected="selected">Học Viên</option>
											<?php } else { ?>
											<option value="1">Học Viên</option>
											<?php } ?>
											<?php 
											if ($quyen=='2') {
											?>
                                            <option value="2" selected="selected">Giáo Viên</option>
											<?php } else { ?>
											<option value="2">Giáo Viên</option>
											<?php } ?>
											
											<?php 
											if ($quyen=='3') {
											?>
                                            <option value="3" selected="selected">Quản trị viên</option>
											<?php } else { ?>
											<option value="3">Quản trị viên</option>
											<?php } ?>
											
										</select>
                                        <label for="city">Vai trò</label>
                                 </div>

								<div class="input-field">
								 
									<i class="material-icons prefix">class</i>
									<select name="malop" required="required" >
									<option value="">Chọn lớp</option>
									<?php
										$query = "SELECT * FROM `lop`" ;
										$urun = mysqli_query($con,$query);											
									
										while($data= mysqli_fetch_assoc($urun)){
										
										$malop1 = $data['malop'];
										$tenlop = $data['tenlop'];
										$namhoc = $data['namhoc'];

									?>
									
									<?php 
									if ($malop1==$malop) {
									?>
									<option value="<?php echo $malop1; ?>" selected="selected" ><?php echo $malop1;  ?></option>
									<?php } else { ?>
									<option value="<?php echo $malop1; ?>" ><?php echo $malop1;  ?></option>
									<?php } ?>
									
									
									<option value="<?php echo $malop; ?>"><?php echo $malop;  ?></option>
									 <?php } ?>
									<label for="city">Lớp</label>
									</select>
								</div>
								
								
								
							
                        </div>
                        <div class="col l4 center">
                          
                        </div>
                        <div class="col l8 center large">

                        </div>
                    </div>

                    <button type="submit" name="edit_user" style="width:100%" class="btn">Update Users</button>
                </div>
              </form>

            </div>
        </div>

      <!-- The Navbar Menu Collection List -->

      <?php
require_once('../include/sidenav.php');
?>


      <?php
require_once('../include/footer.php');
?>
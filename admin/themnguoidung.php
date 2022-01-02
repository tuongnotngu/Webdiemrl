<?php
require_once('../include/header.php');
?>



<?php

    require_once('../include/dbcon.php');
    

    if(isset($_POST['submit'])){
    $image_name = $_FILES['image']['name'];
    $temp_image_name =  $_FILES['image']['tmp_name'];
    $username = $_POST['username'];
    $password= $_POST['password'];
    $hoten= $_POST['hoten'];
    $ngaysinh= $_POST['ngaysinh'];
    $quyen = $_POST['quyen'];
    $malop =  $_POST['malop'];
    //$image = $_POST['image'];
    move_uploaded_file($temp_image_name,"../userimg/$image_name");
    $query = "INSERT INTO `users`(`username`, `password`, `hoten`, `ngaysinh`, `quyen`, `malop`, `image`) VALUES ('$username','$password','$hoten','$ngaysinh','$quyen','$malop','$image_name')";
    $run = mysqli_query($con,$query);
    
   
    if($run)
    {
        $_SESSION['user_added'] = "Thêm người dùng thành công";
        $user_added =  $_SESSION['user_added'];
    }
    else {

      $_SESSION['user_added_failed'] = "Thêm người dùng thất bại";
      $user_added_failed =  $_SESSION['user_added_failed'];
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
                <div class="cente">
                <h5 class="center red-text"><?php 
              
              if(isset($user_added)){
                echo $user_added; 
              }
              

            ?> </h5></div>
                    <div class="row">
                      <div class="col l4 m12 s12 center">
                     <div class="input-field file-field">
                     <input type="file" name="image" class="dropify" data-show-remove="false" data-default-file="../images/user.png" />
                     </div>
                      </div>
                        <div class="col l4">
                            <div class="input-field">
                                    <i class="material-icons prefix">person</i>
                                <input type="text" name="username" id="username" required="required">
                                <label for="rollnow">Tên đăng nhập</label>
                            </div>
                            <div class="input-field">
                                <i class="material-icons prefix">password</i>
                                    <input type="text" name="password" id="password" required="required">
                                    <label for="name">Mật khẩu</label>
                                </div>
                                <div class="input-field">
                                        <i class="material-icons prefix">person_add</i>
                                        <input type="text" name="hoten" id="hoten" required="required">
                                        <label for="contact">Họ và tên</label>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col l4">
								<div class="input-field">
                                        <i class="material-icons prefix">cake</i>
                                        <input type="text" name="ngaysinh" id="ngaysinh" required="required">
                                        <label for="city">Ngày sinh</label>
                                 </div>
								 
								<div class="input-field">
                                        <i class="material-icons prefix">class</i>
                                         <select name="quyen" required="required">
                                            <option value="1">Học Viên</option>
                                            <option value="2">Giáo viên</option>
                                            <option value="3">Quản trị viên</option>
										</select>
                                        <label for="city">Vai trò</label>
                                 </div>

								<div class="input-field">
								 
									<i class="material-icons prefix">class</i>
									<select name="malop" required="required">
									<option value="">Chọn lớp</option>
									<?php
										$query = "SELECT * FROM `lop`" ;
										$urun = mysqli_query($con,$query);											
									
										while($data= mysqli_fetch_assoc($urun)){
										
										$malop = $data['malop'];
										$tenlop = $data['tenlop'];
										$namhoc = $data['namhoc'];

									?>
									
									<option value="<?php echo $malop; ?>"><?php echo $malop  ?></option>
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
                     
                    <button type="submit" name="submit" style="width:100%" class="btn">Thêm User</button>
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
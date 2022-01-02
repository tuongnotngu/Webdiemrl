<?php
require_once('../include/header.php');
?>



<?php

    require_once('../include/dbcon.php');
    

    if(isset($_POST['submit'])){
    //$image_name = $_FILES['image']['name'];
    //$temp_image_name =  $_FILES['image']['tmp_name'];
    //$username = $_POST['username'];
    //$password= $_POST['password'];
    $hoten= $_POST['hoten'];
    $malop= $_POST['malop'];
    $vpham = $_POST['vpham'];
    $ngaysinh =  $_POST['ngaysinh'];
    //$image = $_POST['image'];
    //move_uploaded_file($temp_image_name,"../userimg/$image_name");
    $query = "INSERT INTO `vipham`(`hoten`,`malop`,`vpham`,`ngaysinh`) VALUES ('$hoten','$malop','$vpham','$ngaysinh')";
    $run = mysqli_query($con,$query);
    
   
    if($run)
    {
        $_SESSION['vipham_added'] = "Thêm vi phạm thành công";
        $vipham_added =  $_SESSION['vipham_added'];
    }
    else {

      $_SESSION['vipham_added_failed'] = "Thêm vi phạm thất bại";
      $vipham_added_failed =  $_SESSION['vipham_added_failed'];
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
              
              if(isset($vipham_added)){
                echo $vipham_added; 
              }
              

            ?> </h5></div>
                    <div class="row">
                        <div class="col l6">
                           
                                <div class="input-field">
                                        <i class="material-icons prefix">person_add</i>
                                        <input type="text" name="hoten" id="hoten" required="required">
                                        <label for="contact">Tên học sinh</label>
                                </div>
								
								<div class="input-field">
                                        <i class="material-icons prefix">cake</i>
                                        <input type="text" name="ngaysinh" id="ngaysinh" required="required">
                                        <label for="city">Ngày sinh</label>
                                 </div>
                        </div>
                        <div class="row">
                            <div class="col l6">
								 
								 <div class="input-field">
                                        <i class="material-icons prefix">edit</i>
                                        <input type="text" name="vpham" id="vpham" required="required">
                                        <label for="contact">Nội dung vi phạm</label>
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
                        <div class="col l6 center">
                          
                        </div>
                        <div class="col l7 center large">

                        </div>
                    </div>
                     
                    <button type="submit" name="submit" style="width:100%" class="btn">Thêm vi phạm</button>
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
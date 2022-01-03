<?php
require_once('../include/header.php');
?>
<?php

?>
<?php
    require_once('../include/dbcon.php');
    if(isset($_POST['submit'])){
    $anhmc = $_FILES['filebt']['name'];
    $temp_file_name =  $_FILES['filebt']['tmp_name'];
	  //$id= $_POST['id'];
    //$username=$_SESSION['username'];
    $username= $_POST['username'];
    $malop = $_POST['malop'];
    $matcvp= $_POST['matcvp'];
	  $diem= $_POST['diem'];
	  $hocki= $_POST['hocki'];
	  //$thanhtich= $_POST['thanhtich'];
	//Neu thu muc chua ton tai thi tao
	  if (!file_exists("../DIEMVP/$matcvp")) mkdir("../DIEMVP/$matcvp");
    move_uploaded_file($temp_file_name,"../DIEMVP/$matcvp/$anhmc");
    $query = "INSERT INTO `diemvp`(`username`, `malop`, `matcvp`,`hocki`,`diem`, `anhmc`) VALUES ('$username','$malop','$matcvp','$hocki','$diem','$anhmc')";
    mysqli_query($con,$query);
    if(mysqli_query($con,$query))
    {
      echo "Thêm Điểm Thành Công";
    }
    else
    {
      echo "Thêm Điểm Thất Bại";
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
	  	                      
            <div class="card-panel main">
            <span class="card-title container center">
              <h5>Thêm điểm vi phạm</h5>
              <h5 class="center red-text"><?php 
              
                if(isset($diemrl_added)){
                  echo $diemrl_added; 
                }
                
              ?> </h5>
            </span>
              <form action="" method="POST" enctype="multipart/form-data">
              <div class="input-field">
                                    <i class="material-icons prefix">person</i>
                                <input type="text" name="username" id="username" required="required">
                                <label for="username">Tài Khoản Của Học Sinh</label>
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
									<label for="malop">Lớp</label>
									</select>
								</div>
								<div class="input-field">
                                        <i class="material-icons prefix">school</i>
                                         <select name="hocki" required="required">
                                            <option value="1">Học kì 1</option>
                                            <option value="2">Học kì 2</option>
										</select>
                                        <label for="hocki">Học kì</label>
                                 </div>
								<div class="input-field">
								 
									<i class="material-icons prefix">edit</i>
									<select name="matcvp" required="required">
									<option value="">Chọn mã tiêu chí vi phạm</option>
									<?php
										$query = "SELECT * FROM `tieuchivp`" ;
										$urun = mysqli_query($con,$query);											
									
										while($data= mysqli_fetch_assoc($urun)){
										
										//$malop = $data['malop'];
										$matcvp = $data['matcvp'];
										$tentcvp = $data['tentcvp'];

									?>
									
									<option value="<?php echo $tentcvp; ?>"><?php echo $tentcvp  ?></option>
									 <?php } ?>
									<label for="matcvp">Tiêu chí vi phạm</label>
									</select>
								</div>
								
								<div class="input-field">
                                    <i class="material-icons prefix">edit</i>
                                <input type="text" name="diem" id="diem" required="required">
                                <label for="diem">Số điểm trừ</label>
                            </div>
                                <div class="input-field">
                                        <i class="material-icons prefix">image</i>
										</br>
										<input type="file" name="filebt" id="filebt">
                                        
                                       
                                </div>
								
								
                        </div>


                    </div>
                     
                    <button type="submit" name="submit" style="width:100%" class="btn">NHẬP ĐIỂM VI PHẠM</button>
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
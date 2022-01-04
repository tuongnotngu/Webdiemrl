<?php
require_once('../include/header.php');
?>
<?php
$username= $_SESSION['username'];
?>
<?php
    require_once('../include/dbcon.php');
    if(isset($_POST['submit'])){
    $anhmc = $_FILES['filebt']['name'];
    $temp_file_name =  $_FILES['filebt']['tmp_name'];
	  //$id= $_POST['id'];
    //$username=$_SESSION['username'];
    $sql = "SELECT * FROM users WHERE username='$username'";
    $hoten=mysqli_query($con,$sql);
    if (mysqli_num_rows($hoten) > 0) {
	  if($rowData = mysqli_fetch_array($hoten))
    $hoten=$rowData["hoten"];
}
    $malop = $_POST['malop'];
    $matc= $_POST['matc'];
	  $diem= $_POST['diem'];
	  $hocki= $_POST['hocki'];
	  $thanhtich= $_POST['thanhtich'];
	//Neu thu muc chua ton tai thi tao
	if (!file_exists("../DIEMRL/$matc")) mkdir("../DIEMRL/$matc");
    move_uploaded_file($temp_file_name,"../DIEMRL/$matc/$anhmc");
    $query = "INSERT INTO `diemrl`(`username`,`hoten`, `malop`, `matc`,`thanhtich`,`diem`,`hocki`, `anhmc`) VALUES ('$username','$hoten','$malop','$matc','$thanhtich','$diem','$hocki','$anhmc')";
    $run = mysqli_query($con,$query);
    
   
    if($run)
    {
        $_SESSION['diemrl_added'] = "Thêm điểm thành công";
        $diemrl_added =  $_SESSION['diemrl_added'];
    }
    else {

      $_SESSION['diemrl_added_failed'] = "Thêm điểm thất bại";
      $diemrl_added_failed =  $_SESSION['diemrl_added_failed'];
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
              <h5>Thêm điểm rèn luyện</h5>
              <h5 class="center red-text"><?php 
              
                if(isset($diemrl_added)){
                  echo $diemrl_added; 
                }
                
              ?> </h5>
            </span>
              <form action="" method="POST" enctype="multipart/form-data">
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
									<select name="matc" required="required">
									<option value="">Chọn mã tiêu chí</option>
									<?php
										$query = "SELECT * FROM `tieuchi`" ;
										$urun = mysqli_query($con,$query);											
									
										while($data= mysqli_fetch_assoc($urun)){
										
										//$malop = $data['malop'];
										$matc = $data['matc'];
										$tentc = $data['tentc'];

									?>
									
									<option value="<?php echo $tentc; ?>"><?php echo $tentc  ?></option>
									 <?php } ?>
									<label for="matc">Tiêu chí</label>
									</select>
								</div>
								<div class="input-field">
                                        <i class="material-icons prefix">school</i>
                                         <select name="thanhtich" required="required">
                                            <option value="giải nhất">Giải nhất</option>
                                            <option value="giải nhì">Giải nhì</option>
											<option value="giải ba">Giải ba</option>
											<option value="giải khuyến khích">Giải khuyến khích</option>
											<option value="công nhận">Công nhận</option>
											<option value="có tham gia">Có tham gia</option>
										</select>
                                        <label for="thanhtich">Thành tích</label>
                                 </div>
								<div class="input-field">
                                    <i class="material-icons prefix">edit</i>
                                <input type="text" name="diem" id="diem" required="required">
                                <label for="diem">Số điểm cộng</label>
                            </div>
                                <div class="input-field">
                                        <i class="material-icons prefix">image</i>
										</br>
										<input type="file" name="filebt" id="filebt">
                                        
                                       
                                </div>
								
								
                        </div>


                    </div>
                     
                    <button type="submit" name="submit" style="width:100%" class="btn">NHẬP ĐIỂM RÈN LUYỆN</button>
                </div>
              </form>

            </div>
        </div>

      <!-- The Navbar Menu Collection List -->

      <?php
require_once('../include/usidenav.php');
?>


      <?php
require_once('../include/footer.php');
?>
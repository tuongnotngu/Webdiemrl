<?php
require_once('../include/header.php');
?>



<?php

    require_once('../include/dbcon.php');
    

    if(isset($_POST['submit'])){
    $tenfile = $_FILES['filebt']['name'];
    $temp_file_name =  $_FILES['filebt']['tmp_name'];
	//$id= $_POST['id'];
	$hoten= $_POST['hoten'];
    $malop = $_POST['malop'];
    $matc= $_POST['matc'];
	$diem= $_POST['diem'];
	$hocky= $_POST['hocky'];
	//Neu thu muc chua ton tai thi tao
	if (!file_exists("../BAITAP/$macd")) mkdir("../BAITAP/$macd");
    move_uploaded_file($temp_file_name,"../BAITAP/$macd/$tenfile");
    $query = "INSERT INTO `diemrl`(`id`,`hoten`, `malop`, `matc`,`diem`,`hocky`, `tenfile`) VALUES ('$id','$hoten','$malop','$matc','$diem','$hocky','$tenfile')";
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


                        <div class="col l4">
                            <div class="input-field">
                                    <i class="material-icons prefix">person</i>
                                <input type="text" name="hoten" id="hoten" required="required">
                                <label for="hoten">Tên học sinh</label>
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
								<div class="input-field">
                                        <i class="material-icons prefix">school</i>
                                         <select name="hocky" required="required">
                                            <option value="1">Học kì 1</option>
                                            <option value="2">Học kì 2</option>
										</select>
                                        <label for="city">Học kì</label>
                                 </div>
								<div class="input-field">
								 
									<i class="material-icons prefix">edit</i>
									<select name="malop" required="required">
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
									<label for="city">Tiêu chí</label>
									</select>
								</div>
								<div class="input-field">
                                        <i class="material-icons prefix">school</i>
                                         <select name="hocky" required="required">
                                            <option value="1">Giải nhất</option>
                                            <option value="2">Giải nhì</option>
											<option value="3">Giải ba</option>
											<option value="4">Giải khuyến khích</option>
											<option value="5">Công nhận</option>
											<option value="6">Có tham gia</option>
										</select>
                                        <label for="city">Thành tích</label>
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
                     
                    <button type="submit" name="submit" style="width:90%" class="btn">Nhập vào</button>
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
<?php
require_once('../include/header.php');
require_once('../include/dbcon.php');
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
	<span class="card-title container">
	  <h5>BẢNG ĐIỂM THEO CHỦ ĐỀ VÀ LỚP</h5>
	  <h5 class="center red-text"><?php 
	  
		if(isset($baitap_added)){
		  echo $baitap_added; 
		}
		
	  ?> </h5>
	</span>
	  <form action="adminketqua.php" method="POST" enctype="multipart/form-data">


				<div class="col l4">

						<div class="input-field">
						 
							<i class="material-icons prefix">class</i>
							<select name="macd" required="required">
							<option value="">Chọn chủ đề</option>
							<?php
								$query = "SELECT * FROM `chude`" ;
								$urun = mysqli_query($con,$query);											
							
								while($data= mysqli_fetch_assoc($urun)){
								
								$macd = $data['macd'];
								$tencd = $data['tencd'];
								

							?>
							
							<option value="<?php echo $macd; ?>"><?php echo $tencd  ?></option>
							 <?php } ?>
							<label for="macd">Chủ đề</label>
							</select>
						</div>
						
						<div class="input-field">
						 
							<i class="material-icons prefix">class</i>
							<select name="malop" required="required">
							<option value="">Chọn mã lớp</option>
							<?php
								$query = "SELECT * FROM `lop`" ;
								$urun = mysqli_query($con,$query);											
							
								while($data= mysqli_fetch_assoc($urun)){
								
								$malop = $data['malop'];
								$tenlop = $data['tenlop'];
								

							?>
							
							<option value="<?php echo $malop; ?>"><?php echo $tenlop  ?></option>
							 <?php } ?>
							<label for="malop">Chọn mã lớp</label>
							</select>
						</div>
						
				</div>
			</div>
			 
			<button type="submit" name="submit" style="width:100%" class="btn">Xem bảng điểm</button>
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
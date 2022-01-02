<?php
require_once('../include/header.php');
?>



<?php

    require_once('../include/dbcon.php');
    

    if(isset($_POST['submit'])){
    $tenfile = $_FILES['filebt']['name'];
    $temp_file_name =  $_FILES['filebt']['tmp_name'];
	$mabt= $_POST['mabt'];
    $tenbt = $_POST['tenbt'];
    $macd= $_POST['macd'];
	//Neu thu muc chua ton tai thi tao
	if (!file_exists("../BAITAP/$macd")) mkdir("../BAITAP/$macd",0777);
    move_uploaded_file($temp_file_name,"../BAITAP/$macd/$tenfile");
    $query = "INSERT INTO `baitap`(`mabt`, `macd`, `tenbt`, `tenfile`) VALUES ('$mabt','$macd','$tenbt','$tenfile')";
    $run = mysqli_query($con,$query);
    
   
    if($run)
    {
        $_SESSION['baitap_added'] = "Thêm bài tập thành công";
        $baitap_added =  $_SESSION['baitap_added'];
    }
    else {

      $_SESSION['baitap_added_failed'] = "Thêm bài tập thất bại";
      $baitap_added_failed =  $_SESSION['baitap_added_failed'];
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
            <span class="card-title container">
              <h5>Thêm Bài Tập</h5>
              <h5 class="center red-text"><?php 
              
                if(isset($baitap_added)){
                  echo $baitap_added; 
                }
                
              ?> </h5>
            </span>
              <form action="" method="POST" enctype="multipart/form-data">


                        <div class="col l4">
                            <div class="input-field">
                                    <i class="material-icons prefix">task_id</i>
                                <input type="text" name="mabt" id="mabt" required="required">
                                <label for="mabt">Mã bài tập</label>
                            </div>
                            <div class="input-field">
                                <i class="material-icons prefix">task_name</i>
                                    <input type="text" name="tenbt" id="tenbt" required="required">
                                    <label for="tenbt">Tên bài tập</label>
                                </div>
								
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
                                        <i class="material-icons prefix">task</i>
										</br>
										<input type="file" name="filebt" id="filebt">
                                        
                                       
                                </div>
								
								
                        </div>


                    </div>
                     
                    <button type="submit" name="submit" style="width:100%" class="btn">Thêm Bài Tập</button>
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
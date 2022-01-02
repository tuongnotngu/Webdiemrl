<?php
require_once('../include/header.php');
require_once('../include/dbcon.php');
?>


<?php


    if(isset($_POST['add_class'])){

    $malop = $_POST['malop'];
    $tenlop= $_POST['tenlop'];
    $namhoc= $_POST['namhoc'];

   $query = "INSERT INTO `lop`(`malop`, `tenlop`, `namhoc`) VALUES ('$malop','$tenlop','$namhoc')";
    $run = mysqli_query($con,$query);
    
    if($run)
    {
        $_SESSION['class_added_successfully'] = "Tạo lớp thành công";
        $class_added_successfully = $_SESSION['class_added_successfully'];
    }
    else{

     echo "Tạo lớp thất bại ".mysqli_error($con);
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
              <h5>Thêm lớp học</h5>
              <h5 class="center red-text"><?php 
              
                if(isset($class_added_successfully)){
                  echo $class_added_successfully; 
                }
                

              ?> </h5>
            </span>
            <form action="" method="POST">
            <div class="card-content container">
              <div class="input-field">
                <i class="material-icons prefix">person</i>
                <input type="text" name="malop" id="malop" required="required">
                <label for="malop" class="">Nhập mã lớp</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">person</i>
                <input type="text" name="tenlop" id="tenlop" required="required">
                <label for="tenlop" class="">Nhập tên lớp</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">year</i>
				<select name="namhoc" required="required">
					<option value="2021-2022">2021-2022</option>
					<option value="2022-2023">2022-2023</option>
					<option value="2023-2024">2023-2024</option>
				</select>
                <label for="namhoc" class="">Nhập năm học</label>
              </div>
              <button type="submit" name="add_class" class="btn" style="width:100%;">Tạo lớp học</button>
            </div>
           </form>
        </div>

      <!-- Fixed Action Button -->

      <div class="fixed-action-btn">
              <a href="allclass.php" class="btn-floating btn-large pulse">
                <i class="material-icons large">arrow_back</i>
              </a>
      </div>
      
      <!-- The Navbar Menu Collection List -->
      <?php
require_once('../include/sidenav.php');
?>

      <?php
require_once('../include/footer.php');
?>
<?php
require_once('../include/header.php');
require_once('../include/dbcon.php');
?>


<?php


    if(isset($_POST['add_tieuchi'])){

    $matc = $_POST['matc'];
    $tentc= $_POST['tentc'];

   $query = "INSERT INTO `tieuchi`(`matc`, `tentc`) VALUES ('$matc','$tentc')";
    $run = mysqli_query($con,$query);
    
    if($run)
    {
        $_SESSION['tieuchi_added_successfully'] = "Thêm tiêu chí thành công";
        $tieuchi_added_successfully = $_SESSION['tieuchi_added_successfully'];
    }
    else{

     echo "Thêm tiêu chí thất bại ".mysqli_error($con);
    }
}
?>

      <!-- The Coding Has Been Started From Here -->

      <nav class="red darken-2">
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
              <h5>Thêm Tiêu chí</h5>
              <h5 class="center red-text"><?php 
              
                if(isset($tieuchi_added_successfully)){
                  echo $tieuchi_added_successfully; 
                }
                

              ?> </h5>
            </span>
            <form action="" method="POST">
            <div class="card-content container">
              <div class="input-field">
                <i class="material-icons prefix">topic</i>
                <input type="text" name="matc" id="matc" required="required">
                <label for="macd" class="">Nhập mã tiêu chí</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">topic</i>
                <input type="text" name="tentc" id="tentc" required="required">
                <label for="tentc" class="">Nhập tiêu chí</label>
              </div>
              <button type="submit" name="add_tieuchi" class="btn" style="width:100%;">Thêm tiêu chí</button>
            </div>
           </form>
        </div>

      <!-- Fixed Action Button -->

      <div class="fixed-action-btn">
              <a href="dstieuchi.php" class="btn-floating btn-large pulse">
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
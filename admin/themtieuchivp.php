<?php
require_once('../include/header.php');
require_once('../include/dbcon.php');
?>


<?php


    if(isset($_POST['add_tieuchivp'])){

    $matcvp = $_POST['matcvp'];
    $tentcvp= $_POST['tentcvp'];

    $query = "INSERT INTO `tieuchivp`(`matcvp`, `tentcvp`) VALUES ('$matcvp','$tentcvp')";
    $run = mysqli_query($con,$query);
    
    if($run)
    {
        $_SESSION['tieuchivp_added_successfully'] = "Thêm tiêu chí vi phạm thành công";
        $tieuchivp_added_successfully = $_SESSION['tieuchivp_added_successfully'];
    }
    else{

     echo "Thêm tiêu chí vi phạm thất bại ".mysqli_error($con);
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
              <h5>Thêm Tiêu chí vi phạm</h5>
              <h5 class="center red-text"><?php 
              
                if(isset($tieuchivp_added_successfully)){
                  echo $tieuchivp_added_successfully; 
                }
                

              ?> </h5>
            </span>
            <form action="" method="POST">
            <div class="card-content container">
              <div class="input-field">
                <i class="material-icons prefix">topic</i>
                <input type="text" name="matcvp" id="matcvp" required="required">
                <label for="matcvp" class="">Nhập mã tiêu chí vi phạm</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">topic</i>
                <input type="text" name="tentcvp" id="tentcvp" required="required">
                <label for="tentcvp" class="">Nhập tiêu chí vi phạm</label>
              </div>
              <button type="submit" name="add_tieuchivp" class="btn" style="width:100%;">Thêm tiêu chí vi phạm</button>
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
<?php
require_once('../include/header.php');
require_once('../include/dbcon.php');
?>

<?php

    //Selecting Data Form Database For Print, Using GET Method ID

    $malop = $_GET['id'];
    $query = "SELECT * FROM `lop` WHERE `malop`='$malop'";
    $run = mysqli_query($con,$query);
    $data = mysqli_fetch_assoc($run);
    
    $malop = $data['malop'];
    $tenlop = $data['tenlop'];
    $namhoc= $data['namhoc'];

?>



<?php

  //Update Course Coding

    if(isset($_POST['add_class'])){

    $malop = $_POST['malop'];
    $tenlop= $_POST['tenlop'];
    $namhoc= $_POST['namhoc'];
    $query = "UPDATE `lop` SET `tenlop` = '$tenlop',`namhoc` = '$namhoc' WHERE `malop`='$malop'";
    $run = mysqli_query($con,$query);
    if($run)
    {
        $_SESSION['class_updated_successfully'] = "Cập nhật thành công";
        $class_updated_successfully = $_SESSION['class_updated_successfully'];
    }
    else{

     echo "Cập nhật thất bại".mysqli_error($con);
     }
}
?>

      <!-- The Coding Has Been Started From Here -->

      <nav class="teal">
        <div class="container">
          <div class="nav-wrapper">
            <a href="" class="brand-logo center">Trường THPT CHUYÊN QUỐC HỌC</a>
            <a href="" class="sidenav-trigger show-on-large" data-target="slide-out"><i class="material-icons">menu</i></a>
          </div>        
        </div>
      </nav>


      <!-- The Dashboard Coding Started From Here -->

        <div class="card-panel main">
            <span class="card-title container">
              <h5>Cập nhật lớp</h5>
              <h5 class="center red-text"><?php 
              
                if(isset($class_updated_successfully)){
                  echo $class_updated_successfully; 
                }
                

              ?> </h5>
            </span>
            <form action="" method="POST">
            <div class="card-content container">
              <div class="input-field">
                <i class="material-icons prefix">class</i>
                <input type="text" name="malop" value="<?php echo $malop; ?>" id="malop" readonly="readonly" required="required">
                <label for="malop" class="">Mã lớp</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">class</i>
                <input type="text" name="tenlop" value="<?php echo $tenlop; ?>" id="tenlop" required="required">
                <label for="tenlop" class="">Tên lớp</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">class</i>
                <input type="text" name="namhoc" id="namhoc" value="<?php echo $namhoc; ?>"  required="required">
                <label for="namhoc" class="">Năm học</label>
              </div>
              <button type="submit" name="add_class" class="btn" style="width:100%;">Cập nhật lớp</button>
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
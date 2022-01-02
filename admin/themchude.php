<?php
require_once('../include/header.php');
require_once('../include/dbcon.php');
?>


<?php


    if(isset($_POST['add_chude'])){

    $macd = $_POST['macd'];
    $tencd= $_POST['tencd'];
    //$namhoc= $_POST['namhoc'];

   $query = "INSERT INTO `chude`(`macd`, `tencd`) VALUES ('$macd','$tencd')";
    $run = mysqli_query($con,$query);
    
    if($run)
    {
        $_SESSION['chude_added_successfully'] = "Tạo chủ đề thành công";
        $chude_added_successfully = $_SESSION['chude_added_successfully'];
    }
    else{

     echo "Tạo chủ đề thất bại ".mysqli_error($con);
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
              <h5>Thêm Chủ Đề</h5>
              <h5 class="center red-text"><?php 
              
                if(isset($chude_added_successfully)){
                  echo $chude_added_successfully; 
                }
                

              ?> </h5>
            </span>
            <form action="" method="POST">
            <div class="card-content container">
              <div class="input-field">
                <i class="material-icons prefix">topic</i>
                <input type="text" name="macd" id="macd" required="required">
                <label for="macd" class="">Nhập mã chủ đề</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">topic</i>
                <input type="text" name="tencd" id="tencd" required="required">
                <label for="tenlop" class="">Nhập tên chủ đề</label>
              </div>
              <button type="submit" name="add_chude" class="btn" style="width:100%;">Tạo chủ đề</button>
            </div>
           </form>
        </div>

      <!-- Fixed Action Button -->

      <div class="fixed-action-btn">
              <a href="dschude.php" class="btn-floating btn-large pulse">
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
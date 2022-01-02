<?php
require_once('../include/header.php');
require_once('../include/dbcon.php');
?>

<?php

    //Selecting Data Form Database For Print, Using GET Method ID

    $macd = $_GET['id'];
    $query = "SELECT * FROM `chude` WHERE `macd`='$macd'";
    $run = mysqli_query($con,$query);
    $data = mysqli_fetch_assoc($run);
    
    $macd = $data['macd'];
    $tencd = $data['tencd'];
   

?>



<?php

  //Update Course Coding

    if(isset($_POST['add_chude'])){

    $macd = $_POST['macd'];
    $tencd= $_POST['tencd'];
   
   $query = "UPDATE `chude` SET `tencd` = '$tencd' WHERE `macd`='$macd'";
    $run = mysqli_query($con,$query);
    
    if($run)
    {
        $_SESSION['chude_updated_successfully'] = "Cập nhật thành công";
        $chude_updated_successfully = $_SESSION['chude_updated_successfully'];
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
              <h5>Cập nhật chủ đề</h5>
              <h5 class="center red-text"><?php 
              
                if(isset($chude_updated_successfully)){
                  echo $chude_updated_successfully; 
                }
                

              ?> </h5>
            </span>
            <form action="" method="POST">
            <div class="card-content container">
              <div class="input-field">
                <i class="material-icons prefix">class</i>
                <input type="text" name="macd" value="<?php echo $macd; ?>" id="macd" readonly="readonly" required="required">
                <label for="macd" class="">Mã chủ đề</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">class</i>
                <input type="text" name="tencd" value="<?php echo $tencd; ?>" id="tencd" required="required">
                <label for="tencd" class="">Tên chủ đề</label>
              </div>
            
              <button type="submit" name="add_chude" class="btn" style="width:100%;">Cập nhật chủ đề</button>
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
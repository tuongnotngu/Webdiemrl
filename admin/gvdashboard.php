<?php
require_once('../include/dbcon.php');
require_once('../include/header.php');

?>

<?php

$query = "SELECT * FROM chude";
$run = mysqli_query($con,$query);
//$data = mysqli_num_rows($run);



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

      <div class="row main">
	  <?php  while($data = mysqli_fetch_assoc($run)){ ?>
	  
        <div class="col m12 s12 l3">
          <div class="card">
            <div class="card-content blue lighten-3 white-text">
              <h6> <b><?php echo $data['tencd']; ?></b> </h6>
              
            </div>
            <div class=" center card-action blue lighten-2 white-text" >
			
           <a href="udsbaitap.php?id=<?php echo $data['macd']; ?>&user=<?php echo $_SESSION['username']; ?>&tencd=<?php echo $data['tencd']; ?>">More Information <i class="material-icons tiny" >open_in_new</i></a>
            </div>
          </div>
        </div>
     
	  <?php }?>
	  
	   </div>

      <!-- The Navbar Menu Collection List -->
      <?php
require_once('../include/gvsidenav.php');
?>

      <?php
require_once('../include/footer.php');
?>
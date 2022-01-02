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
	 
	  
        <div class="col m12 s12 l3">
          <div class="card">
            <div class="card-content blue lighten-3 white-text">
              <h6> <b>NHẬP ĐIỂM RÈN LUYỆN</b> </h6>
              
            </div>
            <div class=" center card-action blue lighten-2 white-text" >
			
           <a href="nhapdiemrl.php">More Information <i class="material-icons tiny" >open_in_new</i></a>
            </div>
          </div>
        </div>
     
	 
	 
	   <div class="col m12 s12 l3">
          <div class="card">
            <div class="card-content blue lighten-3 white-text">
              <h6> <b>XEM ĐIỂM RÈN LUYỆN</b> </h6>
              
            </div>
            <div class=" center card-action blue lighten-2 white-text" >
			
           <a href="udsbaitap.php">More Information <i class="material-icons tiny" >open_in_new</i></a>
            </div>
          </div>
        </div>
     
	
	   </div>

      <!-- The Navbar Menu Collection List -->
      <?php
require_once('../include/usidenav.php');
?>

      <?php
require_once('../include/footer.php');
?>
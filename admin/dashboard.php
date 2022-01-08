<?php
require_once('../include/dbcon.php');
require_once('../include/header.php');

?>

<?php

// Fetching The Number Of Students

$query = "SELECT * FROM students";
$run = mysqli_query($con,$query);
// Fetching The Number Of Courses

$query = "SELECT * FROM course";
$run = mysqli_query($con,$query);

// Fetching The Number Of Teachers

$query = "SELECT * FROM teacher";
$run = mysqli_query($con,$query);

?>
      <!-- The Coding Has Been Started From Here -->

      <nav class="orange darken-3">
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
            <div class="card-content yellow darken-3 black-text">
              <b>Lớp</b>
            </div>
            <div class=" center card-action red darken-2 black-text" >
           <a href="allclass.php">Truy cập  <i class="material-icons tiny" >open_in_new</i></a>
            </div>
          </div>
        </div>
        <div class="col m12 s12 l3">
            <div class="card">
              <div class="card-content yellow darken-3 black-text">
              <b>Tổng điểm vi phạm</b>
              </div>
              <div class=" center card-action red darken-2 black-text" >
             <a href="tongdiemvp.php">Truy cập  <i class="material-icons tiny">open_in_new</i></a>
              </div>
            </div>
          </div>
          <div class="col m12 s12 l3">
              <div class="card">
                <div class="card-content yellow darken-3 black-text">
                  <b>Tổng điểm của học sinh</b> 
                </div>
                <div class=" center card-action red darken-2 black-text" >
               <a href="tongdiem.php">Truy cập <i class="material-icons tiny">open_in_new</i></a>
                </div>
              </div>
            </div>
            <div class="col m12 s12 l3">
                <div class="card">
                  <div class="card-content yellow darken-3 black-text">
                     <b>Tiêu chí</b> 
                  </div>
                  <div class=" center card-action red darken-2 black-text" >
                 <a href="themtieuchi.php">Truy cập <i class="material-icons tiny">open_in_new</i></a>
                  </div>
                </div>
              </div>
			   <div class="background">
              <img src="../images/quochoc2.jpg" class="responsive-img" alt="">
            </div>
      </div>


      <!-- The Navbar Menu Collection List -->
      <?php
require_once('../include/sidenav.php');
?>

      <?php
require_once('../include/footer.php');
?>
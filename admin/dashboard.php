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
              <b>Lớp</b>
            </div>
            <div class=" center card-action blue lighten-2 white-text" >
           <a href="allclass.php">More Information <i class="material-icons tiny" >open_in_new</i></a>
            </div>
          </div>
        </div>
        <div class="col m12 s12 l3">
            <div class="card">
              <div class="card-content blue lighten-3 white-text">
              <b>Chủ đề</b>
              </div>
              <div class=" center card-action blue lighten-2 white-text" >
             <a href="dschude.php">More Information <i class="material-icons tiny">open_in_new</i></a>
              </div>
            </div>
          </div>
          <div class="col m12 s12 l3">
              <div class="card">
                <div class="card-content blue lighten-3 white-text">
                  <b>Người dùng</b> 
                </div>
                <div class=" center card-action blue lighten-2 white-text" >
               <a href="dsnguoidung.php">More Information <i class="material-icons tiny">open_in_new</i></a>
                </div>
              </div>
            </div>
            <div class="col m12 s12 l3">
                <div class="card">
                  <div class="card-content blue lighten-3 white-text">
                     <b>Bài tập</b> 
                  </div>
                  <div class=" center card-action blue lighten-2 white-text" >
                 <a href="dsbaitap.php">More Information <i class="material-icons tiny">open_in_new</i></a>
                  </div>
                </div>
              </div>
      </div>


      <!-- The Navbar Menu Collection List -->
      <?php
require_once('../include/sidenav.php');
?>

      <?php
require_once('../include/footer.php');
?>
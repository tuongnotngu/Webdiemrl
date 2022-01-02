<?php
require_once('../include/header.php');
require_once('../include/dbcon.php');
?>

<head>
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

<!-- Checking That EditlopId Session Is Setted Or Not, If Setted Then It Will Redirect To The Edit lop Paqge -->

<?php
if(isset($_SESSION['editclassid'])){
  header("LOCATION:editlop.php");
}
?>

<!-- Creating A Session For EditlopId -->
<?php
if(isset($_GET['editlopid']))
{
  $editlopid = $_GET['editlopid'];
  $_SESSION['editlopid'] = $editlopid;
}
?>

<?php
// Coding To Fetch All lop Details

$query = "SELECT * FROM `tieuchi`";
$run = mysqli_query($con,$query);
$count = 0;

?>

      <!-- The Coding Has Been Started From Here -->

      <nav class="red darken-2">
        <div class="container">
          <div class="nav-wrapper">
            <a href="" class="brand-logo center">Trường THPT CHUYÊN QUỐC HỌC</a>
            <a href="" class="sidenav-trigger show-on-large" data-target="slide-out"><i class="material-icons">menu</i></a>
          </div>        
        </div>
      </nav>


      <!-- The Dashboard Coding Started From Here -->

      <div class="main">
	  
              <div class="card-panel center"><h5>Danh sách tiêu chí</h5>
          <card-title>
          </card-title>
          <div class="card-content">
            <table class="striped " id ="myTable">
              <thead>
                <tr>
              <th>STT</th>
              <th>Mã tiêu chsi</th>
              <th>Tiêu chí</th>
			  <th>Tùy chọn</th>
            </tr>
            
            </thead>
            <tbody>
              
                  <?php while($data= mysqli_fetch_assoc($run)){
                    $count++;
                    $matc = $data['matc'];
                    $tentc = $data['tentc'];
                    

                ?>
                <tr>
                <td> <?php echo $count; ?> </td>
                <td> <?php echo $matc; ?> </td>
                <td> <?php echo $tentc; ?> </td>
                
                <td> 
                  <a href="edittieuchi.php?id=<?php echo $matc; ?>" class=" green-text waves-light"> <i class="material-icons">mode_edit</i></a>  &nbsp;
                  <a href="deletetieuchi.php?id=<?php echo $matc; ?>" class=" red-text waves-light"  > <i class="material-icons">delete</i></a> 
                  <!--**********************New Testing Coding Started*****************************-->
                </td>
                </tr>
                  <?php } ?>
            </tbody>
            </table>
                </div>
        </div>
      </div>




      <div class="fixed-action-btn">
              <a href="themtieuchi.php" class="btn-floating btn-large pulse">
                <i class="material-icons">add</i>
              </a>
      </div>
      
      <!-- The Navbar Menu Collection List -->
      <?php
require_once('../include/sidenav.php');
?>

      <?php
require_once('../include/footer.php');
?>

<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
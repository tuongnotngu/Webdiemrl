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

$query = "SELECT * FROM `lop`";
$run = mysqli_query($con,$query);
$count = 0;

?>




<?php
require_once('../include/dbcon.php');
require_once('../include/header.php');

?>

<head>
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

<?php

$query = "select * from diemrl";
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
            <div class="col l12 m12 s12">
                <div class="card">
                    <ul class="collection">
                        <li class="collection-item">
                        <table class="striped" id="myTable">
                            <tr class="cyan lighten-2 z-depth-1">
                                <th>STT</th>
                                <th>Họ Tên</th>
                                <th>Mã tiêu chí</th>
							    <th>Thành tích</th>
							    <th>Học Kì</th>
                                <th>Số điểm</th>
                                <th>File ảnh minh chứng</th>
								<th>Xét Duyệt</th>

                            </tr>
                            
                                <?php
                                $count=0;
                                    while($data = mysqli_fetch_assoc($run)){
                                            $count++;
                                            $hoten = $data['hoten'];
                                            $anhmc = $data['anhmc'];
                                            $matc = $data['matc'];
                                            $thanhtich = $data['thanhtich'];
                                            $hocki = $data['hocki'];
											$diem = $data['diem'];
                                            
                                    
                                ?>

                                <tr>
                                    <td> <?php echo $count; ?> </td>
                                    <td> <?php echo $hoten; ?> </td>
                                    <td><?php echo $matc; ?></td>
									<td><?php echo $thanhtich; ?></td>
                                    <td><?php echo $hocki; ?></td>
                                    <td><?php echo $diem; ?></td>
                                    <td> <a href="../DIEMRL/<?php echo $matc; ?>/<?php
                                    if (isset($anhmc) && !empty($anhmc)){
                                     echo $anhmc;
                                    }
                                    else
                                    {
                                      echo "user.png";
                                    }
                                      ?>" > <?php  echo $anhmc; ?> </td>
                                      
									<td> 
                                        <a href="xacnhandiemrl.php"><i class="material-icons">mode_edit</i></a>
                                        <a href="khongxacnhandiemrl.php"><i class="material-icons">delete</i></a>
									  <!--**********************New Testing Coding Started*****************************-->
									</td>

                                    </tr>
                                <?php } ?>
                            
                        </table>
                    </li>
                    </ul>
                </div>
            </div>
        </div>

      <!-- The Navbar Menu Collection List -->
<?php

require_once('../include/gvsidenav.php');
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
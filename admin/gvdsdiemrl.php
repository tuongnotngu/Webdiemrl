<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdiemrl";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$diemhk1=0;
$diemhk2=0;

$diemrlhk1=0;
$diemrlhk2=0;

$diemvphk1=0;
$diemvphk2=0;

$sql = "SELECT username, hoten ,malop FROM users where quyen=1";
$result = mysqli_query($conn, $sql);
$count=0;
if (mysqli_num_rows($result) > 0)
{
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) 
  {
    $diemhk1=0;
    $diemhk2=0;

    $diemrlhk1=0;
    $diemrlhk2=0;

    $diemvphk1=0;
    $diemvphk2=0;
    $count++;
    $id=$count;
    $username= $row["username"];
    $hoten=$row["hoten"];
    $malop=$row["malop"];

    $sql = "SELECT diem from diemrl where username= '$username' and hocki=1 ";
    $result1 = mysqli_query($conn, $sql);
    while($row1 = mysqli_fetch_assoc($result1)) 
      {
        $diemrlhk1=$diemrlhk1+$row1['diem'];
      }

    $sql = "SELECT diem from diemrl where username= '$username' and hocki=2 ";
    $result2 = mysqli_query($conn, $sql);
    while($row2 = mysqli_fetch_assoc($result2)) 
      {
        $diemrlhk2=$diemrlhk2+$row2['diem'];
      }
    $sql = "SELECT diem from diemvp where username= '$username' and hocki=1 ";
    $result3 = mysqli_query($conn, $sql);
    while($row3 = mysqli_fetch_assoc($result3)) 
      {
          $diemvphk1=$diemvphk1+$row3['diem'];
      }
  
    $sql = "SELECT diem from diemvp where username= '$username' and hocki=2 ";
    $result4 = mysqli_query($conn, $sql);
    while($row4 = mysqli_fetch_assoc($result4)) 
      {
          $diemvphk2=$diemvphk2+$row4['diem'];
      }

    $sql = " SELECT * FROM tongdiem WHERE 1";
    $result5 = mysqli_query($conn, $sql);
    $row5 = mysqli_fetch_assoc($result5);

    $diemhk1=100+$diemrlhk1-$diemvphk1;
    $diemhk2=100+$diemrlhk2-$diemvphk2;
    //$row=$row+$row;
    //2*mysqli_num_rows($result) > mysqli_num_rows($result5)
    //$dong=0;
    if(mysqli_num_rows($result5)<2*mysqli_num_rows($result))
    {
      $sql="INSERT INTO `tongdiem` (`id`, `username`, `hoten`, `malop`, `hocki`) VALUES ('$count','$username','$hoten','$malop',1)";
      mysqli_query($conn, $sql);
      $sql="INSERT INTO `tongdiem`(`id`, `username`, `hoten`, `malop`, `hocki`) VALUES ('$count','$username','$hoten','$malop',2)";
      mysqli_query($conn, $sql);
      $sql="UPDATE `tongdiem` SET `diem`='$diemhk1' WHERE username= '$username' and hocki=1";
      mysqli_query($conn, $sql);
      $sql="UPDATE `tongdiem` SET `diem`='$diemhk2' WHERE username= '$username' and hocki=2";
      mysqli_query($conn, $sql);
    }
    if(mysqli_num_rows($result5)==2*mysqli_num_rows($result))
    {
    $sql="UPDATE `tongdiem` SET `diem`='$diemhk1' WHERE username= '$username' and hocki=1";
    mysqli_query($conn, $sql);
    $sql="UPDATE `tongdiem` SET `diem`='$diemhk2' WHERE username= '$username' and hocki=2";
    mysqli_query($conn, $sql);
    }
    
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
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
$username= $_SESSION['username'];
$sql="SELECT * FROM `users` where username='$username' ";
$run = mysqli_query($con,$sql);
while($row6 = mysqli_fetch_assoc($run)) 
      {
          $malop=$row6['malop'];
      }

$query = "SELECT * FROM `tongdiem` where malop='$malop' ";
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
	  
              <div class="card-panel center"><h5>Danh sách tổng điểm </h5>
          <card-title>
          </card-title>
          <div class="card-content">
            <table class="striped " id ="myTable">
              <thead>
                <tr>
              <th>STT</th>
              <th>Tên đăng nhập</th>
			  <th>Họ và tên</th>
			  <th>Mã lớp</th>
			  <th>Học kì</th>
			  <th>Điểm</th>
			 
            </tr>
            
            </thead>
            <tbody>
              
                  <?php while($data= mysqli_fetch_assoc($run)){
                    $count++;
                    $username = $data['username'];
                    $hoten = $data['hoten'];
					$malop = $data['malop'];
					$hocki = $data['hocki'];
					$diem = $data['diem'];
                    

                ?>
                <tr>
                <td> <?php echo $count; ?> </td>
                <td> <?php echo $username; ?> </td>
                <td> <?php echo $hoten; ?> </td>
				<td> <?php echo $malop; ?> </td>
				<td> <?php echo $hocki; ?> </td>
				<td> <?php echo $diem; ?> </td>
               
                </tr>
                  <?php } ?>
            </tbody>
            </table>
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
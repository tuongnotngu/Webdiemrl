<?php
require_once('../include/header.php');
require_once('../include/dbcon.php');
?>

<head>
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

<!-- Checking That EditlopId Session Is Setted Or Not, If Setted Then It Will Redirect To The Edit lop Paqge -->



<!-- Creating A Session For EditlopId -->


<?php
//Thong ke tat ca cac diem cua user tu bang ketqua sang bang xephang

$query = "SELECT DISTINCT username FROM `ketqua`";
$run = mysqli_query($con,$query);
//voi moi username trong bang ket qua
while($data= mysqli_fetch_assoc($run)){
	$user = $data['username'];
	
	$query = "select sum(diem) as tongdiem from ketqua where username = '$user'";
	$run0 = mysqli_query($con,$query);
	$data0 = mysqli_fetch_assoc($run0);
	$tongdiem=$data0['tongdiem'];
	
	//kiem tra trong bang xephang da co user hay chua ?
	$query = "SELECT * FROM `xephang` WHERE `username` = '$user' ";
	$run1 = mysqli_query($con,$query);
	$row = mysqli_num_rows($run1);
		
if($row < 1){
	//chưa có dữ liệu thì thêm mới vào bảng xếp hạng
	
	//Lay du lieu can them
	$query = "SELECT username, hoten, tenlop FROM `users`,`lop` where users.malop =lop.malop and username='$user';";
	$run2 = mysqli_query($con,$query);
	$data2 = mysqli_fetch_assoc($run2);
	$hoten = $data2['hoten'];
	$tenlop = $data2['tenlop'];
	
	$query = "SELECT * FROM `xephang`";
	$run4 = mysqli_query($con,$query);
	$soluong = mysqli_num_rows($run4)+1;
	
	
	$query = "INSERT INTO `xephang`(`username`, `hoten`, `lop`, `tongdiem`,`thutu`) VALUES ('$user','$hoten','$tenlop','$tongdiem','$soluong')";
	$run3 = mysqli_query($con,$query);
}else {
	//Cập nhật dữ liệu
	$query = "UPDATE `xephang` SET `tongdiem` = '$tongdiem' WHERE `username`='$user'";
    $run3 = mysqli_query($con,$query);
}

}


//Lay du lieu tu bang xep hang day len man hinh
// Coding To Fetch All lop Details

$query = "SELECT * FROM `xephang` order by tongdiem desc, thutu asc";
$run = mysqli_query($con,$query);
$count = 0;

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

      <div class="main">
           <div class="card-panel"><h5>BẢNG XẾP HẠNG</h5>

          <div class="card-content">
            <table class="striped " id ="myTable">
              <thead>
                <tr>
              <th>Vị thứ</th>
			  <th>Lớp</th>
			  <th>Tổng điểm</th>
            </tr>
            
            </thead>
            <tbody>
              
                <?php while($data= mysqli_fetch_assoc($run)){
                    $count++;
                    //$username = $data['username'];
                    //$hoten = $data['hoten'];
					$lop = $data['lop'];
					$tongdiem = $data['tongdiem'];
                ?>
                <tr>
                <td> <?php echo $count; ?> </td>
                <td> <?php echo $username; ?> </td>
                <td> <?php echo $hoten; ?> </td>
				<td> <?php echo $lop; ?> </td>
				<td> <?php echo $tongdiem; ?> </td>
                </tr>
                  <?php } ?>
            </tbody>
            </table>
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

<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
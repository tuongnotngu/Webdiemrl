<?php
require_once('../include/header.php');
?>

<?php

    require_once('../include/dbcon.php');
    
	$macd= $_POST['macd'];
    $malop = $_POST['malop'];
	
	//$macd= $_SESSION['macd'];
    //$malop = $_SESSION['malop'];
	
	//Lấy danh sách mã bài tập có macd
	$query = "SELECT mabt FROM `baitap` where macd='$macd'" ;
	$run = mysqli_query($con,$query);											
	$bi=0;
	while($data= mysqli_fetch_assoc($run)){
		$dsbai[$bi] = $data['mabt'];
		$bi++;
	}
	
	//Lấy danh sách username trong lớp có malop
	$query = "SELECT * FROM `users` where malop='$malop'" ;
	$run = mysqli_query($con,$query);											
	$hi=0;

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
	  <h5>BẢNG ĐIỂM THEO CHỦ ĐỀ VÀ LỚP</h5>
	  <h5 class="center red-text">  </h5>
	</span>



	<div class="card-content">
	<table class="striped " id ="myTable">
	  <thead>
		<tr>
	  <th>STT</th>
	  <th>Username</th>
	  <th>Họ và Tên</th>
	  <th>Lớp</th>
	  <?php for($i=0;$i<$bi;$i++){ ?>
			<th><?php echo $dsbai[$i];?></th>
	  <?php }?>
	  <th>Tổng điểm</th>
	</tr>
	
	</thead>
	<tbody>
	  
		<?php 
		$count=0;
		while($data= mysqli_fetch_assoc($run)){
			$count++;
			$username = $data['username'];
			$hoten = $data['hoten'];
			$malop = $data['malop'];

		?>
		<tr>
		<td> <?php echo $count; ?> </td>
		<td> <?php echo $username; ?> </td>
		<td> <?php echo $hoten; ?> </td>
		<td> <?php echo $malop; ?> </td>
		<?php $tong =0;
			for($i=0;$i<$bi;$i++){ 
				$query = "SELECT diem FROM `ketqua` WHERE `username` = '$username' and  `mabt` = '$dsbai[$i]'";
				$run1 = mysqli_query($con,$query);
				$row = mysqli_num_rows($run1);
		
				if($row < 1){
					$diem= "";
				} else{
					$data1 = mysqli_fetch_assoc($run1);
					$diem = $data1['diem'];
					$tong +=$diem;
				}
			?>
				<td><?php echo $diem;?></td>
			<?php }?>
			<td> <?php echo $tong; ?> </td>
			</tr>
			  <?php } ?>
		</tbody>
		</table>
	</div>
</div>
      <!-- The Navbar Menu Collection List -->

      <?php
require_once('../include/sidenav.php');
?>


      <?php
require_once('../include/footer.php');
?>
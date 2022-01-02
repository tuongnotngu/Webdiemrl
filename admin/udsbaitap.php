<?php
require_once('../include/dbcon.php');
require_once('../include/header.php');

?>

<head>
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

<?php  ?>

<?php

	$id = $_GET['id'];
	$user = $_GET['user'];
	$tencd = $_GET['tencd'];
	$query = "select * from baitap where `macd`='$id'";
	$run = mysqli_query($con,$query);

    if(isset($_POST['submit'])){
    $file_name = $_FILES['btfile']['name'];
    $temp_baitap_name =  $_FILES['btfile']['tmp_name'];

	if (!file_exists("../BAINOP/$user")) mkdir("../BAINOP/$user",0777);
	$tenbainop = pathinfo($file_name)['filename'];
	$loaibainop = pathinfo($file_name)['extension'];
	
    move_uploaded_file($temp_baitap_name,"../BAINOP/[$user][$tenbainop].$loaibainop");

   
    if(($_FILES['btfile']['error'] == 0) )
    {
        $_SESSION['nop_bai_ok'] = "Đã nộp bài thành công";
        $nop_bai_ok =  $_SESSION['nop_bai_ok'];
    }
    else {

      $_SESSION['nop_bai_not_ok'] = "Nộp bài thất bại";
      $nop_bai_not_ok =  $_SESSION['nop_bai_not_ok'];
     }
}
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
	 </br>
	<div class="row main" >

	
	
	    <div class="col l12 m12 s12">
		<form action="" method="POST" enctype="multipart/form-data">
			<h6>  Chọn file nộp bài:
			  <input type="file" name="btfile" id="btfile"> 
			  <button type="submit" name="submit"  class="btn">Nộp bài</button></h6>
	    </form>
		</div>
		
		<span class="card-title container">
		  <h5> <?php echo $tencd; ?></h5>
		  <h5 class="center red-text"><?php 
		  
			if(isset($nop_bai_ok)){
			  echo $nop_bai_ok; 
			}
			
		  ?> </h5>
		</span>
	
		
	</div>


      <!-- The Dashboard Coding Started From Here -->

        <div class="row main">
            <div class="col l12 m12 s12">
                <div class="card">
                    <ul class="collection">
                        <li class="collection-item">
                        <table class="striped" id="myTable">
                            <tr class="cyan lighten-2 z-depth-1">
                                <th>Sr. No</th>
                                <th>File bài tập</th>
                                <th>Mã bài</th>
                                <th>Tên bài</th>
                                <th>Mã chủ đề</th>
							
                            </tr>
                            
                                <?php
                                $count=0;
                                    while($data = mysqli_fetch_assoc($run)){
                                            $count++;
                                            $tenfile = $data['tenfile'];
                                            $mabt = $data['mabt'];
                                            $macd = $data['macd'];
                                            $tenbt = $data['tenbt'];
                                            
                                    
                                ?><tr>
                                    <td> <?php echo $count; ?> </td>
                                    <td> <a href="../BAITAP/<?php echo $macd; ?>/<?php
                                    if (isset($tenfile) && !empty($tenfile)){
                                     echo $tenfile;
                                    }
                                    else
                                    {
                                      echo "user.png";
                                    }
                                      ?>" > <?php  echo $tenfile; ?> </td>
                                    <td><?php echo $mabt; ?></td>
									<td><?php echo $tenbt; ?></td>
                                    <td><?php echo $macd; ?></td>
                                    
									
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

require_once('../include/usidenav.php');
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
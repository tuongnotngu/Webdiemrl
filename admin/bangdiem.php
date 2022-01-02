
<?php
require_once('../include/dbcon.php');
require_once('../include/header.php');

date_default_timezone_set("Asia/Ho_Chi_Minh");
 //$timestamp = time();
  //echo($timestamp);
   //echo(date("F d, Y h:i:s", $timestamp));
?>

<?php
// Đọc thư mục kết quả đưa dữ liệu vào bảng kết quả ( co thời gian)
// Lấy dữ liệu trong bảng kết quả đưa ra màn hình theo user (sắp theo thời gian)
//Doc du lieu tu file text
//H:\xampp\htdocs\laptrinh\BAINOP\Logs
foreach (glob("../BAINOP/Logs/*.log") as $filename) {
	//Thong tin trong bang ketqua
	$f_cdate = date ("Y-m-d H:i:s.u", filectime($filename));
	$f_fullname = basename($filename); // file.log
	$tenfile = basename($filename, ".log"); // $file is set to "file"
	
	$pieces = explode("]", $tenfile);
	$f_user = substr($pieces[0], 1, strlen($pieces[0]));
	$f_mabai = strtoupper(substr($pieces[1], 1, strlen($pieces[1])));
	$f_duoi = $pieces[2];//substr($pieces[2], 1, strlen($pieces[2]));
	$tenfilecode = $f_mabai.$f_duoi;
	//Doc diem tu noi dung file
	$fp = fopen($filename, "r");//mở file ở chế độ đọc
	$line1 = fgets($fp);
	$mark = explode(" ", $line1);
	if (ctype_digit(trim($mark[1][0]))) {
		$diem = (float)$mark[1];
		//echo $diem;
	}
	else {
		$diem =0;
	}
	fclose($fp);
	//Kiem tra du lieu trong bang ketqua da co du lieu hay chua
	$query = "SELECT * FROM `ketqua` WHERE `username` = '$f_user' and mabt='$f_mabai'";
	$run = mysqli_query($con,$query);
	$row = mysqli_num_rows($run);
		
	if($row < 1){
		//Luu du lieu da lay tu file log vao database
		$query = "INSERT INTO `ketqua`(`username`, `mabt`, `diem`, `filekq`,`logfile`,`ngaygionop`) VALUES ('$f_user','$f_mabai','$diem','$tenfilecode','$f_fullname','$f_cdate')";

		
	} else {
		//Cập nhật dữ liệu
		$query = "UPDATE `ketqua` SET `diem` = '$diem', ngaygionop = '$f_cdate' WHERE `username`='$f_user' and mabt='$f_mabai'";
		//$run = mysqli_query($con,$query);
	}
	//echo $query;
	$run = mysqli_query($con,$query);
	//Di chuyen file Logs sang thư mục SAVE_LOGS
	rename($filename, '../BAINOP/SAVE_LOGS/'.$f_fullname);
}



?>
<head>
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

<?php
//Lay du lieu tu bang ketqua
$user = $_SESSION['username'];
$query = "select * from ketqua where username = '$user' order by ngaygionop DESC";
$run = mysqli_query($con,$query);
//Lay du lieu tu bang baitap
$query = "select * from baitap";
$urun = mysqli_query($con,$query);
$icd = 0;
while($u_data = mysqli_fetch_assoc($urun)){
	$a_mabt[$icd] = $u_data['mabt'];
	$a_macd[$icd] = $u_data['macd'];
	$a_tenfile[$icd] = $u_data['tenfile'];
	$icd++;
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


      <!-- The Dashboard Coding Started From Here -->

        <div class="row main">
            <div class="col l12 m12 s12">
                <div class="card">
                    <ul class="collection">
                        <li class="collection-item">
                        <table  id="myTable">
                            <tr class="cyan lighten-2 z-depth-1">
                                <th>Sr. No</th>
                                <th>Mã bài</th>
                                <th>Điểm</th>
								<th>Thời gian nộp</th>
                            </tr>
                            
                                <?php
									$count=0;
									$tongdiem=0;
                                    while($data = mysqli_fetch_assoc($run)){
                                            $count++;
                                            //$username = $data['tenfile'];
                                            $mabt = $data['mabt'];
											//tim ma chu de
											
											for ($x = 0; $x < $icd; $x++) {
												if ($a_mabt[$x] == $mabt) {
													$macd = $a_macd[$x];
													$tenfile = $a_tenfile[$x];
													break;
												}
											}
                                            $diem = $data['diem'];
                                            $filekq = $data['filekq'];
											$logfile = $data['logfile'];
											$ngaygionop = $data['ngaygionop'];
											$tongdiem = $tongdiem+$diem;
                                ?><tr>
                                    <td> <?php echo $count; ?> </td>
                                    <td> 
										<a href="../BAITAP/<?php echo $macd; ?>/<?php echo $tenfile; ?><?php
										?>" > <?php  echo $mabt; ?> </td>
                                    <td>
										<a href="../BAINOP/<?php echo $user; ?>/<?php echo $filekq; ?><?php
										?>" > <?php  echo $diem; ?>
									</td>
									<td>
										<a href="../BAINOP/SAVE_LOGS/<?php echo $logfile; ?><?php
										?>" > <?php  echo $ngaygionop; ?>
									</td>
                                    </tr>
                                <?php } ?>
                        </table>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
		
		<div class="row main">
            <div class="col l12 m12 s12">
                <div class="card">
				<h6 align="center"> <b>Tổng điểm: <?php  echo $tongdiem;?> </b></h6>
				</div>
            </div>
        </div>
<?php 
//Luu du lieu vao bang xep hang
//kiem tra trong bang xephang da co user hay chua ?
$query = "SELECT * FROM `xephang` WHERE `username` = '$user' ";
$run = mysqli_query($con,$query);
$row = mysqli_num_rows($run);
	
if($row < 1){
	//chưa có dữ liệu thì thêm mới vào bảng xếp hạng
	//Lay du lieu can them
	$query = "SELECT username, hoten, tenlop FROM `users`,`lop` where users.malop =lop.malop and username='$user';";
	$run = mysqli_query($con,$query);
	$data = mysqli_fetch_assoc($run);
	$hoten = $data['hoten'];
	$tenlop = $data['tenlop'];
	
	$query = "SELECT * FROM `xephang`";
	$run4 = mysqli_query($con,$query);
	$soluong = mysqli_num_rows($run4)+1;
	
	
	$query = "INSERT INTO `xephang`(`username`, `hoten`, `lop`, `tongdiem`,`thutu`) VALUES ('$user','$hoten','$tenlop','$tongdiem','$soluong')";
	$run = mysqli_query($con,$query);
}else {
	//Cập nhật dữ liệu
	$query = "UPDATE `xephang` SET `tongdiem` = '$tongdiem' WHERE `username`='$user'";
    $run = mysqli_query($con,$query);
}
	

?>
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
<?php
require_once('dbcon.php');
$uid = $_SESSION['uid'];
$query = "SELECT * FROM `users` WHERE `id`='$uid'";
$run = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($run);
$username = $data['username'];
$hoten = $data['hoten'];
$image = $data['image'];
//$id =$data['id'];

?>

<ul class="sidenav collapsible sidenav-fixed" id="slide-out">
        <li>
            <div class="background">
              <img src="../images/quochoc9.jpg" class="responsive-img" alt="">
            </div>
            
           <b> <span class="hoten red-text"><i class="material-icons">person</i><?php echo $hoten; ?></span></b>
         
        </li>
        <li><a href="udashboard.php"><i class="material-icons">home</i>Trang chủ</a></li>
		
		
		<li>
          <div class="collapsible-header">
            <ul>
              <ul>
              <li>
              <i class=" collapsible-header material-icons">task</i> <span style="margin-left:25px;">Điểm</span>  <i class="material-icons right prefix" style="margin-right:0; margin-left:80px;">arrow_drop_down</i>
              </li>
            </ul>
            </ul>
          </div>
          <div class="collapsible-body">
            <ul>
               <ul>
              <li>
              <li><a href="themdiemrl.php"><i class="material-icons">tasks</i>Thêm điểm</a></li>
              <li><a href="dsdiemrl.php"><i class="material-icons">tasks</i>Danh sách điểm</a></li>
              </li>
            </ul>
            </ul>
          </div>
        </li>
		
        <div class="divider"></div>
        <li><a href="../include/logout.php"><i class="material-icons">logout</i>Logout</a></li>

      </ul>

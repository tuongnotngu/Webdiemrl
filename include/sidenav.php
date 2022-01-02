<?php
require_once('dbcon.php');
$uid = $_SESSION['uid'];
$query = "SELECT * FROM `users` WHERE `id`='$uid'";
$run = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($run);
$username = $data['username'];
$hoten = $data['hoten'];
$image = $data['image'];

?>

<ul class="sidenav collapsible sidenav-fixed" id="slide-out">
        <li>
          <div class="user-view">
            <div class="background">
              <img src="../images/bg1.jpg" class="responsive-img" alt="">
            </div>
              <a href="../admin/edituser.php?id=<?php echo $uid; ?>" class="">
              <img src="../userimg/<?php
                                    if (isset($image) && !empty($image)){
                                     echo $image;
                                    }
                                    else
                                    {
                                      echo "user.png";
                                    }
                                      ?>" alt="" class="responsive-img circle">
            </a>
            <span class="username"><?php echo $username; ?></span>
            <span class="hoten"><?php echo $hoten; ?></span>
          </div>
        </li>
        <li><a href="dashboard.php"><i class="material-icons">dashboard</i>Dashboard</a></li>
		
		
		<li>
          <div class="collapsible-header">
            <ul>
              <li>
              <i class=" collapsible-header material-icons">class</i> <span style="margin-left:25px;">Lớp học</span>  <i class="material-icons right prefix" style="margin-right:0; margin-left:80px;">arrow_drop_down</i>
              </li>
            </ul>
          </div>
          <div class="collapsible-body">
            <ul>
              <li>
              <li><a href="bosunglop.php"><i class="material-icons">group_add</i>Thêm lớp</a></li>
              <li><a href="allclass.php"><i class="material-icons">groups</i>Danh sách lớp</a></li>
              </li>
            </ul>
          </div>
        </li>
		
		<li>
          <div class="collapsible-header">
            <ul>
              <li>
              <i class=" collapsible-header material-icons">topic</i> <span style="margin-left:25px;">Tiêu chí</span>  <i class="material-icons right prefix" style="margin-right:0; margin-left:80px;">arrow_drop_down</i>
              </li>
            </ul>
          </div>
          <div class="collapsible-body">
            <ul>
              <li>
              <li><a href="themtieuchi.php"><i class="material-icons">group_add</i>Thêm tiêu chí</a></li>
              <li><a href="dstieuchi.php"><i class="material-icons">groups</i>Danh sách tiêu chí</a></li>
              </li>
            </ul>
          </div>
        </li>
		
		
		
		<li>
          <div class="collapsible-header">
            <ul>
              <li>
              <i class=" collapsible-header material-icons">person</i> <span style="margin-left:25px;">Users</span>  <i class="material-icons right prefix" style="margin-right:0; margin-left:80px;">arrow_drop_down</i>
              </li>
            </ul>
          </div>
          <div class="collapsible-body">
            <ul>
              <li>
              <li><a href="themnguoidung.php"><i class="material-icons">group_add</i>Thêm User</a></li>
              <li><a href="dsnguoidung.php"><i class="material-icons">groups</i>Danh sách User</a></li>
              </li>
            </ul>
          </div>
        </li>
		
		<li>
          <div class="collapsible-header">
            <ul>
              <li>
              <i class=" collapsible-header material-icons">task</i> <span style="margin-left:25px;">Điểm</span>  <i class="material-icons right prefix" style="margin-right:0; margin-left:80px;">arrow_drop_down</i>
              </li>
            </ul>
          </div>
          <div class="collapsible-body">
            <ul>
              <li>
              <li><a href="themdiemrl.php"><i class="material-icons">tasks</i>Thên Điểm Rèn Luyện</a></li>
              <li><a href="dsdiemrl.php"><i class="material-icons">tasks</i>Danh Sách Điểm Rèn Luyện</a></li>
              </li>
            </ul>
          </div>
        </li>
		<li><a href="../admin/abangxephang.php"><i class="material-icons">notebook</i>Bảng xếp hạng</a></li>
		<li><a href="../admin/adminbangdiem.php"><i class="material-icons">chair</i>Bảng điểm theo chủ đề</a></li>
        <div class="divider"></div>
        <li><a href="../include/logout.php"><i class="material-icons">logout</i>Logout</a></li>
        
        <li><a href="contact.php"><i class="material-icons">call</i>Contact Us</a></li>

      </ul>

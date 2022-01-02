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
          <div class="user-view">
            <div class="background">
              <img src="../images/bg1.jpg" class="responsive-img" alt="">
            </div>
            <a href="../admin/uedituser.php?id=<?php echo $uid; ?>" class="">
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
           <b> <span class="username"><?php echo $username; ?></span> --</b>
            <span class="hoten"><?php echo $hoten; ?></span>
          </div>
        </li>
        <li><a href="udashboard.php"><i class="material-icons">udashboard</i>Students Dashboard</a></li>
		
		
		<li>
          <div class="collapsible-header">
            <ul>
              <li>
              <i class=" collapsible-header material-icons">class</i> <span style="margin-left:25px;">ĐIỂM RL</span>  <i class="material-icons right prefix" style="margin-right:0; margin-left:80px;">arrow_drop_down</i>
              </li>
            </ul>
          </div>
          <div class="collapsible-body">
            <ul>
              <li>

				<li><a href="../admin/udiemrl.php"><i class="material-icons">topic</i>NHẬP ĐIỂM RL</a></li>
				<li><a href="../admin/udiemrl.php"><i class="material-icons">topic</i>XEM ĐIỂM RL</a></li>
				
		
			  
              </li>
            </ul>
          </div>
        </li>
		
		

		<li><a href="../admin/bangdiem.php"><i class="material-icons">mouse</i>Bảng điểm</a></li>
		<li><a href="../admin/bangxephang.php"><i class="material-icons">keyboard</i>Bảng xếp hạng</a></li>
        <div class="divider"></div>
        <li><a href="../include/logout.php"><i class="material-icons">logout</i>Logout</a></li>
        <li><a href="contact.php"><i class="material-icons">call</i>Contact Us</a></li>

      </ul>

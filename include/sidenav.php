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
            <div class="avatar">
              <img src="../images/logo.jpg" class="responsive-img" alt="">
			  <b> <span class="hoten red-text"><i class="material-icons"></i><?php echo "  Đoàn trường THPT Chuyên Quốc Học"; ?></span></b>
            </div>
        </li>
        <li><a href="dashboard.php"><i class="material-icons">home</i>Trang chủ</a></li>
		
		
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
              <li><a href="bosunglop.php"><i class="material-icons">edit</i>Thêm lớp</a></li>
              <li><a href="allclass.php"><i class="material-icons">list</i>Danh sách lớp</a></li>
              </li>
            </ul>
          </div>
        </li>

        <li>
          <div class="collapsible-header">
            <ul>
              <li>
              <i class=" collapsible-header material-icons">task</i> <span style="margin-left:25px;">Tiêu chí</span>  <i class="material-icons right prefix" style="margin-right:0; margin-left:80px;">arrow_drop_down</i>
              </li>
            </ul>
          </div>
          <div class="collapsible-body">
            <ul>
              <li>
              <li><a href="themtieuchi.php"><i class="material-icons">edit</i>Thêm tiêu chí rèn luyện</a></li>
              <li><a href="themtieuchivp.php"><i class="material-icons">edit</i>Thêm tiêu chí vi phạm</a></li>
              <li><a href="dstieuchi.php"><i class="material-icons">list</i>Danh sách tiêu chí</a></li>
              </li>
            </ul>
          </div>
        </li>

		<li>
          <div class="collapsible-header">
            <ul>
              <li>
              <i class=" collapsible-header material-icons">person</i> <span style="margin-left:25px;">Học sinh</span>  <i class="material-icons right prefix" style="margin-right:0; margin-left:80px;">arrow_drop_down</i>
              </li>
            </ul>
          </div>
          <div class="collapsible-body">
            <ul>
              <li>
              <li><a href="themnguoidung.php"><i class="material-icons">school</i>Thêm học sinh</a></li>
              <li><a href="dsnguoidung.php"><i class="material-icons">list</i>Danh sách học sinh</a></li>
              </li>
            </ul>
          </div>
        </li>
		
		<li>
          <div class="collapsible-header">
            <ul>
              <li>
              <i class=" collapsible-header material-icons">topic</i> <span style="margin-left:25px;">Điểm</span>  <i class="material-icons right prefix" style="margin-right:0; margin-left:80px;">arrow_drop_down</i>
              </li>
            </ul>
          </div>
          <div class="collapsible-body">
            <ul>
              <li>
              <li><a href="themdiemvp.php"><i class="material-icons">edit</i>Thêm Điểm Vi Phạm</a></li>
              <li><a href="tongdiemvp.php"><i class="material-icons">list</i>Tổng Điểm Vi Phạm</a></li>
              <li><a href="tongdiemrl.php"><i class="material-icons">list</i>Tổng Điểm Rèn Luyện</a></li>
              <li><a href="tongdiem.php"><i class="material-icons">list</i>Tổng Điểm Hạnh Kiểm</a></li>
              </li>
            </ul>
          </div>
        </li>
		<li>
          <div class="collapsible-header">
            <ul>
              <li>
              <i class=" collapsible-header material-icons">task</i> <span style="margin-left:25px;">Bài tập</span>  <i class="material-icons right prefix" style="margin-right:0; margin-left:80px;">arrow_drop_down</i>
              </li>
            </ul>
          </div>
          <div class="collapsible-body">
            <ul>
              <li>
              <li><a href="thembaitap.php"><i class="material-icons">tasks</i>Thêm Bài Tập</a></li>
              <li><a href="dsbaitap.php"><i class="material-icons">tasks</i>Danh Sách Bài Tập</a></li>
              </li>
            </ul>
          </div>
        </li>
		<li>
        </li>
        <div class="divider"></div>
        <li><a href="../include/logout.php"><i class="material-icons">logout</i>Đăng xuất</a></li>
        
        <li><a href="contact.php"><i class="material-icons">information</i>Thông tin</a></li>

      </ul>

<?php
require_once('../include/dbcon.php');
require_once('../include/header.php');

?>

<head>
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

<?php

$query = "select * from users";
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
                                <th>Sr. No</th>
                                <th>Ảnh đại diện</th>
                                <th>Họ và tên</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Ngày Sinh</th>
                                <th>Mã lớp</th>
								<th>Quyền</th>
								<th>Action</th>
                            </tr>
                            
                                <?php
                                $count=0;
                                    while($data = mysqli_fetch_assoc($run)){
                                            $count++;
                                            $image = $data['image'];
                                            $hoten = $data['hoten'];
                                            $ngaysinh = $data['ngaysinh'];
                                            $username = $data['username'];
                                            $password = $data['password'];
                                            $malop  = $data['malop'];
                                            $quyen = $data['quyen'];
											$id = $data['id'];
                                            
                                    
                                ?><tr>
                                    <td> <?php echo $count; ?> </td>
                                    <td> <img src="../userimg/<?php
                                    if (isset($image) && !empty($image)){
                                     echo $image;
                                    }
                                    else
                                    {
                                      echo "user.png";
                                    }
                                      ?>" class="responsive-img circle" style="width: 100px;"> </td>
                                    <td><?php echo $hoten; ?></td>
                                    <td><?php echo $username; ?></td>
                                    <td><?php echo $password; ?></td>
									<td><?php echo $ngaysinh; ?></td>
                                    <td><?php echo $malop; ?></td>
                                    <td><?php echo $quyen; ?></td>
									<td> 
									  <a href="edituser.php?id=<?php echo $id; ?>" class=" green-text waves-light"> <i class="material-icons">mode_edit</i></a>  &nbsp;
									  <a href="deleteuser.php?id=<?php echo $id; ?>" class=" red-text waves-light"  > <i class="material-icons">delete</i></a> 
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
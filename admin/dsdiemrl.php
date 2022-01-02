<?php
require_once('../include/dbcon.php');
require_once('../include/header.php');

?>

<head>
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

<?php

$query = "select * from baitap";
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
                                <th>File bài tập</th>
                                <th>Mã bài</th>
                                <th>Tên bài</th>
                                <th>Mã chủ đề</th>
								<th>Action</th>
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
                                    
									<td> 
									  <a href="editbaitap.php?id=<?php echo $id; ?>" class=" green-text waves-light"> <i class="material-icons">mode_edit</i></a>  &nbsp;
									  <a href="deletebaitap.php?id=<?php echo $id; ?>" class=" red-text waves-light"  > <i class="material-icons">delete</i></a> 
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
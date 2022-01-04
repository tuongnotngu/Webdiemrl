<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdiemrl";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$diemhrlk1=0;
$diemrlhk2=0;

$diemvphk1=0;
$diemvphk2=0;

$sql = "SELECT username, hoten ,malop FROM users where quyen=1";
$result = mysqli_query($conn, $sql);
$count=0;
if (mysqli_num_rows($result) > 0)
{
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) 
  {
    $diemhk1=0;
    $diemhk2=0;

    $diemhrlk1=0;
    $diemhrlk2=0;

    $diemvphk1=0;
    $diemvphk2=0;

    $count++;
    $id=$count;
    $username= $row["username"];
    $hoten=$row["hoten"];
    $malop=$row["malop"];

    $sql = "SELECT diem from diemrl where username= '$username' and hocki=1 ";
    $result1 = mysqli_query($conn, $sql);
    while($row1 = mysqli_fetch_assoc($result1)) 
      {
        $diemrlhk1=$diemhk1+$row1['diem'];
      }

    $sql = "SELECT diem from diemrl where username= '$username' and hocki=2 ";
    $result2 = mysqli_query($conn, $sql);
    while($row2 = mysqli_fetch_assoc($result2)) 
      {
        $diemrlhk2=$diemhk2+$row2['diem'];
      }

    $sql = "SELECT diem from diemvp where username= '$username' and hocki=1 ";
    $result1 = mysqli_query($conn, $sql);
    while($row1 = mysqli_fetch_assoc($result1)) 
      {
          $diemvphk1=$diemvphk1+$row1['diem'];
      }
  
    $sql = "SELECT diem from diemvp where username= '$username' and hocki=2 ";
    $result2 = mysqli_query($conn, $sql);
    while($row2 = mysqli_fetch_assoc($result2)) 
      {
          $diemvphk2=$diemvphk2+$row2['diem'];
      }
     
      
    $sql = " SELECT * FROM tongdiem WHERE 1";
    $result3 = mysqli_query($conn, $sql);
    $row3 = mysqli_fetch_assoc($result3);
    $diemhk1=100+$diemrlhk1-$diemvphk1;
    $diemhk2=100+$diemrlhk2-$diemvphk2;
    //$row=$row+$row;
    if(2*mysqli_num_rows($result) > mysqli_num_rows($result3))
    {
      $diemhk1=100+$diemrlhk1-$diemvphk1;
      $diemhk2=100+$diemrlhk2-$diemvphk2;
      $sql="INSERT INTO `tongdiem` (`id`, `username`, `hoten`, `malop`, `hocki`) VALUES ('$count','$username','$hoten','$malop',1)";
      mysqli_query($conn, $sql);
      $sql="INSERT INTO `tongdiem`(`id`, `username`, `hoten`, `malop`, `hocki`) VALUES ('$count','$username','$hoten','$malop',2)";
      mysqli_query($conn, $sql);
      $sql="UPDATE `tongdiem` SET `diem`='$diemhk1' WHERE username= '$username' and hocki=1";
      mysqli_query($conn, $sql);
      $sql="UPDATE `tongdiem` SET `diem`='$diemhk2' WHERE username= '$username' and hocki=2";
      mysqli_query($conn, $sql);
    }
    else
    {
    $sql="UPDATE `tongdiemv` SET `diem`='$diemhk1' WHERE username= '$username' and hocki=1";
    mysqli_query($conn, $sql);
    $sql="UPDATE `tongdiemrl` SET `diem`='$diemhk2' WHERE username= '$username' and hocki=2";
    mysqli_query($conn, $sql);
    }
    
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
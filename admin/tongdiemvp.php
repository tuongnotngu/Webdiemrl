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
$diemhk1=0;
$diemhk2=0;
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
    $count++;
    $id=$count;
    $username= $row["username"];
    $hoten=$row["hoten"];
    $malop=$row["malop"];

    $sql = "SELECT diem from diemvp where username= '$username' and hocki=1 ";
    $result1 = mysqli_query($conn, $sql);
    while($row1 = mysqli_fetch_assoc($result1)) 
      {
        $diemhk1=$diemhk1+$row1['diem'];
      }

    $sql = "SELECT diem from diemvp where username= '$username' and hocki=2 ";
    $result2 = mysqli_query($conn, $sql);
    while($row2 = mysqli_fetch_assoc($result2)) 
      {
        $diemhk2=$diemhk2+$row2['diem'];
      }
    //"INSERT INTO `tongdiemvp` (`id`, `username`, `hoten`, `malop`,) VALUES ('$id','$username','$hoten','$malop')";
    $sql = " SELECT * FROM tongdiemvp WHERE 1";
    $result3 = mysqli_query($conn, $sql);
    $row3 = mysqli_fetch_assoc($result3);
    $row=$row+$row;
    if($row > $row3)
    {
      $sql="INSERT INTO `tongdiemvp` (`id`, `username`, `hoten`, `malop`, `hocki`) VALUES ('$count','$username','$hoten','$malop',1)";
      mysqli_query($conn, $sql);
      $sql="INSERT INTO `tongdiemvp`(`id`, `username`, `hoten`, `malop`, `hocki`) VALUES ('$count','$username','$hoten','$malop',2)";
      mysqli_query($conn, $sql);
      $sql="UPDATE `tongdiemvp` SET `diem`='$diemhk1' WHERE username= '$username' and hocki=1";
      mysqli_query($conn, $sql);
      $sql="UPDATE `tongdiemvp` SET `diem`='$diemhk2' WHERE username= '$username' and hocki=2";
      mysqli_query($conn, $sql);
    }
    else
    {
    $sql="UPDATE `tongdiemvp` SET `diem`='$diemhk1' WHERE username= '$username' and hocki=1";
    mysqli_query($conn, $sql);
    $sql="UPDATE `tongdiemvp` SET `diem`='$diemhk2' WHERE username= '$username' and hocki=2";
    mysqli_query($conn, $sql);
    }
    
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
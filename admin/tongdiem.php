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
$sql = "SELECT username, hoten ,malop FROM users";
$result = mysqli_query($conn, $sql);
$count=0;
if (mysqli_num_rows($result) > 0)
{
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) 
  {
    $count++;
    $id=$count;
    $username= $row["username"];
    $hoten=$row["hoten"];
    $malop=$row["malop"];
    //"INSERT INTO `tongdiemvp` (`id`, `username`, `hoten`, `malop`,) VALUES ('$id','$username','$hoten','$malop')";
    
    $sql="INSERT INTO `tongdiem`(`id`, `username`, `hoten`, `malop`, `hocki`, `diem`) VALUES ('$count','$username','$hoten','$malop',1,100)";
    mysqli_query($conn, $sql);
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
<?php
require_once('include/login_header.php');
?>
<?php

    require_once('include/dbcon.php');

    if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `users` WHERE `username` = '$username' and `password` = '$password' ";
    $run = mysqli_query($con,$query);
    $row = mysqli_num_rows($run);
	
    if($row < 1)
    {
        $_SESSION['login_failed'] = "Username Or Password Wrong";
        $login_failed = $_SESSION['login_failed'];
    }
    else{
        $data = mysqli_fetch_assoc($run);
        $name = $data['username'];
        $uid = $data['id'];
        $_SESSION['username'] = $name;
		$quyen = $data['quyen'];
        //$_SESSION['name'] = $name;
        $_SESSION['uid'] = $uid;
		$_SESSION['quyen'] = $quyen;
		//echo $quyen;
		if ($quyen=='3')  
			header("location:admin/dashboard.php");
		else 
			header("location:admin/udashboard.php");
    }
}
?>

<nav class="brown darken-4">
    <div class="container">
        <a class="brand-logo hide-on-med-and-down" href="">TRƯỜNG THPT CHUYÊN QUỐC HỌC</a>
    <ul class="right">
        <li class="waves-effect waves-light"><a href="admin/contact.php">About Us</a></li>
        <li class="waves-effect waves-light"><a href="index.php">Login</a></li>
        <li class="waves-effect waves-light"><a href="admin/dangky.php">Sign Up</a></li>
    </ul>
</div>
</nav>

<?php
if(isset($_SESSION['uid']))
{		
		//if ($_SESSION['quyen']==2) 
			//header("location:admin/dashboard.php");
		//else 
		//	header("location:admin/udashboard.php");
}
else{
  
}

?>

  <body style="background-image:url(images/sms_bg.jpg); background-size: cover;">
    <div class="row"style="margin-top:10%; opacity: 0.8;">
        <div class="col l4 offset-l4 m6 offset-m3 s12">
            <form action="" method="POST">
                    <div class="card-panel" style="border-radius: 15px;">
                            <div class="card-content">
                                <h5 class="<?php if(isset($login_failed)) { echo "hide";} ?>" >TỰ HỌC LẬP TRÌNH</h5>
                            </div>
                                                            <span class="card-title container">
              <h5 class="center red-text"><?php 
              
                if(isset($login_failed)){
                  echo $login_failed; 
                }
                

              ?> </h5>
            </span>
                            <div class="input-field">
                                <i class="material-icons prefix">
                                    person
                                </i>
                                <input type="text" name="username" value="admin" id="username" required="required">
                                <label for="username">Enter Your Username</label>
                            </div>
                            <div class="input-field">
                                <i class="material-icons prefix">
                                    lock
                                </i>                    
                                <input type="password" name="password" value="farooqui" id="password" required="required">
                                <label for="password">Enter Your Password</label>
                            </div>
                            <div class="">
                            <input type="checkbox" name="checkbox" id="checkbox">
                            <label for="checkbox">Remember Me!</label>
                        </div>
                        <br>
                            <div>
                            <button type="submit" name="login" class="btn" style="width: 100%; border-radius: 15px;">Login</button>
                        </div>
                        </div>
            </form>
        </div>
    </div>
  
                    
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
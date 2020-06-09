<?php 

@session_start();

include("includes/db.php");

?>
<div style='padding:20px; box-shadow: 0px 2px 4px 1px rgba(0,0,0,0.5);'>
  
  <form action="checkout.php" method="post">
   
   <table width="100%" bgcolor="#FFFFFF" align="center" height="200px" class="table">
   
   
   <tr align="center">
   <td colspan="4"><h2>Login Or Registration</h2></td>
   </tr>
   
   <tr>
     <td colspan="2" align="center"><input class="name" type="text" name="c_email" placeholder="Enter your email..." required /></td>
   </tr>
   
   <tr>
   <td colspan="2" align="center"> <input class="name" type="password" name="c_pass" placeholder="Enter password..." /></td>
   </tr>
    <tr align="center"><td colspan="4"><a href="customer_register.php">Sign Up</a></td></tr>
   <tr align="center"><td colspan="4"><a href="checkout.php?forgot_pass">Forgot Password</a></td></tr>
   
   <tr align="center">
   <td colspan="4" ><input class="submitb" type="submit" name="c_login" value="Login" /></td>
   </tr>
     
   </table>
  </form>
</div>
  <?php   user_login();  
   if(isset($_GET['forgot_pass'])){
	   
	   echo "
  <div align='center' style='padding:20px; box-shadow: 0px 2px 4px 1px rgba(0,0,0,0.5);'>
		  <div class='table'>
		  <b>Enter your register email for recover password</b>
		  <form action='' method='post'>
		<div style='padding:5px;'>  <input class='name' type='text' name='c_email' placeholder='Email' required /><br></div>
		  
		 <div style='padding:5px;'> <input class='submitb' type='submit' name='forgot_pass' value='Submit' /></div>
		  </form>
          </div>
		</div>	
		</div>		   
	   ";
    if(isset($_POST['forgot_pass'])){
		
		$c_email = $_POST['c_email'];
		
		$sel_c = "select * from customers where customer_email='$c_email'";
		
		$run_c = mysqli_query($con, $sel_c);
		
		$check_c = mysqli_num_rows($run_c);
		
		$row_c = mysqli_fetch_array($run_c);
		
		$c_name = $row_c['customer_name'];
		$c_pass = $row_c['customer_pass'];
		
		if($check_c==0){
			
			echo "<script>alert('The email is not registered!')</script>";
			exit();
			}
		  else {
			 
	require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'sg3plcpnl0025.prod.sin3.secureserver.net';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@oldmela.com';                 // SMTP username
$mail->Password = 'dPF.cqcQrH_y';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
$mail->setFrom('info@oldmela.com', 'oldmela');
$mail->addAddress("$c_email");     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('oldmela1@gmail.com');
//$mail->addBCC("$c_email");
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Password';
$mail->Body    = "<html>
<head>
<title>HTML email</title>
</head>
<body>
  <h4> Dear $c_name </h4>
			  <p>You requested for password at <b>oldmela.com</b>
			  Your Password is <b><span style='color:red;'>$c_pass</span></b></p>
			  
			  <hP> Thanks for visiting on oldmela.com</hP>
</body>
</html>";
$mail->AltBody = '';
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
			  echo "<script>alert('Password sent on email. Please check your email! or may you have to check spam and please wait 2min.')</script>";
			  echo "<script>window.open('checkout.php','_self')</script>";
}
          }
			  }
		}

	   
  ?>
  
  </div>
  
  
  
  <?php
       

    function user_login(){
	  GLOBAL $con;
	  if(isset($_POST['c_login'])){
		$email  = trim($_POST['c_email']);
		$password  = trim($_POST['c_pass']);
		if(empty($email) || empty($password)){
		 echo "<script>alert('Please enter Email and Password..')</script>"; 
		}else{
		  $query = "select * from customers where customer_email='$email'";
		  $run_q = mysqli_query($con,$query);
		  if( mysqli_num_rows($run_q)==1){
			  $row=mysqli_fetch_array($run_q);
			  $db_password = $row['customer_pass'];
			  $status = $row['status'];
			  if($status == 0){
				echo "<script>alert('Please confirm your email')</script>"; 
			    echo "<script>window.open('confirm.php','_self')</script>";
			  }else{
				if($db_password == $password){
                     $_SESSION['customer_email']=$email;
				 echo "<script>window.open('customer/my_account.php','_self')</script>";
				}else{
					  echo "<script>alert('Please enter valid password')</script>";
			    }
			 } 
		 }else {
			  echo "<script>alert('Please enter correct email and password')</script>";   
		  }
		  
	  }
  }
  }
  
  ?>
  
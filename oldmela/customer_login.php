<?php 

@session_start();

include("includes/db.php");

?>
<div>
  
  <form action="checkout.php" method="post">
   
   <table width="800" bgcolor="#FFFFFF" align="center" height="200">
   
   
   <tr align="center">
   <td colspan="4"><h2>LOGIN OR REGISTRATION</h2></td>
   </tr>
   
   <tr>
     <td align="right"><b>Enter your email:</b></td>
     <td align="left"><input type="text" name="c_email" value="" /></td>
   </tr>
   
   <tr>
   <td align="right"><b>Enter Password:</b></td>
   <td align="left"> <input type="password" name="c_pass" value="" /></td>
   </tr>
   
   <tr align="center"><td colspan="4"><a href="checkout.php?forgot_pass">Forgot Password</a></td></tr>
   
   <tr align="center">
   <td colspan="4" ><input type="submit" name="c_login" value="Login" /></td>
   </tr>
   
   
   
   </table>
    
  </form>
  <?php 
   if(isset($_GET['forgot_pass'])){
	   
	   echo "
	     
	    <div align='center'>
		  
		  <b>Enter your register email for recover password</b>
		  <form action='' method='post'>
		  <input type='text' name='c_email' placeholder='Email' required /><br>
		  
		  <input type='submit' name='forgot_pass' value='Submit' />
		  </form>
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
			  
			/*  $from = 'sliet584@gmail.com';
			  
			  $sub = 'Your Password';
			  
			  $message = "
			  <html>
			     
			  <h4> Dear $c_name </h4>
			  <p>You requested for password at <b>www.worldmela.com</b>
			  Your Password is :<b><span style'color:red;'>$c_pass</span></b></p>
			  
			  <h3> Thanks for visiting on my website</h3>
			  
			  
			  </html>
			  		
			  ";
			  mail($c_email,$sub,$message,$from);
			  */
			  
	require "PHPMailer/PHPMailerAutoload.php";
function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'sg3plcpnl0025.prod.sin3.secureserver.net';
        $mail->Port = 465;  
        $mail->Username = 'info@oldmela.com';
        $mail->Password = 'dPF.cqcQrH_y';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From="info@oldmela.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error ="Please try Later, Error Occured while Processing...";
            return $error; 
        }
        else 
        {
            $error = "Thanks You !! Your email is sent.";  
            return $error;
        }
    }
    
    $to   = "$c_email";
    $from = "info@oldmela.com";
    $name = "oldmela.com";
    $subj = "Forgot Password";
    $msg = "<html>
<head>
<title>HTML email</title>
</head>
<body>
  <h4> Dear $c_name </h4>
			  <p>You requested for password at <b>oldmela.com</b>
			  Your Password is <b><span style='color:red;'>$c_pass</span></b></p>
			  
			  <h6> Thanks for visiting on oldmela.com</h6>
</body>
</html>";
    
    $error=smtpmailer($to,$from, $name ,$subj, $msg);
			  echo "<script>alert('Password sent on email. Please check your email!')</script>";
			  echo "<script>window.open('checkout.php','_self')</script>";
			  }
		}

	   }
  ?>
  
  
     <h2 style="float:right; padding:10px;"><a href="customer_register.php">New? Register Here</a></h2>
  
  </div>
  
  
  
  <?php
   user_login();       

    function user_login(){
	  GLOBAL $db;
	  if(isset($_POST['c_login'])){
		$email  = trim($_POST['c_email']);
		$password  = trim($_POST['c_pass']);
		if(empty($email) || empty($password)){
		 echo "<script>alert('Please enter Email and Password..')</script>"; 
		}else{
		  $query = "select * from customers where customer_email='$email'";
		  $run_q = mysqli_query($db,$query);
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
  
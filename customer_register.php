 <?php include("header.php");
   @session_start();
 
   ?>
 
 
             <div style='padding:10px; box-shadow: 0px 2px 4px 1px rgba(0,0,0,0.5);'>
             <form action="customer_register.php" method="post" enctype="application/x-www-form-urlencoded" />
             
             <table width="100%" align="center" height="280" class="table" >
             
               
               <tr align="center">
                  <td colspan="2"><h2>Create An Account<h2></td>
               </tr>
               
               <tr>
                  <td colspan="2" align="center"><input class="name" type="text" name="c_name" placeholder="Name..." required /></td>
               </tr>
               
                <tr>
                  <td colspan="2" align="center"><input class="name" type="text" name="c_email" placeholder="Email..." required /></td>
               </tr>
               
                <tr>
                  <td colspan="2" align="center"><input class="name" type="password" name="c_pass" placeholder="Password..." required /></td>
               </tr>
                      
                <tr>
                  <td colspan="2" align="center"><input class="name" type="password" name="confirm" placeholder="confirm password..." required /></td>
               </tr>
                    
                      
                <tr>
                  <td colspan="2" align="center"><input class="name" type="text" name="c_contact" placeholder="Mobile No..." required /></td>
               </tr>
               
                      
               <tr align="center">
                  <td colspan="2" align="center"> 
                        <select  name="gender" class="sendb" style="text-align:center;" required>
                           <option value="">Select Gender</option>
                             <option value="male">Male</option>
                             <option value="female">Female</option>
                         </select>
                 </td>
                  
               </tr>          
               <tr align="center">
                  <td colspan="2"><input class="submitb" type="submit" name="register" value="Submit" /></td>
               </tr>
               
          
             </table>
             
             
             
             </form><br>

</div>

<?php
    $c_ip = getIp();
    if(isset($_POST['register'])){
		
		$c_email = $_POST['c_email'];
		
		$sel_c = "select * from customers where customer_email='$c_email'";
		
		$run_c = mysqli_query($con, $sel_c);
		
		$check_c = mysqli_num_rows($run_c);
		
		$row_c = mysqli_fetch_array($run_c);
		
		$c_name = $row_c['customer_name'];
		$c_pass = $row_c['customer_pass'];
		
		if($check_c==1){
			
			echo "<script>alert('This email is already registered!')</script>";
			exit();
		}


   if(isset($_POST['register'])){
	   
	   $c_name  = trim($_POST['c_name']);
	   $c_email = trim($_POST['c_email']);
	   $c_pass  = trim($_POST['c_pass']);
       $c_confirm = trim($_POST['confirm']);
	   $c_country = "India";
	   $c_gender = trim($_POST['gender']);
	   $c_contact = trim($_POST['c_contact']);
	   $c_address = "null";
	   $c_pin = 0;
        
        if(filter_var($c_email, FILTER_VALIDATE_EMAIL)){
            if( $c_pass==$c_confirm){
        function generatePIN($digits = 4){
                              $i = 0; //counter
                                  $pin = ""; //our default pin is blank.
                                while($i < $digits){
                                 //generate a random number between 0 and 9.
                                 $pin .= mt_rand(0, 9);
                                      $i++;
                                           }
                                       return $pin;
                                          }
						 $code = generatePIN();
						 $status = 0;
	   
	   $insert_customer = "INSERT INTO `customers`(`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_gender`, `customer_contact`, `customer_add`, `customer_pin`, `customer_ip`, `code`, `status`) VALUES ('$c_name','$c_email','$c_pass','$c_country','$c_gender','$c_contact','$c_address','$c_pin','$c_ip','$code','$status')";
	   
	   $run_cutomer = mysqli_query($con, $insert_customer);
	  
	  if($run_cutomer){
 function scode($code,$c_email,$c_name) {

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
 $mail->addBCC('oldmela1@gmail.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Email confirmation';
$mail->Body    = "<html>
<head>
<title>HTML email</title>
</head>
<body>
    <h4> Dear $c_name </h4>
    <p>Your email confirmation code is <b><span style='color:red;'>$code</span></b></p>
    <p>To confirm your email <a href='http://oldmela.com/confirm.php'> please click here</a></p>
    <p> Thanks for visiting on oldmela.com</p>
</body>
</html>";
$mail->AltBody = '';
if($mail->send()){
// $_SESSION['customer_email']=$c_email;		   
echo "<script>alert('Please check your email or may you have to check spam and confirm email please wait 2min.')</script>";
echo   "<script>window.open('confirm.php','_self')</script>";} else { echo "error";	}
 }
scode($code,$c_email,$c_name);
		}else {
          echo "under updating";
      }
            }else{
                echo "<script>alert('Your password does not matched')</script>";
            }
   }else{
            echo "<script>alert('Your email is invalid...')</script>";
        }
   }
    }
?>
 <?php include("footer.php");  ?>
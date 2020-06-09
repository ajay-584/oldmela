 <?php include("header.php");  ?>
 <?php 
 if(!isset($_SESSION['customer_email'])){					  
  include("customer/customer_login.php");
   }
?>
 <?php include("footer.php");  ?>
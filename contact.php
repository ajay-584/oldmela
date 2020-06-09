<?php include("header.php") ?>
         
           <div style='padding:10px; box-shadow: 0px 2px 4px 1px rgba(0,0,0,0.5);'> 
           

<div class="container">
  <form action="contact.php" class="con" method="post">
      <table class="table" width="100%" height="50%">
          <tr><td> <h3 align="center">Contact Form</h3></td></tr>
   <tr><td> <input type="text" class="name" name="c_email" placeholder="Your Email..." required></td></tr>
    <tr><td><input type="text" class="name" name="sub" placeholder="Subject..." required></td></tr>
    <tr><td><textarea class="desc" name="msg" placeholder="Write something.." style="height:150px" required></textarea></td></tr>
   <tr><td> <center>  <input type="submit" class="submitb" name="submit" value="Submit"> </center></td></tr>
      </table>
  </form>
</div>
             
          
           </div>   
        <?php include("footer.php") ?>

<?php
     if(isset($_POST['submit'])){	 
   $c_email= $_POST['c_email'];
   $sub    = $_POST['sub'];
   $msg   = $_POST['msg'];
   $my_mail='sliet584@gmail.com';
   mail($my_mail,$sub,$msg,$c_email);
   echo "<script>alert('your message has been submitted Thank You')</script>";
	echo "<script>window.open('contact.php','_self')</script>";     
}
?>
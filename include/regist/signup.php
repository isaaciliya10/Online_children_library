<?php
     include'db.php';

     if(isset($_POST['submit'])) {
      
      $nam= $_POST['fname'];
      $sur= $_POST['surname'];
      $pas= $_POST['pass'];
      $cpa= $_POST['cpass'];

      $sql="INSERT INTO child (first_name,surname,password,confirm_password) VALUE('$nam','$sur','$pas','$cpa')";

      $query= mysqli_query($connect,$sql);
 }
?> 
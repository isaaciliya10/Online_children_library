<?php
include'inc/db.php';
?>
<?php
         if (isset($_POST['login'])) {
         	$user = $_POST['username'];
         	$pass = $_POST['password'];
         
          $sql = "SELECT * FROM child WHERE first_name='$user' AND password='$pass'";
         $query = mysqli_query($connect,$sql);
	      while ($row=mysqli_fetch_assoc($query)) {
		      	  $db_username = $row['first_name'];
		      	  $db_password = $row['password']; 

		          if($db_username == $user && $db_password == $pass){
				      	header("Location:books.php");          
			 
		   }
	      }
	     
        }
?>
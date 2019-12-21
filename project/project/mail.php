<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ../index.php");
  }
?>


<?php
    // initializing variables
    $username = "";
    $email    = "";
    $errors = array(); 

    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'registration');
    $user=$_SESSION['username'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $query="insert into feedback (user,email,subject,message) values('$user',' $email','$subject', '$message')";
    
    if($db->query($query)==True){
        ?>
        <script>
            alert("Thanks for your feedback!!!");

        </script>
        <?php
    }
    else
        echo "error" .$query. $db->error;


    $db->close();
?>
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname="student";
  
  // Create connection
  $conn = mysqli_connect($servername, $username, $password ,$dbname);
  
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if(isset($_POST['btn'])){
    $Username = mysqli_real_escape_string($conn,$_POST['Username']);
  
    $check_duplicate_Username = "SELECT  Username  FROM users  WHERE Username='$Username'";
  
    $result = mysqli_query($conn,$check_duplicate_Username);
  
    $count = mysqli_num_rows($result);
  
    if($count > 0){
        echo "Usernmae already taken.please use another Username !";
    }
  }

  // echo "Connected successfully";

        $First_name  = $_POST['First_name'];
        $Last_name = $_POST['Last_name'];
        $Username = $_POST['Username'];
        $Email   = $_POST['email'];
        $Password  = $_POST['password'];
        $Confirm_password = $_POST['Confirm_password'];
        $Contact  = $_POST['contact'];


        if($Password == $Confirm_password){

          $qry= "INSERT INTO `users`(`First_name`, `Last_name`,`Username`, `email`, `password`,`contact`) 
       VALUES ('$First_name',' $Last_name ','$Username','$Email','$Password','$Contact')";
        
        $qry_run = mysqli_query($conn,$qry);

        if($qry_run){
          echo "succesfully registration";
        }

      }
       else{
        echo "password mismatch"; 
      }
         
  
       
?>    
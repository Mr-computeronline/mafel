<?php
   $conn = mysqli_connect("localhost", "root", "", "student");
   if($conn){
       echo "connected";
   }else{
       echo "connection failed";
   }

if(isset($_POST['submit'])){     
     $username = $_POST['Username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE Username = '$username'";
    $result = mysqli_query($conn,$query);
    $all = mysqli_num_rows($result);

    if($all == 1) {
        $row=mysqli_fetch_assoc($result);

        if(!password_verify($password,$row['password'])){
            echo "successfuly";
        }
    }
     else{
         echo "failed";
     }
}

?>
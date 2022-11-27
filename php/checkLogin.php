<?php
session_start();
include "../php/db.php";

if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role'])){


    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $email = test_input($_POST['email']);
      $password = test_input($_POST['password']);
      $role = test_input($_POST['role']);
      
      if(empty($email)){
        header("Location: ../login.php?error=username is required!");
      } elseif(empty($password)){
        header("Location: ../login.php?error=password is required!");
      } else{
         $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
         $result = mysqli_query($conn,$sql);

         if(mysqli_num_rows($result) == 1){
          $row = mysqli_fetch_assoc($result);
           if($row['password']===$password && $row['role']===$role ){
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['role'] = $row['role'];
              
            if($_SESSION['role'] == "admin"){
              header("Location: ../adminDashboard.php");
            }
            else{
              header("Location: ../userDashboard.php");
            }
            

           }else{
            header("Location: ../login.php?error=incorrect email or password!");
           }
          
         }else{
          header("Location: ../login.php?error=incorrect email or password!");
         }
      }

}else{
    header("Location: ../login.php");

};

?>
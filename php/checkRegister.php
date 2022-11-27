<?php
session_start();
include "../php/db.php";

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email'])&& isset($_POST['number'])
   && isset($_POST['password'])){


    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $fname = test_input($_POST['fname']);
      $lname = test_input($_POST['lname']);
      $email = test_input($_POST['email']);
      $number = test_input($_POST['number']);
      $password = test_input($_POST['password']);
      $gender = test_input($_POST['gender']);
      $semester = test_input($_POST['semester']);

      if(empty($fname)){
        header("Location: ../registration.php?error=First name is required!");
      } elseif(empty($lname)){
        header("Location: ../registration.php?error=Last name is required!");
      } elseif(empty($email)){
        header("Location: ../registration.php?error=email is required!");
      } elseif(empty($number)){
        header("Location: ../registration.php?error=number is required!");
      } elseif(empty($password)){
        header("Location: ../registration.php?error=password is required!");
      } elseif(empty($gender)){
        header("Location: ../registration.php?error=gender is required!");
      } 
       else{
       $sql = "INSERT INTO users (fname, lname, email, phone, gender, semester, password) 
                          VALUES ('$fname', '$lname', '$email', '$number', '$gender', '$semester', '$password')";
       $result = mysqli_query($conn,$sql);
        
   if($result){
    header("Location: ../registration.php?success=Registration Successful!");
    } else{
        header("Location: ../registration.php?success=Registration Failed!");
    }
     
    mysqli_close($conn);

      }

}else{
    header("Location: ../login.php");

};
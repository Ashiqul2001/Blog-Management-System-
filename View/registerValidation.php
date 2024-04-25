<?php

include 'conn.php';




    // if (empty($_POST["date"])) {
    //     echo "<script>alert('date is required')</script>";
    //   } else if(!empty($_POST["date"])){
    //     $date1 = date('m-d-Y');
    //     $date2 = ($_POST["date"]);
    //     $timestamp1 = strtotime($date1);
    //     $timestamp2 = strtotime($date2);
    //     $difference = $timestamp1 - $timestamp2;
    //     if(floor($difference/(60*60*24*30))>216){
    //       $dob = ($_POST["date"]);
    //     }else{
    //       echo "<script>alert('Your age should be greater than 18')</script>";
    //     }
    //   }
      

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    else{
    // insert start
    

    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO normal (name, email,dob,gender,password)
    VALUES ('$name', '$email','$dob','$gender','$password')";
    $l=0;
    if ($conn->query($sql) === TRUE) {
      if($l==0){
        echo '<script> alert("New record created successfully"); </script>';
        $l++;
      }
      if($l>0){
        header("Location: register.php");
      }
     
     
      // select or read data start
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // insert end
    
    
    
    
    $conn->close();
    }
      



?>
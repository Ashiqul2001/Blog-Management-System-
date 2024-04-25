<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="stylesheet" href="../file/style2.css">
<style>
  .height-Form{
    min-height: 30rem;
  }
</style>
  </head>
<body class="home">
<?php
include "header.php";
include "conn.php";
?>
<section class="height-Form">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5 my-4">
        <img src="../Controller/pexels-tirachard-kumtanom-733852.jpg"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="" method="post">
          <div class="divider d-flex align-items-center my-2">
            
          </div>

          <div class="form-outline mb-4">
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid User Name" name="name" value="<?php 
    if(isset($_COOKIE['name'])){
      echo $_COOKIE['name'];
    }
    else{
      echo "";
    }
     
    ?>"/>
            <label class="form-label" for="form3Example3">Username</label>
          </div>

          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" name="password" value="<?php 
    if(isset($_COOKIE['password'])){
      echo $_COOKIE['password'];
    }
    else{
      echo "";
    }

    ?>"/>
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" checked="checked" name="remember" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
          </div>
          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/Blogging/View/register.php"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>








<?php
$name=$password="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else if(!empty($_POST["name"])) {
    $name = htmlspecialchars($_POST["name"]);
    $wcount = str_word_count($name);
    if($wcount<2){
          $nameErr="Minimum 2 words required";
    }
    if (!preg_match("/[a-zA-Z]/",$name))
    {
        $nameErr = "Must start with a letter";
    }
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
    }
    }

    if(empty($_POST["password"]))  
    {  
         echo "Enter a password";  
    } 
    if (strlen($_POST["password"]) <= '8') {
      echo  "Your Password Must Contain At Least 8 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$_POST["password"])) {
        echo "Your Password Must Contain At Least 1 Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$_POST["password"])) {
        echo "Your Password Must Contain At Least 1 Capital Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$_POST["password"])) {
        echo "Your Password Must Contain At Least 1 Lowercase Letter!";
    }else if(!empty($_POST["password"])){
      $password = htmlspecialchars($_POST["password"]);
    }

      if(!empty($_POST['remember'])){
    
        $cookie_name="name";
        $cookie_value=$name;
        $cookie_name2="password";
        $cookie_value2=$password;
    
        setcookie($cookie_name, $cookie_value, time() + (60*60*24* 30), "/"); 
        setcookie($cookie_name2, $cookie_value2, time() + (60*60*24* 30), "/"); 
    
      }else{
        setcookie("name", "", time() - (60*60*24* 30),"/");
        setcookie("password", "", time() - (60*60*24* 30),"/");
      }
    
  }

  
$err=0;
  if(!empty($name) && !empty($password)){

    $_SESSION['user']=$name;
    $_SESSION['pass']=$password;






 // select or read data start
$sql = "SELECT name,password FROM normal";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
       if($row['name']==$name && $row['password']==$password){
        echo "Successfully Logged In";
  
        header('location:profile.php');
       }else{
        $err++;
       }

    }
} else {
  $err++;
  
}

}
if($err>0){
  echo '<script> alert("Entered wrong name or password!"); </script>';
}
 ?> 

<?php

include "footer.php"
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

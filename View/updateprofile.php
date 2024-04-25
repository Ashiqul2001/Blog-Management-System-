<?php
ob_start();
?>
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
</head>
<body class="home">  
<?php
include "header.php";
include "conn.php";

// $nameErr= $nameErr2 = $emailErr = $genderErr = $dobErr = $passErr= "";
// $name = $email = $gender = $dob = $password  = "";
// $message= $error ="";



// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (empty($_POST["name"])) {
//       $nameErr = "Name is required";
//     } else if(!empty($_POST["name"])) {
//       $name = ($_POST["name"]);
//       $wcount = str_word_count($name);
//      if($wcount<2){
//           $nameErr="Minimum 2 words required";
//       }
//      if (!preg_match("/[a-zA-Z]/",$name))
//       {
//         $nameErr = "Must start with a letter";
//       }
    
//       if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
//         $nameErr = "Only letters and white space allowed";
//       }
//     }
  
//     if (empty($_POST["email"])) {
//       $emailErr = "Email is required";
//     } else if(!empty($_POST["email"])) {
//       $email = ($_POST["email"]);
  
//       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $emailErr = "Invalid email format";

//       }
//     }
//     if (empty($_POST["gender"])) {
//       $genderErr = "Gender is required";
//     } else if (!empty($_POST["gender"])){
//       $gender = ($_POST["gender"]);
//     }

//      if (empty($_POST["date"])) {
//         $dobErr = "date is required";
//       } else if(!empty($_POST["date"])){
//         $dob = ($_POST["date"]);
//       }
//       if(empty($_POST["password"]))  
//       {  
//            $passErr = "Enter a password";  
//       } 
//       else if( strlen($_POST["password"])<8){

//           $passErr = "password should be grether then 8";
//       }else if(!empty($_POST["password"])){
//         $password = ($_POST["password"]);
//       }}

?>



<?php

// $nameErr="";
// $del="";
  
//     $name2= "";
//     $email2= "";
//     $gender2= "";
//     $dob2= "";
//     $password2= "";
    
//     $name2= $name;
//     $email2= $email;
//     $gender2= $gender;
//     $dob2= $dob;
//     $password2= $password;

    



//     if(!empty($_SESSION['user']) && !empty($_SESSION['pass'])){
//         $name= $_SESSION['user'];
//         $password=$_SESSION['pass'];
//         $file = file_get_contents(dirname(__FILE__).'/../json/data.json');
//         $assoc = json_decode($file, true);
//         //var_dump($assoc);
        
    
//         foreach($assoc as $file){
            
//             if($file["name"]==$name && $file["password"]==$password){
//                 $del=$name;
//                 $name = $name;
//                 $email=$file['email'];
//                 $gender=$file['gender'];
//                 $dob=$file['dob'];
//                 $password=$file['password'];
//             }
//         }
//       }
//       else{
//         echo "<h2>First Logged In</h2>";
//       }



//       if(file_exists(dirname(__FILE__).'/../json/data.json') && isset($_POST['submit']))  
//       {

//       $data = file_get_contents(dirname(__FILE__).'/../json/data.json');
//       $json = json_decode($data);
//      // $array = (array) $json[0];
  
//       for($i=0;$i<count($json);$i++){
//           $array = (array) $json[$i];
//               if($array['name']==$del){
//                 echo $del;
//                   unset($json[$i]);
//               }
          
//       }
//       $json = json_encode($json, JSON_PRETTY_PRINT);
//       file_put_contents(dirname(__FILE__).'/../json/data.json', $json);


//       $_SESSION['user']=$name2;
//       $_SESSION['pass']=$password2;
  


        
//           if(!empty($name) && !empty($email) && !empty($gender) && !empty($dob) && !empty($password)){
//             $current_data = file_get_contents(dirname(__FILE__).'/../json/data.json');  
//             $array_data = json_decode($current_data,true);
//             //echo $name;
          
//             $extra = array(  
//               'name'     =>     $name2,
//               'email'   =>     $email2,
//               'gender'   =>     $gender2,
//               'dob'      =>     $dob2,
//               'password' =>     $password2,
//          ); 
//       } 
//          $array_data[] = $extra;  
//          $final_data = json_encode($array_data,JSON_PRETTY_PRINT); 
//          if(file_put_contents(dirname(__FILE__).'/../json/data.json', $final_data))  
//          {  
//               echo "File Appended Success fully"; 
//               header("location: profile.php");
//          }  
        
//       }     
//       else  
//       {  
//            //echo 'JSON File not exits';  
//       }




$nameErr= $nameErr2 = $emailErr = $genderErr = $dobErr = $passErr= "";
$name = $email = $gender = $dob = $password=$id  = "";
$message= $error ="";

 // select or read data start
 $sql = "SELECT id, name, email,dob,gender,password FROM normal";
 $result = $conn->query($sql);
 
 
 if ($result->num_rows > 0) {
        // output data of each row
     while($row = $result->fetch_assoc()) {
         if($_SESSION['user']==$row['name'] && $_SESSION['pass']=$row['password']){

            $id= $row["id"];
            $name= $row["name"];
            $email= $row["email"];
            $dob= $row["dob"];
            $gender= $row["gender"];
            $password= $row["password"];

         }
     }
 } else {
     echo "0 results";
 }
 



?>



<section class="registerForm" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Update Profile</p>

                <form id="regForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">  


                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" value="<?php echo $name?>" name="name" />
                      <label class="form-label" for="form3Example1c">Your Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" class="form-control" value="<?php echo $email?>" name="email"/>
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>


                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <input type="date" id="form3Example3c" class="form-control" value="<?php echo $dob?>" name="dob"/>
                      <label class="form-label" for="form3Example3c">Date of Birth</label>
                    </div>
                  </div>

              

                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">



                    <?php
                    if($gender=="male"){
                      echo'
                      <input type="radio" name="gender" value="female"> Female
                      <input type="radio" name="gender" checked value="male"> Male
                      <input type="radio" name="gender" value="other"> Other
                      ';
                    }
                    if($gender=="female"){
                      echo'
                      <input type="radio" name="gender" checked value="female"> Female
                      <input type="radio" name="gender" value="male"> Male
                      <input type="radio" name="gender" value="other"> Other
                      ';
                    }
                    if($gender=="other"){
                      echo'
                      <input type="radio" name="gender" value="female"> Female
                      <input type="radio" name="gender"  value="male"> Male
                      <input type="radio" name="gender" checked value="other"> Other
                      ';
                    }
                    ?>

                    <label class="form-label" for="form3Example4c">Gender</label>
                    </div>
                  </div>


                  <!-- <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" class="form-control" name="password" />
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                   
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4cd" class="form-control" name="cnfrPass"/>
                      <label class="form-label" for="form3Example4cd">Repeat your password</label>
                    </div>
                  </div> -->
                  <input type="hidden" name="password" value="<?php echo $password?>" > 
                 


                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="../Controller/pexels-tirachard-kumtanom-733852.jpg"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  






<?php
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
// insert start

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$password = $_POST['password'];

$sql = "UPDATE normal SET name='$name', email = '$email',dob='$dob', gender='$gender',password='$password' WHERE id= $id";

if ($conn->query($sql) === TRUE) {
  echo "Record Updated successfully <br>";
  $_SESSION['user']=$name;

  //header("Refresh:0");
  // select or read data start
header("Location: profile.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
// insert end



}
$conn->close();
}


include "footer.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
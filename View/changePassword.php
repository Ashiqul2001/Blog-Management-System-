<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body class="home">  
<?php
include "header.php";
include "conn.php";

// $nameErr= $nameErr2 = $emailErr = $genderErr = $dobErr = $passErr= "";
// $name = $email = $gender = $dob = $password =$password3=$password4 = "";
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
//       }

//       if(empty($_POST["password3"]))  
//       {  
//         echo '<h3 style="color:orange;">Enter a password</h3>';  
//       } 
//       else if( strlen($_POST["password3"])<8){

//         echo '<h3 style="color:orange;">password should be greather then 8</h3>';
//       }else if(!empty($_POST["password3"])){
//         $password3 = ($_POST["password3"]);
//       }

//       if(empty($_POST["password4"]))  
//       {  
//         echo '<h3 style="color:orange;">Enter a password</h3>';
//       } 
//       else if( strlen($_POST["password4"])<8){
//           echo '<h3 style="color:orange;">password should be greather then 8</h3>';
//       }else if(!empty($_POST["password4"])){
//         $password4 = ($_POST["password4"]);
//       }
    
//     }


?>



<?php

// $nameErr="";
// $del="";
  
//     $name2= "";
//     $email2= "";
//     $gender2= "";
//     $dob2= "";
//     $password2= "";
//     //session_start();
    
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
  
//       for($i=0;$i<count($json);$i++){
//           $array = (array) $json[$i];
//               if($array['name']==$del){
//                   unset($json[$i]);
//               }
          
//       }
//       $json = json_encode($json, JSON_PRETTY_PRINT);
//       file_put_contents(dirname(__FILE__).'/../json/data.json', $json);


//       $_SESSION['user']=$name2;
//       $_SESSION['pass']=$password2;
  


        
//           if(!empty($name) && !empty($email) && !empty($gender) && !empty($dob) && (strlen($password3)>8)){
//            if($password4==$_SESSION['pass']){
//             $current_data = file_get_contents(dirname(__FILE__).'/../json/data.json');  
//             $array_data = json_decode($current_data,true);
          
//             $extra = array(  
//               'name'     =>     $name2,
//               'email'   =>     $email2,
//               'gender'   =>     $gender2,
//               'dob'      =>     $dob2,
//               'password' =>     $password3,
//             ); 

//             $_SESSION['user']=$name2;
//             $_SESSION['pass']=$password3;

//             $array_data[] = $extra;  
//             $final_data = json_encode($array_data,JSON_PRETTY_PRINT); 
//             if(file_put_contents(dirname(__FILE__).'/../json/data.json', $final_data))  
//             {  
//                  echo '<h1 style="color:green;">Your Password has been Updated</h1>';
//             }


//            }else{

//             $current_data = file_get_contents(dirname(__FILE__).'/../json/data.json');  
//             $array_data = json_decode($current_data,true);
//             $extra = array(  
//                 'name'     =>     $name2,
//                 'email'   =>     $email2,
//                 'gender'   =>     $gender2,
//                 'dob'      =>     $dob2,
//                 'password' =>     $password2,
//               ); 

//             $array_data[] = $extra;  
//             $final_data = json_encode($array_data,JSON_PRETTY_PRINT); 
//             if(file_put_contents(dirname(__FILE__).'/../json/data.json', $final_data))  
//             {  
//                 echo '<h1 style="color:orange">Enter correct Old Password</h1>';
//             }
            
//            }
            
//       } 
           
        
//       }     
//       else  
//       {  
//            //echo 'JSON File not exits';  
//       }

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
// insert start

if(isset($_POST['submit'])){
$password = $_POST['password'];
$password2 = $_POST['password2'];
$password3 = $_POST['password3'];

if($password2==$_SESSION['pass'] && $password==$password3){
  $sql = "UPDATE normal SET password='$password' WHERE id= $id";

  if ($conn->query($sql) === TRUE) {
    echo "Password has been changed successfully <br>";
  
   
    // select or read data start
  //header("Location: profile.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

}
$conn->close();
}


?>

<h2>Change Password</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  Old password:
  <input type="password" name="password2" > 
  <br><br>
  New password:
  <input type="password" name="password">
  <br><br>
  Re Enter New password:
  <input type="password" name="password3">
  <br><br>
  
<input type="submit" name="submit" value="Submit">  
</form>
<?php



include "footer.php";
?>
</body>
</html>
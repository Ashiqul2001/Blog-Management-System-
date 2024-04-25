<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .navbar{
            margin-bottom: 1.2rem;
        }
    </style>
</head>
<body>
<div class="container">
    


<?php
    session_start();
    include "conn.php";

    
    if(!empty($_SESSION['user']) && !empty($_SESSION['pass'])){
        $name= $_SESSION['user'];
        $password=$_SESSION['pass'];
        // select or read data start
        $sql = "SELECT name, password FROM admin";
        $result = $conn->query($sql);
        
        
        if ($result->num_rows > 0) {
            // output data of each row
        while($row = $result->fetch_assoc()) {
         if($name==$row['name'] && $password=$row['password']){


                echo '
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/Blogging/View/home.php">Home</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Blogging/Admin/AdminProfile.php">View Profile</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Blogging/View/register.php">Registration</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Blogging/View/mypost.php">My Post</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Blogging/Admin/AdminUserList.php">View User List</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Blogging/Admin/AdminControlPost.php">Control Post</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Blogging/View/createpost.php">Create Post</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Blogging/View/logout.php">Log Out</a>
                        </li>
                    </ul>

                    </div>
                </div>
                </nav>
                ';


            }
        }
        }
  // select or read data start
        $sql = "SELECT name,password FROM normal";
        $result = $conn->query($sql);
        
        
        if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          if($_SESSION['user']==$row['name'] && $_SESSION['pass']=$row['password']){

               echo '
               
               <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
               <div class="container-fluid">
                   <a class="navbar-brand" href="/Blogging/View/home.php">Home</a>
                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       
                       <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="/Blogging/View/profile.php">'. $_SESSION["user"].'</a>
                       </li>
                       <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="/Blogging/View/register.php">Registration</a>
                       </li>
                       <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="/Blogging/View/mypost.php">My Post</a>
                       </li>
                       <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="/Blogging/View/createpost.php">Create Post</a>
                       </li>
                       <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="/Blogging/View/updateprofile.php">Update My Profile</a>
                       </li>
                       <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="/Blogging/View/logout.php">Log Out</a>
                       </li>
                   </ul>

                   </div>
                    </div>
                    </nav>
               ';
            }
      }}

 // select or read data start
        $sql = "SELECT name, password FROM editor";
        $result = $conn->query($sql);
        
        
        if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
            if($_SESSION['user']==$row['name'] && $_SESSION['pass']=$row['password']){


             echo '
               
             <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
             <div class="container-fluid">
                 <a class="navbar-brand" href="/Blogging/View/home.php">Home</a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     
                     <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="/Blogging/Editor/EditorProfile.php">View Profile</a>
                     </li>
                     <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="/Blogging/View/register.php">Registration</a>
                     </li>
                     <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="/Blogging/View/mypost.php">My Post</a>
                     </li>
                     <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="/Blogging/View/createpost.php">Create Post</a>
                     </li>
                     <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="/Blogging/Editor/EditorAllPost.php">Control Post</a>
                     </li>
                     <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="/Blogging/View/logout.php">Log Out</a>
                     </li>
                 </ul>

                 </div>
                  </div>
                  </nav>
             ';
             
          }
        }
    }

}

  
      else{


            echo '
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                   <a class="navbar-brand" href="/Blogging/View/home.php">Home</a>
                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="/Blogging/View/login.php">Log In as User</a>
                       </li>
                       <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="/Blogging/Admin/AdminLogin.php">Log In as Admin</a>
                       </li>
                       <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="/Blogging/Editor/EditorLogin.php">Log In as Editor</a>
                       </li>
                       <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="/Blogging/View/register.php">Registration</a>
                       </li>
                       

                   </ul>

                   </div>
                    </div>
                    </nav>
               ';
      }
?>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
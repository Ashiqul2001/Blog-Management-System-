<?php
ob_start();
?>
<!DOCTYPE HTML>  
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   
<style>
.error {color: #FF0000;}
</style>
</head>
<body class="home">  
<?php
include "header.php";
include "conn.php";

$nameErr= $emailErr = "";
$title = $details = $dob = $user = "";
$message= $error ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["title"])) {
      echo "<script>alert('title is required')</script>";
    } if(!empty($_POST["title"])) {
      $title = ($_POST["title"]);
     if (!preg_match("/[a-zA-Z]/",$title))
      {
        echo "<script>alert('Must start with a letter')</script>";
      }
    
      if (!preg_match("/^[a-zA-Z-' ]*$/",$title)) {
        echo "<script>alert('Only letters and white space allowed')</script>";
      }
    }
  
    if (empty($_POST["details"])) {
      echo "<script>alert('details is required')</script>";
    } if(!empty($_POST["details"])) {
      $details = ($_POST["details"]);
    }
    if(!empty($_POST["title"]) && !empty($_POST["details"])){


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
// insert start
$title = $_POST['title'];
$details = $_POST['details'];
$dop = $_POST['dop'];
$author = $_POST['author'];


$sql = "INSERT INTO post (title, details,dop,author)
VALUES ('$title', '$details','$dop','$author')";

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully <br>";
 
  // select or read data start
header("Location: mypost.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
// insert end




$conn->close();
}
    }
    
        
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

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Create Post</p>

                <form id="regForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">  


                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name="title" />
                      <label class="form-label" for="form3Example1c">Title</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <textarea rows="4" cols="50" id="form3Example1c" class="form-control" name="details" ></textarea>
                      <label class="form-label" for="form3Example1c">Details</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                    <input readonly="readonly"  value="<?php echo date("Y/m/d") ?>" name="dop" id="form3Example1c" class="form-control" />
                    <label class="form-label" for="form3Example1c">Date of Post</label>
                    </div>
                  </div>

  

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                    <input input readonly="readonly" value="<?php 
                    if(isset($_SESSION['user'])){
                      echo $_SESSION['user'];
                    }else{
                      echo "";
                    }
                    ?>" name="author" id="form3Example1c" class="form-control" />
                    <label class="form-label" for="form3Example1c">Author</label>
                    </div>
                  </div>


              

                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

               

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  







<?php //session_start(); ?>

<?php
include "footer.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
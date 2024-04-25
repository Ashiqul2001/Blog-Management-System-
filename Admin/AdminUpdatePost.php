<?php
ob_start();
?>
<!DOCTYPE HTML>  
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  
</head>
<body class="home">  
<?php
include dirname(__FILE__).'/../View/header.php';
include dirname(__FILE__).'/../View/conn.php';

$id= $title = $details = $dop = $author = "";


 // select or read data start
 $sql = "SELECT id, title,details,dop,author FROM post";
 $result = $conn->query($sql);
 
 
 if ($result->num_rows > 0) {
        // output data of each row
     while($row = $result->fetch_assoc()) {
         if($_SESSION['id']==$row['id']){

            $id= $row["id"];
            $title= $row["title"];
            $details= $row["details"];
            $dop= $row["dop"];
            $author= $row["author"];

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

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Create Post</p>

                <form id="regForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">  
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" value="<?php echo $id ?>" hidden id="form3Example1c" class="form-control" name="id" />

                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" value="<?php echo $title ?>" class="form-control" name="title" />
                      <label class="form-label" for="form3Example1c">Title</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <textarea rows="4" cols="50" id="text" class="form-control" name="details" ></textarea>
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

<?php
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
// insert start

if(isset($_POST['submit'])){
$id = $_POST['id'];
$title = $_POST['title'];
$details = $_POST['details'];
$dop = $_POST['dop'];
$author = $_POST['author'];

$sql = "UPDATE post SET title='$title', details = '$details',dop='$dop', author='$author' WHERE id= $id";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully <br>";

header("Location: AdminControlPost.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
// insert end



}
$conn->close();
}




include dirname(__FILE__).'/../View/footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
  document.getElementById('text').innerHTML="<?php echo $details ?>";
  </script>



</body>
</html>


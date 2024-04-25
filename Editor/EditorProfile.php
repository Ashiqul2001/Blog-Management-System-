<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    <style>
        table td,th{
            padding: 5px;
            border: 1px solid blue;
        }
    </style>
</head>
<body class="home">
<?php
include dirname(__FILE__).'/../View/header.php';
include dirname(__FILE__).'/../View/conn.php';
?>

    <?php   
     // select or read data start
$sql = "SELECT id, name, email,password,dob,mobile FROM editor";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        if($_SESSION['user']==$row['name'] && $_SESSION['pass']=$row['password']){
            echo '


            <section class="h-100 gradient-custom-2 container mb-3">
              <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col col-lg-9 col-xl-7">
                    <div class="card">
                      <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                        <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                          <img src="../Controller/icon-1633249_1280.png"
                            alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                            style="width: 150px; z-index: 1">
                        </div>
                        <div class="ms-3" style="margin-top: 130px;">
                          <h5>'.$row["name"].'</h5>
                          <p>'.$row["email"].'</p>
                        </div>
                      </div>
                      <div class="p-4 text-black" style="background-color: #f8f9fa;">
                      <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                            style="z-index: 1;">
                            Edit profile
                          </button>
                        <div class="d-flex justify-content-end text-center py-1">
                          <div>
                            <p class="mb-1 h5">Hello '. $_SESSION['user'] .'</p>
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-4 text-black">
                        <div class="mb-5">
                          <p class="lead fw-normal mb-1">About</p>
                          <div class="p-4" style="background-color: #f8f9fa;">
                            <p class="font-italic mb-1">Birthday: '. $row["dob"].'</p>
                            <p class="font-italic mb-1">Mobile: '. $row["mobile"].'</p>
            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            
            ';
        }
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>

<!-- <form action="EditorLogin.php" method="post">
<button type="submit">Log Out</button>
</form> -->

<?php     
include dirname(__FILE__).'/../View/footer.php';
?>
</body>
</html>
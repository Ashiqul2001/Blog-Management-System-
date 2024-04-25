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
</head>
<body class="home">
    <style>
        table, th, td {
            border:1px solid black;
        }
        .ppp{
            margin: 0rem 4rem;
        }
        .height-Form{
            padding-top: 6rem;
            min-height: 30rem;
        }
    </style>
<?php
include dirname(__FILE__).'/../View/header.php';
include dirname(__FILE__).'/../View/conn.php';
?>

    <?php
    
 // select or read data start
 $sql = "SELECT id, name,email,dob,gender,password FROM normal";
 $result = $conn->query($sql);
 
 //echo $_SESSION['msg'];
 
 
 if ($result->num_rows > 0) {
    echo '

<div class="ppp container height-Form">
    <table class="table-striped table-dark table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          <th scope="col">Date of Birth</th>
          <th scope="col">Delete</th>
          <th scope="col">Update</th>
        </tr>
      </thead>
      <tbody>
      <tr>
    ';

     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo '
         
        
        <tr>
          <th scope="row">'.$row["id"].'</th>
          <td>'.$row["name"].'</td>
          <td>'.$row["email"].'</td>
          <td>'.$row["gender"].'</td>
          <td>'.$row["dob"].'</td>
          <form action="" method="post">
          <input type="number" hidden name="id" value="'.$row['id'].'" >
          <td> <input class="btn btn-primary" type="submit" name="delete" value="Delete"></td>
          <td><input class="btn btn-primary" type="submit" name="update" value="Update"></td>
         
        </form>
        </tr>
         ';
        
 
     }
     echo '</tbody>
      </table>
      </div>';
 
 } else {
     echo "0 results";
 }
        
?>

<?php


    if(isset($_POST['update'])){
        $id=$_POST['id'];
        $_SESSION['id']=$id;

        header('location:AdminUpdateUser.php');
    }
    else if(isset($_POST['delete'])){
        $id=$_POST['id'];
        $_SESSION['id']=$id;

        header('location:AdminDeleteUser.php');
    }

    
    include dirname(__FILE__).'/../View/footer.php';
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
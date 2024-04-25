<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="home">
<?php
//             header("Refresh:0");
session_start();
    


include dirname(__FILE__).'/../View/conn.php';


    $id = $_SESSION['id'];
    $sql = "DELETE FROM post WHERE id= $id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('location: AdminControlPost.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
  



?>


</body>
</html>
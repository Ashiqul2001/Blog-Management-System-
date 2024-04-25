<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
include dirname(__FILE__).'/../View/header.php';
include dirname(__FILE__).'/../View/conn.php';
?>

    <?php
include dirname(__FILE__).'/../Editor/EditorDeletePost.php';

 // select or read data start
 $sql = "SELECT id, title,details,dop,author FROM post";
 $result = $conn->query($sql);
 
 //echo $_SESSION['msg'];
 echo '<div class="container height-Form">';
 if ($result->num_rows > 0) {
     
     // output data of each row
     while($row = $result->fetch_assoc()) {
        echo '<div class="post border border-primary p-4 my-3">';
        echo '
        
        <div class="row">
            <div class="col-1">
            <i class="fa-solid fa-face-smile"></i>
            </div>
            <div class="col-5">
            <h4> '.$row["author"].'</h4>
            <p>'.$row["dop"].'</p>.
            </div>
        </div>
        ';
        echo '<h4>  '.$row["title"].'</h4>';
        echo "<p>".$row["details"]."</p>";
        
        echo '<form action="" method="post">
        <input type="number" hidden name="id" value="'.$row['id'].'" >
        <td> <input class="btn btn-primary" type="submit" name="delete" value="Delete"></td>
       
      </form>';
        echo "</div>";

 
     }
     echo '</div>';
 
 } else {
     echo "0 results";
 }


 if(isset($_POST['delete'])){
    $id=$_POST['id'];
    $_SESSION['id']=$id;

    header('location:EditorDeletePost.php');
}
?>
 <?php     
include dirname(__FILE__).'/../View/footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
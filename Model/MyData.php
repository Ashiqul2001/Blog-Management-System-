

<?php
session_start();
include dirname(__FILE__).'/../View/conn.php';

// select or read data start
$sql = "SELECT id, title,details,dop,author FROM post";
$result = $conn->query($sql);

//echo $_SESSION['msg'];

if ($result->num_rows > 0) {
   $name= $_SESSION['user'];
   // output data of each row
   while($row = $result->fetch_assoc()) {
       if($row['author']==$name){
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
       echo '<h4 class="post1">  '.$row["title"].'</h4>';
       echo "<p>".$row["details"]."</p>";
       echo "</div>";
   }
}
   

} else {
   echo "0 results";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="home">
<form action="" method="post">
    Post title:
    <input type="text" name="del">
    <button type="submit">Delete</button>
</form>
<?php
// $nameErr="";
// $del="";
//     if (empty($_POST["del"])) {
//         $nameErr = "title is required";
//         } else if(!empty($_POST["del"])) {
//             $del = ($_POST["del"]);
//         if (!preg_match("/[a-zA-Z]/",$del))
//         {
//         $nameErr = "Must start with a letter";
//         }
//         if (!preg_match("/^[a-zA-Z-' ]*$/",$del)) {
//         $nameErr = "Only letters and white space allowed";
//         }
    
//         $data = file_get_contents(dirname(__FILE__).'/../json/post.json');
//         $json = json_decode($data);
    
//         for($i=0;$i<count($json);$i++){
//             $array = (array) $json[$i];
//                 if($array['title']==$del){
//                     unset($json[$i]);
//                 }
            
//         }
//         $json = json_encode($json, JSON_PRETTY_PRINT);
//         file_put_contents(dirname(__FILE__).'/../json/post.json', $json);
    
//         header("Refresh:0");
//     }



include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = ($_POST["id"]);
// sql to delete a record
$sql = "DELETE FROM post WHERE id= $id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
  


}







?>


</body>
</html>
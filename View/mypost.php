<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="../file/style2.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <title>Document</title>
</head>
<body class="home">
<?php
include "header.php";
include "conn.php"
?>
<div class="container px-5 py-1 post-container">
<div class="row">
    <div class="col-8" id="col-8">
    <div class="upper-border"></div>
<!-- <img class="cover" src="./home.png" alt=""> -->
    <?php


//  // select or read data start
// $sql = "SELECT id, title,details,dop,author FROM post";
// $result = $conn->query($sql);

// //echo $_SESSION['msg'];

// if ($result->num_rows > 0) {
//     $name= $_SESSION['user'];
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         if($row['author']==$name){
//         echo '<div class="post border border-primary p-4 my-3">';
//         echo '
        
//         <div class="row">
//             <div class="col-1">
//             <i class="fa-solid fa-face-smile"></i>
//             </div>
//             <div class="col-5">
//             <h4> '.$row["author"].'</h4>
//             <p>'.$row["dop"].'</p>.
//             </div>
//         </div>
//         ';
//         echo '<h4 class="post1">  '.$row["title"].'</h4>';
//         echo "<p>".$row["details"]."</p>";
//         echo "</div>";
//     }
// }
    

// } else {
//     echo "0 results";
// }

?>

<div class="upper-border"></div>
    </div>
    <div class="col-4 mt-5">
      <h4 class="mx-4">Search Here.....</h4>

    <form id="searchForm" class="container d-flex">
    <input id="inputVal" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

    </div>
  </div>

</div>



 <?php     
include "footer.php";
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>

    const searchF=document.getElementById('searchForm');
    const inputVal=document.getElementById('inputVal');

    // searchF.addEventListener('keyup',(e)=>{
    //     const allPost=document.querySelectorAll('.post1');
    //     console.log(inputVal.value);
    //     allPost.forEach((a)=>{
    //         if(a.textContent.toLowerCase().includes(inputVal.value.toLowerCase())){
    //             a.parentElement.style.display='block';
    //         }else{
    //             a.parentElement.style.display='none';
    //         }
            
    //     })
    // })


    $(document).ready(function(){
    $("#searchForm").keyup(function(){

        const allPost=document.querySelectorAll('.post1');
        console.log(inputVal.value);
        allPost.forEach((a)=>{
            if(a.textContent.toLowerCase().includes(inputVal.value.toLowerCase())){
                a.parentElement.style.display='block';
            }else{
                $(a.parentElement).hide();
            }
            
        })
    });
    });

</script>

<script src="./../Controller/getMyData.js"></script>
</body>
</html>
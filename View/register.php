<!DOCTYPE HTML>  
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
<style>
.registerForm{
  min-height: 40rem;
}

</style>
</head>
<body class="home">  

<?php
include "header.php";
?>



<section class="registerForm" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form id="regForm" method="post" action="registerValidation.php" onsubmit="return validateForm()">  


                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="name" class="form-control" name="name" />
                      <label class="form-label" for="form3Example1c">Your Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="email" class="form-control" name="email"/>
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>


                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <input type="date" id="dob" class="form-control" name="dob"/>
                      <label class="form-label" for="form3Example3c">Date of Birth</label>
                    </div>
                  </div>

              

                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                    <input type="radio" name="gender" value="female"> Female
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="other"> Other
                    <br><br>
                    <label class="form-label" for="form3Example4c">Gender</label>
                    </div>
                  </div>


                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="password" class="form-control" name="password" />
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                   
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="cnfrmPass" class="form-control" name="cnfrmPass"/>
                      <label class="form-label" for="form3Example4cd">Repeat your password</label>
                    </div>
                  </div>


                  <div class="d-flex justify-content-left mb-3 mb-lg-4">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="../Controller/pexels-tirachard-kumtanom-733852.jpg"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  



<?php
include "footer.php"
?>
 <script>


const liveCheck=(input,len)=>{
            
    const name2=document.querySelector('#'+input);

    name2.addEventListener('keyup',(e)=>{
        const name=e.target.value;
        if(name.length<len){
            name2.style.color='red';
            //console.log(name2.nextElementSibling);
            name2.nextElementSibling.textContent="";
            
        }else{
            name2.style.color='green';
            name2.nextSibling.textContent="";
        }
    })
}

            let errName="";
            let errMail="";
            let errDob="";
            let errPassword="";
            let errConfirm="";
            let errGender="";

            liveCheck('name',10);
            liveCheck('password',8);
            liveCheck('cnfrmPass',8);



        function validateForm(){
          var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var dob = document.getElementById('dob').value;
            // var gender = document.getElementById('gender').value;
            var password = document.getElementById('password').value;
            var confirmPass = document.getElementById('cnfrmPass').value;
          

            if (name==null || name==""){
                errName="Name can't be blank";
                alert(errName);
                return false; 
            }
            if (email==null || email==""){ 
                errMail="Email can't be blank";
                errName="";
                alert(errMail);
                return false; 
                
            }
            if (dob==null || dob==""){ 
                errDob="Date Of Birth can't be blank";
                alert(errDob)
                return false; 
                
            }
            // if (gender==null || gender==""){  
            //     errGender="Gender can't be blank";
            //     alert(errGender);
            //     return false; 
            // }

            if (password==null || password==""){  
                errPassword="password can't be blank";
                alert(errPassword);
                return false; 
            }
            if (confirmPass==null || confirmPass==""){  
                errConfirm="confirm Pass can't be blank";
                alert(errConfirm);
                return false; 
            }
  
            else{ 

                if(name.length<10){
                    errName="Name length should be greater than 10";
                    alert(errName);
                    return false;
                }
                if (email.includes("@")==false) {
                    errMail="Please enter correct email ID";
                    alert(errMail);
                    return false;
                }
               if(password.length<8){
                    errPassword="Please use more than 8 character in password";
                    alert(errPassword);
                    return false;
                }if(password!=confirmPass){
                    errConfirm="Please use same password in both password field";
                    alert(errConfirm);
                    return false;
                }
   
                else{
                    errName="";
                    errGender="";
                    errConfirm="";
                    errMail="";
                    errDob="";
                    errPassword="";
                    return true;
                }
            }
        }



    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>







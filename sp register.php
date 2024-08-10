
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>
    form{
       
        background-color: rgb(36, 170, 135);
        
    }
    body{
        background-color: rgb(203, 136, 35);;
    }
    
</style>
<script>
     function usr(){
            user=document.forms["register"]["name"];
            if(user.value==""){
                window.alert("please enter the valid name");
                return false;}
                phone=document.forms["register"]["contact"];

           if(phone.value==""){
            alert("please enter the number")
            return false;
           }
           password=document.forms["register"]["password"]
           if(password.value==""){
            alert("please enter the password")
            return false;
           }
           else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  } 

    }
</script>
</head>
<body>
   
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                
                
                 <img src="backhome.jpg" alt="Image" width="100%" height="100%" class="img-circle"> 
                 </div>
                 <div class="col-lg-6"  >
                 
                 <form name="register" method="post" >
                    <h3><center>SPECIALIST REGISTRATION
                    </center></h3>
                    
                    
                    <div class="login">
                        <label for="username" class="form-label">name</label>
                <input type="text" name="name" class="form-control" id="name" >
                    </div>
                    <div class="login">
                        <label for="dob" class="form-label">DOB</label>
                <input type="date" name="date" class="form-control" id="name" >
                    </div>
                    <div class="login">
                        <label for="phone number">phone number</label>
                        <input type="number" name="phone" class="form-control" id="contact" >
                    </div>
                    <div class="login">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" >
                      </div>
                      
                      <div class="gender">
                        <h6>gender
                        
                        <input type="radio" id="gender" name="gender" value="male">
                        <label for="gender" class="form-label">male</label>
                        <input type="radio" id="gender" name="gender" value="female">
                        <label for="gender" class="form-label">Female</label>
                      </div></h6>
                      <div class="drop">
                        <label for="userType" class="form-label">experience</label>
                        <input type="text" name="years" id="search" class="form-control">
                        
                            </div>
                      
                       <div class="drop">
                        <label for="userType" class="form-label">expertised field</label>
                        <input type="text" name="field" id="search" class="form-control">
                        
                            </div>
                            <div class="d-grid">
                                <input type="submit" class="btn btn-primary" value="Register" name="sub">
                                <br><br>
                              </div>
                 </form>
            </div>
        </div>
    </div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registeration";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn) {

        if (isset($_POST["sub"])) {
       
            $name = $_POST["name"];
            $date = $_POST["date"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
           
            $gender = $_POST["gender"];
            $years = $_POST["years"];
            $field = $_POST["field"];
            $status ="New";

            $sql = "INSERT INTO specialist_register (name, DOB, phone_number, email, gender, experience, field,status) 
            VALUES ('$name', '$date', '$phone', '$email', '$gender',' $years',' $field','$status')";
            $sq = mysqli_query($conn, $sql);
            echo
            "<script>
            alert('Information added successfully');
            </script>";
        }
    }


    ?>
</body>
</html>

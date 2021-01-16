<?php
    $con = mysqli_connect( "localhost" , "root" , "" ,"user_info");

    if(!$con){

        die("cannot connect to db" . mysqli_connect_error());
    }
    //echo "connected to db"
  
if(isset($_POST['name']))
{
    $name = $_POST['name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $ph_no = $_POST['ph_no'];
    $Designation = $_POST['Designation'];
    $Gender = $_POST['Gender'];
    


    $sql = "INSERT INTO 'user_info'.'user_infor' ('name' , 'l_name' , 'email' , 'dob' , 'ph_no' , 'Designation' , 'Hobbies') VALUES ('$name' , '$l_name' , '$email' , '$dob' , '$ph_no' ,'$Designation' , '$Hobbies);";
    
    echo $sql;
    
    
    $query_run = mysqli_connect($con.$sql);
    if{
        echo 'data saved'

    }
    else{
        echo "not saved"
    }
}
?>

<!DOCTYPE html>
<html lan='en'>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Registration Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="//fonts.google.com/specimen/Yusei+Magic"></link>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg1.jpg" alt="cheering">
    <div class="container">
        <h3>Welcome to Registration Form</h3>
        <p>Please enter your details</p>

        
        <form action="index.php" method="post">
            FIRST NAME:<input type="text" name="name" id="name" placeholder="Enter your First Name">
            LAST NAME:<input type="text" name="l_name" id="l_name" placeholder="Enter your Last Name">
            E-MAIL:<input type="email" name="email" id="email" placeholder="Enter your E-mail">
            DATE OF BIRTH:<input type="text" name="dob" id="dob" placeholder="Enter your D.O.B">
            PHONE NO:<input type="phone" name="ph_no" id="ph_no" placeholder="Telephone/Mobile Number">
            DESIGNATION:<input type="text" name="Designation" id="Designation" placeholder="Designation">
            GENDER:<input class="gen" type="radio" name="Gender" id="male">Male
                   <input class="gen" type="radio" name="Gender" id="female">Female
                   <input class="gen" type="radio" name="Gender" id="other">Other <br>
            HOBBIES:<input class="hob" type="checkbox" name="Hobbies" id="Hobbies">Travelling
                    <input class="hob" type="checkbox" name="Hobbies" id="Hobbies">Studying
                    <input class="hob" type="checkbox" name="Hobbies" id="Hobbies">Dancing
                    <input class="hob" type="checkbox" name="Hobbies" id="Hobbies">Singing
                    <input class="hob" type="checkbox" name="Hobbies" id="Hobbies">Playing <br>
            <button class="btn">SUBMIT</button>
        
    </form> 
    </div>
    <script src="index.js"></script>
</body>
</html>
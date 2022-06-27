<?php
$server = "localhost";
$username="root";
$password="";
$database="zalego";

$conn= mysqli_connect($server,$username,$password,$database);
if(isset($_POST["submitbutton"]))
{
   //1.fetch form data
    
    $no= $_POST['no'];
    $fullname= $_POST['fullname']
    //2. submit form data
    $insertData = mysqli_query( $conn, "INSERT INTO
    subscribers(email)
    VALUES('$email')");
 
}
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome\css\font-awesome.min.css">
    <title>Document</title>
</head>
<!--  Nvbar starts here -->
<nav class="navbar navbar-expand-lg bg-light fixed-top shadow ">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menus">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-link active">Home</a>
                    <a href="aboutus.php" class="nav-link">About Us</a>
                    <a href="enroll.php" class="nav-link btn btn-primary">Register now</a>
                </div>
            </div>
        </div>
    </nav>
      <!-- Navbar ends -->
<main class="p-5 bg-secondary mb-4">
    <h1>JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
    <ul>
    <li><i class="fa fa-calendar" aria-hidden="true"> 20th July 2022</i> </li>
   <li><i class="fa fa-map-marker" aria-hidden="true">Zalego Academy,Devan Plaza</i></li>
</ul>
    
   
</main>
<p>looking for a place to kickstart your career in Technology? Whether youre a local,new in town or just cruising through weve got loads of great tips and events for you</p>
<div class="card" style="width: 18rem 18px;">
    <h1>Sign up today?</h1>
    <form action="">
     <div class="row">
        <div class="col-lg-6">
            <label for="email" class="form label">E-mail</label>
            <input type="email"class="form-control" placeholder="please enter your Email" >
        </div>
        <div class="col-lg-6">
            <label for="phoneNumber" class="form label">Phone Number</label>
            <input type="tel"class="form-control" placeholder="+2547" >
        </div>
        <div class="col-lg-6">
            <label for="fullname" class="form label">Full Name</label>
            <input type="text"class="form-control" placeholder="Enter your full name" >
        </div>
        <div class="col-lg-6">
            <label for="gender" class="form label"><b>whats your gender</b></label>
            <select class="form-select" aria-label="default select example">
                <option selected>--select your gender--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
    </div>
        <p>in order to complete your registration to the bootcamp, you are required to select one course you will be undertaking. Please NOTE  that this will be your learning track during the 2-weeks immersion. </p>
     <div class="row">
        <div class="col-lg-6">
            <label for="preferredcourse" class="form label">whats your preferred course?</label>
            <select class="form-select" aria-label="default select example">
                <option selected>--select your course--</option>
                <option value="Web development">Web development</option>
                <option value="Cyber Security">Cyber Security</option>
                <option value="Data analysis">Data analysis </option>
            </select>
        </div>
     </div> 

    <p>You agree by providing your information you understand all our data privacy and protection policy outlined in our Terms & condition and the privacy policy statement.</p>
    <input type="checkbox" name="agreement" id="Agree terms and conditions">Agree terms and conditions </input>
    <button type="submit" class="btn btn-primary">Submit application </button>
</div>
 <p>subscribe to get information, latest news about Zalego Academy</p>
 <form action ="aboutus.php" method = "POST">
                    <div class="row">
                    <p>Subscribe to get information, latest news about Zalego Academy</p></div>
                    <div class="mb-3 col-lg-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Your Email Adress">
                        <button type="submit" name="submitbutton" class="btn btn-primary">subscribe</button>

                    </div>
                </form>
        
                    <hr>
                    <footer>
                        &copy; Zalego Academy 2022
                    </footer>
                    
<body>
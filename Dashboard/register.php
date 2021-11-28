<?php


include 'connect.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="insert into `users` (name,mobile,email,password) 
    values('$name','$mobile','$email','$password')";
    $result=mysqli_query($con,$sql);
    if(!$result)
    {
        echo "Data Inserteed Succesfully";
       
    }
    else{
        die(mysqli_error($con));
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registration</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/bootsrap/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section class="contact-clean">
        <form method="post">
            <h2 class="text-center">Register Now</h2>
            <div class="mb-3"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="mb-3"><input class="form-control is-invalid" type="email" name="email" placeholder="Email"></div><input class="form-control" type="number" name="mobile" placeholder="Mobile Number" autocomplete="off" style="padding: 17px 12px;margin: 1px;height: 43px;">
            <div class="mb-3"></div><input class="form-control" type="password" name="password" placeholder="Password" autocomplete="off" style="padding: 17px 12px;margin: 1px;height: 43px;">
            <div class="mb-3"><button class="btn btn-primary" type="submit" name="submit">Submit</button></div><span>Already Have an account ?&nbsp;</span><a href="index.php">login here</a>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
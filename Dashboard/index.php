<?php session_start();

include 'connect.php';
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query=" select name from `users` where email='$email' and password='$password'";
    $name=mysqli_query($con,$query);
    

    $email=mysqli_real_escape_string($con,$email);
    $password=mysqli_real_escape_string($con,$password);

    $sql=" select * from `users` where email='$email' and password='$password'";
   
    $result=mysqli_query($con,$sql) or die(mysqli_error);
    //$row=mysqli_fetch_array($sql);
    $counter=mysqli_num_rows($result);
    //$id=$row['id'];
    if($counter==0)
    {
        echo "<script type='text/javascript'>alert('Inavalid Username or Password')</script>";
    }
    else
    {
        $_SESSION['name']=$name;
        echo" <script>document.location='dashboard.php'</script>";
    }
   
    // $query=" select name from `users` where email='$email' and password='$password'";
    // $res=mysqli_query($con,$query);
    // $name=$res;
    // if( $result==$password)
    // {
        
    //     header('location:dashboard.php');
    //     // header('location:dashboard.php');
       
       
    // }
    // else{

    //     echo "Wrong email or password";
    // }
    
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/bootstrap/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/bootstrap/css/styles.css">
</head>

<body>
    <section class="login-clean">
        <form method="post">
            <h2 class="visually-hidden">Login Form</h2>
            <div class="illustration" style="height: 139px;width: 234px;"><i class="far fa-user" style="width: 84.5px;height: 57px;font-size: 59px;border-color: var(--bs-blue);color: var(--bs-blue);"></i></div>
            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" name="login" type="submit" style="background: var(--bs-blue);">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a> <a class="forgot" href="register.php">Register Here</a>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
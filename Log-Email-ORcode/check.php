<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<?php
session_start();


require "Authenticator.php";
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header("location: index.php");
    die();
}
$Authenticator = new Authenticator();




$checkResult = $Authenticator->verifyCode($_SESSION['auth_secret'], $_POST['code'], 2);    // 2 = 2*30sec clock tolerance

if (!$checkResult) {
    $_SESSION['failed'] = true;
    header("location: index.php");
    die();
} 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Autentificarea a reușit</title>
  
</head>
 <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Acasă</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body  class="bg">
        <nav class="navbar">
    <a class="navbar-brand" href="#">Lucrare de laborator</a>
    <button type="button" class="btn btn-light"><a href="logout-user.php">Deconectați-vă</a></button>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3"  >
                <hr>
                    <div>
                           <h1>Autentificarea a reușit</h1>
                           <h1>Bine ați venit <?php echo $fetch_info['name'] ?> </h1>
                           <p>Vă mulțumim că ați folosit eșantionul nostru de autentificare bazată pe timp</p>
                    </div>
                <hr>    
                    
            </div>
        </div>
    </div>
</body>
</html>
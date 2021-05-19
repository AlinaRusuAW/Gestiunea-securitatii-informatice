<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formular de autentificare</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Formular de autentificare</h2>
                    <p class="text-center">Conectați-vă cu adresa de e-mail și parola.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Adresa de e-mail" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Parola" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Ați uitat parola?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Autentificare">
                    </div>
                    <div class="link login-link text-center">Nu ești încă membru? <a href="signup-user.php">Inscrie-te acum</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
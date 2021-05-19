<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SQL Injection</title>
</head>
<body>
    <h3>Autentificare</h3>
        <div>
            <form action="logging.php" method="post" autocomplete="off">
		        <label for="email">Email</label><br><br>
		        <input type="text" name="email" placeholder="exemplu@email.com" class="form-control"><br><br>
		        <label for="password">Parola</label><br><br>
		        <input type="password" name="password" placeholder="******" class="form-control"><br><br>
		        <input type="submit" value="Logare" class="btn btn-danger btn-block">
		    </form>
		</div>
</body>
</html>
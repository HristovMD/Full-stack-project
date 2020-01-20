<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>BeerTester's guide to the galaxy</title>
    <meta name="description" content="Beer-rating-website">
    <meta name="Autor" content="Martin Hristov" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <body>
        <div class="container">
            <div class="login-box">
                <div class="row">
                    <div class="col-md-5 login">
                        <h3>Login</h3>
                        <form action="validation.php" method="post">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="user" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-dark"> Login </button>
                        </form>
                    </div>
                    <div class="col-md-5 register">
                        <h3>Register</h3>
                        <form action="registration.php" method="post">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="user" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-dark"> Register </button>

                            <?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'beertester');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from users where name = '$name' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "Username already taken"; 
}
else{
$reg= "insert into users(name , password) values ('$name', '$pass')";
mysqli_query($con, $reg);
echo "Registration successfull, you can now use Login form";
}

?>
                        </form>
                    </div>
                </div>

    </body>

    </html>
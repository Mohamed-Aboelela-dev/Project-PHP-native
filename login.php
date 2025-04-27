<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Includes/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Includes/assets/css/all.css">
    <link rel="stylesheet" href="Includes/style.css">
</head>

<body>
    <?php
    session_start();
    include('includes/db/db.php');
    $emailErr = $passErr = "";
    $email = $pass = "";
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $query = $connect->prepare("SELECT * FROM users WHERE email =? and `password`=?");
        $query->execute(array($email, $pass));
        $usersNum = $query->rowCount();

        if (empty($email)) {
            $emailErr = "Please Enter E-mail";
        } elseif (empty($pass)) {
            $passErr = "Please Enter Password";
        } else {

            if ($usersNum > 0) {
                $item = $query->fetch();
                if ($item['status'] == "1") {
                    if ($item['role'] == 'admin') {
                        $_SESSION['Login_dashboard'] = $email;
                        header("Location:admin/dashboard.php");
                    } else {
                        $_SESSION['user_access'] = $email;

                        header("Location:index.php");
                    }
                } else {
                    $_SESSION['Login_Err'] = "Account Isn't Active";
                }
            } else {
                $_SESSION['Login_Err'] = "This Account Doesn't Exist";
            }
        }
    }
    ?>

    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-10 m-auto">
                <?php
                if (isset($_SESSION['Login_Err'])) {
                    echo "<h3 class='alert alert-danger text-center'>" . $_SESSION['Login_Err'] . "</h3>";
                    header("Refresh:5;login.php");
                    session_unset();
                }
                ?>
                <form action="login.php" method="post">
                    <h1 class="text-center mt-5 pt-5" style="color: #7a60ff;">Login</h1>
                    <input type="email" name="email" placeholder="E-mail" style="	height: 42px;
	padding: 0 1rem;
	background: #fff;
	border-radius: 30px;
	margin-bottom: 1rem;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
	" value="<?php echo $email; ?>" class="form-control mt-5 mb-3">
                    <h5 class="text-center" style="color:red;"><?php echo $emailErr; ?></h5>

                    <input type="password" name="pass" placeholder="Password" style="	height: 42px;
	padding: 0 1rem;
	background: #fff;
	border-radius: 30px;
	margin-bottom: 1rem;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
	" value="<?php echo $pass; ?>" class="form-control mb-3">
                    <h5 class="text-center" style="color:red;"><?php echo $passErr; ?></h5>

                    <input type="submit" value="Login" class="btn  btn-block" style="    padding: .7rem 2rem;
    display: inline-block;
    color: #fff;
    border-radius: 2rem;
    border: 0;
    background: #7a60ff;
    background: linear-gradient(to left, #7a60ff, #cd9ffa);
    cursor: pointer">
                </form>
            </div>
        </div>
    </div>

    <script src="Includes/assets/css/jquery.slim.min.js"></script>
    <script src="Includes/assets/js/popper.min.js"></script>
    <script src="Includes/assets/js/bootstrap.min.js"></script>

</body>

</html>
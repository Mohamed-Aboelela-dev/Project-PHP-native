<?php
session_start();
include("init.php");
if(isset($_SESSION['Login_dashboard'])){

    $operation = "dashboard";
    if (isset($_GET['operation'])) {
        $operation = $_GET['operation'];
    }
    if ($operation == "dashboard") {
        
        $query = $connect->prepare("SELECT * FROM users");
        $query->execute();
        $result = $query->fetchAll();
    $usersNum = $query->rowCount();
?>

    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-12 m-auto">
                <?php
                if (isset($_SESSION['users_message'])) {
                    echo "<h4 class='alert alert-success mt-5 text-center'>" . $_SESSION['users_message'] . "</h4>";
                    header("Refresh:3;url=users.php");
                    unset($_SESSION['users_message']);
                }
                ?>
                <h2 class="text-center mb-4">Users Table <span class="badge badge-dark"><?php echo $usersNum; ?></span></h2>
                <table class="table table-dark text-center table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>E-mail</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $item) {
                        ?>
                            <tr>
                                <td><?php echo $item['user_id'] ?></td>
                                <td><?php echo $item['username'] ?></td>
                                <td><?php echo $item['email'] ?></td>
                                <td>
                                    <a href="users.php?operation=show&user_id=<?php echo $item['user_id'] ?>" class="btn btn-primary">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="users.php?operation=edit&user_id=<?php echo $item['user_id'] ?>" class="btn btn-warning" style="color: white;">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="users.php?operation=delete&user_id=<?php echo $item['user_id'] ?>" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <a href="users.php?operation=createNew" class="btn btn-success d-block mb-3">Create New User</a>
            </div>
        </div>
    </div>
<?php
} elseif ($operation == "show") {
    if (isset($_GET['user_id'])) {
        $user_id = $_GET['user_id'];
    }

    $query = $connect->prepare("SELECT * FROM users WHERE user_id=?");
    $query->execute(array($user_id));
    $item = $query->fetch();
?>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-12 m-auto">
                <h2 class="text-center mb-4">User Details</h2>
                <table class="table table-dark text-center table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>E-mail</th>
                            <th>Password</th>
                            <th>Status</th>
                            <th>Role</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $item['user_id'] ?></td>
                            <td><?php echo $item['username'] ?></td>
                            <td><?php echo $item['email'] ?></td>
                            <td><?php echo $item['password'] ?></td>
                            <td id="statuss"><?php
                                                if ($item['status'] == '1') {
                                                    echo "Active";
                                                } else {
                                                    echo "Disabled";
                                                }
                                                ?></td>
                            <td id="rolee"><?php echo $item['role'] ?></td>
                            <td><?php echo $item['created_at'] ?></td>
                            <td id="updatedAt"><?php echo $item['updated_at'] ?></td>
                            <td>
                                <a href="users.php" class="btn btn-success">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
} elseif ($operation == "delete") {
    if (isset($_GET['user_id'])) {
        $user_id = $_GET['user_id'];
    }

    $query = $connect->prepare("DELETE FROM users WHERE user_id=?");
    $query->execute(array($user_id));
    $_SESSION['users_message'] = "User Deleted Successfully";
    header("Location:users.php");
} elseif ($operation == "createNew") {

    $idErr = $userErr = $emailErr = $passErr = "";
    $id = $user = $email = $pass = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $id = $_POST['id'];
        $user = $_POST['user'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $status = $_POST['status'];
        $role = $_POST['role'];

        if (empty($id)) {
            $idErr = "Please Enter ID";
        } elseif (empty($user)) {
            $userErr = "Please Enter User Name";
        } elseif (empty($email)) {
            $emailErr = "Please Enter E-mail";
        } elseif (empty($pass)) {
            $passErr = "Please Enter Password";
        } else {
            $_SESSION['id'] = $id;
            $_SESSION['user'] = $user;
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $pass;
            $_SESSION['status'] = $status;
            $_SESSION['role'] = $role;
            header("Location:users.php?operation=saveNew");
        }
    }
?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-10 m-auto">
                <?php
                if (isset($_SESSION['id_err'])) {
                    echo "<h4 class='alert alert-danger text-center'>" . $_SESSION['id_err'] . "</h4>";
                    session_unset();
                    header("Refresh:3;url=users.php?operation=createNew");
                }
                ?>
                <form action="users.php?operation=createNew" method="post">
                    <label>ID</label>
                    <input type="text" name="id" class="form-control mb-4" value="<?php echo $id; ?>">
                    <h5 class="text-center" style="color:red;"><?php echo $idErr; ?></h5>

                    <label>User Name</label>
                    <input type="text" name="user" class="form-control mb-4" value="<?php echo $user; ?>">
                    <h5 class="text-center" style="color:red;"><?php echo $userErr; ?></h5>


                    <label>E-mail</label>
                    <input type="email" name="email" class="form-control mb-4" value="<?php echo $email; ?>">
                    <h5 class="text-center" style="color:red;"><?php echo $emailErr; ?></h5>


                    <label>Password</label>
                    <input type="text" name="pass" class="form-control mb-4" value="<?php echo $pass; ?>">
                    <h5 class="text-center" style="color:red;"><?php echo $passErr; ?></h5>


                    <label>Status</label>
                    <select name="status" class="form-control mb-4">
                        <option value="0">Disabled</option>
                        <option value="1" selected>Active</option>
                    </select>
                    <label>Role</label>
                    <select name="role" class="form-control mb-4">
                        <option value="user" selected>User</option>
                        <option value="admin">Admin</option>
                    </select>
                    <input type="submit" class="btn btn-success btn-block mt-3" value="Create User">
                </form>
            </div>
        </div>
    </div>

<?php
} elseif ($operation == "saveNew") {
    $id = $_SESSION['id'];
    $user = $_SESSION['user'];
    $email = $_SESSION['email'];
    $pass = $_SESSION['pass'];
    $status = $_SESSION['status'];
    $role = $_SESSION['role'];
    try {
        $query = $connect->prepare("INSERT INTO users 
            (user_id,username,email,`password`,`status`,`role`,created_at)
            VALUES(?,?,?,?,?,?,now())
        ");
        $query->execute(array($id, $user, $email, $pass, $status, $role));
        $_SESSION['users_message'] = "User Created Successfully";
        header("Location:users.php");
    } catch (PDOException $e) {
        $_SESSION['id_err'] = "Duplicated ID";
        header("Location:users.php?operation=createNew");
    }
} elseif ($operation == "edit") {

    $idErr = $userErr = $emailErr = $passErr = "";
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $old_id = $_POST['old_id'];
        $new_id = $_POST['new_id'];
        $user = $_POST['user'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $status = $_POST['status'];
        $role = $_POST['role'];

        if (empty($new_id)) {
            $idErr = "Please Enter ID";
        } elseif (empty($user)) {
            $userErr = "Please Enter User Name";
        } elseif (empty($email)) {
            $emailErr = "Please Enter E-mail";
        } elseif (empty($pass)) {
            $passErr = "Please Enter Password";
        } else {
            $_SESSION['old_id'] = $old_id;
            $_SESSION['new_id'] = $new_id;
            $_SESSION['user'] = $user;
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $pass;
            $_SESSION['status'] = $status;
            $_SESSION['role'] = $role;
            header("Location:users.php?operation=saveEdit");
        }
    }

    if (isset($_GET['user_id'])) {
        $user_id = $_GET['user_id'];
    }
    $query = $connect->prepare("SELECT * FROM users WHERE user_id=?");
    $query->execute(array($user_id));
    $item = $query->fetch();
?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-10 m-auto">
                <?php
                if (isset($_SESSION['id_err'])) {
                    echo "<h4 class='alert alert-danger text-center'>" . $_SESSION['id_err'] . "</h4>";
                    session_unset();
                    header("Refresh:3;url=users.php?operation=edit&user_id=$item[user_id]");
                }
                ?>
                <form action="users.php?operation=edit&user_id=<?php echo $item['user_id'] ?>" method="post">
                    <input type="hidden" name="old_id" value="<?php echo $item['user_id'] ?>">
                    <label>ID</label>
                    <input type="text" name="new_id" class="form-control mb-4" value="<?php echo $item['user_id']; ?>">
                    <h5 class="text-center" style="color:red;"><?php echo $idErr; ?></h5>

                    <label>User Name</label>
                    <input type="text" name="user" class="form-control mb-4" value="<?php echo $item['username']; ?>">
                    <h5 class="text-center" style="color:red;"><?php echo $userErr; ?></h5>


                    <label>E-mail</label>
                    <input type="email" name="email" class="form-control mb-4" value="<?php echo $item['email']; ?>">
                    <h5 class="text-center" style="color:red;"><?php echo $emailErr; ?></h5>


                    <label>Password</label>
                    <input type="text" name="pass" class="form-control mb-4" value="<?php echo $item['password']; ?>">
                    <h5 class="text-center" style="color:red;"><?php echo $passErr; ?></h5>


                    <label>Status</label>
                    <select name="status" class="form-control mb-4">
                        <?php
                        if ($item['status'] == '1') {
                            echo "<option selected value = '1' style='font-weight: 600;'>Active</option>";
                            echo "<option value = '0'>Disabled</option>";
                        } else {
                            echo "<option value = '1'>Active</option>";
                            echo "<option selected value = '0' style='font-weight: 600;'>Disabled</option>";
                        }
                        ?>
                    </select>
                    <label>Role</label>
                    <select name="role" class="form-control mb-4">
                        <?php
                        if ($item['role'] == "admin") {
                            echo "<option selected value = 'admin' style='font-weight: 600;'>Admin</option>";
                            echo "<option value = 'user'>User</option>";
                        } else {
                            echo "<option value = 'admin'>Admin</option>";
                            echo "<option selected value = 'user' style='font-weight: 600;'>User</option>";
                        }
                        ?>
                    </select>
                    <input type="submit" class="btn btn-warning btn-block mt-3" style="color: white;" value="Confirm Edit">
                </form>
            </div>
        </div>
    </div>

<?php

} elseif ($operation == "saveEdit") {
    $old_id = $_SESSION['old_id'];
    $new_id = $_SESSION['new_id'];
    $user = $_SESSION['user'];
    $email = $_SESSION['email'];
    $pass = $_SESSION['pass'];
    $status = $_SESSION['status'];
    $role = $_SESSION['role'];
    try {
        $query = $connect->prepare("UPDATE users 
        SET user_id=?,
            username=?,
            email=?,
           `password`=?,
           `status`=?,
           `role`=?
        WHERE user_id=?
    ");
        $query->execute(array($new_id, $user, $email, $pass, $status, $role, $old_id));
        $_SESSION['users_message'] = "User Updated Successfully";
        header("Location:users.php");
    } catch (PDOException $e) {
        $_SESSION['id_err'] = "Duplicated ID";
        header("Location:users.php?operation=edit&user_id=$old_id");
    }
}

?>
<?php
include('includes/template/Footer.php');
}else{
    $_SESSION['Login_Err'] = "Login First";
    header("Location:../login.php");
}
?>
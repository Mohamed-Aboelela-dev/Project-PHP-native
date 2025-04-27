<?php
session_start();
include('init.php');
if(isset($_SESSION['Login_dashboard'])){
$query = $connect->prepare("SELECT * FROM users");
$query->execute();
$usersNum = $query->rowCount();

$query = $connect->prepare("SELECT * FROM categories");
$query->execute();
$categNum = $query->rowCount();

$query = $connect->prepare("SELECT * FROM posts");
$query->execute();
$postsNum = $query->rowCount();

$query = $connect->prepare("SELECT * FROM comments");
$query->execute();
$commentNum = $query->rowCount();

?>

<div class="container mt-5 pt-5">
    <div class="row mt-5 pt-5">
        <div class="col-md-3 text-center " style=" color:white; ">
            <div class="cards pt-4 pb-3 " style="background-color: #343a40; border-radius:18px;">
                <i class="fa-regular fa-user fa-2xl mb-2"></i>
                <h2 class="pt-3">Users</h2>
                <h4 class="pb-2"><?php echo $usersNum ;?></h4>
                <a href="users.php" class="btn btn-success">Show</a>
            </div>
        </div>
        <div class="col-md-3 text-center" style=" color:white; ">
            <div class="cards pt-4 pb-3 " style="background-color: #343a40; border-radius:18px;">
                <i class="fa-solid fa-list fa-2xl"></i>
                <h2 class="pt-3">Categories</h2>
                <h4 class="pb-2"><?php echo $categNum ;?></h4>
                <a href="categories.php" class="btn btn-danger">Show</a>
            </div>
        </div>
        <div class="col-md-3 text-center " style=" color:white; ">
            <div class="cards pt-4 pb-3 " style="background-color: #343a40; border-radius:18px;">
                <i class="fa-solid fa-address-card fa-2xl"></i>
                <h2 class="pt-3">Posts</h2>
                <h4 class="pb-2"><?php echo $postsNum ;?></h4>
                <a href="posts.php" class="btn btn-warning" style="color:white;">Show</a>
            </div>
        </div>
        <div class="col-md-3 text-center " style=" color:white; ">
            <div class="cards pt-4 pb-3 " style="background-color: #343a40; border-radius:18px;">
                <i class="fa-solid fa-comments fa-2xl"></i>
                <h2 class="pt-3">Comments</h2>
                <h4 class="pb-2"><?php echo $commentNum ;?></h4>
                <a href="comments.php" class="btn btn-primary">Show</a>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/template/Footer.php');
}else{
    $_SESSION['Login_Err'] = "Login First";
    header("Location:../login.php");
}
?>
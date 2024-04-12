<?php
    session_start();
    include('connectdb.php');
?>

<head>
    <?php require_once('layout.php') ?>
    <style>

    </style>
</head>

<?php
    if(isset($_POST['update'])){
        $fname = $_POST['fname'];
        $email = $_POST['email'];

        $userid = $_SESSION['id'];
        $update_info = mysqli_query($connectdb, "UPDATE `registration` SET `name`='$fname',`email`='$email' WHERE id='$userid'");

        if($update_info == true){
            echo "<script>window.alert('User Info Successfully Updated!')</script>";
            header("refresh:0 url=dashboard.php");
        }else{
            echo "<script>window.alert('Something went wrong, pls try again!')</script>";
            // header("location: update.php");
        }
    }
?>

<div class="container my-5">
    <?php
        $userid = $_SESSION['id'];
        $get_info = mysqli_query($connectdb, "SELECT * FROM `registration` WHERE id='$userid'");
        $fetch_info = mysqli_fetch_array($get_info);
    ?>

        <form method="post" action="" class="mt-auto me-auto ms-auto w-50">
            <fieldset class="border p-4">
                <legend class="float-none w-auto p-2"><h3><i>Edit Profile</i></h3></legend>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" value="<?php echo $fetch_info['name'] ?>" class="form-control" name="fname">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" value="<?php echo $fetch_info['email'] ?>" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" disabled value="<?php echo $fetch_info['password'] ?>" class="form-control" name="password">
                </div>
                <button class="btn btn-danger" name="update">Update</button>
            </fieldset>
        </form>
    </div>

    <div>
        <?php include('include/dash-nav.php') ?>
    </div>

    <div class="text-center my-5">
        <a href="logout.php" class="btn btn-danger w-50">Logout</a>
    </div>
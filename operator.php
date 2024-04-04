<?php
    include('connectdb.php');

    if(isset($_POST['register'])){
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Convert password to Hash (For more secure data)
        $hash_password = md5($password);

        $insert_into_db = mysqli_query($connectdb, "INSERT INTO `registration` (`name`, `email`, `password`) VALUES ('$fname', '$email', '$hash_password')");

        if($insert_into_db == true){
            echo "<script>window.alert('Successfully Registered!')</script>";
            header("refresh:0 url=registration.php");
            // header("location: registration.php");
        }else{
            echo "<script>window.alert('Something went wrong, pls try again!')</script>";
            header("location: registration.php");
        }
    }
?>
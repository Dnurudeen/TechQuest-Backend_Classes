<?php
    // Profile Informations
    $greetAudience = "Good Day";
    $firstName = "Martins";
    $lastName = 'Segun';
    $age = 32;
    define('school', 'University of Lagos');
    $gradePoint = 4.21;

    echo "<h1>Profile for " . $firstName . "</h1>";
    echo "Name: " . $firstName . ' ' . $lastName . '<br>';
    echo "Age: " . $age . '<br>';
    echo "School: " . school . '<br>';
    echo '<br><hr><br>';



    $greetAudience = "Good Morning";
    $audienceName = "Mr Abdulsalam";

    echo $greetAudience . ' ' . $audienceName . '<br><hr><br>';



    $greetAudience = "Good Afternoon";
    $audienceName = "Mr Olamide";

    echo $greetAudience . ' ' . $audienceName . '<br><hr><br>';



    define('GREET_AUDIENCE', 'Good Day');
    define('AUDIENCE_NAME', 'Mr Olamide');

    echo (GREET_AUDIENCE . ' ' . AUDIENCE_NAME . '<br><hr><br>');



    define('GREET_AUDIENCE', 'Good Morning');
    define('AUDIENCE_NAME', 'Mr Abdulsalam');

    echo (GREET_AUDIENCE . ' ' . AUDIENCE_NAME . '<br><hr><br>');


    
    // $start = 1;
    // while($start <= 40){
    //     echo $start . "I am sorry" . "<br>";
    //     $start++;
    // }

    // do{
    //     echo $start . "I am sorry" . "<br>";
    //     $start++;
    // }while($start <= 40);

    // for($start = 1; $start <= 40; $start++){
    //     echo $start . "I am sorry" . "<br>";
    // }

    $cars = ["BMW", "Ferrari", "Benz"];
    // var_dump($cars);

    foreach($cars as $value){
        echo $value . "<br>";
    }
?>
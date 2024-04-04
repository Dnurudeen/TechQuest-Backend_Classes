<?php
    $remark = $_GET['remark'];

    if(isset($_GET['submit'])){
        switch($remark){
            case 'A':
                echo "Excellent Performance";
            break;
            case 'B':
                echo "V.Good result, You can do better";
            break;
            case 'C':
                echo "Average Performance";
            break;
            case 'D':
                echo "You Passed, Partially!";
            break;
            case 'F':
                echo "You Failed";
            break;
            default:
                echo "No Remark of such";
        }
    }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="get">
            <input type="text" placeholder="Type in Grade" name="remark">

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
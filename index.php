<?php

// Connect to database

$conn = mysqli_connect('localhost', 'nuria', 'test1234', 'pizza_mania');

// Checking connection

if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}


?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php') ?>
<?php include('templates/footer.php') ?>

</html>
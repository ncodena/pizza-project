<?php

// Connect to database

$conn = mysqli_connect('localhost', 'nuria', 'test1234', 'pizza_mania');

// Checking connection

if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

// Write query for all pizzas

$sql = 'SELECT title, ingredients, id FROM pizzas';

// Make query & get result

$result = mysqli_query($conn, $sql);

// Fetch the resulting rows as an array


$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r($pizzas);


?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php') ?>
<?php include('templates/footer.php') ?>

</html>
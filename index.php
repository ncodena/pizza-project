<?php

// Connect to database

$conn = mysqli_connect('localhost', 'nuria', 'test1234', 'pizza_mania');

// Checking connection

if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

// Write query for all pizzas

$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

// Make query & get result

$result = mysqli_query($conn, $sql);

// Fetch the resulting rows as an array

$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

//Free result from memory 

mysqli_free_result($result);

// Close the connection to the database

mysqli_close($conn);



?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php') ?>

<h4 class="center grey-text">OUR SELECTION</h4>
<div class="container">
    <div class="row">
        <?php foreach($pizzas as $pizza) { ?>

        <div class="col s6 md3">
            <div class="card z-depth-0">
                <div class="card-content center">
                    <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                    <div><?php echo htmlspecialchars($pizza['ingredients']); ?></div>
                </div>
                <div class="card-action right-align">
                    <a href="#" class="brand-text">More Info</a>
                </div>
            </div>
        </div>
        <?php } ?>


    </div>
</div>
<?php include('templates/footer.php') ?>

</html>
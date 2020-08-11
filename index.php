<?php

include('config/db_connect.php');

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

// The explode function => taking a string and explode it into an array, then we can cycle through it

// explode(',', $pizzas[0]['ingredients']);



?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php') ?>

<h4 class="center grey-text">OUR SELECTION</h4>
<div class="container">
    <div class="row">
        <?php foreach($pizzas as $pizza) : ?>

        <div class="col s6 md3">
            <div class="card z-depth-0">
                <div class="card-content center">
                    <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                    <ul>
                        <?php foreach(explode(',', $pizza['ingredients']) as $ingredient): ?>
                        <li><?php echo htmlspecialchars($ingredient) ?></li>
                        <?php endforeach;  ?>
                    </ul>
                </div>
                <div class="card-action right-align">
                    <a href="#" class="brand-text">More Info</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

        <?php if(count($pizzas) >= 2): ?>
            <p>There are two or more pizzas</p>
        <?php else : ?>
        <p>There are less than two pizzas</p>
        <?php endif; ?>


    </div>
</div>
<?php include('templates/footer.php') ?>

</html>
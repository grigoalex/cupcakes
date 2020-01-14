<?php

/**
 * Alex Grigorenko
 * 1/13/20
 * http://agrigorenko.greenriverdev.com/328/cupcakes/conformation.php
 * Conformation form with the summary of your order and total
 */

// Turn on error reporting -- this is critical!
ini_set('display_errors',1);
error_reporting(E_ALL);

$name = $_POST["Name"];
$cupCake = $_POST["cupCake"];
$total = count($cupCake);
$newTotal = number_format($total*3.50, 2);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CupCake</title>
</head>
<body>

<h1>Confirmation</h1>

<?php

    //validation
    $isValid = true;

    // Name validation, prints a message if no name imputed
    if($name != ""){
        $Name = $name;
    }
    else{
        echo "<p>Name is required</p>";
        $isValid = false;
    }

    // Checkbox validation to see if flavors selected, if not prints out a message
    if(isset($cupCake)){
        $CupCake = $cupCake;
    }
    else{
        echo "<p>Please select at least one cupcake flavor</p>";
        $isValid = false;
    }

    // if everything is valid prints out the summary
    if($isValid) {

        echo "<p>Thank you, $name, for your order!</p><br>";

        echo "<p>Order Summary:</p>";
        foreach ($cupCake as $flavor) {
            echo "<p>• $flavor </p>";
        }

        echo "<p>Order Total: $$newTotal</p>";

    }
?>
</body>

<!--&& $cupCake == "grasshopper" || $cupCake == "maple" || $cupCake == "carrot" ||-->
<!--$cupCake == "caramel" || $cupCake == "velvet" ||-->
<!--$cupCake == "lemon" || $cupCake == "tiramisu"){-->
</html>
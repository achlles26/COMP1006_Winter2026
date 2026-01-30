<?php

require "includes/header.php";

$firstname = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
$lastname = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_SPECIAL_CHARS);
$items = $_POST['items'] ?? [];

$errors = [];

if ($firstname === null || $firstname === ""){

    $errors[] = "First name is required.";
}

if ($lastname === null || $lastname === ""){

    $errors[] = "Last name is required.";
}

if ($email === null || $email === ""){

    $errors[] = "Email is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    $errors[] = "Email is not valid.";
}

if ($address === null || $address === ""){

    $errors[] = "Address is required.";
}

$itemsOrdered = [];

foreach($items as $item => $quantity){
    if (filter_var($quantity, FILTER_VALIDATE_INT) !== false && $quantity > 0){
        $itemsOrdered[$item] = $quantity;
    }
}

if (count($itemsOrdered) === 0){

    $errors[] = "You must order at least one item.";
}


foreach($errors as $error){
    echo "<li>" . $error . "</li>";

}

echo "<h2>  Thank you for submitting an order ". $firstname . "!</h2>";
?>

<main>

    <h3>Items Ordered</h3>

    <?php foreach($items as $item => $quantity):?>
    <li><?php echo $item . " x " . $quantity;?></li>
    <?php endforeach;?>
</main>

<?php
require "includes/footer.php";
?>
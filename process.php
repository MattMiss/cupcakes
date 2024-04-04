<?php
$name = $_POST["name"];

?>

<h3>Thank you, <?php echo $name?>, for your order!</h3>
<p>Order Summary</p>
<ul>
<?php

if(isset($_POST['flavor'])) {
    $total = 0;

    foreach ($_POST['flavor'] as &$value) {
        if (isset($value)) {
            $total += 3.50;
            echo "<li>$value</li>";
        }
    }
}
?>
</ul>
<?php
$total = number_format($total, 2, '.', '');
echo "<p>Order Total: <span>$$total</span></p>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Tests RAN</title>
</head>
<body>
    


<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

$vehicule1 = new Vehicule("Renaud", "cheap", "FSQUIDHQ", FALSE);
$vehicule2 = new Vehicule("Peugot", "tjrs pas", "dSDZDQ165", TRUE);


$client1 = new Client ("Mathieu", "Osef", "ggxd@gmail.com", 103204);
$client2 = new Client ("Kamel", "Roland", "topline@gmail.com", 84343);


$reservation1 = new Reservation($client1, $vehicule1, "2024-02-23", "2024-03-23", 300);
$reservation2 = new Reservation($client2, $vehicule2, "2024-02-15", "2024-03-15", 278);
$reservation2 = new Reservation($client1, $vehicule2, "2024-06-24", "2024-08-30", 520);


echo $client1->displayReservation()."<br>";

echo $client2->displayReservation()."<br>";

?>

</body>
</html>
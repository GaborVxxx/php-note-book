<?php
/** Loops and iteration  **/

/**
 * for loop
 * while loop
 * do while loop
 */

// basic for loop
for($y = 0; $y < 10; $y++){
    echo $y . ', ';
}

// basic while loop
$i = 0;
while($i < 10){
    echo $i . '<br/>';
    $i++;
}

// basic do-while loop
$x = 0;
do {
    echo $x . 'do while' . '<br/>';
    $x++;
} while($x < 10);

// conditional break out of a loop
$i = 0;
while($i < 10){
    if($i >= 5) {
        break;
    }
    echo $i . '<br/>';
    $i++;
}

// skip !
$i = 0;
while($i < 10){
    if($i == 5) {
        continue;
    }
    echo $i . '<br/>';
    $i++;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Learn PHP From Scratch</title>
</head>

<body class="bg-gray-100">
<header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold">Loops in html with php</h1>
    </div>
</header>
<div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">
        <ul>
            <!-- FOR LOOP in HTML -->
            <?php for($i = 0; $i < 10; $i++): ?>
                <li> Number: <?= $i ?> </li>
            <?php endfor; ?>
        </ul>
        <ul>
            <!-- WHILE LOOP in HTML -->
            <?php $i = 0; while($i < 10): ?>
                <li>
                    Number in while: <?= $i ?>
                </li>
            <?php $i++; endwhile; ?>
        </ul>
        <ul>
            <!-- Do while loop in HTML -->
            <?php $i = 0; do { ?>
                <li>Do while: <?= $i ?></li>
            <?php $i++; } while($i < 10); ?>
        </ul>
    </div>
</div>
</body>

</html>


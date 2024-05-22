<?php
/** Nested loops **/

// for loop in for loop
for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 5;  $j++) {
        echo $i . '-' . $j . '<br>';
    }
}

// while loop in while loop
$i = 0;
while ($i < 5) {
    $j = 0;
        while ($j < 5) {
        echo $i . '-' . $j . 'In while' . '<br>';
        $j++;
        }
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
        <h1 class="text-3xl font-semibold"> Nested Loops in html with php</h1>
    </div>
</header>
<div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">
        <ul>
            <?php for($i = 0; $i < 5; $i++) : ?>
                <?php for($j = 0; $j < 5; $j++) : ?>
                    <div>
                        <?= $i . '-' . $j ?>
                    </div>
                <?php endfor; ?>
            <?php endfor; ?>
        </ul>
    </div>
</div>
</body>

</html>

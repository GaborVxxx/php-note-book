<?php
/** Loop over arrays +*/
$arrayNormal = ['Jon', 'Sue', 'Gabor', 'Niki'];
$arrayAs = [
    ['name' => 'Jon', 'email' => 'jon@jon.com'],
    ['name' => 'Sue', 'email' => 'sue@sue.com'],
    ['name' => 'Gabor', 'email' => 'gabor@gabor.com'],
    ['name' => 'Niki', 'email' => 'niki@niki.com']
];

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
        <!-- foreach -->
        <ul>
            <?php foreach ($arrayNormal as $item) : ?>
                <li><?= $item ?></li>
            <?php endforeach; ?>
        </ul>
        <!-- foreach + index -->
        <ul>
            <?php foreach ($arrayNormal as $index => $item) : ?>
                <li><?= $index . $item ?></li>
            <?php endforeach; ?>
        </ul>
        <!-- base for loop -->
        <ul>
            <?php for($i = 0; $i < count($arrayNormal); $i++) : ?>
            <li><?= $arrayNormal[$i] ?></li>
            <?php endfor; ?>
        </ul>
        <!-- foreach over associated array -->
        <ul>
            <?php foreach ($arrayAs as $item) : ?>
                <li><?= $item['name'] ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
</body>

</html>

<?php
/** Control flow **/

// If statement
$age = 20;
if ($age >= 18) {
    echo 'Over 18.';
}

// If-Else
if ($age >= 18) {
    echo 'Over 18.';
} else {
    echo 'Under 18.';
}

// Nested if statement
$age = 17;
if ($age >= 18) {
    echo 'Over 18.';
} else {
    if($age >= 20) {
        echo 'Over 20.';
    } else {
        echo 'Under 20.';
    }
}

// If-else-if
if ($age >= 18) {
    echo 'Over 18.';
} elseif ($age >= 19) {
    echo 'Over 19.';
} else {
    echo 'Under 18.';
}

// render conditional in HTML
$isAuth = true;

?>;

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
        <h1 class="text-3xl font-semibold">Conditionals in html with php</h1>
    </div>
</header>
<div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">
        <!-- Conditional -->
        <?php if($isAuth) : ?>
            <p>Hi</p>
        <?php else: ?>
            <p>log in please</p>
        <?php endif; ?>
    </div>
</div>
</body>

</html>
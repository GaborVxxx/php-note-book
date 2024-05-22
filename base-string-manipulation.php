<?php
$title = "PHP Storm Projects";
$lo = 'lo';
$fasz = 'fasz';
$lofasz = $lo . $fasz;
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
        <h1 class="text-3xl font-semibold"><?=$title ?></h1>
    </div>
</header>
<div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-4">Welcome To The Course</h2>
        <p>In this course, you will learn the fundamentals of the PHP language</p>
        <!-- single cot and string concat -->
        <p><?= 'logo' . $lofasz ?></p>
        <!-- bubble coat and template string -->
        <p><?= "logo $lofasz"?></p>
        <!-- escape string -->
        <p><?= 'some text \'yeee\''?></p>
    </div>
</div>
</body>

</html>
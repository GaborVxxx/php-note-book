<?php
/** $_POST - Data From Forms */
echo $_SERVER['REQUEST_METHOD'];

// use form and get values by name! Validate!
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']) && isset($_POST['test'])) {
    var_dump($_POST);
    $value = htmlspecialchars($_POST['test']);
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
        <h1 class="text-3xl font-semibold">POST</h1>
        <p><?= $value ?? 'not set' ?></p>
    </div>
</header>
<div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">
        <form method="post">
            <input type="text" class="border-2" name="test">
            <button type="submit" name="submit">submit</button>
        </form>
    </div>
</div>
</body>

</html>

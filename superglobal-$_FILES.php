<?php

/** $_FILES - Uploading Files */

// Display PHP settings for debugging (uncomment if needed)
// phpinfo();

$message = '';

// Validate the form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']) && isset($_POST['test']) && isset($_FILES['fileName'])) {

    $file = $_FILES['fileName'];

    // Check if there was an upload error
    if ($file['error'] === UPLOAD_ERR_OK) {

        // Allowed file types
        $allowedTypes = ['jpg', 'jpeg'];

        // Get the file extension
        $fileExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        // Validate the file type
        if (!in_array($fileExtension, $allowedTypes)) {
            $message = 'Not an allowed file type.';
        } else {
            // Sanitize the input
            $value = htmlspecialchars($_POST['test'], ENT_QUOTES, 'UTF-8');

            // Ensure the uploads directory exists
            $uploadDir = 'uploads/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            // Create a unique file name
            $uniqueFileName = uniqid('', true) . '.' . $fileExtension;

            // Attempt to move the uploaded file
            if (move_uploaded_file($file['tmp_name'], $uploadDir . $uniqueFileName)) {
                $message = 'File uploaded successfully.';
            } else {
                $message = 'There was an error uploading your file.';
            }
        }
    } else {
        $message = 'File upload error: ' . $file['error'];
    }
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
        <p><?= $message ?></p>
    </div>
</header>
<div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">
        <form method="post" enctype="multipart/form-data">
            <input type="text" class="border-2" name="test" required>
            <input type="file" name="fileName">
            <button type="submit" name="submit">submit</button>
        </form>
    </div>
</div>
</body>

</html>

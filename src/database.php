<?php
/** PDO (PHP Data Objects) */

// docker-compose up --build  <-- command to build the container for database and run it. NOTE: require Docker!
// docker-compose up  <-- if container already exist...
// url: http://localhost:8080/src  <-- navigate to url to see the connection.

$env = parse_ini_file('../.env'); // pars the .env from root dir

$host = "127.0.0.1";
$port = 3306;
$dbName = $env['MYSQL_DATABASE'];
$username = $env['MYSQL_USER'];
$password = $env['MYSQL_PASSWORD'];

$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

try {
    $pdo = new PDO($dsn, $username, $password);

    // set it to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "Connected successfully";
} catch (PDOException $e) {
    // errors
    echo $e->getMessage();
}
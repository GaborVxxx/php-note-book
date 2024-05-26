<?php
global $pdo;
require 'database.php';

/** Make users table in database and add some records, so we can fetch some data. */

// Prepare the SELECT statement and get all.
$stmt = $pdo->prepare("SELECT * FROM users");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$first = $result[0];
var_dump($first);

// Get a single record
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
$stmt->execute(['id' => $first['id']]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($result);

// Create a new record
$stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
$stmt->execute(['name' => 'Jon', 'email' => 'jon@gmail.com']);

// Update the first record
$stmt = $pdo->prepare("UPDATE users SET name = :name, email = :email WHERE id = :id");
$stmt->execute(['name' => 'Jon2', 'email' => 'jon2@gmail.com', 'id' => $first['id']]);

// Delete record  NOTE we're just going to delete the first record for demo...
$stmt = $pdo->prepare("DELETE FROM users WHERE id = :id");
$stmt->execute(['id' => $first['id']]);




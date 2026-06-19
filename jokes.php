<?php
try {
    include 'includes/DatabaseConnection.php';

    $sql = "SELECT id,joketext,jokedate,img FROM jokes";
    $jokes = $pdo->query($sql);
    $title = 'Jokes List';

    ob_start();
    include 'templates/jokes.html.php';
    $output = ob_get_clean();
}catch (PDOException $e) {
    $title = 'An error has occured';
    $output = 'Database error: ' . $e->getMessage();
}
include 'templates/layout.html.php';
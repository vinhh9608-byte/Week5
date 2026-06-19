<?php
try {
    include 'includes/DatabaseConnection.php';

    $sql = 'select jokes.id, joketext, `name`, email, category.id as cate_id, category_name From jokes
    INNER join author on authorid = author.id
    INNER join category on jokes.categoryid = category.id';   

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
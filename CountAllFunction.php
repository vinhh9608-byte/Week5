<?php
include 'includes/DatabaseConnection.php';
function totalJokes($pdo){
    $query = $pdo->prepare('Select count(*) from joke');
    $query->execute();
    $row = $query->fetch();
    return $row[0];
}
echo totalJokes($pdo)
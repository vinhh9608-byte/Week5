<?php
function totalJokes($pdo){
    $query = $pdo->prepare('Select count(*) from jokes');
    $query->execute();
    $row = $query->fetch();
    return $row[0];
}
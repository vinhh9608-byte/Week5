<?php
if(isset($_POST['joketext'])&& isset($_POST['img'])){
    try{
        include 'includes/DatabaseConnection.php';

        $sql = 'INSERT INTO JOKES SET
        img = :img,
        joketext = :joketext,
        jokedate = CURDATE()
        authorid = 1';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':joketext', $_POST['joketext']);
        $stmt->bindValue(':img',$_POST['img']);
        $stmt->execute();
        header('location: jokes.php');

    }catch(PDOException $e){
        $title = 'An error has occured';
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
    $title = 'Add a new joke';
    ob_start();
    include 'templates/addjoke.html.php';
    $output = ob_get_clean();
}
include 'templates/layout.html.php';
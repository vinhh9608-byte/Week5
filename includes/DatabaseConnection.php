<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=week4', 'root', '');
}catch (Exception $e) {
    echo "Có lỗi xảy ra: " . $e->getMessage();
}
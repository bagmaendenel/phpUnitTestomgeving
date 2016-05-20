<?php 

require_once 'core/init.php';

$result = DB::getInstance()->_pdo->query("SELECT * FROM users");
    foreach ($result as $row) {
        print $row['email'];
    }
?>
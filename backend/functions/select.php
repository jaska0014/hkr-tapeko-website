<?php
    //Get all products and order by date added
    $sql = 'SELECT * FROM products order by date_added DESC';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
?>
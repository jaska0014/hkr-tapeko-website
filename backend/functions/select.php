<?php

    // Checks whether where is set on the url
    if (isset($_GET['where']))
    {
        $sql = 'SELECT * FROM products WHERE product_type = :where_filter_var order by date_added DESC';
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':where_filter_var', $_GET['where']);
        $stmt->execute();
    }
    else
    {
        $sql = 'SELECT * FROM products order by date_added DESC'; 
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
    }

?>
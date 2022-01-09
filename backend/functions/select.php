<?php

    $sql = 'SELECT * FROM products';

    // Checks whether where is set on the url
    if (isset($_GET['where']) or isset($_GET['user']))
    {

        $sql .= ' WHERE';

        // FILTER for WHERE only
        if (isset($_GET['where']) and !isset($_GET['user']))
        {
            $sql .= ' product_type = :where_filter_var';
            $sql .= ' order by date_added DESC';
            $stmt = $dbh->prepare($sql);
            $stmt->bindValue(':where_filter_var', $_GET['where']);
            $stmt->execute();
        }
   
        // FILTER for USER only
        if (isset($_GET['user']) and !isset($_GET['where']))
        {
            $sql .= ' added_by_userid = :user_var';
            $sql .= ' order by date_added DESC';
            $stmt = $dbh->prepare($sql);
            $stmt->bindValue(':user_var', $_GET['user']);
            $stmt->execute();
        }

        // FILTER for both WHERE and the USER
        if (isset($_GET['where']) and isset($_GET['user']))
        {
            $sql .= ' product_type = :where_filter_var and added_by_userid = :user_var';
            $sql .= ' order by date_added DESC';
            $stmt = $dbh->prepare($sql);
            $stmt->bindValue(':user_var', $_GET['user']);
            $stmt->execute();
        }
    }
    else
    {
        $stmt = $dbh->prepare($sql);
        $sql .= ' order by date_added DESC';
        $stmt->execute();
    }
?>
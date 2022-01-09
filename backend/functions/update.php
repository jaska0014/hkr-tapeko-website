<?php
// Checks whether the update button has been pressed 
if (isset($_POST['update'])) 
{
    // Creates a query 
    $sql = '
    UPDATE products
    SET 
    product_name = :product_name,
    product_type = :product_type,
    product_desc = :product_desc,
    product_designer = :product_designer,
    product_price = :product_price,
    product_year = :product_year,
    product_location = :product_location,
    image_url = :image_url,
    added_by_userid = :added_by_userid
    WHERE product_id = :id
    ';

    $image_path_to_save_in_db = $_POST['image_existing'];
    $file_changed = $_POST['check_file_changed'];

    // Default to user id of 1
    $user_id_adding = 1;

    //This is a function that upload the image to the images/ folder and returns bacl the path to store in the database
    //$file_save comes from 'backend/functions/upload-image.php'
    require('backend/functions/upload-image.php');
   
    if ($file_changed != 'no') {
        // if (file_exists($existing_image)) {
        //     unlink($existing_image); //Delete the old image file
        // }
        $image_path_to_save_in_db = $file_save;
    }

    // Prepares a query
    $stmt = $dbh->prepare($sql);
    // Connects form fields with db containers 
    $stmt->bindValue(':id', $_POST['product_id']);
    $stmt->bindValue(':product_name', $_POST['product_name']);
    $stmt->bindValue(':product_type', $_POST['product_type']);
    $stmt->bindValue(':product_desc', $_POST['product_desc']);
    $stmt->bindValue(':product_designer', $_POST['product_designer']);
    $stmt->bindValue(':product_price', $_POST['product_price']);
    $stmt->bindValue(':product_year', $_POST['product_year']);
    $stmt->bindValue(':product_location', $_POST['product_location']);
    $stmt->bindValue(':added_by_userid', $user_id_adding);
    $stmt->bindValue(':image_url', $image_path_to_save_in_db);
    // Sends query to database
    if($stmt->execute()) 
    {
        header('Location: ../../admin.php?user=1&action=updated');
        exit(); 
    }
} 
?>
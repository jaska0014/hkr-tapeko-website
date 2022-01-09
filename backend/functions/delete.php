<?php
// Checks whether delete button is pressed 
if (isset($_POST['delete'])) 
{
    // Creates a query 
    $sql = '
    DELETE FROM products
    WHERE product_id = :id
    ';

    // Prepares a query
    $stmt = $dbh->prepare($sql);

    // Delete existing file
    $existing_image = $_POST['image_existing'];
    if (file_exists($existing_image)) {
        unlink($existing_image); //Delete the existing image
    }

    // Connects form fields with db containers 
    $stmt->bindValue(':id', $_POST['id']); // Sends query to database
    if ($stmt->execute()) 
    {
        header('Location: ../../admin.php?user=1&action=deleted');
        exit(); 
    }
} 
?>

<?php
 // Checks whether the registration button has been pressed
 if (isset($_POST['create'])) 
 {
    $sql = "
    INSERT INTO `products` (`product_name`, `product_type`, `product_desc`, `product_designer`,`product_price`, `product_year`, `product_location`, `image_url`)
    VALUES (:product_name, :product_type, :product_desc, :product_designer, :product_price, :product_year, :product_location, :image_url)
    ";

    //This is a function that uploads the image to the 'product-images/upload/' folder and returns back the path to store in the database
    //$file_save comes from 'backend/functions/upload-image.php'
    require('backend/functions/upload-image.php');
    $image_path_to_save_in_db = $file_save;

    // Prepares a query
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':product_name', $_POST['product_name']);
    $stmt->bindValue(':product_type', $_POST['product_type']);
    $stmt->bindValue(':product_desc', $_POST['product_desc']);
    $stmt->bindValue(':product_designer', $_POST['product_designer']);
    $stmt->bindValue(':product_price', $_POST['product_price']);
    $stmt->bindValue(':product_year', $_POST['product_year']);
    $stmt->bindValue(':product_location', $_POST['product_location']);
    $stmt->bindValue(':image_url', $image_path_to_save_in_db);
    
    // Sends query to database
    if ($stmt->execute()) {
        header('Location: ../../products.php?action=inserted');
        exit(); 
    }

}
?>
<?php
// Checks if an action is set 
if (isset($_GET['action'])) 
{
    // Checks which action is set 
    switch ($_GET['action'])
    {
        case 'inserted': echo '
        <div class="alert alert-success alert-dismissible text-center fade show" role="alert">
            <a href="#" class="close" data-bs-dismiss="alert" aria-label="close">&times;</a>
            <strong>Posten har lagts till i databasen!</strong>
        </div>';
        break;
        case 'updated':
        echo '
        <div class="alert alert-success alert-dismissible text-center fade show" role="alert">
            <a href="#" class="close" data-bs-dismiss="alert" aria-label="close">&times;</a>
            <strong>Posten har uppdaterats i databasen!</strong>
        </div>';
        break;
        case 'deleted':
        echo '
        <div class="alert alert-danger alert-dismissible text-center fade show" role="alert">
            <a href="#" class="close" data-bs-dismiss="alert" aria-label="close">&times;</a>
            <strong>Posten har raderats från databasen!</strong>
        </div>';
        break; 
        }
} 
?>
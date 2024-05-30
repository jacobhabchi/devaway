<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire Vetted Remote Developers</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
</head>
<body>
    <?php
        // Check if a developer session exists
        if (session()->has('developer_id')) {
            include('headers/developer_header.php'); // Load developer header
        }
        // Check if a business session exists
        elseif (session()->has('business_id')) {
            include('headers/business_header.php'); // Load business header
        }
        // If no session found, load default header
        else {
            include('headers/header.php'); // Load default header
        }
    ?>
    
    <main class="flex-grow">
        
        <?php include($content); ?>
    </main>

</body>
</html>

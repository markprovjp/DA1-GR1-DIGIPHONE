<!DOCTYPE html>
<html>
<?php
require_once 'config/config.php';
require_once 'config/function.php';

autoLoadFile('./controllers/site/');
autoLoadFile('./controllers/admin/');
autoLoadFile('./models/');
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DigiPhone Shop</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="background_body">
    
      <?php
    require_once 'routers/index.php';
    require_once 'views/site/layouts/header.php';
    require_once 'views/site/layouts/nav.php';
    ?>  

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title??''?></title>
</head>
<body>
    <!-- header -->
    <?php require_once 'widgets/header.php' ?>
    <!-- header -->
    <!-- content -->
    <?php 
        require_once $view.'.php'; 
    ?>
    <!-- content -->
    <!-- footer -->
    <?php require_once 'widgets/footer.php' ?>
    <!-- footer -->
</body>
</html>
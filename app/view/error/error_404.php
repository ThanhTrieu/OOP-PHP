<?php if (!defined('APP_ROOT_PATH')) {die('NOT FOUND REQUEST');} ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>404 Not Found Page</title>
    <link rel="stylesheet" href="<?php echo asset('css/error.css'); ?>">
</head>
<body>
     <div id="clouds">
        <div class="cloud x1"></div>
        <div class="cloud x1_5"></div>
        <div class="cloud x2"></div>
        <div class="cloud x3"></div>
        <div class="cloud x4"></div>
        <div class="cloud x5"></div>
    </div>
    <div class="c">
        <div class="_404">404</div>
        <hr>
        <div class="_1">THE PAGE</div>
        <div class="_2">WAS NOT FOUND</div>
        <a class="btn" href="<?php echo redirect('home/exp/123'); ?>">BACK TO HOME</a>
    </div>
</body>
</html>
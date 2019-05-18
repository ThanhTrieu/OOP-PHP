<?php if (!defined('APP_ROOT_PATH')) {die('NOT FOUND REQUEST');} ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>oop - <?= isset($title) ? $title : null; ?></title>
	<link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css'); ?>">
</head>
<body>
	<?php require 'app/view/commons/header_view.php'; ?>
	<?php loadView($view, $data); ?>
	<?php require 'app/view/commons/footer_view.php'; ?>
</body>
</html>
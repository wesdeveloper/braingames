<!doctype html>
<html lang="pt-br" ng-app="brainGames">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width">
    <title> titulo</title>
    <script type="text/javascript" src="<?php base_url();?> assets/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php base_url();?> assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php base_url();?> assets/css/style.css">

</head>
<body class="background">
	<!-- Carrega o Menu -->
	<?php $this->load->view('includes/menu'); ?>

	<!-- Carrega a View referente a página -->
    <div id="contents"><?php echo $contents ?></div>

<!-- Carrega o Footer -->
<?php $this->load->view('includes/footer'); ?>
<!DOCTYPE html>
<html>
<?php include_once './components/head.php' ?>

<?php $includeJS = false ?>


<body>
	<?php include_once './components/cabecera.php' ?>
	<?php include_once './components/formEntrada.php' ?>
	<?php if ($includeJS) {
		echo "<script src='./js/utils.js'></script>";
		echo "<script src='./js/app.js'></script>";
	} ?>
</body>

</html>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exemplo de Views</title>
</head>
<body>

	html-no-layout<br>

	<?=$this->element('menu'); ?>

	<?=$this->fetch('content') ?>

	<?=$this->element('rodape'); ?>
</body>
</html>
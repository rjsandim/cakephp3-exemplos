<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exemplo de Views</title>
	<base href="<?=$this->Url->build('/', true)?>"/>
</head>
<body>

	<h1>html-no-layout</h1>

	<?=$this->element('menu'); ?>

	<?=$this->fetch('content') ?>

	<?=$this->element('rodape'); ?>
</body>
</html>
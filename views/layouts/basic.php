<?php

use app\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<!-- Делаем адаптивный шаблон -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Document</title>
	<?php $this->head() ?>
</head>
<body>
	<?php $this->beginBody() ?>
	
	<?= $content ?>

	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
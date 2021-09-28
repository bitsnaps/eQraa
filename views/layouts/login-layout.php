<?php
use app\assets\AppAsset;
use dmstr\web\AdminLteAsset;
use yii\helpers\Html;

// AppAsset::register($this);
AdminLteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>/images/icon.png" type="image/x-icon" />
		<!-- Render this(ar-layout-css) file for supporting Arabic Language -->
		<?= $this->render('ar-layout-css'); ?>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <?php $this->head() ?>
</head>
<body class="login-page">
<?php $this->beginBody() ?>

    <?= $content ?>

<div class="login-footer">
    <strong>Copyright &copy; <?= date('Y') ?> <a href="http://ximplexsoft.com">XimpleX Software</a>.</strong> All rights reserved.
</div>
<?php $this->endBody() ?>
</body>
</html>
<script>
	$(function () {
    console.log('ready.');
	});
</script>
<?php $this->endPage() ?>

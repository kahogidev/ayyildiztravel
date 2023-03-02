<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="datepicker_mobile_full">

    <?php $this->beginBody() ?>

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Page Preload -->



    <main>
        <?= \app\widgets\Navigation::widget()?>

        <?= $content ?>
    </main>
        <?= \app\widgets\Footer::widget()?>
    <?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>

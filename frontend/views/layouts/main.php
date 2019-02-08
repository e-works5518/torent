<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="/favicon.png" type="image/png">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/html/assets/js/custom.js"></script>
    <?php $this->head() ?>
</head>
<body class="inner-page">
<?php $this->beginBody() ?>
<div class="top-navigation">
    <div class="container flex">
        <a href="/annual">
            <picture>
                <source media="(max-width: 1080px)" srcset="/html/assets/images/logo-short2.png">
                <img src="/html/assets/images/logo-short.png" alt="" class="logo">
            </picture>
        </a>
        <label>
            <input type="checkbox">
            <span class="burger-icon"></span>
            <ul class="nav-menu flex">
                <li><a href="#" class="transition relative">SMART objectives</a></li>
                <li><a href="#" class="transition relative">User guidelines</a></li>
                <li><a href="#" class="transition relative">Contact us</a></li>
            </ul>
        </label>
        <div class="user-options">
            <a href="javascript:void(0);" class="flex">
                <img src="/html/assets/images/members/member-1.png" alt="">
                <span class="inline-block">Ani Hakobyan</span>
                <i class="fas fa-angle-down"></i>
            </a>
        </div>
    </div>
</div>
<?= $content ?>
<div class="footer">
    <div class="container">
        <p>&copy; 2019 Grant Thornton. All rights reserved.</p>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

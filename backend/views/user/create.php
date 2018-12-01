<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\User */

$this->title = 'Create user';

$this->params['breadcrumbs'][] = $this->title;
?>


<div class="user-behavioral-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>

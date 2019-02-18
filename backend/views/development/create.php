<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Development */

$this->title = 'Create Development';
$this->params['breadcrumbs'][] = ['label' => 'Developments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="development-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

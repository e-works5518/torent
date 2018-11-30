<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Behavioral */

$this->title = 'Create Behavioral';
$this->params['breadcrumbs'][] = ['label' => 'Behaviorals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="behavioral-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

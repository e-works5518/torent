<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\Impactearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Impacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="behavioral-index">

    <p>
        <?= Html::a('Create impact', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'title',
//            'description:ntext',
//            'color',
//            'icon',
            'date',

            ['class' => 'yii\grid\ActionColumn',   'template' => '{update}{delete}',],
        ],
    ]); ?>
</div>

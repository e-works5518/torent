<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\GoalsFeedbackSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Goals Feedbacks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goals-feedback-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Goals Feedback', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'goal_id',
            'manager_id',
            'status',
            'comment:ntext',
            //'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

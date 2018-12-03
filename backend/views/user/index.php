<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

/* @var $members
 * */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="user-behavioral-index">
    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'first_name',
            'last_name',
            'email:email',
            'username',
            [
                'attribute' => 'Avatar',
                'format' => 'html',
                'value' => function ($data) {
                    $img = !empty($data->avatar) ? $data->avatar : 'no-user.png';
                    return Html::img('/users/' . $img,
                        ['width' => '50px']);
                },
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Actions',
                'headerOptions' => ['style' => 'color:#337ab7'],
                'template' => '{update}{delete}',
            ],
        ],
    ]); ?>


</div>

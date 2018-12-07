<?php

$this->registerJsFile('/js/jq.js');
$this->registerJsFile('/js/common.js');
$this->registerJsFile('/js/behavioral/content.js');
$this->registerJsFile('/js/custom.js');
$this->params['goals'] = true;
?>

<div class="main-content">
    <div class="container flex">
        <div class="main-left">
            <h1 class="content-title">Behavioral competencies | 2019</h1>
            <div id="behavioral"></div>
        </div>
        <?php echo $this->render('@app/views/layouts/_right-menu.php',['active' => 'behavioral']); ?>
    </div>
</div>

<div class="popup-layer transition">
    <div class="popup relative">
        <a href="javascript:void(0);" class="popup-close absolute" title="Close popup"></a>
        <div class="request-body">
            <strong>Select a manager </strong>
            <div class="request-msg">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in
                a piece of classical Latin literature from 45 BC, making it over 2000 years old.
            </div>
            <div class="select-manager-content flex">
                <span id="manager-name" data-id="<?=Yii::$app->user->identity->manager_id?>"><?= \backend\models\User::GetManagerName() ?></span>
                <span class="or">or</span>
                <?= \kartik\select2\Select2::widget([
//                    'model' => $model,
                    'name' => 'user_id',
                    'attribute' => 'user_id',
                    'data' => $users,
                    'maintainOrder' => true,
                    'options' => ['placeholder' => 'Users ...', 'id' => 'users', 'multiple' => false],
                    'pluginOptions' => [
                        'tags' => true,
                        'allowClear' => true,
                    ],
                ]);
                ?>
            </div>
        </div>
        <div align="center">
            <button class="submit-btn transition request_feedback">Request feedback</button>
        </div>
    </div>
</div>
<?php
$this->registerJsFile('/js/jq.js');
$this->registerJsFile('/js/conversation/conversation-src.js');
$this->params['conversations'] = true;
$flag = true;
$flag_p = true;
?>

<div class="main-content">
    <div class="container">
        <?php if (Yii::$app->session->hasFlash('success')): ?>
            <div class="alert alert-success alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <h4><i class="icon fa fa-check"></i> Deleted...</h4>
            </div>
        <?php endif; ?>
        <h1 class="content-title">Coaching conversations</h1>
        <div class="requests-tabs">
            <div class="requests-tab">
                <ul class="requests-tab-title flex">
                    <li><a href="javascript:void(0);" class="transition tab-f active">Conversations received</a></li>
                    <li><a href="javascript:void(0);" class="transition tab-f">Conversations provided </a></li>
                    <?php if (!empty($users)): ?>
                        <li class="add-conversation"><a class="load-more-btn btn flex semibold" id="add-conversation"><i
                                        class="fas fa-plus"></i>Add conversation</a></li>
                    <?php endif; ?>
                </ul>
                <div class="relative">
                    <ul class="requests-list active absolute">
                        <?php if (!empty($provided)): $flag_p = false; ?>
                            <?php foreach ($provided as $item): ?>
                                <li class="flex">
                                    <span>
                                        <img src="/users/<?= $item['avatar'] ?>" alt="" class="request-to-whom">
                                        <?= $item['first_name'] ?> <?= $item['last_name'] ?>
                                    </span>
                                    <span class="notes"><?= $item['notes'] ?></span>
                                    <?php if (!empty($item['attachment'])): ?>
                                        <span>
                                            <a href="/attachments/<?= $item['attachment'] ?>" target="_blank">
                                                <i title="Download attachment" class="fas fa-download"></i> Attachment
                                            </a>
                                        </span>
                                    <?php else: ?>
                                        <span>No attachment</span>
                                    <?php endif; ?>
                                    <span class="request-date">
                                        <i class="far fa-clock"></i>
                                        <?= \backend\components\Helper::GetDate($item['date']) ?>
                                    </span>
                                    <span>
                                        <?= \yii\helpers\Html::a('Delete', ['delete',
                                            'id' => $item['id'],
                                        ], [
                                            'class' => 'btn give-feedback-btn inline-block transitio',
                                            'data' => [
                                                'confirm' => 'Are you sure you want to delete this item?',
                                                'method' => 'post',
                                            ],
                                        ]) ?>
                                    </span>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?php if ($flag_p): ?>
                            <li class="no-data">No data</li>
                        <?php endif; ?>
                    </ul>
                    <ul class="requests-list absolute">
                        <?php if (!empty($received)): $flag = false; ?>
                            <?php foreach ($received as $item): ?>
                                <li class="flex">
                            <span><img src="/users/<?= $item['avatar'] ?>" alt=""
                                       class="request-to-whom"><?= $item['first_name'] ?> <?= $item['last_name'] ?></span>
                                    <span class="notes"><?= $item['notes'] ?></span>
                                    <?php if (!empty($item['attachment'])): ?>
                                        <span><a href="/attachments/<?= $item['attachment'] ?>"
                                                 target="_blank"><i title="Download attachment"
                                                                    class="fas fa-download"></i> Attachment</a></span>
                                    <?php else: ?>
                                        <span>No attachment</span>
                                    <?php endif; ?>

                                    <span class="request-date"><i
                                                class="far fa-clock"></i><?= \backend\components\Helper::GetDate($item['date']) ?>
                                    </span>
                                    <span>
                                        <?= \yii\helpers\Html::a('Delete', ['delete',
                                            'id' => $item['id'],
                                        ], [
                                            'class' => 'btn give-feedback-btn inline-block transitio',
                                            'data' => [
                                                'confirm' => 'Are you sure you want to delete this item?',
                                                'method' => 'post',
                                            ],
                                        ]) ?>
                                    </span>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?php if ($flag): ?>
                            <li class="no-data">No data</li>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popup-layer transition">
    <div class="popup relative">
        <a href="javascript:void(0);" class="popup-close absolute" title="Close popup"></a>
        <h2 class="conversations-title">New conversation</h2>
        <?php $form = \yii\bootstrap\ActiveForm::begin(); ?>
        <div class="request-body">
            <div class="form-group add-user required ">
                <label class="control-label" for="documents-category">User</label>
                <?= \kartik\select2\Select2::widget([
                    'model' => $model,
                    'name' => 'user_id',
                    'attribute' => 'user_id',
                    'data' => $users,
                    'maintainOrder' => true,
                    'options' => ['placeholder' => 'Users ...', 'id' => 'add-user', 'multiple' => false],
                    'pluginOptions' => [
                        'allowClear' => true,
                        'initialize' => true,
                        'tags' => true,
                    ],
                ]);
                ?>
            </div>
            <?= $form->field($model, 'notes')->textarea(['maxlength' => true,'autocomplete' => 'off']) ?>
            <?= $form->field($model, 'attachment_f')->fileInput() ?>
            <?= $form->field($model, 'date')->widget(\kartik\date\DatePicker::classname(), [
                'options' => ['placeholder' => 'Date ...'],
                'pluginOptions' => [
                    'autoclose' => true
                ]
            ]) ?>
        </div>
        <div align="center">
            <?= \yii\helpers\Html::submitButton('Save', ['class' => 'submit-btn transition ']) ?>
        </div>
        <?php \yii\bootstrap\ActiveForm::end(); ?>
    </div>
</div>
<?php
//$this->registerJsFile('/js/jq.js');
//$this->registerJsFile('/js/conversation/conversation-src.js');
$this->registerJsFile('/js/common.js');
$this->params['conversations'] = true;
$flag = true;
$flag_p = true;
$this->title = "Coaching conversations";
?>

<div class="main-content">
    <section class="nav-tab">
        <div class="container">
            <div class="flex">
                <ul>
                    <li><img src="/html/assets/images/icons/home-icon.png"></li>
                    <li><a href="/annual/<?= $year ?>" >Annual appraisal</a></li>
                    <li><a href="/feedback/<?= $year ?>">Feedback</a></li>
                    <li><a href="/conversations/<?= $year ?>" class="active">Coaching sessions</a></li>
                </ul>
                <div class="change-year">
                    <label>Year</label>
                    <select id="years">
                        <option <?= $year == 2018 ? 'selected' : '' ?>>2018</option>
                        <option <?= $year == 2019 ? 'selected' : '' ?> >2019</option>
                    </select>
                </div>
            </div>
        </div>
    </section>
    <section class="table-list gray-bg feedback">
        <div class="container">
            <div class="feedback-links flex">
                <a href="javascript:void(0);" class="btn-border give-feedback-btn inline-block transition">New session
                    <i class="fas fa-plus"></i></a>
                <a class="btn-border download-report" href="#">Download report <i class="far fa-file-pdf"></i></a>
            </div>
            <div class="table-block">
                <div class="table-title flex"><img src="/html/assets/images/icons/coaching-sessions.png"> Sessions
                    received
                </div>
                <div class="table-item">
                    <table>
                        <thead>
                        <tr>
                            <th>Received from</th>
                            <th>Session notes</th>
                            <th>Attachment</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($provided)): $flag_p = false; ?>
                            <?php foreach ($provided as $item): ?>
                                <tr>
                                    <td>
                                        <span>
                                            <img src="/users/<?= $item['avatar'] ?>" alt="" class="request-to-whom">
                                        </span>
                                        <?= $item['first_name'] ?> <?= $item['last_name'] ?>
                                    </td>
                                    <td><?= $item['notes'] ?>
                                        <!--                                        <a href="#" class="red-text">View more</a>-->
                                    </td>
                                    <td class="red-text"><i class="fas fa-download"></i><a
                                                href="/attachments/<?= $item['attachment'] ?>" target="_blank">
                                            Document</a>
                                    </td>
                                    <td><?= \backend\components\Helper::GetDate($item['date']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?php if ($flag_p): ?>
                            <tr>
                                <li class="no-data">No data</li>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="table-block">
                <div class="table-title flex"><img src="/html/assets/images/icons/team-members-feedback.png"> Sessions
                    provided
                </div>
                <div class="table-item">
                    <table>
                        <thead>
                        <tr>
                            <th>Provided to</th>
                            <th>Session notes</th>
                            <th>Attachment</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($received)): $flag = false; ?>
                            <?php foreach ($received as $item): ?>
                                <tr>
                                    <td><span><img src="/users/<?= $item['avatar'] ?>" alt=""
                                                   class="request-to-whom"></span> <?= $item['first_name'] ?> <?= $item['last_name'] ?>
                                    </td>
                                    <td><?= $item['notes'] ?>
                                        <!--                                        <a href="#" class="red-text">View more</a></td>-->
                                    <td class="red-text"><i class="fas fa-download"></i><a
                                                href="/attachments/<?= $item['attachment'] ?>"
                                                target="_blank"> Document</a>
                                    </td>
                                    <td><?= \backend\components\Helper::GetDate($item['date']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?php if ($flag): ?>
                            <tr>
                                <li class="no-data">No data</li>
                            </tr>
                        <?php endif; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="popup-layer transition">
    <div class="popup relative">
        <a href="javascript:void(0);" class="popup-close absolute" title="Close popup"></a>
        <h3>New coaching session</h3>
        <div class="requests-list active absolute">
            <?php $form = \yii\bootstrap\ActiveForm::begin(); ?>
            <div class="request-body">
                <div>
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
                <div class="date">
                    <?= $form->field($model, 'date')->widget(\kartik\date\DatePicker::classname(), [
                        'options' => ['placeholder' => 'Date ...'],
                        'pluginOptions' => [
                            'autoclose' => true
                        ]
                    ]) ?>
                </div>
                <div class="attach-file">
                    <?= $form->field($model, 'attachment_f')->fileInput() ?>
                </div>
                <div>
                    <?= $form->field($model, 'notes')->textarea(['maxlength' => true, 'placeholder' => 'Session notes', 'autocomplete' => 'off']) ?>
                </div>
            </div>
            <div>
                <button type="submit" class="submit-btn transition">Create session</button>
            </div>
            <?php \yii\bootstrap\ActiveForm::end(); ?>
        </div>
    </div>
</div>
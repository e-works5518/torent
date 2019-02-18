<?php

//$this->registerJsFile('/js/jq.js');
$this->registerJsFile('/js/common.js');
//$this->registerJsFile('/js/impact/content.js');
//$this->registerJsFile('/js/custom.js');
//$this->params['goals'] = true;
$year = Yii::$app->request->get('year');
$this->title = "Impact | " . $year;
?>


<div class="main-content">
    <section class="nav-tab">
        <div class="container">
            <div class="flex">
                <ul>
                    <li><img src="/html/assets/images/icons/home-icon.png"></li>
                    <li><a href="/annual/<?= $year ?>" class="active">Annual appraisal</a></li>
                    <li><a href="/feedback">Feedback</a></li>
                    <li><a href="/conversations/<?= $year ?>">Coaching sessions</a></li>
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
    <section class="gray-bg common-block">
        <?php $form = \yii\widgets\ActiveForm::begin(['id' => 'form']); ?>
        <div class="container">
            <div class="table-title flex"><img src="/html/assets/images/icons/team-members-feedback.png">Impact
                - <?= $user['first_name'] . ' ' . $user['last_name'] ?></div>
            <?php if (!empty($impacts)): ?>
                <?php foreach ($impacts as $k => $impact): ++$k ?>
                    <div class="common-list">
                        <div class="common-title"><?= $impact['title'] ?></div>
                        <div class="flex">
                            <div class="common-item">
                                <label>My comments</label>
                                <input type="hidden"
                                       name="comments[<?= $k ?>][id]"
                                       value="<?= $impact['user_imp_id'] ?>">
                                <textarea placeholder="Comment" readonly><?= $impact['user_comment'] ?></textarea>
                            </div>
                            <div class=" common-item">
                                <label>Manager’s comments</label>
                                <textarea placeholder="Comment"
                                          name="comments[<?= $k ?>][manager_comment]"><?= $impact['manager_comment'] ?></textarea>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div align="center" class="save-submit">
            <button type="submit" class="long-btn"> Save changes</button>
            <button class="long-btn"> Save & Submit</button>
        </div>
        <?php \yii\widgets\ActiveForm::end(); ?>
    </section>
</div>
<script>
    var _Year = '<?=$year?>'
</script>
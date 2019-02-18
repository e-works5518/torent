<?php

//$this->registerJsFile('/js/jq.js');
$this->registerJsFile('/js/common.js');
//$this->registerJsFile('/js/behavioral/content.js');
//$this->registerJsFile('/js/custom.js');

$this->params['goals'] = true;

$this->title = "Behavioral | " . $year;
?>
<div class="main-content">
    <section class="nav-tab">
        <div class="container">
            <div class="flex">
                <ul>
                    <li><img src="/html/assets/images/icons/home-icon.png"></li>
                    <li><a href="/annual/<?=$year?>" class="active">Annual appraisal</a></li>
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
            <div class="table-title flex"><img src="/html/assets/images/icons/team-members-feedback.png">Behavioral
                competencies - <?= \backend\models\User::GetCurrentUserName() ?></div>
            <?php if (!empty($behavioral)): ?>
                <?php foreach ($behavioral as $k => $beh): ++$k ?>
                    <div class="common-list">
                        <div class="common-title"> <?= $beh['title'] ?> - <span> <?= $beh['sub_title'] ?>  </span></div>
                        <div class="flex">
                            <div class="common-item common-item-text">
                                <label>Behaviours:</label>
                                <p> <?= $beh['description'] ?></p>
                            </div>
                            <div class="common-item">
                                <label>My comments</label>
                                <input type="hidden" name="comments[<?= $k ?>][id]" value="<?= $beh['user_beh_id'] ?>">
                                <input type="hidden" name="comments[<?= $k ?>][behavioral_id]"
                                       value="<?= $beh['id'] ?>">
                                <textarea placeholder="Comment"
                                          name="comments[<?= $k ?>][user_comment]"><?= $beh['user_comment'] ?></textarea>
                            </div>
                            <div class="common-item">
                                <label>Manager’s comments</label>
                                <textarea placeholder="Comment" readonly><?= $beh['manager_comment'] ?></textarea>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div align="center" class="save-submit">
            <button type="submit"  class="long-btn"> Save changes</button>
            <button class="long-btn"> Save & Submit</button>
        </div>
        <?php \yii\widgets\ActiveForm::end(); ?>
    </section>
</div>

<script>
    var _Year = '<?=$year?>'
</script>
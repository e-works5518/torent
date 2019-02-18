<?php

//$this->registerJsFile('/js/jq.js');
$this->registerJsFile('/js/common.js');
//$this->registerJsFile('/js/behavioral/content.js');
//$this->registerJsFile('/js/custom.js');

$this->params['goals'] = true;

$this->title = "Development | " . $year;
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
            <div class="table-title flex"><img src="/html/assets/images/icons/team-members-feedback.png">Personal
                development plan / assessment - <?= \backend\models\User::GetCurrentUserName() ?></div>
            <div class="short-desc">
                Review your past performance to identify your strengths and areas for development. Think about feedback
                you have received regarding
                your performance and abilities. Consider what knowledge, skills, behaviours, and abilities you have
                excelled or struggled with in your career.
                Identifying your strengths and areas for development will help you prioritise your development interests
                and determine your career goals and
                development plan.
            </div>
            <?php if (!empty($developments)): ?>
                <?php foreach ($developments as $k => $development): ++$k ?>
                    <div class="common-list">
                        <div class="common-title"><?= $development['title'] ?></div>
                        <div class="flex">
                            <div class="common-item">
                                <ul><?= $development['description'] ?></ul>
                            </div>
                            <div class="common-item">
                                <textarea placeholder="Write your comments here"
                                          readonly><?= $development['user_comment'] ?></textarea>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            <div class="common-list">
                <div class="common-title">Manager’s comments</div>
                <div class="flex">
                    <div class="common-item">
                        <input type="hidden" name="comment[id]" value="<?= $manager['id'] ?>">
                        <textarea placeholder="Comment"
                                  name="comment[manager_comment]"><?= $manager['manager_comment'] ?></textarea>
                    </div>
                </div>
            </div>
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
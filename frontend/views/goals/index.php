<?php
$this->registerJsFile('/js/common.js');
$this->registerJsFile('/js/goals/content.js');
$this->params['goals'] = true;
$year = Yii::$app->request->get('year');
$this->title = "Goals | " . $year;
?>

<div class="main-content">
    <section class="nav-tab">
        <div class="container">
            <div class="flex">
                <ul>
                    <li><img src="/html/assets/images/icons/home-icon.png"></li>
                    <li><a href="/annual/<?=$year?>" class="active">Annual appraisal</a></li>
                    <li><a href="/feedback/<?= $year ?>">Feedback</a></li>
                    <li><a href="/conversations">Coaching sessions</a></li>
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
        <div class="container">
            <div class="table-title flex"><img src="/html/assets/images/icons/user-icon.png"> My goals for <?= $year ?>
            </div>
            <?php if (!empty($goals)): ?>
                <?php foreach ($goals as $k => $goal): ++$k ?>
                    <div class="common-list">
                        <div class="common-title"> Goal <?= $k ?> <a class="delete" title="Delete goal" href="/goals/delete?id=<?= $goal['id'] ?>"><i class="fas fa-trash-alt"></i></a></div>
                        <div class="flex">

                            <div class="common-item">
                                <label>Goal description</label>
                                <textarea readonly><?= $goal['description'] ?></textarea>
                            </div>
                            <div class="common-item">
                                <label>Timeframe</label>
                                <textarea readonly><?= $goal['description'] ?></textarea>
                            </div>
                            <div class="common-item">
                                <label>Measure of success</label>
                                <textarea readonly><?= $goal['description'] ?></textarea>
                            </div>
                            <div class="common-item">
                                <label>Support needed</label>
                                <textarea readonly><?= $goal['description'] ?></textarea>
                            </div>
                            <div class="common-item">
                                <label>My comments</label>
                                <textarea readonly><?= $goal['description'] ?></textarea>
                            </div>
                            <div class="common-item">
                                <label>Manager’s comments</label>
                                <textarea readonly><?= $goal['description'] ?></textarea>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            <?php $form = \yii\widgets\ActiveForm::begin(['id' => 'form']); ?>
            <div class="common-list hide">
                <div class="common-title"> Goal <?= $k + 1 ?></div>
                <div class="flex">
                    <div class="common-item">
                        <label>Goal description</label>
                        <textarea name="description"></textarea>
                    </div>
                    <div class="common-item">
                        <label>Timeframe</label>
                        <textarea name="timeframe"></textarea>
                    </div>
                    <div class="common-item">
                        <label>Measure of success</label>
                        <textarea name="measure_success"></textarea>
                    </div>
                    <div class="common-item">
                        <label>Support needed</label>
                        <textarea name="support_needed"></textarea>
                    </div>
                    <div class="common-item">
                        <label>My comments</label>
                        <textarea name="my_comment"></textarea>
                    </div>
                    <div class="common-item">
                        <label>Manager’s comments</label>
                        <textarea name="manager_comments" readonly></textarea>
                    </div>
                </div>
            </div>
            <?php \yii\widgets\ActiveForm::end(); ?>

            <div class="add-goal">
                <button class="long-btn btn-border" id="add_new_goal"> + Add new goal</button>
            </div>
        </div>
        <div align="center" class="save-submit">
            <button title="submit" form="form" class="long-btn"> Save changes</button>
            <a class="long-btn" href="/goals/submit?year=<?= $year ?>">Save & Submit</a>
        </div>
    </section>
    <section class="main-bottom gray-bg">
        <div class="container flex">
            <a class="purple-bg" href="#">
                <span><img src="/html/assets/images/icons/smart-goals.png"></span>
                <h2>SMART objectives</h2>
                <p>Read the guideline to help you shape up objectives for this year.</p>
            </a>
            <a class="green-bg " href="#">
                <span><img src="/html/assets/images/icons/user-guidelines.png"></span>
                <h2>User guidelines</h2>
                <p>Learn how to use all features of MyPerformance system. </p>
            </a>
        </div>
    </section>
</div>

<script>
    var _Year = '<?=$year?>'
</script>



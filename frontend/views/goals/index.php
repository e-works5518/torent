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
                    <li><a href="/annual" class="active">Annual appraisal</a></li>
                    <li><a href="/feedback">Feedback</a></li>
                    <li><a href="/conversations">Coaching sessions</a></li>
                </ul>
                <div class="change-year">
                    <label>Change year</label>
                    <select>
                        <option <?=$year == 2018?'selected':''?>>2018</option>
                        <option <?=$year == 2019?'selected':''?> >2019</option>
                    </select>
                </div>
            </div>
        </div>
    </section>
    <section class="gray-bg goals">
        <div class="container">
            <h1 class="content-title">My goals for <?=$year?></h1>
            <div class="goal-list">
                <h2>Goal 1</h2>
                <div class="flex">
                    <div class="goal-item">
                        <label>Goal description</label>
                        <textarea placeholder="What do I want to achieve? How does it contribute to my service line/team/GTIL strategic priorities?"></textarea>
                    </div>
                    <div class="goal-item">
                        <label>Timeframe</label>
                        <textarea placeholder="What do I want to achieve? How does it contribute to my service line/team/GTIL strategic priorities?"></textarea>
                    </div>
                    <div class="goal-item">
                        <label>Measure of success</label>
                        <textarea placeholder="What do I want to achieve? How does it contribute to my service line/team/GTIL strategic priorities?"></textarea>
                    </div>
                    <div class="goal-item">
                        <label>Support needed</label>
                        <textarea placeholder="What do I want to achieve? How does it contribute to my service line/team/GTIL strategic priorities?"></textarea>
                    </div>
                    <div class="goal-item">
                        <label>My comments</label>
                        <textarea placeholder="What do I want to achieve? How does it contribute to my service line/team/GTIL strategic priorities?"></textarea>
                    </div>
                    <div class="goal-item">
                        <label>Manager’s comments</label>
                        <textarea placeholder="What do I want to achieve? How does it contribute to my service line/team/GTIL strategic priorities?"></textarea>
                    </div>
                </div>
            </div>
            <div class="goal-list">
                <h2>Goal 2</h2>
                <div class="flex">
                    <div class="goal-item">
                        <label>Goal description</label>
                        <textarea placeholder="What do I want to achieve? How does it contribute to my service line/team/GTIL strategic priorities?"></textarea>
                    </div>
                    <div class="goal-item">
                        <label>Timeframe</label>
                        <textarea placeholder="What do I want to achieve? How does it contribute to my service line/team/GTIL strategic priorities?"></textarea>
                    </div>
                    <div class="goal-item">
                        <label>Measure of success</label>
                        <textarea placeholder="What do I want to achieve? How does it contribute to my service line/team/GTIL strategic priorities?"></textarea>
                    </div>
                    <div class="goal-item">
                        <label>Support needed</label>
                        <textarea placeholder="What do I want to achieve? How does it contribute to my service line/team/GTIL strategic priorities?"></textarea>
                    </div>
                    <div class="goal-item">
                        <label>My comments</label>
                        <textarea placeholder="What do I want to achieve? How does it contribute to my service line/team/GTIL strategic priorities?"></textarea>
                    </div>
                    <div class="goal-item">
                        <label>Manager’s comments</label>
                        <textarea placeholder="What do I want to achieve? How does it contribute to my service line/team/GTIL strategic priorities?"></textarea>
                    </div>
                </div>
            </div>
            <div><button class="long-btn btn-with-bg"> + Add new goal</button></div>
        </div>
    </section>
    <section class="save-submit">
        <div align="center" class="container">
            <button class="long-btn btn-border"> Save changes</button>
            <button class="long-btn btn-with-bg"> Save & Submit</button>
        </div>
    </section>
</div>

<script>
    var _Year = '<?=$year?>'
</script>
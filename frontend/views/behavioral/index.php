<?php

$this->registerJsFile('/js/jq.js');
$this->registerJsFile('/js/behavioral/content.js');
$this->registerJsFile('/js/custom.js');
?>

<div class="main-content">
    <div class="container flex">
        <div class="main-left">
            <h1 class="content-title">Behavioral competencies | 2018</h1>
            <div id="behavioral"></div>
        </div>
        <?php echo $this->render('@app/views/layouts/_right-menu.php'); ?>
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
            <div class="request-feedback flex">
                <select size="1" id="users">
                    <option selected>Select manager</option>
                    <?php foreach ($users as $k => $user): ?>
                        <option value="<?= $k ?>"><?= $user ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div align="center">
            <button class="submit-btn transition request_feedback">Request feedback</button>
        </div>
    </div>
</div>
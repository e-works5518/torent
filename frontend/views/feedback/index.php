<?php
$this->registerJsFile('/js/jq.js');
$this->registerJsFile('/js/feedback/feedback-src.js');
$this->params['feedback'] = true;
?>

<div class="main-content">
    <div class="container">
        <h1 class="content-title">Feedback requests</h1>
        <div class="requests-tabs">
            <div class="requests-tab">
                <ul class="requests-tab-title flex">
                    <li><a href="javascript:void(0);" class="transition active">Pending requests</a></li>
                    <li><a href="javascript:void(0);" class="transition">Provided requests</a></li>
                </ul>
                <div class="relative">
                    <ul class="requests-list active absolute">
                        <?php if (!empty($behavioral_feedbacks)): ?>
                            <?php foreach ($behavioral_feedbacks as $feedback): ?>
                                <li class="flex">
                            <span><img src="/users/<?= $feedback['avatar'] ?>" alt=""
                                       class="request-to-whom"><?= $feedback['first_name'] ?> <?= $feedback['last_name'] ?></span>
                                    <span>Behavioral competence</span>
                                    <span>External</span>
                                    <span class="request-date"><i
                                                class="far fa-clock"></i><?= $feedback['date'] ?></span>
                                    <span><a href="javascript:void(0);"
                                             data-type="behavioral"
                                             data-id="<?= $feedback['behavioral_id'] ?>"
                                             data-user-id="<?= $feedback['user_id'] ?>"
                                             class="btn give-feedback-btn inline-block transition give_feedback">Give feedback</a></span>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <?php if (!empty($goals_feedbacks)): ?>
                            <?php foreach ($goals_feedbacks as $feedback): ?>
                                <li class="flex">
                            <span><img src="/users/<?= $feedback['avatar'] ?>" alt=""
                                       class="request-to-whom"><?= $feedback['first_name'] ?> <?= $feedback['last_name'] ?></span>
                                    <span>Goal / Objective</span>
                                    <span>Internal</span>
                                    <span class="request-date"><i
                                                class="far fa-clock"></i><?= $feedback['date'] ?></span>
                                    <span><a href="javascript:void(0);"
                                             data-type="goal"
                                             data-id="<?= $feedback['goal_id'] ?>"
                                             data-user-id="<?= $feedback['user_id'] ?>"
                                             class="btn give-feedback-btn inline-block transition give_feedback">Give feedback</a></span>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <?php if (!empty($impact_feedbacks)): ?>
                            <?php foreach ($impact_feedbacks as $feedback): ?>
                                <li class="flex">
                            <span><img src="/users/<?= $feedback['avatar'] ?>" alt=""
                                       class="request-to-whom"><?= $feedback['first_name'] ?> <?= $feedback['last_name'] ?></span>
                                    <span>Impact</span>
                                    <span>Internal</span>
                                    <span class="request-date"><i
                                                class="far fa-clock"></i><?= $feedback['date'] ?></span>
                                    <span><a href="javascript:void(0);"
                                             data-type="impact"
                                             data-id="<?= $feedback['impact_id'] ?>"
                                             data-user-id="<?= $feedback['user_id'] ?>"
                                             class="btn give-feedback-btn inline-block transition give_feedback">Give feedback</a></span>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                    <ul class="requests-list absolute">
                        <?php if (!empty($behavioral_feedbacks_provided)): ?>
                            <?php foreach ($behavioral_feedbacks_provided as $feedback): ?>
                                <li class="flex">
                                    <span><img src="/users/<?= $feedback['avatar'] ?>" alt=""
                                               class="request-to-whom"><?= $feedback['first_name'] ?> <?= $feedback['last_name'] ?></span>
                                    <span>Behavioral competence</span>
                                    <span>External</span>
                                    <span
                                            class="btn <?= \backend\components\Helper::GetFeedbackStatus($feedback)['class'] ?> inline-block transition">
                                      <?= \backend\components\Helper::GetFeedbackStatus($feedback)['label'] ?>
                                    </span>
                                    <span class="request-date"><i
                                                class="far fa-clock"></i><?= \backend\components\Helper::GetDate($feedback['date']) ?></span>

                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <?php if (!empty($goals_feedbacks_provided)): ?>
                            <?php foreach ($goals_feedbacks_provided as $feedback): ?>
                                <li class="flex">
                                    <span><img src="/users/<?= $feedback['avatar'] ?>" alt=""
                                               class="request-to-whom"><?= $feedback['first_name'] ?> <?= $feedback['last_name'] ?></span>
                                    <span>Goal / Objective</span>
                                    <span>Internal</span>
                                    <span
                                            class="btn <?= \backend\components\Helper::GetFeedbackStatus($feedback)['class'] ?> inline-block transition">
                                      <?= \backend\components\Helper::GetFeedbackStatus($feedback)['label'] ?>
                                    </span>
                                    <span class="request-date"><i
                                                class="far fa-clock"></i><?= \backend\components\Helper::GetDate($feedback['date']) ?></span>

                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <?php if (!empty($impact_feedbacks_provided)): ?>
                            <?php foreach ($impact_feedbacks_provided as $feedback): ?>
                                <li class="flex">
                                    <span><img src="/users/<?= $feedback['avatar'] ?>" alt=""
                                               class="request-to-whom"><?= $feedback['first_name'] ?> <?= $feedback['last_name'] ?></span>
                                    <span>Impact</span>
                                    <span>Internal</span>
                                    <span
                                            class="btn <?= \backend\components\Helper::GetFeedbackStatus($feedback)['class'] ?> inline-block transition">
                                      <?= \backend\components\Helper::GetFeedbackStatus($feedback)['label'] ?>
                                    </span>
                                    <span class="request-date"><i
                                                class="far fa-clock"></i><?= \backend\components\Helper::GetDate($feedback['date']) ?></span>

                                </li>
                            <?php endforeach; ?>
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
        <div class="request-to">
            <img src="/main/assets/images/members/member-2.png" alt="" class="request-to-whom">
            <strong></strong>
            <span class="request-date"><i class="far fa-clock"></i><span class="date"></span></span>
        </div>
        <div class="request-body">
            <strong class="title"></strong>
            <h3>Description</h3>
            <div class="request-msg description"></div>
            <h3>Comment</h3>
            <div class="request-msg comment"></div>
            <textarea class="comment_val" placeholder="Leave your comment (max. 250 chars)"></textarea>
        </div>
        <div class="request-options">
            <label>
                <input class="status_val" type="radio" value="0" name="status" checked><i
                        class="fas fa-check transition fa-icon-prop"></i>Objective
                was
                achieved</label>
            <label>
                <input class="status_val" type="radio" value="1" name="status"><i
                        class="fas fa-check transition fa-icon-prop"></i>Objective was
                partially
                achieved</label>
            <label>
                <input class="status_val" type="radio" value="2" name="status"><i
                        class="fas fa-check transition fa-icon-prop"></i>Objective
                wasn’t achieved</label>
        </div>
        <div align="center">
            <button class="submit-btn transition submit_feedback">Submit feedback</button>
        </div>
    </div>
</div>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 12/1/2018
 * Time: 12:50 PM
 */

$impacts = \common\models\Impact::GetAll();
?>
<?php foreach ($impacts as $beh):
    $employee_comments = \common\models\UserImpact::GetCommentByBehId($beh['id']);
    $managers_comments = \common\models\ImpactFeedback::GetCurrentUserFellByBehId($beh['id']);
    ?>
    <div class="post has-border collaboration-post relative" style="border-color:<?= $beh['color'] ?>">
        <span class="post-title semibold" style="color: <?= $beh['color'] ?>;"><?= $beh['title'] ?></span>
        <p><?= $beh['description'] ?></p>
    </div>
    <div class="post has-border relative">
        <a href="javascript:void(0);" class="post-edit absolute"><i
                    class="fas fa-pencil-alt fa-icon-prop"></i></a>
        <span class="post-title semibold">Employee comments</span>
        <textarea readonly data-id="<?= $beh['id'] ?>" class="user_comment"><?= $employee_comments['user_comment'] ?></textarea>
    </div>
    <div class="post post-comments relative">
        <a href="javascript:void(0);"
           data-id="<?= $beh['id'] ?>"
           class="post-edit absolute give-feedback-btn"><span>Request feedback</span><i
                    class="fas fa-plus fa-icon-prop"></i></a>
        <span class="post-title semibold">Manager’s comments</span>
        <?php if (!empty($managers_comments)): ?>
            <?php foreach ($managers_comments as $managers_comment): ?>
                <div class="comment-item flex" status="<?= $managers_comment['status'] ?>">
                    <div class="request-to">
                        <img src="/users/<?= $managers_comment['avatar'] ?>" alt="" class="request-to-whom">
                        <strong><?= $managers_comment['first_name'] ?> <?= $managers_comment['last_name'] ?></strong>
                        <span class="request-date"><i
                                    class="far fa-clock"></i><?= \backend\components\Helper::GetDate($managers_comment['date']) ?></span>
                        <?php if ($managers_comment['state'] == 1): ?>
                            <a href="javascript:void(0);"
                               class="btn <?= \backend\components\Helper::GetFeedbackStatus($managers_comment)['class'] ?> inline-block transition">
                                <?= \backend\components\Helper::GetFeedbackStatus($managers_comment)['label'] ?>
                            </a>
                        <?php else: ?>
                            <a href="javascript:void(0);"
                               class="btn disagree inline-block transition">Pending approval</a>
                        <?php endif; ?>
                    </div>
                    <p><?= $managers_comment['comment'] ?></p>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
<?php endforeach; ?>





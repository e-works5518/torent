<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 12/1/2018
 * Time: 12:50 PM
 */

$behs = \common\models\Behavioral::GetAll();
?>
<?php foreach ($behs as $beh):
    $employee_comments = \common\models\UserBehavioral::GetCommentByBehId($beh['id']);
    $managers_comments = \common\models\BehavioralFeedback::GetCurrentUserFellByBehId($beh['id']);
    ?>
    <div class="post has-border collaboration-post relative" style="border-color:<?= $beh['color'] ?>">
        <span class="post-title semibold" style="color: <?= $beh['color'] ?>;"><img src="/logos/<?= $beh['icon'] ?>"
                                                                                    alt=""><?= $beh['title'] ?></span>
        <p><?= $beh['description'] ?></p>
    </div>
    <div class="post has-border relative">
        <a href="javascript:void(0);" class="post-edit absolute"><i
                    class="fas fa-pencil-alt fa-icon-prop"></i></a>
        <span class="post-title semibold">Employee comments</span>
        <textarea data-id="<?= $beh['id'] ?>" class="user_comment"><?= $employee_comments['user_comment'] ?></textarea>
    </div>
    <div class="post post-comments relative">
        <a href="javascript:void(0);"
           data-id="<?= $beh['id'] ?>"
           class="post-edit absolute give-feedback-btn"><span>Request feedback</span><i
                    class="fas fa-plus fa-icon-prop"></i></a>
        <span class="post-title semibold">Manager’s comments</span>
        <?php if (!empty($managers_comments)): ?>
            <?php foreach ($managers_comments as $managers_comment): ?>
                <div class="comment-item flex">
                    <div class="request-to">
                        <img src="assets/images/members/member-2.png" alt="" class="request-to-whom">
                        <strong>Vladislav Muradyan</strong>
                        <span class="request-date"><i class="far fa-clock"></i>20.08.2017</span>
                        <a href="javascript:void(0);" class="btn strongly-agree inline-block transition">Strongly
                            agree</a>
                    </div>
                    <p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The
                        Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the
                        theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem
                        ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                </div>
                <div class="comment-item flex">
                    <div class="request-to">
                        <img src="assets/images/members/member-2.png" alt="" class="request-to-whom">
                        <strong>Gurgen Hakobyan</strong>
                        <span class="request-date"><i class="far fa-clock"></i>20.08.2017</span>
                        <a href="javascript:void(0);" class="btn agree inline-block transition">Agree</a>
                    </div>
                    <p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The
                        Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the
                        theory of ethics, very popular during the Renaissance.</p>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
<?php endforeach; ?>





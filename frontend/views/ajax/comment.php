<div class="post post-comments relative">
    <a href="javascript:void(0);" data-id="<?= $goal->id; ?>"
       class="post-edit absolute give-feedback-btn give-feedback-btn"><span>Request feedback</span><i
            class="fas fa-plus fa-icon-prop"></i></a>
    <span class="post-title semibold">Manager’s comments</span>
    <?php if (!empty($managers_comments)): ?>
        <?php foreach ($managers_comments as $manager_comment): ?>
            <?php if ($manager_comment['goal_id'] == $goal->id): ?>
                <div class="comment-item flex">
                    <div class="request-to">
                        <img src="/users/<?= $manager_comment['avatar'] ?>" alt=""
                             class="request-to-whom">
                        <strong><?= $manager_comment['first_name'] ?> <?= $manager_comment['last_name'] ?></strong>
                        <span class="request-date"><i
                                class="far fa-clock"></i><?= \backend\components\Helper::GetDate($manager_comment['date']) ?></span>
                    </div>
                    <p><?= $manager_comment['comment']; ?></p>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
<?php
$this->registerJsFile('/js/goals/content.js');
$this->params['goals'] = true;
?>

<div class="main-content">
    <div class="container flex">
        <div class="main-left">
            <h1 class="content-title">Goals and Expectations | 2018</h1>
            <div id="goals-form">
                <div class="goals-all-content">
                    <?php if (!empty($goals)): ?>
                        <?php $i = 0;
                        foreach ($goals as $goal): $i++; ?>

                            <div class="goals-inputs-content" data-goals-id="<?= $goal->id; ?>">
                                <div class="post has-border objective-post relative description-content">
                                    <label for="goals-description" class="post-edit absolute"><i
                                                class="fas fa-pencil-alt fa-icon-prop"></i></label>
                                    <span class="post-title semibold">Objective <?= $i; ?><? ?></span>
                                    <textarea name="Goals[description]" class="description"
                                              rows="3"><?= $goal->description; ?></textarea>
                                </div>
                                <div class="post has-border relative user-comment-content">
                                    <label for="goals-user_comment" class="post-edit absolute"><i
                                                class="fas fa-pencil-alt fa-icon-prop"></i></label>
                                    <span class="post-title semibold">Employee comments</span>
                                    <textarea name="Goals[user_comment]" class="user_comment"
                                              rows="4"><?= $goal->user_comment; ?></textarea>
                                </div>
                            </div>

                            <div class="post post-comments relative">
                                <a href="javascript:void(0);" data-id="<?= $goal->id; ?>" class="post-edit absolute give-feedback-btn give-feedback-btn"><span>Request feedback</span><i class="fas fa-plus fa-icon-prop"></i></a>
                                <span class="post-title semibold">Manager’s comments</span>
                                <?php if (!empty($managers_comments)):?>
                                    <?php foreach ($managers_comments as $manager_comment):?>
                                        <?php if ($manager_comment['goal_id'] == $goal->id):?>
                                            <div class="comment-item flex">
                                                <div class="request-to">
                                                    <img src="/users/<?= $manager_comment['avatar'] ?>" alt="" class="request-to-whom">
                                                    <strong><?= $manager_comment['first_name'] ?> <?= $manager_comment['last_name'] ?></strong>
                                                    <span class="request-date"><i class="far fa-clock"></i><?= \backend\components\Helper::GetDate($manager_comment['date']) ?></span>
                                                </div>
                                                <p><?= $manager_comment['comment']; ?></p>
                                            </div>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="goals-inputs-content" data-goals-id="">
                            <div class="post has-border objective-post relative description-content">
                                <label for="goals-description" class="post-edit absolute"><i
                                            class="fas fa-pencil-alt fa-icon-prop"></i></label>
                                <span class="post-title semibold">Objective 1</span>
                                <textarea name="Goals[description]" class="description" rows="3"></textarea>
                            </div>
                            <div class="post has-border relative user-comment-content">
                                <label for="goals-user_comment" class="post-edit absolute"><i
                                            class="fas fa-pencil-alt fa-icon-prop"></i></label>
                                <span class="post-title semibold">Employee comments</span>
                                <textarea name="Goals[user_comment]" class="user_comment"
                                          rows="4"></textarea>
                            </div>
                        </div>

                    <?php endif; ?>
                </div>
            </div>

            <a class="load-more-btn flex semibold" id="add-objective"><i
                        class="fas fa-plus"></i>Add objective</a>
        </div>
        <?php echo $this->render('@app/views/layouts/_right-menu.php',['active' => 'goals']); ?>
    </div>
</div>
<div class="popup-layer transition">
    <div class="popup relative">
        <a href="javascript:void(0);" class="popup-close absolute" title="Close popup"></a>
        <div class="request-body">
            <strong>Goal / Objective</strong>
            <div class="request-msg">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in
                a piece of classical Latin literature from 45 BC, making it over 2000 years old.
            </div>
            <div class="select-manager-content flex">
                <select size="1" id="users">
                    <option value="" selected>Select manager</option>
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
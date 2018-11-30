<?php
use yii\widgets\ActiveForm;
?>

<div class="main-content">
    <div class="container flex">
        <div class="main-left">
            <h1 class="content-title">Goals and Expectations | 2018</h1>

            <?php $form = ActiveForm::begin([
                    'id' => 'goals-form',
            ]) ?>
<!--            --><?//= $form->field($model, 'title')->textInput() ?>
            <div class="post has-border objective-post relative description-content">
                <label  for="goals-description" class="post-edit absolute"><i class="fas fa-pencil-alt fa-icon-prop"></i></label>
                <span class="post-title semibold">Objective 1</span>
                <?= $form->field($model, 'description')->textarea(['rows' => '2','class' => 'description'])->label(false); ?>
            </div>
            <div class="post has-border relative user-comment-content">
                <label for="goals-user_comment" class="post-edit absolute"><i class="fas fa-pencil-alt fa-icon-prop"></i></label>
                <span class="post-title semibold">Employee comments</span>
                <?= $form->field($model, 'user_comment')->textarea(['rows' => '3' ,'class' => 'user_comment'])->label(false) ?>
            </div>

            <?php ActiveForm::end() ?>

            <div class="post post-comments relative">
                <a href="javascript:void(0);" class="post-edit absolute give-feedback-btn"><span>Request feedback</span><i class="fas fa-plus fa-icon-prop"></i></a>
                <span class="post-title semibold">Manager’s comments</span>
                <div class="comment-item flex">
                    <div class="request-to">
                        <img src="/main/assets/images/members/member-2.png" alt="" class="request-to-whom">
                        <strong>Vladislav Muradyan</strong>
                        <span class="request-date"><i class="far fa-clock"></i>20.08.2017</span>
                    </div>
                    <p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                </div>
                <div class="comment-item flex">
                    <div class="request-to">
                        <img src="/main/assets/images/members/member-2.png" alt="" class="request-to-whom">
                        <strong>Vladislav Muradyan</strong>
                        <span class="request-date"><i class="far fa-clock"></i>20.08.2017</span>
                    </div>
                    <p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.</p>
                </div>
            </div>
            <a href="javascript:void(0);" class="load-more-btn flex semibold"><i class="fas fa-plus"></i>Add objective</a>
        </div>
        <?php echo $this->render('@app/views/layouts/_right-menu.php'); ?>
    </div>
</div>
<div class="popup-layer transition">
    <div class="popup relative">
        <a href="javascript:void(0);" class="popup-close absolute" title="Close popup"></a>
        <div class="request-body">
            <strong>Goal / Objective</strong>
            <div class="request-msg">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</div>
            <div class="request-feedback flex">
                <select size="1">
                    <option selected>Select manager</option>
                </select>
                <span class="or">or</span>
                <input type="text" placeholder="Enter email address">
            </div>
        </div>
        <div align="center"><button class="submit-btn transition">Request feedback</button></div>
    </div>
</div>
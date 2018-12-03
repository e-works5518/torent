<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Grant Thornton | Performance Appraisal System';
$this->params['breadcrumbs'][] = $this->title;
?>

<img src="/main/assets/images/login-page-bg.jpg" alt="" class="body-bg-img">
<div class="container">
    <div class="logo">
        <a href="/site/login"><img src="/main/assets/images/logo.png" alt="Grant Thornton | An instinct for growth&trade;" title="Grant Thornton | An instinct for growth&trade;"></a>
    </div>
    <div class="access-area">
        <h1>Performance Appraisal System</h1>
        <div class="access-form">
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
            ]); ?>
            <div class="welcome-heading">Sign-in to access your account</div>
            <div class="access-form-row">

                <label class="username">
                    <?= $form->field($model, 'username',[
                        'options' => [
                            'class' => 'form-username',
                        ],
                    ])->textInput(["placeholder" => "Username", ])->label(false) ?>
                </label>
            </div>
            <div class="access-form-row">
                <label class="password">
                    <?= $form->field($model, 'password',[
                        'options' => [
                            'class' => 'form-username',
                        ],
                    ])->passwordInput(["placeholder" => "Password", ])->label(false) ?>
                </label>
            </div>
            <div class="access-form-row">
                <label for="remember-me">
                    <input type="checkbox" name="LoginForm[rememberMe]" id="remember-me">
                    <span class="remember-me">remember me</span>
                </label>
                <a href="/site/request-password-reset"><i class="fa fa-angle-right"></i> forgot password</a>
            </div>
            <div>
                <?= Html::submitButton('sign-in', ['class' => 'btn btn-primary uppercase', 'name' => 'login-button']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>

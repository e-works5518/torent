<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $user_rules
/* @var $select_countries
 * /* @var $countries
 * /* @var $companies
 * /* @var $select_countries
 * /* @var $model
 * /* @var $model frontend\models\User
 */
/* @var $form yii\widgets\ActiveForm */

?>
<style>
    #user-ebrd{
        display: inherit;
    }
</style>

<div class="user-form">
    <?php $form = ActiveForm::begin([
        'options' => [
            'id' => 'f55'
        ]
    ]); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'first_name')->textInput(['maxlength' => true,'title' => $model->getAttributeLabel('first_name'), 'placeholder' => $model->getAttributeLabel('first_name')]) ?>
            <?= $form->field($model, 'last_name')->textInput(['maxlength' => true,'title' => $model->getAttributeLabel('last_name'), 'placeholder' => $model->getAttributeLabel('last_name')]) ?>
            <?= $form->field($model, 'username')->textInput(['maxlength' => true,'disabled' => 'disabled', 'title' => $model->getAttributeLabel('username'), 'placeholder' => $model->getAttributeLabel('username')]) ?>
            <?= $form->field($model, 'email')->textInput(['maxlength' => true,'title' => $model->getAttributeLabel('email'), 'placeholder' => $model->getAttributeLabel('email')]) ?>
            <?= $form->field($model, 'status')->dropDownList(['10' => 'Active', '0' => 'Inactive'],['title' => $model->getAttributeLabel('status')]) ?>
        </div>
        <div class="col-md-6">
            <?php if (!empty($model->image_url)): ?>
                <div class="field-user-imagefile attachment gray-bg padding-5 margin-btn-5">
                    <div class="attachment-img">
                        <img width="100px" src="/uploads/<?= $model->image_url ?>" alt="">
                    </div>
                </div>
            <?php endif; ?>
            <?= $form->field($model, 'imageFile')->fileInput() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <?= Html::submitButton('Update', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>

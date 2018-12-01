<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Behavioral */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="behavioral-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'color')->widget(\kartik\color\ColorInput::classname(), [
                'options' => ['placeholder' => 'Select color ...'],
            ]); ?>
            <?php if ($model->icon): ?>
                <div class="col-md-12" style="background-color: #efeaea; padding: 10px">
                    <img src="/logos/<?=$model->icon?>" width="50px" alt="">
                </div>

            <?php endif; ?>
            <?= $form->field($model, 'icon_f')->fileInput() ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

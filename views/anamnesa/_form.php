<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Anamnesa */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="anamnesa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jawaban1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jawaban2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jawaban3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jawaban4')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jawaban5')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jawaban6')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jawaban7')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nomor_rekam_medik')->textInput() ?>

    <?= $form->field($model, 'g')->textInput() ?>

    <?= $form->field($model, 'p')->textInput() ?>

    <?= $form->field($model, 'a')->textInput() ?>

    <?= $form->field($model, 'h')->textInput() ?>

    <?= $form->field($model, 'jawaban8')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'no_daftar')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PaketMcu */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<style>
    #form-paket .col-form-label {
        font-size: 11px;
    }

    #form-paket .form-group {
        margin-bottom: 0.2rem;
    }
</style>
<div class="paket-mcu-form">


    <?php $form = ActiveForm::begin(['id' => 'form-paket', 'layout' => 'horizontal']); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'Nama Paket Pemeriksaan']) ?>

    <?= $form->field($model, 'is_active')->dropdownList(['0' => 'Aktif', '1' => 'Tidak Aktif'], ['prompt' => 'Status Paket Pilih', 'class' => 'form-control form-control-sm', 'placeholder' => 'Status Paket']) ?>

    <?= $form->field($model, 'kode_debitur')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'Kode Debitur']) ?>
    <?= $form->field($model, 'jenis_paket')->dropDownList(['1' => 'Umum', '2' => 'Instansi', '3' => 'Umum/Instansi'], ['prompt' => 'Pilih Jenis Paket', 'class' => 'form-control form-control-sm']) ?>

    <br>
    <div class="form-group float-right">
        <?= Html::submitButton('Simpan Data Paket', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
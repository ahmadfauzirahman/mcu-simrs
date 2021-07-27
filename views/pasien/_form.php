<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pasien */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NO_PASIEN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAMA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAMAPANGGILAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALAMAT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DESA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RW')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KELURAHAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KECAMATAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KABUPATEN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KD_POS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NO_TELP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NO_HP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TP_LAHIR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TGL_LAHIR')->textInput() ?>

    <?= $form->field($model, 'NO_DEBT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NO_KARTU')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ATASNAMA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HUBUNGAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TGL_DAFTAR')->textInput() ?>

    <?= $form->field($model, 'PEKERJAAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'JENIS_KEL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PENDAKH')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AGAMA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STATUS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NO_DAFTAR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KARTU')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PENJWB')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAMAPEN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALMPEN1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALMPEN2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TELPPEN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HPPEN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PHOTO')->textInput() ?>

    <?= $form->field($model, 'NAMAAYAH')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAMAIBU')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAMAPASANGAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HUBPEN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RTPEN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RWPEN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KODEPOSPEN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DESAPEN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KECPEN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KABPEN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOIDENTITAS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PROPINSI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PROPPEN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CREATE_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CREATE_DATE')->textInput() ?>

    <?= $form->field($model, 'MODIFY_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MODIFY_DATE')->textInput() ?>

    <?= $form->field($model, 'NAKTIF')->textInput() ?>

    <?= $form->field($model, 'STATUSWN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ALMKANTOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KOTAKANTOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PROPKANTOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TELPKANTOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GOLDAR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAMAKANTOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NUMURTH')->textInput() ?>

    <?= $form->field($model, 'NUMURBL')->textInput() ?>

    <?= $form->field($model, 'NUMURHR')->textInput() ?>

    <?= $form->field($model, 'HOBI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KEBIASAAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LAIN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NO_PASIENIBU')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KODEPROP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KODEKAB')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KODEKEC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KODEKEL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MARGA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PEKERJAANPEN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PENDAKHPEN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KD_AGAMA')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

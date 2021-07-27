<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PasienBaru */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="pasien-baru-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pendidikan_kode')->textInput() ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lahir')->textInput() ?>

    <?= $form->field($model, 'alergi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kelurahan_kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kedudukan_keluarga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anak_ke')->textInput() ?>

    <?= $form->field($model, 'istri_ke')->textInput() ?>

    <?= $form->field($model, 'goldar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jurusan_kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_identitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jkel')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status_kawin_kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_kerja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_tempat_kerja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ayah_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ibu_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pasangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agama_kode')->textInput() ?>

    <?= $form->field($model, 'pekerjaan_kode')->textInput() ?>

    <?= $form->field($model, 'jml_anak')->textInput() ?>

    <?= $form->field($model, 'deleted_at')->textInput() ?>

    <?= $form->field($model, 'deleted_by')->textInput() ?>

    <?= $form->field($model, 'penghasilan')->textInput() ?>

    <?= $form->field($model, 'suku_kode')->textInput() ?>

    <?= $form->field($model, 'kewarganegaraan_kode')->textInput() ?>

    <?= $form->field($model, 'rt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'ayah_no_rekam_medis')->textInput() ?>

    <?= $form->field($model, 'ibu_no_rekam_medis')->textInput() ?>

    <?= $form->field($model, 'jenis_identitas_kode')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kebiasaan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'riwayat_penyakit')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'no_kk')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

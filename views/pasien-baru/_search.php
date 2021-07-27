<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PasienBaruSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row mt-2">
    <div class="col-md-12">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'pendidikan_kode') ?>

    <?= $form->field($model, 'tempat_lahir') ?>

    <?= $form->field($model, 'tgl_lahir') ?>

    <?= $form->field($model, 'alergi') ?>

    <?= $form->field($model, 'kelurahan_kode') ?>

    <?php // echo $form->field($model, 'kedudukan_keluarga') ?>

    <?php // echo $form->field($model, 'anak_ke') ?>

    <?php // echo $form->field($model, 'istri_ke') ?>

    <?php // echo $form->field($model, 'goldar') ?>

    <?php // echo $form->field($model, 'jurusan_kode') ?>

    <?php // echo $form->field($model, 'kode') ?>

    <?php // echo $form->field($model, 'nama') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'no_identitas') ?>

    <?php // echo $form->field($model, 'no_telp') ?>

    <?php // echo $form->field($model, 'jkel') ?>

    <?php // echo $form->field($model, 'status_kawin_kode') ?>

    <?php // echo $form->field($model, 'tempat_kerja') ?>

    <?php // echo $form->field($model, 'alamat_tempat_kerja') ?>

    <?php // echo $form->field($model, 'ayah_nama') ?>

    <?php // echo $form->field($model, 'ibu_nama') ?>

    <?php // echo $form->field($model, 'nama_pasangan') ?>

    <?php // echo $form->field($model, 'agama_kode') ?>

    <?php // echo $form->field($model, 'pekerjaan_kode') ?>

    <?php // echo $form->field($model, 'jml_anak') ?>

    <?php // echo $form->field($model, 'deleted_at') ?>

    <?php // echo $form->field($model, 'deleted_by') ?>

    <?php // echo $form->field($model, 'penghasilan') ?>

    <?php // echo $form->field($model, 'suku_kode') ?>

    <?php // echo $form->field($model, 'kewarganegaraan_kode') ?>

    <?php // echo $form->field($model, 'rt') ?>

    <?php // echo $form->field($model, 'rw') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'ayah_no_rekam_medis') ?>

    <?php // echo $form->field($model, 'ibu_no_rekam_medis') ?>

    <?php // echo $form->field($model, 'jenis_identitas_kode') ?>

    <?php // echo $form->field($model, 'kebiasaan') ?>

    <?php // echo $form->field($model, 'riwayat_penyakit') ?>

    <?php // echo $form->field($model, 'no_kk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PasienSearch */
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

    <?= $form->field($model, 'NO_PASIEN') ?>

    <?= $form->field($model, 'NAMA') ?>

    <?= $form->field($model, 'NAMAPANGGILAN') ?>

    <?= $form->field($model, 'ALAMAT') ?>

    <?= $form->field($model, 'DESA') ?>

    <?php // echo $form->field($model, 'RT') ?>

    <?php // echo $form->field($model, 'RW') ?>

    <?php // echo $form->field($model, 'KELURAHAN') ?>

    <?php // echo $form->field($model, 'KECAMATAN') ?>

    <?php // echo $form->field($model, 'KABUPATEN') ?>

    <?php // echo $form->field($model, 'KD_POS') ?>

    <?php // echo $form->field($model, 'NO_TELP') ?>

    <?php // echo $form->field($model, 'NO_HP') ?>

    <?php // echo $form->field($model, 'TP_LAHIR') ?>

    <?php // echo $form->field($model, 'TGL_LAHIR') ?>

    <?php // echo $form->field($model, 'NO_DEBT') ?>

    <?php // echo $form->field($model, 'NO_KARTU') ?>

    <?php // echo $form->field($model, 'ATASNAMA') ?>

    <?php // echo $form->field($model, 'HUBUNGAN') ?>

    <?php // echo $form->field($model, 'TGL_DAFTAR') ?>

    <?php // echo $form->field($model, 'PEKERJAAN') ?>

    <?php // echo $form->field($model, 'JENIS_KEL') ?>

    <?php // echo $form->field($model, 'PENDAKH') ?>

    <?php // echo $form->field($model, 'AGAMA') ?>

    <?php // echo $form->field($model, 'STATUS') ?>

    <?php // echo $form->field($model, 'NO_DAFTAR') ?>

    <?php // echo $form->field($model, 'KARTU') ?>

    <?php // echo $form->field($model, 'PENJWB') ?>

    <?php // echo $form->field($model, 'NAMAPEN') ?>

    <?php // echo $form->field($model, 'ALMPEN1') ?>

    <?php // echo $form->field($model, 'ALMPEN2') ?>

    <?php // echo $form->field($model, 'TELPPEN') ?>

    <?php // echo $form->field($model, 'HPPEN') ?>

    <?php // echo $form->field($model, 'PHOTO') ?>

    <?php // echo $form->field($model, 'NAMAAYAH') ?>

    <?php // echo $form->field($model, 'NAMAIBU') ?>

    <?php // echo $form->field($model, 'NAMAPASANGAN') ?>

    <?php // echo $form->field($model, 'HUBPEN') ?>

    <?php // echo $form->field($model, 'RTPEN') ?>

    <?php // echo $form->field($model, 'RWPEN') ?>

    <?php // echo $form->field($model, 'KODEPOSPEN') ?>

    <?php // echo $form->field($model, 'DESAPEN') ?>

    <?php // echo $form->field($model, 'KECPEN') ?>

    <?php // echo $form->field($model, 'KABPEN') ?>

    <?php // echo $form->field($model, 'NOIDENTITAS') ?>

    <?php // echo $form->field($model, 'PROPINSI') ?>

    <?php // echo $form->field($model, 'PROPPEN') ?>

    <?php // echo $form->field($model, 'CREATE_ID') ?>

    <?php // echo $form->field($model, 'CREATE_DATE') ?>

    <?php // echo $form->field($model, 'MODIFY_ID') ?>

    <?php // echo $form->field($model, 'MODIFY_DATE') ?>

    <?php // echo $form->field($model, 'NAKTIF') ?>

    <?php // echo $form->field($model, 'STATUSWN') ?>

    <?php // echo $form->field($model, 'ALMKANTOR') ?>

    <?php // echo $form->field($model, 'KOTAKANTOR') ?>

    <?php // echo $form->field($model, 'PROPKANTOR') ?>

    <?php // echo $form->field($model, 'TELPKANTOR') ?>

    <?php // echo $form->field($model, 'GOLDAR') ?>

    <?php // echo $form->field($model, 'NAMAKANTOR') ?>

    <?php // echo $form->field($model, 'NUMURTH') ?>

    <?php // echo $form->field($model, 'NUMURBL') ?>

    <?php // echo $form->field($model, 'NUMURHR') ?>

    <?php // echo $form->field($model, 'ID') ?>

    <?php // echo $form->field($model, 'HOBI') ?>

    <?php // echo $form->field($model, 'KEBIASAAN') ?>

    <?php // echo $form->field($model, 'LAIN') ?>

    <?php // echo $form->field($model, 'NO_PASIENIBU') ?>

    <?php // echo $form->field($model, 'KODEPROP') ?>

    <?php // echo $form->field($model, 'KODEKAB') ?>

    <?php // echo $form->field($model, 'KODEKEC') ?>

    <?php // echo $form->field($model, 'KODEKEL') ?>

    <?php // echo $form->field($model, 'MARGA') ?>

    <?php // echo $form->field($model, 'PEKERJAANPEN') ?>

    <?php // echo $form->field($model, 'PENDAKHPEN') ?>

    <?php // echo $form->field($model, 'KD_AGAMA') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>

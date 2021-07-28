<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Anamnesa */
/* @var $form yii\bootstrap4\ActiveForm */

$this->title = 'Pelayanan Anamnesa';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
    #form-anamnesa .col-form-label {
        font-size: 11px;
    }

    #form-anamnesa .form-group {
        margin-bottom: 0.2rem;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <?= $this->render(
            '../pasien-baru/timeline',
            [
                'paket' => $paket,
                'id' => $id,
                'no_register' => $no_register,
            ]
        ) ?>
        <hr>
    </div>
</div>
<div class="card card-body">

    <div class="mcu-spesialis-audiometri-form">

        <div style="text-align: center;">
            <h3 style="font-weight: bold; margin-bottom: 0px;">Unit Medical Check Up</h3>
            <h3 style="font-weight: bold; margin-top: 0px;"><?= Html::encode($this->title) ?></h3>
        </div>
        <?php $form = ActiveForm::begin(['layout' => 'horizontal', 'id' => 'form-anamnesa']); ?>

        <?= $form->field($model, 'jawaban1')->widget(\yii\redactor\widgets\Redactor::className())->label('Dilakukan Secara Aloanmnesa / Autoananmnesis Dengan') ?>

        <?= $form->field($model, 'jawaban2')->widget(\yii\redactor\widgets\Redactor::className())->label('A. Alasan Kedatangan / Keluhan Utama (Termasuk keluhan yang masih dirasakan pada kunjungan ulangan, harapan kekhawatiran,presepsi pasien mengenai keluhan /Penyakit)') ?>


        <?= $form->field($model, 'jawaban4')->widget(\yii\redactor\widgets\Redactor::className())->label('B. Keluhan Lain / tambahan') ?>

        <?= $form->field($model, 'jawaban5')->widget(\yii\redactor\widgets\Redactor::className())->label('C. Riwayat Perjalanan Penyakit Sekarang </b>: harus ditulis secara kronologis!!! (uraikan sejak timbul hingga berkembangnya penyakit, obatan-obatan yang telah diminum, pelayanan kesahatan yang telah diperolah termasuk sikap dan perilaku pasien, keluarga, lingkungan terhadap masalah yang ada)') ?>

        <?= $form->field($model, 'jawaban6')->widget(\yii\redactor\widgets\Redactor::className())->label('D. Riwayat Penyakit Keluarga</b> : (uraian penyakit yang ada pada keluarga baik yang sama, berbeda, maupun yang tidak berhubungan dengan masalahn yang ada saat ini, termasuk bagaiman cara anggota keluarga tersebut menghadapinya)') ?>
        <?= $form->field($model, 'jawaban3')->widget(\yii\redactor\widgets\Redactor::className())->label('E. Riwayat penyakit dahulu:</b> (baik yang sama maupun yang berbeda dengan penyakit sekarang, riwayat pengobatan dan pelayanan kesehatan yang pernah diperoleh termasuk pencegahan spesifik yang pernah diterima)') ?>



        <?= $form->field($model, 'g')->textInput(['class' => 'form-control form-control-sm', 'placeholder' => 'Gravida'])->label('Gravida') ?>

        <?= $form->field($model, 'p')->textInput(['class' => 'form-control form-control-sm', 'placeholder' => 'Para/Partus'])->label('Para/Partus') ?>

        <?= $form->field($model, 'a')->textInput(['class' => 'form-control form-control-sm', 'placeholder' => 'Abortus'])->label('Abortus') ?>

        <?= $form->field($model, 'h')->textInput(['class' => 'form-control form-control-sm', 'placeholder' => 'Hamil'])->label('Hamil') ?>


        <?= $form->field($model, 'nomor_rekam_medik')->hiddenInput(['value' => $id])->label(false) ?>
        <?= $form->field($model, 'no_daftar')->hiddenInput(['value' => $no_register])->label(false) ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
        <br>
    </div>
</div>
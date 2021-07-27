<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pasien */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<style>
    #form-pasien .col-form-label {
        font-size: small;
    }

    #form-pasien .form-group {
        margin-bottom: 0.2rem;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-indigo card-outline">
                <div class="card-header">
                    <h5 class="card-title">
                        <i class="fas fa-user"></i> &nbsp;
                        Data Pasien
                    </h5>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="pasien-form">

                        <?php $form = ActiveForm::begin(['layout' => 'horizontal', 'id' => 'form-pasien']); ?>

                        <?= $form->field($model, 'NO_PASIEN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'NAMA')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'NAMAPANGGILAN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'ALAMAT')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'DESA')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'RT')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'RW')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'KELURAHAN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'KECAMATAN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'KABUPATEN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'KD_POS')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'NO_TELP')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'NO_HP')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'TP_LAHIR')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'TGL_LAHIR')->textInput() ?>

                        <?= $form->field($model, 'NO_DEBT')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'NO_KARTU')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'ATASNAMA')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'HUBUNGAN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'TGL_DAFTAR')->textInput() ?>

                        <?= $form->field($model, 'PEKERJAAN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'JENIS_KEL')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'PENDAKH')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'AGAMA')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'STATUS')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'NO_DAFTAR')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'KARTU')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'PENJWB')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'NAMAPEN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'ALMPEN1')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'ALMPEN2')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'TELPPEN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'HPPEN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'PHOTO')->textInput() ?>

                        <?= $form->field($model, 'NAMAAYAH')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'NAMAIBU')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'NAMAPASANGAN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'HUBPEN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'RTPEN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'RWPEN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'KODEPOSPEN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'DESAPEN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'KECPEN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'KABPEN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'NOIDENTITAS')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'PROPINSI')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'PROPPEN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'CREATE_ID')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'CREATE_DATE')->textInput() ?>

                        <?= $form->field($model, 'MODIFY_ID')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'MODIFY_DATE')->textInput() ?>

                        <?= $form->field($model, 'NAKTIF')->textInput() ?>

                        <?= $form->field($model, 'STATUSWN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'ALMKANTOR')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'KOTAKANTOR')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'PROPKANTOR')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'TELPKANTOR')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'GOLDAR')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'NAMAKANTOR')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'NUMURTH')->textInput() ?>

                        <?= $form->field($model, 'NUMURBL')->textInput() ?>

                        <?= $form->field($model, 'NUMURHR')->textInput() ?>

                        <?= $form->field($model, 'HOBI')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'KEBIASAAN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'LAIN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'NO_PASIENIBU')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'KODEPROP')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'KODEKAB')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'KODEKEC')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'KODEKEL')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'MARGA')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'PEKERJAANPEN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'PENDAKHPEN')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'KD_AGAMA')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
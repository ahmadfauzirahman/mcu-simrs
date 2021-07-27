<?php

use app\components\Helper;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $model app\models\Pasien */
/* @var $form yii\bootstrap4\ActiveForm */

$this->title = 'Data Pasien - ' . $model->nama;
?>
<style>
    .float-group {
        position: fixed;
        bottom: 90px;
        right: 40px;
        background-color: #25d366;
        color: #FFF;
        text-align: center;
        box-shadow: 2.5px 2.5px 5px #999;
        z-index: 100;
    }

    .float {
        position: fixed;
        bottom: 40px;
        right: 40px;
        background-color: #25d366;
        color: #FFF;
        text-align: center;
        box-shadow: 2.5px 2.5px 5px #999;
        z-index: 100;
    }
</style>

<style>
    #form-pasien .col-form-label {
        font-size: small;
    }

    #form-pasien .form-group {
        margin-bottom: 0.2rem;
    }
</style>
<?php $form = ActiveForm::begin(['layout' => 'horizontal', 'id' => 'form-pasien']); ?>

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

                        <?php
                        $url = \yii\helpers\Url::to(['api/pasien-api/cari-pasien']);
                        // $model->icdt10 = "";
                        echo $form->field($model, 'cari_pasien')->widget(select2::classname(), [
                            'options' => ['placeholder' => 'Mencari Pasien ...', 'class' => 'form-control  form-control-sm'],
                            // 'initValueText' => $model->un->sub_unit_name ?? null,
                            'size' => Select2::SMALL,
                            'pluginOptions' => [
                                // 'tags' => true,
                                // 'tokenSeparators' => [','],
                                'allowClear' => true,
                                'minimumInputLength' => 3,
                                'language' => [
                                    'errorLoading' => new JsExpression("function () { return 'Menunggu hasil cari bro...'; }"),
                                ],
                                'ajax' => [
                                    'url' => $url,
                                    'dataType' => 'json',
                                    'data' => new JsExpression('function(params) { return {q:params.term}; }')
                                ],
                                'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
                                'templateResult' => new JsExpression('function(data) { return data.text; }'),
                                'templateSelection' => new JsExpression('function (data) { return data.text; }'),
                            ],
                            'pluginEvents' => [
                                "select2:select" => "function(e) { 
                                    window.location = baseUrl + 'pasien-baru/periksa?id=' + e.params.data.id
                                }",
                            ],
                        ]);

                        ?>
                        <?= $form->field($model, 'no_identitas')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'NIK/SIM/Pasport']) ?>

                        <?= $form->field($model, 'jenis_identitas_kode')->dropdownList(Helper::JenisIdentitas(), ['prompt' => 'Jenis Identitas', 'class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'kode')->textInput(['maxlength' => true, 'placeholder' => 'No Rekam Medik', 'class' => 'form-control form-control-sm']) ?>
                        <?= $form->field($model, 'no_kk')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'No Kartu Keluarga']) ?>


                        <?= $form->field($model, 'nama')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'Nama Lengkap']) ?>




                        <?= $form->field($model, 'jkel')->dropdownList(Helper::JenisKelamin(), ['class' => 'form-control form-control-sm', 'prompt' => 'Jenis Kelamin']) ?>






                        <?=
                        $form->field($model, 'agama_kode')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map(Helper::DataAgama(), 'id', 'agama'),
                            'options' => [
                                'placeholder' => 'Pilih Agama',
                                'class' => 'form-control form-control-sm'
                            ],
                            'theme' => Select2::THEME_DEFAULT,
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]);

                        ?>
                        <?=
                        $form->field($model, 'pekerjaan_kode')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map(Helper::DataPekerjaan(), 'id', 'nama'),
                            'options' => [
                                'placeholder' => 'Pilih Pekerjaan',
                                'class' => 'form-control form-control-sm'
                            ],
                            'theme' => Select2::THEME_DEFAULT,
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]);

                        ?>
                        <?= $form->field($model, 'pendidikan_kode')->textInput(['class' => 'form-control form-control-sm', 'placeholder' => 'Pendidikan']) ?>



                        <?= $form->field($model, 'kedudukan_keluarga')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'Kedudukan Keluarga']) ?>



                        <?= $form->field($model, 'jurusan_kode')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'Jurusan']) ?>

                        <?php $form->field($model, 'deleted_at')->textInput(['class' => 'form-control form-control-sm']) ?>

                        <?php $form->field($model, 'deleted_by')->textInput(['class' => 'form-control form-control-sm']) ?>

                        <?= $form->field($model, 'penghasilan')->textInput(['class' => 'form-control form-control-sm', 'placeholder' => 'Penghasilan']) ?>


                        <?php $form->field($model, 'created_by')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?php $form->field($model, 'created_at')->textInput(['class' => 'form-control form-control-sm']) ?>

                        <?php $form->field($model, 'updated_by')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm']) ?>

                        <?php $form->field($model, 'updated_at')->textInput(['class' => 'form-control form-control-sm']) ?>


                        <div class="form-group">

                            <div style="z-index: 999999;" class="float-group btn-group-vertical" role="group" aria-label="Vertical button group">

                                <?= Html::submitButton('Simpan Data Pasien', ['class' => 'btn btn-success']) ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card card-indigo card-outline">
                <div class="card-header">
                    <h5 class="card-title">
                        <i class="fas fa-lungs-virus"></i> &nbsp;
                        Data Darah dan Kebiasaan Pasien

                    </h5>
                </div>
                <div class="card-body">
                    <?= $form->field($model, 'goldar')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'Golangan Darah']) ?>
                    <?= $form->field($model, 'kebiasaan')->textarea(['rows' => 6, 'placeholder' => 'Kebiasaan Pasien']) ?>
                    <?= $form->field($model, 'riwayat_penyakit')->textarea(['rows' => 6, 'placeholder' => 'Riwayat Penyakit']) ?>
                    <?= $form->field($model, 'alergi')->textarea(['rows' => 6, 'placeholder' => 'Alergi']) ?>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-indigo card-outline">
                <div class="card-header">
                    <h5 class="card-title">
                        <i class="fas fa-map"></i> &nbsp;
                        Domisili dan Kontak
                    </h5>
                </div>
                <div class="card-body">
                    <?= $form->field($model, 'kewarganegaraan_kode')->textInput(['class' => 'form-control form-control-sm', 'placeholder' => 'Kewarganegaraan']) ?>
                    <?= $form->field($model, 'tgl_lahir')->textInput(['class' => 'form-control form-control-sm', 'placeholder' => 'Tanggal Lahir']) ?>
                    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'Tempat Lahir']) ?>

                    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'Alamat']) ?>
                    <?= $form->field($model, 'kelurahan_kode')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'Kelurahan']) ?>
                    <?=
                        $form->field($model, 'suku_kode')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map(Helper::DataSuku(), 'kode', 'nama'),
                            'options' => [
                                'placeholder' => 'Pilih Suku Bangsa',
                                'class' => 'form-control form-control-sm'
                            ],
                            'theme' => Select2::THEME_DEFAULT,
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]);

                        ?>

                    <?= $form->field($model, 'rt')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'RT']) ?>

                    <?= $form->field($model, 'rw')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'RW']) ?>

                    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'Nomor Telepon']) ?>

                </div>
            </div>
            <div class="card card-indigo card-outline">
                <div class="card-header">
                    <h5 class="card-title">
                        <i class="fas fa-map"></i> &nbsp;
                        Biodata Pasangan
                    </h5>
                </div>
                <div class="card-body">

                    <?= $form->field($model, 'anak_ke')->textInput(['class' => 'form-control form-control-sm', 'placeholder' => 'Anak Ke']) ?>
                    <?= $form->field($model, 'istri_ke')->textInput(['class' => 'form-control form-control-sm', 'placeholder' => 'Istri Ke']) ?>
                    <?= $form->field($model, 'status_kawin_kode')->dropdownList(Helper::StatusNikah(), ['maxlength' => true, 'class' => 'form-control form-control-sm', 'prompt' => 'Status Kawin']) ?>
                    <?= $form->field($model, 'jml_anak')->textInput(['class' => 'form-control form-control-sm', 'placeholder' => 'Jumlah Anak']) ?>
                    <?= $form->field($model, 'nama_pasangan')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'Nama Pasangan']) ?>

                </div>
            </div>
            <div class="card card-indigo card-outline">
                <div class="card-header">
                    <h5 class="card-title">
                        <i class="fas fa-user-friends"></i> &nbsp;
                        Data Orang Tua

                    </h5>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <?= $form->field($model, 'ayah_no_rekam_medis')->textInput(['class' => 'form-control form-control-sm', 'placeholder' => 'No Rekam Medis Ayah']) ?>
                    <?= $form->field($model, 'ibu_no_rekam_medis')->textInput(['class' => 'form-control form-control-sm', 'placeholder' => 'No Rekam Medis Ibu']) ?>
                    <?= $form->field($model, 'ayah_nama')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'Nama Ayah']) ?>
                    <?= $form->field($model, 'ibu_nama')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'Nama Ibu']) ?>

                </div>
            </div>
            <div class="card card-indigo card-outline collapsed-card">
                <div class="card-header">
                    <h5 class="card-title">
                        <i class="fas fa-user-md"></i> &nbsp;
                        Pekerjaan
                    </h5>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <?= $form->field($model, 'tempat_kerja')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'Tempat Kerja']) ?>
                    <?= $form->field($model, 'alamat_tempat_kerja')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'Alamat Tempat Bekerja']) ?>

                </div>
            </div>

        </div>

    </div>

</div>
<?php ActiveForm::end(); ?>
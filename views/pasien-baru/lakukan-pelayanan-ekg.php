<?php
/*
 * @Author: Dicky Ermawan S., S.T., MTA 
 * @Email: wanasaja@gmail.com 
 * @Web: dickyermawan.github.io 
 * @Linkedin: linkedin.com/in/dickyermawan 
 * @Date: 2020-09-13 18:14:13 
 * @Last Modified by: Dicky Ermawan S., S.T., MTA
 * @Last Modified time: 2020-11-25 12:42:11
 */

use app\components\Helper;
use app\models\DataLayanan;
use app\models\spesialis\BaseModel;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\data\ActiveDataProvider;
use yii\debug\models\timeline\DataProvider;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\web\View;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\spesialis\McuSpesialisEkg */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Pemeriksaan Kesehatan EKG Tenaga Kerja';
$this->params['breadcrumbs'][] = ['label' => 'Unit Medical Check Up', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$dataG = [
    'Normal' => 'Normal',
    'Tidak Normal' => 'Tidak Normal',
];
// var_dump($model);
// exit();
?>

<style type="text/css">
    .tabel-ekg.table-sm th,
    .tabel-ekg.table-sm td {
        padding: 0.1rem;
    }

    .table {
        border: 0.5px solid #000000;
    }

    .table-bordered>thead>tr>th,
    .table-bordered>tbody>tr>th,
    .table-bordered>tfoot>tr>th,
    .table-bordered>thead>tr>td,
    .table-bordered>tbody>tr>td,
    .table-bordered>tfoot>tr>td {
        border: 0.5px solid #000000;
    }

    .tabel-ekg td {
        padding: 5px !important;
    }

    .form-group {
        margin-bottom: 0px !important;
    }
</style>



<div class="row">
    <div class="col-md-12">
        <?= $this->render(
            'timeline',
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

        <hr>

        <?php $form = ActiveForm::begin([
            'id' => 'form-spesialis-ekg',
            'validateOnSubmit' => false, // agar submit ajax tidak 2 kali saat pertama kali reload
        ]); ?>

        <?= $form->field($model, 'cari_pasien')->hiddenInput()->label(false) ?>

        <div class="row">
            <div class="col-sm-3">
                <label for="">No. Rekam Medik</label>
                <?php
                $model->no_rekam_medik = $id;
                echo $form->field($model, 'no_rekam_medik')->textInput(['maxlength' => true, 'readonly' => true,'class'=>'form-control form-control-sm'])->label(false)
                ?>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input readonly type="text" class="form-control form-control-sm" value="<?= $pasien->nama ?? null ?>" id="nama_pasien">
                </div>
            </div>
            <div class="col-sm-3">
                <label for="">No. Daftar</label>
                <?php
                $model->no_daftar = $no_register;
                echo $form->field($model, 'no_daftar')->textInput(['maxlength' => true, 'readonly' => true,'class'=>'form-control form-control-sm'])->label(false)
                ?>
            </div>
        </div>

        <br>

        <table class="tabel-ekg table table-sm">
            <tbody>
                <tr>
                    <td>Irama Jantung</td>
                    <td>:</td>
                    <td>
                        <table style="width: 100%; white-space: nowrap;">
                            <tbody>
                                <tr>
                                    <td style="border-top: 1px solid #ffffff; vertical-align: bottom;">
                                        <?php
                                        echo $form->field($model, 'irama_jantung')->radioList(
                                            $irama_jantung_option = ['Sinus Ritme' => 'Sinus Ritme', 'Atrial Fibrilasi' => 'Atrial Fibrilasi', 'Atrial FLutter' => 'Atrial FLutter',],
                                            [
                                                'item' => static function ($index, $label, $name, $checked, $value) use ($model) {
                                                    return Helper::radioList($index, $label, $name, $checked, $value, $model);
                                                }
                                            ]
                                        )->label(false);
                                        ?>
                                    </td>
                                    <td style="border-top: 1px solid #ffffff; width: 100%; padding-left: 3% !important;">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input <?= (!in_array($model->irama_jantung, $irama_jantung_option)) ? 'checked' : null ?> type="radio" id="McuSpesialisEkg_irama_jantung_3" name="McuSpesialisEkg[irama_jantung]">
                                                </div>
                                            </div>
                                            <input value="<?= (!in_array($model->irama_jantung, $irama_jantung_option)) ? $model->irama_jantung : null ?>" type="text" id="McuSpesialisEkg_irama_jantung_3_teks" style="width: 50px;" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>Frekuensi Denyut Jantung</td>
                    <td>:</td>
                    <td>
                        <?= $form->field($model, 'frekuensi_denyut_jantung')->textInput(['placeholder'=>'Tulisakan Frekuensi Denyut Jantung','class'=>'form-control form-control-sm'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <td>Gelombang P</td>
                    <td>:</td>
                    <td>
                        <table style="width: 100%; white-space: nowrap;">
                            <tbody>
                                <tr>
                                    <td style="border-top: 1px solid #ffffff; vertical-align: bottom;">
                                        <?php
                                        echo $form->field($model, 'gelombang_p')->radioList(
                                            $gelombang_p_option = ['Normal' => 'Normal', 'P Mitral' => 'P Mitral', 'P Pulmonal' => 'P Pulmonal',],
                                            [
                                                'item' => static function ($index, $label, $name, $checked, $value) use ($model) {
                                                    return Helper::radioList($index, $label, $name, $checked, $value, $model);
                                                }
                                            ]
                                        )->label(false);
                                        ?>
                                    </td>
                                    <td style="border-top: 1px solid #ffffff; width: 100%; padding-left: 3% !important;">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input value="<?= (!in_array($model->gelombang_p, $gelombang_p_option)) ? $model->gelombang_p : null ?>" <?= (!in_array($model->gelombang_p, $gelombang_p_option)) ? 'checked' : "" ?> type="radio" id="McuSpesialisEkg_gelombang_p_3" name="McuSpesialisEkg[gelombang_p]">
                                                </div>
                                            </div>
                                            <input value="<?= (!in_array($model->gelombang_p, $gelombang_p_option)) ? $model->gelombang_p : "" ?>" type="text" id="McuSpesialisEkg_gelombang_p_3_teks" style="width: 50px;" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>Interval PR</td>
                    <td>:</td>
                    <td>
                        <?= $form->field($model, 'interval_pr')->textInput(['placeholder'=>'Interval PR','class'=>'form-control form-control-sm'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <td>Kompleks QRS</td>
                    <td>:</td>
                    <td>
                        <table style="width: 100%; white-space: nowrap;">
                            <tbody>
                                <tr>
                                    <td style="border-top: 1px solid #ffffff; vertical-align: bottom;">
                                        <?php
                                        echo $form->field($model, 'kompleks_qrs')->radioList(
                                            $kompleks_qrs_option = ['Normal' => 'Normal', 'Lebar' => 'Lebar',],
                                            [
                                                'item' => static function ($index, $label, $name, $checked, $value) use ($model) {
                                                    return Helper::radioList($index, $label, $name, $checked, $value, $model);
                                                }
                                            ]
                                        )->label(false);
                                        ?>
                                    </td>
                                    <td style="border-top: 1px solid #ffffff; width: 100%; padding-left: 3% !important;">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input value="<?= (!in_array($model->kompleks_qrs, $kompleks_qrs_option)) ? $model->kompleks_qrs : null ?>" <?= (!in_array($model->kompleks_qrs, $kompleks_qrs_option)) ? 'checked' : null ?> type="radio" id="McuSpesialisEkg_kompleks_qrs_2" name="McuSpesialisEkg[kompleks_qrs]">
                                                </div>
                                            </div>
                                            <input value="<?= (!in_array($model->kompleks_qrs, $kompleks_qrs_option)) ? $model->kompleks_qrs : null ?>" type="text" id="McuSpesialisEkg_kompleks_qrs_2_teks" style="width: 50px;" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>Segmen ST</td>
                    <td>:</td>
                    <td>
                        <table style="width: 100%; white-space: nowrap;">
                            <tbody>
                                <tr>
                                    <td style="border-top: 1px solid #ffffff; vertical-align: bottom;">
                                        <?php
                                        echo $form->field($model, 'segmen_st')->radioList(
                                            $segmen_st_option = ['Normal' => 'Normal', 'ST Elevasi' => 'ST Elevasi',],
                                            [
                                                'item' => static function ($index, $label, $name, $checked, $value) use ($model) {
                                                    return Helper::radioList($index, $label, $name, $checked, $value, $model);
                                                }
                                            ]
                                        )->label(false);
                                        ?>
                                    </td>
                                    <td style="border-top: 1px solid #ffffff; width: 100%; padding-left: 3% !important;">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input value="<?= (!in_array($model->segmen_st, $segmen_st_option)) ? $model->segmen_st : null ?>" <?= (!in_array($model->segmen_st, $segmen_st_option)) ? 'checked' : null ?> type="radio" id="McuSpesialisEkg_segmen_st_2" name="McuSpesialisEkg[segmen_st]">
                                                    <span style="font-size: smaller; font-weight: bold;">&nbsp;&nbsp;ST Depresi di</span>
                                                </div>
                                            </div>
                                            <input value="<?= (!in_array($model->segmen_st, $segmen_st_option)) ? $model->segmen_st : null ?>" type="text" id="McuSpesialisEkg_segmen_st_2_teks" style="width: 50px;" class="form-control form-control-md">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>Gelombang T</td>
                    <td>:</td>
                    <td>
                        <table style="width: 100%; white-space: nowrap;">
                            <tbody>
                                <tr>
                                    <td style="border-top: 1px solid #ffffff; vertical-align: bottom;">
                                        <?php
                                        echo $form->field($model, 'gelombang_t')->radioList(
                                            $gelombang_t_option = ['Normal' => 'Normal',],
                                            [
                                                'item' => static function ($index, $label, $name, $checked, $value) use ($model) {
                                                    return Helper::radioList($index, $label, $name, $checked, $value, $model);
                                                }
                                            ]
                                        )->label(false);
                                        ?>
                                    </td>
                                    <td style="border-top: 1px solid #ffffff; width: 100%; padding-left: 3% !important;">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input value="<?= (!in_array($model->gelombang_t, $gelombang_t_option)) ? $model->gelombang_t : null ?>" <?= (!in_array($model->gelombang_t, $gelombang_t_option)) ? 'checked' : null ?> type="radio" id="McuSpesialisEkg_gelombang_t_1" name="McuSpesialisEkg[gelombang_t]">
                                                    <span style="font-size: smaller; font-weight: bold;">&nbsp;&nbsp;Inverted di</span>
                                                </div>
                                            </div>
                                            <input value="<?= (!in_array($model->gelombang_t, $gelombang_t_option)) ? $model->gelombang_t : null ?>" type="text" id="McuSpesialisEkg_gelombang_t_1_teks" style="width: 50px;" class="form-control form-control-md">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>Lain-lain</td>
                    <td>:</td>
                    <td>
                        <?= $form->field($model, 'lain_lain')->textInput(['placeholder'=>'Lain-Lain','class'=>'form-control form-control-sm'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <td>Kesan EKG Istirahat</td>
                    <td>:</td>
                    <td>
                        <?= $form->field($model, 'kesan_ekg_istirahat')->textInput(['placeholder'=>'Kesan','class'=>'form-control form-control-sm'])->label(false) ?>
                    </td>
                </tr>
                <tr>
                    <td>Anjuran</td>
                    <td>:</td>
                    <td>
                        <?= $form->field($model, 'anjuran')->textInput(['placeholder'=>'Ajuran','class'=>'form-control form-control-sm'])->label(false) ?>
                    </td>
                </tr>
                <!-- <tr>
                <td>Kesan</td>
                <td>:</td>
                <td>
                    <?php
                    echo $form->field($model, 'kesan')->radioList(
                        ['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal',],
                        [
                            'item' => static function ($index, $label, $name, $checked, $value) use ($model) {
                                return Helper::radioList($index, $label, $name, $checked, $value, $model);
                            }
                        ]
                    )->label(false);
                    ?>
                </td>
            </tr> -->
            </tbody>
        </table>

        <?php
        Pjax::begin(['id' => 'btn-cetak']);
        if (!$model->isNewRecord) {
            echo $form->field($model, 'id_spesialis_ekg')->hiddenInput()->label(false);
        }
        ?>

        <div class="form-group">
            <?php
            if (array_key_exists('id', $_GET))
                echo Html::submitButton('Simpan', ['class' => 'btn btn-success']);
            if (!$model->isNewRecord)
                echo Html::a('<i class="far fa-file-excel"></i> Cetak Hard Copy', ['/spesialis-ekg/cetak', 'no_rm' => $no_rm, 'no_daftar' => $no_daftar], ['target' => 'blank', 'data-pjax' => 0, 'class' => 'btn btn-info', 'style' => 'margin-left: 10px;']);
            ?>
        </div>
        <?php
        Pjax::end();
        ?>

        <?php ActiveForm::end(); ?>
        <br>


        <hr>

        <hr>

        <?php
        $displayPenata = 'none';
        if ($model->kesan == 'Tidak Normal')
            $displayPenata = 'block';
        ?>
        <div class="div-penata" style="display: <?= $displayPenata ?>;">
            <h3>
                PERMASALAHAN PASIEN & RENCANAN PENATALAKSANAAN
            </h3>

            <?php $form = ActiveForm::begin([
                'id' => 'form-spesialis-ekg-penata',
                'validateOnSubmit' => false, // agar submit ajax tidak 2 kali saat pertama kali reload
                'action' => ['/spesialis-ekg/simpan-penata'],
            ]); ?>

            <div class="row">
                <?php echo $form->field($modelPenata, 'no_rekam_medik')->hiddenInput()->label(false); ?>
                <div class="col-sm-3">
                    <?php echo $form->field($modelPenata, 'jenis_permasalahan')->textArea(['rows' => 2]); ?>
                </div>
                <div class="col-sm-3">
                    <?php echo $form->field($modelPenata, 'rencana')->textArea(['rows' => 2]); ?>
                </div>
                <div class="col-sm-2">
                    <?php echo $form->field($modelPenata, 'target_waktu')->textArea(['rows' => 2]); ?>
                </div>
                <div class="col-sm-2">
                    <?php echo $form->field($modelPenata, 'hasil_yang_diharapkan')->textArea(['rows' => 2]); ?>
                </div>
                <div class="col-sm-2">
                    <?php echo $form->field($modelPenata, 'keterangan')->textArea(['rows' => 2]); ?>
                </div>
            </div>

            <div class="form-group" style="margin-top: 5px;">
                <?php
                Pjax::begin(['id' => 'btn-cetak-penata']);
                if (!$model->isNewRecord)
                    echo Html::submitButton('Simpan', ['class' => 'btn btn-success']);
                // if (!$model->isNewRecord && count($modelPenataList->all())) {
                //     echo Html::a('<i class="far fa-file-excel"></i> Cetak Hard Copy', ['/spesialis-ekg/cetak-penata', 'no_rm' => $no_rm], ['target' => 'blank', 'data-pjax' => 0, 'class' => 'btn btn-info', 'style' => 'margin-left: 10px;']);
                // }
                Pjax::end();
                ?>
            </div>

            <?php ActiveForm::end(); ?>
            <br>
            <?php Pjax::begin(['id' => 'tbl-penata']); ?>


            <?php Pjax::end(); ?>
        </div>
    </div>
</div>

<?php

$this->registerJs($this->render('periksa-ekg.js'), View::POS_END);

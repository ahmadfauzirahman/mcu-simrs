<?php

/* @var $this yii\web\View */

use app\components\Helper;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

$this->title = 'Tindakan Pemeriksaan - ' . $pasien->nama . ' - ' . $paketTindakan->nama;
$this->params['breadcrumbs'][] = $this->title;

$helper = [
    'Normal' => 'Normal',
    'Kekurangan Berat Badan Tingkat Berat' => 'Kekurangan Berat Badan Tingkat Berat',
    'Kekurangan Berat Badan Tingkat Ringan' => 'Kekurangan Berat Badan Tingkat Ringan',
    'Kelebihan Berat Badan Tingkat Ringan' => 'Kelebihan Berat Badan Tingkat Ringan',
    'Kelebihan Berat Badan Tingkat Berat' => 'Kelebihan Berat Badan Tingkat Berat'
];
?>
<style>
    #form-emr .col-form-label {
        font-size: smaller;
    }

    #form-emr .form-group {
        margin-bottom: 0.2rem;
    }

    .tabel-garis-hitam label {
        margin-bottom: 0px !important;
    }
</style>

<?php $form = ActiveForm::begin(['id' => 'form-emr', 'action' => 'pemeriksaan-save']); ?>

<div class="site-about">

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

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-list"></i> &nbsp;
                Pemeriksaa Fisik
            </h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div style="text-align: center;">
                        <h3 style="font-weight: bold; margin-bottom: 0px;">Unit Medical Check Up</h3>
                        <h3 style="font-weight: bold; margin-top: 0px;"><?= Html::encode($this->title) ?></h3>
                    </div>

                    <hr>
                    <div class="card-box">
                        <div class="form-group">
                            <h4 class="header-title m-t-0 m-b-30">1. Tanda Vital</h4>
                            <table class="table table-sm tabel-garis-hitam parent-no-margin">
                                <tbody>
                                    <tr>
                                        <th style="width: 20%;">Nadi</th>
                                        <td style="width: 30%;">
                                            <?= $form->field($model, 'tanda_vital_nadi')->textInput(['maxlength' => true, 'placeholder' => 'Vital Nadi', 'class' => 'form-control form-control-sm'])->label(false) ?>
                                        </td>
                                        <th style="width: 20%;">Pernapasan</th>
                                        <td style="width: 30%;">
                                            <div class="form-group field-masterpemeriksaanfisik-kepala_bentuk_wajah">
                                                <?= $form->field($model, 'tanda_vital_pernapasan')->textInput(['maxlength' => true, 'placeholder' => 'Pernapasan', 'class' => 'form-control form-control-sm'])->label(false) ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Sistolik</th>
                                        <td>
                                            <?= $form->field($model, 'sistolik')->textInput(['maxlength' => true, 'placeholder' => 'Sistolik', 'class' => 'form-control form-control-sm'])->label(false) ?>

                                        </td>
                                        <th>Diastolik</th>
                                        <td>
                                            <?= $form->field($model, 'diastolik')->textInput(['maxlength' => true, 'placeholder' => 'Diastolik', 'class' => 'form-control form-control-sm'])->label(false) ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Suhu Badan</th>
                                        <td>
                                            <?= $form->field($model, 'tanda_vital_suhu_badan')->textInput(['maxlength' => true, 'placeholder' => 'Suhu Badan', 'class' => 'form-control form-control-sm'])->label(false) ?>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card-box">
                        <div class="form-group">
                            <h4 class="header-title m-t-0 m-b-30">2. Status Gizi</h4>
                            <table class="table table-sm tabel-garis-hitam parent-no-margin">
                                <tbody>
                                    <tr>
                                        <th style="width: 20%;">Tinggi Badan</th>
                                        <td style="width: 30%;">
                                            <?= $form->field($model, 'status_gizi_tinggi_badan')->textInput(['placeholder' => 'Tinggi Badan', 'class' => 'form-control form-control-sm', 'placeholder' => 'Tinggi Badan'])->label(false) ?>

                                        </td>
                                        <th style="width: 20%;">Berat Badan</th>
                                        <td style="width: 30%;">
                                            <?= $form->field($model, 'status_gizi_berat_badan')->textInput(['placeholder' => 'Berat Badan', 'class' => 'form-control form-control-sm'])->label(false) ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Lingkaran Perut</th>
                                        <td>
                                            <?= $form->field($model, 'status_gizi_lingkaran_perut')->textInput(['placeholder' => 'Lingkaran Perut', 'class' => 'form-control form-control-sm'])->label(false) ?>

                                        </td>
                                        <th>Lingkaran Lengan</th>
                                        <td>
                                            <?= $form->field($model, 'status_gizi_lingkaran_pinggang')->textInput(['placeholder' => 'Lingkaran Lengan', 'class' => 'form-control form-control-sm'])->label(false) ?>

                                        </td>

                                    </tr>
                                    <tr>
                                        <th>Lingkaran Kepala</th>
                                        <td>
                                            <?= $form->field($model, 'lingkar_kepala')->textInput(['placeholder' => 'Lingkaran Kepala', 'class' => 'form-control form-control-sm'])->label(false) ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>IMT</th>
                                        <td>
                                            <?= $form->field($model, 'status_gizi_imt')->textInput(['readonly' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'IMT'])->label(false) ?>

                                        </td>
                                        <th>Bentuk Badan</th>
                                        <td>
                                            <?= $form->field($model, 'status_gizi_bentuk_badan')->radioList($helper, [])->label(false) ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card-box">
                        <div class="form-group">
                            <h4 class="header-title m-t-0 m-b-30">3. Tingkat Kesadaran dan Keadaan Umum</h4>
                            <table class="table table-sm tabel-garis-hitam parent-no-margin">
                                <tbody>
                                    <tr>
                                        <th style="width: 20%;">Kesadaran</th>
                                        <td style="width: 30%;">
                                            <?= $form->field($model, 'tingkat_kesadaran_kesadaran')->radioList(['Compos Mentis' => 'Compos Mentis', 'Kesadaran Menurun' => 'Kesadaran Menurun'])->label(false) ?>
                                        </td>
                                        <th style="width: 20%;">Tempat Kesakitan</th>
                                        <td style="width: 30%;">
                                            <?= $form->field($model, 'tingkat_kesadaran_tampak_kesakitan')->radioList(['Tidak Tampak Kesakitan' => 'Tidak Tampak Kesakitan', 'Ya, Tampak Kesakitan' => 'Ya, Tampak Kesakitan'])->label(false) ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kualitas Kontak</th>
                                        <td>
                                            <?= $form->field($model, 'tingkat_kesadaran_kualitas_kontak')->radioList(['Baik' => 'Baik', 'Tidak' => 'Tidak'])->label(false) ?>
                                        </td>
                                        <th>Gangguan Saat Berjalan</th>
                                        <td>
                                            <?= $form->field($model, 'tingkat_kesadaran_gangguan_saat_berjalan')->radioList(['Tidak' => 'Tidak', 'Ya' => 'Ya'])->label(false) ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tingkat Kesadaran dan Keadaan Umum Lainnya</th>
                                        <td colspan="3">
                                            <?= $form->field($model, 'tingkat_kesadaran_lainnya')->textInput(['class' => 'form-control form-control-sm', 'placeholder' => 'Lainnya'])->label(false) ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-box">
                        <div class="form-group">
                            <h4 class="header-title m-t-0 m-b-30">4. Kelenjar Getah Bening</h4>
                            <table class="table table-sm tabel-garis-hitam parent-no-margin">
                                <tbody>
                                    <tr>
                                        <th style="width: 20%;">Getah Bening Leher</th>
                                        <td style="width: 30%;">
                                            <?= $form->field($model, 'kelenjar_getah_bening_leher')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                                        </td>
                                        <th style="width: 20%;">Getah Bening Ketiak</th>
                                        <td style="width: 30%;">
                                            <?= $form->field($model, 'kelenjar_getah_bening_ketiak')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Sub Mandibula</th>
                                        <td>
                                            <?= $form->field($model, 'kelenjar_getah_bening_sub_mandibula')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                                        </td>
                                        <th>Inguinal</th>
                                        <td>
                                            <?= $form->field($model, 'kelenjar_getah_bening_inguinal')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kelenjar Betah Bening Lainnya</th>
                                        <td colspan="3">
                                            <?= $form->field($model, 'kelenjar_getah_bening_lainnya')->textInput(['class' => 'form-control form-control-sm', 'placeholder' => 'Lainnya'])->label(false) ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-box">
                        <div class="form-group">
                            <h4 class="header-title m-t-0 m-b-30">5. Kepala</h4>
                            <table class="table table-sm tabel-garis-hitam parent-no-margin">
                                <tbody>
                                    <tr>
                                        <th style="width: 20%;">Tulang</th>
                                        <td style="width: 30%;">
                                            <?= $form->field($model, 'kepala_tulang')->radioList(['Baik' => 'Baik', 'Tidak baik' => 'Tidak Baik'])->label(false) ?>
                                        </td>
                                        <th style="width: 20%;">Bentuk Wajah</th>
                                        <td style="width: 30%;">
                                            <?= $form->field($model, 'kepala_bentuk_wajah')->radioList(['Baik' => 'Baik', 'Tidak baik' => 'Tidak Baik'])->label(false) ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kulit Kepala</th>
                                        <td>
                                            <?= $form->field($model, 'kepala_kulit_kepala')->radioList(['Baik' => 'Baik', 'Tidak baik' => 'Tidak Baik'])->label(false) ?>

                                        </td>
                                        <th>Rambut</th>
                                        <td>
                                            <?= $form->field($model, 'kepala_rambut')->radioList(['Baik' => 'Baik', 'Tidak baik' => 'Tidak Baik'])->label(false) ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kepala Lainnya</th>
                                        <td colspan="3">
                                            <?= $form->field($model, 'kepala_lainnya')->textInput(['class' => 'form-control form-control-sm', 'placeholder' => 'Lainnya'])->label(false) ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4>
                        6. Mata
                    </h4>
                    <table class="table table-sm tabel-mata">
                        <colgroup width="35"></colgroup>
                        <colgroup width="268"></colgroup>
                        <colgroup width="23"></colgroup>
                        <colgroup width="160"></colgroup>
                        <colgroup width="226"></colgroup>
                        <colgroup width="160"></colgroup>
                        <colgroup width="247"></colgroup>
                        <tr>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 height="19" align="center" valign=top>
                                <font color="#000000"><br></font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b>
                                    <font color="#000000">MATA KANAN</font>
                                </b></td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b>
                                    <font color="#000000">MATA KIRI</font>
                                </b></td>
                        </tr>
                        <tr>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 height="38" align="center" valign=top sdval="1" sdnum="1033;">
                                <font color="#000000">1</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="left" valign=top>
                                <font color="#000000">Persepsi Warna</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top>
                                <font color="#000000">:</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <?= Html::activeRadio($model, 'mata_persepsi_warna_kanan', ['id' => 'mpemeriksaanfisik_mata_persepsi_warna_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_persepsi_warna_kanan == 'Buta Warna Parsial') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_persepsi_warna_kanan_1" name="MPemeriksaanFisik[mata_persepsi_warna_kanan]" value="Buta Warna Parsial">
                                    Buta Warna Parsial
                                </label>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <?= Html::activeRadio($model, 'mata_persepsi_warna_kiri', ['id' => 'mpemeriksaanfisik_mata_persepsi_warna_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_persepsi_warna_kiri == 'Buta Warna Parsial') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_persepsi_warna_kiri_1" name="MPemeriksaanFisik[mata_persepsi_warna_kiri]" value="Buta Warna Parsial">
                                    Buta Warna Parsial
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <font color="#000000"><br></font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_persepsi_warna_kanan == 'Buta Warna Total') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_persepsi_warna_kanan_2" name="MPemeriksaanFisik[mata_persepsi_warna_kanan]" value="Buta Warna Total">
                                    Buta Warna Total
                                </label>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <font color="#000000"><br></font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_persepsi_warna_kiri == 'Buta Warna Total') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_persepsi_warna_kiri_2" name="MPemeriksaanFisik[mata_persepsi_warna_kiri]" value="Buta Warna Total">
                                    Buta Warna Total
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=top sdval="2" sdnum="1033;">
                                <font color="#000000">2</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>
                                <font color="#000000">Kelopak Mata</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                                <font color="#000000">:</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <?= Html::activeRadio($model, 'mata_kelopak_mata_kanan', ['id' => 'mpemeriksaanfisik_mata_kelopak_mata_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_kelopak_mata_kanan == 'Tidak Normal (Oedema)') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_kelopak_mata_kanan_1" name="MPemeriksaanFisik[mata_kelopak_mata_kanan]" value="Tidak Normal (Oedema)">
                                    Tidak Normal (Oedema)
                                </label>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <?= Html::activeRadio($model, 'mata_kelopak_mata_kiri', ['id' => 'mpemeriksaanfisik_mata_kelopak_mata_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_kelopak_mata_kanan == 'Tidak Normal (Oedema)') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_kelopak_mata_kiri_1" name="MPemeriksaanFisik[mata_kelopak_mata_kiri]" value="Tidak Normal (Oedema)">
                                    Tidak Normal (Oedema)
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 height="38" align="center" valign=top sdval="3" sdnum="1033;">
                                <font color="#000000">3</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="left" valign=top>
                                <font color="#000000">Konjungtiva</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="center" valign=top>
                                <font color="#000000">:</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <?= Html::activeRadio($model, 'mata_konjungtiva_kanan', ['id' => 'mpemeriksaanfisik_mata_konjungtiva_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_konjungtiva_kanan == 'Hiperemesis') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_konjungtiva_kanan_1" name="MPemeriksaanFisik[mata_konjungtiva_kanan]" value="Hiperemesis">
                                    Hiperemesis
                                </label>
                                <label style="margin-left: 20px;">
                                    <input <?= ($model->mata_konjungtiva_kanan == 'Sekret (-)') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_konjungtiva_kanan_2" name="MPemeriksaanFisik[mata_konjungtiva_kanan]" value="Sekret (-)">
                                    Sekret
                                </label>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <?= Html::activeRadio($model, 'mata_konjungtiva_kiri', ['id' => 'mpemeriksaanfisik_mata_konjungtiva_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_konjungtiva_kiri == 'Hiperemesis') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_konjungtiva_kiri_1" name="MPemeriksaanFisik[mata_konjungtiva_kiri]" value="Hiperemesis">
                                    Hiperemesis
                                </label>
                                <label style="margin-left: 20px;">
                                    <input <?= ($model->mata_konjungtiva_kiri == 'Sekret (-)') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_konjungtiva_kiri_2" name="MPemeriksaanFisik[mata_konjungtiva_kiri]" value="Sekret (-)">
                                    Sekret
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <font color="#000000"><br></font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_konjungtiva_kanan == 'Pucat') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_konjungtiva_kanan_3" name="MPemeriksaanFisik[mata_konjungtiva_kanan]" value="Pucat">
                                    Pucat
                                </label>
                                <label style="margin-left: 20px;">
                                    <input <?= ($model->mata_konjungtiva_kanan == 'Pterigium') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_konjungtiva_kanan_4" name="MPemeriksaanFisik[mata_konjungtiva_kanan]" value="Pterigium">
                                    Pterigium
                                </label>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <font color="#000000"><br></font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_konjungtiva_kiri == 'Pucat') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_konjungtiva_kiri_3" name="MPemeriksaanFisik[mata_konjungtiva_kiri]" value="Pucat">
                                    Pucat
                                </label>
                                <label style="margin-left: 20px;">
                                    <input <?= ($model->mata_konjungtiva_kiri == 'Pterigium') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_konjungtiva_kiri_4" name="MPemeriksaanFisik[mata_konjungtiva_kiri]" value="Pterigium">
                                    Pterigium
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=top sdval="4" sdnum="1033;">
                                <font color="#000000">4</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>
                                <font color="#000000">Kesegarisan/Gerak Bola Mata</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                                <font color="#000000">:</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <?= Html::activeRadio($model, 'mata_gerak_bola_mata_kanan', ['id' => 'mpemeriksaanfisik_mata_gerak_bola_mata_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_gerak_bola_mata_kanan == 'Strabismus') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_gerak_bola_mata_kanan_1" name="MPemeriksaanFisik[mata_gerak_bola_mata_kanan]" value="Strabismus">
                                    Strabismus
                                </label>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <?= Html::activeRadio($model, 'mata_gerak_bola_mata_kiri', ['id' => 'mpemeriksaanfisik_mata_gerak_bola_mata_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_gerak_bola_mata_kiri == 'Strabismus') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_gerak_bola_mata_kiri_1" name="MPemeriksaanFisik[mata_gerak_bola_mata_kiri]" value="Strabismus">
                                    Strabismus
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=top sdval="5" sdnum="1033;">
                                <font color="#000000">5</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>
                                <font color="#000000">Skiera</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                                <font color="#000000">:</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <?= Html::activeRadio($model, 'mata_sklera_kanan', ['id' => 'mpemeriksaanfisik_mata_sklera_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_sklera_kanan == 'Ikterik') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_sklera_kanan_1" name="MPemeriksaanFisik[mata_sklera_kanan]" value="Ikterik">
                                    Ikterik
                                </label>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <?= Html::activeRadio($model, 'mata_sklera_kiri', ['id' => 'mpemeriksaanfisik_mata_sklera_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_sklera_kiri == 'Ikterik') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_sklera_kiri_1" name="MPemeriksaanFisik[mata_sklera_kiri]" value="Ikterik">
                                    Ikterik
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=top sdval="6" sdnum="1033;">
                                <font color="#000000">6</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>
                                <font color="#000000">Lensa Mata</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                                <font color="#000000">:</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <?= Html::activeRadio($model, 'mata_lensa_mata_kanan', ['id' => 'mpemeriksaanfisik_mata_lensa_mata_kanan_0', 'value' => 'Tidak Keruh', 'label' => 'Tidak Keruh']) ?>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_lensa_mata_kanan == 'Keruh') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_lensa_mata_kanan_1" name="MPemeriksaanFisik[mata_lensa_mata_kanan]" value="Keruh">
                                    Keruh
                                </label>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <?= Html::activeRadio($model, 'mata_lensa_mata_kiri', ['id' => 'mpemeriksaanfisik_mata_lensa_mata_kiri_0', 'value' => 'Tidak Keruh', 'label' => 'Tidak Keruh']) ?>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_lensa_mata_kiri == 'Keruh') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_lensa_mata_kiri_1" name="MPemeriksaanFisik[mata_lensa_mata_kiri]" value="Keruh">
                                    Keruh
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=top sdval="7" sdnum="1033;">
                                <font color="#000000">7</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>
                                <font color="#000000">Kornea</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                                <font color="#000000">:</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <?= Html::activeRadio($model, 'mata_kornea_kanan', ['id' => 'mpemeriksaanfisik_mata_kornea_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_kornea_kanan == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_kornea_kanan_1" name="MPemeriksaanFisik[mata_kornea_kanan]" value="Tidak Normal">
                                    Tidak Normal
                                </label>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <?= Html::activeRadio($model, 'mata_kornea_kiri', ['id' => 'mpemeriksaanfisik_mata_kornea_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_kornea_kiri == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_kornea_kiri_1" name="MPemeriksaanFisik[mata_kornea_kiri]" value="Tidak Normal">
                                    Tidak Normal
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=top sdval="8" sdnum="1033;">
                                <font color="#000000">8</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>
                                <font color="#000000">Bulu Mata</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                                <font color="#000000">:</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <?= Html::activeRadio($model, 'mata_bulu_mata_kanan', ['id' => 'mpemeriksaanfisik_mata_bulu_mata_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_bulu_mata_kanan == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_bulu_mata_kanan_1" name="MPemeriksaanFisik[mata_bulu_mata_kanan]" value="Tidak Normal">
                                    Tidak Normal
                                </label>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <?= Html::activeRadio($model, 'mata_bulu_mata_kiri', ['id' => 'mpemeriksaanfisik_mata_bulu_mata_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_bulu_mata_kiri == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_bulu_mata_kiri_1" name="MPemeriksaanFisik[mata_bulu_mata_kiri]" value="Tidak Normal">
                                    Tidak Normal
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=top sdval="9" sdnum="1033;">
                                <font color="#000000">9</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>
                                <font color="#000000">Tekanan Bola Mata</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                                <font color="#000000">:</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <?= Html::activeRadio($model, 'mata_tekanan_bola_mata_kanan', ['id' => 'mpemeriksaanfisik_mata_tekanan_bola_mata_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_tekanan_bola_mata_kanan == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_tekanan_bola_mata_kanan_1" name="MPemeriksaanFisik[mata_tekanan_bola_mata_kanan]" value="Tidak Normal">
                                    Tidak Normal
                                </label>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <?= Html::activeRadio($model, 'mata_tekanan_bola_mata_kiri', ['id' => 'mpemeriksaanfisik_mata_tekanan_bola_mata_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_tekanan_bola_mata_kiri == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_tekanan_bola_mata_kiri_1" name="MPemeriksaanFisik[mata_tekanan_bola_mata_kiri]" value="Tidak Normal">
                                    Tidak Normal
                                </label>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="center" valign=top sdval="10" sdnum="1033;">
                                <font color="#000000">10</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>
                                <font color="#000000">Penglihatan 3 dimensi</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                                <font color="#000000">:</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <?= Html::activeRadio($model, 'mata_penglihatan_3dimensi_kanan', ['id' => 'mpemeriksaanfisik_mata_penglihatan_3dimensi_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_penglihatan_3dimensi_kanan == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_penglihatan_3dimensi_kanan_1" name="MPemeriksaanFisik[mata_penglihatan_3dimensi_kanan]" value="Tidak Normal">
                                    Tidak Normal
                                </label>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <?= Html::activeRadio($model, 'mata_penglihatan_3dimensi_kiri', ['id' => 'mpemeriksaanfisik_mata_penglihatan_3dimensi_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=top>
                                <label>
                                    <input <?= ($model->mata_penglihatan_3dimensi_kiri == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mata_penglihatan_3dimensi_kiri_1" name="MPemeriksaanFisik[mata_penglihatan_3dimensi_kiri]" value="Tidak Normal">
                                    Tidak Normal
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom: 1px solid #000000; border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=3 height="58" align="center" valign=top sdval="11" sdnum="1033;">
                                <font color="#000000">11</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>
                                <font color="#000000">Virus Mata</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                                <font color="#000000"><br></font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b>
                                    <font color="#000000">MATA KANAN</font>
                                </b></td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b>
                                    <font color="#000000">MATA KIRI</font>
                                </b>
                            </td>
                        </tr>
                        <tr class="parent-no-margin">
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>
                                <font color="#000000">a. Tanpa Koreksi</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                                <font color="#000000">:</font>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=top>
                                <?= $form->field($model, 'mata_visus_tanpa_koreksi')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label(false) ?>
                            </td>
                            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=top>
                                <?= $form->field($model, 'mata_visus_tanpa_koreksi_kiri')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label(false) ?>
                            </td>
                        </tr>
                        <tr class="parent-no-margin">
                            <td style="border-bottom: 1px solid #000000; border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom>
                                <font color="#000000">b. Dengan Koreksi</font>
                            </td>
                            <td style="border-bottom: 1px solid #000000; border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle>
                                <font color="#000000">:</font>
                            </td>
                            <td style="border-bottom: 1px solid #000000; border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=top>
                                <?= $form->field($model, 'mata_visus_dengan_koreksi')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label(false) ?>
                            </td>
                            <td style="border-bottom: 1px solid #000000; border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=top>
                                <?= $form->field($model, 'mata_visus_dengan_koreksi_kiri')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label(false) ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4>
                        7. Telinga
                    </h4>
                    <table class="table table-sm tabel-telinga tabel-garis-hitam">
                        <thead>
                            <tr>
                                <th colspan="3"></th>
                                <th colspan="2" class="text-center font-weight-bold" style="color: #000000;">TELINGA KANAN</th>
                                <th colspan="2" class="text-center font-weight-bold" style="color: #000000;">TELINGA KIRI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center" style="width: 40px;">1</td>
                                <td style="width: 25%;">Daun Telinga</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'telinga_daun_telinga_kanan', ['id' => 'mpemeriksaanfisik_telinga_daun_telinga_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->telinga_daun_telinga_kanan == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_daun_telinga_kanan_1" name="MPemeriksaanFisik[telinga_daun_telinga_kanan]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                                <td>
                                    <?= Html::activeRadio($model, 'telinga_daun_telinga_kiri', ['id' => 'mpemeriksaanfisik_telinga_daun_telinga_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->telinga_daun_telinga_kiri == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_daun_telinga_kiri_1" name="MPemeriksaanFisik[telinga_daun_telinga_kiri]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">2</td>
                                <td>Liang Telinga</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'telinga_liang_telinga_kanan', ['id' => 'mpemeriksaanfisik_telinga_liang_telinga_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->telinga_liang_telinga_kanan == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_liang_telinga_kanan_1" name="MPemeriksaanFisik[telinga_liang_telinga_kanan]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                                <td>
                                    <?= Html::activeRadio($model, 'telinga_liang_telinga_kiri', ['id' => 'mpemeriksaanfisik_telinga_liang_telinga_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->telinga_liang_telinga_kiri == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_liang_telinga_kiri_1" name="MPemeriksaanFisik[telinga_liang_telinga_kiri]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="2" class="text-center" style="width: 40px;">3</td>
                                <td rowspan="2">Serumen</td>
                                <td rowspan="2" class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'telinga_serumen_kanan', ['id' => 'mpemeriksaanfisik_telinga_serumen_kanan_0', 'value' => 'Tidak Ada', 'label' => 'Tidak Ada']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->telinga_serumen_kanan == 'Ada Serumen') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_serumen_kanan_1" name="MPemeriksaanFisik[telinga_serumen_kanan]" value="Ada Serumen">
                                        Ada Serumen
                                    </label>
                                </td>
                                <td>
                                    <?= Html::activeRadio($model, 'telinga_serumen_kiri', ['id' => 'mpemeriksaanfisik_telinga_serumen_kiri_0', 'value' => 'Tidak Ada', 'label' => 'Tidak Ada']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->telinga_serumen_kiri == 'Ada Serumen') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_serumen_kiri_1" name="MPemeriksaanFisik[telinga_serumen_kiri]" value="Ada Serumen">
                                        Ada Serumen
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->telinga_serumen_kanan == 'Menyumbat (Prop)') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_serumen_kanan_2" name="MPemeriksaanFisik[telinga_serumen_kanan]" value="Menyumbat (Prop)">
                                        Menyumbat (Prop)
                                    </label>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->telinga_serumen_kiri == 'Menyumbat (Prop)') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_serumen_kiri_2" name="MPemeriksaanFisik[telinga_serumen_kiri]" value="Menyumbat (Prop)">
                                        Menyumbat (Prop)
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="2" class="text-center" style="width: 40px;">4</td>
                                <td rowspan="2">Telinga Timpani</td>
                                <td rowspan="2" class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'telinga_timpani_kanan', ['id' => 'mpemeriksaanfisik_telinga_timpani_kanan_0', 'value' => 'Intak', 'label' => 'Intak']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->telinga_timpani_kanan == 'Tidak Intak') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_timpani_kanan_1" name="MPemeriksaanFisik[telinga_timpani_kanan]" value="Tidak Intak">
                                        Tidak Intak
                                    </label>
                                </td>
                                <td>
                                    <?= Html::activeRadio($model, 'telinga_timpani_kiri', ['id' => 'mpemeriksaanfisik_telinga_timpani_kiri_0', 'value' => 'Intak', 'label' => 'Intak']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->telinga_timpani_kiri == 'Tidak Intak') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_timpani_kiri_1" name="MPemeriksaanFisik[telinga_timpani_kiri]" value="Tidak Intak">
                                        Tidak Intak
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->telinga_timpani_kanan == 'Lainnya') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_timpani_kanan_2" name="MPemeriksaanFisik[telinga_timpani_kanan]" value="Lainnya">
                                        Lainnya
                                    </label>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->telinga_timpani_kiri == 'Lainnya') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_telinga_timpani_kiri_2" name="MPemeriksaanFisik[telinga_timpani_kiri]" value="Lainnya">
                                        Lainnya
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">5</td>

                                <td>Telinga Lainnya</td>
                                <td colspan="5">
                                    <?= $form->field($model, 'telinga_lainnya')->textInput(['class' => 'form-control form-control-sm', 'placeholder' => 'Lainnya'])->label(false) ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4>
                        8. Hidung
                    </h4>
                    <table class="table table-sm tabel-telinga tabel-garis-hitam">
                        <tbody>
                            <tr>
                                <td class="text-center" style="width: 40px;">1</td>
                                <td style="width: 25%;">Meatus Nasi</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'hidung_meatus_nasi', ['id' => 'mpemeriksaanfisik_hidung_meatus_nasi_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->hidung_meatus_nasi == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_hidung_meatus_nasi_1" name="MPemeriksaanFisik[hidung_meatus_nasi]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">2</td>
                                <td style="width: 25%;">Septum Nasi</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'hidung_septum_nasi', ['id' => 'mpemeriksaanfisik_hidung_septum_nasi_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->hidung_septum_nasi == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_hidung_septum_nasi_1" name="MPemeriksaanFisik[hidung_septum_nasi]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">3</td>
                                <td style="width: 25%;">Konka Nasal</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'hidung_konka_nasal', ['id' => 'mpemeriksaanfisik_hidung_konka_nasal_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->hidung_konka_nasal == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_hidung_konka_nasal_1" name="MPemeriksaanFisik[hidung_konka_nasal]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">4</td>
                                <td style="width: 25%;">Ketok Sinus</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'hidung_nyeri_ketok_sinus', ['id' => 'mpemeriksaanfisik_hidung_nyeri_ketok_sinus_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->hidung_nyeri_ketok_sinus == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_hidung_nyeri_ketok_sinus_1" name="MPemeriksaanFisik[hidung_nyeri_ketok_sinus]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">5</td>
                                <td style="width: 25%;">Penciuman</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'hidung_penciuman', ['id' => 'mpemeriksaanfisik_hidung_penciuman_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->hidung_penciuman == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_hidung_penciuman_1" name="MPemeriksaanFisik[hidung_penciuman]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">6</td>
                                <td>Hidung Lainnya</td>
                                <td colspan="4">
                                    <?= $form->field($model, 'hidung_lainnya')->textInput(['class' => 'form-control form-control-sm', 'placeholder' => 'Lainnya'])->label(false) ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4>
                        9. Mulut dan Bibir
                    </h4>
                    <table class="table table-sm tabel-telinga tabel-garis-hitam">
                        <tbody>
                            <tr>
                                <td class="text-center" style="width: 40px;">1</td>
                                <td style="width: 25%;">Bibir</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'mulut_bibir', ['id' => 'mpemeriksaanfisik_mulut_bibir_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->mulut_bibir == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mulut_bibir_1" name="MPemeriksaanFisik[mulut_bibir]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">2</td>
                                <td style="width: 25%;">Lidah</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'mulut_lidah', ['id' => 'mpemeriksaanfisik_mulut_lidah_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->mulut_lidah == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mulut_lidah_1" name="MPemeriksaanFisik[mulut_lidah]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">3</td>
                                <td style="width: 25%;">Gusi</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'mulut_gusi', ['id' => 'mpemeriksaanfisik_mulut_gusi_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->mulut_gusi == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mulut_gusi_1" name="MPemeriksaanFisik[mulut_gusi]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">4</td>
                                <td style="width: 25%;">Lainnya</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'mulut_lainnya', ['id' => 'mpemeriksaanfisik_mulut_lainnya_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->mulut_lainnya == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_mulut_lainnya_1" name="MPemeriksaanFisik[mulut_lainnya]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <h4>
                        10. Tenggorokan
                    </h4>
                    <table class="table table-sm tabel-telinga tabel-garis-hitam parent-no-margin">
                        <tbody>
                            <tr>
                                <td class="text-center" style="width: 40px;">1</td>
                                <td style="width: 25%;">Tenggorokan</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'tenggorokan', ['id' => 'mpemeriksaanfisik_tenggorokan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->tenggorokan == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_tenggorokan_1" name="MPemeriksaanFisik[tenggorokan]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">2</td>
                                <td style="width: 25%;">Pharynx</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'tenggorokan_pharynx', ['id' => 'mpemeriksaanfisik_tenggorokan_pharynx_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->tenggorokan_pharynx == 'Hiperemesis') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_tenggorokan_pharynx_1" name="MPemeriksaanFisik[tenggorokan_pharynx]" value="Hiperemesis">
                                        Hiperemesis
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;">
                                    <label>
                                        <input <?= ($model->tenggorokan_pharynx == 'Granulasi') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_tenggorokan_pharynx_1" name="MPemeriksaanFisik[tenggorokan_pharynx]" value="Granulasi">
                                        Granulasi
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="3"></th>
                                <th colspan="2" class="text-center font-weight-bold" style="color: #000000;">KANAN</th>
                                <th colspan="2" class="text-center font-weight-bold" style="color: #000000;">KIRI</th>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">3</td>
                                <td style="width: 25%;">Tonsil</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td class="text-center" colspan="2">
                                    <?php
                                    echo $form->field($model, 'tenggorokan_tonsil_kanan')->radioList(
                                        ['T0' => 'T0', 'T1' => 'T1', 'T2' => 'T2', 'T3' => 'T3',],
                                        [
                                            'item' => static function ($index, $label, $name, $checked, $value) use ($model) {
                                                return Helper::radioList($index, $label, $name, $checked, $value, $model);
                                            }
                                        ]
                                    )->label(false);
                                    ?>
                                </td>
                                <td class="text-center" colspan="2">
                                    <?php
                                    echo $form->field($model, 'tenggorokan_tonsil_kiri')->radioList(
                                        ['T0' => 'T0', 'T1' => 'T1', 'T2' => 'T2', 'T3' => 'T3',],
                                        [
                                            'item' => static function ($index, $label, $name, $checked, $value) use ($model) {
                                                return Helper::radioList($index, $label, $name, $checked, $value, $model);
                                            }
                                        ]
                                    )->label(false);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">4</td>
                                <td style="width: 25%;">Ukuran Tonsil</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'tenggorokan_tonsil_ukuran_kanan', ['id' => 'mpemeriksaanfisik_tenggorokan_tonsil_ukuran_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->tenggorokan_tonsil_ukuran_kanan == 'Hiperemis') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_tenggorokan_tonsil_ukuran_kanan_1" name="MPemeriksaanFisik[tenggorokan_tonsil_ukuran_kanan]" value="Hiperemis">
                                        Hiperemis
                                    </label>
                                </td>
                                <td>
                                    <?= Html::activeRadio($model, 'tenggorokan_tonsil_ukuran_kiri', ['id' => 'mpemeriksaanfisik_tenggorokan_tonsil_ukuran_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->tenggorokan_tonsil_ukuran_kiri == 'Hiperemis') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_tenggorokan_tonsil_ukuran_kiri_1" name="MPemeriksaanFisik[tenggorokan_tonsil_ukuran_kiri]" value="Hiperemis">
                                        Hiperemis
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">5</td>
                                <td style="width: 25%;">Palatum</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'tenggorokan_palatum', ['id' => 'mpemeriksaanfisik_tenggorokan_palatum_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->tenggorokan_palatum == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_tenggorokan_palatum_1" name="MPemeriksaanFisik[tenggorokan_palatum]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">6</td>
                                <td style="width: 25%;">Lainnya</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td colspan="4" style="width: 35%;">
                                    <?= $form->field($model, 'tenggorokan_lainn')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'Lainnya'])->label(false) ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4>
                        11. Leher
                    </h4>
                    <table class="table table-sm tabel-telinga tabel-garis-hitam parent-no-margin">
                        <tbody>
                            <tr>
                                <td class="text-center" style="width: 40px;">1</td>
                                <td style="width: 25%;">Gerakan Leher</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'leher_gerakan_leher', ['id' => 'mpemeriksaanfisik_leher_gerakan_leher_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->leher_gerakan_leher == 'Terbatas') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_leher_gerakan_leher_1" name="MPemeriksaanFisik[leher_gerakan_leher]" value="Terbatas">
                                        Terbatas
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">2</td>
                                <td style="width: 25%;">Otot Leher</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'leher_otot_leher', ['id' => 'mpemeriksaanfisik_leher_otot_leher_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->leher_otot_leher == 'Spasme / Kontraksi') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_leher_otot_leher_1" name="MPemeriksaanFisik[leher_otot_leher]" value="Spasme / Kontraksi">
                                        Spasme / Kontraksi
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">3</td>
                                <td style="width: 25%;">Kelenjer Thyroid</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'leher_kelenjar_thyroid', ['id' => 'mpemeriksaanfisik_leher_kelenjar_thyroid_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->leher_kelenjar_thyroid == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_leher_kelenjar_thyroid_1" name="MPemeriksaanFisik[leher_kelenjar_thyroid]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">4</td>
                                <td style="width: 25%;">Pulsasi Carotis</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'leher_pulsasi_carotis', ['id' => 'mpemeriksaanfisik_leher_pulsasi_carotis_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->leher_pulsasi_carotis == 'Bruit') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_leher_pulsasi_carotis_1" name="MPemeriksaanFisik[leher_pulsasi_carotis]" value="Bruit">
                                        Bruit
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">5</td>
                                <td style="width: 25%;">Vena Jugularis</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'leher_tekanan_vena_jugularis', ['id' => 'mpemeriksaanfisik_leher_tekanan_vena_jugularis_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->leher_tekanan_vena_jugularis == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_leher_tekanan_vena_jugularis_1" name="MPemeriksaanFisik[leher_tekanan_vena_jugularis]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">6</td>
                                <td style="width: 25%;">Trachea</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'leher_trachea', ['id' => 'mpemeriksaanfisik_leher_trachea_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->leher_trachea == 'Deviasi') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_leher_trachea_1" name="MPemeriksaanFisik[leher_trachea]" value="Deviasi">
                                        Deviasi
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">7</td>
                                <td style="width: 25%;">Lainnya</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td colspan="4" style="width: 35%;">
                                    <?= $form->field($model, 'leher_lainnya')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'Lainnya'])->label(false) ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4>
                        12. Dada
                    </h4>
                    <table class="table table-sm tabel-telinga tabel-garis-hitam parent-no-margin">
                        <tbody>
                            <tr>
                                <td class="text-center" style="width: 40px;">1</td>
                                <td style="width: 25%;">Dada</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'dada', ['id' => 'mpemeriksaanfisik_dada_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->dada == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_dada_1" name="MPemeriksaanFisik[dada]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">2</td>
                                <td style="width: 25%;">Bentuk</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'dada_bentuk', ['id' => 'mpemeriksaanfisik_dada_bentuk_0', 'value' => 'Simetris', 'label' => 'Simetris']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->dada_bentuk == 'Asimetris') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_dada_bentuk_1" name="MPemeriksaanFisik[dada_bentuk]" value="Asimetris">
                                        Asimetris
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">3</td>
                                <td style="width: 25%;">Mamae</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'dada_mamae', ['id' => 'mpemeriksaanfisik_dada_mamae_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->dada_mamae == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_dada_mamae_1" name="MPemeriksaanFisik[dada_mamae]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td rowspan="3" class="text-center" style="width: 40px;">4</td>
                                <td rowspan="3" style="width: 25%;">Tumor</td>
                                <td rowspan="3" class="text-center" style="width: 20px;">:</td>
                                <td>
                                    Ukuran
                                </td>
                                <td colspan="3" style="width: 35%;">
                                    <?= $form->field($model, 'dada_tumor_ukuran')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label(false) ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Letak
                                </td>
                                <td colspan="3" style="width: 35%;">
                                    <?= $form->field($model, 'dada_tumor_letak')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label(false) ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Konsisten
                                </td>
                                <td colspan="3" style="width: 35%;">
                                    <?= $form->field($model, 'dada_tumor_konsisten')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label(false) ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">5</td>
                                <td style="width: 25%;">Lainnya</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td colspan="4" style="width: 35%;">
                                    <?= $form->field($model, 'dada_lainnya')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm', 'placeholder' => 'Lainnya'])->label(false) ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h4>
                        13. Paru-Paru dan Jantung
                    </h4>
                    <table class="table table-sm tabel-telinga tabel-garis-hitam parent-no-margin">
                        <tbody>
                            <tr>
                                <td class="text-center" style="width: 40px;">A</td>
                                <td style="width: 25%;">Palpasi</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'paru_jantung_palpasi', ['id' => 'mpemeriksaanfisik_paru_jantung_palpasi_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->paru_jantung_palpasi == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_palpasi_1" name="MPemeriksaanFisik[paru_jantung_palpasi]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <th colspan="3"></th>
                                <th colspan="2" class="text-center font-weight-bold" style="color: #000000;">KANAN</th>
                                <th colspan="2" class="text-center font-weight-bold" style="color: #000000;">KIRI</th>
                            </tr>
                            <tr>
                                <td rowspan="2" class="text-center" style="width: 40px;">B</td>
                                <td rowspan="2">Palpasi</td>
                                <td rowspan="2" class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'paru_jantung_perkusi_kanan', ['id' => 'mpemeriksaanfisik_paru_jantung_perkusi_kanan_0', 'value' => 'Sonor', 'label' => 'Sonor']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->paru_jantung_perkusi_kanan == 'Redup') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_perkusi_kanan_1" name="MPemeriksaanFisik[paru_jantung_perkusi_kanan]" value="Redup">
                                        Redup
                                    </label>
                                </td>
                                <td>
                                    <?= Html::activeRadio($model, 'paru_jantung_perkusi_kiri', ['id' => 'mpemeriksaanfisik_paru_jantung_perkusi_kiri_0', 'value' => 'Sonor', 'label' => 'Sonor']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->paru_jantung_perkusi_kiri == 'Redup') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_perkusi_kiri_1" name="MPemeriksaanFisik[paru_jantung_perkusi_kiri]" value="Redup">
                                        Redup
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->paru_jantung_perkusi_kanan == 'Hipersonor') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_perkusi_kanan_2" name="MPemeriksaanFisik[paru_jantung_perkusi_kanan]" value="Hipersonor">
                                        Hipersonor
                                    </label>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->paru_jantung_perkusi_kiri == 'Hipersonor') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_perkusi_kiri_2" name="MPemeriksaanFisik[paru_jantung_perkusi_kiri]" value="Hipersonor">
                                        Hipersonor
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="3" class="text-center" style="width: 40px;">C</td>
                                <td rowspan="2">Auskultasi Bunyi Nafas Tambah</td>
                                <td rowspan="2" class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'paru_jantung_auskultasi_bunyi_nafas_tambah_kanan', ['id' => 'mpemeriksaanfisik_paru_jantung_auskultasi_bunyi_nafas_tambah_kanan_0', 'value' => 'Tak Ada', 'label' => 'Tak Ada']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->paru_jantung_auskultasi_bunyi_nafas_tambah_kanan == 'Ronkhi') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_auskultasi_bunyi_nafas_tambah_kanan_1" name="MPemeriksaanFisik[paru_jantung_auskultasi_bunyi_nafas_tambah_kanan]" value="Ronkhi">
                                        Ronkhi
                                    </label>
                                </td>
                                <td>
                                    <?= Html::activeRadio($model, 'paru_jantung_auskultasi_bunyi_nafas_tambah_kiri', ['id' => 'mpemeriksaanfisik_paru_jantung_auskultasi_bunyi_nafas_tambah_kiri_0', 'value' => 'Tak Ada', 'label' => 'Tak Ada']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->paru_jantung_auskultasi_bunyi_nafas_tambah_kiri == 'Ronkhi') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_auskultasi_bunyi_nafas_tambah_kiri_1" name="MPemeriksaanFisik[paru_jantung_auskultasi_bunyi_nafas_tambah_kiri]" value="Ronkhi">
                                        Ronkhi
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->paru_jantung_auskultasi_bunyi_nafas_tambah_kanan == 'Wheezing') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_auskultasi_bunyi_nafas_tambah_kanan_2" name="MPemeriksaanFisik[paru_jantung_auskultasi_bunyi_nafas_tambah_kanan]" value="Wheezing">
                                        Wheezing
                                    </label>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->paru_jantung_auskultasi_bunyi_nafas_tambah_kiri == 'Wheezing') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_auskultasi_bunyi_nafas_tambah_kiri_2" name="MPemeriksaanFisik[paru_jantung_auskultasi_bunyi_nafas_tambah_kiri]" value="Wheezing">
                                        Wheezing
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>Auskultasi Bunyi Nafas </td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'paru_jantung_auskultasi_bunyi_nafas_kanan', ['id' => 'mpemeriksaanfisik_paru_jantung_auskultasi_bunyi_nafas_kanan_0', 'value' => 'Vesikuler', 'label' => 'Vesikuler']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->paru_jantung_auskultasi_bunyi_nafas_kanan == 'Brc. Vesikuler') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_auskultasi_bunyi_nafas_kanan_1" name="MPemeriksaanFisik[paru_jantung_auskultasi_bunyi_nafas_kanan]" value="Brc. Vesikuler">
                                        Brc. Vesikuler
                                    </label>
                                </td>
                                <td>
                                    <?= Html::activeRadio($model, 'paru_jantung_auskultasi_bunyi_nafas_kiri', ['id' => 'mpemeriksaanfisik_paru_jantung_auskultasi_bunyi_nafas_kiri_0', 'value' => 'Vesikuler', 'label' => 'Vesikuler']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->paru_jantung_auskultasi_bunyi_nafas_kiri == 'Brc. Vesikuler') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_auskultasi_bunyi_nafas_kiri_1" name="MPemeriksaanFisik[paru_jantung_auskultasi_bunyi_nafas_kiri]" value="Brc. Vesikuler">
                                        Brc. Vesikuler
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="3" class="text-center" style="width: 40px;">D</td>
                                <td style="width: 25%;">Jantung</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td colspan="4" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td style="width: 25%;">Iktus Kordis</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'paru_jantung_perkusi_iktus_kiri', ['id' => 'mpemeriksaanfisik_paru_jantung_perkusi_iktus_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->paru_jantung_perkusi_iktus_kiri == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_perkusi_iktus_kiri_1" name="MPemeriksaanFisik[paru_jantung_perkusi_iktus_kiri]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td style="width: 25%;">Batas Jantung</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'paru_jantung_bunyi_jantung', ['id' => 'mpemeriksaanfisik_paru_jantung_bunyi_jantung_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->paru_jantung_bunyi_jantung == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_paru_jantung_bunyi_jantung_1" name="MPemeriksaanFisik[paru_jantung_bunyi_jantung]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">E</td>
                                <td>Lainnya</td>
                                <td colspan="4">
                                    <?= $form->field($model, 'paru_jantung_lainnya')->textInput(['placeholder' => 'Lainnya', 'class' => 'form-control form-control-sm'])->label(false) ?>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h4>
                        14. Abdomen
                    </h4>
                    <table class="table table-sm tabel-telinga tabel-garis-hitam parent-no-margin">
                        <tbody>
                            <tr>
                                <td class="text-center" style="width: 40px;">1</td>
                                <td style="width: 25%;">Palpasi</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'abdomen', ['id' => 'mpemeriksaanfisik_abdomen_0', 'value' => 'Supel', 'label' => 'Supel']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->abdomen == 'Rigit') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_abdomen_1" name="MPemeriksaanFisik[abdomen]" value="Rigit">
                                        Rigit
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">2</td>
                                <td style="width: 25%;">Perkusi</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'abdomen_perkusi', ['id' => 'mpemeriksaanfisik_abdomen_perkusi_0', 'value' => 'Timpani', 'label' => 'Timpani']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->abdomen_perkusi == 'Redup') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_abdomen_perkusi_1" name="MPemeriksaanFisik[abdomen_perkusi]" value="Redup">
                                        Redup
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">3</td>
                                <td style="width: 25%;">Auskultai Bising Usus</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'abdomen_auskultasi_bising_usus', ['id' => 'mpemeriksaanfisik_abdomen_auskultasi_bising_usus_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->abdomen_auskultasi_bising_usus == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_abdomen_auskultasi_bising_usus_1" name="MPemeriksaanFisik[abdomen_auskultasi_bising_usus]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">4</td>
                                <td style="width: 25%;">Hati</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'abdomen_hati', ['id' => 'mpemeriksaanfisik_abdomen_hati_0', 'value' => 'Teraba', 'label' => 'Teraba']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->abdomen_hati == 'Tidak Teraba') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_abdomen_hati_1" name="MPemeriksaanFisik[abdomen_hati]" value="Tidak Teraba">
                                        Tidak Teraba
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">5</td>
                                <td style="width: 25%;">Limpa</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'abdomen_limpa', ['id' => 'mpemeriksaanfisik_abdomen_limpa_0', 'value' => 'Tidak Teraba Schuffner', 'label' => 'Tidak Teraba Schuffner']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->abdomen_limpa == 'Teraba Schuffner') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_abdomen_limpa_1" name="MPemeriksaanFisik[abdomen_limpa]" value="Teraba Schuffner">
                                        Teraba Schuffner
                                    </label>
                                </td>
                                <td colspan="2" style="width: 35%;"></td>
                            </tr>
                            <tr>
                                <th colspan="3"></th>
                                <th colspan="2" class="text-center font-weight-bold" style="color: #000000;">KANAN</th>
                                <th colspan="2" class="text-center font-weight-bold" style="color: #000000;">KIRI</th>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">6</td>
                                <td style="width: 25%;">Ginjal</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'abdomen_ginjal_kanan', ['id' => 'mpemeriksaanfisik_abdomen_ginjal_kanan_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->abdomen_ginjal_kanan == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_abdomen_ginjal_kanan_1" name="MPemeriksaanFisik[abdomen_ginjal_kanan]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                                <td>
                                    <?= Html::activeRadio($model, 'abdomen_ginjal_kiri', ['id' => 'mpemeriksaanfisik_abdomen_ginjal_kiri_0', 'value' => 'Normal', 'label' => 'Normal']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->abdomen_ginjal_kiri == 'Tidak Normal') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_abdomen_ginjal_kiri_1" name="MPemeriksaanFisik[abdomen_ginjal_kiri]" value="Tidak Normal">
                                        Tidak Normal
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">7</td>
                                <td style="width: 25%;">Ballotement</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'abdomen_ballotement_kanan', ['id' => 'mpemeriksaanfisik_abdomen_ballotement_kanan_0', 'value' => 'Ada', 'label' => 'Ada']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->abdomen_ballotement_kanan == 'Tidak Ada') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_abdomen_ballotement_kanan_1" name="MPemeriksaanFisik[abdomen_ballotement_kanan]" value="Tidak Ada">
                                        Tidak Ada
                                    </label>
                                </td>
                                <td>
                                    <?= Html::activeRadio($model, 'abdomen_ballotement_kiri', ['id' => 'mpemeriksaanfisik_abdomen_ballotement_kiri_0', 'value' => 'Ada', 'label' => 'Ada']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->abdomen_ballotement_kiri == 'Tidak Ada') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_abdomen_ballotement_kiri_1" name="MPemeriksaanFisik[abdomen_ballotement_kiri]" value="Tidak Ada">
                                        Tidak Ada
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">8</td>
                                <td style="width: 25%;">Nyeri Costo Vertebrae</td>
                                <td class="text-center" style="width: 20px;">:</td>
                                <td>
                                    <?= Html::activeRadio($model, 'abdomen_nyeri_costo_vertebrae_kanan', ['id' => 'mpemeriksaanfisik_abdomen_nyeri_costo_vertebrae_kanan_0', 'value' => 'Ada', 'label' => 'Ada']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->abdomen_nyeri_costo_vertebrae_kanan == 'Tidak Ada') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_abdomen_nyeri_costo_vertebrae_kanan_1" name="MPemeriksaanFisik[abdomen_nyeri_costo_vertebrae_kanan]" value="Tidak Ada">
                                        Tidak Ada
                                    </label>
                                </td>
                                <td>
                                    <?= Html::activeRadio($model, 'abdomen_nyeri_costo_vertebrae_kiri', ['id' => 'mpemeriksaanfisik_abdomen_nyeri_costo_vertebrae_kiri_0', 'value' => 'Ada', 'label' => 'Ada']) ?>
                                </td>
                                <td>
                                    <label>
                                        <input <?= ($model->abdomen_nyeri_costo_vertebrae_kiri == 'Tidak Ada') ? 'checked' : null ?> type="radio" id="mpemeriksaanfisik_abdomen_nyeri_costo_vertebrae_kiri_1" name="MPemeriksaanFisik[abdomen_nyeri_costo_vertebrae_kiri]" value="Tidak Ada">
                                        Tidak Ada
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 40px;">9</td>
                                <td style="width: 25%;">Lainnya</td>
                                <td colspan="4">
                                    <?= $form->field($model, 'abdomen_lainnya')->textInput(['placeholder' => 'Lainnya', 'class' => 'form-control form-control-sm'])->label(false) ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h4>16. Vertebra</h4>
                    <table class="table table-sm tabel-garis-hitam parent-no-margin">
                        <tbody>
                            <tr>
                                <td style="width: 20%;">Vertebra</td>
                                <td style="width: 30%;">
                                    <?= $form->field($model, 'vertebra')->radioList(['Normal' => 'Normal', 'Lordosis' => 'Lordosis', 'Skoliosis' => 'Skoliosis', 'Kiposis' => 'Kiposis',])->label(false) ?>
                                </td>
                                <td style="width: 20%;">Vertebra Lainnya</td>
                                <td style="width: 30%;">
                                    <?= $form->field($model, 'vertebra_lainnya')->textArea(['placeholder' => 'Lainnya', 'class' => 'form-control form-control-sm'])->label(false) ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h4>17. Tulang / Sendi (Ekstremitas Atas)</h4>

                    <table class="table table-sm tabel-garis-hitam parent-no-margin">
                        <tr>
                            <th>Tulang Atas Simetris</th>
                            <th colspan="4">
                                <?= $form->field($model, 'tulang_atas_simetris')->radioList(['Ya' => "Ya", "Tidak Ada" => "Tidak Ada"])->label(false) ?>
                            </th>
                        </tr>
                        <tr>
                            <th></th>
                            <th style="text-align: center; font-weight: bold;" colspan="2">KANAN</th>
                            <th style="text-align: center; font-weight: bold;" colspan="2">KIRI</th>
                        </tr>
                        <tr>
                            <td style="width: 40%;">Tulang Atas Gerakan Abduksi Neer</td>
                            <td style="width: 30%;" colspan="2">
                                <?= $form->field($model, 'tulang_atas_gerakan_abduksi_neer_kanan')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                            </td>
                            <td style="width: 30%;" colspan="2">
                                <?= $form->field($model, 'tulang_atas_gerakan_abduksi_neer_kiri')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Atas Gerakan Abduksi Hawkin </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_gerakan_abduksi_hawkin_kanan')->radioList(["Tidak Normal" => "Tidak Normal", "Normal" => "Normal"])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_gerakan_abduksi_hawkin_kiri')->radioList(["Tidak Normal" => "Tidak Normal", "Normal" => "Normal"])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Atas Gerakan Drop Arm</td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_gerakan_drop_arm_kanan')->radioList(["Tidak Normal" => "Tidak Normal", "Normal" => "Normal"])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_gerakan_drop_arm_kiri')->radioList(["Tidak Normal" => "Tidak Normal", "Normal" => "Normal"])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Atas Gerakan Yergason</td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_gerakan_yergason_kanan')->radioList(["Tidak Normal" => "Tidak Normal", "Normal" => "Normal"])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_gerakan_yergason_kiri')->radioList(["Tidak Normal" => "Tidak Normal", "Normal" => "Normal"])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Atas Gerakan Speed </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_gerakan_speed_kanan')->radioList(["Tidak Normal" => "Tidak Normal", "Normal" => "Normal"])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_gerakan_speed_kiri')->radioList(["Tidak Normal" => "Tidak Normal", "Normal" => "Normal"])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Atas Tulang </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_tulang_kanan')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_tulang_kiri')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Atas Sensibilitas</td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_sensibilitas_kanan')->radioList(['Baik' => 'Baik', 'Tidak Baik'])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_sensibilitas_kiri')->radioList(['Baik' => 'Baik', 'Tidak Baik' => 'Tidak Baik'])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Atas Oedem </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_oedem_kanan')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada'])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_oedem_kiri')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada'])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Atas Varises </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_varises_kanan')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada'])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_varises_kiri')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada'])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Atas Kekuatan Otot Pin Prick </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_kekuatan_otot_pin_prick_kanan')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_kekuatan_otot_pin_prick_kiri')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Atas Kekuatan Otot Phallent </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_kekuatan_otot_phallent_kanan')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_kekuatan_otot_phallent_kiri')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Atas Kekuatan Otot Tinnel </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_kekuatan_otot_tinnel_kanan')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_kekuatan_otot_tinnel_kiri')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Atas Kekuatan Otot Finskelstein </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_kekuatan_otot_finskelstein_kanan')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_kekuatan_otot_finskelstein_kiri')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Atas Vaskularisasi </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_vaskularisasi_kanan')->radioList(['Baik' => 'Baik', 'Tidak Baik' => 'Tidak Baik'])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_vaskularisasi_kiri')->radioList(['Baik' => 'Baik', 'Tidak Baik' => 'Tidak Baik'])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Atas Kelaianan Kukujari </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_kelaianan_kukujari_kanan')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada'])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_atas_kelaianan_kukujari_kiri')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada'])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Sendi Atas Lainnya </td>
                            <td colspan="4">
                                <?= $form->field($model, 'tulang_sendi_atas_lainnya')->textInput()->label(false) ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h4>18. Tulang / Sendi (Ektremitas Bawah)</h4>

                    <table class="table table-sm tabel-garis-hitam parent-no-margin">
                        <tr>
                            <th>Tulang Bawah Simetris</th>
                            <th colspan="4">
                                <?= $form->field($model, 'tulang_bawah_simetris')->radioList(['Ya' => "Ya", "Tidak Ada" => "Tidak Ada"])->label(false) ?>
                            </th>
                        </tr>
                        <tr>
                            <th></th>
                            <th style="text-align: center; font-weight: bold;" colspan="2">KANAN</th>
                            <th style="text-align: center; font-weight: bold;" colspan="2">KIRI</th>
                        </tr>
                        <tr>
                            <td style="width: 40%;">Tulang Bawah Laseque </td>
                            <td style="width: 30%;" colspan="2">
                                <?= $form->field($model, 'tulang_bawah_laseque_kanan')->radioList(['Normal' => "Normal", "Tidak Normal" => "Tidak Normal"])->label(false) ?>
                            </td>
                            <td style="width: 30%;" colspan="2">
                                <?= $form->field($model, 'tulang_bawah_laseque_kiri')->radioList(['Normal' => "Normal", "Tidak Normal" => "Tidak Normal"])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Bawah Kernique </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_bawah_kernique_kanan')->radioList(['Normal' => "Normal", "Tidak Normal" => "Tidak Normal"])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_bawah_kernique_kiri')->radioList(['Normal' => "Normal", "Tidak Normal" => "Tidak Normal"])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Bawah Patrick </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_bawah_patrick_kanan')->radioList(['Normal' => "Normal", "Tidak Normal" => "Tidak Normal"])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_bawah_patrick_kiri')->radioList(['Normal' => "Normal", "Tidak Normal" => "Tidak Normal"])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Bawah Contrapatrick </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_bawah_contrapatrick_kanan')->radioList(['Normal' => "Normal", "Tidak Normal" => "Tidak Normal"])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_bawah_contrapatrick_kiri')->radioList(['Normal' => "Normal", "Tidak Normal" => "Tidak Normal"])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Bawah Nyeri Tekanan </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_bawah_nyeri_tekanan_kanan')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada'])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_bawah_nyeri_tekanan_kiri')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada'])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Bawah Kekuatan Otot</td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_bawah_kekuatan_otot_kanan')->radioList(['Tidak Normal' => 'Tidak Normal', 'Normal' => 'Normal'])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_bawah_kekuatan_otot_kiri')->radioList(['Tidak Normal' => 'Tidak Normal', 'Normal' => 'Normal'])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Bawah Sensibilitas </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_bawah_sensibilitas_kanan')->radioList(['Baik' => 'Baik', 'Tidak Baik'])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_bawah_sensibilitas_kiri')->radioList(['Baik' => 'Baik', 'Tidak Baik'])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Bawah Oedema </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_bawah_oedema_kanan')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada'])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_bawah_oedema_kiri')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada'])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Bawah Vaskularisasi </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_bawah_vaskularisasi_kanan')->radioList(['Baik' => 'Baik', 'Tidak Baik' => 'Tidak Baik'])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_bawah_vaskularisasi_kiri')->radioList(['Baik' => 'Baik', 'Tidak Baik' => 'Tidak Baik'])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tulang Bawah Kelainan Kuku </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_bawah_kelainan_kuku_kanan')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada'])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'tulang_bawah_kelainan_kuku_kiri')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada'])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Lainnya </td>
                            <td colspan="4">
                                <?= $form->field($model, 'tulang_sendi_bawah_lainnya')->textInput(['placeholder' => 'Lainnya', 'class' => 'form-control form-control-sm'])->label(false) ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h4>19. Otot Motorik</h4>
                    <table class="table table-sm tabel-garis-hitam parent-no-margin">
                        <tr>
                            <th></th>
                            <th style="text-align: center; font-weight: bold;" colspan="2">KANAN</th>
                            <th style="text-align: center; font-weight: bold;" colspan="2">KIRI</th>
                        </tr>
                        <tr>
                            <td style="width: 40%;">Otot Motorik Trofi</td>
                            <td style="width: 30%;" colspan="2">
                                <?= $form->field($model, 'otot_motorik_trofi_kanan')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                            </td>
                            <td style="width: 30%;" colspan="2">
                                <?= $form->field($model, 'otot_motorik_trofi_kiri')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Otot Motorik Tonus </td>
                            <td colspan="2">
                                <?= $form->field($model, 'otot_motorik_tonus_kanan')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'otot_motorik_tonus_kiri')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Otot Motorik Tonus </td>
                            <td colspan="2">
                                <?= $form->field($model, 'otot_motorik_gerakan_abnormal_kanan')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada'])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'otot_motorik_gerakan_abnormal_kiri')->radioList(['Tidak Ada' => 'Tidak Ada', 'Ada' => 'Ada'])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Lainnya </td>
                            <td colspan="4">
                                <?= $form->field($model, 'otot_motorik_lainnya')->textInput(['placeholder' => 'Lainnya', 'class' => 'form-control form-control-sm'])->label(false) ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h4>20. Fungsi Sensorik dan Autonom</h4>
                    <table class="table table-sm tabel-garis-hitam parent-no-margin">
                        <tr>
                            <th></th>
                            <th style="text-align: center; font-weight: bold;" colspan="2">KANAN</th>
                            <th style="text-align: center; font-weight: bold;" colspan="2">KIRI</th>
                        </tr>
                        <tr>
                            <td style="width: 40%;">Fungsi Sensorik</td>
                            <td style="width: 30%;" colspan="2">
                                <?= $form->field($model, 'fungsi_sensorik_kanan')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                            </td>
                            <td style="width: 30%;" colspan="2">
                                <?= $form->field($model, 'fungsi_sensorik_kiri')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Fungsi Autonom </td>
                            <td colspan="2">
                                <?= $form->field($model, 'fungsi_autonom_kanan')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                            </td>
                            <td colspan="2">
                                <?= $form->field($model, 'fungsi_autonom_kiri')->radioList(['Normal' => 'Normal', 'Tidak Normal' => 'Tidak Normal'])->label(false) ?>
                            </td>
                        </tr>

                        <tr>
                            <td>Lainnya </td>
                            <td colspan="4">
                                <?= $form->field($model, 'fungsi_sensorik_autonom_lainnya')->textInput(['placeholder' => 'Lainnya', 'class' => 'form-control form-control-sm'])->label(false) ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-list"></i> &nbsp;
                        Diagnosis ICD 10 & Diagnosis Kerja
                    </h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-orange">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-list"></i> &nbsp;
                        Hasil Resume Tidak Normal
                    </h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>

</div>
<?php ActiveForm::end(); ?>
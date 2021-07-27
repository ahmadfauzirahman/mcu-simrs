<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PasienBaru */

$this->title = $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Pasien Barus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->kode], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->kode], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'pendidikan_kode',
                            'tempat_lahir',
                            'tgl_lahir',
                            'alergi:ntext',
                            'kelurahan_kode',
                            'kedudukan_keluarga',
                            'anak_ke',
                            'istri_ke',
                            'goldar',
                            'jurusan_kode',
                            'kode',
                            'nama',
                            'alamat',
                            'no_identitas',
                            'no_telp',
                            'jkel:ntext',
                            'status_kawin_kode',
                            'tempat_kerja',
                            'alamat_tempat_kerja',
                            'ayah_nama',
                            'ibu_nama',
                            'nama_pasangan',
                            'agama_kode',
                            'pekerjaan_kode',
                            'jml_anak',
                            'deleted_at',
                            'deleted_by',
                            'penghasilan',
                            'suku_kode',
                            'kewarganegaraan_kode',
                            'rt',
                            'rw',
                            'created_by',
                            'created_at',
                            'updated_by',
                            'updated_at',
                            'ayah_no_rekam_medis',
                            'ibu_no_rekam_medis',
                            'jenis_identitas_kode:ntext',
                            'kebiasaan:ntext',
                            'riwayat_penyakit:ntext',
                            'no_kk',
                        ],
                    ]) ?>
                </div>
                <!--.col-md-12-->
            </div>
            <!--.row-->
        </div>
        <!--.card-body-->
    </div>
    <!--.card-->
</div>
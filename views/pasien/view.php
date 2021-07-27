<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pasien */

$this->title = $model->NO_PASIEN;
$this->params['breadcrumbs'][] = ['label' => 'Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->NO_PASIEN], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->NO_PASIEN], [
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
                            'NO_PASIEN',
                            'NAMA',
                            'NAMAPANGGILAN',
                            'ALAMAT',
                            'DESA',
                            'RT',
                            'RW',
                            'KELURAHAN',
                            'KECAMATAN',
                            'KABUPATEN',
                            'KD_POS',
                            'NO_TELP',
                            'NO_HP',
                            'TP_LAHIR',
                            'TGL_LAHIR',
                            'NO_DEBT',
                            'NO_KARTU',
                            'ATASNAMA',
                            'HUBUNGAN',
                            'TGL_DAFTAR',
                            'PEKERJAAN',
                            'JENIS_KEL',
                            'PENDAKH',
                            'AGAMA',
                            'STATUS',
                            'NO_DAFTAR',
                            'KARTU',
                            'PENJWB',
                            'NAMAPEN',
                            'ALMPEN1',
                            'ALMPEN2',
                            'TELPPEN',
                            'HPPEN',
                            'PHOTO',
                            'NAMAAYAH',
                            'NAMAIBU',
                            'NAMAPASANGAN',
                            'HUBPEN',
                            'RTPEN',
                            'RWPEN',
                            'KODEPOSPEN',
                            'DESAPEN',
                            'KECPEN',
                            'KABPEN',
                            'NOIDENTITAS',
                            'PROPINSI',
                            'PROPPEN',
                            'CREATE_ID',
                            'CREATE_DATE',
                            'MODIFY_ID',
                            'MODIFY_DATE',
                            'NAKTIF',
                            'STATUSWN',
                            'ALMKANTOR',
                            'KOTAKANTOR',
                            'PROPKANTOR',
                            'TELPKANTOR',
                            'GOLDAR',
                            'NAMAKANTOR',
                            'NUMURTH',
                            'NUMURBL',
                            'NUMURHR',
                            'ID',
                            'HOBI',
                            'KEBIASAAN',
                            'LAIN',
                            'NO_PASIENIBU',
                            'KODEPROP',
                            'KODEKAB',
                            'KODEKEC',
                            'KODEKEL',
                            'MARGA',
                            'PEKERJAANPEN',
                            'PENDAKHPEN',
                            'KD_AGAMA',
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
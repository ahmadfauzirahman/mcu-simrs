<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PasienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); 
                    ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'tableOptions' => [
                            'class' => 'table table-sm table-bordered table-hover table-list-item'
                        ],
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'NO_PASIEN',
                            'NAMA',
                            // 'NAMAPANGGILAN',
                            'ALAMAT',
                            // 'DESA',
                            //'RT',
                            //'RW',
                            //'KELURAHAN',
                            //'KECAMATAN',
                            //'KABUPATEN',
                            // 'KD_POS',
                            // 'NO_TELP',
                            // 'NO_HP',
                            // 'TP_LAHIR',
                            // 'TGL_LAHIR',
                            //'NO_DEBT',
                            //'NO_KARTU',
                            //'ATASNAMA',
                            // 'HUBUNGAN',
                            //'TGL_DAFTAR',
                            //'PEKERJAAN',
                            // 'JENIS_KEL',
                            //'PENDAKH',
                            //'AGAMA',
                            //'STATUS',
                            //'NO_DAFTAR',
                            //'KARTU',
                            //'PENJWB',
                            //'NAMAPEN',
                            //'ALMPEN1',
                            //'ALMPEN2',
                            //'TELPPEN',
                            //'HPPEN',
                            //'PHOTO',
                            //'NAMAAYAH',
                            //'NAMAIBU',
                            //'NAMAPASANGAN',
                            //'HUBPEN',
                            //'RTPEN',
                            //'RWPEN',
                            //'KODEPOSPEN',
                            //'DESAPEN',
                            //'KECPEN',
                            //'KABPEN',
                            //'NOIDENTITAS',
                            //'PROPINSI',
                            //'PROPPEN',
                            //'CREATE_ID',
                            //'CREATE_DATE',
                            //'MODIFY_ID',
                            //'MODIFY_DATE',
                            //'NAKTIF',
                            //'STATUSWN',
                            //'ALMKANTOR',
                            //'KOTAKANTOR',
                            //'PROPKANTOR',
                            //'TELPKANTOR',
                            //'GOLDAR',
                            //'NAMAKANTOR',
                            //'NUMURTH',
                            //'NUMURBL',
                            //'NUMURHR',
                            //'ID',
                            //'HOBI',
                            //'KEBIASAAN',
                            //'LAIN',
                            //'NO_PASIENIBU',
                            //'KODEPROP',
                            //'KODEKAB',
                            //'KODEKEC',
                            //'KODEKEL',
                            //'MARGA',
                            //'PEKERJAANPEN',
                            //'PENDAKHPEN',
                            //'KD_AGAMA',

                            [
                                'class' => 'app\components\ActionColumn',
                                'contentOptions' => ['style' => 'text-align:center'],
                                'template' => '{update} {view}',

                            ],
                        ],
                        'summaryOptions' => ['class' => 'summary mb-2'],
                        'pager' => [
                            'class' => 'yii\bootstrap4\LinkPager',
                        ]
                    ]); ?>

                    <?php Pjax::end(); ?>

                </div>
                <!--.card-body-->
            </div>
            <!--.card-->
        </div>
        <!--.col-md-12-->
    </div>
    <!--.row-->
</div>
<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PasienBaruSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pasien Barus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Create Pasien Baru', ['create'], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'pendidikan_kode',
                            'tempat_lahir',
                            'tgl_lahir',
                            'alergi:ntext',
                            'kelurahan_kode',
                            //'kedudukan_keluarga',
                            //'anak_ke',
                            //'istri_ke',
                            //'goldar',
                            //'jurusan_kode',
                            //'kode',
                            //'nama',
                            //'alamat',
                            //'no_identitas',
                            //'no_telp',
                            //'jkel:ntext',
                            //'status_kawin_kode',
                            //'tempat_kerja',
                            //'alamat_tempat_kerja',
                            //'ayah_nama',
                            //'ibu_nama',
                            //'nama_pasangan',
                            //'agama_kode',
                            //'pekerjaan_kode',
                            //'jml_anak',
                            //'deleted_at',
                            //'deleted_by',
                            //'penghasilan',
                            //'suku_kode',
                            //'kewarganegaraan_kode',
                            //'rt',
                            //'rw',
                            //'created_by',
                            //'created_at',
                            //'updated_by',
                            //'updated_at',
                            //'ayah_no_rekam_medis',
                            //'ibu_no_rekam_medis',
                            //'jenis_identitas_kode:ntext',
                            //'kebiasaan:ntext',
                            //'riwayat_penyakit:ntext',
                            //'no_kk',

                            ['class' => 'hail812\adminlte3\yii\grid\ActionColumn'],
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

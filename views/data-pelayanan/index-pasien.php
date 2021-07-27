<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\DataPelayananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Pelayanan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <div class="card card-indigo card-outline">
                <div class="card-header">
                    <h5 class="card-title">
                        <i class="fas fa-user"></i> &nbsp;
                        Data Pelayanan
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table table-responsive">
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
                                [
                                    'class' => 'yii\grid\SerialColumn',
                                    'headerOptions' => ['style' => 'padding:10px'],
                                    'contentOptions' => ['style' => 'padding:10px'],
                                ],

                                [
                                    'headerOptions' => ['style' => 'text-align:center'],
                                    'contentOptions' => ['style' => 'text-align:center'],
                                    'attribute' => 'no_registrasi'
                                ],

                                [
                                    'headerOptions' => ['style' => 'text-align:center'],
                                    'contentOptions' => ['style' => 'text-align:center'],
                                    'attribute' => 'nama'
                                ],
                                [
                                    'headerOptions' => ['style' => 'text-align:center'],
                                    'contentOptions' => ['style' => 'text-align:center'],
                                    'attribute' => 'tanggal_pemeriksaan',
                                    'value' => function ($model) {
                                        return Yii::$app->formatter->asDate($model->tanggal_pemeriksaan);
                                    }
                                ],
                                [
                                    'label' => 'Paket Pemeriksaan',
                                    'headerOptions' => ['style' => 'text-align:center'],
                                    'contentOptions' => ['style' => 'text-align:center'],
                                    'attribute' => 'kode_paket'
                                ],
                                // 'id_data_pelayanan',
                                // 'no_rekam_medik',
                                // 'no_mcu',
                                // 'nama',
                                // 'tempat',
                                //'tgl_lahir',
                                //'agama',
                                //'kedudukan_dalam_keluarga',
                                //'status_perkawinan',
                                //'pendidikan',
                                //'pekerjaan',
                                //'alamat:ntext',
                                //'wni',
                                // 'tanggal_pemeriksaan',
                                //'pas_foto_offline:ntext',
                                //'pas_foto_online_valid',
                                //'kode_debitur',
                                // 'kode_paket',
                                //'jenis_kelamin',
                                //'no_ujian',

                                [
                                    'contentOptions' => ['style' => 'text-align:center'],
                                    'class' => 'app\components\ActionColumn',
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
                </div>
                <!--.card-body-->
            </div>
            <!--.card-->
        </div>
        <div class="col-md-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Total Pendaftaran MCU</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <h1 style="text-align: center;font-size: 170px;"><?= $count ?></h1>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!--.col-md-12-->
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="card card-body">
                <div class="timeline">
                    <!-- timeline time label -->
                    <?php foreach ($all as $timeline) { ?>
                        <div class="time-label">
                            <span class="bg-red"><?= Yii::$app->formatter->asDate($timeline['tanggal_pemeriksaan']) ?></span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div>
                            <i class="fas fa-envelope bg-blue"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header"><a href="#">Kategori Kesehatan</a> <?= $timeline['kategori_kesehatan'] ?></h3>

                                <div class="timeline-body">
                                    <p>Diagnosis Kerja : <?= empty($timeline['diagnosis_kerja']) ? 'Tidak Ada Diagnosi Kerja' : $timeline['diagnosis_kerja'] ?></p>
                                    <p>ICD 10 : <?= empty($timeline['icdt10']) ? '-' : $timeline['icdt10'] ?><br></p>
                                </div>
                                <div class="timeline-footer">
                                    <a class="btn btn-primary btn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                       
                    <?php  } ?>
                </div>
            </div>
        </div>
    </div>
    <!--.row-->
</div>
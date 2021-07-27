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
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                
                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'tableOptions' => [
                            'class' => 'table table-sm table-bordered table-hover table-list-item'
                        ],
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            // 'id_data_pelayanan',
                            'no_rekam_medik',
                            'no_mcu',
                            'nama',
                            // 'tempat',
                            'no_registrasi',
                            //'tgl_lahir',
                            //'agama',
                            //'kedudukan_dalam_keluarga',
                            //'status_perkawinan',
                            //'pendidikan',
                            //'pekerjaan',
                            //'alamat:ntext',
                            //'wni',
                            [
                                'attribute' =>'tanggal_pemeriksaan',
                                'value' => function($model){
                                    return Yii::$app->formatter->asDate($model->tanggal_pemeriksaan);
                                }
                            ],
                            //'pas_foto_offline:ntext',
                            //'pas_foto_online_valid',
                            'kode_debitur',
                            'kode_paket',
                            //'jenis_kelamin',
                            //'no_ujian',

                            // ['class' => 'app\components\ActionColumn'],
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

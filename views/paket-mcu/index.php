<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PaketMcuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Paket MCU SIMRS';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <?= Html::a('Tambah Paket Mcu', ['create'], ['class' => 'btn btn-success']) ?>
                            <hr>
                        </div>
                    </div>


                    <?php Pjax::begin(); ?>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); 
                    ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'tableOptions' => [
                            'class' => 'table table-sm table-bordered table-hover table-list-item'
                        ],
                        'filterModel' => $searchModel,
                        'columns' => [
                            [
                                'headerOptions' => ['style' => 'text-align:center;padding-left:5px;padding-right:5px;'],
                                'contentOptions' => ['style' => 'text-align:center'],
                                'class' => 'yii\grid\SerialColumn'
                            ],

                            // 'kode',
                            // 'nama',
                            [
                                'attribute' => 'nama',
                                'headerOptions' => ['style' => 'text-align:center'],
                                'contentOptions' => ['style' => 'text-align:center']
                            ],
                            // 'is_active',
                            // 'kode_debitur',
                            [
                                'headerOptions' => ['style' => 'text-align:center'],
                                'contentOptions' => ['style' => 'text-align:center'],
                                'attribute' => 'jenis_paket',
                                'value' => function ($model) {
                                    if ($model->jenis_paket == '1') {
                                        return 'Umum';
                                    } else if ($model->jenis_paket == '2') {
                                        return 'Instansi';
                                    } else {
                                        return 'Umum/Instansi';
                                    }
                                }
                                // '1'=>'Umum','2'=>'Instansi','3'=>'Umum/Instansi'
                                // }
                            ],

                            [
                                'headerOptions' => ['style' => 'text-align:center'],
                                'contentOptions' => ['style' => 'text-align:center'],
                                'class' => 'app\components\ActionColumn'
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
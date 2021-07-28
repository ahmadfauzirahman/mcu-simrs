<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AnamnesaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Anamnesas';
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
                            [
                                'headerOptions' => ['style' => 'padding-left:10px;padding-right:10px;'],
                                'contentOptions' => ['style' => 'text-align:center'],
                                'class' => 'yii\grid\SerialColumn'
                            ],

                            // 'id_anamnesis',
                            [
                                'attribute' => 'nomor_rekam_medik',
                                'headerOptions' => ['style' => 'padding-left:10px;padding-right:10px;'],
                                'contentOptions' => ['style' => 'text-align:center']
                            ],
                            [
                                'attribute' => 'jawaban1',
                                'headerOptions' => ['style' => 'padding-left:10px;padding-right:10px;'],
                                'contentOptions' => ['style' => 'padding-left:10px;padding-right:10px;'],
                            ],
                            [
                                'attribute' => 'jawaban2',
                                'headerOptions' => ['style' => 'padding-left:10px;padding-right:10px;'],
                                'contentOptions' => ['style' => 'padding-left:10px;padding-right:10px;'],
                            ],
                            [
                                'attribute' => 'jawaban3',
                                'headerOptions' => ['style' => 'padding-left:10px;padding-right:10px;'],
                                'contentOptions' => ['style' => 'padding-left:10px;padding-right:10px;'],
                            ],
                            [
                                'attribute' => 'jawaban4',
                                'headerOptions' => ['style' => 'padding-left:10px;padding-right:10px;'],
                                'contentOptions' => ['style' => 'padding-left:10px;padding-right:10px;'],
                            ],
                            //'jawaban5:ntext',
                            //'jawaban6:ntext',
                            //'jawaban7:ntext',
                            //'g',
                            //'p',
                            //'a',
                            //'h',
                            //'jawaban8:ntext',
                            //'no_daftar',

                            ['class' => 'app\components\ActionColumn'],
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
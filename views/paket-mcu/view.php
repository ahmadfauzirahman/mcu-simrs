<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PaketMcu */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Paket Medical Check Up', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->kode], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->kode], [
                            'class' => 'btn btn-danger btn-sm',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>
                    <?= DetailView::widget([
                        'model' => $model,
                        'options' => [
                            'class' => 'table table-sm table-bordered table-hover table-list-item'
                        ],
                        'attributes' => [
                            // 'kode',
                            'nama',
                            // 'is_active',
                            // 'kode_debitur',
                            [
                                // 'headerOptions' => ['style' => 'text-align:center'],
                                // 'contentOptions' => ['style' => 'text-align:center'],
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
                        ],
                    ]) ?>
                    <br>
                </div>
                <!--.col-md-12-->
            </div>
            <!--.row-->
        </div>
        <!--.card-body-->
    </div>
    <!--.card-->
</div>
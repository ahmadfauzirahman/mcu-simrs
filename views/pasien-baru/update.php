<?php

/* @var $this yii\web\View */
/* @var $model app\models\PasienBaru */

$this->title = 'Update Pasien Baru: ' . $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Pasien Barus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'id' => $model->kode]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <?=$this->render('_form', [
                        'model' => $model
                    ]) ?>
                </div>
            </div>
        </div>
        <!--.card-body-->
    </div>
    <!--.card-->
</div>
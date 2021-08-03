<?php
/*
 * @Author: Dicky Ermawan S., S.T., MTA 
 * @Email: wanasaja@gmail.com 
 * @Web: dickyermawan.github.io 
 * @Linkedin: linkedin.com/in/dickyermawan 
 * @Date: 2021-07-15 23:36:03 
 * @Last Modified by: Dicky Ermawan S., S.T., MTA
 * @Last Modified time: 2021-07-27 20:24:18
 */

use yii\web\View;

$this->title = 'Dashboard Management';
$this->params['breadcrumbs'] = [['label' => $this->title]];
?>

<style>
    ul.custom-legends {
        /* border: 1px solid black; */
        list-style-type: none;
        padding-left: 0px;

    }

    ul.custom-legends li {
        border-bottom: 1px solid lightgray;
        list-style-type: none;
        padding: 5px;
        /* display: flex; */
        align-items: center;
        justify-content: left;
    }

    .dot {
        display: inline-block;
        border-radius: 50px;
        height: 10px;
        width: 10px;
        margin-right: 10px;
    }

    #div-pasien-tutup-kasus:hover {
        filter: drop-shadow(3px 3px 3px #c1c5c9);
        transition: all 200ms ease-out;
        cursor: pointer;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Diagnosis Kerja</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" title="Refresh Chart" onclick="refreshChartPasienSelesaiTutupKasus(event, this)"><i class="fas fa-sync-alt"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="chartTutupKasus" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        <br>
                        <div id="legendTutupKasus"></div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <?php foreach ($totalPasienSemua as $item) { ?>
                    <div class="col-lg-4" style="margin-bottom: 10px;">
                        <a data-rel="tooltip" data-title="Jumlah Semua Pasien" href="" class="btn btn-success btn-block">
                            <span style="margin-left: 15px; font-size: 35px;"><?= $item['kode_debitur'] ?></span>
                            <span style="margin-left: 15px; font-size: 35px;"><?= $item['jumlah'] ?></span>
                        </a>
                        
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php $this->registerJs($this->render('index.js'), View::POS_END) ?>
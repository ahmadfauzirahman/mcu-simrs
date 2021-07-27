<?php

use yii\helpers\Url;
?>
<aside class="main-sidebar sidebar-light-indigo elevation-4">
    <!-- Brand Logo -->
    <a href="<?= Url::to(['site/index']) ?>" class="brand-link">
        <img src="<?= $assetDir ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light" style="font-size: 20px;font-family: 'Satisfy', cursive;">&nbsp;&nbsp;&nbsp; <b>E - MCU AA</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= $assetDir ?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    // [
                    //     'label' => 'Starter Pages',
                    //     'icon' => 'tachometer-alt',
                    //     'badge' => '<span class="right badge badge-info">2</span>',
                    //     'items' => [
                    //         ['label' => 'Active Page', 'url' => ['site/index'], 'iconStyle' => 'far'],
                    //         ['label' => 'Inactive Page', 'iconStyle' => 'far'],
                    //     ]
                    // ],
                    ['label' => 'Dashboard', 'icon' => 'tachometer-alt', 'url' => ['site/index']],
                    ['label' => 'Data Pemeriksaan', 'header' => true],
                    in_array($this->context->action->id, ["periksa", 'index-pasien']) ? ['label' => 'Pasien - ' . $this->params['kode'],  'icon' => 'stream', 'url' => ['/pasien-baru/periksa', 'id' => $this->params['kode']]] :  ['label' => 'Pasien', 'url' => ['/pasien-baru/periksa'], 'icon' => 'users'],
                    in_array($this->context->action->id, ["periksa", 'index-pasien']) ? ['label' => 'Data Pelayanan - ' . $this->params['kode'],  'icon' => 'stream', 'url' => ['/data-pelayanan/index-pasien', 'kode' => $this->params['kode']]] : ['label' => 'Data Pelayanan',  'icon' => 'stream', 'url' => ['/data-pelayanan/index']],
                    ['label' => 'Pemeriksaan', 'header' => true],
                    in_array($this->context->action->id, ["periksa", 'index-pasien']) ? ['label' => 'Hasil Lab - ' . $this->params['kode'],  'icon' => 'vials', 'url' => ['/hasil-lab/index-pasien', 'kode' => $this->params['kode']]] : ['label' => 'Hasil Lab',  'icon' => 'vials', 'url' => ['/hasil-lab/index']],
                    in_array($this->context->action->id, ["periksa", 'index-pasien']) ? ['label' => 'Hasil Radiologi - ' . $this->params['kode'],  'icon' => 'x-ray', 'url' => ['/hasil-radiologi/index-pasien', 'kode' => $this->params['kode']]] : ['label' => 'Hasil Radiologi',  'icon' => 'x-ray', 'url' => ['/hasil-radiologi/index']],


                    ['label' => 'Laporan', 'header' => true],
                    ['label' => 'Cetak Tindakan Saya', 'icon' => 'bars',],
                    ['label' => 'Cetak PKTK', 'icon' => 'file-medical-alt'],
                    ['label' => 'Cetak Sertifikat', 'icon' => 'file-medical-alt',],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
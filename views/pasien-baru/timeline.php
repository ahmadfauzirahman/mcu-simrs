<?php

use yii\helpers\Url;

$width = 20;

?>

<style>
    .progress {
        height: 35px !important;
    }

    .progress .active {
        background-color: #ffc04a;
        font-weight: bolder;
        font-size: x-small;
        border-radius: 1px;
    }

    .progress .inactive {
        background-color: #ffc04a;
        font-weight: bolder;
        font-size: x-small;
        border-radius: 1px;

    }

    .progress-bar {
        padding: 3px;
    }

    .progress a:hover,
    .progress a:active {
        text-decoration: none;
        color: #000;
    }
</style>
<div class="data-pribadi-create">

    <div class="progress">
        <a href="<?= Url::to(
                        [
                            '/pasien-baru/lakukan-pelayanan',
                            'id' => $id,
                            'no_register' => $no_register,
                            'paket' => $paket
                        ],
                    ) ?>" class="active progress-bar progress-bar-warning  progress-daftar" style="width: <?php echo $width; ?>%" title="Belum">
            PEMERIKSAAN FISIK </span>
        </a>
        <a href="<?= Url::to(
                        [
                            '/pasien-baru/lakukan-pelayanan-tht',
                            'id' => $id,
                            'no_register' => $no_register,
                            'paket' => $paket
                        ],
                    ) ?>" class="inactive progress-bar progress-bar-warning  progress-daftar" style="width: <?php echo $width; ?>%" title="Belum">
            THT </span>
        </a>
        <a href="<?= Url::to(
                        [
                            '/pasien-baru/lakukan-pelayanan-mata',
                            'id' => $id,
                            'no_register' => $no_register,
                            'paket' => $paket
                        ],
                    ) ?>" class="inactive progress-bar progress-bar-warning  progress-daftar" style="width: <?php echo $width; ?>%" title="Belum">
            MATA </span>
        </a>
        <a href="<?= Url::to(
                        [
                            '/pasien-baru/lakukan-pelayanan-gigi',
                            'id' => $id,
                            'no_register' => $no_register,
                            'paket' => $paket
                        ],
                    ) ?>" class="inactive progress-bar progress-bar-warning  progress-daftar" style="width: <?php echo $width; ?>%" title="Belum">
            GIGI </span>
        </a>
        <a href="<?= Url::to(
                        [
                            '/pasien-baru/lakukan-pelayanan-ekg',
                            'id' => $id,
                            'no_register' => $no_register,
                            'paket' => $paket
                        ],
                    ) ?>" class="inactive progress-bar progress-bar-warning  progress-daftar" style="width: <?php echo $width; ?>%" title="Belum">
            EKG </span>
        </a>
        <a href="<?= Url::to(
                        [
                            '/pasien-baru/lakukan-pelayanan-treadmill',
                            'id' => $id,
                            'no_register' => $no_register,
                            'paket' => $paket
                        ],
                    ) ?>" class="inactive progress-bar progress-bar-warning  progress-daftar" style="width: <?php echo $width; ?>%" title="Belum">
            TREADMILL </span>
        </a>
     

    </div>


</div>
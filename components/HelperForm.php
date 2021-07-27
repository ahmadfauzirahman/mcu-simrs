<?php
/*
 * @Author: Dicky Ermawan S., S.T., MTA 
 * @Email: wanasaja@gmail.com 
 * @Web: dickyermawan.github.io 
 * @Linkedin: linkedin.com/in/dickyermawan 
 * @Date: 2021-03-14 13:55:55 
 * @Last Modified by: Dicky Ermawan S., S.T., MTA
 * @Last Modified time: 2021-05-30 22:59:14
 */


namespace app\components;

use app\models\pendaftaran\Pendaftaran;
use Yii;
use yii\helpers\Json;
use yii\helpers\Url;

class HelperForm
{
    const TERDAFTAR = 0;
    const AKTIF = 1;
    const BLOKIR = 2;

    public static function initialPreview($path, $data)
    {
        $data = Json::decode($data, $asArray = true);
        if (!$data)
            return [];

        $iP = [];
        foreach ($data as $key => $value) {
            array_push(
                $iP,
                Url::to('@web/' . $path . '/' . $value)
            );
        }
        return $iP;
    }

    public static function initialPreviewConfig($path, $url, $data, $column)
    {
        $data = Json::decode($data, $asArray = true);
        if (!$data)
            return [];

        $iP = [];
        foreach ($data as $key => $value) {
            array_push(
                $iP,
                [
                    'type' => 'image',
                    'url' => Url::to([$url, 'id' => $value, 'column' => $column]),
                    'downloadUrl' => Url::to('@web/' . $path . '/' . $value),
                    'caption' => $value,
                    'showRemove' => false,
                    'showZoom' => false,
                    'key' => $value,
                ]
            );
        }
        return $iP;
    }
}

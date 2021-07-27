<?php

namespace app\modules\api\controllers;

use app\models\Pasien;
use app\models\PasienBaru;

class PasienApiController extends ControllerBase
{
    public function actionIndex()
    {

        $pasienSimrsSql = Pasien::find()->limit(3)->all();
        echo '<pre>';
        echo '1';
        var_dump($pasienSimrsSql);
        exit;
        // return $this->render('index');
    }

    public function actionCariPasien($q = null, $id = null)
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $out = ['results' => ['id' => '', 'text' => '']];
        if (!is_null($q)) {
            $data = PasienBaru::find()->select(['kode as id', 'concat("kode",\' / \',"nama",\' / Tanggal Lahir: \',"tgl_lahir") as text'])
                ->where(['ilike', 'nama', '%' . $q . '%', false])
                ->asArray()
                ->all();
            $out['results'] = array_values($data);
        } elseif ($id > 0) {
            $out['results'] = ['id' => $id, 'text' => PasienBaru::find($id)->medrec_no];
        }
        return $out;
    }

}

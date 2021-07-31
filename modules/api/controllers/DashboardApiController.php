<?php

namespace app\modules\api\controllers;

use app\models\Pasien;
use app\models\PasienBaru;
use app\models\PemeriksaanFisik;
use Yii;
use yii\web\Response;

class DashboardApiController extends ControllerBase
{
    public function actionIndex()
    {

        // $pasienSimrsSql = Pasien::find()->limit(3)->all();
        // echo '<pre>';
        // echo '1';
        // var_dump($pasienSimrsSql);
        // exit;
        // return $this->render('index');
    }

    public function actionDiagnosisKerja($form_date = null, $to_date = null)
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $labelKu = 'Diagnosis Kerja';
        $jumlahDiagnosaKerjaFIT = PemeriksaanFisik::find()
            ->select([
                'count(id_m_pemeriksaan_fisik) as jumlah'
            ])
            ->where(['like', 'kategori_kesehatan', 'FIT'])->count();

        $jumlahDiagnosaKerjaFITWITHNOTE = PemeriksaanFisik::find()
            ->select([
                'count(id_m_pemeriksaan_fisik) as jumlah'
            ])
            ->where(['like', 'kategori_kesehatan', 'FIT WITH NOTE'])->count();

        $jumlahDiagnosaKerjaUNFIT = PemeriksaanFisik::find()
            ->select([
                'count(id_m_pemeriksaan_fisik) as jumlah'
            ])
            ->where(['like', 'kategori_kesehatan', 'UNFIT'])->count();

        $jumlahDiagnosaKerjaTEMPORARYUNFIT = PemeriksaanFisik::find()
            ->select([
                'count(id_m_pemeriksaan_fisik) as jumlah'
            ])
            ->where(['like', 'kategori_kesehatan', 'TEMPORARYUN FIT'])->count();

            $labels = [
                'FIT',
                'FIT WITH NOTE',
                'UNFIT',
                'TEMPORARY UN FIT',
            ];
            $data = [
                (float) $jumlahDiagnosaKerjaFIT,
                (float) $jumlahDiagnosaKerjaFITWITHNOTE,
                (float) $jumlahDiagnosaKerjaUNFIT,
                (float) $jumlahDiagnosaKerjaTEMPORARYUNFIT,
            ];
    
    
            $warnaKu = [
                '#d63031',
                '#fdcb6e',
                '#00b894',
                '#0984e3',
                '#6c5ce7',
                '#e84393',
                '#00cec9',
                '#2d3436',
                '#78e08f',
                '#e55039'
            ];
            shuffle($warnaKu);
    
            $pieData = [
                'labels' => $labels,
                'datasets' => [
                    [
                        'data' => $data,
                        'backgroundColor' => [
                            $warnaKu[0],
                            $warnaKu[1],
                            $warnaKu[2],
                        ],
                    ]
                ]
            ];
    
            return ($pieData);
    }

    // public function actionCariPasien($q = null, $id = null)
    // {
    //     \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    //     $out = ['results' => ['id' => '', 'text' => '']];
    //     if (!is_null($q)) {
    //         $data = PasienBaru::find()->select(['kode as id', 'concat("kode",\' / \',"nama",\' / Tanggal Lahir: \',"tgl_lahir") as text'])
    //             ->where(['ilike', 'nama', '%' . $q . '%', false])
    //             ->asArray()
    //             ->all();
    //         $out['results'] = array_values($data);
    //     } elseif ($id > 0) {
    //         $out['results'] = ['id' => $id, 'text' => PasienBaru::find($id)->medrec_no];
    //     }
    //     return $out;
    // }
}

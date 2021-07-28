<?php

namespace app\controllers;

use app\models\DataPelayananSearch;
use app\models\PaketMcu;
use app\models\Pasien;
use Yii;
use app\models\PasienBaru;
use app\models\PasienBaruSearch;
use app\models\PemeriksaanFisik;
use app\models\spesialis\McuPenatalaksanaanMcu;
use app\models\spesialis\McuSpesialisAudiometri;
use app\models\spesialis\McuSpesialisMata;
use app\models\spesialis\McuSpesialisTht;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PasienBaruController implements the CRUD actions for PasienBaru model.
 */
class PasienBaruController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all PasienBaru models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PasienBaruSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PasienBaru model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new PasienBaru model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PasienBaru();

        if ($model->load(Yii::$app->request->post())) {

            return $this->redirect(['view', 'id' => $model->kode]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PasienBaru model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->kode]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PasienBaru model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionPeriksa($id = null)
    {

        if (is_null($id)) {
            $model = new PasienBaru();
            $this->view->params['kode'] = null;
        } else {
            $model = PasienBaru::findOne(['kode' => $id]);
            $this->view->params['kode'] = $model->kode;
        }

        $searchModel = new DataPelayananSearch();
        $dataProvider = $searchModel->searchPasien(Yii::$app->request->queryParams, $id);
        return $this->render('periksa', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionLakukanPelayanan($id, $no_register, $paket)
    {
        $paketTindakan = PaketMcu::findOne(['kode' => $paket]);

        $pasien = PasienBaru::findOne(['kode' => $id]);

        $model = PemeriksaanFisik::find()
            ->where(['no_rekam_medik' => $id])
            ->andWhere(['no_daftar' => $no_register])
            ->one();

        if (is_null($model)) {
            $model = new PemeriksaanFisik();
        }
        // var_dump($model);
        // exit;
        return $this->render('lakukan-pemeriksaan', [
            'paketTindakan' => $paketTindakan,
            'pasien' => $pasien,
            'model' => $model,
            'paket' => $paket,
            'id' => $id,
            'no_register' => $no_register,
        ]);
    }


    public function actionLakukanPelayananTht($id, $no_register, $paket)
    {
        $pasien = PasienBaru::findOne(['kode' => $id]);
        $paketTindakan = PaketMcu::findOne(['kode' => $paket]);
        $modelPenata = new McuPenatalaksanaanMcu();
        $model = McuSpesialisTht::find()
            ->where(['no_rekam_medik' => $id])
            ->andWhere(['no_daftar' => $no_register])
            ->one();

        if (is_null($model)) {
            $model = new McuSpesialisTht();
            $modelAudiometri = new McuSpesialisAudiometri();
        } else {
            // $modelPenataList = McuPenatalaksanaanMcu::find()
            // ->where(['jenis' => 'spesialis_tht_berbisik'])
            // ->andWhere(['id_fk' => $model->id_spesialis_tht_berbisik]);
        }
        return $this->render('lakukan-pelayanan-tht', [
            'paket' => $paket,
            'id' => $id,
            'no_register' => $no_register,
            'pasien' => $pasien,
            'paketTindakan' => $paketTindakan,
            'model' => $model,
            'modelAudiometri' => $modelAudiometri,
            'modelPenata' => $modelPenata,
            // 'modelPenataList' => $modelPenataList

        ]);
    }

    public function actionLakukanPelayananMata($id, $no_register, $paket)
    {
        $pasien = PasienBaru::findOne(['kode' => $id]);
        $paketTindakan = PaketMcu::findOne(['kode' => $paket]);
        $modelPenata = new McuPenatalaksanaanMcu();
        $model = McuSpesialisMata::find()
            ->where(['no_rekam_medik' => $id])
            ->andWhere(['no_daftar' => $no_register])
            ->one();

        if (is_null($model)) {
            $model = new McuSpesialisMata();
            // $modelAudiometri = new McuSpesialisAudiometri();
        } else {
            // $modelPenataList = McuPenatalaksanaanMcu::find()
            // ->where(['jenis' => 'spesialis_tht_berbisik'])
            // ->andWhere(['id_fk' => $model->id_spesialis_tht_berbisik]);
        }
        return $this->render('lakukan-pelayanan-mata', [
            'paket' => $paket,
            'id' => $id,
            'no_register' => $no_register,
            'pasien' => $pasien,
            'paketTindakan' => $paketTindakan,
            'model' => $model,
            'modelPenata' => $modelPenata,
            // 'modelPenataList' => $modelPenataList

        ]);
    }

    public function actionLakukanPelayananGigi($id, $no_register, $paket)
    {
        return $this->render('lakukan-pelayanan-gigi');
    }

    /**
     * Finds the PasienBaru model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return PasienBaru the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PasienBaru::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

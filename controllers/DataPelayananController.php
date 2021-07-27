<?php

namespace app\controllers;

use Yii;
use app\models\DataPelayanan;
use app\models\DataPelayananSearch;
use app\models\PemeriksaanFisik;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DataPelayananController implements the CRUD actions for DataPelayanan model.
 */
class DataPelayananController extends Controller
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
     * Lists all DataPelayanan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DataPelayananSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Lists all DataPelayanan models.
     * @return mixed
     */
    public function actionIndexPasien($kode = null)
    {
        $searchModel = new DataPelayananSearch();
        $dataProvider = $searchModel->searchPasien(Yii::$app->request->queryParams, $kode);

        // data pelayanan 

        $dataPelayanan = DataPelayanan::find();

        $count = $dataPelayanan->where(['no_rekam_medik' => $kode])->count();
        $all = [];
        
        if (!is_null($kode)) {


            $all = $dataPelayanan->alias('d')->select([
                'd.tanggal_pemeriksaan',
                'pm.kategori_kesehatan',
                'pm.no_rekam_medik as no_rm',
                'pm.diagnosis_kerja',
                'pm.icdt10',
            ])->leftJoin(PemeriksaanFisik::tableName() . " as pm", "pm.no_daftar=d.no_registrasi")->where(['pm.no_rekam_medik' => $kode])->asArray()->all();
        }

        // var_dump($count);
        // exit;
        $this->view->params['kode'] = $kode;

        return $this->render('index-pasien', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'count' => $count,
            'all' =>  $all
        ]);
    }

    /**
     * Displays a single DataPelayanan model.
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
     * Creates a new DataPelayanan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DataPelayanan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_data_pelayanan]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DataPelayanan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_data_pelayanan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DataPelayanan model.
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

    /**
     * Finds the DataPelayanan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return DataPelayanan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DataPelayanan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

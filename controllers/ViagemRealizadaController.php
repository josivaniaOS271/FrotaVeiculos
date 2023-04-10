<?php

namespace app\controllers;

use app\models\viagemrealizada;
use app\models\ViagemRealizadaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ViagemRealizadaController implements the CRUD actions for viagemrealizada model.
 */
class ViagemRealizadaController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all viagemrealizada models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ViagemRealizadaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single viagemrealizada model.
     * @param int $veiculos_id Veiculos ID
     * @param int $motoristas_id Motoristas ID
     * @param int $viagens_id Viagens ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($veiculos_id, $motoristas_id, $viagens_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($veiculos_id, $motoristas_id, $viagens_id),
        ]);
    }

    /**
     * Creates a new viagemrealizada model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new viagemrealizada();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'veiculos_id' => $model->veiculos_id, 'motoristas_id' => $model->motoristas_id, 'viagens_id' => $model->viagens_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing viagemrealizada model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $veiculos_id Veiculos ID
     * @param int $motoristas_id Motoristas ID
     * @param int $viagens_id Viagens ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($veiculos_id, $motoristas_id, $viagens_id)
    {
        $model = $this->findModel($veiculos_id, $motoristas_id, $viagens_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'veiculos_id' => $model->veiculos_id, 'motoristas_id' => $model->motoristas_id, 'viagens_id' => $model->viagens_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing viagemrealizada model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $veiculos_id Veiculos ID
     * @param int $motoristas_id Motoristas ID
     * @param int $viagens_id Viagens ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($veiculos_id, $motoristas_id, $viagens_id)
    {
        $this->findModel($veiculos_id, $motoristas_id, $viagens_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the viagemrealizada model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $veiculos_id Veiculos ID
     * @param int $motoristas_id Motoristas ID
     * @param int $viagens_id Viagens ID
     * @return viagemrealizada the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($veiculos_id, $motoristas_id, $viagens_id)
    {
        if (($model = viagemrealizada::findOne(['veiculos_id' => $veiculos_id, 'motoristas_id' => $motoristas_id, 'viagens_id' => $viagens_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

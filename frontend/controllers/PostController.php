<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Post;
use frontend\models\PostSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Post model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Post();
        //$form->field($model, 'title')->textInput(['maxlength' => true])
        //$form->field($model, 'slug')->textInput(['maxlength' => true])
        //$form->field($model, 'content')->textarea(['rows' => 6])
        //$form->field($model, 'tags')->textInput(['maxlength' => true])
        //$form->field($model, 'number_of_views')->textInput()
        //$form->field($model, 'number_of_likes')->textInput()
        //$form->field($model, 'number_of_dislikes')->textInput()
        //$form->field($model, 'number_of_comments')->textInput()
        //$form->field($model, 'created_date')->textInput()
        //$form->field($model, 'is_allow_comment')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => ''])
        //$form->field($model, 'is_private')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => ''])
        //$form->field($model, 'status')->dropDownList([ 'publish' => 'Publish', 'pending' => 'Pending', 'draft' => 'Draft', ], ['prompt' => ''])

        if ($model->load(Yii::$app->request->post())) {
            //print_r($model); exit();
            $model->topic_id = 4;
            $model->user_id = Yii::$app->user->identity->id;
            $model->title = $model->content;
            $model->slug = str_replace(" ", "_", strtolower($model->content));
            $model->tags = "sample, tags";
            $model->number_of_views = 0;
            $model->number_of_likes = 0;
            $model->number_of_dislikes = 0;
            $model->number_of_comments = 0;
            $model->created_date = date('Y-m-d h:m:s');
            $model->is_allow_comment = 'true';
            $model->is_private = 'false';
            $model->status = 'publish';
            if($model->save())
            {
                echo "success";
            }
            else
            {
                echo "failed";
            }
            //return $this->redirect(['view', 'id' => $model->post_id]);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->post_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Post model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

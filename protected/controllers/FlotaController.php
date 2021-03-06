<?php

class FlotaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','Aprobar'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Flota;
                

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if($this->getPost('Flota') != null)
		{
			$model->setAttributes($this->getPost('Flota'));
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_flota));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if($this->getPost('Flota') != null)
		{
			$model->setAttributes($this->getPost('Flota'));
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_flota));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if($this->getGet('ajax')==null)
			$this->redirect($this->getPost('returnUrl')!=null ? $this->getPost('returnUrl') : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Flota');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
        public function actionAprobar($id)
	{
		$model = Flota::model()->findByPk($id);
                $model->sobrecupoApobado=true;
                if($model->save()){
                    $this->redirect('admin');
                }
	}
	public function actionAdmin()
	{
		$model=new Flota('search');
		$model->unsetAttributes();  // clear any default values
                $this->asignarSobrecupo();
		if($this->getPost('Flota') != null)
			$model->setAttribute($this->getPost('Flota'));

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Flota the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Flota::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Flota $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if($this->getPost('ajax')!=null && $this->getPost('ajax')==='flota-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
         protected function asignarSobrecupo()
        {
             $sql = 'SELECT cl.id_cliente , cupoAprobado FROM credito cr , cliente cl WHERE cr.id_cliente=cl.id_cliente;';
             $rows = Yii::app()->db->createCommand($sql)->queryAll();
             
             //var_dump($rows);
             
             $result = '';
             if(!empty($rows))
                foreach ($rows as $row){
                 $result = $row['id_cliente'];
                 //$sql2 ='UPDATE Flota SET sobrecupoAsignado=89 WHERE id_cliente ='.$result.';';  
                 //$rows = Yii::app()->db->createCommand($sql2)->queryAll(); 
                 //var_dump($row['id_cliente']);                 
                 //var_dump($result);
                 //echo "$result";
            }      
            
            return $result;  
        }
}

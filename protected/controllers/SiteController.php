<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        if (!Yii::app()->user->isGuest) {
            $this->validarAlarma();
        } else {
            $this->redirect('site/Login');
        }
    }

    private function validarAlarma() {
        if (Yii::app()->session['Rol'] == "Cliente") {
            $usuario = Yii::app()->session['Usuario'];
            $credito = $usuario->getRelated('creditos');
            $credito = $credito[0];
            $flotas = $usuario->getRelated('flotas');
            $flota = $flotas[0];
            $taxis = $flota->getRelated('taxis');
            $restante = 0;
            foreach ($taxis as $taxi) {
                $restante+=$taxi->saldoCupo;
            }
            if ($credito->cupoAprobado * (0.1) < $restante) {
                $mensaje = "Le queda menos del 10% del cupo aprobado.";
                $alarma = 1;
            } else {
                $mensaje = "Bienvenido a CrediTaxi";
                $alarma = 0;
            }
        } else {
            $mensaje = "Bienvenido a CrediTaxi";
            $alarma = 0;
        }
        $this->render('home', array('mensaje' => $mensaje, 'alarma' => $alarma));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;
        // collect user input data
        if (Yii::app()->user->isGuest) {
            if ($this->getPost('LoginForm') != null) {
                $model->setAttributes($this->getPost('LoginForm'));
                // validate user input and redirect to the previous page if valid
                $validate = $model->validate();
                $login = $model->login();
                if ($validate && $login) {
                    if (Yii::app()->session['Usuario']->Activo==1)
                        $this->redirect(Yii::app()->user->returnUrl);
                    else
                        $this->redirect('Logout');
                }
            }
            // display the login form
            $this->render('login', array('model' => $model));
        }else {
            $this->redirect(Yii::app()->homeUrl);
        }
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect("login");
    }

}

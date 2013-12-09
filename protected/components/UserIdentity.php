<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$users=array(
			// username => password
		);
                $model = Usuario::model()->findAll();
                foreach ($model as $val) {
                    $users[$val->idUsuario]=$val->clave;
                }
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
                        $usuario=  Usuario::model()->findByPk($this->username);
                        $rol =$usuario->getRelated("idRol0");
                        Yii::app()->session['Rol']=$rol->nombreRol;
                        if($rol->nombreRol=="Cliente"){
                            Yii::app()->session['Usuario']=  Cliente::model()->findByPk($usuario->idUsuario);
                            if(!Yii::app()->session['Usuario']->Activo)
                                Yii::app()->session['Usuario']==null;
                        }else if($rol->nombreRol=="Administrador"){
                            Yii::app()->session['Usuario']= Administrador::model()->findByPk($usuario->idUsuario);
                        }else if($rol->nombreRol=="Operario"){
                            Yii::app()->session['Usuario']= Vendedor::model()->findByPk($usuario->idUsuario);
                        }else{
                            Yii::app()->session['Usuario']= null;
                        }
			$this->errorCode=self::ERROR_NONE;
                }
		return !$this->errorCode;
	}
}
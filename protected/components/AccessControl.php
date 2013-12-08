<?php

class AccessControl {

    public function getMenuItems($idUsuario) {
        $menu=array();
        array_push($menu, array('label' => 'Administrar Flota', 'items' => $this->getAdminFlotaItems(), 'visible' => !Yii::app()->user->isGuest));
        array_push($menu, array('label' => 'Administrar Gasolinera', 'items' => $this->getAdminGasolineraItems(), 'visible' => !Yii::app()->user->isGuest));
        array_push($menu, array('label' => 'Parametrizar Aplicacion', 'items' => $this->getAdminAplicacionItems(), 'visible' => !Yii::app()->user->isGuest));
        array_push($menu, array('label' => 'Realizar Venta', 'url' =>array('/Transaccion/Admin') , 'visible' => !Yii::app()->user->isGuest));
        array_push($menu, array('label' => 'Credito', 'url' =>array('/Credito/Admin') , 'visible' => !Yii::app()->user->isGuest));
        foreach ($this->getBasicItems() as $item){
            array_push($menu, $item);
        }
        return $menu;
    }
    private function getAdminFlotaItems(){
        $item = array();
        array_push($item,array('label' => 'Conductor', 'url' => array('/Conductor/admin')));
        array_push($item,array('label' => 'Taxi', 'url' => array('/Taxi/admin')));
        array_push($item,array('label' => 'Flota', 'url' => array('/flota/admin')));
        return $item;
    }
    private function getAdminGasolineraItems(){
        $item = array();
        array_push($item,array('label' => 'Taxi', 'url' => array('/Taxi/admin')));
        array_push($item,array('label' => 'Cliente', 'url' => array('/Cliente/admin')));
        return $item;
    }
    private function getAdminAplicacionItems(){
        $item = array();
        array_push($item,array('label' => 'Combustible', 'url' => array('/Producto/Combustible')));
        array_push($item,array('label' => 'Lavada', 'url' => array('/Producto/Lavada')));
        return $item;
    }
    private function getBasicItems() {
        $items=array();
        array_push($items, array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest));
        array_push($items, array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest));
        return $items;
    }

}

?>

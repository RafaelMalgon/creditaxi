<?php

class AccessControl {

    public function getMenuItems($idUsuario) {
        $menu = array();
        if (Yii::app()->session['Rol'] == "Cliente") {
            array_push($menu, array('label' => 'Administrar Flota', 'items' => $this->getAdminFlotaItemsCliente(), 'visible' => !Yii::app()->user->isGuest));
        } else if (Yii::app()->session['Rol'] == "Administrador") {
            array_push($menu, array('label' => 'Administrar Flota', 'items' => $this->getAdminFlotaItemsAdministrador(), 'visible' => !Yii::app()->user->isGuest));
            array_push($menu, array('label' => 'Administrar Gasolinera', 'items' => $this->getAdminGasolineraItems(), 'visible' => !Yii::app()->user->isGuest));
            array_push($menu, array('label' => 'Parametrizar Aplicacion', 'items' => $this->getAdminAplicacionItems(), 'visible' => !Yii::app()->user->isGuest));
            array_push($menu, array('label' => 'Credito', 'url' => array('/Credito/Admin'), 'visible' => !Yii::app()->user->isGuest));
        } else if (Yii::app()->session['Rol'] == "Operario") {
            array_push($menu, array('label' => 'Realizar Venta', 'url' => array('/Transaccion/Admin'), 'visible' => !Yii::app()->user->isGuest));
        }
        foreach ($this->getBasicItems() as $item) {
            array_push($menu, $item);
        }
        return $menu;
    }

    private function getAdminFlotaItemsCliente() {
        $item = array();
        array_push($item, array('label' => 'Taxi', 'url' => array('/Taxi/admin')));
        return $item;
    }
    private function getAdminFlotaItemsAdministrador() {
        $item = array();
        array_push($item, array('label' => 'Conductor', 'url' => array('/Conductor/admin')));
        return $item;
    }

    private function getAdminGasolineraItems() {
        $item = array();
        array_push($item, array('label' => 'Cliente', 'url' => array('/Cliente/admin')));
        array_push($item, array('label' => 'Aprobar Sobrecupo', 'url' => array('/flota/admin')));
        return $item;
    }

    private function getAdminAplicacionItems() {
        $item = array();
        array_push($item, array('label' => 'Combustible', 'url' => array('/Producto/Combustible')));
        array_push($item, array('label' => 'Lavada', 'url' => array('/Producto/Lavada')));
        return $item;
    }

    private function getBasicItems() {
        $items = array();
        array_push($items, array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest));
        array_push($items, array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest));
        return $items;
    }

}

?>

<?php
require_once 'cuenta.php';

/**
 * Código fuente desarrollado por Franklin Moreno e Hiram González
 * Contacto:
 *  hiramjgonzalez98@gmail.com
 *  cfranklinmoreno@gmail.com
 */

abstract class professor_options extends cuenta {

    public function __construct($idCuenta, $contraseña){

        parent::__construct($idCuenta, $contraseña);

    }

    /*
     * Inicio de los metodos get.
     */
    public function getNombre(){

        $sql = "SELECT ".NAME_PRO." FROM ".TABLE_PROFESSOR." WHERE ".ID_PRO." = :codigo";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->idCuenta));

        return $resultado->fetch()[NAME_PRO];

    }

    public function getApellido(){

        $sql = "SELECT ".LNAME_PRO." FROM ".TABLE_PROFESSOR." WHERE ".ID_PRO." = :codigo";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":codigo"=>$this->idCuenta));

        return $resultado->fetch()[LNAME_PRO];

    }


    /*
     * Inicio de los metodos set.
     */

    public function setNombre($nombre){

        $sql = "UPDATE ".TABLE_PROFESSOR. " SET ".NAME_PRO." = :campo WHERE ".ID_PRO." =  :id ";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":campo"=>$nombre, ":id"=>$this->idCuenta));

    }

    public function setApellido($apellido){

        $sql = "UPDATE ".TABLE_PROFESSOR. " SET ".LNAME_PRO." = :campo WHERE ".ID_PRO." =  :id ";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":campo"=>$apellido, ":id"=>$this->idCuenta));

    }


    /**
     * @deprecated
     */
    public function establecer_id()
    {
        parent::establecer_id(); // TODO: Change the autogenerated stub
    }

    /**
     * @deprecated
     */
    public function login()
    {
        return parent::login(); // TODO: Change the autogenerated stub
    }

    /**
     * @deprecated
     */
    public function actContra()
    {
        return parent::actContra(); // TODO: Change the autogenerated stub
    }

    /**
     * @deprecated
     */
    public static function recuperar()
    {
        return parent::recuperar(); // TODO: Change the autogenerated stub
    }

    /**
     * @deprecated
     */
    public function comprobar_contra()
    {
        return parent::comprobar_contra(); // TODO: Change the autogenerated stub
    }

    /**
     * @deprecated
     */
    public function sumar($numero, $tabla, $codigo, $referencia)
    {
        parent::sumar($numero, $tabla, $codigo, $referencia); // TODO: Change the autogenerated stub
    }

    /**
     * @deprecated
     */
    public function alumn_search($id){

    }

}
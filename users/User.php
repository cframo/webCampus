<?php


/**
 * Clase abstracta user, proporciona todo el manejo con la base de datos,
 *  sirviendo como base para las clases hijas.
 * @author nookamb
 */

require_once '../Config/cuenta.php';

abstract class User extends cuenta {

    protected $campoTabla ;

    public function __construct($idCuenta, $contraseña){

        parent::__construct($idCuenta, $contraseña);
        $this->view_student();
        $this->campoTabla = "view_".$this->idCuenta;

    }

    private function view_student(){

        $sql = "CREATE OR REPLACE VIEW view_".$this->idCuenta." AS SELECT * FROM alumnos WHERE ".ID_AC3." = :id";

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute(array(":id"=>$this->idCuenta));


    }

    public function drop_view(){

        $sql = "DROP VIEW IF EXISTS view_".$this->idCuenta;

        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        echo $sql;

    }


    /*
     * Inicio de los gets, tabla alumnos
     */
    
    public function getNacionalidad() {
        
        $sql = "SELECT ".NAOTY." FROM view_".$this->idCuenta." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[NAOTY];
        
    }

    public function getCedula() {
        
        $sql = "SELECT ".ID_STU." FROM view_".$this->idCuenta." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[ID_STU];
        
    }

    public function getCodigoCa() {
        
        $sql = "SELECT ".CAREER." FROM view_".$this->idCuenta." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[CAREER];
        
    }

    public function getCodigoTri() {
        
        $sql = "SELECT ".STU_TRI." FROM view_".$this->idCuenta." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[STU_TRI];
        
    }

    public function getNombre() {
        
        $sql = "SELECT ".NAME_STU." FROM view_".$this->idCuenta." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[NAME_STU];
    }

    public function getNombre2() {
        
        $sql = "SELECT ".NAME_STU2." FROM view_".$this->idCuenta." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[NAME_STU2];
        
    }

    public function getApellido() {
        
        $sql = "SELECT ".LNAME_STU." FROM view_".$this->idCuenta." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[LNAME_STU];
        
    }

    public function getApellido2() {
        
        $sql = "SELECT ".LNAME_STU2." FROM view_".$this->idCuenta." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[LNAME_STU2];
    }

    public function getCorreo() {
        
        $sql = "SELECT ".EMAIL." FROM view_".$this->idCuenta." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[EMAIL];
        
    }

    public function getMovil() {
        
        $sql = "SELECT ".CELL." FROM view_".$this->idCuenta." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[CELL];
        
    }

    public function getCasa() {
        
        $sql = "SELECT ".PHONE." FROM view_".$this->idCuenta." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[PHONE];
        
    }

    public function getDireccion() {
        
        $sql = "SELECT ".ADDRESS." FROM view_".$this->idCuenta." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[ADDRESS];
        
    }
    
    public function getTurno(){
        
        $sql = "SELECT ".TURN_STU." FROM view_".$this->idCuenta." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[TURN_STU];
        
    }
    
    public function getLapso() {
        
        $sql = "SELECT ".LAP_ACT." FROM view_".$this->idCuenta." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[LAP_ACT];
        
    }
    
    public function getLapsoOld() {
        
        $sql = "SELECT ".LAP_OLD." FROM view_".$this->idCuenta." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[LAP_OLD];
        
    }
    
    public function getTrimester() {
        
        $sql = "SELECT ".STU_TRI." FROM view_".$this->idCuenta." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[STU_TRI];
        
    }
    
    public function getTriAprob(){
        
        $sql = "SELECT ".TRI_PASS." FROM view_".$this->idCuenta." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[TRI_PASS];
        
    }
    
    public function getUca() {
        
        $sql = "SELECT ".UNIT_A." FROM view_".$this->idCuenta." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[UNIT_A];
         
    }
    
    public function getIndiceAct() {
        
        $sql = "SELECT ".NOTES_LST." FROM view_".$this->idCuenta." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[NOTES_LST];
        
    }
    
    public function getIndiceOld() {
        
        $sql = "SELECT ".NOTES_ALL." FROM view_".$this->idCuenta." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[NOTES_ALL];
        
    }
    
    public function getUcc() {
        
        $sql = "SELECT ".UNIT_V." FROM view_".$this->idCuenta." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[UNIT_V];
        
    }
    
    public function getStatus() {
        
        $sql = "SELECT ".STATUS_STU." FROM view_".$this->idCuenta." WHERE ".ID_ACCOUNT.
                "= ".$this->idCuenta;
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
        return $resultado->fetch()[STATUS_STU];
        
    }

    /*
     * Inicio de los sets, tabla alumnos
     */

    public function setNacionalidad($nacionalidad) {
        
        $sql = "UPDATE view_".$this->idCuenta." SET ".NAOTY." = '".$nacionalidad.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }

    public function setCedula($cedula) {
        
        $sql = "UPDATE view_".$this->idCuenta." SET ".ID_STU." = '".$cedula.
                "' WHERE ".ID_AC3." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
    }

    public function setCodigoCa($codigoCa) {
        
        $sql = "UPDATE view_".$this->idCuenta." SET ".CAREER." = '".$codigoCa.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }

    public function setCodigoTri($codigoTri) {
        
        $sql = "UPDATE view_".$this->idCuenta." SET ".STU_TRI." = '".$codigoTri.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }

    public function setNombre($nombre) {
        
        $sql = "UPDATE view_".$this->idCuenta." SET ".NAME_STU." = '".$nombre.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }

    public function setNombre2($nombre2) {
        
        $sql = "UPDATE view_".$this->idCuenta." SET ".NAME_STU2." = '".$nombre2.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }

    public function setApellido($apellido) {
        
        $sql = "UPDATE view_".$this->idCuenta." SET ".LNAME_STU." = '".$apellido.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }

    public function setApellido2($apellido2) {
        
        $sql = "UPDATE view_".$this->idCuenta." SET ".LNAME_STU2." = '".$apellido2.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }

    public function setCorreo($correo) {
        
        $sql = "UPDATE view_".$this->idCuenta." SET ".EMAIL." = '".$correo.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }

    public function setMovil($movil) {
        
        $sql = "UPDATE view_".$this->idCuenta." SET ".CELL." = '".$movil.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }

    public function setCasa($casa) {
        
        $sql = "UPDATE view_".$this->idCuenta." SET ".PHONE." = '".$casa.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }

    public function setDireccion($direccion) {
        
        $sql = "UPDATE view_".$this->idCuenta." SET ".ADDRESS." = '".$direccion.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }
    
    public function setTurno($turno){
        
        $sql = "UPDATE view_".$this->idCuenta." SET ".TURN_STU." = '".$turno.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }
    
    public function setLapsoAct($LapsoAct) {
        
        $sql = "UPDATE view_".$this->idCuenta." SET ".LAP_ACT." = '".$LapsoAct.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }
    
    public function setLapsoOld($lapsoOld) {
        
        $sql = "UPDATE view_".$this->idCuenta." SET ".LAP_OLD." = '".$lapsoOld.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }
    
    public function setUca($uca) {
        
        $sql = "UPDATE view_".$this->idCuenta." SET ".UNIT_A." = '".$uca.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }
    
    public function setUcc($ucc){
        
        $sql = "UPDATE view_".$this->idCuenta." SET ".UNIT_V." = '".$ucc.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }
    
    public function setNotesLst($notesLst){
        
        $sql = "UPDATE view_".$this->idCuenta." SET ".NOTES_LST." = '".$notesLst.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }
    
    public function setNotesAll($notesAll) {
        
        $sql = "UPDATE view_".$this->idCuenta." SET ".NOTES_ALL." = '".$notesAll.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }
    
    public function setTriAprob($triAprob) {
        
        $sql = "UPDATE view_".$this->idCuenta." SET ".TRI_PASS." = '".$triAprob.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }
    
    public function setStatus($status){
        
        $sql = "UPDATE view_".$this->idCuenta." SET ".STATUS_STU." = '".$status.
                "' WHERE ".ID_STU." = '".$this->idCuenta."'";
        
        $resultado = $this->conexionBase->prepare($sql);
        $resultado->execute();
        
    }

    /*
     * Inicio metodos especiales.
     */

    /**
     * courses_alumn_search: retorna las secciones en la cual se encuentra inscrtito el alumno.
     *
     * @return array
     */
    public function courses_alumn_search(){

        $lista = $this->only_codes();

        foreach ($lista as $codigo){

            $sql = "SELECT ".COD_SEC2." FROM registro_".$codigo." WHERE ".ID_ACC2." = :id";
            $resultado = $this->conexionBase->prepare($sql);
            $resultado->execute(array(":id"=>$this->idCuenta));

            $inscritas[] = $resultado->fetch(PDO::FETCH_ASSOC)[COD_SEC2];

        }

        return $inscritas;

    }

    /**
     * only_codes: retorna todas las secciones encontradas en la base de datos.
     *
     * @return array
     */
    private function only_codes(){

        $secciones = course::show_all_sections();

        foreach ($secciones as $seccion){

            $listaSecciones[] = $seccion["cod_sec"];

        }

        return $listaSecciones;

    }

    /**
     * data_section: retorna toda la información de las secciones inscritas por el alumno.
     *
     * @return array
     */
    public function data_section(){

        $secciones = $this->courses_alumn_search();

        foreach ($secciones as $seccion){

            $sql = "SELECT * FROM ".TABLE_SECTION." WHERE ".COD_SEC." = :codigo";
            $resultado = $this->conexionBase->prepare($sql);
            $resultado->execute(array(":codigo"=>$seccion));

            $informacion[] = $resultado->fetch();

        }

        return $informacion;

    }

}

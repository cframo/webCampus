    <!DOCTYPE html>
<!--
Código fuente desarrollado por Franklin Moreno e Hiram González
Contacto:
 hiramjgonzalez98@gmail.com
 cfranklinmoreno@gmail.com
-->

    <?php

        require_once "../Config/course/materia.php";
        require_once "../Config/section/section.php";
        require_once "../Enrollment/inscripcion.php";
        require_once "../users/student.php";

        if(isset($_POST["id"])){

            $seccion = new section($_POST["id"]);
            $materiaTemp = new materia($seccion->getCodMat());


            echo "
                <tr id = ".$materiaTemp->getCodMat().">    
                    <td>
                        <input type='text' name = 'codigo' value='" . $materiaTemp->getCodMat() . "' readonly class='Cod'>
                    </td>
                    <td>
                        <input type='button' onclick='mostrarSec(\"".$seccion->getCodMat()."\")' 
                            id='" . $seccion->getCodSec() . "' value='" . $materiaTemp->getName(). "' readonly='' class='mat'>
                    </td>
                    <td>
                        <input type='text' value='" . $seccion->getTurno(). "' readonly='' class=''>
                    </td>
                </tr>
                ";

        }else{

            $token = strtok($_POST["materias"], "%");

            while ($token !== false){

                $seccion = new section($token);
                $codigosSecciones[] = $seccion->getCodSec();
                $token = strtok("%");

            }
            $alumno = new student($_COOKIE["user"]);

            $inscritas = new inscripcion($alumno);
            $inscritas->inscripcion($codigosSecciones);

        }

    ?>


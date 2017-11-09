<?php

/* 
 * Código fuente desarrollado por Franklin Moreno e Hiram González
 * Contacto:
 *  hiramjgonzalez98@gmail.com
 *  cfranklinmoreno@gmail.com
 */
    
require_once './logic_login.php';
require_once '../users/student.php';
require_once '../users/admin.php';
    $login = new logic_login();
    $admin = $login->__admin();
    $student = $login->__student();

    session_start();
    
    if($student->login()==0){
        
        $student->__destruct();
        $_SESSION["user"] = serialize($student);
        $_SESSION["user2"] = serialize($student);
        
      header ("location: ../Index/index.php" );
      
    } elseif ($admin->login() ==0 ) {
        
        $_SESSION["user"]= serialize($admin);
        
        header("location: ../admin/area_admin.php");
        
    }else{
    
        $_SESSION["error"] = 1;
    
        header("location: ../Login/login.php");
        
    }
    
?>


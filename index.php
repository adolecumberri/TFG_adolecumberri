

 <?php 
 require_once 'autoload.php';
 
 if(isset($_GET['c'])){
    $nombre_controlador = $_GET['c'].'Controller'; 
 }else{
     header("Location: main.php"); 
 }
 
 if(class_exists($nombre_controlador)){
     $controlador = new $nombre_controlador();
     
     if(isset($_GET['m']) && method_exists($controlador, $_GET['m'])){
         $action = $_GET['m'];
         $controlador -> $action;
     }else{
         //TODO: error 404.php, hacer
        echo "No se encuentra el la accion ". $_GET['m']; 
     }
 }else{
     //TODO: error 404.php, hacer
     echo "No se encuentra el Controlador ". $nombre_controlador;
 }


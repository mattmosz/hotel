<?php
require_once 'config/config.php';
require_once 'helpers/funciones.php';
// VERIFICACION SI EXISTE RUTA DE ADMINISTRADOR
$isAdmin = strpos($_SERVER['REQUEST_URI'], '/' . ADMIN) !== false;
$ruta = empty($_GET['url']) ? 'principal/index' : $_GET['url'] ;
$array = explode('/', $ruta);
// VALIDAR ACCESO A RUTA ADMINISTRADOR
if($isAdmin && (count($array)==1 || (count($array)==2 && empty($array[1]))) && $array[0]== ADMIN){
    //CONTROLADOR
    $controller = 'Admin';
    $method = 'login';
}else{
    $indiceUrl = ($isAdmin) ? 1 : 0;
    $controller = ucfirst($array[$indiceUrl]);
    $method = 'index';
}
//VALIDACION DE METODOS
$metodoIndex = ($isAdmin) ? 2 : 1;
if(!empty($array[$metodoIndex]) && $array[$metodoIndex != '']){
    $method = $array[$metodoIndex];
}
//VALIDACION DE PARAMETROS
$parametro = '';
$parametroIndex = ($isAdmin) ? 3 : 2;
if(!empty($array[$parametroIndex]) && $array[$parametroIndex != '']){
    for($i = $parametroIndex; $i < count($array); $i++){
        $parametro .= $array[$i].',';
    }
    $parametro = trim($parametro, ',');
}
// LLAMAR AUTOLOAD

require_once 'config/app/Autoload.php';

//VALIDACION DE CONTROLADOR
$dirController = ($isAdmin) ? 'controllers/admin/'. $controller.'.php' : 'controllers/principal/'. $controller.'.php';
if(file_exists($dirController)){
    require_once $dirController;
    $controller = new $controller();
    if(method_exists($controller, $method)){
        $controller->$method($parametro);
    }else{
        echo 'METODO NO EXISTE';
    }
}else{
    echo 'CONTROLADOR NO EXISTE';
}
?>
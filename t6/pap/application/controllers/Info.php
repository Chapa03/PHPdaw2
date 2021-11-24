<?php
class Info extends CI_Controller {
    public function index() {
        //Creamos una sesión que recoge el mensaje de la excepción para
        //mandarlo a la vista y el "énfasis" o severity para formatear la clase de bootstrap
        //en la vista
        session_start();
        $data['msg'] = isset($_SESSION['_msg']) ? $_SESSION['_msg']['text'] : 'Vuelve al menú principal';
        $data['severity'] = isset($_SESSION['_msg']) ? $_SESSION['_msg']['severity'] : 'info';
        //Si por sesión se indica a donde se quiere volver, uri valdrá esa ruta
        //sino, valdrá la ruta base de la aplicación
        $data['uri'] = base_url() . isset($_SESSION['_msg']) ? $_SESSION['_msg']['uri'] : '';
        
        if (isset($_SESSION['_msg'])) {
            unset($_SESSION['_msg']);
        }
        
        //Generar la vista del mensaje de error
        frame($this,'_t/info', $data);
    }
}
?>
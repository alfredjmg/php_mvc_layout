<?php
require_once 'Model/herramienta.php';

class PersonaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Herramienta();
    }

    public function Index(){
        require_once 'View/inicio.php';
    }
    
    public function Lista(){
        require_once 'View/header.php';
        require_once 'View/herramienta.php';
        require_once 'View/footer.php';
    }
    
    public function Crear(){
        $alm = new Herramienta();
        
        if(isset($_REQUEST['idpersona'])){
            $alm = $this->model->getting($_REQUEST['idpersona']);
        }
        
        require_once 'View/herramienta-crear.php';
    }

    public function Editar(){
        
        $alm = $this->model->getting($_REQUEST['id']);

        require_once 'View/herramienta-editar.php';
        
    }
    
    public function Guardar(){
        $alm = new Herramienta();
        
        $alm->nombre = $_REQUEST['nombre'];
        $alm->cond_uso = $_REQUEST['cond_uso'];
        $alm->cond_mant = $_REQUEST['cond_mant'];
        $alm->fecha_adq = $_REQUEST['fecha_adq'];
        $alm->fecha_falla = $_REQUEST['fecha_falla'];
        $alm->desc_falla = $_REQUEST['desc_falla'];
        $alm->herramienta_tipo_tipo_id = $_REQUEST['herramienta_tipo_tipo_id'];

        $this->model->Registrar($alm);

        header('Location: ?c=Persona&a=Lista');

    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: ?c=Persona&a=Lista');
    }
}

<?php
Load::models('universidades');
class UniversidadesController extends AppController
{
    public function index($page=1){
        View::template('inicio');
        //$this->listUniversidades = (new Universidades)->getUniversidades($page);
    }
    public function create(){
        View::template('principal');  
    }
   public function registro(){
       View::template('principal');
   }
   public function guardar(){
    if(input::hasPost('universidades')){
        $universidad = new Universidades(Input::post('universidades'));
        if($universidad->create()){
            Flash::valid('registro creado');
            Input::delete();
            return Redirect::to();
        }
        Flash::error('error al guadar');
    }
   }
   public function borrar($id){
    if ((new Universidades())->delete((int)$id)){
        Flash::valid('operacion exitosa');
     } else{
        Flash::error('fallo en la operacion');
    }
    return Redirect::to();
   }
   public function editar($id){
    View::template('principal');
    $universidad= new Universidades();

    if (Input::hasPost('universidades')){
        if($universidad->update(Input::post('universidades'))){
            Flash::valid('actualizado correctamente');
            return Redirect::to();
        }
        Flash::error('fallo el update');
    }
    $this->universidades = $universidad->find_by_id((int) $id);
   }

   public function Universidad_Dr_Andres_Bello($page2){}

 

}
?>



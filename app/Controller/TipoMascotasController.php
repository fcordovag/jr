<?php
/**
* 
*/
class TipoMascotasController extends AppController
{
	public $helpers = array('Html','Form');
	public $components = array('Session');
	
	public function index()
	{
		$this->set('tipomascotas', $this->TipoMascota->find('all'));
	}
	public function editar($id = null) 
	{
		if (!$id) {
			throw new NotFoundException("No existen los datos", 1);
		}
		$tipomascota = $this->TipoMascota->findById($id);
		if (!$tipomascota) {
			throw new NotFoundException("No existe el usuario", 1);
		}
		if ($this->request->is('post','put')) {
			$this->TipoMascota->id = $id;
			if ($this->TipoMascota->save($this->request->data)) 
			{
				$this->Session->setFlash('El usuario fue modificado', $elemnt = 'default', $params = array('class'=>'alert alert-success text-center'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash('El registro no puedo ser modificado', $elemnt = 'default', $params = array('class'=>'alert alert-warning text-center'))	;
		}
		if (!$this->request->data) {
			$this->request->data = $tipomascota;
		}
	}
	public function nuevo() 
	{
		if ($this->request->is('post')) {
			$this->TipoMascota->create();
			if ($this->TipoMascota->save($this->request->data)) {
				$this->Session->setFlash('El tipo fue creado exitosamente','default',array('class'=> 'alert alert-success text-center'));
				return $this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash('No se puedo crear el tipo indicado','default',array('class'=> 'alert alert-danger text-center'));
		}
	}
	public function delete($id = null)
	{
		$this->TipoMascota->id = $id;
		if (!$this->TipoMascota->exists()) {
			throw new NotFoundException(__('Id invalido para eliminar'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TipoMascota->delete()) {
			$this->Session->setFlash('Se elimino el tipo de la BD', 'default', array('class' => 'alert alert-success text-center'));
		} else {
			$this->Session->setFlash('No se pudo eliminar el tipo, vuelva a intentarlo.', 'default', array('class' => 'alert alert-danger text-center'));
		}
		return $this->redirect(array('action' => 'index'));
	}	
}

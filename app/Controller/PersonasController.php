<?php
/**
* 
*/
class PersonasController extends AppController
{
	public $helpers = array('Html','Form');
	public $components = array('Session');

	public function index()
	{
		$this->set('personas', $this->Persona->find('all'));
	}
	public function detalle($id = null) 
	{
		if (!$id) {
			throw new NotFoundException("La persona no tiene mascotas", 1);
		}
		$persona = $this->Persona->findById($id);
		if (!$persona) {
			throw new NotFoundException("La persona no existe", 1);
		}
		$this->set('persona',$persona);
	}
	public function nuevo()
	{
		if ($this->request->is('post')) {
			$this->Persona->create();
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash('El usuario fue creado exitosamente','default',array('class'=> 'alert alert-success text-center'));
				return $this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash('No se puedo crear el usuario');
		}
	}
	public function editar($id = null)
	{
		if (!$id) {
			throw new NotFoundException("No existen los datos", 1);
		}
		$persona = $this->Persona->findById($id);
		if (!$persona) {
			throw new NotFoundException("No existe el usuario", 1);
		}
		if ($this->request->is('post','put')) {
			$this->Persona->id = $id;
			if ($this->Persona->save($this->request->data)) 
			{
				$this->Session->setFlash('El usuario fue modificado', $elemnt = 'default', $params = array('class'=>'alert alert-success text-center'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash('El registro no puedo ser modificado', $elemnt = 'default', $params = array('class'=>'alert alert-warning text-center'))	;
		}
		if (!$this->request->data) {
			$this->request->data = $persona;
		}
	}
	public function delete($id = null) {
		$this->Persona->id = $id;
		if (!$this->Persona->exists()) {
			throw new NotFoundException(__('Invalid Persona'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Persona->delete()) {
			$this->Session->setFlash('Se elimino el usuario de la BD', 'default', array('class' => 'alert alert-success text-center'));
		} else {
			$this->Session->setFlash('No se pudo eliminar el usuario, vuelva a intentarlo.', 'default', array('class' => 'alert alert-danger text-center'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
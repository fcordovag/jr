<?php
/**
* 
*/
class MascotasController extends AppController
{
	public $helpers = array('Html','Form');
	public $components = array('Session');

	public function index()
	{
		$this->set('mascotas', $this->Mascota->find('all'));
	}
	public function nuevo() {
		if ($this->request->is('post')) {
			$this->Mascota->create();
			if ($this->Mascota->save($this->request->data)) {
				$this->Session->setFlash('La mascota fue guardada correctamente', 'default', array('class' => 'alert alert-success text-center'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('La mascota no pudo ser guardada, intente mas tarde !', 'default', array('class' => 'alert alert-danger text-center'));
			}
		}
		$personas = $this->Mascota->Persona->find('list',array('fields' => array('id','nombre_completo')));
		$tipomascotas = $this->Mascota->TipoMascota->find('list');
		$this->set(array('personas'=>$personas,'tipomascotas'=>$tipomascotas));
		//$this->set(compact('tipomascotas', 'personas'));
	}
	public function delete($id = null) {
		$this->Mascota->id = $id;
		if (!$this->Mascota->exists()) {
			throw new NotFoundException('Mascota invalida');
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mascota->delete()) {
			$this->Session->setFlash('Se elimino la mascota de la BD', 'default', array('class' => 'alert alert-success text-center'));
		} else {
			$this->Session->setFlash('No se pudo eliminar la mascota, vuelva a intentarlo.', 'default', array('class' => 'alert alert-danger text-center'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	public function editar($id = null)
	{
		if (!$id) {
			throw new NotFoundException("No existen los datos", 1);
		}
		$mascota = $this->Mascota->findById($id);
		if (!$mascota) {
			throw new NotFoundException("No existe la mascota solicitada", 1);
		}
		if ($this->request->is('post','put')) {
			$this->Mascota->id = $id;
			if ($this->Mascota->save($this->request->data)) 
			{
				$this->Session->setFlash('la mascota fue modificada', $elemnt = 'default', $params = array('class'=>'alert alert-success text-center'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash('El registro no puedo ser modificado', $elemnt = 'default', $params = array('class'=>'alert alert-warning text-center'))	;
		}
		if (!$this->request->data) {
			$this->request->data = $mascota;
		}
		$personas = $this->Mascota->Persona->find('list',array('fields' => array('id','nombre_completo')));
		$tipomascotas = $this->Mascota->TipoMascota->find('list');
		$this->set(array('personas'=>$personas,'tipomascotas'=>$tipomascotas));
	}
}

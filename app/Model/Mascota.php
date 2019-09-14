<?php
App::uses('AppModel', 'Model');
/**
* 
*/
class Mascota extends AppModel
{
	public $displayField = 'name' ;
	
	public $actsAs = array(
			'Upload.Upload' => array(
				'image' => array(
					'fields' => array(
						'dir' => 'image_dir'
					),
					'thumbnailMethod' => 'php',
					'thumbnailSizes' => array(
						'vga' => '640x480',
						'thumb' => '150x150'
					),
					'deleteOnUpdate' => true,
					'deleteFolderOnDelete' => true
				)
			)
		);

	public $belongsTo = array(
		'TipoMascota' => array(
			'className' => 'TipoMascota',
			'foreignKey' => 'tipo_mascota_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'persona_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
<?php
App::uses('AppModel', 'Model');

class TipoMascota extends AppModel
{
	public $displayField = 'name';
	//public $virtualFields = array('nombre_tipo' => 'CONCAT("Tipo: "," ",TipoMascota.name)');
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
	public $validate = array(
			'name' => array(
				'notBlank' => array(
					'rule' => array('notBlank'),
					'message' => 'Ingresa un tipo de mascotas'
				)
			),
			'description' => array(
				'notBlank' => array(
					'rule' => array('notBlank'),
					'message' => 'Ingresa un apellido'
				)
			),
		);
	public $hasMany = array(
		'Mascota' => array(
			'className' => 'Mascota',
			'foreignKey' => 'tipo_mascota_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
}
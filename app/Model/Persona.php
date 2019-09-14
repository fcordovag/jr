<?php
/**
* 
*/
class Persona extends AppModel
{
	//public $displayField = 'name';
	public $virtualFields = array('nombre_completo' => 'CONCAT(Persona.name," ",Persona.last_name)');

	public $validate = array(
			//'name' => array('rule'=>'notEmpty','message' => 'Debes ingresar un nombre'),
			'name' => array(
				'notBlank' => array(
					'rule' => array('notBlank'),
					'message' => 'Ingresa un nombre',
					//'allowEmpty' => false,
					//'required' => false,
					//'last' => false, // Stop validation after this rule
					//'on' => 'create', // Limit validation to 'create' or 'update' operations
				)
			),
			'last_name' => array(
				'notBlank' => array(
					'rule' => array('notBlank'),
					'message' => 'Ingresa un apellido',
					//'allowEmpty' => false,
					//'required' => false,
					//'last' => false, // Stop validation after this rule
					//'on' => 'create', // Limit validation to 'create' or 'update' operations
				)
			),

			'sex' => array(
				'notBlank' => array(
					'rule' => array('notBlank'),
					'message' => 'Ingresa un sexo',
					//'allowEmpty' => false,
					//'required' => false,
					//'last' => false, // Stop validation after this rule
					//'on' => 'create', // Limit validation to 'create' or 'update' operations
				)
			),
		);
	public $hasMany = array(
		'Mascota' => array(
			'className' => 'Mascota',
			'foreignKey' => 'persona_id',
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
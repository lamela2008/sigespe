<?php

/**
 * Directors model config
 */

return array(

	'title' => 'Personas',

	'single' => 'Persona',

	'model' => 'App\persona',

	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'nombre' => array(
			'title' => 'Nombre de la persona',
		),
		'apellido' => array(
			'title' => 'Apellidos de la persona',
		),
		'dni' => array(
			'title' => 'Cedula de Identidad',
		),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'nombre',
		'apellidos',
		'dni'
	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'nombre' => array(
			'title' => 'Nombre de la persona',
			'type' => 'text',
		),
		'apellidos' => array(
			'title' => 'Apellidos de la persona',
			'type' => 'text',
		),
		'dni' => array(
			'dni' => 'Cedula',
			'type' => 'text',
		),
	),
);
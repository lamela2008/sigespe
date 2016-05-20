<?php

/**
 * Directors model config
 */

return array(

	'title' => 'Tipos',

	'single' => 'Tipo',

	'model' => 'App\tipolval',

	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'name' => array(
			'title' => 'Name',
		),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'name',
	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'name' => array(
			'title' => 'Name',
			'type' => 'text',
		),
		'descripcion' => array(
			'title' => 'Descripcion',
			'type' => 'text',
		),
	),
);
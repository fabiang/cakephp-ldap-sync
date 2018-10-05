<?php
/**
 * This file is the model file of the application. Used for
 *  management departments.
 *
 * CakeLdap: Authentication of users by member group of Active Directory.
 * @copyright Copyright 2017, Andrey Klimov.
 * @package plugin.Model
 */

App::uses('DepartmentDb', 'CakeLdap.Model');

/**
 * The model is used for management departments (default model).
 *
 * @package plugin.Model
 */
class Department extends DepartmentDb {

/**
 * Name of the model.
 *
 * @var string
 * @link http://book.cakephp.org/2.0/en/models/model-attributes.html#name
 */
	public $name = 'Department';
}

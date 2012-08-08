<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * DalDMS
 *
 * An open source course dependency management system
 *
 * @package   	DalDMS
 * @author    	Samuel Haruna
 * @copyright 	Copyright (c) 2012 - 2022, DalDMS
 * @license   
 * @link  		http://ca.linkedin.com/pub/samuel-haruna/24/90/182      
 * @since     	Version 1.0
 * @filesource BASEPATH/application/controllers/main.php
 */

// ------------------------------------------------------------------------

/**
* Admin controller.
*
* Abstract User level - Gives complete control of DalDMS to Admin.
*/

class Admin extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->data['title'] = 'DalDMS - Admin';
	}
	public function admin(){
		$this->load->view('admin', $this->data);
	}
	function add_user(){
		
	}
	function remove_user(){

	}
}

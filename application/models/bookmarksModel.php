<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bookmarksModel extends CI_Model {

	function __construct(){
		parent::__construct();
		
	}

	function guardar($data){
  	$this->db->insert('bookmarks', $data);
  }

}
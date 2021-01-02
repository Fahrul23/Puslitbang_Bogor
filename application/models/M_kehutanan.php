<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kehutanan extends CI_Model {

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);

	}
	function get_data_limit($id,$table,$limit){
			return $this->db->query("SELECT * FROM $table ORDER BY $id DESC LIMIT $limit");
	}

	function get_data_asc($id,$table,$limit){
			return $this->db->query("SELECT * FROM $table ORDER BY $id ASC LIMIT $limit");
	}

	function countData($table)
    {
        return $this->db->get($table)->num_rows();
    }
    function get_data_paginate($table,$limit,$star)
    {
    	return $this->db->get($table,$limit,$star);
    }
	function get_data($table){
		return $this->db->get($table);
	}

	function insert_data($data,$table){
		$this->db->INSERT($table,$data);
		
	}

	function update_data($where,$data,$table){
		$this->db->WHERE($where);
		$this->db->UPDATE($table,$data);
	}

	function delete_data($where,$table){
		$this->db->WHERE($where);
		$this->db->DELETE($table);
	}
}
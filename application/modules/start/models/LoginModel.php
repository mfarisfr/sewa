<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

    public function cekLogin($tableName,$where)
	{
		// SELECT * FROM $tableName WHERE $where('username' == $username ..)
		$user = $this->db->get_where($tableName,$where)->row();
		if(!$user)
		{ return false; }
		else
		return $user;
    }
    
    function getData($select, $table, $where=false)
	{
		if($where)
		{
			//select from table where ...
			return $this->db
						->select($select)
						->from($table)
						->where($where)
						->get()
						->row();
		}

		else
		{
			return $this->db
					->select($select)
					->get($table)
					->result(); 
		}	
    }
    
    function getJoinUser($username)
    {
		$sql = "SELECT U.*,K.* from username U inner join karyawan K on U.id_karyawan = K.id_karyawan where U.akun_username = '$username'";
		return $this->db->query($sql)->result_array();
    }
}
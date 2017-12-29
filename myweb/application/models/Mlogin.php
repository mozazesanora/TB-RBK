<?php  
/**
* 
*/
class Mlogin extends CI_Model
{
	
var $tabel = 'userAdmin';
	public function __construct()
	{
		parent::__construct();
	}

	public function ceklogin($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->tabel);
	}
}

?>
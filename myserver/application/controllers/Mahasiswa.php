<?php  
require  APPPATH . '/libraries/REST_Controller.php';

/**
* 
*/
class Mahasiswa extends REST_Controller
{
	
	function __construct($paramConfig='rest')
	{
		parent::__construct($paramConfig);
		$this->load->model('model_akademik');
	}

	function index_get()
	{
		$dataMahasiswa=$this->model_akademik->get('db2','mahasiswa')->result();
		$this->response($dataMahasiswa,200);
	}
}
?>
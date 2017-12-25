<?php  
require  APPPATH . '/libraries/REST_Controller.php';

/**
* 
*/
class dosen extends REST_Controller
{
	
	function __construct($paramConfig='rest')
	{
		parent::__construct($paramConfig);
		$this->load->model('model_akademik');
	}

	function index_get(){
		$dataAkademik=$this->model_akademik->get('default','dosen')->result();
		$this->response($dataAkademik,200);
	}

	function index_post()
	{
		$value = array(
						'nidn' => $this->post('nidn'),
						'namaDosen' => $this->post('namaDosen') 
					);
		$saving=$this->model_akademik->save('default','dosen',$value);
		if ($saving) {
			$this->response($value,200);
		} else {
			$this->response(array('status'=>'fail' , 502));
		}
		
	}

	function index_delete(){
		$valueWhere=$this->delete('nidn');
		$deleting=$this->model_akademik->delete('default','dosen','nidn',$valueWhere);
		if ($deleting) {
			$this->response(array('status'=>'seccess'),201);
		} else {
			$this->response(array('status'=>'fail'),201);
		}
		
	}
}

?>
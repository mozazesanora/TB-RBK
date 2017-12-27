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

	function index_delete()
	{
		$db=$this->load->database('default',TRUE);
		$key=$this->delete('idDataDosen');
		$db->where('idDataDosen',$key);
		$deleted=$db->delete('dosen');
		if ($deleted) {
			$this->response(array('status'=>'success'), 201);
		} else {
			$this->response(array('status'=>'fail'),502);
		}
	}

	function index_put()
	{
		$db=$this->load->database('default',TRUE);
		$key=$this->put('idDataDosen');
		$data = array('idDataDosen' =>$this->put('idDataDosen') , 
						'nidn' =>$this->put('nidn'),
						'namaDosen'=>$this->put('namaDosen')
		);
		$db->where('idDataDosen',$key);
		$updated=$db->update('dosen',$data);
		if ($updated) {
			$this->response(array('status'=>'success'),201);
		} else {
			$this->response(array('status'=>'fail'),501);
		}
	}
}

?>
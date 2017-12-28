<?php  
require  APPPATH . '/libraries/REST_Controller.php';
/**
* 
*/
class matkul extends REST_Controller
{
	
	function __construct($paramConfig='rest')
	{
		parent::__construct($paramConfig);
		$this->load->model('model_akademik');
	}

	function index_get(){
		$dataAkademik=$this->model_akademik->get('default','matakuliah')->result();
		$this->response($dataAkademik,200);
	}

	function index_post()
	{
		$value = array(
						'idMatkul' => $this->post('idMatkul'),
						'namaMatkul' => $this->post('namaMatkul') 
					);
		$saving=$this->model_akademik->save('default','matakuliah',$value);
		if ($saving) {
			$this->response($value,200);
		} else {
			$this->response(array('status'=>'fail' , 502));
		}
		
	}

	function index_delete()
	{
		$db=$this->load->database('default',TRUE);
		$key=$this->delete('idDataMatkul');
		$db->where('idDataMatkul',$key);
		$deleted=$db->delete('matakuliah');
		if ($deleted) {
			$this->response(array('status'=>'success'), 201);
		} else {
			$this->response(array('status'=>'fail'),502);
		}
	}

	function index_put()
	{
		$db=$this->load->database('default',TRUE);
		$key=$this->put('idDataMatkul');
		$data = array('idDataMatkul' =>$this->put('idDataMatkul') , 
						'idMatkul' =>$this->put('idMatkul'),
						'namaMatkul'=>$this->put('namaMatkul')
		);
		$db->where('idDataMatkul',$key);
		$updated=$db->update('matakuliah',$data);
		if ($updated) {
			$this->response(array('status'=>'success'),201);
		} else {
			$this->response(array('status'=>'fail'),501);
		}
	}
}
?>
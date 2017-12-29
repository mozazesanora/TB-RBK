<?php  
require  APPPATH . '/libraries/REST_Controller.php';
/**
* 
*/
class jampelajaran extends REST_Controller
{
	
	function __construct($paramConfig='rest')
	{
		parent::__construct($paramConfig);
		$this->load->model('model_akademik');
		$this->load->database('default',TRUE);
	}

	function index_get()
	{
		$idDataDosen=$this->get('idDataJamPelajaran');
		if ($idDataDosen =='') {
			$this->db->select('*');
			$this->db->from('jampelajaran');
			$dosen=$this->db->get()->result();
		} else {
			$this->db->where('idDataJamPelajaran',$idDataDosen);
			$this->db->select('*');
			$this->db->from('jampelajaran');
			$dosen=$this->db->get()->result();
		}
		$this->response($dosen,200);
	}
	function index_post()
	{
		$value = array(
						'jamPelajaran' => $this->post('jamPelajaran') 
					);
		$saving=$this->model_akademik->save('default','jampelajaran',$value);
		if ($saving) {
			$this->response($value,200);
		} else {
			$this->response(array('status'=>'fail' , 502));
		}
		
	}

	function index_delete()
	{
		$db=$this->load->database('default',TRUE);
		$key=$this->delete('idDataJamPelajaran');
		$db->where('idDataJamPelajaran',$key);
		$deleted=$db->delete('jampelajaran');
		if ($deleted) {
			$this->response(array('status'=>'success'), 201);
		} else {
			$this->response(array('status'=>'fail'),502);
		}
	}

	function index_put()
	{
		$idDataDosen=$this->put('idDataJamPelajaran');
		$data=array(
					'idDataJamPelajaran' => $this->put('idDataJamPelajaran'),
					'jamPelajaran' => $this->put('jamPelajaran'));
		$this->db->where('idDataJamPelajaran',$idDataDosen);
		$updated=$this->db->update('jampelajaran',$data);
		if ($updated) {
			$this->response($data,200);
		} else {
			$this->response(array('status'=>'fail',502));
		}
		
	}
}
?>
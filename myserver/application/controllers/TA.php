<?php 
require  APPPATH . '/libraries/REST_Controller.php'; 
 /**
 * 
 */
 class TA extends REST_Controller
 {
 	
 	function __construct($paramConfig='rest')
	{
		parent::__construct($paramConfig);
		$this->load->model('model_akademik');
	}

	function index_get(){
		$db=$this->load->database('db4',TRUE);
		$idDataDosen=$this->get('idDataTA');
		if ($idDataDosen =='') {
			$db->select('*');
			$db->from('ta');
			$dosen=$db->get()->result();
		} else {
			$this->db->where('idDataTA',$idDataDosen);
			$db->select('*');
			$db->from('ta');
			$dosen=$db->get()->result();
		}
		$this->response($dosen,200);
	}

	function index_post()
	{
		$value = array(
						'nomerTA' => $this->post('nomerTA'),
						'judulTA' =>$this->post('judulTA'),
						'penulis' =>$this->post('penulis'),
						'tahunTA' =>$this->post('tahunTA') 
		);
		$saving=$this->model_akademik->save('db4','TA',$value);
		if ($saving) {
			$this->response($value,200);
		} else {
			$this->response(array('status'=>'fail' , 502));
		}
	}

	function index_delete()
	{
		$db=$this->load->database('db4',TRUE);
		$key=$this->delete('idData');
		$db->where('idData',$key);
		$deleted=$db->delete('ta');
		if ($deleted) {
			$this->response(array('status'=>'success'), 201);
		} else {
			$this->response(array('status'=>'fail'),502);
		}
	}

	function index_put()
	{
		$db=$this->load->database('db4',TRUE);
		$idDataDosen=$this->put('idDataTA');
		$data=array(
					'idData' => $this->put('idData'),
					'nomerTA'	=> $this->put('nomerTA'),
					'judulTA' =>$this->put('judulTA'),
					'penulis' =>$this->put('penulis'),
					'tahunTA' =>$this->put('tahunTA')
		);
		$db->where('idData',$idDataDosen);
		$updated=$db->update('ta',$data);
		if ($updated) {
			$this->response($data,200);
		} else {
			$this->response(array('status'=>'fail',502));
		}
		
	}
 }

?>
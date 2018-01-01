<?php  
require  APPPATH . '/libraries/REST_Controller.php';
/**
* 
*/
class ruangan extends REST_Controller
{
	
	function __construct($paramConfig='rest')
	{
		parent::__construct($paramConfig);
		$this->load->model('model_akademik');
		
	}

	function index_get(){
		$db=$this->load->database('db3',TRUE);
		$idDataDosen=$this->get('idDataRuangan');
		if ($idDataDosen =='') {
			$db->select('*');
			$db->from('ruangan');
			$dosen=$db->get()->result();
		} else {
			$this->db->where('idDataRuangan',$idDataDosen);
			$db->select('*');
			$db->from('ruangan');
			$dosen=$db->get()->result();
		}
		$this->response($dosen,200);
	}

	function index_post()
	{
		$value = array(
						'nomerRuangan' => $this->post('nomerRuangan'),
						'kondisiRuangan' =>$this->post('kondisiRuangan'),
						'lokasiRuangan' =>$this->post('lokasiRuangan') 
		);
		$saving=$this->model_akademik->save('db3','ruangan',$value);
		if ($saving) {
			$this->response($value,200);
		} else {
			$this->response(array('status'=>'fail' , 502));
		}
	}

	function index_delete()
	{
		$db=$this->load->database('db3',TRUE);
		$key=$this->delete('idDataRuangan');
		$db->where('idDataRuangan',$key);
		$deleted=$db->delete('ruangan');
		if ($deleted) {
			$this->response(array('status'=>'success'), 201);
		} else {
			$this->response(array('status'=>'fail'),502);
		}
	}

	function index_put()
	{
		$db=$this->load->database('db3',TRUE);
		$idDataRuangan=$this->put('idDataRuangan');
		$data=array(
					'idDataRuangan' => $this->put('idDataRuangan'),
					'nomerRuangan'	=> $this->put('nomerRuangan'),
					'kondisiRuangan' =>$this->put('kondisiRuangan'),
					'lokasiRuangan' =>$this->put('lokasiRuangan')
		);
		$db->where('idDataRuangan',$idDataRuangan);
		$updated=$db->update('ruangan',$data);
		if ($updated) {
			$this->response($data,200);
		} else {
			$this->response(array('status'=>'fail',502));
		}
		
	}

	
}
?>
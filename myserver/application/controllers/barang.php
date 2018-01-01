<?php  
require  APPPATH . '/libraries/REST_Controller.php';
/**
* 
*/
class barang extends REST_Controller
{
	
	function __construct($paramConfig='rest')
	{
		parent::__construct($paramConfig);
		$this->load->model('model_akademik');
		
	}

	function index_get(){
		$db=$this->load->database('db3',TRUE);
		$idDataDosen=$this->get('idDataBarang');
		if ($idDataDosen =='') {
			$db->select('*');
			$db->from('barang');
			$dosen=$db->get()->result();
		} else {
			$this->db->where('idDataBarang',$idDataDosen);
			$db->select('*');
			$db->from('tugas');
			$dosen=$db->get()->result();
		}
		$this->response($dosen,200);
	}

	function index_post()
	{
		$value = array(
						'namaBarang' => $this->post('namaBarang'),
						'jenisBarang' =>$this->post('jenisBarang'),
						'jumlahBarang' =>$this->post('jumlahBarang') 
		);
		$saving=$this->model_akademik->save('db3','barang',$value);
		if ($saving) {
			$this->response($value,200);
		} else {
			$this->response(array('status'=>'fail' , 502));
		}
	}

	function index_delete()
	{
		$db=$this->load->database('db3',TRUE);
		$key=$this->delete('idDataBarang');
		$db->where('idDataBarang',$key);
		$deleted=$db->delete('barang');
		if ($deleted) {
			$this->response(array('status'=>'success'), 201);
		} else {
			$this->response(array('status'=>'fail'),502);
		}
	}

	function index_put()
	{
		$db=$this->load->database('db3',TRUE);
		$idDataDosen=$this->put('idDataBarang');
		$data=array(
					'idDataBarang' => $this->put('idDataBarang'),
					'namaBarang'	=> $this->put('namaBarang'),
					'jenisBarang' =>$this->put('jenisBarang'),
					'jumlahBarang' =>$this->put('jumlahBarang')
		);
		$db->where('idDataBarang',$idDataDosen);
		$updated=$db->update('barang',$data);
		if ($updated) {
			$this->response($data,200);
		} else {
			$this->response(array('status'=>'fail',502));
		}
		
	}

	
}
?>
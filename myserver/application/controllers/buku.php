<?php 
require  APPPATH . '/libraries/REST_Controller.php'; 
 /**
 * 
 */
 class buku extends REST_Controller
 {
 	
 	function __construct($paramConfig='rest')
	{
		parent::__construct($paramConfig);
		$this->load->model('model_akademik');
	}

	function index_get(){
		$db=$this->load->database('db4',TRUE);
		$idDataDosen=$this->get('idDataBuku');
		if ($idDataDosen =='') {
			$db->select('*');
			$db->from('buku');
			$dosen=$db->get()->result();
		} else {
			$this->db->where('idDataBuku',$idDataDosen);
			$db->select('*');
			$db->from('buku');
			$dosen=$db->get()->result();
		}
		$this->response($dosen,200);
	}

	function index_post()
	{
		$value = array(
						'nomerBuku' => $this->post('nomerBuku'),
						'judulBuku' =>$this->post('judulBuku'),
						'penulis' =>$this->post('penulis') 
		);
		$saving=$this->model_akademik->save('db4','buku',$value);
		if ($saving) {
			$this->response($value,200);
		} else {
			$this->response(array('status'=>'fail' , 502));
		}
	}

	function index_delete()
	{
		$db=$this->load->database('db4',TRUE);
		$key=$this->delete('idDataBuku');
		$db->where('idDataBuku',$key);
		$deleted=$db->delete('buku');
		if ($deleted) {
			$this->response(array('status'=>'success'), 201);
		} else {
			$this->response(array('status'=>'fail'),502);
		}
	}

	function index_put()
	{
		$db=$this->load->database('db4',TRUE);
		$idDataDosen=$this->put('idDataBarang');
		$data=array(
					'idDataBuku' => $this->put('idDataBuku'),
					'nomerBuku'	=> $this->put('nomerBuku'),
					'judulBuku' =>$this->put('judulBuku'),
					'penulis' =>$this->put('penulis')
		);
		$db->where('idDataBuku',$idDataDosen);
		$updated=$db->update('buku',$data);
		if ($updated) {
			$this->response($data,200);
		} else {
			$this->response(array('status'=>'fail',502));
		}
		
	}
 }

?>
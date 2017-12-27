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
		$this->load->database('db2',TRUE);
	}

	function index_get()
	{
		$dataMahasiswa=$this->model_akademik->get('db2','mahasiswa')->result();
		$this->response($dataMahasiswa,200);
	}

	function index_post()
	{
		$value = array(
						'nim'=>$this->post('nim'),
						'nama'=>$this->post('nama'),
						'fakultas'=>$this->post('fakultas'),
						'jurusan'=>$this->post('jurusan')
					);
		$saving=$this->model_akademik->save('db2','mahasiswa',$value);
		if ($saving) {
			$this->response($value,200);
		} else {
			$this->response(array('status'=>'fail' , 502));
		}
		
	}
	
	function index_delete(){
		$db2=$this->load->database('db2',TRUE);
		$key=$this->delete('idDataMahasiswa');
		$db2->where('idDataMahasiswa',$key);
		$deleted=$db2->delete('mahasiswa');
		if ($deleted) {
			$this->response(array('status'=>'success'), 201);
		} else {
			$this->response(array('status'=>'fail'),502);
		}
	}

	function index_put()
	{
		$db2=$this->load->database('db2',TRUE);
		$key=$this->put('idDataMahasiswa');
		$data = array('idDataMahasiswa' =>$this->put('idDataMahasiswa') , 
						'nim'=>$this->put('nim'),
						'nama'=>$this->put('nama'),
						'fakultas'=>$this->put('fakultas'),
						'jurusan'=>$this->put('jurusan')
		);
		$db2->where('idDataMahasiswa',$key);
		$updated=$db2->update('mahasiswa',$data);
		if ($updated) {
			$this->response(array('status'=>'success'),201);
		} else {
			$this->response(array('status'=>'fail'),501);
		}
		
	}

}
?>
<?php  
/**
* 
*/
class cmahasiswa extends CI_Controller
{
	var $API="";
	function __construct()
	{
		parent::__construct();
		$this->API="http://localhost/myserver/index.php";
	}

	public function index()
    {

        $datamahasiswa['mahasiswadata'] = json_decode($this->curl->simple_get($this->API.'/mahasiswa'));
        $data=array(
					'page_header' => "Data Dosen",
					'page_desc' => "Daftar Dosen",
					'menu_dosen' => 'active',
					'page_content'=>$this->load->view('Mahasiswa/form',$datadosen,TRUE)	
		);
		$this->parser->parse('starter',$data);
        // $this->load->view('dosen/form.php',$datadosen);
    }

}

?>
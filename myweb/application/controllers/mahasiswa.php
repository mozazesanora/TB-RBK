<?php  
/**
* 
*/
class mahasiswa extends CI_Controller
{
	

	public function index()
	{

		$data['dashboard']=1;
		$data=array(
					'page_header' => "Dashboard",
					'page_desc' => "Control Panel",
					'menu_dashboard' => 'active',
					'page_content'=>$this->load->view('dashboard/mhs',$data,TRUE),	
		);
		$this->parser->parse('MahasiswaApp/starter',$data);
		// $this->load->view('starter.php');
	}
}
?>
<?php  
/**
* 
*/
class mahasiswa extends CI_Controller
{
	
	function index(){
		$data['dashboard']=1;
		$data=array(
					'page_header' => "Mahasiswa",
					'page_desc' => " ",
					'menu_dashboard' => 'active',
					'page_content'=>$this->load->view('mahasiswa/list',$data,TRUE),	
		);
		$this->parser->parse('starter',$data);
	}
}
?>
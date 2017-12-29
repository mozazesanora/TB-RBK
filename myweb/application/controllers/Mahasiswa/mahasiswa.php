<?php  
/**
* 
*/
class mahasiswa extends CI_Controller
{
	
	function __construct()
	{
		# code...
	}

	function index()
	{
		$this->load->view('mahasiswaApp/starter');
	}
}
?>
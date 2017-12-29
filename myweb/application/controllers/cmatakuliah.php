<?php 



class cmatakuliah extends CI_Controller
{
	var $API="";
	function __construct()
	{
		parent::__construct();
		$this->API="http://localhost/myserver/index.php";
	}

	public function index()
    {

        $matkuldata['matkuldata'] = json_decode($this->curl->simple_get($this->API.'/matkul'));
        $data=array(
					'page_header' => "Data Mata Kuliah",
					'page_desc' => "Daftar Mata Kuliah",
					'menu_matakuliah' => 'active',
					'page_content'=>$this->load->view('Matakuliah/form',$matkuldata,TRUE),	
		);
		$this->parser->parse('starter',$data);
        // $this->load->view('dosen/form.php',$datadosen);
    }

 function create(){
       
          if(isset($_POST['simpan'])){
             $data = array(
            	'idDataMatkul' =>$this->input->post('idDataMatkul'),
                'idMatkul'       =>  $this->input->post('idMatkul'),
                'namaMatkul'      =>  $this->input->post('namaMatkul'),
                );

            $insert =  $this->curl->simple_post($this->API.'/matkul', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('matakuliah');
        }else{
            $data['dosendata'] = json_decode($this->curl->simple_get($this->API.'/matkul'));
         
             $data=array(
					'page_header' => "Data Mata Kuliah",
					'page_desc' => "Daftar Mata Kuliah",
					'menu_Matkul' => 'active',
					'page_content'=>$this->load->view('Matakuliah/edit',$data,TRUE),	
		);
		$this->parser->parse('starter',$data);
        
        }
    }

function edit(){
        if(isset($_POST['mit'])){
            $data = array(
            	'idDataMatkul' =>$this->input->post('idDataMatkul'),
                'idMatkul'       =>  $this->input->post('idMatkul'),
                'namaMatkul'      =>  $this->input->post('namaMatkul'),
                );

            $update =  $this->curl->simple_put($this->API.'/matkul', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('matakuliah');
        }else{
          	$params = array('idDataMatkul'=>  $this->uri->segment(3));
            $data['matkuldata'] = json_decode($this->curl->simple_get($this->API.'/matkul',$params));
            $data=array(
					'page_header' => "Data Mata Kuliah",
					'page_desc' => "Daftar Mata Kuliah",
					'menu_Matkul' => 'active',
					'page_content'=>$this->load->view('Matakuliah/edit',$data,TRUE),	
		);
		$this->parser->parse('starter',$data);
        }
    }
    
    // delete data mahasiswa
    function delete($idDataMatkul){
        if(empty($idDataMatkul)){
            redirect('matakuliah');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/matkul', array('idDataMatkul'=>$idDataMatkul), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('matakuliah');

        }
    }
}
 ?>

 
<?PHP  
/**
* 
*/
class cdosen extends CI_Controller
{
	var $API="";
	function __construct()
	{
		parent::__construct();
		$this->API="http://localhost/myserver/index.php";
	}

	public function index()
    {

        $datadosen['dosendata'] = json_decode($this->curl->simple_get($this->API.'/dosen'));
        $data=array(
					'page_header' => "Data Dosen",
					'page_desc' => "Daftar Dosen",
					'menu_dosen' => 'active',
					'page_content'=>$this->load->view('Dosen/form',$datadosen,TRUE)	
		);
		$this->parser->parse('starter',$data);
        // $this->load->view('dosen/form.php',$datadosen);
    }

    function create(){
       
          if(isset($_POST['simpan'])){
            $data = array(
            	'idDataDosen' =>$this->input->post('idDataDosen'),
                'nidn'       =>  $this->input->post('nidn'),
                'namaDosen'      =>  $this->input->post('namaDosen'),
                );
            $insert =  $this->curl->simple_post($this->API.'/dosen', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('dosen');
        }else{
            $data['dosendata'] = json_decode($this->curl->simple_get($this->API.'/dosen'));
         
             $data=array(
					'page_header' => "Data Dosen",
					'page_desc' => "Daftar Dosen",
					'menu_dosen' => 'active',
					'page_content'=>$this->load->view('Dosen/edit',$data,TRUE),	
		);
		$this->parser->parse('starter',$data);
        
        }
    }

    // function edit(){
    //     $
    // }

    function edit()
    {
        if (isset($_POST['mit'])) {
            $data = array(
                'idDataDosen' => $this->input->post('idDataDosen'),
                'nidn'=> $this->input->post('nidn'),
                'namaDosen' =>$this->input->post('namaDosen') );
            $update=$this->curl->simple_put($this->API.'/dosen',$data,array(CURLOPT_BUFFERSIZE=>10));
            if ($update) {
                $this->session->set_flashdata('hasil','OKE');
            } else {
                $this->session->set_flashdata('hasil','GAGAL');
            }
            redirect('dosen');
        } else {
            $param=array('idDataDosen'=>$this->uri->segment(3));
            $data['dosen']=json_decode($this->curl->simple_get($this->API.'/dosen',$param));
            // $this->load->view('test',$data);
             $data=array(
                    'page_header' => "Data Mata Kuliah",
                    'page_desc' => "Daftar Mata Kuliah",
                    'menu_Matkul' => 'active',
                    'page_content'=>$this->load->view('Dosen/edit',$data,TRUE),    
        );
        $this->parser->parse('starter',$data);
        }
        
    }
    
    // delete data mahasiswa
    function delete($idDataDosen){
        if(empty($idDataDosen)){
            redirect('dosen');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/dosen', array('idDataDosen'=>$idDataDosen), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('dosen');

        }
    }


}

?>
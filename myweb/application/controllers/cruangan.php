<?PHP  
/**
* 
*/
class cruangan extends CI_Controller
{
	var $API="";
	function __construct()
	{
		parent::__construct();
		$this->API="http://localhost/myserver/index.php";
	}

	public function index()
    {

        $dataruangan['ruangandata'] = json_decode($this->curl->simple_get($this->API.'/ruangan'));
        $data=array(
					'page_header' => "Data ruangan",
					'page_desc' => "Daftar ruangan",
					'menu_ruangan' => 'active',
					'page_content'=>$this->load->view('Ruangan/form',$dataruangan,TRUE),	
		);
		$this->parser->parse('starter',$data);
        // $this->load->view('dosen/form.php',$datadosen);
    }

    function create(){
       
          if(isset($_POST['simpan'])){
             $data = array(
                // 'idDataRuangan' =>$this->input->post('idDataRuangan'),
                'nomerRuangan'       =>  $this->input->post('nomerRuangan'),
                'kondisiRuangan' => $this->input->post('kondisiRuangan'),
                'lokasiRuangan'      =>  $this->input->post('lokasiRuangan'),
                );

            $insert =  $this->curl->simple_post($this->API.'/ruangan', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('index.php/cruangan');
        }else{
            $data['ruangandata'] = json_decode($this->curl->simple_get($this->API.'/ruangan'));
         
             $data=array(
                    'page_header' => "Data Ruangan",
                    'page_desc' => "Daftar Ruangan",
                    'menu_Ruangan' => 'active',
                    'page_content'=>$this->load->view('Ruangan/edit',$data,TRUE),    
        );
        $this->parser->parse('starter',$data);
        
        }
    }

function edit(){
        if(isset($_POST['mit'])){
            $data = array(
                'idDataRuangan' =>$this->input->post('idDataRuangan'),
                'nomerRuangan'       =>  $this->input->post('nomerRuangan'),
                'kondisiRuangan' => $this->input->post('kondisiRuangan'),
                'lokasiRuangan'      =>  $this->input->post('lokasiRuangan'),
                );

            $update =  $this->curl->simple_put($this->API.'/ruangan', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('index.php/cruangan');
        }else{
            $params = array('idDataRuangan'=>  $this->uri->segment(3));
            $data['ruangandata'] = json_decode($this->curl->simple_get($this->API.'/ruangan',$params));
            $data=array(
                    'page_header' => "Data ruangan",
                    'page_desc' => "Daftar Ruangan",
                    'menu_Ruangan' => 'active',
                    'page_content'=>$this->load->view('Ruangan/edit',$data,TRUE),    
        );
        $this->parser->parse('starter',$data);
        }
    }
    
    // delete data mahasiswa
    function delete($idDataRuangan){
        if(empty($idDataRuangan)){
            redirect('cruangan');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/ruangan', array('idDataRuangan'=>$idDataRuangan), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('index.php/cruangan');

        }
    }


}

?>
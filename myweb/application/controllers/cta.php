<?PHP  
/**
* 
*/
class cta extends CI_Controller
{
	var $API="";
	function __construct()
	{
		parent::__construct();
		$this->API="http://localhost/myserver/index.php";
	}

	public function index()
    {

        $tadata['tadata'] = json_decode($this->curl->simple_get($this->API.'/TA'));
        $data=array(
					'page_header' => "Data TA",
					'page_desc' => "Daftar TA",
					'menu_TA' => 'active',
					'page_content'=>$this->load->view('TA/form',$tadata,TRUE),	
		);
		$this->parser->parse('starter',$data);

    }

    function create(){
       
          if(isset($_POST['simpan'])){
            $data = array(
            	'idData' =>$this->input->post('idData'),
                'nomerTA'       =>  $this->input->post('nomerTA'),
                'judulTA'      =>  $this->input->post('judulTA'),
                'penulis'       =>  $this->input->post('penulis'),
                'tahunTA'      =>  $this->input->post('tahunTA'),
                );
            $insert =  $this->curl->simple_post($this->API.'/TA', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('index.php/cta');
        }else{
            $data['tadata'] = json_decode($this->curl->simple_get($this->API.'/TA'));
         
            $data=array(
                    'page_header' => "Data TA",
                    'page_desc' => "Daftar TA",
                    'menu_TA' => 'active',
					'page_content'=>$this->load->view('TA/edit',$data,TRUE),	
		);
		$this->parser->parse('starter',$data);
        
        }
    }

    function edit(){
        if(isset($_POST['mit'])){
           $data = array(
                'idData' =>$this->input->post('idData'),
                'nomerTA'       =>  $this->input->post('nomerTA'),
                'judulTA'      =>  $this->input->post('judulTA'),
                'penulis'       =>  $this->input->post('penulis'),
                'tahunTA'      =>  $this->input->post('tahunTA'),
                );

            $update =  $this->curl->simple_put($this->API.'/TA', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('index.php/cta');
        }else{
          	$params = array('idData'=>  $this->uri->segment(3));
            $data['tadata'] = json_decode($this->curl->simple_get($this->API.'/TA',$params));
           $data=array(
                    'page_header' => "Data TA",
                    'page_desc' => "Daftar TA",
                    'menu_TA' => 'active',
                    'page_content'=>$this->load->view('TA/edit',$data,TRUE),
		);
		$this->parser->parse('starter',$data);
        }
    }
    
    // delete data mahasiswa
    function delete($idData){
        if(empty($idData)){
            redirect('cta');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/TA', array('idData'=>$idData), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('index.php/cta');

        }
    }


}

?>
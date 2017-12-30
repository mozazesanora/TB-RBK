<?PHP  
/**
* 
*/
class cjampelajaran extends CI_Controller
{
	var $API="";
	function __construct()
	{
		parent::__construct();
		$this->API="http://localhost/myserver/index.php";
	}

	public function index()
    {

        $jampelajarandata['jampelajarandata'] = json_decode($this->curl->simple_get($this->API.'/jampelajaran'));
        $data=array(
					'page_header' => "Data Jam Pelajaran",
					'page_desc' => "Daftar Jam Pelajaran",
					'menu_jampelajaran' => 'active',
					'page_content'=>$this->load->view('Jampelajaran/form',$jampelajarandata,TRUE),	
		);
		$this->parser->parse('starter',$data);
       
    }

    function create(){
       
          if(isset($_POST['simpan'])){
            $data = array(
            	'idDataJamPelajaran' =>$this->input->post('idDataJamPelajaran'),
                'JamPelajaran'       =>  $this->input->post('JamPelajaran'),
                );
            $insert =  $this->curl->simple_post($this->API.'/jampelajaran', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('index.php/cjampelajaran');
        }else{
            $data['jampelajarandata'] = json_decode($this->curl->simple_get($this->API.'/jampelajaran'));
         
             $data=array(
					'page_header' => "Data Jam Pelajaran",
					'page_desc' => "Daftar Jam Pelajaran",
					'menu_JamPelajaran' => 'active',
					'page_content'=>$this->load->view('Jampelajaran/edit',$data,TRUE),	
		);
		$this->parser->parse('starter',$data);
        
        }
    }

    function edit(){
        if(isset($_POST['mit'])){
            $data = array(
                'idDataJamPelajaran' =>$this->input->post('idDataJamPelajaran'),
                'JamPelajaran'       =>  $this->input->post('JamPelajaran'),
                );
            $update =  $this->curl->simple_put($this->API.'/jampelajaran', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('index.php/cjampelajaran');
        }else{
          	$params = array('idDataJamPelajaran'=>  $this->uri->segment(3));
            $data['jampelajarandata'] = json_decode($this->curl->simple_get($this->API.'/jampelajaran',$params));
            $data=array(
                    'page_header' => "Data Jam Pelajaran",
                    'page_desc' => "Daftar Jam Pelajaran",
                    'menu_JamPelajaran' => 'active',
                    'page_content'=>$this->load->view('Jampelajaran/edit',$data,TRUE),  
		);
		$this->parser->parse('starter',$data);
        }
    }
    
    // delete data mahasiswa
    function delete($idDataJamPelajaran){
        if(empty($idDataJamPelajaran)){
            redirect('cjampelajaran');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/jampelajaran', array('idDataJamPelajaran'=>$idDataJamPelajaran), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('index.php/cjampelajaran');

        }
    }


}

?>
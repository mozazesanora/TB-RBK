<?PHP  
/**
* 
*/
class cbuku extends CI_Controller
{
	var $API="";
	function __construct()
	{
		parent::__construct();
		$this->API="http://localhost/myserver/index.php";
	}

	public function index()
    {

        $databuku['bukudata'] = json_decode($this->curl->simple_get($this->API.'/buku'));
        $data=array(
					'page_header' => "Data buku",
					'page_desc' => "Daftar buku",
					'menu_buku' => 'active',
					'page_content'=>$this->load->view('Buku/form',$databuku,TRUE),	
		);
		$this->parser->parse('starter',$data);
        // $this->load->view('dosen/form.php',$datadosen);
    }

    function create(){
       
          if(isset($_POST['simpan'])){
            $data = array(
            	'idDataBuku' =>$this->input->post('idDataBuku'),
                'nomerBuku'       =>  $this->input->post('nomerBuku'),
                'judulBuku'      =>  $this->input->post('judulBuku'),
                'penulis' => $this ->input->post('penulis'),
                );
            $insert =  $this->curl->simple_post($this->API.'/buku', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('index.php/cbuku');
        }else{
            $data['bukudata'] = json_decode($this->curl->simple_get($this->API.'/buku'));
         
             $data=array(
                    'page_header' => "Data buku",
                    'page_desc' => "Daftar buku",
                    'menu_buku' => 'active',
					'page_content'=>$this->load->view('Buku/edit',$data,TRUE),	
		);
		$this->parser->parse('starter',$data);
        
        }
    }

    function edit(){
        if(isset($_POST['mit'])){
            $data = array(
                'idDataBuku' =>$this->input->post('idDataBuku'),
                'nomerBuku'       =>  $this->input->post('nomerBuku'),
                'judulBuku'      =>  $this->input->post('judulBuku'),
                'penulis' => $this ->input->post('penulis'),
                );

            $update =  $this->curl->simple_put($this->API.'/buku', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('index.php/cbuku');
        }else{
          	$params = array('idDataBuku'=>  $this->uri->segment(3));
            $data['bukudata'] = json_decode($this->curl->simple_get($this->API.'/buku',$params));
           $data=array(
                    'page_header' => "Data buku",
                    'page_desc' => "Daftar buku",
                    'menu_buku' => 'active',
                    'page_content'=>$this->load->view('Buku/edit',$data,TRUE),  
		);
		$this->parser->parse('starter',$data);
        }
    }
    
    // delete data mahasiswa
    function delete($idDataBuku){
        if(empty($idDataBuku)){
            redirect('cbuku');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/buku', array('idDataBuku'=>$idDataBuku), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('index.php/cbuku');

        }
    }


}

?>
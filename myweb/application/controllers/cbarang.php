<?PHP  
/**
* 
*/
class cbarang extends CI_Controller
{
	var $API="";
	function __construct()
	{
		parent::__construct();
		$this->API="http://localhost/myserver/index.php";
	}

	public function index()
    {

        $databarang['barangdata'] = json_decode($this->curl->simple_get($this->API.'/barang'));
        $data=array(
					'page_header' => "Data Barang",
					'page_desc' => "Daftar Barang",
					'menu_Barang' => 'active',
					'page_content'=>$this->load->view('Barang/form',$databarang,TRUE),	
		);
		$this->parser->parse('starter',$data);
        
    }

    function create(){
       
          if(isset($_POST['simpan'])){
            $data = array(
            	'idDataBarang' =>$this->input->post('idDataBarang'),
                'namaBarang'       =>  $this->input->post('namaBarang'),
                'jenisBarang'      =>  $this->input->post('jenisBarang'),
                'jumlahBarang'      =>  $this->input->post('jumlahBarang'),
                );
            $insert =  $this->curl->simple_post($this->API.'/barang', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('index.php/cbarang');
        }else{
            $data['barangdata'] = json_decode($this->curl->simple_get($this->API.'/barang'));
         
             $data=array(
                    'page_header' => "Data Barang",
                    'page_desc' => "Daftar Barang",
                    'menu_Barang' => 'active',
                    'page_content'=>$this->load->view('Barang/edit',$data,TRUE),   
		);
		$this->parser->parse('starter',$data);
        
        }
    }

    function edit(){
        if(isset($_POST['mit'])){
          $data = array(
                'idDataBarang' =>$this->input->post('idDataBarang'),
                'namaBarang'       =>  $this->input->post('namaBarang'),
                'jenisBarang'      =>  $this->input->post('jenisBarang'),
                'jumlahBarang'      =>  $this->input->post('jumlahBarang'),
                );

            $update =  $this->curl->simple_put($this->API.'/barang', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('index.php/cbarang');
        }else{
          	$params = array('idDataBarang'=>  $this->uri->segment(3));
            $data['barangdata'] = json_decode($this->curl->simple_get($this->API.'/barang',$params));
            $data=array(
                    'page_header' => "Data Barang",
                    'page_desc' => "Daftar Barang",
                    'menu_Barang' => 'active',
                    'page_content'=>$this->load->view('Barang/edit',$data,TRUE),   
		);
		$this->parser->parse('starter',$data);
        }
    }
    
    // delete data mahasiswa
    function delete($idDataBarang){
        if(empty($idDataBarang)){
            redirect('cbarang');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/barang', array('idDataBarang'=>$idDataBarang), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('index.php/cbarang');

        }
    }


}

?>
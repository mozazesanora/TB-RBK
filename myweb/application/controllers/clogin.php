<?php  
/**
* 
*/
class clogin extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();       
        $this->load->model('Mlogin');
    }

	public function index(){
        if($this->session->userdata('username')){
               redirect('login','refresh');
        }else{ 
            $this->login();
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $cekdata=$this->Mlogin->ceklogin($username,$password);
            if($cekdata->num_rows() == 1)
            {
            foreach($cekdata->result() as $data){
                $sess_data['username'] = $data->username;
                $sess_data['namaAdmin'] = $data->namaAdmin;
                $sess_data['level'] = $data->level;
                $this->session->set_userdata($sess_data);
            }
            if($this->session->userdata('level') == 1)
            {
               redirect(site_url().'home');
            }
            }
        }
    }

    function login(){
        $this->load->view('login');
    }


    function logout(){
        $this->session->sess_destroy();
        redirect('login','refresh');
    }

}
?>
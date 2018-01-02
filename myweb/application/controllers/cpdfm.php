
<?php
Class cpdfm extends CI_Controller{
    
    var $API="";
    var $matkuldata="";
    function __construct()
    {
        parent::__construct();
        $this->API="http://localhost/myserver/index.php";
        $this->load->library('pdf');
    }
    
    function index(){
         $matkuldata = json_decode($this->curl->simple_get($this->API.'/matkul'));
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'DATA MAHASISWA FAKULTAS TEKNIK',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'JURUSAN INFORMATIKA',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(100,6,'ID MATAKULIAH',1,0);
        $pdf->Cell(85,6,'NAMA MATAKULIAH',1,1);
        $pdf->SetFont('Arial','',10);
        foreach ($matkuldata as $key) {
            $pdf->Cell(100,6,$key->idMatkul,1,0);
            $pdf->Cell(85,6,$key->namaMatkul,1,1);
        }
        $pdf->Output();
    }
}
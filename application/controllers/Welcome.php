<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['kitab_list']	= $this->db->order_by('id_kitab', 'DESC')->get('kitab')->result_array();
		$data['banyak_dicari']	= $this->db->limit(3)->order_by('id_kitab', 'DESC')->get('kitab')->result_array();
		$this->load->view('_partials/index.html', $data);
	}
	public function dashboard()
	{
		$data['total_kitab']	= $this->db->get('kitab')->num_rows();
		$data['total_kalimat']	= $this->db->get('kitab_isi')->num_rows();
		$this->load->view('dashboard.html', $data);
	}
	public function kitab_detil($id=NULL)
	{
		$data['kitab']	= $this->db->get_where('kitab', ['id_kitab' => $id])->row_array();
		// $data['isi']	= $this->db->get_where('kitab_isi', ['id_kitab' => $id])->result_array();
		$data['bab']	= $this->db->get_where('kitab_bab', ['id_kitab' => $id])->result_array();
		$this->load->view('kitab.html', $data);
	}
	
    public function kitab_cetak($id=NULL)
    {
        error_reporting(0);
        ini_set('display_errors', 0);
		$data['kitab']    = $this->db->get_where('kitab', ['id_kitab' => $id])->row_array();
		// $data['kitab_isi']= $this->db->get_where('kitab_isi', ['id_kitab' => $id])->result_array();
		$data['kitab_bab']= $this->db->get_where('kitab_bab', ['id_kitab' => $id])->result_array();
        $data['total_isi']= $this->db->get_where('kitab_isi', ['id_kitab' => $id])->num_rows();
        $this->db->reconnect();
        $this->load->view('kitab_cetak', $data);
		
		// $kitab    	= $this->db->get_where('kitab', ['id_kitab' => $id])->row_array();
		// $kitab_isi	= $this->db->get_where('kitab_isi', ['id_kitab' => $id])->result_array();
		// $this->load->library('Pdf');
		// error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        // $pdf = new FPDF('P', 'mm', 'Letter');
        // $pdf->AddPage();
        // $pdf->SetFont('Arial',	'B',	16); // Setting Font, Parameter 'jenis', 'ketebalan', 'ukuran'
        // $pdf->Cell(0,	7,	$kitab['judul'],	0,	1,	'C');  // Setting Baris, Parameter 'Lebar', 'Tinggi', 'Value', 'Border', 'Posisi pindah setelah selesai, 1 = pindah bawah, 0 untuk tetap di 1 baris', 'Text Align'
        
		// $pdf->SetFont('Arial',	'',	12);
        // $pdf->Cell(0,	7,	'Penulis : '.$kitab['penulis'].', '.date('d F Y', strtotime($kitab['tanggal'])),		0,	1, 'C');
		// $pdf->Cell(0,	7,	'', 0, 1);

        // $pdf->SetFont('Arial','B',10);
        // $pdf->Cell(100,	20,	'No',			1, 	0,	'C');
        // $pdf->Cell(100,	20,	'Nama Pegawai',	1, 	0,	'C');
		// $pdf->Cell(0,	20,	'', 0, 1);
		// foreach($kitab_isi as $ki) {
		// 	$pdf->SetFont('Arial','B',16);
		// 	$pdf->Cell(10,	7,	$ki['kalimat_utama'], 0, 1);
		// 	$pdf->SetFont('Arial','',10);
		// 	$pdf->Cell(10,	7,	$ki['kalimat_miring'], 0, 0);
		// }

        // $pdf->SetFont('Arial','',10);
        // $pdf->Output();
    }
	public function login()
	{
		$this->load->view('login.html');
		// $this->load->view('dashboard.html');
	}
	
    public function cek() {
        $username   = $this->input->post('username');
		$password	= $this->input->post('password');
		
		$where  = array(
            'password'  => $password,
            'username'  => $username
			);
			
		$cek    = $this->db->get_where("admin", $where)->num_rows();
		
		if ($cek > 0) 
        {
            $session_user = array(
                'username'  => $username,
                'status' => "login"
			);
            $this->session->set_userdata($session_user);

            $admin  = $this->db->get_where('admin', ['username' => $username])->row();

			$this->session->set_flashdata('success', 'Selamat Datang '.$admin->nama); 
			$this->session->set_flashdata('admin', $username); 
			redirect(base_url('admin'));
			
		} else {
            $this->session->set_flashdata('danger', 'Username dan Password Salah!'); 
			redirect(base_url('welcome'));
			// $this->load->view('user_index.php', $data);
		}
    }
}

<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model', 'adm');
		$this->load->library('session');
		// $this->load->library('excel', 'session');

        if ($this->session->has_userdata('username') == NULL) {
            redirect(base_url('welcome'));
        }
    }
	public function index()
	{
        $admin          = $this->session->userdata();
        $data['admin']  = $this->db->get_where('admin', ['username' => $admin['username']])->row_array();
		$data['kitab']  = $this->db->order_by('id_kitab', 'DESC')->get_where('kitab')->result_array();
		
        $this->load->view('admin/_partials/index.html', $data);
		// $this->load->view('admin/_partials/index.html');
	}
    public function dashboard()
    {
        // error_reporting(0);
        // ini_set('display_errors', 0);

        $this->load->view('admin/dashboard');
    }

    public function kitab_isi_import_excel($id_kitab=NULL)
    {
        error_reporting(0);
        ini_set('display_errors', 0);
        $id_bab = $this->input->post('id_bab');
		$this->load->library('excel');
		if (isset($_FILES["fileExcel"]["name"])) {
			$path   = $_FILES["fileExcel"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow     = $worksheet->getHighestRow();
				$highestColumn  = $worksheet->getHighestColumn();	
				for($row=2; $row<=$highestRow; $row++)
				{
					$kalimat_utama  = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$kalimat_miring = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$footnote       = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$kalimat_latin  = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$footnote2      = $worksheet->getCellByColumnAndRow(4, $row)->getValue();

                    if($kalimat_utama != '') {
                        $temp_data[] = array(
                            'id_kitab'          => $id_kitab,
                            'id_bab'            => $id_bab,
                            'kalimat_utama'     => $kalimat_utama,
                            'kalimat_miring'	=> $kalimat_miring,
                            'footnote'	        => $footnote,
                            'kalimat_latin'	    => $kalimat_latin,
                            'footnote2'	        => $footnote2,
                        );
                    } elseif($kalimat_miring != '') {
                        $temp_data[] = array(
                            'id_kitab'          => $id_kitab,
                            'id_bab'            => $id_bab,
                            'kalimat_utama'     => $kalimat_utama,
                            'kalimat_miring'	=> $kalimat_miring,
                            'footnote'	        => $footnote,
                            'kalimat_latin'	    => $kalimat_latin,
                            'footnote2'	        => $footnote2,
                        );
                    }
				}
			}
			$insert = $this->adm->kitab_isi_import_excel($temp_data);
			if ($insert) {
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Import ke Database');
                redirect(base_url('admin/kitab/'.$id_kitab));
                // redirect($_SERVER['HTTP_REFERER']);
			} else {
				$this->session->set_flashdata('status', '<span class="glyphicon glyphicon-remove"></span> Terjadi Kesalahan');
                redirect(base_url('admin/kitab/'.$id_kitab));
                // redirect($_SERVER['HTTP_REFERER']);
			}
		} else {
			echo "Tidak ada file yang masuk";
		}
    }

    // START :: Controller Kitab
    public function kitab_list()
    {
        // error_reporting(0);
        // ini_set('display_errors', 0);
        $admin          = $this->session->userdata();
        $data['admin']  = $this->db->get_where('admin', ['username' => $admin['username']])->row_array();
		$data['kitab']  = $this->db->order_by('id_kitab', 'DESC')->get('kitab')->result_array();

        $this->load->view('admin/kitab_list', $data);
    }
    public function kitab_tambah()
    {
        // error_reporting(0);
        // ini_set('display_errors', 0);
        if ($this->input->post('judul') != NULL) {
            $this->adm->kitab_tambah();
            $this->session->set_flashdata('success', 'Berhasil ditambahkan!');
            redirect(base_url('admin/kitab_list'));
        } else {
            $this->session->set_flashdata('danger', 'Gagal ditambahkan!');
            redirect(base_url('admin/kitab_list'));
        }
    }
    public function kitab_update()
    {
        // error_reporting(0);
        // ini_set('display_errors', 0);
        if ($this->input->post('judul') != NULL) {
            $this->adm->kitab_update();
            $this->session->set_flashdata('success', 'Berhasil diupdate!');
            redirect(base_url('admin/kitab/'.$this->input->post('id_kitab')));
        } else {
            $this->session->set_flashdata('danger', 'Gagal diupdate!');
            redirect(base_url('admin/kitab/'.$this->input->post('id_kitab')));
        }
    }
    public function kitab_hapus($id_kitab=NULL)
    {
        // error_reporting(0);
        // ini_set('display_errors', 0);
        if ($id_kitab != NULL) {
            $this->adm->kitab_hapus($id_kitab);
            $this->session->set_flashdata('success', 'Berhasil dihapus!');
            redirect(base_url('admin/kitab_list/'));
        } else {
            $this->session->set_flashdata('danger', 'Gagal dihapus!');
            redirect(base_url('admin/kitab_list/'));
        }
    }
    public function kitab($id=NULL)
    {
        error_reporting(0);
        ini_set('display_errors', 0);
		$kitab              = $this->db->get_where('kitab', ['id_kitab' => $id])->row_array();
		$data['admin']      = $this->db->get_where('admin', ['id' => $kitab['admin']])->row_array();
		$data['kitab']      = $this->db->get_where('kitab', ['id_kitab' => $id])->row_array();
		$data['kitab_isi']  = $this->db->get_where('kitab_isi', ['id_kitab' => $id])->result_array();
		$data['kitab_bab']  = $this->db->get_where('kitab_bab', ['id_kitab' => $id])->result_array();

        $this->load->view('admin/kitab', $data);
    }
    public function kitab_cetak($id=NULL)
    {
        error_reporting(0);
        ini_set('display_errors', 0);
		$data['kitab']    = $this->db->get_where('kitab', ['id_kitab' => $id])->row_array();
        $this->db->reconnect();
		$data['kitab_bab']= $this->db->get_where('kitab_bab', ['id_kitab' => $id])->result_array();
        $data['total_isi']= $this->db->get_where('kitab_isi', ['id_kitab' => $id])->num_rows();
        $this->load->view('admin/kitab_cetak', $data);
    }
    public function kitab_bab_tambah()
    {
        // error_reporting(0);
        // ini_set('display_errors', 0);
        if ($this->input->post('id_kitab') != NULL) {
            $this->adm->kitab_bab_tambah();
            $this->session->set_flashdata('success', 'Berhasil ditambahkan!');
            redirect(base_url('admin/kitab/'.$this->input->post('id_kitab')));
        } else {
            $this->session->set_flashdata('danger', 'Gagal ditambahkan!');
            redirect(base_url('admin/kitab/'.$this->input->post('id_kitab')));
        }
    }
    public function kitab_bab_update()
    {
        // error_reporting(0);
        // ini_set('display_errors', 0);
        if ($this->input->post('id_bab') != NULL) {
            $this->adm->kitab_bab_update();
            $this->session->set_flashdata('success', 'Berhasil diupdate!');
            redirect(base_url('admin/kitab/'.$this->input->post('id_kitab')));
        } else {
            $this->session->set_flashdata('danger', 'Gagal diupdate!');
            redirect(base_url('admin/kitab/'.$this->input->post('id_kitab')));
        }
    }
    public function kitab_bab_hapus($id_kitab=NULL, $id_bab=NULL)
    {
        // error_reporting(0);
        // ini_set('display_errors', 0);
        if ($id_bab != NULL) {
            $this->adm->kitab_bab_hapus($id_kitab, $id_bab);
            $this->session->set_flashdata('success', 'Berhasil dihapus!');
            redirect(base_url('admin/kitab/'.$id_kitab));
        } else {
            $this->session->set_flashdata('danger', 'Gagal dihapus!');
            redirect(base_url('admin/kitab/'.$id_kitab));
        }
    }
    public function kitab_bab_isi_hapus($id_kitab=NULL, $id_bab=NULL)
    {
        // error_reporting(0);
        // ini_set('display_errors', 0);
        $detil_bab  = $this->db->get_where('kitab_bab', ['id_bab' => $id_bab])->row_array();
        if ($id_bab != NULL) {
            $this->adm->kitab_bab_isi_hapus($id_kitab, $id_bab);
            $this->session->set_flashdata('success', 'Isi Bab "'.$detil_bab['judul'].' - '.$detil_bab['urutan'].'" Berhasil dihapus!');
            redirect(base_url('admin/kitab/'.$id_kitab));
        } else {
            $this->session->set_flashdata('danger', 'Isi Bab "'.$detil_bab['judul'].' - '.$detil_bab['urutan'].'" Gagal dihapus!');
            redirect(base_url('admin/kitab/'.$id_kitab));
        }
    }
    public function kitab_isi_tambah()
    {
        // error_reporting(0);
        // ini_set('display_errors', 0);
        if ($this->input->post('id_kitab') != NULL) {
            $this->adm->kitab_isi_tambah();
            $this->session->set_flashdata('success', 'Berhasil ditambahkan!');
            redirect(base_url('admin/kitab/'.$this->input->post('id_kitab')));
        } else {
            $this->session->set_flashdata('danger', 'Gagal ditambahkan!');
            redirect(base_url('admin/kitab/'.$this->input->post('id_kitab')));
        }
    }
    public function kitab_isi_update()
    {
        // error_reporting(0);
        // ini_set('display_errors', 0);
        if ($this->input->post('id_isi') != NULL) {
            $this->adm->kitab_isi_update();
            $this->session->set_flashdata('success', 'Berhasil diupdate!');
            redirect(base_url('admin/kitab/'.$this->input->post('id_kitab')));
        } else {
            $this->session->set_flashdata('danger', 'Gagal diupdate!');
            redirect(base_url('admin/kitab/'.$this->input->post('id_kitab')));
        }
    }
    public function kitab_isi_hapus($id_kitab=NULL, $id_isi=NULL)
    {
        // error_reporting(0);
        // ini_set('display_errors', 0);
        if ($id_isi != NULL) {
            $this->adm->kitab_isi_hapus($id_kitab, $id_isi);
            $this->session->set_flashdata('success', 'Berhasil dihapus!');
            redirect(base_url('admin/kitab/'.$id_kitab));
        } else {
            $this->session->set_flashdata('danger', 'Gagal dihapus!');
            redirect(base_url('admin/kitab/'.$id_kitab));
        }
    }
    // END :: Controller Kitab
    // START :: Controller Admin
    public function admin_tambah()
    {
        // error_reporting(0);
        // ini_set('display_errors', 0);
        $admin          = $this->session->userdata();
        $data['admin']  = $this->db->get_where('admin', ['username' => $admin['username']])->row_array();

        $this->load->view('admin/admin_tambah', $data);
    }
    public function admin_tambah_proses()
    {
        // error_reporting(0);
        // ini_set('display_errors', 0);
        $post = $this->input->post();
        $cek_username = $this->db->get_where('admin', ['username' => $post['username']])->num_rows();
        if ($cek_username > 0) {
            $this->session->set_flashdata('danger', 'Username Telah Terpakai, silahkan gunakan username lain!');
            redirect(base_url('admin/admin_tambah'));
        } else {
            $this->adm->admin_tambah();
            $this->session->set_flashdata('success', 'Berhasil ditambahkan!');
            redirect(base_url('admin/admin_tambah'));
        }
    }
    public function admin_update_proses()
    {
        // error_reporting(0);
        // ini_set('display_errors', 0);
        $post = $this->input->post();
        $cek_username = $this->db->get_where('admin', ['username' => $post['username']])->num_rows();
        if ($cek_username > 1) {
            $this->session->set_flashdata('danger', 'Username Telah Terpakai, silahkan gunakan username lain!');
            redirect(base_url('admin/admin_list'));
        } else {
            $this->adm->admin_update();
            $this->session->set_flashdata('success', 'Berhasil diupdatekan!');
            redirect(base_url('admin/admin_list'));
        }
    }
    public function admin_hapus_proses($id=NULL)
    {
        // error_reporting(0);
        // ini_set('display_errors', 0);
        $post = $this->input->post();
        $cek_username = $this->db->get_where('admin', ['username' => $post['username']])->num_rows();
        if ($cek_username > 0) {
            $this->session->set_flashdata('danger', 'Username Telah Terpakai, silahkan gunakan username lain!');
            redirect(base_url('admin/admin_list'));
        } else {
            $this->adm->admin_delete($id);
            $this->session->set_flashdata('success', 'Berhasil dihapus!');
            redirect(base_url('admin/admin_list'));
        }
    }
    public function admin_list()
    {
        // error_reporting(0);
        // ini_set('display_errors', 0);
        $admin          = $this->session->userdata();
        $data['admin']  = $this->db->get_where('admin', ['username' => $admin['username']])->row_array();
		$data['admin_list']  = $this->db->get('admin')->result_array();

        $this->load->view('admin/admin_list', $data);
    }
    // END :: Controller Admin

    public function logout() {
        $this->session->sess_destroy();
		redirect(base_url(''));
    }
}
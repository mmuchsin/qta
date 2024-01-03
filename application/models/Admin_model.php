<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class admin_model extends CI_Model
{
  // START :: Model Admin
  public function admin_tambah() {
    $post = $this->input->post();
    $data = [
      'username'=> $post['username'],
      'password'=> $post['password'],
      'nama'    => $post['nama'],
      'no_hp'   => $post['no_hp'],
      'alamat'  => $post['alamat'],
    ];
    $this->db->insert('admin', $data);
    return $this->db->affected_rows();
  }
  public function admin_update() {
    $post = $this->input->post();
    $data = [
      'username'=> $post['username'],
      'password'=> $post['password'],
      'nama'    => $post['nama'],
      'no_hp'   => $post['no_hp'],
      'alamat'  => $post['alamat'],
    ];
    $this->db->update('admin', $data, ['id' => $post['id']]);
    return $this->db->affected_rows();
  }
  public function admin_delete($id=NULL) {
    $post = $this->input->post();
    $this->db->delete('admin', ['id' => $id]);
    return $this->db->affected_rows();
  }
  // END :: Model Admin

  // START :: Model Kitab
  public function kitab_tambah() {
    $post = $this->input->post();
    $data = [
      'judul'     => $post['judul'],
      'tanggal'   => $post['tanggal'],
      'penulis'   => $post['penulis'],
      'admin'     => $post['admin'],
    ];
    $this->db->insert('kitab', $data);
    return $this->db->affected_rows();
  }
  public function kitab_update() {
    $post = $this->input->post();
    $data = [
      'judul'     => $post['judul'],
      'tanggal'   => $post['tanggal'],
      'penulis'   => $post['penulis'],
    ];
    $this->db->update('kitab', $data, ['id_kitab' => $post['id_kitab']]);
    return $this->db->affected_rows();
  }
  public function kitab_hapus($id_kitab=NULL) {
    if($id_kitab != NULL) {
      $this->db->delete('kitab_isi', ['id_kitab' => $id_kitab]);
    }
    
    if($id_kitab != NULL) {
      $this->db->delete('kitab_isi', ['id_kitab' => $id_kitab]);
    }

    $this->db->delete('kitab', ['id_kitab' => $id_kitab]);
    return $this->db->affected_rows();
  }
  public function kitab_bab_tambah() {
    $post = $this->input->post();
    $data = [
      'id_kitab'  => $post['id_kitab'],
      'urutan'    => $post['urutan'],
      'judul'     => $post['judul'],
    ];
    $this->db->insert('kitab_bab', $data);
    return $this->db->affected_rows();
  }
  public function kitab_bab_update() {
    $post = $this->input->post();
    $data = [
      'urutan'  => $post['urutan'],
      'judul'   => $post['judul'],
    ];
    $this->db->update('kitab_bab', $data, ['id_bab' => $post['id_bab']]);
    return $this->db->affected_rows();
  }
  public function kitab_bab_hapus($id_kitab=NULL, $id_bab=NULL) {
    if($id_bab != NULL) {
        $this->db->delete('kitab_isi', ['id_bab' => $id_bab, 'id_kitab' => $id_kitab]);
    }
    $this->db->delete('kitab_bab', ['id_bab' => $id_bab, 'id_kitab' => $id_kitab]);
    return $this->db->affected_rows();
  }
  public function kitab_isi_tambah() {
    $post = $this->input->post();
    // $data = [
    //   'id_kitab'      => $post['id_kitab'],
    //   'kalimat_utama' => $post['kalimat_utama'],
    //   'kalimat_miring'=> $post['kalimat_miring'],
    // ];

    $data = array();
    for ($i=1; $i < 11; $i++) {
      if ($post['kalimat_utama'.$i] != '') {
        $data[] = array(
          'id_isi'        => '',
          'id_kitab'      => $post['id_kitab'],
          'kalimat_utama' => $post['kalimat_utama'.$i],
          'kalimat_miring'=> $post['kalimat_miring'.$i],
          'footnote'      => $post['footnote'.$i],
        );
      }
    }
    $this->db->insert_batch('kitab_isi', $data);
    return $this->db->affected_rows();
  }
  public function kitab_isi_update() {
    $post = $this->input->post();
    $data = [
      'kalimat_utama' => $post['kalimat_utama'],
      'kalimat_miring'=> $post['kalimat_miring'],
      'footnote'      => $post['footnote'],
      'footnote2'     => $post['footnote2'],
      'kalimat_latin' => $post['kalimat_latin'],
    ];
    $this->db->update('kitab_isi', $data, ['id_isi' => $post['id_isi']]);
    return $this->db->affected_rows();
  }
  public function kitab_isi_hapus($id_kitab=NULL, $id_isi=NULL) {
    $this->db->delete('kitab_isi', ['id_isi' => $id_isi, 'id_kitab' => $id_kitab]);
    return $this->db->affected_rows();
  }
  public function kitab_bab_isi_hapus($id_kitab=NULL, $id_bab=NULL) {
    $this->db->delete('kitab_isi', ['id_bab' => $id_bab, 'id_kitab' => $id_kitab]);
    return $this->db->affected_rows();
  }
  public function kitab_isi_import_excel($data=NULL) {
		// $insert   = $this->db->set('id_kitab', 'id_bab', 'kalimat_utama', 'kalimat_miring', 'footnote', 'kalimat_latin', 'footnote2')
    //                       ->insert_batch('kitab_isi', $data);
    $insert   = $this->db->insert_batch('kitab_isi', $data);
		if ($insert) {
			return true;
		}
	}
  // END :: Model Kitab

}
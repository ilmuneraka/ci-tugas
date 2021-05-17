<?php

class Blog_model extends CI_Model {

  public function get_posts() {
    $this->load->database();
    // $query = $this->db->query('SELECT * FROM post');
    $query = $this->db->get('post');
    return $query->result();
  }

  public function insert_post($judul, $konten) {
    $this->load->database();
    // $this->db->query("INSERT INTO post (judul, konten) VALUES ('$judul', '$konten')");
    $data = array(
        'judul' => $judul,
        'konten' => $konten
    );
    $this->db->insert('post', $data);
  }

  public function delete_post($id) {
    $this->load->database();
    // $this->db->query("DELETE FROM post WHERE id = $id");
    $this->db->delete('post', array('id' => $id));
  }

  public function getPostById($id) {
    $this->load->database();
    // $query = $this->db->query("SELECT * FROM post WHERE id = $id");
    $this->db->where('id', $id);
    $query = $this->db->get('post');
    // $query = $this->db->get_where('post', array('id' => $id));
    return $query->result();
  }

  public function update_post($id, $judul, $konten) {
      $this->load->database();
    //   $this->db->query("UPDATE post SET judul='$judul', konten='$konten' WHERE id=$id");
      $data = array(
          'judul' => $judul,
          'konten' => $konten
      );

      $this->db->where('id', $id);
      $this->db->update('post', $data);
  }
}
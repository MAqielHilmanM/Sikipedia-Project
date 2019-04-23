<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Article_Model extends CI_model{
  private $_table = 't_article';

  public $id;
  public $article;
  public $create_date = null;

  public function loadById($id){
    return $this->db->get_where($this->_table,array('id' => $id))->row();
  }

  public function loadAll(){
    return $this->db->get($this->_table)->result();
  }

  public function loadBySearch($q){
    $this->db->select('*');
    $this->db->from($this->_table);
    $this->db->like('id', $q);
    $this->db->or_like('article', $q);

    $query = $this->db->get();
    return $query->result();
  }



  public function create(){
    $post = $this->input->post();
    $this->id = uniqid();
    $this->article = $post['article'];
    $this->create_date = null;
    $this->db->insert($this->_table,$this);
  }

  public function update($id){
      $post = $this->input->post();
      $this->id = $id;
      $this->article = $post['article'];
      $this->create_date = null;
      $this->db->update($this->_table, $this, array('id' => $id));
  }

  public function delete($id){
    return $this->db->delete($this->_table,array('id' => $id));
  }
}

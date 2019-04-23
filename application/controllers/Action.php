<?php

class Action extends CI_Controller {
  public function __construct()
  {
    parent::__construct();

    $this->load->database();
    $this->load->helper('url');
    $this->load->model('article_model');
  }

  public function doEdit($id = null){
    if(!isset($id)) redirect('Wikipedia');

    $article = $this->article_model;
    $article->update($id);
    redirect('wiki/'.$id);
  }

  public function doSearch(){
      $q = $this->input->post('search');
      redirect('wiki/'.$q);
  }

  public function doLogout(){
    $this->session->unset_userdata('userName');
    redirect('wikipedia/');
  }
}

<?php

class Wiki extends CI_Controller {
  public function __construct()
  {
    parent::__construct();

    $this->load->database();
    $this->load->helper('url');
    $this->load->model('article_model');
  }

  function _remap($method = 'main_page', $args = null) {
    if($args != null)
      $this->index($method,'edit');
    else
      $this->index($method,'');
  }

  public function index($key, $type)
  {
    // data Dummy
    $data['id'] = $key;
    $data['title'] = $this->parserTitle($key);
    $data['user'] = $this->session->userdata('userName');
    if($key == 'Main_Page' or $key == '' or $key == null or $key == 'index'){
      $this->load->view('v_home',$data);
    }else if($type == 'edit'){
      $result = $this->article_model->loadById($key);
      if($result != null){
        $data['article'] = $result->article;
        $this->load->view('v_edit',$data);
      }else{
        $data['result'] = $this->article_model->loadBySearch($key);
        $this->load->view('v_search',$data);
      }
    }else {
      $result = $this->article_model->loadById($key);
      if($result != null){
        $data['article'] = $this->parserWikipedia($result->article);
        $this->load->view('v_wiki',$data);
      }else{
        $search = $this->article_model->loadBySearch($key);
        if(count($search)==0 or count($search) > 1){
          $data['result'] = $search;
          $this->load->view('v_search',$data);
        }else{
          redirect('wiki/'.$search[0]->id);
        }
      }
    }
  }

  private function parserTitle($title){
    $res = "";
    for ($i=0; $i < strlen($title) ; $i++) {
      if($title{$i} == '_'){
        $res .= " ";
      }else {
        $res .= $title{$i};
      }
    }
    return $res;
  }

  private function parserWikipedia($plain){
    if($plain != null){
      $hasStarted = false;
      $boldCount = 0;
      $quoteCount = 0;
      $text = "";
      for ($i=0; $i < strlen($plain) ; $i++) {
        if($plain{$i} != '=' && $plain{($i - 1)} == '='){
          if($boldCount != 0) {
            if(!$hasStarted){
              if($boldCount == 2){
                $text .= '</br>';
                $text .= '</br>';
                $text .= '<h2><span class="mw-headline" id="lorem">';
              }else if($boldCount == 3){
                $text .= '</br>';
                $text .= '</br>';
                $text .= '<h3><span class="mw-headline" id="lorem">';
              }
              $hasStarted=true;
              $boldCount = 0;
            }else{
              if($boldCount == 2){
                $text .= '</span></h2>';
              }else if($boldCount == 3){
                $text .= '</span></h3>';
                $text .= '</br>';
              }
              $hasStarted=false;
              $boldCount = 0;
            }
          }
        }

        if($plain{$i} != "'" && $plain{($i - 1)} == "'"){
          if($quoteCount != 0) {
            if(!$hasStarted){
              if($quoteCount == 2){
                $text .= '<i>';
              }else if($quoteCount == 3){
                $text .= '<b>';
              }
              $hasStarted=true;
              $quoteCount = 0;
            }else{
              if($quoteCount == 2){
                $text .= '</i>';
              }else if($quoteCount == 3){
                $text .= '</b>';
              }
              $hasStarted=false;
              $quoteCount = 0;
            }
          }
        }


        if($plain{$i} == '='){
          $boldCount++;
        }else if($plain{$i} == "'"){
          $quoteCount++;
        }else{
          $text .= $plain{$i};
        }

      }
      return $text;
    }else{
      return $plain;
    }
  }
}

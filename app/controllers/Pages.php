<?php 
  class Pages extends Controller {
    public function __construct(){

    }

    public function index (){
      if(isLoggedIn){
        redirect("posts");
      }
      $data = [
        'title' => 'SharePosts',
        'description' => 'Simple App built on the MarcosMVC PHP Framework'
      ];

      
      $this->view('pages/index', $data);
    }




    public function about (){

      $data = [
        'title' => 'About Us',
        'description' => 'App for sharing posts with your stupid ass friends'
      ];


      $this->view('pages/about', $data);
    }
  }
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load model atau library jika diperlukan
    }

    public function index()
    {
        $this->load->view('home'); // Mengarahkan ke view 'home'
    }
}

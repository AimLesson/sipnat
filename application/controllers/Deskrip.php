<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Deskrip extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['mhs']=$this->db->get('mhs')->result();
        $this->load->view('generate', $data);
    }
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct()
    {
		parent::__construct();
        // $this->load->library('session');
        
		// if($this->session->has_userdata('public') ){
		// 	redirect('/');
		// }
	}
	
	public function aplikasi()
	{
		$this->load->view('private/laporan/aplikasi');
    }
    
	public function lowongan()
	{
		$this->load->view('private/laporan/lowongan');
	}
}

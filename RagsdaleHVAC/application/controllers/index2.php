<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index2 extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('home');
		$this->load->view('templates/footer');
	}

	public function aboutUs(){
		$this->load->view('aboutUs');
	}
}

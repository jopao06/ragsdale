<?php

class Pages extends CI_Controller {

	public function index(){
		$this->load->view('templates/header');
		$this->load->view('pages/home');
		$this->load->view('templates/footer');
	}

	public function view($page = 'home')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			echo("$page");
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/header',$data);
		$this->load->view('pages/'.$page);
		$this->load->view('templates/footer');
	}
	/*public function index()
	{
		$this->load->view('home');
	}

	public function products()
	{
		$this->load->view('products');
	}

	public function aboutUs()
	{
		$this->load->view('aboutUs');
	}*/
}

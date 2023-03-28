<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('container/head');
		$this->load->view('container/header');
		$this->load->view('home');
		$this->load->view('container/script');
	}

	public function manager()
	{
		$this->load->view('container/head');
		$this->load->view('container/header');
		$this->load->view('about/manager');
		$this->load->view('container/script');
	}

	public function contact_us()
	{
		$this->load->view('container/head');
		$this->load->view('container/header');
		$this->load->view('contact/contact_us');
		$this->load->view('container/script');
	}
}

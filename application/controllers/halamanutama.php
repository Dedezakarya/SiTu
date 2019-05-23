<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class halamanutama extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('halamanutama');
	}
	public function home()
	{
		$this->load->view('home');
	}
	public function datasiswa()
	{
		$this->load->view('datasiswa');
	}
		public function transaksi()
	{
		$this->load->view('transaksilks');
	}
		public function laporan()
	{
		$this->load->view('laporan');
	}
			public function reminder()
	{
		$this->load->view('reminder');
	}
	public function forminput()
	{
		$this->load->view('forminput');
	}
}

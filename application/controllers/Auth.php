<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 * @author Isnan Wahyudi <isnanwahyudi4@gmail.com>
	 * @see https://www.ilmuit.my.id/
	 */
	public function index()
	{
		$data['title'] = 'Form Login';
		$this->load->view('template/header', $data);
		$this->load->view('auth/login', $data);
		$this->load->view('template/footer');
	}
	public function registrasi()
	{
		$data['title'] = 'Form Registration';
		$this->load->view('template/header', $data);
		$this->load->view('auth/registrasi', $data);
		$this->load->view('template/footer');
	}
}

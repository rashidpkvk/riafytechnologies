<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riafy extends CI_Controller {
	public function index()
	{
		if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
			$this->load->view('header');
			$this->load->view('search_nse');
			$this->load->view('footer');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if ($username == 'admin' && $password == 'pass') {
				$_SESSION['username'] = $username;
				redirect('/riafy/index/');
			} else {
				$this->load->view('header');
				$this->load->view('login');
				$this->load->view('footer');
			}
		}
	}
	public function logout(){
		$_SESSION['username'] = '';
		// $this->index();
		redirect('/riafy/index/');
	}
	public function searchCompanies()
	{
 		$post_data = file_get_contents('php://input');
 		$data = json_decode($post_data);
		$keyword = $data->keyword;
		$this->load->model('Mdl_companies');
		$result = $this->Mdl_companies->getCompanies($keyword);
		if (isset($result[0])) {
			echo json_encode($result);return;
		}
		return;
	}
	public function getCompany()
	{
 		$post_data = file_get_contents('php://input');
 		$data = json_decode($post_data);
		$companyId = $data->companyId;
		$this->load->model('Mdl_companies');
		$result = $this->Mdl_companies->getCompany($companyId);
		if (isset($result[0])) {
			echo json_encode($result[0]);return;
		}

	}
}

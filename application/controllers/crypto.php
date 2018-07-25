<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crytpo extends CI_Controller {


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
		$name_link1 = 'https://horizon.stellar.org/assets?asset_type=credit_alphanum12&limit=200&order=asc'; 
		$dicoba1 = file_get_contents($name_link1);
		$asset_code1 = json_decode($dicoba1);


			$data = array(
			'asset_code' =>$asset_code1->_embedded->records,
		);

		$this->load->view('json_decode1', $data);
	}

	function kedua(){
		$name_link1 = 'https://horizon.stellar.org/assets?asset_type=credit_alphanum12&limit=200&order=asc'; 
		$dicoba1 = file_get_contents($name_link1);
		$asset_code1 = json_decode($dicoba1);


			$data = array(
			'asset_code' =>$asset_code1->_embedded->records,
		);

		$this->load->view('json_decode1', $data);
	}

}

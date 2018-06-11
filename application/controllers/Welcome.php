<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('welcome_message');
	}

	function redis() {
		$this->load->library('redis1');

		$redis = $this->redis1->config();

		// $set = $redis->set('data2', 'hello, world!');
		$get = $redis->get('daughter');

		echo $get;
	}

	function tes() {
		$this->load->view('tes_view');
	}

	function display() {
		$this->load->view('display_view');
	}
}

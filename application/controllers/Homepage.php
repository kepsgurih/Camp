<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{
	var $API_USER = "";

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
	function __construct()
	{
		parent::__construct();
		require_once APPPATH . '../vendor/autoload.php';
		$this->API = "https://604c6676d3e3e10017d51910.mockapi.io/api/v1/";
	}
	public function index()
	{
		$data['title'] = 'Home';
		$this->load->view('Section/header',$data);
		$this->load->view('Screen/HomeScreen');
		$this->load->view('Section/footer',$data);
	}
	public function in()
	{
		$data['userdata'] = $_SESSION;
		$this->load->view('welcome_message.php', $data);
	}
	public function out()
	{
		session_destroy();
		header('Location: ' . base_url());
	}
	public function login()
	{

		//Step 1: Enter you google account credentials

		$g_client = new Google_Client();

		$g_client->setClientId("362206884080-qpfsespd4ft2ivdi5uk6l3k4nuuper8k.apps.googleusercontent.com");
		$g_client->setClientSecret("0MfVs4IRnCC7w-X97Pd0C_3o");
		$g_client->setRedirectUri("http://localhost/webapp/homepage/login");
		$g_client->setScopes("email");
		$g_client->setScopes(array('profile', 'email'));

		//Step 2 : Create the url
		$auth_url = $g_client->createAuthUrl();
		$data['auth_url'] = $auth_url;

		//Step 3 : Get the authorization  code
		$code = isset($_GET['code']) ? $_GET['code'] : NULL;

		//Step 4: Get access token
		if (isset($code)) {

			try {

				$token = $g_client->fetchAccessTokenWithAuthCode($code);
				$g_client->setAccessToken($token);
			} catch (Exception $e) {
				$data['error_google'] = "error";
			}




			try {
				$pay_load = $g_client->verifyIdToken();
			} catch (Exception $e) {
				$data['error_google'] = "error";
			}
		} else {
			$pay_load = null;
		}

		if (isset($pay_load)) {

			if (!empty($pay_load['email'])); {
				$this->session->set_userdata($pay_load);
				header('Location: ' . base_url());
			}
		}
		$data['title'] = 'Login';
		$this->load->view('Section/header',$data);
		$this->load->view('Login/login',$data);
		$this->load->view('Section/footer');
	}
}

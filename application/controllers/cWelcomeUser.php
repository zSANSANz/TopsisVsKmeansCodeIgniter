<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cWelcomeUser extends CI_Controller {
	public function index()
		{
			$this->template->load('template','welcome_user');
		}
}

?>
<?php

// control class home
class Home extends Controller {
	
	// methode default index
	public function index()
	{
		$data['judul'] = 'Home';
		$this->view('templates/header', $data);
		$this->view('home/index');
		$this->view('templates/footer');
	}
}
<?php


class Page2 {
	
	public function index()
	{
		$data['judul'] = 'Page2';
		$this->view('templates/header', $data);
		$this->view('/index');
		$this->view('templates/footer');
	}

}
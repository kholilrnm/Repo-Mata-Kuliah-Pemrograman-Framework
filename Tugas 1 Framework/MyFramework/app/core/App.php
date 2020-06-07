<?php


class App{

	//properti url
	protected $controller = 'Home';
	protected $method = 'index';
	protected $params = [];
	
	public function __construct()
	{
		$url = $this->parseURL();
		// var_dump($url);

		// kalo misalkan ada default controller (home)
		if ( file_exists('../app/controllers/' . $url[0] . '.php')) {
			$this->controller = $url[0];
			unset($url[0]);
			// var_dump($url);
		}

		//kalo misalkan ndak ada controller home
		require_once '../app/controllers/' . $this->controller . '.php';
		// ditimpa ke yang baru
		$this->controller = new $this->controller;

		// untuk method
		if ( isset($url[1])) {
			if ( method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		// untuk params
		if ( !empty($url)) {
			$this->params = array_values($url);
			// var_dump($url);
		}

		// run controller, method, param jika ada
		call_user_func_array([$this->controller, $this->method], $this->params);

	}

	public function parseURL()
	{
		if (isset($_GET['url'])) {
			// menghapus slash pada URL
			$url = rtrim($_GET['url'], '/');
			// filter clean URL
			$url = filter_var($url, FILTER_SANITIZE_URL);
			// memecah URL dengan batas '/'
			$url = explode('/', $url);
			return $url;
		}
	}
}
  
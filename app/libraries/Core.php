<?php 
	class Core
	{
		protected $controller = 'Users';
		protected $method = 'index';
		protected $params = [];

		/**
		 *
		 */
		public function __construct(){
			$url = $this->url();
			if (file_exists('../app/controllers'.ucwords($url[0]).'.php')) {
				$this->controller = ucwords($url[0]);
				unset($url[0]);
			}

			require_once '../app/controllers/'.$this->controller .'.php';
			$this->controller = new $this->controller;

			// métodos
			if(isset($url[1])){
				if(method_exists($this->controller, $url[1])){
					$this->method = $url[1];
					unset($url[1]);
				}
			}

			//Se eliminaron las posiciones 0 y 1 para dejar solo los parámetros
			$this->params = $url ? array_values($url) : [];

			//Retornar un array de parámetros
			call_user_func_array([$this->controller, $this->method], $this->params);
		}

		public function url(){
			if(isset($_GET['url'])){
				$url = rtrim($_GET['url'],'/');
				$url = filter_var($url, FILTER_SANITIZE_URL);
				$url = explode('/', $url);
				return $url;
			}
		}
	}
?>
<?php 
	
	class Site {

		private $header;
		private $footer;

		public function addHeader($header) {

			$this->header=$header;

		}

		public function addFooter($footer) {

			$this->footer=$footer;

		}

		public function display($title) {

			include $this->header;
			include $this->footer;

		}

	}

 ?>
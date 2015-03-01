<?php

	class Pages extends CI_Controller{
//		public function __construct() {
//			echo '<pre>';
//			print_r(get_declared_classes());
//			echo '</pre>';
//		}

		public function view($page = 'home')
		{
			if (!file_exists('application/views/pages/' . $page . '.php'))
			{
				show_404();
			}

			$data['title'] = ucfirst($page);

			$this->load->view('templates/header', $data);
			$this->load->view('pages/' . $page, $data);
			$this->load->view('templates/footer', $data);
		}

}

?>

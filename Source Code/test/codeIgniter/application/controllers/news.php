<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('articles');
	}

	public function index() {
		$data['show_table'] = $this->view_table();
		$this->load->view('news',$data);
	}

	public function view_table(){
	$result = $this->articles->show_all_news();
		if ($result != false) {
		return $result;
		} else {
		return 'Database is empty !';
	}
	}

	function article($article_id)
	{
		$data['article'] = $this->articles->get_article($article_id);
		$this->load->view('article', $data);
	}

	


}

?>
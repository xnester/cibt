<?php
class Frontpage extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$data['title']='Frontpage';
		$data['headline']='This is the frontpage view.';
		$data['include']='frontpage';//view page
		$this->load->vars($data);
		$this->load->view('template');
	}
}
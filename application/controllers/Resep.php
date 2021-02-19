<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Resep extends CI_Controller
{

	public function index()
	{
	 $this->load->view('resep/list');
	}

	public function pallubasa()
	{
	 $this->load->view('resep/pallubasa');
	}
}

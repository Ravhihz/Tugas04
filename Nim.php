<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nim extends CI_Controller {
	public function index()
	{
		$data['nim'] = "1911502373 - Ravhi Haris Wibowo";
		$this->load->view('nim_view', $data);
		}
	}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function index()
    {
        $data['content'] = "admin/profile";
		$this->load->view("template/adminlte", $data);
    }
}

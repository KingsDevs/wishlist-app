<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
    public function index()
    {
        $this->load->view('templates\header.php');
        $this->load->view('home\index.php');
        $this->load->view('templates\footer.php');
    }

    public function add_wish()
    {
        $this->load->view('templates\header.php');
        $this->load->view('home\add_wish.php');
        $this->load->view('templates\footer.php');
    }

}
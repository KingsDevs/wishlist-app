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

    public function store_data()
    {
        $wishlist_datas[] = array();
        $wishlist_datas['date'] = $this->input->post('date');
        $wishlist_datas['title'] = $this->input->post('title');
        $wishlist_datas['description'] = $this->input->post('description');

        var_dump($wishlist_datas);
    }

}
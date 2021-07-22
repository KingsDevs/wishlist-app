<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
    public function index()
    {
        $this->load->model('WishlistModel');
        $wishlist_datas['wishlist'] = $this->WishlistModel->get_last_entries();

        $this->load->view('templates\header.php');
        $this->load->view('home\index.php',$wishlist_datas);
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
        $wishlist_datas =
        [
            'date' => $this->input->post('date'),
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description')
            
        ];
        

        $this->load->model('WishlistModel');
        $this->WishlistModel->insert_data($wishlist_datas);
        redirect(base_url('home'));
    }

    public function edit_data($id)
    {
        $this->load->model('WishlistModel');
        $data['wishlist'] = $this->WishlistModel->edit_data($id);

        $this->load->view('templates/header.php');
        $this->load->view('home/edit.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function update_data($id)
    {
        $wishlist_datas =
        [
            'date' => $this->input->post('date'),
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description')
        ];

        $this->load->model('WishlistModel');
        $this->WishlistModel->update_data($id, $wishlist_datas);

        redirect(base_url('home'));
    }

    public function delete_data($id)
    {
        $this->load->model('WishlistModel');
        $this->WishlistModel->delete_data($id);

        redirect(base_url('home'));
    }

}
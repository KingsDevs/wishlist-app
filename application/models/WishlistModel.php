<?php

class WishlistModel extends CI_Model
{
    public function insert_data($datas)
    {
        return $this->db->insert('wishlist', $datas);
    }

    public function get_last_entries()
    {
        $query = $this->db->get('wishlist', 20);
        return $query->result();
    }

}
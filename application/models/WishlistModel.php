<?php

class WishlistModel extends CI_Model
{
    public function insert_data($datas)
    {
        return $this->db->insert('wishlist', $datas);
    }

    public function get_last_ten_entries()
    {
        $query = $this->db->get('wishlist', 10);
        return $query->result();
    }

}
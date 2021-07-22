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

    public function edit_data($id)
    {
        $query = $this->db->get_where('wishlist', ['id'=>$id]);
        return $query->row();

    }

    public function update_data($id, $wishlist_datas)
    {
        $this->db->where('id', $id);
        return $this->db->update('wishlist', $wishlist_datas);
    }

    public function delete_data($id)
    {
        return $this->db->delete('wishlist', ['id' => $id]);
    }

}
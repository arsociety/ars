<?php 

class Artikel extends CI_Model
    {
	
	private $_table = "artikel";

    public $id;
    public $judul;
    public $penulis;
    public $isi;
    public $gambar;
    public $date;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function get_last_3()
    {
                    $this->db->order_by('id',"DESC");
            $query = $this->db->get('artikel', 3);
                    
            return $query->result();
    }

    }

 ?>
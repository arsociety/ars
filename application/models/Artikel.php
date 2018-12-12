<?php 

class Artikel extends CI_Model
    {
	
	private $_table = "ars_artikel";

    public $id_artikel;
    public $judul;
    public $penulis;
    public $isi;
    public $tgl_awal;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function get_last_3()
    {
                    $this->db->order_by('id_artikel',"DESC");
            $query = $this->db->get('ars_artikel', 3);
                    
            return $query->result();
    }

    }

 ?>
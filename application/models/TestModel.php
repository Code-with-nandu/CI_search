<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class TestModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function set($key)
    {
        $this->db->select('*');
        $this->db->like('name',$key);
        $this->db->or_like('description',$key);
        $this->db->or_like('price',$key);
        $this->db->or_like('stock',$key);
        return $this ->db->get('products')->result();
        
    }
}

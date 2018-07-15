<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
    public function insert($startup){
        $this->db->insert('startup', $startup);
    }
}
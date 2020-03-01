<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class DokterM extends CI_Model {

    public function getDokter()
    {
        return $this->db->get('dokter')->result_array();
    }

}

/* End of file DokterM.php */

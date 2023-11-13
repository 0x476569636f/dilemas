<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_datasiswa extends CI_Model {
    public function getSiswaByLoggedID() {
        $loggedID = $this->session->userdata('id_siswa');

        $this->db->where('id_siswa', $loggedID);
        $query = $this->db->get('tbl_siswa');

        if ($query->num_rows() > 0) {
            return $query->row(); 
        } else {
            return false; 
        }
    }
}



/* End of file m_datasiswa.php */

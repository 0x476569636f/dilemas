<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Datasiswa extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Data Siswa',
            'content' => 'siswa/v_datasiswa'
        );

        $this->load->view('siswa/layout/wrapper', $data);
    }
}


/* End of file Datasiswa.php */

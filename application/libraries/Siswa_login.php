<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('m_siswaauth');
    }

    public function login($nis, $password)
    {
        $cek = $this->ci->m_siswaauth->siswa_login($nis, $password);
        if ($cek){
            $nama_siswa = $cek->nama_siswa;
            $nis_siswa = $cek->nis_siswa;
            $kelas = $cek->kelas;
            $nisn_siswa = $cek->nisn_siswa;
            $tempat_lahir = $cek->tempat_lahir;
            $tgl_lahir = $cek->tgl_lahir;
            $jenis_kelamin = $cek->jenis_kelamin;
            $agama = $cek->agama;
            $anak_ke = $cek->anak_ke;
            $alamat = $cek->alamat;
            $no_telp = $cek->no_telp;
            $email = $cek->email;
            $asal_sekolah = $cek->asal_sekolah;
            $no_ijazah = $cek->no_ijazah;
            $thn_masuk = $cek->thn_masuk;
            $foto_siswa = $cek->foto_siswa;

            // membuat session
            $this->ci->session->set_userdata('nama_siswa', $nama_siswa);
            $this->ci->session->set_userdata('nis_siswa', $nis_siswa);
            $this->ci->session->set_userdata('kelas', $kelas);
            $this->ci->session->set_userdata('nisn_siswa', $nisn_siswa);
            $this->ci->session->set_userdata('tempat_lahir', $tempat_lahir);
            $this->ci->session->set_userdata('tgl_lahir', $tgl_lahir);
            $this->ci->session->set_userdata('jenis_kelamin', $jenis_kelamin);
            $this->ci->session->set_userdata('agama', $agama);
            $this->ci->session->set_userdata('anak_ke', $anak_ke);
            $this->ci->session->set_userdata('alamat', $alamat);
            $this->ci->session->set_userdata('no_telp', $no_telp);
            $this->ci->session->set_userdata('email', $email);
            $this->ci->session->set_userdata('asal_sekolah', $asal_sekolah);
            $this->ci->session->set_userdata('no_ijazah', $no_ijazah);
            $this->ci->session->set_userdata('thn_masuk', $thn_masuk);
            $this->ci->session->set_userdata('foto_siswa', $foto_siswa);
            redirect('siswa');
        } else {
            $this->ci->session->set_flashdata('error', 'NIS Atau Password Salah');
            redirect('siswaauth/siswa_login'); 
        }
    }

    public function proteksi_halaman()
    {
        if ($this->ci->session->userdata('nis_siswa') == '') {
            $this->ci->session->set_flashdata('error', 'Anda Belum Login');
            redirect('siswaauth/siswa_login'); 
        }
    }

    public function logout(){
        $this->ci->session->unset_userdata('nama_siswa');
        $this->ci->session->unset_userdata('nis_siswa');
        $this->ci->session->unset_userdata('kelas');
        $this->ci->session->unset_userdata('nisn_siswa');
        $this->ci->session->unset_userdata('tgl_lahir');
        $this->ci->session->unset_userdata('jenis_kelamin');
        $this->ci->session->unset_userdata('agama');
        $this->ci->session->unset_userdata('anak_ke');
        $this->ci->session->unset_userdata('alamat');
        $this->ci->session->unset_userdata('no_telp');
        $this->ci->session->unset_userdata('email');
        $this->ci->session->unset_userdata('asal_sekolah');
        $this->ci->session->unset_userdata('no_ijazah');
        $this->ci->session->unset_userdata('thn_masuk');
        $this->ci->session->unset_userdata('foto_siswa');
        $this->ci->session->set_flashdata('pesan', 'Anda Berhasil Logout !');
        redirect('siswaauth/siswa_login'); 
    }

}

/* End of file Siswa_login.php */

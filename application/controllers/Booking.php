<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DokterM');
        $this->load->model('BookingM');
    }

    public function index()
    {
        $data = [
            'title' => 'Booking',
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'dokter' => $this->DokterM->getDokter(),
            'booking' => $this->BookingM->getBooking()
        ];
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/topbar');
        $this->load->view('pasien/booking');
        $this->load->view('layout/footer');
    }

    public function getJamList()
    {
        $tanggal = $this->input->post('tanggal');
        $jam = $this->input->post('jam_masuk');
        $dokter = $this->input->post('dokter');
        $hasil = $this->BookingM->getfalseJam($dokter, $tanggal, $jam);
        if($jam){
            if ($hasil) {
                echo json_encode('false');
            }else {
                $data = [
                    'id_dokter' => $dokter,
                    'pasien' => $this->input->post('nama'),
                    'tanggal_booking' => $tanggal,
                    'jam_masuk' => $jam,
                    'jam_keluar' => $this->input->post('jam_keluar'),
                    'keluhan' => $this->input->post('keluhan'),
                ];
                $this->db->insert('booking', $data);
                echo json_encode('true');
            }
        }
    }
}

/* End of file Booking.php */

<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class BookingM extends CI_Model {

    public function getBooking()
    {
        return $this->db->get('booking')->result();
    }

    public function getAllBookingDetail()
    {
        $this->db->select('booking.*, dokter.nama_dokter');
        $this->db->from('booking');
        $this->db->join('user', 'booking.pasien = user.nama_lengkap', 'left');
        $this->db->join('dokter', 'booking.id_dokter = dokter.id', 'left');
        $this->db->order_by('tanggal_booking', 'asc');
        
        return $this->db->get()->result_array();
    }

    public function getFalseJam($dokter, $tanggal, $jam)
    {
        $this->db->select('jam_masuk');
        $this->db->from('booking');
        $this->db->where('id_dokter', $dokter);
        $this->db->where('tanggal_booking', $tanggal);
        $this->db->where('jam_masuk', $jam);
        return $this->db->get()->result_array();
    }

    public function insertData($data)
    {
        $this->db->insert('booking', $data);
    }

    public function getBookingByPasien($email)
    {
        $this->db->select('booking.*, dokter.nama_dokter');
        $this->db->from('booking');
        $this->db->join('user', 'booking.pasien = user.nama_lengkap', 'left');
        $this->db->join('dokter', 'booking.id_dokter = dokter.id', 'left');
        $this->db->where('user.email', $email);
        return $this->db->get()->result_array();
    }

}

/* End of file BookingM.php */

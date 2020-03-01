<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('BookingM');
    }
    
    public function index()
    {
        $data = [
            'title' => 'Admin Page',
            'booking_list' => $this->BookingM->getAllBookingDetail(),
        ];
        $this->load->view('admin', $data);
    }

}

/* End of file Admin.php */

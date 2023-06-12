<?php

class Dashboard extends CI_Controller {
    public function index() {
        $this->load->model('rental_model'); // Load the rental_model
        $total_cars_available = $this->rental_model->get_data('mobil')->num_rows();
        $total_accounts = $this->rental_model->get_data('customer')->num_rows();
        $total_transaksi = $this->rental_model->get_data('transaksi')->num_rows();
        $data = array(
            'total_cars_available' => $total_cars_available,
            'total_accounts' => $total_accounts,
            'total_transaksi' => $total_transaksi
        );
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard', $data); // Pass the data to the dashboard view
        $this->load->view('templates_admin/footer');
    }
}

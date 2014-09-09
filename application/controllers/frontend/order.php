<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Order extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class="text-error">', '</p>');
        $this->load->model('frontend/order_model');
    }

    public function index() {
        $this->template->frontend('premium');
    }

    public function basic() {

        if ($this->input->post() == NULL) {
            $this->template->frontend('basic');
        } else {
            $validation = $this->form_validation;
            //if ($validation->run() == TRUE) {
            //echo 'OK';
            //print_r($data);
            $result = $this->order_model->insert_invitation_basic();
            if ($result) {
                redirect('order/succes');
            } else {
                echo 'Data yang anda masukkan salah';
            }
            
        }
    }

    public function reguler() {


        if ($this->input->post() == NULL) {
            $this->template->frontend('reguler');
        } else {
            $validation = $this->form_validation;

            $result = $this->order_model->insert_invitation_reguler();
            if ($result) {
                redirect('order/succes');
            } else {
                echo 'Data yang anda masukkan salah';
            }
        }
    }

    public function premium() {
        if ($this->input->post() == NULL) {
            $this->template->frontend('premium');
        } else {
            $validation = $this->form_validation;

            $result = $this->order_model->insert_invitation_premium();
            if ($result) {
                redirect('order/succes');
            } else {
                echo 'Data yang anda masukkan salah';
            }
        }
    }
 public function succes() {
        $this->template->frontend('succes');
    }
}


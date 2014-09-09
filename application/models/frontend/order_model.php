<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Order_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function insert_invitation_basic() {
        $customer_id = customer_id();
        $invitation_id = invitation_id();
        $order_id = order_id();
        $payment_id = payment_id();
        //echo $order_id;
        $data = array(
            'customer_id' => $customer_id,
            'customer_name' => $this->input->post('namalengkap'),
            'customer_address' => $this->input->post('alamat'),
            'customer_email' => $this->input->post('email'),
            'customer_phone' => $this->input->post('nomortelfon'),
        );
        $this->db->insert('nm_customers', $data);
        $data = '';
        $data = array(
            'invitation_id' => $invitation_id,
            //data pria
            'invitation_groom_name' => $this->input->post('namalengkappria'),
            'invitation_groom_nick_name' => $this->input->post('namapanggilanpria'),
            'invitation_groom_father_name' => $this->input->post('namaayahpria'),
            'invitation_groom_mother_name' => $this->input->post('namaibupria'),
            //data wanita
            'invitation_bride_name' => $this->input->post('namalengkapwanita'),
            'invitation_bride_nick_name' => $this->input->post('namapanggilanwanita'),
            'invitation_bride_father_name' => $this->input->post('namaayahwanita'),
            'invitation_bride_mother_name' => $this->input->post('namaibuwanita'),
            //info akad 
            'invitation_message' => $this->input->post('ucapan'),
            'invitation_date' => $this->input->post('tanggalnikah'),
            'invitation_time' => $this->input->post('waktunikah'),
            'invitation_address' => $this->input->post('alamatnikah'),
            'invitation_reception_date' => $this->input->post('tanggalresepsi'),
            'invitation_reception_time' => $this->input->post('wakturesepsi'),
            'invitation_reception_address' => $this->input->post('alamatresepsi'),
            'invitation_photos' => $this->input->post('image'),
        );
        $this->db->insert('nm_invitations', $data);
        $data = '';
        $data = array(
            'payment_id' => $payment_id,
            'payment_date' => date('Y-m-d'),
            'payment_status' => 0,
            'payment_total' => 500000,
        );
        $this->db->insert('nm_payments', $data);
        $data = '';
        $data = array(
            'order_id' => $order_id,
            'invitation_id' => $invitation_id,
            'customer_id' => $customer_id,
            'payment_id' => $payment_id,
            'package_id' => $this->input->post('package'),
            'order_date' => date('Y-m-d'),
        );
        return $this->db->insert('nm_orders', $data);
    }


function insert_invitation_reguler() {
    $customer_id = customer_id();
    $invitation_id = invitation_id();
    $order_id = order_id();
    $payment_id = payment_id();
    $data = array(
        'customer_id' => $customer_id,
        'customer_name' => $this->input->post('namalengkap'),
        'customer_address' => $this->input->post('alamat'),
        'customer_email' => $this->input->post('email'),
        'customer_phone' => $this->input->post('nomortelfon'),
    );
    $this->db->insert('nm_customers', $data);
    $data = '';
    $data = array(
        'invitation_id' => $invitation_id,
        //data pria
        'invitation_groom_name' => $this->input->post('namalengkappria'),
        'invitation_groom_nick_name' => $this->input->post('namapanggilanpria'),
        'invitation_groom_father_name' => $this->input->post('namaayahpria'),
        'invitation_groom_mother_name' => $this->input->post('namaibupria'),
        //data wanita
        'invitation_bride_name' => $this->input->post('namalengkapwanita'),
        'invitation_bride_nick_name' => $this->input->post('namapanggilanwanita'),
        'invitation_bride_father_name' => $this->input->post('namaayahwanita'),
        'invitation_bride_mother_name' => $this->input->post('namaibuwanita'),
        //info akad 
        'invitation_message' => $this->input->post('ucapan'),
        'invitation_date' => $this->input->post('tanggalnikah'),
        'invitation_time' => $this->input->post('waktunikah'),
        'invitation_address' => $this->input->post('alamatnikah'),
        'invitation_reception_date' => $this->input->post('tanggalresepsi'),
        'invitation_reception_time' => $this->input->post('wakturesepsi'),
        'invitation_reception_address' => $this->input->post('alamatresepsi'),
        'invitation_photos' => $this->input->post('image'),
        //kisah cinta
        'invitation_groom_bio' => $this->input->post('biodatapria'),
        'invitation_bride_bio' => $this->input->post('biodatawanita'),
        'invitation_love_story' => $this->input->post('kisahcinta'),
    );
    $this->db->insert('nm_invitations', $data);
    $data = '';
    $data = array(
        'payment_id' => $payment_id,
        'payment_date' => date('Y-m-d'),
        'payment_status' => 0,
        'payment_total' => 500000,
    );
    $this->db->insert('nm_payments', $data);
    $data = '';
    $data = array(
        'order_id' => $order_id,
        'invitation_id' => $invitation_id,
        'customer_id' => $customer_id,
        'payment_id' => $payment_id,
        'package_id' => $this->input->post('package'),
        'order_date' => date('Y-m-d'),
    );
    return $this->db->insert('nm_orders', $data);
}
function insert_invitation_premium() {
        $customer_id = customer_id();
        $invitation_id = invitation_id();
        $order_id = order_id();
        $payment_id = payment_id();
        $data = array(
            'customer_id' => $customer_id,
            'customer_name' => $this->input->post('namalengkap'),
            'customer_address' => $this->input->post('alamat'),
            'customer_email' => $this->input->post('email'),
            'customer_phone' => $this->input->post('nomortelfon'),
        );
        $this->db->insert('nm_customers', $data);
        $data = '';
        $data = array(
            'invitation_id' => $invitation_id,
            //data pria
            'invitation_groom_name' => $this->input->post('namalengkappria'),
            'invitation_groom_nick_name' => $this->input->post('namapanggilanpria'),
            'invitation_groom_father_name' => $this->input->post('namaayahpria'),
            'invitation_groom_mother_name' => $this->input->post('namaibupria'),
            //data wanita
            'invitation_bride_name' => $this->input->post('namalengkapwanita'),
            'invitation_bride_nick_name' => $this->input->post('namapanggilanwanita'),
            'invitation_bride_father_name' => $this->input->post('namaayahwanita'),
            'invitation_bride_mother_name' => $this->input->post('namaibuwanita'),
            
            //info akad 
            'invitation_message' => $this->input->post('ucapan'),
            'invitation_date' => $this->input->post('tanggalnikah'),
            'invitation_time' => $this->input->post('waktunikah'),
            'invitation_address' => $this->input->post('alamatnikah'),
            'invitation_reception_date' => $this->input->post('tanggalresepsi'),
            'invitation_reception_time' => $this->input->post('wakturesepsi'),
            'invitation_reception_address' => $this->input->post('alamatresepsi'),
            'invitation_photos' => $this->input->post('image'),
            //kisah cinta
            'invitation_groom_bio' => $this->input->post('biodatapria'),
            'invitation_bride_bio' => $this->input->post('biodatawanita'),
            'invitation_love_story' => $this->input->post('kisahcinta'),
        );
        $this->db->insert('nm_invitations', $data);
        $data = '';
        $data = array(
            'payment_id' => $payment_id,
            'payment_date' => date('Y-m-d'),
            'payment_status' => 0,
            'payment_total' => 500000,
        );
        $this->db->insert('nm_payments', $data);
        $data = '';
        $data = array(
            'order_id' => $order_id,
            'invitation_id' => $invitation_id,
            'customer_id' => $customer_id,
            'payment_id' => $payment_id,
            'package_id' => $this->input->post('package'),
            'order_date' => date('Y-m-d'),
        );
        return $this->db->insert('nm_orders', $data);
    }
}

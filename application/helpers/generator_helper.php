<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('generator')) {

    function customer_id() {
        $table = 'nm_customers';
        $field = 'customer_id';
        $format = 'C';
        $CI = & get_instance();
        $CI->load->database();
        $CI->db->select_max($field, 'max');
        $query = $CI->db->get($table);
        foreach ($query->result() as $value) {
            $id = $value->max;
        }
        $id = (int) substr($id, 1, 3);
        $id++;
        $id = $format . sprintf('%03s', $id);
        return $id;
    }
    
    function invitation_id() {
        $table = 'nm_invitations';
        $field = 'invitation_id';
        $format = 'I';
        $CI = & get_instance();
        $CI->load->database();
        $CI->db->select_max($field, 'max');
        $query = $CI->db->get($table);
        foreach ($query->result() as $value) {
            $id = $value->max;
        }
        $id = (int) substr($id, 1, 3);
        $id++;
        $id = $format . sprintf('%03s', $id);
        return $id;
    }

    function order_id() {
        $table = 'nm_orders';
        $field = 'order_id';
        $format = 'O';
        $CI = & get_instance();
        $CI->load->database();
        $CI->db->select_max($field, 'max');
        $query = $CI->db->get($table);
        foreach ($query->result() as $value) {
            $id = $value->max;
        }
        $id = (int) substr($id, 7, 3);
        $id++;
        $id = $format . date('dmy') . sprintf('%03s', $id);
        return $id;
    }
    
    function payment_id() {
        $table = 'nm_payments';
        $field = 'payment_id';
        $format = 'P';
        $CI = & get_instance();
        $CI->load->database();
        $CI->db->select_max($field, 'max');
        $query = $CI->db->get($table);
        foreach ($query->result() as $value) {
            $id = $value->max;
        }
        $id = (int) substr($id, 7, 3);
        $id++;
        $id = $format . date('His') . sprintf('%03s', $id);
        return $id;
    }

}

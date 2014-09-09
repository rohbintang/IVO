<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Customer_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function count($keyword, $field) {
        if ($keyword) {
            $this->db->like($field, $keyword);
        }
        return $this->db->count_all_results('nm_customers');
    }

    function view($keyword = NULL, $field = NULL, $value, $offset) {
        $this->db->limit($value, $offset);
        if ($keyword != NULL) {
            $this->db->like($field, $keyword);
        }
        return $this->db->get('nm_customers');
    }

    function detail($id) {
        $this->db->select('*');
        $this->db->from('nm_customers');
        $this->db->join('nm_orders', 'nm_orders.customer_id=nm_customers.customer_id');
        $this->db->join('nm_payments', 'nm_payments.payment_id=nm_orders.payment_id');
        $this->db->join('nm_invitations', 'nm_orders.invitation_id=nm_invitations.invitation_id');
        $this->db->where('nm_customers.customer_id', $id);
        return $this->db->get();
    }
    
    function del($id) {
        $this->db->where('customer_id', $id);
        $this->db->delete('nm_customers');
    }

}
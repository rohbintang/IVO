<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Order_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function count_all($status = NULL) {
        $this->db->from('nm_orders');
        $this->db->join('nm_payments', 'nm_payments.payment_id=nm_orders.payment_id');
        if ($status != NULL) {
            $this->db->where('nm_payments.payment_status', $status);
        }
        return $this->db->count_all_results();
    }

    function count($keyword, $field) {
        $this->db->select('*');
        $this->db->from('nm_orders');
        $this->db->join('nm_customers', 'nm_orders.customer_id=nm_customers.customer_id');
        $this->db->join('nm_packages', 'nm_orders.package_id=nm_packages.package_id');
        if ($keyword) {
            $this->db->like($field, $keyword);
        }
        return $this->db->count_all_results();
    }

    function view($keyword, $field, $value, $offset) {
        $this->db->select('*');
        $this->db->from('nm_orders');
        $this->db->join('nm_customers', 'nm_orders.customer_id=nm_customers.customer_id');
        $this->db->join('nm_packages', 'nm_orders.package_id=nm_packages.package_id');
        $this->db->limit($value, $offset);
        if ($keyword != NULL) {
            $this->db->like($field, $keyword);
        }
        return $this->db->get();
    }

    function detail($id) {
        $this->db->select('*');
        $this->db->from('nm_orders');
        $this->db->join('nm_customers', 'nm_customers.customer_id=nm_orders.customer_id');
        $this->db->join('nm_payments', 'nm_payments.payment_id=nm_orders.payment_id');
        $this->db->join('nm_packages', 'nm_packages.package_id=nm_orders.package_id');
        $this->db->where('nm_orders.order_id', $id);
        return $this->db->get();
    }

    function report($start, $end) {
        //return $query = $this->db->query("SELECT * FROM `nm_orders` WHERE `order_date` BETWEEN '$start' AND '$end'");
        $this->db->select('*');
        $this->db->from('nm_orders');
        $this->db->join('nm_customers', 'nm_customers.customer_id=nm_orders.customer_id');
        $this->db->join('nm_payments', 'nm_payments.payment_id=nm_orders.payment_id');
        $this->db->join('nm_packages', 'nm_packages.package_id=nm_orders.package_id');
        $this->db->where('nm_orders.order_date >=', $start);
        $this->db->where('nm_orders.order_date <=', $end);
        return $this->db->get();
    }

    function total($start, $end) {
        $this->db->select_sum('total');
        $this->db->from('nm_orders');
        $this->db->join('nm_customers', 'nm_customers.customer_id=nm_orders.customer_id');
        $this->db->join('nm_payments', 'nm_payments.payment_id=nm_orders.payment_id');
        $this->db->join('nm_packages', 'nm_packages.package_id=nm_orders.package_id');
        $this->db->where('nm_orders.order_date >=', $start);
        $this->db->where('nm_orders.order_date <=', $end);
        return $this->db->get();
    }

}
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Invitation_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function view() {
        return $this->db->get('nm_invitations');
    }
    
    function get($id) {
        $this->db->where('invitation_id', $id);
        return $this->db->get('nm_invitations');
    }
    
    function edit($id, $data) {
        $this->db->where('invitation_id', $id);
        return $this->db->update('nm_invitations', $data);
    }
    
    function del($id) {
        $this->db->where('invitation_id', $id);
        $this->db->delete('nm_invitations');
    }

}
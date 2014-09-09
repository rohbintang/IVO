<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Authentication {

    var $CI;
    var $user_table = 'nm_users';

    function login($user_username = '', $user_password = '') {
        $this->CI = & get_instance();
        if ($user_username == '' OR $user_password == '')
            return false;
        //Check if already logged in
        if ($this->CI->session->userdata('user_username') == $user_username)
            return true;
        //Check against user table
        $this->CI->db->where('user_username', $user_username);
        $query = $this->CI->db->get_where($this->user_table);
        if ($query->num_rows() > 0) {
            $user_data = $query->row_array();
            $user_password = md5($user_password);
            if ($user_password != $user_data['user_password'])
                return false;
            //Destroy old session
            $this->CI->session->sess_destroy();
            //Create a fresh, brand new session
            $this->CI->session->sess_create();
            //Set session data
            $user_data['user_username'] = $user_data['user_username']; // for compatibility with Simplelogin
            $user_data['user_id'] = $user_data['user_id']; // for compatibility with Simplelogin
            $user_data['logged_in'] = true;
            $this->CI->session->set_userdata($user_data);
            return true;
        }
        else {
            return false;
        }
    }

    function logout() {
        $this->CI = & get_instance();
        $this->CI->session->sess_destroy();
    }

}

?>

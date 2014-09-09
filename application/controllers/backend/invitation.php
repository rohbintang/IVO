<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Invitation extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('dashboard/login');
        }
        $this->load->model('backend/invitation_model');
    }

    public function index() {
        $this->view();
    }

    public function view() {
        $data['title'] = 'View Invitations';
        $data['invitations'] = $this->invitation_model->view();
        $this->template->backend('invitations', $data);
    }

    public function detail($id = NULL) {
        $data['id'] = $id;
        if (!$this->input->post()) {
            $result = $this->invitation_model->get($id);
            if ($result->num_rows() == 1) {
                foreach ($result->result() as $value) {
                    $data['id'] = $value->invitation_id;
                    $data['groom_name'] = $value->invitation_groom_name;
                    $data['groom_nick_name'] = $value->invitation_groom_nick_name;
                    $data['groom_father_name'] = $value->invitation_groom_father_name;
                    $data['groom_mother_name'] = $value->invitation_groom_mother_name;
                    $data['bride_name'] = $value->invitation_bride_name;
                    $data['bride_nick_name'] = $value->invitation_bride_nick_name;
                    $data['bride_father_name'] = $value->invitation_bride_father_name;
                    $data['bride_mother_name'] = $value->invitation_bride_mother_name;
                    $data['groom_bio'] = $value->invitation_groom_bio;
                    $data['bride_bio'] = $value->invitation_bride_bio;
                    $data['love_story'] = $value->invitation_love_story;
                    $data['message'] = $value->invitation_message;
                    $data['date'] = $value->invitation_date;
                    $data['time'] = $value->invitation_time;
                    $data['address'] = $value->invitation_address;
                    $data['reception_date'] = $value->invitation_reception_date;
                    $data['reception_time'] = $value->invitation_reception_time;
                    $data['reception_address'] = $value->invitation_reception_address;
                    $data['photos'] = $value->invitation_photos;
                    $data['url'] = $value->invitation_url;
                }
                $data['title'] = 'Invitation Detail';
                $this->template->backend('invitation_detail', $data);
            } else {
                redirect('dashboard/invitation');
            }
        } else {
            redirect('dashboard/invitation');
        }
    }

    function edit($id) {
        $data['invitation_url'] = $this->input->post('url');
        $this->invitation_model->edit($id, $data);
        redirect('dashboard/invitation/detail/' . $id);
    }

    public function del($id) {
        if ($id) {
            $this->invitation_model->del($id);
            redirect('dashboard/invitation');
        } else {
            redirect('dashboard/invitation');
        }
    }

}
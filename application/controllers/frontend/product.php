<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->template->frontend('product');
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: hermawan
 * Date: 7/29/2018
 * Time: 11:55 PM
 */

class Backend extends Back_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Post_model');
    }

    public function index()
    {
        $data = [
            // 'js' => ['post/post_js']
        ];

        $this->backend($data, 'backend/home/index');
    }
}
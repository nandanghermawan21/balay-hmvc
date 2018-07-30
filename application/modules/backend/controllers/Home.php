<?php
/**
 * Created by PhpStorm.
 * User: hermawan
 * Date: 7/22/2018
 * Time: 8:50 PM
 */

class Home extends Back_Controller
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
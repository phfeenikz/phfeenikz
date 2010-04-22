<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends Controller {

    function Posts() {
        parent::Controller();
        $this->load->database();
        $this->load->helper('common');
    }

    function index() {
        $data['title']             = "Twittrnator";
        $data['heading']           = "Recent Posts";
        $data['validation_errors'] = array();
        $this->load->model('Posts_model');
        $data['posts'] = $this->Posts_model->get_recent_posts()->result_array();
        $this->load->library('form_validation');
<<<<<<< HEAD:html/system/application/controllers/posts.php

<<<<<<< HEAD:html/system/application/controllers/posts.php
        $config = array(
            'username' => 'required|regex[password]',
            'password' => 'required|regex[username]',
        );

        $this->load->library('form_validation');
        $validation = $this->form_validation->validate($config, $errors);
        if ( $errors == TRUE ){
            $data['validation_errors'] = $errors;
        }

=======
        if ($this->form_validation->run('login') == FALSE) {
            view_wrapper('posts_view', $data);
        }
=======
        $this->form_validation->run('login');
>>>>>>> Adding form validation stuffs.:html/system/application/controllers/posts.php
        view_wrapper('posts_view', $data);
>>>>>>> Adding form validation stuffs.:html/system/application/controllers/posts.php
    }

    function comments() {
        echo 'Look at this!';
    }
}

/* End of file posts.php */
/* Location: ./system/application/controllers/posts.php */

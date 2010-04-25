<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends Controller {

    function Posts() {
        parent::Controller();
        $this->load->database();
        $this->load->helper('common');
    }

    function index() {
        $data['title'] = "Twittrnator";
        $data['heading'] = "Recent Posts";

        $this->load->model('Posts_model');
        $data['posts'] = $this->Posts_model->get_recent_posts()->result_array();
        $this->load->library('form_validation');

        $config =  array(
            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|regex[username]',
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|regex[password]',
            )
        );

        $this->form_validation->set_rules($config);
        $this->form_validation->run();
        $data['validation_errors'] = validation_errors();

        view_wrapper('posts_view', $data);
    }

    function comments() {
        echo 'Look at this!';
    }
}

/* End of file posts.php */
/* Location: ./system/application/controllers/posts.php */

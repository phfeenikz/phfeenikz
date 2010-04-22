<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
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

        if ($this->form_validation->run('login') == FALSE) {
            view_wrapper('posts_view', $data);
        }
    }

    function comments() {
        echo 'Look at this!';
    }
}

/* End of file posts.php */
/* Location: ./system/application/controllers/posts.php */
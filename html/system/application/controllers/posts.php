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
        $data['success']           = 0;

        $this->load->model('Posts_model');
        $data['posts'] = $this->Posts_model->get_recent_posts()->result_array();

        $config = array(
            'username' => 'required|regex[password]',
            'password' => 'required|regex[username]',
        );

        $this->load->library('form_validation');
        $validation = $this->form_validation->validate($config, $errors);
        if ( $errors == TRUE ){
            $data['validation_errors'] = $errors;
        }

        $validator = $this->form_validation->validate($config);

        if ($validator->has_errors){
            $data['validation_errors'] = $validator->errors;
        }
        else {
            $valid = $validator->valid;
            if ($valid['username'] && $valid['password']) {
                $data['success'] = "Login successful!";
            }
        }
        view_wrapper('posts_view', $data);
    }
}

/* End of file posts.php */
/* Location: ./system/application/controllers/posts.php */

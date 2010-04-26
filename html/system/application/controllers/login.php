<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Login extends Controller {

    function index() {
        $config = array(
            'username' => 'required|regex[password]',
            'password' => 'required|regex[username]',
        );

        $this->load->library('form_validation');
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

/* End of file login.php */
/* Location: ./system/application/controllers/login.php */

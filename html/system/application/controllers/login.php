<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Login extends Controller {

    function index() {
        $this->load->library('form_validation');

        $this->form_validation->run('login');

    }
}

/* End of file login.php */
/* Location: ./system/application/controllers/login.php */

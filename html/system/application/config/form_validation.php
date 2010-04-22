<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$config = array(
    'login' => array(
        array(
            'field' => 'username',
            'label' => 'Username',
<<<<<<< HEAD:html/system/application/config/form_validation.php
            'rules' => 'required|min_length[6]|max_length[16]|regex[/^\d*$/]',
=======
            'rules' => 'required|regex[username]',
>>>>>>> Adding form validation stuffs.:html/system/application/config/form_validation.php
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
<<<<<<< HEAD:html/system/application/config/form_validation.php
            'rules' => 'required|min_length[6]|max_length[16]|regex[/^\d*$/]',
=======
            'rules' => 'required|regex[password]',
>>>>>>> Adding form validation stuffs.:html/system/application/config/form_validation.php
        )
    )
);

/* End of file form_validation.php */
/* Location: ./system/application/config/form_validation.php */
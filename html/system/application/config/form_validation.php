<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$xconfig = array(
    'login' => array(
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
    )
);

/* End of file form_validation.php */
/* Location: ./system/application/config/form_validation.php */
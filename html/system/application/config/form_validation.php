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
            'rules' => 'required|min_length[6]|max_length[16]|regex[/^\d*$/]',
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|min_length[6]|max_length[16]|regex[/^\d*$/]',
        )
    )
);

/* End of file form_validation.php */
/* Location: ./system/application/config/form_validation.php */
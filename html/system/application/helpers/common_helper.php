<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function view_wrapper($view,$data) {
    $obj = new Controller();
    $obj->load->view('common/header_view', $data);
    $obj->load->view($view, $data);
    $obj->load->view('common/footer_view', $data);
}

/* End of file common_helper.php */
/* Location: ./system/application/helpers/common_helper.php */
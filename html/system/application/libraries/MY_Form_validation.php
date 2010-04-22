<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class MY_Form_validation extends CI_Form_validation {

    function regex($str, $name) {
        $CI =& get_instance();
        $CI->load->helper('params');

        $params  = get_params();
        $pattern = $params[$name];

        return preg_match('/' . $pattern . '/', $str) ? TRUE : FALSE;
    }
}
/* End of file MY_Form_validation.php */
/* Location: ./application/libraries/MY_Form_validation.php */

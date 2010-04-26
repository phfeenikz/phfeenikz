<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {

    function regex($str, $name) {
        $CI =& get_instance();
        $CI->load->helper('params');

        $params  = get_params();
        $pattern = $params[$name];

        return preg_match('/' . $pattern . '/', $str) ? TRUE : FALSE;
    }

    function validate( $in_config = '', &$errors = '' ) {

        if ( ! is_array($in_config) ) {
            return FALSE;
        }

        $CI =& get_instance();
        $config = array();
        foreach ( $in_config as $name => $rules ) {
            $field = array(
                'field' => $name,
                'label' => ucfirst($name),
                'rules' => $rules,
            );
            $config[] = $field;
        }

        $CI->form_validation->set_rules($config);
        $CI->form_validation->run();

        $valid   = array();
        $invalid = array();
        $errors  = array();

        if ( validation_errors() ){
            $errors = $CI->form_validation->_error_array;
            foreach( $in_config as $name => $rules ) {
                if ( array_key_exists( $name, $errors) ) {
                    array_push( $invalid, $name );
                }
                else {
                    array_push( $valid, $name );
                }
            }
        }
        else {
            return TRUE;
        }
    }
}
/* End of file MY_Form_validation.php */
/* Location: ./application/libraries/MY_Form_validation.php */
